<?php
/*
 *
 * - PopojiCMS Admin File
 *
 * - File : admin_perangkat_daerah.php
 * - Version : 1.0
 * - Author : Jenuar Dalapang
 * - License : MIT License
 *
 *
 * Ini adalah file php yang di gunakan untuk menangani proses admin pada halaman perangkat_daerah.
 * This is a php file for handling admin process for perangkat_daerah page.
 *
*/

/**
 * Fungsi ini digunakan untuk mencegah file ini diakses langsung tanpa melalui router.
 *
 * This function use for prevent this file accessed directly without going through a router.
 *
*/
if (!defined('CONF_STRUCTURE')) {
	header('location:index.html');
	exit;
}

/**
 * Fungsi ini digunakan untuk mencegah file ini diakses langsung tanpa login akses terlebih dahulu.
 *
 * This function use for prevent this file accessed directly without access login first.
 *
*/
if (empty($_SESSION['namauser']) AND empty($_SESSION['passuser']) AND $_SESSION['login'] == 0) {
	header('location:index.php');
	exit;
}

class perangkat_daerah extends PoCore
{

	/**
	 * Fungsi ini digunakan untuk menginisialisasi class utama.
	 *
	 * This function use to initialize the main class.
	 *
	*/
	function __construct()
	{
		parent::__construct();
	}

