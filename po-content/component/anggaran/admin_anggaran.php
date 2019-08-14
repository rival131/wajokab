<?php
/*
 *
 * - PopojiCMS Admin File
 *
 * - File : admin_anggaran.php
 * - Version : 1.0
 * - Author : cmink
 * - License : MIT License
 *
 *
 * Ini adalah file php yang di gunakan untuk menangani proses admin pada halaman anggaran.
 * This is a php file for handling admin process for anggaran page.
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

class anggaran extends PoCore
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
	 * Fungsi ini digunakan untuk menampilkan halaman index anggaran.
	 *
	 * This function use for index anggaran page.
	 *
	*/
	public function index()
	{
		if (!$this->auth($_SESSION['leveluser'], 'anggaran', 'read')) {
			echo $this->pohtml->error();
			exit;
		}
		?>
		<div class="block-content">
			<div class="row">
				<div class="col-md-12">
					<?=$this->pohtml->headTitle('Anggaran', '
						<div class="btn-title pull-right">
							<a href="admin.php?mod=anggaran&act=addnew" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> '.$GLOBALS['_']['addnew'].'</a>
						</div>
					');?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<?=$this->pohtml->formStart(array('method' => 'post', 'action' => 'route.php?mod=anggaran&act=multidelete', 'autocomplete' => 'off'));?>
						<?=$this->pohtml->inputHidden(array('name' => 'totaldata', 'value' => '0', 'options' => 'id="totaldata"'));?>
						<?php
							$columns = array(
								array('title' => 'Id', 'options' => 'style="width:30px;"'),
								array('title' => 'Nama', 'options' => ''),
								array('title' => 'Tahun', 'options' => ''),
								array('title' => 'Skpd', 'options' => ''),
								array('title' => 'File', 'options' => ''),
								array('title' => 'Action', 'options' => 'class="no-sort" style="width:50px;"')
							);
						?>
						<?=$this->pohtml->createTable(array('id' => 'table-anggaran', 'class' => 'table table-striped table-bordered'), $columns, $tfoot = true);?>
					<?=$this->pohtml->formEnd();?>
				</div>
			</div>
		</div>
		<?=$this->pohtml->dialogDelete('anggaran');?>
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
		if (!$this->auth($_SESSION['leveluser'], 'anggaran', 'read')) {
			echo $this->pohtml->error();
			exit;
		}
		$table = 'anggaran';
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
			array('db' => 'judul_anggaran', 'dt' => '2', 'field' => 'judul_anggaran'),
			array('db' => 'tahun', 'dt' => '3', 'field' => 'tahun'),
			array('db' => 'skpd', 'dt' => '4', 'field' => 'skpd'),
			array('db' => 'file', 'dt' => '5', 'field' => 'file'),
					
			array('db' => $primarykey, 'dt' => '6', 'field' => $primarykey,
				'formatter' => function($d, $row, $i){
					return "<div class='text-center'>
						<div class='btn-group btn-group-xs'>
							<a href='admin.php?mod=anggaran&act=edit&id=".$d."' class='btn btn-xs btn-default' id='".$d."' data-toggle='tooltip' title='{$GLOBALS['_']['action_1']}'><i class='fa fa-pencil'></i></a>
							<a class='btn btn-xs btn-danger alertdel' id='".$d."' data-toggle='tooltip' title='{$GLOBALS['_']['action_2']}'><i class='fa fa-times'></i></a>
						</div>
					</div>";
				}
			),
		);
		echo json_encode(SSP::simple($_POST, $this->poconnect, $table, $primarykey, $columns));
	}

	/**
	 * Fungsi ini digunakan untuk menampilkan dan memproses halaman tambah anggaran.
	 *
	 * This function is used to display and process add anggaran page.
	 *
	*/
	public function addnew()
	{
		if (!$this->auth($_SESSION['leveluser'], 'anggaran', 'create')) {
			echo $this->pohtml->error();
			exit;
		}
		if (!empty($_POST)) {
			$anggaran = array(
				'judul_anggaran' => $this->postring->valid($_POST['judul_anggaran'], 'xss'),
				'seourl' => $this->postring->seo_title($this->postring->valid($_POST['judul_anggaran'], 'xss')),
				'tahun' => $_POST['tahun'],
				'skpd' => $this->postring->valid($_POST['skpd'], 'xss'),
				'file' => $this->postring->valid($_POST['file'], 'xss'),
				'deskripsi' => stripslashes(htmlspecialchars($_POST['deskripsi'],ENT_QUOTES)),
			);
			$query = $this->podb->insertInto('anggaran')->values($anggaran);
			$query->execute();
			$this->poflash->success('anggaran has been successfully added', 'admin.php?mod=anggaran');
		}
		?>
		<div class="block-content">
			<div class="row">
				<div class="col-md-12">
					<?=$this->pohtml->headTitle('Add anggaran');?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<?=$this->pohtml->formStart(array('method' => 'post', 'action' => 'route.php?mod=anggaran&act=addnew', 'autocomplete' => 'off'));?>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="judul_anggaran">Judul anggaran</label>
									<input type="text" name="judul_anggaran" class="form-control" id="judul_anggaran" value="<?=(isset($_POST['judul_anggaran']) ? $_POST['judul_anggaran'] : '');?>" placeholder="Judul anggaran" />
								</div>
							</div>
							
							<div class="col-md-6">
								<div class="form-group">
									<label for="Tahun">Tahun</label>
									<input type="text" name="tahun" class="form-control" id="tahun" value="<?=(isset($_POST['skpd']) ? $_POST['tahun'] : '');?>" placeholder="tahun" />
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="skpd">SKPD</label>
									<input type="text" name="skpd" class="form-control" id="skpd" value="<?=(isset($_POST['skpd']) ? $_POST['skpd'] : '');?>" placeholder="skpd" />
								</div>
							</div>
							<div class="row">
							<div class="col-md-6">
								<?=$this->pohtml->inputText(array('type' => 'text', 'label' => 'File', 'name' => 'file', 'id' => 'picture', 'mandatory' => false, 'options' => '',), $inputgroup = true, $inputgroupopt = array('href' => '../'.DIR_INC.'/js/filemanager/dialog.php?type=0&field_id=picture', 'id' => 'browse-file', 'class' => 'btn-success', 'options' => '', 'title' => $GLOBALS['_']['action_7'].' File'));?>
							</div>
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
	 * Fungsi ini digunakan untuk menampilkan dan memproses halaman edit anggaran.
	 *
	 * This function is used to display and process edit anggaran.
	 *
	*/
	public function edit()
	{
		if (!$this->auth($_SESSION['leveluser'], 'anggaran', 'update')) {
			echo $this->pohtml->error();
			exit;
		}
		if (!empty($_POST)) {
			$anggaran = array(
				'judul_anggaran' => $this->postring->valid($_POST['judul_anggaran'], 'xss'),
				'seourl' => $this->postring->seo_title($this->postring->valid($_POST['judul_anggaran'], 'xss')),
				'tahun' => $_POST['tahun'],
				'skpd' => $this->postring->valid($_POST['skpd'], 'xss'),
				'file' => $this->postring->valid($_POST['file'], 'xss'),
				'deskripsi' => stripslashes(htmlspecialchars($_POST['deskripsi'],ENT_QUOTES)),
			);
			$query = $this->podb->update('anggaran')
				->set($anggaran)
				->where('id', $this->postring->valid($_POST['id'], 'sql'));
			$query->execute();
			$this->poflash->success('anggaran has been successfully updated', 'admin.php?mod=anggaran');
		}
		$id = $this->postring->valid($_GET['id'], 'sql');
		$current_anggaran = $this->podb->from('anggaran')
			->where('id', $id)
			->limit(1)
			->fetch();
		if (empty($current_anggaran)) {
			echo $this->pohtml->error();
			exit;
		}
		?>
		<div class="block-content">
			<div class="row">
				<div class="col-md-12">
					<?=$this->pohtml->headTitle('Update anggaran');?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<?=$this->pohtml->formStart(array('method' => 'post', 'action' => 'route.php?mod=anggaran&act=edit', 'autocomplete' => 'off'));?>
						<?=$this->pohtml->inputHidden(array('name' => 'id', 'value' => $current_anggaran['id']));?>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="judul_anggaran">Judul anggaran</label>
									<input type="text" name="judul_anggaran" class="form-control" id="judul_anggaran" value="<?=(isset($_POST['judul_anggaran']) ? $_POST['judul_anggaran'] : $current_anggaran['judul_anggaran']);?>" placeholder="Judul anggaran" />
								</div>
							</div>
							<div class="col-md-3">
								<?=$this->pohtml->inputText(array('type' => 'text', 'label' => 'tahun', 'name' => 'tahun', 'id' => 'date', 'value' => $current_anggaran['tahun'], 'mandatory' => false, 'options' => ''));?>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="skpd">skpd</label>
									<input type="text" name="skpd" class="form-control" id="skpd" value="<?=(isset($_POST['skpd']) ? $_POST['skpd'] : $current_anggaran['skpd']);?>" placeholder="skpd" />
								</div>
							</div>
							<div class="col-md-6">
								<div class="col-md-6">
								<?=$this->pohtml->inputText(array('type' => 'text', 'label' => 'File', 'name' => 'file', 'id' => 'picture', 'mandatory' => false, 'options' => '',), $inputgroup = true, $inputgroupopt = array('href' => '../'.DIR_INC.'/js/filemanager/dialog.php?type=0&field_id=picture', 'id' => 'browse-file', 'class' => 'btn-success', 'options' => '', 'title' => $GLOBALS['_']['action_7'].' File'));?>
							</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="deskripsi">Deskripsi</label>
									<textarea name="deskripsi" class="form-control" id="po-wysiwyg" placeholder="Deskripsi" style="width:100%; height:300px;"><?=(isset($_POST['deskripsi']) ? $_POST['deskripsi'] : $current_anggaran['deskripsi']);?></textarea>
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
	 * Fungsi ini digunakan untuk menampilkan dan memproses halaman hapus anggaran.
	 *
	 * This function is used to display and process delete anggaran page.
	 *
	*/
	public function delete()
	{
		if (!$this->auth($_SESSION['leveluser'], 'anggaran', 'delete')) {
			echo $this->pohtml->error();
			exit;
		}
		if (!empty($_POST)) {
			$query = $this->podb->deleteFrom('anggaran')->where('id', $this->postring->valid($_POST['id'], 'sql'));
			$query->execute();
			$this->poflash->success('anggaran has been successfully deleted', 'admin.php?mod=anggaran');
		}
	}

	/**
	 * Fungsi ini digunakan untuk menampilkan dan memproses halaman hapus multi anggaran.
	 *
	 * This function is used to display and process multi delete anggaran page.
	 *
	*/
	public function multidelete()
	{
		if (!$this->auth($_SESSION['leveluser'], 'anggaran', 'delete')) {
			echo $this->pohtml->error();
			exit;
		}
		if (!empty($_POST)) {
			$totaldata = $this->postring->valid($_POST['totaldata'], 'xss');
			if ($totaldata != "0") {
				$items = $_POST['item'];
				foreach($items as $item){
					$query = $this->podb->deleteFrom('anggaran')->where('id', $this->postring->valid($item['deldata'], 'sql'));
					$query->execute();
				}
				$this->poflash->success('anggaran has been successfully deleted', 'admin.php?mod=anggaran');
			} else {
				$this->poflash->error('Error deleted anggaran data', 'admin.php?mod=anggaran');
			}
		}
	}

}