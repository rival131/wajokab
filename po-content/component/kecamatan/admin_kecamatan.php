<?php
/*
 *
 * - PopojiCMS Admin File
 *
 * - File : admin_kecamatan.php
 * - Version : 1.0
 * - Author : Jenuar Dalapang
 * - License : MIT License
 *
 *
 * Ini adalah file php yang di gunakan untuk menangani proses admin pada halaman kecamatan.
 * This is a php file for handling admin process for kecamatan page.
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

class Kecamatan extends PoCore
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
	 * Fungsi ini digunakan untuk menampilkan halaman index kecamatan.
	 *
	 * This function use for index kecamatan page.
	 *
	*/
	public function index()
	{
		if (!$this->auth($_SESSION['leveluser'], 'kecamatan', 'read')) {
			echo $this->pohtml->error();
			exit;
		}
		?>
		<div class="block-content">
			<div class="row">
				<div class="col-md-12">
					<?=$this->pohtml->headTitle('Kecamatan', '
						<div class="btn-title pull-right">
							<a href="admin.php?mod=kecamatan&act=addnew" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> '.$GLOBALS['_']['addnew'].'</a>
						</div>
					');?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<?=$this->pohtml->formStart(array('method' => 'post', 'action' => 'route.php?mod=kecamatan&act=multidelete', 'autocomplete' => 'off'));?>
						<?=$this->pohtml->inputHidden(array('name' => 'totaldata', 'value' => '0', 'options' => 'id="totaldata"'));?>
						<?php
							$columns = array(
								array('title' => 'Id', 'options' => 'style="width:30px;"'),
								array('title' => 'Nama Kecamatan', 'options' => ''),
								array('title' => 'Camat', 'options' => ''),
								array('title' => 'Alamat', 'options' => ''),
								array('title' => 'Telp', 'options' => ''),
								array('title' => 'Email', 'options' => ''),
								array('title' => 'Web', 'options' => ''),
								array('title' => 'Deskripsi', 'options' => ''),
								array('title' => 'Status', 'options' => ''),
								array('title' => 'Action', 'options' => 'class="no-sort" style="width:50px;"')
							);
						?>
						<?=$this->pohtml->createTable(array('id' => 'table-kecamatan', 'class' => 'table table-striped table-bordered'), $columns, $tfoot = true);?>
					<?=$this->pohtml->formEnd();?>
				</div>
			</div>
		</div>
		<?=$this->pohtml->dialogDelete('kecamatan');?>
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
		if (!$this->auth($_SESSION['leveluser'], 'kecamatan', 'read')) {
			echo $this->pohtml->error();
			exit;
		}
		$table = 'kecamatan';
		$primarykey = 'idkecamatan';
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
			array('db' => 'namakecamatan', 'dt' => '2', 'field' => 'namakecamatan'),
			array('db' => 'camat', 'dt' => '3', 'field' => 'camat'),
			array('db' => 'alamat', 'dt' => '4', 'field' => 'alamat'),
			array('db' => 'telp', 'dt' => '5', 'field' => 'telp'),
			array('db' => 'email', 'dt' => '6', 'field' => 'email'),
			array('db' => 'web', 'dt' => '7', 'field' => 'web'),
			array('db' => 'deskripsi', 'dt' => '8', 'field' => 'deskripsi'),
			array('db' => 'status', 'dt' => '9', 'field' => 'status'),
			array('db' => $primarykey, 'dt' => '10', 'field' => $primarykey,
				'formatter' => function($d, $row, $i){
					return "<div class='text-center'>
						<div class='btn-group btn-group-xs'>
							<a href='admin.php?mod=kecamatan&act=edit&id=".$d."' class='btn btn-xs btn-default' id='".$d."' data-toggle='tooltip' title='{$GLOBALS['_']['action_1']}'><i class='fa fa-pencil'></i></a>
							<a class='btn btn-xs btn-danger alertdel' id='".$d."' data-toggle='tooltip' title='{$GLOBALS['_']['action_2']}'><i class='fa fa-times'></i></a>
						</div>
					</div>";
				}
			),
		);
		echo json_encode(SSP::simple($_POST, $this->poconnect, $table, $primarykey, $columns));
	}

	/**
	 * Fungsi ini digunakan untuk menampilkan dan memproses halaman tambah kecamatan.
	 *
	 * This function is used to display and process add kecamatan page.
	 *
	*/
	public function addnew()
	{
		if (!$this->auth($_SESSION['leveluser'], 'kecamatan', 'create')) {
			echo $this->pohtml->error();
			exit;
		}
		if (!empty($_POST)) {
			$kecamatan = array(
				'namakecamatan' => $this->postring->valid($_POST['namakecamatan'], 'xss'),
				'seourl' => $this->postring->seo_title($this->postring->valid($_POST['namakecamatan'], 'xss')),
				'camat' => $this->postring->valid($_POST['camat'], 'xss'),
				'alamat' => $this->postring->valid($_POST['alamat'], 'xss'),
				'telp' => $this->postring->valid($_POST['telp'], 'xss'),
				'email' => $this->postring->valid($_POST['email'], 'xss'),
				'web' => $this->postring->valid($_POST['web'], 'xss'),
				'deskripsi' => $this->postring->valid($_POST['deskripsi'], 'xss'),
				'status' => $this->postring->valid($_POST['status'], 'xss'),
			);
			$query = $this->podb->insertInto('kecamatan')->values($kecamatan);
			$query->execute();
			$this->poflash->success('Kecamatan has been successfully added', 'admin.php?mod=kecamatan');
		}
		?>
		<div class="block-content">
			<div class="row">
				<div class="col-md-12">
					<?=$this->pohtml->headTitle('Add Kecamatan');?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<?=$this->pohtml->formStart(array('method' => 'post', 'action' => 'route.php?mod=kecamatan&act=addnew', 'autocomplete' => 'off'));?>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label for="namakecamatan">Namakecamatan</label>
									<input type="text" name="namakecamatan" class="form-control" id="namakecamatan" value="<?=(isset($_POST['namakecamatan']) ? $_POST['namakecamatan'] : '');?>" placeholder="Namakecamatan" />
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="camat">Camat</label>
									<input type="text" name="camat" class="form-control" id="camat" value="<?=(isset($_POST['camat']) ? $_POST['camat'] : '');?>" placeholder="Camat" />
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="alamat">Alamat</label>
									<input type="text" name="alamat" class="form-control" id="alamat" value="<?=(isset($_POST['alamat']) ? $_POST['alamat'] : '');?>" placeholder="Alamat" />
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="telp">Telp</label>
									<input type="text" name="telp" class="form-control" id="telp" value="<?=(isset($_POST['telp']) ? $_POST['telp'] : '');?>" placeholder="Telp" />
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="email">Email</label>
									<input type="text" name="email" class="form-control" id="email" value="<?=(isset($_POST['email']) ? $_POST['email'] : '');?>" placeholder="Email" />
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="web">Web</label>
									<input type="text" name="web" class="form-control" id="web" value="<?=(isset($_POST['web']) ? $_POST['web'] : '');?>" placeholder="Web" />
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="deskripsi">Deskripsi</label>
									<input type="text" name="deskripsi" class="form-control" id="deskripsi" value="<?=(isset($_POST['deskripsi']) ? $_POST['deskripsi'] : '');?>" placeholder="Deskripsi" />
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="status">Status</label>
									<input type="text" name="status" class="form-control" id="status" value="<?=(isset($_POST['status']) ? $_POST['status'] : '');?>" placeholder="Status" />
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
	 * Fungsi ini digunakan untuk menampilkan dan memproses halaman edit kecamatan.
	 *
	 * This function is used to display and process edit kecamatan.
	 *
	*/
	public function edit()
	{
		if (!$this->auth($_SESSION['leveluser'], 'kecamatan', 'update')) {
			echo $this->pohtml->error();
			exit;
		}
		if (!empty($_POST)) {
			$kecamatan = array(
				'namakecamatan' => $this->postring->valid($_POST['namakecamatan'], 'xss'),
				'seourl' => $this->postring->seo_title($this->postring->valid($_POST['namakecamatan'], 'xss')),
				'camat' => $this->postring->valid($_POST['camat'], 'xss'),
				'alamat' => $this->postring->valid($_POST['alamat'], 'xss'),
				'telp' => $this->postring->valid($_POST['telp'], 'xss'),
				'email' => $this->postring->valid($_POST['email'], 'xss'),
				'web' => $this->postring->valid($_POST['web'], 'xss'),
				'deskripsi' => $this->postring->valid($_POST['deskripsi'], 'xss'),
				'status' => $this->postring->valid($_POST['status'], 'xss'),
			);
			$query = $this->podb->update('kecamatan')
				->set($kecamatan)
				->where('idkecamatan', $this->postring->valid($_POST['id'], 'sql'));
			$query->execute();
			$this->poflash->success('Kecamatan has been successfully updated', 'admin.php?mod=kecamatan');
		}
		$id = $this->postring->valid($_GET['id'], 'sql');
		$current_kecamatan = $this->podb->from('kecamatan')
			->where('idkecamatan', $id)
			->limit(1)
			->fetch();
		if (empty($current_kecamatan)) {
			echo $this->pohtml->error();
			exit;
		}
		?>
		<div class="block-content">
			<div class="row">
				<div class="col-md-12">
					<?=$this->pohtml->headTitle('Update Kecamatan');?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<?=$this->pohtml->formStart(array('method' => 'post', 'action' => 'route.php?mod=kecamatan&act=edit', 'autocomplete' => 'off'));?>
						<?=$this->pohtml->inputHidden(array('name' => 'id', 'value' => $current_kecamatan['idkecamatan']));?>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label for="namakecamatan">Namakecamatan</label>
									<input type="text" name="namakecamatan" class="form-control" id="namakecamatan" value="<?=(isset($_POST['namakecamatan']) ? $_POST['namakecamatan'] : $current_kecamatan['namakecamatan']);?>" placeholder="Namakecamatan" />
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="camat">Camat</label>
									<input type="text" name="camat" class="form-control" id="camat" value="<?=(isset($_POST['camat']) ? $_POST['camat'] : $current_kecamatan['camat']);?>" placeholder="Camat" />
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="alamat">Alamat</label>
									<input type="text" name="alamat" class="form-control" id="alamat" value="<?=(isset($_POST['alamat']) ? $_POST['alamat'] : $current_kecamatan['alamat']);?>" placeholder="Alamat" />
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="telp">Telp</label>
									<input type="text" name="telp" class="form-control" id="telp" value="<?=(isset($_POST['telp']) ? $_POST['telp'] : $current_kecamatan['telp']);?>" placeholder="Telp" />
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="email">Email</label>
									<input type="text" name="email" class="form-control" id="email" value="<?=(isset($_POST['email']) ? $_POST['email'] : $current_kecamatan['email']);?>" placeholder="Email" />
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="web">Web</label>
									<input type="text" name="web" class="form-control" id="web" value="<?=(isset($_POST['web']) ? $_POST['web'] : $current_kecamatan['web']);?>" placeholder="Web" />
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="deskripsi">Deskripsi</label>
									<input type="text" name="deskripsi" class="form-control" id="deskripsi" value="<?=(isset($_POST['deskripsi']) ? $_POST['deskripsi'] : $current_kecamatan['deskripsi']);?>" placeholder="Deskripsi" />
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="status">Status</label>
									<input type="text" name="status" class="form-control" id="status" value="<?=(isset($_POST['status']) ? $_POST['status'] : $current_kecamatan['status']);?>" placeholder="Status" />
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
	 * Fungsi ini digunakan untuk menampilkan dan memproses halaman hapus kecamatan.
	 *
	 * This function is used to display and process delete kecamatan page.
	 *
	*/
	public function delete()
	{
		if (!$this->auth($_SESSION['leveluser'], 'kecamatan', 'delete')) {
			echo $this->pohtml->error();
			exit;
		}
		if (!empty($_POST)) {
			$query = $this->podb->deleteFrom('kecamatan')->where('idkecamatan', $this->postring->valid($_POST['id'], 'sql'));
			$query->execute();
			$this->poflash->success('Kecamatan has been successfully deleted', 'admin.php?mod=kecamatan');
		}
	}

	/**
	 * Fungsi ini digunakan untuk menampilkan dan memproses halaman hapus multi kecamatan.
	 *
	 * This function is used to display and process multi delete kecamatan page.
	 *
	*/
	public function multidelete()
	{
		if (!$this->auth($_SESSION['leveluser'], 'kecamatan', 'delete')) {
			echo $this->pohtml->error();
			exit;
		}
		if (!empty($_POST)) {
			$totaldata = $this->postring->valid($_POST['totaldata'], 'xss');
			if ($totaldata != "0") {
				$items = $_POST['item'];
				foreach($items as $item){
					$query = $this->podb->deleteFrom('kecamatan')->where('idkecamatan', $this->postring->valid($item['deldata'], 'sql'));
					$query->execute();
				}
				$this->poflash->success('Kecamatan has been successfully deleted', 'admin.php?mod=kecamatan');
			} else {
				$this->poflash->error('Error deleted kecamatan data', 'admin.php?mod=kecamatan');
			}
		}
	}

}