	/**
	 * Fungsi ini digunakan untuk menampilkan halaman index perangkat_daerah.
	 *
	 * This function use for index perangkat_daerah page.
	 *
	*/
	public function index()
	{
		if (!$this->auth($_SESSION['leveluser'], 'perangkat_daerah', 'read')) {
			echo $this->pohtml->error();
			exit;
		}
		?>
		<div class="block-content">
			<div class="row">
				<div class="col-md-12">
					<?=$this->pohtml->headTitle('perangkat_daerah', '
						<div class="btn-title pull-right">
							<a href="admin.php?mod=perangkat_daerah&act=addnew" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> '.$GLOBALS['_']['addnew'].'</a>
						</div>
					');?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<?=$this->pohtml->formStart(array('method' => 'post', 'action' => 'route.php?mod=perangkat_daerah&act=multidelete', 'autocomplete' => 'off'));?>
						<?=$this->pohtml->inputHidden(array('name' => 'totaldata', 'value' => '0', 'options' => 'id="totaldata"'));?>
						<?php
							$columns = array(
								array('title' => 'Id', 'options' => 'style="width:30px;"'),
								array('title' => 'nama_singkat', 'options' => ''),
								array('title' => 'Kategori', 'options' => ''),
								array('title' => 'Email', 'options' => ''),
								array('title' => 'Telp', 'options' => ''),
								array('title' => 'Website', 'options' => ''),
								array('title' => 'Alamat', 'options' => ''),
								array('title' => 'Deskripsi', 'options' => ''),
								array('title' => 'Action', 'options' => 'class="no-sort" style="width:50px;"')
							);
						?>
						<?=$this->pohtml->createTable(array('id' => 'table-perangkat_daerah', 'class' => 'table table-striped table-bordered'), $columns, $tfoot = true);?>
					<?=$this->pohtml->formEnd();?>
				</div>
			</div>
		</div>
		<?=$this->pohtml->dialogDelete('perangkat_daerah');?>
		<?php
	}

	/**
	 * Fungsi ini digunakan untuk menampilkan data json pada tabel.
	 *
	 * This function use for display json data in table.
	 *
	*/
	public function datatable()
	{
		if (!$this->auth($_SESSION['leveluser'], 'perangkat_daerah', 'read')) {
			echo $this->pohtml->error();
			exit;
		}
		$table = 'perangkat_daerah';
		$primarykey = 'id';
		$columns = array(
			array('db' => $primarykey, 'dt' => '0', 'field' => $primarykey,
				'formatter' => function($d, $row, $i){
					return "<div class='text-center'>
						<input type='checkbox' id='titleCheckdel' />
						<input type='hidden' class='deldata' name='item[".$i."][deldata]' value='".$d."' disabled />
					</div>";
				}
			),
			array('db' => $primarykey, 'dt' => '1', 'field' => $primarykey),
			array('db' => 'nama_singkat', 'dt' => '2', 'field' => 'nama_singkat'),
			array('db' => 'b.namakategori', 'dt' => '3', 'field' => 'namakategori'),
			array('db' => 'email', 'dt' => '4', 'field' => 'email'),
			array('db' => 'telpon', 'dt' => '5', 'field' => 'telpon'),
			array('db' => 'website', 'dt' => '6', 'field' => 'website'),
			array('db' => 'alamat_kantor', 'dt' => '7', 'field' => 'alamat_kantor'),
			array('db' => 'deskripsi', 'dt' => '8', 'field' => 'deskripsi'),
			array('db' => $primarykey, 'dt' => '9', 'field' => $primarykey,
				'formatter' => function($d, $row, $i){
					return "<div class='text-center'>
						<div class='btn-group btn-group-xs'>
							<a href='admin.php?mod=perangkat_daerah&act=edit&id=".$d."' class='btn btn-xs btn-default' id='".$d."' data-toggle='tooltip' title='{$GLOBALS['_']['action_1']}'><i class='fa fa-pencil'></i></a>
							<a class='btn btn-xs btn-danger alertdel' id='".$d."' data-toggle='tooltip' title='{$GLOBALS['_']['action_2']}'><i class='fa fa-times'></i></a>
						</div>
					</div>";
				}
			),
		);
		$joinquery = "FROM perangkat_daerah AS a JOIN katperangkatdaerah AS b ON (b.idkategori = a.idkategori)";
		echo json_encode(SSP::simple($_POST, $this->poconnect, $table, $primarykey, $columns, $joinquery));

	}

	/**
	 * Fungsi ini digunakan untuk menampilkan dan memproses halaman tambah perangkat_daerah.
	 *
	 * This function is used to display and process add perangkat_daerah page.
	 *
	*/
	public function addnew()
	{
		if (!$this->auth($_SESSION['leveluser'], 'perangkat_daerah', 'create')) {
			echo $this->pohtml->error();
			exit;
		}
		if (!empty($_POST)) {
			$perangkat_daerah = array(
				'nama_singkat' => $this->postring->valid($_POST['nama_singkat'], 'xss'),
				'nama_panjang' => $this->postring->valid($_POST['nama_panjang'], 'xss'),
				'seourl' => $this->postring->seo_title($this->postring->valid($_POST['nama_singkat'], 'xss')),
				'idkategori' => $this->postring->valid($_POST['idkategori'], 'xss'),
				'email' => $this->postring->valid($_POST['email'], 'xss'),
				'telpon' => $this->postring->valid($_POST['telpon'], 'xss'),
				'website' => $this->postring->valid($_POST['website'], 'xss'),
				'web' => $this->postring->valid($_POST['web'], 'xss'),
				'alamat_kantor' => $this->postring->valid($_POST['alamat_kantor'], 'xss'),
				'deskripsi' => stripslashes(htmlspecialchars($_POST['deskripsi'],ENT_QUOTES)),
				
			);
			$query = $this->podb->insertInto('perangkat_daerah')->values($perangkat_daerah);
			$query->execute();
			$this->poflash->success('perangkat_daerah has been successfully added', 'admin.php?mod=perangkat_daerah');
		}
		?>
		<div class="block-content">
			<div class="row">
				<div class="col-md-12">
					<?=$this->pohtml->headTitle('Add perangkat_daerah');?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<?=$this->pohtml->formStart(array('method' => 'post', 'action' => 'route.php?mod=perangkat_daerah&act=addnew', 'autocomplete' => 'off'));?>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="nama_singkat">Nama Singkat</label>
									<input type="text" name="nama_singkat" class="form-control" id="nama_singkat" value="<?=(isset($_POST['nama_singkat']) ? $_POST['nama_singkat'] : '');?>" placeholder="nama_singkat" />
								</div>
							</div>
							<div class="col-md-8">
								<div class="form-group">
									<label for="nama_panjang">Nama Panjang</label>
									<input type="text" name="nama_panjang" class="form-control" id="nama_panjang" value="<?=(isset($_POST['nama_panjang']) ? $_POST['nama_panjang'] :'');?>" placeholder="nama_panjang" />
								</div>
							</div>
							<div class="col-md-4">
							<div class="input-group">
									<?php
										$kats = $this->podb->from('katperangkatdaerah')
											->orderBy('idkategori DESC')
											->fetchAll();
										echo $this->pohtml->inputSelectNoOpt(array('id' => 'idkategori', 'label' => 'Kategori', 'name' => 'idkategori', 'mandatory' => true));
										foreach($kats as $kat){
											echo '<option value="'.$kat['idkategori'].'">'.$kat['namakategori'].'</option>';
										}
										echo $this->pohtml->inputSelectNoOptEnd();
									?>
									<span class="input-group-btn" style="padding-top:25px !important;">
										<a href="admin.php?mod=gallery&act=addnewalbum" class="btn btn-success"><?=$GLOBALS['_']['addnew'];?></a>
									</span>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="email">Email</label>
									<input type="text" name="email" class="form-control" id="email" value="<?=(isset($_POST['email']) ? $_POST['email'] :'');?>" placeholder="email" />
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="telpon">Telepon</label>
									<input type="text" name="telpon" class="form-control" id="telpon" value="<?=(isset($_POST['telpon']) ? $_POST['telpon'] :'');?>" placeholder="telepon" />
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="website">Website</label>
									<input type="text" name="website" class="form-control" id="website" value="<?=(isset($_POST['website']) ? $_POST['website'] :'');?>" placeholder="website" />
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="alamat">Alamat Kantor</label>
									<input type="text" name="alamat" class="form-control" id="alamat" value="<?=(isset($_POST['alamat_kantor']) ? $_POST['alamat_kantor'] :'');?>" placeholder="Alamat Kantor" />
								</div>
							</div>
							<div class="col-md-12">
                                    <div class="form-group">
                                        <label for="deskripsi">Deskripsi</label>
                                        <textarea name="deskripsi" class="form-control" id="po-wysiwyg" placeholder="Deskripsi" style="width:100%; height:300px;">
                                            <?=(isset($_POST['deskripsi']) ? $_POST['deskripsi'] : '');?>
                                        </textarea>
                                    </div>
                                </div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<?=$this->pohtml->formAction();?>
							</div>
						</div>
					<?=$this->pohtml->formEnd();?>
				</div>
			</div>
		</div>
		<?php
	}

	/**
	 * Fungsi ini digunakan untuk menampilkan dan memproses halaman edit perangkat_daerah.
	 *
	 * This function is used to display and process edit perangkat_daerah.
	 *
	*/
	public function edit()
	{
		if (!$this->auth($_SESSION['leveluser'], 'perangkat_daerah', 'update')) {
			echo $this->pohtml->error();
			exit;
		}
		if (!empty($_POST)) {
			$perangkat_daerah = array(
				'nama_singkat' => $this->postring->valid($_POST['nama_singkat'], 'xss'),
				'nama_panjang' => $this->postring->valid($_POST['nama_panjang'], 'xss'),
				'seourl' => $this->postring->seo_title($this->postring->valid($_POST['nama_singkat'], 'xss')),
				'idkategori' => $this->postring->valid($_POST['idkategori'], 'xss'),
				'email' => $this->postring->valid($_POST['email'], 'xss'),
				'telp' => $this->postring->valid($_POST['telp'], 'xss'),
				'website' => $this->postring->valid($_POST['website'], 'xss'),
				'web' => $this->postring->valid($_POST['web'], 'xss'),
				'alamat_kantor' => $this->postring->valid($_POST['alamat_kantor'], 'xss'),
				'deskripsi' => stripslashes(htmlspecialchars($_POST['deskripsi'],ENT_QUOTES)),
			);
			$query = $this->podb->update('perangkat_daerah')
				->set($perangkat_daerah)
				->where('id', $this->postring->valid($_POST['id'], 'sql'));
			$query->execute();
			$this->poflash->success('perangkat_daerah has been successfully updated', 'admin.php?mod=perangkat_daerah');
		}
		$id = $this->postring->valid($_GET['id'], 'sql');
		$current_perangkat_daerah = $this->podb->from('perangkat_daerah')
			->where('id', $id)
			->limit(1)
			->fetch();
		if (empty($current_perangkat_daerah)) {
			echo $this->pohtml->error();
			exit;
		}
		?>
		<div class="block-content">
			<div class="row">
				<div class="col-md-12">
					<?=$this->pohtml->headTitle('Update Perangkat Daerah');?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<?=$this->pohtml->formStart(array('method' => 'post', 'action' => 'route.php?mod=perangkat_daerah&act=addnew', 'autocomplete' => 'off'));?>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="nama_singkat">Nama Singkat</label>
									<input type="text" name="nama_singkat" class="form-control" id="nama_singkat" value="<?=(isset($_POST['nama_singkat']) ? $_POST['nama_singkat'] : $current_perangkat_daerah['nama_singkat']);?>" placeholder="nama_singkat" />
								</div>
							</div>
							<div class="col-md-8">
								<div class="form-group">
									<label for="nama_panjang">Nama Panjang</label>
									<input type="text" name="nama_panjang" class="form-control" id="nama_panjang" value="<?=(isset($_POST['nama_panjang']) ? $_POST['nama_panjang'] : $current_perangkat_daerah['nama_panjang']);?>" placeholder="nama_panjang" />
								</div>
							</div>
							<div class="col-md-4">
							<div class="input-group">
									<?php
										$kats = $this->podb->from('katperangkatdaerah')
											->orderBy('idkategori DESC')
											->fetchAll();
										echo $this->pohtml->inputSelectNoOpt(array('id' => 'idkategori', 'label' => 'Kategori', 'name' => 'idkategori', 'mandatory' => true));
										foreach($kats as $kat){
											echo '<option value="'.$kat['idkategori'].'">'.$kat['namakategori'].'</option>';
										}
										echo $this->pohtml->inputSelectNoOptEnd();
									?>
									<span class="input-group-btn" style="padding-top:25px !important;">
										<a href="admin.php?mod=gallery&act=addnewalbum" class="btn btn-success"><?=$GLOBALS['_']['addnew'];?></a>
									</span>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="email">Email</label>
									<input type="text" name="email" class="form-control" id="email" value="<?=(isset($_POST['email']) ? $_POST['email'] : $current_perangkat_daerah['email']);?>" placeholder="email" />
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="telpon">Telepon</label>
									<input type="text" name="telpon" class="form-control" id="telpon" value="<?=(isset($_POST['telpon']) ? $_POST['telpon'] : $current_perangkat_daerah['telpon']);?>" placeholder="telepon" />
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="website">Website</label>
									<input type="text" name="website" class="form-control" id="website" value="<?=(isset($_POST['website']) ? $_POST['website'] :$current_perangkat_daerah['website']);?>" placeholder="website" />
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="alamat">Alamat Kantor</label>
									<input type="text" name="alamat" class="form-control" id="alamat" value="<?=(isset($_POST['alamat_kantor']) ? $_POST['alamat_kantor'] :$current_perangkat_daerah['alamat_kantor']);?>" placeholder="Alamat Kantor" />
								</div>
							</div>
							<div class="col-md-12">
                                    <div class="form-group">
                                        <label for="deskripsi">Deskripsi</label>
                                        <textarea name="deskripsi" class="form-control" id="po-wysiwyg" placeholder="Deskripsi" style="width:100%; height:300px;">
                                            <?=(isset($_POST['deskripsi']) ? $_POST['deskripsi'] : $current_perangkat_daerah['deskripsi']);?>);?>
                                        </textarea>
                                    </div>
                                </div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<?=$this->pohtml->formAction();?>
							</div>
						</div>
					<?=$this->pohtml->formEnd();?>
				</div>
			</div>
		</div>
		<?php
	}

