<?php
/*
 *
 * - PopojiCMS Admin File
 *
 * - File : admin_desakelurahan.php
 * - Version : 1.0
 * - Author : Jenuar Dalapang
 * - License : MIT License
 *
 *
 * Ini adalah file php yang di gunakan untuk menangani proses admin pada halaman desakelurahan.
 * This is a php file for handling admin process for desakelurahan page.
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

class Desakelurahan extends PoCore
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
	 * Fungsi ini digunakan untuk menampilkan halaman index desakelurahan.
	 *
	 * This function use for index desakelurahan page.
	 *
	*/
	public function index()
	{
		if (!$this->auth($_SESSION['leveluser'], 'desakelurahan', 'read')) {
			echo $this->pohtml->error();
			exit;
		}
		?>
		<div class="block-content">
			<div class="row">
				<div class="col-md-12">
					<?=$this->pohtml->headTitle('Desakelurahan', '
						<div class="btn-title pull-right">
							<a href="admin.php?mod=desakelurahan&act=addnew" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> '.$GLOBALS['_']['addnew'].'</a>
						</div>
					');?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<?=$this->pohtml->formStart(array('method' => 'post', 'action' => 'route.php?mod=desakelurahan&act=multidelete', 'autocomplete' => 'off'));?>
						<?=$this->pohtml->inputHidden(array('name' => 'totaldata', 'value' => '0', 'options' => 'id="totaldata"'));?>
						<?php
							$columns = array(
								array('title' => 'Id', 'options' => 'style="width:30px;"'),
								array('title' => 'Idkecamatan', 'options' => ''),
								array('title' => 'Namadesakelurahan', 'options' => ''),
								array('title' => 'Kadeslurah', 'options' => ''),
								array('title' => 'Alamat', 'options' => ''),
								array('title' => 'Telp', 'options' => ''),
								array('title' => 'Email', 'options' => ''),
								array('title' => 'Web', 'options' => ''),
								array('title' => 'Deskripsi', 'options' => ''),
								array('title' => 'Status', 'options' => ''),
								array('title' => 'Action', 'options' => 'class="no-sort" style="width:50px;"')
							);
						?>
						<?=$this->pohtml->createTable(array('id' => 'table-desakelurahan', 'class' => 'table table-striped table-bordered'), $columns, $tfoot = true);?>
					<?=$this->pohtml->formEnd();?>
				</div>
			</div>
		</div>
		<?=$this->pohtml->dialogDelete('desakelurahan');?>
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
		if (!$this->auth($_SESSION['leveluser'], 'desakelurahan', 'read')) {
			echo $this->pohtml->error();
			exit;
		}
		$table = 'desakelurahan';
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
			array('db' => 'idkecamatan', 'dt' => '2', 'field' => 'idkecamatan'),
			array('db' => 'namadesakelurahan', 'dt' => '3', 'field' => 'namadesakelurahan'),
			array('db' => 'kadeslurah', 'dt' => '4', 'field' => 'kadeslurah'),
			array('db' => 'alamat', 'dt' => '5', 'field' => 'alamat'),
			array('db' => 'telp', 'dt' => '6', 'field' => 'telp'),
			array('db' => 'email', 'dt' => '7', 'field' => 'email'),
			array('db' => 'web', 'dt' => '8', 'field' => 'web'),
			array('db' => 'deskripsi', 'dt' => '9', 'field' => 'deskripsi'),
			array('db' => 'status', 'dt' => '10', 'field' => 'status'),
			array('db' => $primarykey, 'dt' => '11', 'field' => $primarykey,
				'formatter' => function($d, $row, $i){
					return "<div class='text-center'>
						<div class='btn-group btn-group-xs'>
							<a href='admin.php?mod=desakelurahan&act=edit&id=".$d."' class='btn btn-xs btn-default' id='".$d."' data-toggle='tooltip' title='{$GLOBALS['_']['action_1']}'><i class='fa fa-pencil'></i></a>
							<a class='btn btn-xs btn-danger alertdel' id='".$d."' data-toggle='tooltip' title='{$GLOBALS['_']['action_2']}'><i class='fa fa-times'></i></a>
						</div>
					</div>";
				}
			),
		);
		echo json_encode(SSP::simple($_POST, $this->poconnect, $table, $primarykey, $columns));
	}

	/**
	 * Fungsi ini digunakan untuk menampilkan dan memproses halaman tambah desakelurahan.
	 *
	 * This function is used to display and process add desakelurahan page.
	 *
	*/
	public function addnew()
	{
		if (!$this->auth($_SESSION['leveluser'], 'desakelurahan', 'create')) {
			echo $this->pohtml->error();
			exit;
		}
		if (!empty($_POST)) {
			$desakelurahan = array(
				'idkecamatan' => $_POST['idkecamatan'],
				'namadesakelurahan' => $this->postring->valid($_POST['namadesakelurahan'], 'xss'),
				'seourl' => $this->postring->seo_title($this->postring->valid($_POST['namadesakelurahan'], 'xss')),
				'kadeslurah' => $this->postring->valid($_POST['kadeslurah'], 'xss'),
				'alamat' => $this->postring->valid($_POST['alamat'], 'xss'),
				'telp' => $this->postring->valid($_POST['telp'], 'xss'),
				'email' => $this->postring->valid($_POST['email'], 'xss'),
				'web' => $this->postring->valid($_POST['web'], 'xss'),
				'deskripsi' => $this->postring->valid($_POST['deskripsi'], 'xss'),
				'status' => $this->postring->valid($_POST['status'], 'xss'),
			);
			$query = $this->podb->insertInto('desakelurahan')->values($desakelurahan);
			$query->execute();
			$this->poflash->success('Desakelurahan has been successfully added', 'admin.php?mod=desakelurahan');
		}
		?>
		<div class="block-content">
			<div class="row">
				<div class="col-md-12">
					<?=$this->pohtml->headTitle('Add Desakelurahan');?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<?=$this->pohtml->formStart(array('method' => 'post', 'action' => 'route.php?mod=desakelurahan&act=addnew', 'autocomplete' => 'off'));?>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label for="idkecamatan">Idkecamatan</label>
									<input type="text" name="idkecamatan" class="form-control" id="idkecamatan" value="<?=(isset($_POST['idkecamatan']) ? $_POST['idkecamatan'] : '');?>" placeholder="Idkecamatan" />
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="namadesakelurahan">Namadesakelurahan</label>
									<input type="text" name="namadesakelurahan" class="form-control" id="namadesakelurahan" value="<?=(isset($_POST['namadesakelurahan']) ? $_POST['namadesakelurahan'] : '');?>" placeholder="Namadesakelurahan" />
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="kadeslurah">Kadeslurah</label>
									<input type="text" name="kadeslurah" class="form-control" id="kadeslurah" value="<?=(isset($_POST['kadeslurah']) ? $_POST['kadeslurah'] : '');?>" placeholder="Kadeslurah" />
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
	 * Fungsi ini digunakan untuk menampilkan dan memproses halaman edit desakelurahan.
	 *
	 * This function is used to display and process edit desakelurahan.
	 *
	*/
	public function edit()
	{
		if (!$this->auth($_SESSION['leveluser'], 'desakelurahan', 'update')) {
			echo $this->pohtml->error();
			exit;
		}
		if (!empty($_POST)) {
			$desakelurahan = array(
				'idkecamatan' => $_POST['idkecamatan'],
				'namadesakelurahan' => $this->postring->valid($_POST['namadesakelurahan'], 'xss'),
				'seourl' => $this->postring->seo_title($this->postring->valid($_POST['namadesakelurahan'], 'xss')),
				'kadeslurah' => $this->postring->valid($_POST['kadeslurah'], 'xss'),
				'alamat' => $this->postring->valid($_POST['alamat'], 'xss'),
				'telp' => $this->postring->valid($_POST['telp'], 'xss'),
				'email' => $this->postring->valid($_POST['email'], 'xss'),
				'web' => $this->postring->valid($_POST['web'], 'xss'),
				'deskripsi' => $this->postring->valid($_POST['deskripsi'], 'xss'),
				'status' => $this->postring->valid($_POST['status'], 'xss'),
			);
			$query = $this->podb->update('desakelurahan')
				->set($desakelurahan)
				->where('id', $this->postring->valid($_POST['id'], 'sql'));
			$query->execute();
			$this->poflash->success('Desakelurahan has been successfully updated', 'admin.php?mod=desakelurahan');
		}
		$id = $this->postring->valid($_GET['id'], 'sql');
		$current_desakelurahan = $this->podb->from('desakelurahan')
			->where('id', $id)
			->limit(1)
			->fetch();
		if (empty($current_desakelurahan)) {
			echo $this->pohtml->error();
			exit;
		}
		?>
		<div class="block-content">
			<div class="row">
				<div class="col-md-12">
					<?=$this->pohtml->headTitle('Update Desakelurahan');?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<?=$this->pohtml->formStart(array('method' => 'post', 'action' => 'route.php?mod=desakelurahan&act=edit', 'autocomplete' => 'off'));?>
						<?=$this->pohtml->inputHidden(array('name' => 'id', 'value' => $current_desakelurahan['id']));?>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label for="idkecamatan">Idkecamatan</label>
									<input type="text" name="idkecamatan" class="form-control" id="idkecamatan" value="<?=(isset($_POST['idkecamatan']) ? $_POST['idkecamatan'] : $current_desakelurahan['idkecamatan']);?>" placeholder="Idkecamatan" />
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="namadesakelurahan">Namadesakelurahan</label>
									<input type="text" name="namadesakelurahan" class="form-control" id="namadesakelurahan" value="<?=(isset($_POST['namadesakelurahan']) ? $_POST['namadesakelurahan'] : $current_desakelurahan['namadesakelurahan']);?>" placeholder="Namadesakelurahan" />
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="kadeslurah">Kadeslurah</label>
									<input type="text" name="kadeslurah" class="form-control" id="kadeslurah" value="<?=(isset($_POST['kadeslurah']) ? $_POST['kadeslurah'] : $current_desakelurahan['kadeslurah']);?>" placeholder="Kadeslurah" />
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="alamat">Alamat</label>
									<input type="text" name="alamat" class="form-control" id="alamat" value="<?=(isset($_POST['alamat']) ? $_POST['alamat'] : $current_desakelurahan['alamat']);?>" placeholder="Alamat" />
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="telp">Telp</label>
									<input type="text" name="telp" class="form-control" id="telp" value="<?=(isset($_POST['telp']) ? $_POST['telp'] : $current_desakelurahan['telp']);?>" placeholder="Telp" />
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="email">Email</label>
									<input type="text" name="email" class="form-control" id="email" value="<?=(isset($_POST['email']) ? $_POST['email'] : $current_desakelurahan['email']);?>" placeholder="Email" />
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="web">Web</label>
									<input type="text" name="web" class="form-control" id="web" value="<?=(isset($_POST['web']) ? $_POST['web'] : $current_desakelurahan['web']);?>" placeholder="Web" />
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="deskripsi">Deskripsi</label>
									<input type="text" name="deskripsi" class="form-control" id="deskripsi" value="<?=(isset($_POST['deskripsi']) ? $_POST['deskripsi'] : $current_desakelurahan['deskripsi']);?>" placeholder="Deskripsi" />
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="status">Status</label>
									<input type="text" name="status" class="form-control" id="status" value="<?=(isset($_POST['status']) ? $_POST['status'] : $current_desakelurahan['status']);?>" placeholder="Status" />
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
	 * Fungsi ini digunakan untuk menampilkan dan memproses halaman hapus desakelurahan.
	 *
	 * This function is used to display and process delete desakelurahan page.
	 *
	*/
	public function delete()
	{
		if (!$this->auth($_SESSION['leveluser'], 'desakelurahan', 'delete')) {
			echo $this->pohtml->error();
			exit;
		}
		if (!empty($_POST)) {
			$query = $this->podb->deleteFrom('desakelurahan')->where('id', $this->postring->valid($_POST['id'], 'sql'));
			$query->execute();
			$this->poflash->success('Desakelurahan has been successfully deleted', 'admin.php?mod=desakelurahan');
		}
	}

	/**
	 * Fungsi ini digunakan untuk menampilkan dan memproses halaman hapus multi desakelurahan.
	 *
	 * This function is used to display and process multi delete desakelurahan page.
	 *
	*/
	public function multidelete()
	{
		if (!$this->auth($_SESSION['leveluser'], 'desakelurahan', 'delete')) {
			echo $this->pohtml->error();
			exit;
		}
		if (!empty($_POST)) {
			$totaldata = $this->postring->valid($_POST['totaldata'], 'xss');
			if ($totaldata != "0") {
				$items = $_POST['item'];
				foreach($items as $item){
					$query = $this->podb->deleteFrom('desakelurahan')->where('id', $this->postring->valid($item['deldata'], 'sql'));
					$query->execute();
				}
				$this->poflash->success('Desakelurahan has been successfully deleted', 'admin.php?mod=desakelurahan');
			} else {
				$this->poflash->error('Error deleted desakelurahan data', 'admin.php?mod=desakelurahan');
			}
		}
	}

}