<?php
/*
 *
 * - PopojiCMS Admin File
 *
 * - File : admin_agenda.php
 * - Version : 1.0
 * - Author : cmink
 * - License : MIT License
 *
 *
 * Ini adalah file php yang di gunakan untuk menangani proses admin pada halaman agenda.
 * This is a php file for handling admin process for agenda page.
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

class Agenda extends PoCore
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
	 * Fungsi ini digunakan untuk menampilkan halaman index agenda.
	 *
	 * This function use for index agenda page.
	 *
	*/
	public function index()
	{
		if (!$this->auth($_SESSION['leveluser'], 'agenda', 'read')) {
			echo $this->pohtml->error();
			exit;
		}
		?>
		<div class="block-content">
			<div class="row">
				<div class="col-md-12">
					<?=$this->pohtml->headTitle('Agenda', '
						<div class="btn-title pull-right">
							<a href="admin.php?mod=agenda&act=addnew" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> '.$GLOBALS['_']['addnew'].'</a>
						</div>
					');?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<?=$this->pohtml->formStart(array('method' => 'post', 'action' => 'route.php?mod=agenda&act=multidelete', 'autocomplete' => 'off'));?>
						<?=$this->pohtml->inputHidden(array('name' => 'totaldata', 'value' => '0', 'options' => 'id="totaldata"'));?>
						<?php
							$columns = array(
								array('title' => 'Id', 'options' => 'style="width:30px;"'),
								array('title' => 'Judul agenda', 'options' => ''),
								array('title' => 'Tanggal', 'options' => ''),
								array('title' => 'Pelaksana', 'options' => ''),
								array('title' => 'Lokasi', 'options' => ''),
								array('title' => 'Action', 'options' => 'class="no-sort" style="width:50px;"')
							);
						?>
						<?=$this->pohtml->createTable(array('id' => 'table-agenda', 'class' => 'table table-striped table-bordered'), $columns, $tfoot = true);?>
					<?=$this->pohtml->formEnd();?>
				</div>
			</div>
		</div>
		<?=$this->pohtml->dialogDelete('agenda');?>
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
		if (!$this->auth($_SESSION['leveluser'], 'agenda', 'read')) {
			echo $this->pohtml->error();
			exit;
		}
		$table = 'agenda';
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
			array('db' => 'judul_agenda', 'dt' => '2', 'field' => 'judul_agenda'),
			array('db' => 'tanggal', 'dt' => '3', 'field' => 'tanggal'),
			array('db' => 'pelaksana', 'dt' => '4', 'field' => 'pelaksana'),
			array('db' => 'lokasi', 'dt' => '5', 'field' => 'lokasi'),
			array('db' => $primarykey, 'dt' => '6', 'field' => $primarykey,
				'formatter' => function($d, $row, $i){
					return "<div class='text-center'>
						<div class='btn-group btn-group-xs'>
							<a href='admin.php?mod=agenda&act=edit&id=".$d."' class='btn btn-xs btn-default' id='".$d."' data-toggle='tooltip' title='{$GLOBALS['_']['action_1']}'><i class='fa fa-pencil'></i></a>
							<a class='btn btn-xs btn-danger alertdel' id='".$d."' data-toggle='tooltip' title='{$GLOBALS['_']['action_2']}'><i class='fa fa-times'></i></a>
						</div>
					</div>";
				}
			),
		);
		echo json_encode(SSP::simple($_POST, $this->poconnect, $table, $primarykey, $columns));
	}

	/**
	 * Fungsi ini digunakan untuk menampilkan dan memproses halaman tambah agenda.
	 *
	 * This function is used to display and process add agenda page.
	 *
	*/
	public function addnew()
	{
		if (!$this->auth($_SESSION['leveluser'], 'agenda', 'create')) {
			echo $this->pohtml->error();
			exit;
		}
		if (!empty($_POST)) {
			$agenda = array(
				'judul_agenda' => $this->postring->valid($_POST['judul_agenda'], 'xss'),
				'seourl' => $this->postring->seo_title($this->postring->valid($_POST['judul_agenda'], 'xss')),
				'tanggal' => $_POST['tanggal'],
				'jam' => $_POST['jam'],
				'pelaksana' => $this->postring->valid($_POST['pelaksana'], 'xss'),
				'lokasi' => $this->postring->valid($_POST['lokasi'], 'xss'),
				'deskripsi' => stripslashes(htmlspecialchars($_POST['deskripsi'],ENT_QUOTES)),
			);
			$query = $this->podb->insertInto('agenda')->values($agenda);
			$query->execute();
			$this->poflash->success('Agenda has been successfully added', 'admin.php?mod=agenda');
		}
		?>
		<div class="block-content">
			<div class="row">
				<div class="col-md-12">
					<?=$this->pohtml->headTitle('Add Agenda');?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<?=$this->pohtml->formStart(array('method' => 'post', 'action' => 'route.php?mod=agenda&act=addnew', 'autocomplete' => 'off'));?>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="judul_agenda">Judul agenda</label>
									<input type="text" name="judul_agenda" class="form-control" id="judul_agenda" value="<?=(isset($_POST['judul_agenda']) ? $_POST['judul_agenda'] : '');?>" placeholder="Judul agenda" />
								</div>
							</div>
							<div class="col-md-3">
								<?=$this->pohtml->inputText(array('type' => 'text', 'label' => 'Tanggal', 'name' => 'tanggal', 'id' => 'date', 'mandatory' => false, 'options' => ''));?>
							</div>
							<div class="col-md-3">
								<?=$this->pohtml->inputText(array('type' => 'text', 'label' => 'Jam', 'name' => 'jam', 'id' => 'time', 'mandatory' => false, 'options' => ''));?>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="pelaksana">Pelaksana</label>
									<input type="text" name="pelaksana" class="form-control" id="pelaksana" value="<?=(isset($_POST['pelaksana']) ? $_POST['pelaksana'] : '');?>" placeholder="Pelaksana" />
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="lokasi">Lokasi</label>
									<input type="text" name="lokasi" class="form-control" id="lokasi" value="<?=(isset($_POST['lokasi']) ? $_POST['lokasi'] : '');?>" placeholder="Lokasi" />
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
	 * Fungsi ini digunakan untuk menampilkan dan memproses halaman edit agenda.
	 *
	 * This function is used to display and process edit agenda.
	 *
	*/
	public function edit()
	{
		if (!$this->auth($_SESSION['leveluser'], 'agenda', 'update')) {
			echo $this->pohtml->error();
			exit;
		}
		if (!empty($_POST)) {
			$agenda = array(
				'judul_agenda' => $this->postring->valid($_POST['judul_agenda'], 'xss'),
				'seourl' => $this->postring->seo_title($this->postring->valid($_POST['judul_agenda'], 'xss')),
				'tanggal' => $_POST['tanggal'],
				'jam' => $_POST['jam'],
				'pelaksana' => $this->postring->valid($_POST['pelaksana'], 'xss'),
				'lokasi' => $this->postring->valid($_POST['lokasi'], 'xss'),
				'deskripsi' => stripslashes(htmlspecialchars($_POST['deskripsi'],ENT_QUOTES)),
			);
			$query = $this->podb->update('agenda')
				->set($agenda)
				->where('id', $this->postring->valid($_POST['id'], 'sql'));
			$query->execute();
			$this->poflash->success('Agenda has been successfully updated', 'admin.php?mod=agenda');
		}
		$id = $this->postring->valid($_GET['id'], 'sql');
		$current_agenda = $this->podb->from('agenda')
			->where('id', $id)
			->limit(1)
			->fetch();
		if (empty($current_agenda)) {
			echo $this->pohtml->error();
			exit;
		}
		?>
		<div class="block-content">
			<div class="row">
				<div class="col-md-12">
					<?=$this->pohtml->headTitle('Update Agenda');?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<?=$this->pohtml->formStart(array('method' => 'post', 'action' => 'route.php?mod=agenda&act=edit', 'autocomplete' => 'off'));?>
						<?=$this->pohtml->inputHidden(array('name' => 'id', 'value' => $current_agenda['id']));?>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="judul_agenda">Judul agenda</label>
									<input type="text" name="judul_agenda" class="form-control" id="judul_agenda" value="<?=(isset($_POST['judul_agenda']) ? $_POST['judul_agenda'] : $current_agenda['judul_agenda']);?>" placeholder="Judul agenda" />
								</div>
							</div>
							<div class="col-md-3">
								<?=$this->pohtml->inputText(array('type' => 'text', 'label' => 'Tanggal', 'name' => 'tanggal', 'id' => 'date', 'value' => $current_agenda['tanggal'], 'mandatory' => false, 'options' => ''));?>
							</div>
							<div class="col-md-3">
								<?=$this->pohtml->inputText(array('type' => 'text', 'label' => 'Jam', 'name' => 'jam', 'id' => 'time', 'value' => $current_agenda['jam'], 'mandatory' => false, 'options' => ''));?>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="pelaksana">Pelaksana</label>
									<input type="text" name="pelaksana" class="form-control" id="pelaksana" value="<?=(isset($_POST['pelaksana']) ? $_POST['pelaksana'] : $current_agenda['pelaksana']);?>" placeholder="Pelaksana" />
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="lokasi">Lokasi</label>
									<input type="text" name="lokasi" class="form-control" id="lokasi" value="<?=(isset($_POST['lokasi']) ? $_POST['lokasi'] : $current_agenda['lokasi']);?>" placeholder="Lokasi" />
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="deskripsi">Deskripsi</label>
									<textarea name="deskripsi" class="form-control" id="po-wysiwyg" placeholder="Deskripsi" style="width:100%; height:300px;"><?=(isset($_POST['deskripsi']) ? $_POST['deskripsi'] : $current_agenda['deskripsi']);?></textarea>
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
	 * Fungsi ini digunakan untuk menampilkan dan memproses halaman hapus agenda.
	 *
	 * This function is used to display and process delete agenda page.
	 *
	*/
	public function delete()
	{
		if (!$this->auth($_SESSION['leveluser'], 'agenda', 'delete')) {
			echo $this->pohtml->error();
			exit;
		}
		if (!empty($_POST)) {
			$query = $this->podb->deleteFrom('agenda')->where('id', $this->postring->valid($_POST['id'], 'sql'));
			$query->execute();
			$this->poflash->success('Agenda has been successfully deleted', 'admin.php?mod=agenda');
		}
	}

	/**
	 * Fungsi ini digunakan untuk menampilkan dan memproses halaman hapus multi agenda.
	 *
	 * This function is used to display and process multi delete agenda page.
	 *
	*/
	public function multidelete()
	{
		if (!$this->auth($_SESSION['leveluser'], 'agenda', 'delete')) {
			echo $this->pohtml->error();
			exit;
		}
		if (!empty($_POST)) {
			$totaldata = $this->postring->valid($_POST['totaldata'], 'xss');
			if ($totaldata != "0") {
				$items = $_POST['item'];
				foreach($items as $item){
					$query = $this->podb->deleteFrom('agenda')->where('id', $this->postring->valid($item['deldata'], 'sql'));
					$query->execute();
				}
				$this->poflash->success('Agenda has been successfully deleted', 'admin.php?mod=agenda');
			} else {
				$this->poflash->error('Error deleted agenda data', 'admin.php?mod=agenda');
			}
		}
	}

}