	/**
	 * Fungsi ini digunakan untuk menampilkan dan memproses halaman hapus perangkat_daerah.
	 *
	 * This function is used to display and process delete perangkat_daerah page.
	 *
	*/
	public function delete()
	{
		if (!$this->auth($_SESSION['leveluser'], 'perangkat_daerah', 'delete')) {
			echo $this->pohtml->error();
			exit;
		}
		if (!empty($_POST)) {
			$query = $this->podb->deleteFrom('perangkat_daerah')->where('id', $this->postring->valid($_POST['id'], 'sql'));
			$query->execute();
			$this->poflash->success('perangkat_daerah has been successfully deleted', 'admin.php?mod=perangkat_daerah');
		}
	}

	/**
	 * Fungsi ini digunakan untuk menampilkan dan memproses halaman hapus multi perangkat_daerah.
	 *
	 * This function is used to display and process multi delete perangkat_daerah page.
	 *
	*/
	public function multidelete()
	{
		if (!$this->auth($_SESSION['leveluser'], 'perangkat_daerah', 'delete')) {
			echo $this->pohtml->error();
			exit;
		}
		if (!empty($_POST)) {
			$totaldata = $this->postring->valid($_POST['totaldata'], 'xss');
			if ($totaldata != "0") {
				$items = $_POST['item'];
				foreach($items as $item){
					$query = $this->podb->deleteFrom('perangkat_daerah')->where('id', $this->postring->valid($item['deldata'], 'sql'));
					$query->execute();
				}
				$this->poflash->success('perangkat_daerah has been successfully deleted', 'admin.php?mod=perangkat_daerah');
			} else {
				$this->poflash->error('Error deleted perangkat_daerah data', 'admin.php?mod=perangkat_daerah');
			}
		}
	}

}