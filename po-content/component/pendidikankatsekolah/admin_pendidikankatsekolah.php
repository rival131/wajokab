<?php
/*
 *
 * - PopojiCMS Admin File
 *
 * - File : admin_pendidikankatsekolah.php
 * - Version : 1.0
 * - Author : Jenuar Dalapang
 * - License : MIT License
 *
 *
 * Ini adalah file php yang di gunakan untuk menangani proses admin pada halaman pendidikankatsekolah.
 * This is a php file for handling admin process for pendidikankatsekolah page.
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

class Pendidikankatsekolah extends PoCore
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
	 * Fungsi ini digunakan untuk menampilkan halaman index pendidikankatsekolah.
	 *
	 * This function use for index pendidikankatsekolah page.
	 *
	*/
	public function index()
	{
		if (!$this->auth($_SESSION['leveluser'], 'pendidikankatsekolah', 'read')) {
			echo $this->pohtml->error();
			exit;
		}
		?>
		<div class="block-content">
			<div class="row">
				<div class="col-md-12">
					<?=$this->pohtml->headTitle('Pendidikankatsekolah', '
						<div class="btn-title pull-right">
							<a href="admin.php?mod=pendidikankatsekolah&act=addnew" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> '.$GLOBALS['_']['addnew'].'</a>
						</div>
					');?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<?=$this->pohtml->formStart(array('method' => 'post', 'action' => 'route.php?mod=pendidikankatsekolah&act=multidelete', 'autocomplete' => 'off'));?>
						<?=$this->pohtml->inputHidden(array('name' => 'totaldata', 'value' => '0', 'options' => 'id="totaldata"'));?>
						<?php
							$columns = array(
								array('title' => 'Id', 'options' => 'style="width:30px;"'),
								array('title' => 'Namakategori', 'options' => ''),
								array('title' => 'Deskripsi', 'options' => ''),
								array('title' => 'Action', 'options' => 'class="no-sort" style="width:50px;"')
							);
						?>
						<?=$this->pohtml->createTable(array('id' => 'table-pendidikankatsekolah', 'class' => 'table table-striped table-bordered'), $columns, $tfoot = true);?>
					<?=$this->pohtml->formEnd();?>
				</div>
			</div>
		</div>
		<?=$this->pohtml->dialogDelete('pendidikankatsekolah');?>
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
		if (!$this->auth($_SESSION['leveluser'], 'pendidikankatsekolah', 'read')) {
			echo $this->pohtml->error();
			exit;
		}
		$table = 'pendidikankatsekolah';
		$primarykey = 'idkategori';
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
			array('db' => 'namakategori', 'dt' => '2', 'field' => 'namakategori'),
			array('db' => 'deskripsi', 'dt' => '3', 'field' => 'deskripsi'),
			array('db' => $primarykey, 'dt' => '4', 'field' => $primarykey,
				'formatter' => function($d, $row, $i){
					return "<div class='text-center'>
						<div class='btn-group btn-group-xs'>
							<a href='admin.php?mod=pendidikankatsekolah&act=edit&id=".$d."' class='btn btn-xs btn-default' id='".$d."' data-toggle='tooltip' title='{$GLOBALS['_']['action_1']}'><i class='fa fa-pencil'></i></a>
							<a class='btn btn-xs btn-danger alertdel' id='".$d."' data-toggle='tooltip' title='{$GLOBALS['_']['action_2']}'><i class='fa fa-times'></i></a>
						</div>
					</div>";
				}
			),
		);
		echo json_encode(SSP::simple($_POST, $this->poconnect, $table, $primarykey, $columns));
	}

	/**
	 * Fungsi ini digunakan untuk menampilkan dan memproses halaman tambah pendidikankatsekolah.
	 *
	 * This function is used to display and process add pendidikankatsekolah page.
	 *
	*/
	public function addnew()
	{
		if (!$this->auth($_SESSION['leveluser'], 'pendidikankatsekolah', 'create')) {
			echo $this->pohtml->error();
			exit;
		}
		if (!empty($_POST)) {
			$pendidikankatsekolah = array(
				'namakategori' => $this->postring->valid($_POST['namakategori'], 'xss'),
				'seourl' => $this->postring->seo_title($this->postring->valid($_POST['namakategori'], 'xss')),
				'deskripsi' => $this->postring->valid($_POST['deskripsi'], 'xss'),
			);
			$query = $this->podb->insertInto('pendidikankatsekolah')->values($pendidikankatsekolah);
			$query->execute();
			$this->poflash->success('Pendidikankatsekolah has been successfully added', 'admin.php?mod=pendidikankatsekolah');
		}
		?>
		<div class="block-content">
			<div class="row">
				<div class="col-md-12">
					<?=$this->pohtml->headTitle('Add Pendidikankatsekolah');?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<?=$this->pohtml->formStart(array('method' => 'post', 'action' => 'route.php?mod=pendidikankatsekolah&act=addnew', 'autocomplete' => 'off'));?>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label for="namakategori">Namakategori</label>
									<input type="text" name="namakategori" class="form-control" id="namakategori" value="<?=(isset($_POST['namakategori']) ? $_POST['namakategori'] : '');?>" placeholder="Namakategori" />
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="deskripsi">Deskripsi</label>
									<input type="text" name="deskripsi" class="form-control" id="deskripsi" value="<?=(isset($_POST['deskripsi']) ? $_POST['deskripsi'] : '');?>" placeholder="Deskripsi" />
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
	 * Fungsi ini digunakan untuk menampilkan dan memproses halaman edit pendidikankatsekolah.
	 *
	 * This function is used to display and process edit pendidikankatsekolah.
	 *
	*/
	public function edit()
	{
		if (!$this->auth($_SESSION['leveluser'], 'pendidikankatsekolah', 'update')) {
			echo $this->pohtml->error();
			exit;
		}
		if (!empty($_POST)) {
			$pendidikankatsekolah = array(
				'namakategori' => $this->postring->valid($_POST['namakategori'], 'xss'),
				'seourl' => $this->postring->seo_title($this->postring->valid($_POST['namakategori'], 'xss')),
				'deskripsi' => $this->postring->valid($_POST['deskripsi'], 'xss'),
			);
			$query = $this->podb->update('pendidikankatsekolah')
				->set($pendidikankatsekolah)
				->where('idkategori', $this->postring->valid($_POST['id'], 'sql'));
			$query->execute();
			$this->poflash->success('Pendidikankatsekolah has been successfully updated', 'admin.php?mod=pendidikankatsekolah');
		}
		$id = $this->postring->valid($_GET['id'], 'sql');
		$current_pendidikankatsekolah = $this->podb->from('pendidikankatsekolah')
			->where('idkategori', $id)
			->limit(1)
			->fetch();
		if (empty($current_pendidikankatsekolah)) {
			echo $this->pohtml->error();
			exit;
		}
		?>
		<div class="block-content">
			<div class="row">
				<div class="col-md-12">
					<?=$this->pohtml->headTitle('Update Pendidikankatsekolah');?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<?=$this->pohtml->formStart(array('method' => 'post', 'action' => 'route.php?mod=pendidikankatsekolah&act=edit', 'autocomplete' => 'off'));?>
						<?=$this->pohtml->inputHidden(array('name' => 'id', 'value' => $current_pendidikankatsekolah['idkategori']));?>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label for="namakategori">Namakategori</label>
									<input type="text" name="namakategori" class="form-control" id="namakategori" value="<?=(isset($_POST['namakategori']) ? $_POST['namakategori'] : $current_pendidikankatsekolah['namakategori']);?>" placeholder="Namakategori" />
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="deskripsi">Deskripsi</label>
									<input type="text" name="deskripsi" class="form-control" id="deskripsi" value="<?=(isset($_POST['deskripsi']) ? $_POST['deskripsi'] : $current_pendidikankatsekolah['deskripsi']);?>" placeholder="Deskripsi" />
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
	 * Fungsi ini digunakan untuk menampilkan dan memproses halaman hapus pendidikankatsekolah.
	 *
	 * This function is used to display and process delete pendidikankatsekolah page.
	 *
	*/
	public function delete()
	{
		if (!$this->auth($_SESSION['leveluser'], 'pendidikankatsekolah', 'delete')) {
			echo $this->pohtml->error();
			exit;
		}
		if (!empty($_POST)) {
			$query = $this->podb->deleteFrom('pendidikankatsekolah')->where('idkategori', $this->postring->valid($_POST['id'], 'sql'));
			$query->execute();
			$this->poflash->success('Pendidikankatsekolah has been successfully deleted', 'admin.php?mod=pendidikankatsekolah');
		}
	}

	/**
	 * Fungsi ini digunakan untuk menampilkan dan memproses halaman hapus multi pendidikankatsekolah.
	 *
	 * This function is used to display and process multi delete pendidikankatsekolah page.
	 *
	*/
	public function multidelete()
	{
		if (!$this->auth($_SESSION['leveluser'], 'pendidikankatsekolah', 'delete')) {
			echo $this->pohtml->error();
			exit;
		}
		if (!empty($_POST)) {
			$totaldata = $this->postring->valid($_POST['totaldata'], 'xss');
			if ($totaldata != "0") {
				$items = $_POST['item'];
				foreach($items as $item){
					$query = $this->podb->deleteFrom('pendidikankatsekolah')->where('idkategori', $this->postring->valid($item['deldata'], 'sql'));
					$query->execute();
				}
				$this->poflash->success('Pendidikankatsekolah has been successfully deleted', 'admin.php?mod=pendidikankatsekolah');
			} else {
				$this->poflash->error('Error deleted pendidikankatsekolah data', 'admin.php?mod=pendidikankatsekolah');
			}
		}
	}

}