<?php
/*
 *
 * - PopojiCMS Admin File
 *
 * - File : admin_pendidikandetailsekolah.php
 * - Version : 1.0
 * - Author : Jenuar Dalapang
 * - License : MIT License
 *
 *
 * Ini adalah file php yang di gunakan untuk menangani proses admin pada halaman pendidikandetailsekolah.
 * This is a php file for handling admin process for pendidikandetailsekolah page.
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

class Pendidikandetailsekolah extends PoCore
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
	 * Fungsi ini digunakan untuk menampilkan halaman index pendidikandetailsekolah.
	 *
	 * This function use for index pendidikandetailsekolah page.
	 *
	*/
	public function index()
	{
		if (!$this->auth($_SESSION['leveluser'], 'pendidikandetailsekolah', 'read')) {
			echo $this->pohtml->error();
			exit;
		}
		?>
		<div class="block-content">
			<div class="row">
				<div class="col-md-12">
					<?=$this->pohtml->headTitle('Pendidikandetailsekolah', '
						<div class="btn-title pull-right">
							<a href="admin.php?mod=pendidikandetailsekolah&act=addnew" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> '.$GLOBALS['_']['addnew'].'</a>
						</div>
					');?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<?=$this->pohtml->formStart(array('method' => 'post', 'action' => 'route.php?mod=pendidikandetailsekolah&act=multidelete', 'autocomplete' => 'off'));?>
						<?=$this->pohtml->inputHidden(array('name' => 'totaldata', 'value' => '0', 'options' => 'id="totaldata"'));?>
						<?php
							$columns = array(
								array('title' => 'Id', 'options' => 'style="width:30px;"'),
								array('title' => 'Kategori', 'options' => ''),
								array('title' => 'Nama Sekolah', 'options' => ''),
								array('title' => 'Alamat', 'options' => ''),
								array('title' => 'Kecamatan', 'options' => ''),
								// array('title' => 'Foto', 'options' => ''),
								// array('title' => 'Kepalasekolah', 'options' => ''),
								array('title' => 'Website', 'options' => ''),
								// array('title' => 'Email', 'options' => ''),
								// array('title' => 'Telp', 'options' => ''),
								// array('title' => 'Deskripsi', 'options' => ''),
								array('title' => 'Action', 'options' => 'class="no-sort" style="width:50px;"')
							);
						?>
						<?=$this->pohtml->createTable(array('id' => 'table-pendidikandetailsekolah', 'class' => 'table table-striped table-bordered'), $columns, $tfoot = true);?>
					<?=$this->pohtml->formEnd();?>
				</div>
			</div>
		</div>
		<?=$this->pohtml->dialogDelete('pendidikandetailsekolah');?>
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
		if (!$this->auth($_SESSION['leveluser'], 'pendidikandetailsekolah', 'read')) {
			echo $this->pohtml->error();
			exit;
		}
		$table = 'pendidikandetailsekolah';
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
			array('db' => 'b.namakategori', 'dt' => '2', 'field' => 'namakategori'),
			array('db' => 'namasekolah', 'dt' => '3', 'field' => 'namasekolah'),
			array('db' => 'alamat', 'dt' => '4', 'field' => 'alamat'),
			array('db' => 'kecamatan', 'dt' => '5', 'field' => 'kecamatan'),
			// array('db' => 'foto', 'dt' => '6', 'field' => 'foto'),
			// array('db' => 'kepalasekolah', 'dt' => '7', 'field' => 'kepalasekolah'),
			array('db' => 'website', 'dt' => '6', 'field' => 'website'),
			// array('db' => 'email', 'dt' => '9', 'field' => 'email'),
			// array('db' => 'telp', 'dt' => '10', 'field' => 'telp'),
			// array('db' => 'deskripsi', 'dt' => '11', 'field' => 'deskripsi'),
			array('db' => $primarykey, 'dt' => '7', 'field' => $primarykey,
				'formatter' => function($d, $row, $i){
					return "<div class='text-center'>
						<div class='btn-group btn-group-xs'>
							<a href='admin.php?mod=pendidikandetailsekolah&act=edit&id=".$d."' class='btn btn-xs btn-default' id='".$d."' data-toggle='tooltip' title='{$GLOBALS['_']['action_1']}'><i class='fa fa-pencil'></i></a>
							<a class='btn btn-xs btn-danger alertdel' id='".$d."' data-toggle='tooltip' title='{$GLOBALS['_']['action_2']}'><i class='fa fa-times'></i></a>
						</div>
					</div>";
				}
			),
		);
		$joinquery = "FROM pendidikandetailsekolah AS a JOIN pendidikankatsekolah AS b ON (b.idkategori = a.idkategori)";
		echo json_encode(SSP::simple($_POST, $this->poconnect, $table, $primarykey, $columns, $joinquery));
	}

	/**
	 * Fungsi ini digunakan untuk menampilkan dan memproses halaman tambah pendidikandetailsekolah.
	 *
	 * This function is used to display and process add pendidikandetailsekolah page.
	 *
	*/
	public function addnew()
	{
		if (!$this->auth($_SESSION['leveluser'], 'pendidikandetailsekolah', 'create')) {
			echo $this->pohtml->error();
			exit;
		}
		if (!empty($_POST)) {
			$pendidikandetailsekolah = array(
				'idkategori' => $_POST['idkategori'],
				'namasekolah' => $this->postring->valid($_POST['namasekolah'], 'xss'),
				'seourl' => $this->postring->seo_title($this->postring->valid($_POST['namasekolah'], 'xss')),
				'alamat' => $this->postring->valid($_POST['alamat'], 'xss'),
				'kecamatan' => $this->postring->valid($_POST['kecamatan'], 'xss'),
				'foto' => $_POST['foto'],
				'kepalasekolah' => $this->postring->valid($_POST['kepalasekolah'], 'xss'),
				'website' => $this->postring->valid($_POST['website'], 'xss'),
				'email' => $this->postring->valid($_POST['email'], 'xss'),
				'telp' => $this->postring->valid($_POST['telp'], 'xss'),
				// 'deskripsi' => stripslashes(htmlspecialchars($_POST['deskripsi'],ENT_QUOTES)),
			);
			$query = $this->podb->insertInto('pendidikandetailsekolah')->values($pendidikandetailsekolah);
			$query->execute();
			$this->poflash->success('Pendidikandetailsekolah has been successfully added', 'admin.php?mod=pendidikandetailsekolah');
		}
		?>
		<div class="block-content">
			<div class="row">
				<div class="col-md-12">
					<?=$this->pohtml->headTitle('Add Pendidikandetailsekolah');?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<?=$this->pohtml->formStart(array('method' => 'post', 'action' => 'route.php?mod=pendidikandetailsekolah&act=addnew', 'autocomplete' => 'off'));?>
						<div class="row">
							<div class="col-md-6">
							<div class="input-group">
									<?php
										$kats = $this->podb->from('pendidikankatsekolah')
											->orderBy('idkategori DESC')
											->fetchAll();
										echo $this->pohtml->inputSelectNoOpt(array('id' => 'idkategori', 'label' => 'Kategori', 'name' => 'idkategori', 'mandatory' => true));
										foreach($kats as $kat){
											echo '<option value="'.$kat['idkategori'].'">'.$kat['namakategori'].'</option>';
										}
										echo $this->pohtml->inputSelectNoOptEnd();
									?>
									<span class="input-group-btn" style="padding-top:25px !important;">
										<a href="admin.php?mod=pendidikankatsekolah&act=addnew" class="btn btn-success"><?=$GLOBALS['_']['addnew'];?></a>
									</span>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="namasekolah">Nama Sekolah</label>
									<input type="text" name="namasekolah" class="form-control" id="namasekolah" value="<?=(isset($_POST['namasekolah']) ? $_POST['namasekolah'] : '');?>" placeholder="Namasekolah" />
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="alamat">Alamat</label>
									<input type="text" name="alamat" class="form-control" id="alamat" value="<?=(isset($_POST['alamat']) ? $_POST['alamat'] : '');?>" placeholder="Alamat" />
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="kecamatan">Kecamatan</label>
									<input type="text" name="kecamatan" class="form-control" id="kecamatan" value="<?=(isset($_POST['kecamatan']) ? $_POST['kecamatan'] : '');?>" placeholder="Kecamatan" />
								</div>
							</div>
							<div class="col-md-4">
							<?=$this->pohtml->inputText(array('type' => 'text', 'label' => 'foto', 'name' => 'foto', 'id' => 'picture', 'mandatory' => false, 'options' => '',), $inputgroup = true, $inputgroupopt = array('href' => '../'.DIR_INC.'/js/filemanager/dialog.php?type=0&field_id=picture', 'id' => 'browse-file', 'class' => 'btn-success', 'options' => '', 'title' => $GLOBALS['_']['action_7'].' foto'));?>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="kepalasekolah">Kepala Sekolah</label>
									<input type="text" name="kepalasekolah" class="form-control" id="kepalasekolah" value="<?=(isset($_POST['kepalasekolah']) ? $_POST['kepalasekolah'] : '');?>" placeholder="Kepalasekolah" />
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="website">Website</label>
									<input type="text" name="website" class="form-control" id="website" value="<?=(isset($_POST['website']) ? $_POST['website'] : '');?>" placeholder="Website" />
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="email">Email</label>
									<input type="text" name="email" class="form-control" id="email" value="<?=(isset($_POST['email']) ? $_POST['email'] : '');?>" placeholder="Email" />
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="telp">Telp</label>
									<input type="text" name="telp" class="form-control" id="telp" value="<?=(isset($_POST['telp']) ? $_POST['telp'] : '');?>" placeholder="Telp" />
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
	 * Fungsi ini digunakan untuk menampilkan dan memproses halaman edit pendidikandetailsekolah.
	 *
	 * This function is used to display and process edit pendidikandetailsekolah.
	 *
	*/
	public function edit()
	{
		if (!$this->auth($_SESSION['leveluser'], 'pendidikandetailsekolah', 'update')) {
			echo $this->pohtml->error();
			exit;
		}
		if (!empty($_POST)) {
			$pendidikandetailsekolah = array(
				'idkategori' => $_POST['idkategori'],
				'namasekolah' => $this->postring->valid($_POST['namasekolah'], 'xss'),
				'seourl' => $this->postring->seo_title($this->postring->valid($_POST['namasekolah'], 'xss')),
				'alamat' => $this->postring->valid($_POST['alamat'], 'xss'),
				'kecamatan' => $this->postring->valid($_POST['kecamatan'], 'xss'),
				'foto' => $_POST['foto'],
				'kepalasekolah' => $this->postring->valid($_POST['kepalasekolah'], 'xss'),
				'website' => $this->postring->valid($_POST['website'], 'xss'),
				'email' => $this->postring->valid($_POST['email'], 'xss'),
				'telp' => $this->postring->valid($_POST['telp'], 'xss'),
				// 'deskripsi' => $this->postring->valid($_POST['deskripsi'], 'xss'),
			);
			$query = $this->podb->update('pendidikandetailsekolah')
				->set($pendidikandetailsekolah)
				->where('id', $this->postring->valid($_POST['id'], 'sql'));
			$query->execute();
			$this->poflash->success('Pendidikandetailsekolah has been successfully updated', 'admin.php?mod=pendidikandetailsekolah');
		}
		$id = $this->postring->valid($_GET['id'], 'sql');
		$current_pendidikandetailsekolah = $this->podb->from('pendidikandetailsekolah')
			->select('pendidikankatsekolah.namakategori AS namakategori')
			->leftJoin('pendidikankatsekolah ON pendidikankatsekolah.idkategori = pendidikandetailsekolah.idkategori')
			->where('id', $id)
			->limit(1)
			->fetch();
		if (empty($current_pendidikandetailsekolah)) {
			echo $this->pohtml->error();
			exit;
		}
		?>
		<div class="block-content">
			<div class="row">
				<div class="col-md-12">
					<?=$this->pohtml->headTitle('Update Pendidikandetailsekolah');?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<?=$this->pohtml->formStart(array('method' => 'post', 'action' => 'route.php?mod=pendidikandetailsekolah&act=edit', 'autocomplete' => 'off'));?>
						<?=$this->pohtml->inputHidden(array('name' => 'id', 'value' => $current_pendidikandetailsekolah['id']));?>
						<div class="row">
							<div class="col-md-6">
							<div class="input-group">
									<?php
										$kats = $this->podb->from('pendidikankatsekolah')
											->orderBy('idkategori DESC')
											->fetchAll();
										echo $this->pohtml->inputSelectNoOpt(array('id' => 'idkategori', 'label' => 'Kategori', 'name' => 'idkategori', 'mandatory' => true));
										echo '<option value="'.$current_pendidikandetailsekolah['idkategori'].'">'.'Terpilih'.' - '.$current_pendidikandetailsekolah['namakategori'].'</option>';
										foreach($kats as $kat){
											echo '<option value="'.$kat['idkategori'].'">'.$kat['namakategori'].'</option>';
										}
										echo $this->pohtml->inputSelectNoOptEnd();
									?>
									<span class="input-group-btn" style="padding-top:25px !important;">
										<a href="admin.php?mod=pendidikankatsekolah&act=addnew" class="btn btn-success"><?=$GLOBALS['_']['addnew'];?></a>
									</span>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="namasekolah">Nama Sekolah</label>
									<input type="text" name="namasekolah" class="form-control" id="namasekolah" value="<?=(isset($_POST['namasekolah']) ? $_POST['namasekolah'] : $current_pendidikandetailsekolah['namasekolah']);?>" placeholder="Namasekolah" />
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="alamat">Alamat</label>
									<input type="text" name="alamat" class="form-control" id="alamat" value="<?=(isset($_POST['alamat']) ? $_POST['alamat'] : $current_pendidikandetailsekolah['alamat']);?>" placeholder="Alamat" />
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="kecamatan">Kecamatan</label>
									<input type="text" name="kecamatan" class="form-control" id="kecamatan" value="<?=(isset($_POST['kecamatan']) ? $_POST['kecamatan'] : $current_pendidikandetailsekolah['kecamatan']);?>" placeholder="Kecamatan" />
								</div>
							</div>
							<div class="col-md-4">
							<?=$this->pohtml->inputText(array('type' => 'text', 'label' => 'foto', 'name' => 'foto', 'id' => 'picture', 'mandatory' => false, 'options' => '',), $inputgroup = true, $inputgroupopt = array('href' => '../'.DIR_INC.'/js/filemanager/dialog.php?type=0&field_id=picture', 'id' => 'browse-file', 'class' => 'btn-success', 'options' => '', 'title' => $GLOBALS['_']['action_7'].' foto'));?>							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="kepalasekolah">Kepala Sekolah</label>
									<input type="text" name="kepalasekolah" class="form-control" id="kepalasekolah" value="<?=(isset($_POST['kepalasekolah']) ? $_POST['kepalasekolah'] : $current_pendidikandetailsekolah['kepalasekolah']);?>" placeholder="Kepalasekolah" />
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="website">Website</label>
									<input type="text" name="website" class="form-control" id="website" value="<?=(isset($_POST['website']) ? $_POST['website'] : $current_pendidikandetailsekolah['website']);?>" placeholder="Website" />
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="email">Email</label>
									<input type="text" name="email" class="form-control" id="email" value="<?=(isset($_POST['email']) ? $_POST['email'] : $current_pendidikandetailsekolah['email']);?>" placeholder="Email" />
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="telp">Telp</label>
									<input type="text" name="telp" class="form-control" id="telp" value="<?=(isset($_POST['telp']) ? $_POST['telp'] : $current_pendidikandetailsekolah['telp']);?>" placeholder="Telp" />
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
	 * Fungsi ini digunakan untuk menampilkan dan memproses halaman hapus pendidikandetailsekolah.
	 *
	 * This function is used to display and process delete pendidikandetailsekolah page.
	 *
	*/
	public function delete()
	{
		if (!$this->auth($_SESSION['leveluser'], 'pendidikandetailsekolah', 'delete')) {
			echo $this->pohtml->error();
			exit;
		}
		if (!empty($_POST)) {
			$query = $this->podb->deleteFrom('pendidikandetailsekolah')->where('id', $this->postring->valid($_POST['id'], 'sql'));
			$query->execute();
			$this->poflash->success('Pendidikandetailsekolah has been successfully deleted', 'admin.php?mod=pendidikandetailsekolah');
		}
	}

	/**
	 * Fungsi ini digunakan untuk menampilkan dan memproses halaman hapus multi pendidikandetailsekolah.
	 *
	 * This function is used to display and process multi delete pendidikandetailsekolah page.
	 *
	*/
	public function multidelete()
	{
		if (!$this->auth($_SESSION['leveluser'], 'pendidikandetailsekolah', 'delete')) {
			echo $this->pohtml->error();
			exit;
		}
		if (!empty($_POST)) {
			$totaldata = $this->postring->valid($_POST['totaldata'], 'xss');
			if ($totaldata != "0") {
				$items = $_POST['item'];
				foreach($items as $item){
					$query = $this->podb->deleteFrom('pendidikandetailsekolah')->where('id', $this->postring->valid($item['deldata'], 'sql'));
					$query->execute();
				}
				$this->poflash->success('Pendidikandetailsekolah has been successfully deleted', 'admin.php?mod=pendidikandetailsekolah');
			} else {
				$this->poflash->error('Error deleted pendidikandetailsekolah data', 'admin.php?mod=pendidikandetailsekolah');
			}
		}
	}

}