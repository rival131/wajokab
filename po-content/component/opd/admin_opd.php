<?php
/*
 *
 * - PopojiCMS Admin File
 *
 * - File : admin_opd.php
 * - Version : 1.0
 * - Author : cmink
 * - License : MIT License
 *
 *
 * Ini adalah file php yang di gunakan untuk menangani proses admin pada halaman opd.
 * This is a php file for handling admin process for opd page.
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

class opd extends PoCore
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
	 * Fungsi ini digunakan untuk menampilkan halaman index opd.
	 *
	 * This function use for index opd page.
	 *
	*/
	public function index()
	{
		if (!$this->auth($_SESSION['leveluser'], 'opd', 'read')) {
			echo $this->pohtml->error();
			exit;
		}
		?>
		<div class="block-content">
			<div class="row">
				<div class="col-md-12">
					<?=$this->pohtml->headTitle('opd', '
						<div class="btn-title pull-right">
							<a href="admin.php?mod=opd&act=addnew" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> '.$GLOBALS['_']['addnew'].'</a>
						</div>
					');?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<?=$this->pohtml->formStart(array('method' => 'post', 'action' => 'route.php?mod=opd&act=multidelete', 'autocomplete' => 'off'));?>
						<?=$this->pohtml->inputHidden(array('name' => 'totaldata', 'value' => '0', 'options' => 'id="totaldata"'));?>
						<?php
							$columns = array(
								array('title' => 'Id', 'options' => 'style="width:30px;"'),
								array('title' => 'Judul opd', 'options' => ''),
								array('title' => 'Tanggal', 'options' => ''),
								array('title' => 'jam', 'options' => ''),
								array('title' => 'Lokasi', 'options' => ''),
								array('title' => 'Keterangan', 'options' => ''),
								array('title' => 'Action', 'options' => 'class="no-sort" style="width:50px;"')
							);
						?>
						<?=$this->pohtml->createTable(array('id' => 'table-opd', 'class' => 'table table-striped table-bordered'), $columns, $tfoot = true);?>
					<?=$this->pohtml->formEnd();?>
				</div>
			</div>
		</div>
		<?=$this->pohtml->dialogDelete('opd');?>
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
		if (!$this->auth($_SESSION['leveluser'], 'opd', 'read')) {
			echo $this->pohtml->error();
			exit;
		}
		$table = 'opd';
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
			array('db' => 'judul', 'dt' => '2', 'field' => 'judul'),
			array('db' => 'tanggal', 'dt' => '3', 'field' => 'tanggal'),
			array('db' => 'jam', 'dt' => '4', 'field' => 'jam'),
			array('db' => 'lokasi', 'dt' => '5', 'field' => 'lokasi'),
			array('db' => 'keterangan', 'dt' => '6', 'field' => 'keterangan'),
			array('db' => $primarykey, 'dt' => '7', 'field' => $primarykey,
				'formatter' => function($d, $row, $i){
					return "<div class='text-center'>
						<div class='btn-group btn-group-xs'>
							<a href='admin.php?mod=opd&act=edit&id=".$d."' class='btn btn-xs btn-default' id='".$d."' data-toggle='tooltip' title='{$GLOBALS['_']['action_1']}'><i class='fa fa-pencil'></i></a>
							<a class='btn btn-xs btn-danger alertdel' id='".$d."' data-toggle='tooltip' title='{$GLOBALS['_']['action_2']}'><i class='fa fa-times'></i></a>
						</div>
					</div>";
				}
			),
		);
		echo json_encode(SSP::simple($_POST, $this->poconnect, $table, $primarykey, $columns));
	}

	/**
	 * Fungsi ini digunakan untuk menampilkan dan memproses halaman tambah opd.
	 *
	 * This function is used to display and process add opd page.
	 *
	*/
	public function addnew()
	{
		if (!$this->auth($_SESSION['leveluser'], 'opd', 'create')) {
			echo $this->pohtml->error();
			exit;
		}
		if (!empty($_POST)) {
			$opd = array(
				'judul' => $this->postring->valid($_POST['judul'], 'xss'),
			
				'tanggal' => $_POST['tanggal'],
				'jam' => $_POST['jam'],
				'lokasi' => $this->postring->valid($_POST['lokasi'], 'xss'),
				'keterangan' => stripslashes(htmlspecialchars($_POST['keterangan'],ENT_QUOTES)),
			);
			$query = $this->podb->insertInto('opd')->values($opd);
			$query->execute();
			$this->poflash->success('opd has been successfully added', 'admin.php?mod=opd');
		}
		?>
		<div class="block-content">
			<div class="row">
				<div class="col-md-12">
					<?=$this->pohtml->headTitle('Add opd');?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<?=$this->pohtml->formStart(array('method' => 'post', 'action' => 'route.php?mod=opd&act=addnew', 'autocomplete' => 'off'));?>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="judul">Judul opd</label>
									<input type="text" name="judul" class="form-control" id="judul" value="<?=(isset($_POST['judul']) ? $_POST['judul'] : '');?>" placeholder="Judul opd" />
								</div>
							</div>
							<div class="col-md-3">
								<?=$this->pohtml->inputText(array('type' => 'text', 'label' => 'Tanggal', 'name' => 'tanggal', 'id' => 'date', 'mandatory' => false, 'options' => ''));?>
							</div>
							<div class="col-md-3">
								<?=$this->pohtml->inputText(array('type' => 'text', 'label' => 'Jam', 'name' => 'jam', 'id' => 'time', 'mandatory' => false, 'options' => ''));?>
							</div>
							
							<div class="col-md-12">
								<div class="form-group">
									<label for="lokasi">Lokasi</label>
									<input type="text" name="lokasi" class="form-control" id="lokasi" value="<?=(isset($_POST['lokasi']) ? $_POST['lokasi'] : '');?>" placeholder="Lokasi" />
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="keterangan">Keterangan</label>
									<textarea name="keterangan" class="form-control" id="po-wysiwyg" placeholder="keterangan" style="width:100%; height:300px;"><?=(isset($_POST['keterangan']) ? $_POST['keterangan'] : '');?></textarea>
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
	 * Fungsi ini digunakan untuk menampilkan dan memproses halaman edit opd.
	 *
	 * This function is used to display and process edit opd.
	 *
	*/
	public function edit()
	{
		if (!$this->auth($_SESSION['leveluser'], 'opd', 'update')) {
			echo $this->pohtml->error();
			exit;
		}
		if (!empty($_POST)) {
			$opd = array(
				'judul' => $this->postring->valid($_POST['judul'], 'xss'),
				'seourl' => $this->postring->seo_title($this->postring->valid($_POST['judul'], 'xss')),
				'tanggal' => $_POST['tanggal'],
				'jam' => $_POST['jam'],
			
				'lokasi' => $this->postring->valid($_POST['lokasi'], 'xss'),
				'keterangan' => stripslashes(htmlspecialchars($_POST['keterangan'],ENT_QUOTES)),
			);
			$query = $this->podb->update('opd')
				->set($opd)
				->where('id', $this->postring->valid($_POST['id'], 'sql'));
			$query->execute();
			$this->poflash->success('opd has been successfully updated', 'admin.php?mod=opd');
		}
		$id = $this->postring->valid($_GET['id'], 'sql');
		$current_opd = $this->podb->from('opd')
			->where('id', $id)
			->limit(1)
			->fetch();
		if (empty($current_opd)) {
			echo $this->pohtml->error();
			exit;
		}
		?>
		<div class="block-content">
			<div class="row">
				<div class="col-md-12">
					<?=$this->pohtml->headTitle('Update opd');?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<?=$this->pohtml->formStart(array('method' => 'post', 'action' => 'route.php?mod=opd&act=edit', 'autocomplete' => 'off'));?>
						<?=$this->pohtml->inputHidden(array('name' => 'id', 'value' => $current_opd['id']));?>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="judul">Judul opd</label>
									<input type="text" name="judul" class="form-control" id="judul" value="<?=(isset($_POST['judul']) ? $_POST['judul'] : $current_opd['judul']);?>" placeholder="Judul opd" />
								</div>
							</div>
							<div class="col-md-3">
								<?=$this->pohtml->inputText(array('type' => 'text', 'label' => 'Tanggal', 'name' => 'tanggal', 'id' => 'date', 'value' => $current_opd['tanggal'], 'mandatory' => false, 'options' => ''));?>
							</div>
							<div class="col-md-3">
								<?=$this->pohtml->inputText(array('type' => 'text', 'label' => 'Jam', 'name' => 'jam', 'id' => 'time', 'value' => $current_opd['jam'], 'mandatory' => false, 'options' => ''));?>
							</div>
							
							<div class="col-md-12">
								<div class="form-group">
									<label for="lokasi">Lokasi</label>
									<input type="text" name="lokasi" class="form-control" id="lokasi" value="<?=(isset($_POST['lokasi']) ? $_POST['lokasi'] : $current_opd['lokasi']);?>" placeholder="Lokasi" />
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="keterangan">keterangan</label>
									<textarea name="keterangan" class="form-control" id="po-wysiwyg" placeholder="keterangan" style="width:100%; height:300px;"><?=(isset($_POST['keterangan']) ? $_POST['keterangan'] : $current_opd['keterangan']);?></textarea>
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
	 * Fungsi ini digunakan untuk menampilkan dan memproses halaman hapus opd.
	 *
	 * This function is used to display and process delete opd page.
	 *
	*/
	public function delete()
	{
		if (!$this->auth($_SESSION['leveluser'], 'opd', 'delete')) {
			echo $this->pohtml->error();
			exit;
		}
		if (!empty($_POST)) {
			$query = $this->podb->deleteFrom('opd')->where('id', $this->postring->valid($_POST['id'], 'sql'));
			$query->execute();
			$this->poflash->success('opd has been successfully deleted', 'admin.php?mod=opd');
		}
	}

	/**
	 * Fungsi ini digunakan untuk menampilkan dan memproses halaman hapus multi opd.
	 *
	 * This function is used to display and process multi delete opd page.
	 *
	*/
	public function multidelete()
	{
		if (!$this->auth($_SESSION['leveluser'], 'opd', 'delete')) {
			echo $this->pohtml->error();
			exit;
		}
		if (!empty($_POST)) {
			$totaldata = $this->postring->valid($_POST['totaldata'], 'xss');
			if ($totaldata != "0") {
				$items = $_POST['item'];
				foreach($items as $item){
					$query = $this->podb->deleteFrom('opd')->where('id', $this->postring->valid($item['deldata'], 'sql'));
					$query->execute();
				}
				$this->poflash->success('opd has been successfully deleted', 'admin.php?mod=opd');
			} else {
				$this->poflash->error('Error deleted opd data', 'admin.php?mod=opd');
			}
		}
	}

}