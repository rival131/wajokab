<?php
/*
 *
 * - PopojiCMS Admin File
 *
 * - File : admin_pimpinan_daerah.php
 * - Version : 1.0
 * - Author : cmink
 * - License : MIT License
 *
 *
 * Ini adalah file php yang di gunakan untuk menangani proses admin pada halaman pimpinan_daerah.
 * This is a php file for handling admin process for pimpinan_daerah page.
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

class pimpinan_daerah extends PoCore
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
	 * Fungsi ini digunakan untuk menampilkan halaman index pimpinan_daerah.
	 *
	 * This function use for index pimpinan_daerah page.
	 *
	*/
	public function index()
	{
		if (!$this->auth($_SESSION['leveluser'], 'pimpinan_daerah', 'read')) {
			echo $this->pohtml->error();
			exit;
		}
		?>
		<div class="block-content">
			<div class="row">
				<div class="col-md-12">
					<?=$this->pohtml->headTitle('pimpinan_daerah', '
						<div class="btn-title pull-right">
							<a href="admin.php?mod=pimpinan_daerah&act=addnew" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> '.$GLOBALS['_']['addnew'].'</a>
						</div>
					');?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<?=$this->pohtml->formStart(array('method' => 'post', 'action' => 'route.php?mod=pimpinan_daerah&act=multidelete', 'autocomplete' => 'off'));?>
						<?=$this->pohtml->inputHidden(array('name' => 'totaldata', 'value' => '0', 'options' => 'id="totaldata"'));?>
						<?php
							$columns = array(
								array('title' => 'Id', 'options' => 'style="width:30px;"'),
								array('title' => 'Nama', 'options' => ''),
								array('title' => 'Jabtan', 'options' => ''),
								array('title' =>  'Foto', 'options' =>''),
								array('title' => 'Action', 'options' => 'class="no-sort" style="width:50px;"')
							);
						?>
						<?=$this->pohtml->createTable(array('id' => 'table-pimpinan_daerah', 'class' => 'table table-striped table-bordered'), $columns, $tfoot = true);?>
					<?=$this->pohtml->formEnd();?>
				</div>
			</div>
		</div>
		<?=$this->pohtml->dialogDelete('pimpinan_daerah');?>
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
		if (!$this->auth($_SESSION['leveluser'], 'pimpinan_daerah', 'read')) {
			echo $this->pohtml->error();
			exit;
		}
		$table = 'pimpinan_daerah';
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
			array('db' => 'nama', 'dt' => '2', 'field' => 'nama'),
			array('db' => 'jabatan', 'dt' => '3', 'field' => 'jabatan'),
			array('db' => 'foto', 'dt' => '4', 'field' => 'foto'),
			array('db' => $primarykey, 'dt' => '5', 'field' => $primarykey,
				'formatter' => function($d, $row, $i){
					return "<div class='text-center'>
						<div class='btn-group btn-group-xs'>
							<a href='admin.php?mod=pimpinan_daerah&act=edit&id=".$d."' class='btn btn-xs btn-default' id='".$d."' data-toggle='tooltip' title='{$GLOBALS['_']['action_1']}'><i class='fa fa-pencil'></i></a>
							<a class='btn btn-xs btn-danger alertdel' id='".$d."' data-toggle='tooltip' title='{$GLOBALS['_']['action_2']}'><i class='fa fa-times'></i></a>
						</div>
					</div>";
				}
			),
		);
		echo json_encode(SSP::simple($_POST, $this->poconnect, $table, $primarykey, $columns));
	}

	/**
	 * Fungsi ini digunakan untuk menampilkan dan memproses halaman tambah pimpinan_daerah.
	 *
	 * This function is used to display and process add pimpinan_daerah page.
	 *
	*/
	public function addnew()
	{
		if (!$this->auth($_SESSION['leveluser'], 'pimpinan_daerah', 'create')) {
			echo $this->pohtml->error();
			exit;
		}
		if (!empty($_POST)) {
			$pimpinan_daerah = array(
				'nama' => $this->postring->valid($_POST['nama'], 'xss'),
				'seourl' => $this->postring->seo_title($this->postring->valid($_POST['nama'], 'xss')),
				'jabatan' => $_POST['jabatan'],
				'quote' => $this->postring->valid($_POST['quote'], 'xss'),
				'foto' => $_POST['foto'],
				'facebook' => $this->postring->valid($_POST['facebook'], 'xss'),
				'twitter' => $this->postring->valid($_POST['twitter'], 'xss'),
				'instagram' => $this->postring->valid($_POST['instagram'], 'xss'),
				'deskripsi' => stripslashes(htmlspecialchars($_POST['deskripsi'],ENT_QUOTES)),
			);
			$query = $this->podb->insertInto('pimpinan_daerah')->values($pimpinan_daerah);
			$query->execute();
			$this->poflash->success('pimpinan_daerah has been successfully added', 'admin.php?mod=pimpinan_daerah');
		}
		?>
		<div class="block-content">
			<div class="row">
				<div class="col-md-12">
					<?=$this->pohtml->headTitle('Add pimpinan_daerah');?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<?=$this->pohtml->formStart(array('method' => 'post', 'action' => 'route.php?mod=pimpinan_daerah&act=addnew', 'autocomplete' => 'off'));?>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="nama">Nama</label>
									<input type="text" name="nama" class="form-control" id="nama" value="<?=(isset($_POST['nama']) ? $_POST['nama'] : '');?>" placeholder="Nama" />
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="jabatan">Jabatan</label>
									<input type="text" name="jabatan" class="form-control" id="jabatan" value="<?=(isset($_POST['jabatan']) ? $_POST['jabatan'] : '');?>" placeholder="jabatan" />
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="facebook">Facebook</label>
									<input type="text" name="facebook" class="form-control" id="facebook" value="<?=(isset($_POST['facebook']) ? $_POST['facebook'] : '');?>" placeholder="Facebook" />
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="twitter">Twitter</label>
									<input type="text" name="twitter" class="form-control" id="twitter" value="<?=(isset($_POST['twitter']) ? $_POST['twitter'] : '');?>" placeholder="Twitter" />
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="instagram">Instagram</label>
									<input type="text" name="instagram" class="form-control" id="lokasi" value="<?=(isset($_POST['instagram']) ? $_POST['instagram'] : '');?>" placeholder="instagram" />
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="quote">Quote</label>
									<input type="text" name="quote" class="form-control" id="quote" value="<?=(isset($_POST['quote']) ? $_POST['quote'] : '');?>" placeholder="quote" />
								</div>
							</div>
							<div class="col-md-6">
								<?=$this->pohtml->inputText(array('type' => 'text', 'label' => 'foto', 'name' => 'foto', 'id' => 'picture', 'mandatory' => false, 'options' => '',), $inputgroup = true, $inputgroupopt = array('href' => '../'.DIR_INC.'/js/filemanager/dialog.php?type=0&field_id=picture', 'id' => 'browse-file', 'class' => 'btn-success', 'options' => '', 'title' => $GLOBALS['_']['action_7'].' foto'));?>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="deskripsi">Deskripsi</label>
									<textarea name="deskripsi" class="form-control" id="po-wysiwyg" placeholder="Deskripsi" style="width:100%; height:300px;"><?=(isset($_POST['deskripsi']) ? $_POST['deskripsi'] : '');?></textarea>
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
	 * Fungsi ini digunakan untuk menampilkan dan memproses halaman edit pimpinan_daerah.
	 *
	 * This function is used to display and process edit pimpinan_daerah.
	 *
	*/
	public function edit()
	{
		if (!$this->auth($_SESSION['leveluser'], 'pimpinan_daerah', 'update')) {
			echo $this->pohtml->error();
			exit;
		}
		if (!empty($_POST)) {
			$pimpinan_daerah = array(
				'nama' => $this->postring->valid($_POST['nama'], 'xss'),
				'seourl' => $this->postring->seo_title($this->postring->valid($_POST['nama'], 'xss')),
				'jabatan' => $_POST['jabatan'],
				'quote' => $this->postring->valid($_POST['quote'], 'xss'),
				'foto' => $_POST['foto'],
				'facebook' => $this->postring->valid($_POST['facebook'], 'xss'),
				'twitter' => $this->postring->valid($_POST['twitter'], 'xss'),
				'instagram' => $this->postring->valid($_POST['instagram'], 'xss'),
				'deskripsi' => stripslashes(htmlspecialchars($_POST['deskripsi'],ENT_QUOTES)),
			);
			$query = $this->podb->update('pimpinan_daerah')
				->set($pimpinan_daerah)
				->where('id', $this->postring->valid($_POST['id'], 'sql'));
			$query->execute();
			$this->poflash->success('pimpinan_daerah has been successfully updated', 'admin.php?mod=pimpinan_daerah');
		}
		$id = $this->postring->valid($_GET['id'], 'sql');
		$current_pimpinan_daerah = $this->podb->from('pimpinan_daerah')
			->where('id', $id)
			->limit(1)
			->fetch();
		if (empty($current_pimpinan_daerah)) {
			echo $this->pohtml->error();
			exit;
		}
		?>
		<div class="block-content">
			<div class="row">
				<div class="col-md-12">
					<?=$this->pohtml->headTitle('Update pimpinan_daerah');?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<?=$this->pohtml->formStart(array('method' => 'post', 'action' => 'route.php?mod=pimpinan_daerah&act=edit', 'autocomplete' => 'off'));?>
						<?=$this->pohtml->inputHidden(array('name' => 'id', 'value' => $current_pimpinan_daerah['id']));?>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="nama">Nama</label>
									<input type="text" name="nama" class="form-control" id="nama" value="<?=(isset($_POST['nama']) ? $_POST['nama'] : $current_pimpinan_daerah['nama']);?>" placeholder="Nama" />
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="jabatan">Jabatan</label>
									<input type="text" name="jabatan" class="form-control" id="jabatan" value="<?=(isset($_POST['jabatan']) ? $_POST['jabatan'] : $current_pimpinan_daerah['jabatan']);?>" placeholder="jabatan" />
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="facebook">Facebook</label>
									<input type="text" name="facebook" class="form-control" id="facebook" value="<?=(isset($_POST['facebook']) ? $_POST['facebook'] : $current_pimpinan_daerah['facebook']);?>" placeholder="Facebook" />
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="twitter">Twitter</label>
									<input type="text" name="twitter" class="form-control" id="twitter" value="<?=(isset($_POST['twitter']) ? $_POST['twitter'] : $current_pimpinan_daerah['twitter']);?>" placeholder="Twitter" />
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="instagram">Instagram</label>
									<input type="text" name="instagram" class="form-control" id="lokasi" value="<?=(isset($_POST['instagram']) ? $_POST['instagram'] : $current_pimpinan_daerah['instagram']);?>" placeholder="instagram" />
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="quote">Quote</label>
									<input type="text" name="quote" class="form-control" id="quote" value="<?=(isset($_POST['quote']) ? $_POST['quote'] : $current_pimpinan_daerah['quote']);?>" placeholder="quote" />
								</div>
							</div>
							<div class="col-md-6">
								<?=$this->pohtml->inputText(array('type' => 'text', 'label' => 'foto', 'name' => 'foto', 'id' => 'picture', 'mandatory' => false, 'options' => '',), $inputgroup = true, $inputgroupopt = array('href' => '../'.DIR_INC.'/js/filemanager/dialog.php?type=0&field_id=picture', 'id' => 'browse-file', 'class' => 'btn-success', 'options' => '', 'title' => $GLOBALS['_']['action_7'].' foto'));?>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="deskripsi">Deskripsi</label>
									<textarea name="deskripsi" class="form-control" id="po-wysiwyg" placeholder="Deskripsi" style="width:100%; height:300px;"><?=(isset($_POST['deskripsi']) ? $_POST['deskripsi'] : $current_pimpinan_daerah['deskripsi']);?></textarea>
								</div>
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
	 * Fungsi ini digunakan untuk menampilkan dan memproses halaman hapus pimpinan_daerah.
	 *
	 * This function is used to display and process delete pimpinan_daerah page.
	 *
	*/
	public function delete()
	{
		if (!$this->auth($_SESSION['leveluser'], 'pimpinan_daerah', 'delete')) {
			echo $this->pohtml->error();
			exit;
		}
		if (!empty($_POST)) {
			$query = $this->podb->deleteFrom('pimpinan_daerah')->where('id', $this->postring->valid($_POST['id'], 'sql'));
			$query->execute();
			$this->poflash->success('pimpinan_daerah has been successfully deleted', 'admin.php?mod=pimpinan_daerah');
		}
	}

	/**
	 * Fungsi ini digunakan untuk menampilkan dan memproses halaman hapus multi pimpinan_daerah.
	 *
	 * This function is used to display and process multi delete pimpinan_daerah page.
	 *
	*/
	public function multidelete()
	{
		if (!$this->auth($_SESSION['leveluser'], 'pimpinan_daerah', 'delete')) {
			echo $this->pohtml->error();
			exit;
		}
		if (!empty($_POST)) {
			$totaldata = $this->postring->valid($_POST['totaldata'], 'xss');
			if ($totaldata != "0") {
				$items = $_POST['item'];
				foreach($items as $item){
					$query = $this->podb->deleteFrom('pimpinan_daerah')->where('id', $this->postring->valid($item['deldata'], 'sql'));
					$query->execute();
				}
				$this->poflash->success('pimpinan_daerah has been successfully deleted', 'admin.php?mod=pimpinan_daerah');
			} else {
				$this->poflash->error('Error deleted pimpinan_daerah data', 'admin.php?mod=pimpinan_daerah');
			}
		}
	}

}