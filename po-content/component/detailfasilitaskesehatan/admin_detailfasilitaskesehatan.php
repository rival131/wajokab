<?php
/*
 *
 * - PopojiCMS Admin File
 *
 * - File : admin_detailfasilitaskesehatan.php
 * - Version : 1.0
 * - Author : Jenuar Dalapang
 * - License : MIT License
 *
 *
 * Ini adalah file php yang di gunakan untuk menangani proses admin pada halaman detailfasilitaskesehatan.
 * This is a php file for handling admin process for detailfasilitaskesehatan page.
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

class Detailfasilitaskesehatan extends PoCore
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
	 * Fungsi ini digunakan untuk menampilkan halaman index detailfasilitaskesehatan.
	 *
	 * This function use for index detailfasilitaskesehatan page.
	 *
	*/
	public function index()
	{
		if (!$this->auth($_SESSION['leveluser'], 'detailfasilitaskesehatan', 'read')) {
			echo $this->pohtml->error();
			exit;
		}
		?>
		<div class="block-content">
			<div class="row">
				<div class="col-md-12">
					<?=$this->pohtml->headTitle('Detailfasilitaskesehatan', '
						<div class="btn-title pull-right">
							<a href="admin.php?mod=detailfasilitaskesehatan&act=addnew" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> '.$GLOBALS['_']['addnew'].'</a>
						</div>
					');?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<?=$this->pohtml->formStart(array('method' => 'post', 'action' => 'route.php?mod=detailfasilitaskesehatan&act=multidelete', 'autocomplete' => 'off'));?>
						<?=$this->pohtml->inputHidden(array('name' => 'totaldata', 'value' => '0', 'options' => 'id="totaldata"'));?>
						<?php
							$columns = array(
								array('title' => 'Id', 'options' => 'style="width:30px;"'),
								array('title' => 'Jenis', 'options' => ''),
								array('title' => 'Nama', 'options' => ''),
								array('title' => 'Kodefaskes', 'options' => ''),
								// array('title' => 'Kelas', 'options' => ''),
								// array('title' => 'Direktur', 'options' => ''),
								array('title' => 'Alamat', 'options' => ''),
								array('title' => 'Kecamatan', 'options' => ''),
								// array('title' => 'Pemilik', 'options' => ''),
								// array('title' => 'Telpon', 'options' => ''),
								// array('title' => 'Email', 'options' => ''),
								// array('title' => 'Website', 'options' => ''),
								// array('title' => 'Fax', 'options' => ''),
								// array('title' => 'Ugd', 'options' => ''),
								// array('title' => 'Vip', 'options' => ''),
								// array('title' => 'Vvip', 'options' => ''),
								// array('title' => 'Kelas1', 'options' => ''),
								// array('title' => 'Kelas2', 'options' => ''),
								// array('title' => 'Kelas3', 'options' => ''),
								// array('title' => 'Jumdokter', 'options' => ''),
								// array('title' => 'Jumperawat', 'options' => ''),
								// array('title' => 'Foto', 'options' => ''),
								// array('title' => 'Seourl', 'options' => ''),
								array('title' => 'Action', 'options' => 'class="no-sort" style="width:50px;"')
							);
						?>
						<?=$this->pohtml->createTable(array('id' => 'table-detailfasilitaskesehatan', 'class' => 'table table-striped table-bordered'), $columns, $tfoot = true);?>
					<?=$this->pohtml->formEnd();?>
				</div>
			</div>
		</div>
		<?=$this->pohtml->dialogDelete('detailfasilitaskesehatan');?>
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
		if (!$this->auth($_SESSION['leveluser'], 'detailfasilitaskesehatan', 'read')) {
			echo $this->pohtml->error();
			exit;
		}
		$table = 'detailfasilitaskesehatan';
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
			array('db' => 'nama', 'dt' => '3', 'field' => 'nama'),
			array('db' => 'kodefaskes', 'dt' => '4', 'field' => 'kodefaskes'),
			// array('db' => 'kelas', 'dt' => '5', 'field' => 'kelas'),
			// array('db' => 'direktur', 'dt' => '6', 'field' => 'direktur'),
			array('db' => 'alamat', 'dt' => '5', 'field' => 'alamat'),
			array('db' => 'kecamatan', 'dt' => '6', 'field' => 'kecamatan'),
			// array('db' => 'pemilik', 'dt' => '9', 'field' => 'pemilik'),
			// array('db' => 'telpon', 'dt' => '10', 'field' => 'telpon'),
			// array('db' => 'email', 'dt' => '11', 'field' => 'email'),
			// array('db' => 'website', 'dt' => '12', 'field' => 'website'),
			// array('db' => 'fax', 'dt' => '13', 'field' => 'fax'),
			// array('db' => 'ugd', 'dt' => '14', 'field' => 'ugd'),
			// array('db' => 'vip', 'dt' => '15', 'field' => 'vip'),
			// array('db' => 'vvip', 'dt' => '16', 'field' => 'vvip'),
			// array('db' => 'kelas1', 'dt' => '17', 'field' => 'kelas1'),
			// array('db' => 'kelas2', 'dt' => '18', 'field' => 'kelas2'),
			// array('db' => 'kelas3', 'dt' => '19', 'field' => 'kelas3'),
			// array('db' => 'jumdokter', 'dt' => '20', 'field' => 'jumdokter'),
			// array('db' => 'jumperawat', 'dt' => '21', 'field' => 'jumperawat'),
			// array('db' => 'foto', 'dt' => '22', 'field' => 'foto'),
			// array('db' => 'seourl', 'dt' => '7', 'field' => 'seourl'),
			array('db' => $primarykey, 'dt' => '7', 'field' => $primarykey,
				'formatter' => function($d, $row, $i){
					return "<div class='text-center'>
						<div class='btn-group btn-group-xs'>
							<a href='admin.php?mod=detailfasilitaskesehatan&act=edit&id=".$d."' class='btn btn-xs btn-default' id='".$d."' data-toggle='tooltip' title='{$GLOBALS['_']['action_1']}'><i class='fa fa-pencil'></i></a>
							<a class='btn btn-xs btn-danger alertdel' id='".$d."' data-toggle='tooltip' title='{$GLOBALS['_']['action_2']}'><i class='fa fa-times'></i></a>
						</div>
					</div>";
				}
			),
		);
		$joinquery = "FROM detailfasilitaskesehatan AS a JOIN katfasilitaskesehatan AS b ON (b.idkategori = a.idkategori)";
		echo json_encode(SSP::simple($_POST, $this->poconnect, $table, $primarykey, $columns, $joinquery));
	}

	/**
	 * Fungsi ini digunakan untuk menampilkan dan memproses halaman tambah detailfasilitaskesehatan.
	 *
	 * This function is used to display and process add detailfasilitaskesehatan page.
	 *
	*/
	public function addnew()
	{
		if (!$this->auth($_SESSION['leveluser'], 'detailfasilitaskesehatan', 'create')) {
			echo $this->pohtml->error();
			exit;
		}
		if (!empty($_POST)) {
			$detailfasilitaskesehatan = array(
				'idkategori' => $_POST['idkategori'],
				'nama' => $this->postring->valid($_POST['nama'], 'xss'),
				'seourl' => $this->postring->seo_title($this->postring->valid($_POST['nama'], 'xss')),
				'kodefaskes' => $this->postring->valid($_POST['kodefaskes'], 'xss'),
				'kelas' => $this->postring->valid($_POST['kelas'], 'xss'),
				'direktur' => $this->postring->valid($_POST['direktur'], 'xss'),
				'alamat' => $this->postring->valid($_POST['alamat'], 'xss'),
				'kecamatan' => $this->postring->valid($_POST['kecamatan'], 'xss'),
				'pemilik' => $this->postring->valid($_POST['pemilik'], 'xss'),
				'telpon' => $this->postring->valid($_POST['telpon'], 'xss'),
				'email' => $this->postring->valid($_POST['email'], 'xss'),
				'website' => $this->postring->valid($_POST['website'], 'xss'),
				'fax' => $this->postring->valid($_POST['fax'], 'xss'),
				'ugd' => $this->postring->valid($_POST['ugd'], 'xss'),
				'vip' => $this->postring->valid($_POST['vip'], 'xss'),
				'vvip' => $this->postring->valid($_POST['vvip'], 'xss'),
				'kelas1' => $this->postring->valid($_POST['kelas1'], 'xss'),
				'kelas2' => $this->postring->valid($_POST['kelas2'], 'xss'),
				'kelas3' => $this->postring->valid($_POST['kelas3'], 'xss'),
				'jumdokter' => $this->postring->valid($_POST['jumdokter'], 'xss'),
				'jumperawat' => $this->postring->valid($_POST['jumperawat'], 'xss'),
				'foto' => $this->postring->valid($_POST['foto'], 'xss'),
				'seourl' => $this->postring->valid($_POST['seourl'], 'xss'),
			);
			$query = $this->podb->insertInto('detailfasilitaskesehatan')->values($detailfasilitaskesehatan);
			$query->execute();
			$this->poflash->success('Detailfasilitaskesehatan has been successfully added', 'admin.php?mod=detailfasilitaskesehatan');
		}
		?>
		<div class="block-content">
			<div class="row">
				<div class="col-md-12">
					<?=$this->pohtml->headTitle('Add Detailfasilitaskesehatan');?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<?=$this->pohtml->formStart(array('method' => 'post', 'action' => 'route.php?mod=detailfasilitaskesehatan&act=addnew', 'autocomplete' => 'off'));?>
						<div class="row">
							<div class="col-md-4">
							<div class="input-group">
									<?php
										$kats = $this->podb->from('katfasilitaskesehatan')
											->orderBy('idkategori DESC')
											->fetchAll();
										echo $this->pohtml->inputSelectNoOpt(array('id' => 'idkategori', 'label' => 'Kategori', 'name' => 'idkategori', 'mandatory' => true));
										foreach($kats as $kat){
											echo '<option value="'.$kat['idkategori'].'">'.$kat['namakategori'].'</option>';
										}
										echo $this->pohtml->inputSelectNoOptEnd();
									?>
									<span class="input-group-btn" style="padding-top:25px !important;">
										<a href="admin.php?mod=katfasilitaskesehatan&act=addnew" class="btn btn-success"><?=$GLOBALS['_']['addnew'];?></a>
									</span>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="nama">Nama Fasilitas</label>
									<input type="text" name="nama" class="form-control" id="nama" value="<?=(isset($_POST['nama']) ? $_POST['nama'] : '');?>" placeholder="Nama" />
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="kodefaskes">Kode</label>
									<input type="text" name="kodefaskes" class="form-control" id="kodefaskes" value="<?=(isset($_POST['kodefaskes']) ? $_POST['kodefaskes'] : '');?>" placeholder="Kodefaskes" />
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="kelas">Kelas</label>
									<input type="text" name="kelas" class="form-control" id="kelas" value="<?=(isset($_POST['kelas']) ? $_POST['kelas'] : '');?>" placeholder="Kelas" />
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="direktur">Direktur</label>
									<input type="text" name="direktur" class="form-control" id="direktur" value="<?=(isset($_POST['direktur']) ? $_POST['direktur'] : '');?>" placeholder="Direktur" />
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
								<div class="form-group">
									<label for="pemilik">Pemilik</label>
									<input type="text" name="pemilik" class="form-control" id="pemilik" value="<?=(isset($_POST['pemilik']) ? $_POST['pemilik'] : '');?>" placeholder="Pemilik" />
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="telpon">Telpon</label>
									<input type="text" name="telpon" class="form-control" id="telpon" value="<?=(isset($_POST['telpon']) ? $_POST['telpon'] : '');?>" placeholder="Telpon" />
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="email">Email</label>
									<input type="text" name="email" class="form-control" id="email" value="<?=(isset($_POST['email']) ? $_POST['email'] : '');?>" placeholder="Email" />
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="website">Website</label>
									<input type="text" name="website" class="form-control" id="website" value="<?=(isset($_POST['website']) ? $_POST['website'] : '');?>" placeholder="Website" />
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="fax">Fax</label>
									<input type="text" name="fax" class="form-control" id="fax" value="<?=(isset($_POST['fax']) ? $_POST['fax'] : '');?>" placeholder="Fax" />
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">
									<label for="ugd">Ugd</label>
									<input type="text" name="ugd" class="form-control" id="ugd" value="<?=(isset($_POST['ugd']) ? $_POST['ugd'] : '');?>" placeholder="Ugd" />
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">
									<label for="vip">Vip</label>
									<input type="text" name="vip" class="form-control" id="vip" value="<?=(isset($_POST['vip']) ? $_POST['vip'] : '');?>" placeholder="Vip" />
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">
									<label for="vvip">Vvip</label>
									<input type="text" name="vvip" class="form-control" id="vvip" value="<?=(isset($_POST['vvip']) ? $_POST['vvip'] : '');?>" placeholder="Vvip" />
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">
									<label for="kelas1">Kelas1</label>
									<input type="text" name="kelas1" class="form-control" id="kelas1" value="<?=(isset($_POST['kelas1']) ? $_POST['kelas1'] : '');?>" placeholder="Kelas1" />
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">
									<label for="kelas2">Kelas2</label>
									<input type="text" name="kelas2" class="form-control" id="kelas2" value="<?=(isset($_POST['kelas2']) ? $_POST['kelas2'] : '');?>" placeholder="Kelas2" />
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">
									<label for="kelas3">Kelas3</label>
									<input type="text" name="kelas3" class="form-control" id="kelas3" value="<?=(isset($_POST['kelas3']) ? $_POST['kelas3'] : '');?>" placeholder="Kelas3" />
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="jumdokter">Jumdokter</label>
									<input type="text" name="jumdokter" class="form-control" id="jumdokter" value="<?=(isset($_POST['jumdokter']) ? $_POST['jumdokter'] : '');?>" placeholder="Jumdokter" />
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="jumperawat">Jumperawat</label>
									<input type="text" name="jumperawat" class="form-control" id="jumperawat" value="<?=(isset($_POST['jumperawat']) ? $_POST['jumperawat'] : '');?>" placeholder="Jumperawat" />
								</div>
							</div>
							<div class="col-md-12">
							<?=$this->pohtml->inputText(array('type' => 'text', 'label' => 'foto', 'name' => 'foto', 'id' => 'picture', 'mandatory' => false, 'options' => '',), $inputgroup = true, $inputgroupopt = array('href' => '../'.DIR_INC.'/js/filemanager/dialog.php?type=0&field_id=picture', 'id' => 'browse-file', 'class' => 'btn-success', 'options' => '', 'title' => $GLOBALS['_']['action_7'].' foto'));?>

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
	 * Fungsi ini digunakan untuk menampilkan dan memproses halaman edit detailfasilitaskesehatan.
	 *
	 * This function is used to display and process edit detailfasilitaskesehatan.
	 *
	*/
	public function edit()
	{
		if (!$this->auth($_SESSION['leveluser'], 'detailfasilitaskesehatan', 'update')) {
			echo $this->pohtml->error();
			exit;
		}
		if (!empty($_POST)) {
			$detailfasilitaskesehatan = array(
				'idkategori' => $_POST['idkategori'],
				'nama' => $this->postring->valid($_POST['nama'], 'xss'),
				'seourl' => $this->postring->seo_title($this->postring->valid($_POST['nama'], 'xss')),
				'kodefaskes' => $this->postring->valid($_POST['kodefaskes'], 'xss'),
				'kelas' => $this->postring->valid($_POST['kelas'], 'xss'),
				'direktur' => $this->postring->valid($_POST['direktur'], 'xss'),
				'alamat' => $this->postring->valid($_POST['alamat'], 'xss'),
				'kecamatan' => $this->postring->valid($_POST['kecamatan'], 'xss'),
				'pemilik' => $this->postring->valid($_POST['pemilik'], 'xss'),
				'telpon' => $this->postring->valid($_POST['telpon'], 'xss'),
				'email' => $this->postring->valid($_POST['email'], 'xss'),
				'website' => $this->postring->valid($_POST['website'], 'xss'),
				'fax' => $this->postring->valid($_POST['fax'], 'xss'),
				'ugd' => $this->postring->valid($_POST['ugd'], 'xss'),
				'vip' => $this->postring->valid($_POST['vip'], 'xss'),
				'vvip' => $this->postring->valid($_POST['vvip'], 'xss'),
				'kelas1' => $this->postring->valid($_POST['kelas1'], 'xss'),
				'kelas2' => $this->postring->valid($_POST['kelas2'], 'xss'),
				'kelas3' => $this->postring->valid($_POST['kelas3'], 'xss'),
				'jumdokter' => $this->postring->valid($_POST['jumdokter'], 'xss'),
				'jumperawat' => $this->postring->valid($_POST['jumperawat'], 'xss'),
				'foto' => $this->postring->valid($_POST['foto'], 'xss'),
				'seourl' => $this->postring->valid($_POST['seourl'], 'xss'),
			);
			$query = $this->podb->update('detailfasilitaskesehatan')
				->set($detailfasilitaskesehatan)
				->where('id', $this->postring->valid($_POST['id'], 'sql'));
			$query->execute();
			$this->poflash->success('Detailfasilitaskesehatan has been successfully updated', 'admin.php?mod=detailfasilitaskesehatan');
		}
		$id = $this->postring->valid($_GET['id'], 'sql');
		$current_detailfasilitaskesehatan = $this->podb->from('detailfasilitaskesehatan')
			->select('katfasilitaskesehatan.namakategori AS namakategori')
			->leftJoin('katfasilitaskesehatan ON katfasilitaskesehatan.idkategori = detailfasilitaskesehatan.idkategori')
			->where('id', $id)
			->limit(1)
			->fetch();
		if (empty($current_detailfasilitaskesehatan)) {
			echo $this->pohtml->error();
			exit;
		}
		?>
		<div class="block-content">
			<div class="row">
				<div class="col-md-12">
					<?=$this->pohtml->headTitle('Update Detailfasilitaskesehatan');?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<?=$this->pohtml->formStart(array('method' => 'post', 'action' => 'route.php?mod=detailfasilitaskesehatan&act=edit', 'autocomplete' => 'off'));?>
						<?=$this->pohtml->inputHidden(array('name' => 'id', 'value' => $current_detailfasilitaskesehatan['id']));?>
						<div class="row">
							<div class="col-md-4">
							<div class="input-group">
									<?php
										$kats = $this->podb->from('katfasilitaskesehatan')
											->orderBy('idkategori DESC')
											->fetchAll();
										echo $this->pohtml->inputSelectNoOpt(array('id' => 'idkategori', 'label' => 'Kategori', 'name' => 'idkategori', 'mandatory' => true));
										echo '<option value="'.$current_detailfasilitaskesehatan['idkategori'].'">'.'Terpilih'.' - '.$current_detailfasilitaskesehatan['namakategori'].'</option>';
										foreach($kats as $kat){
											echo '<option value="'.$kat['idkategori'].'">'.$kat['namakategori'].'</option>';
										}
										echo $this->pohtml->inputSelectNoOptEnd();
									?>
									<span class="input-group-btn" style="padding-top:25px !important;">
										<a href="admin.php?mod=katfasilitaskesehatan&act=addnew" class="btn btn-success"><?=$GLOBALS['_']['addnew'];?></a>
									</span>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="nama">Nama</label>
									<input type="text" name="nama" class="form-control" id="nama" value="<?=(isset($_POST['nama']) ? $_POST['nama'] : $current_detailfasilitaskesehatan['nama']);?>" placeholder="Nama" />
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="kodefaskes">Kodefaskes</label>
									<input type="text" name="kodefaskes" class="form-control" id="kodefaskes" value="<?=(isset($_POST['kodefaskes']) ? $_POST['kodefaskes'] : $current_detailfasilitaskesehatan['kodefaskes']);?>" placeholder="Kodefaskes" />
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="kelas">Kelas</label>
									<input type="text" name="kelas" class="form-control" id="kelas" value="<?=(isset($_POST['kelas']) ? $_POST['kelas'] : $current_detailfasilitaskesehatan['kelas']);?>" placeholder="Kelas" />
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="direktur">Direktur</label>
									<input type="text" name="direktur" class="form-control" id="direktur" value="<?=(isset($_POST['direktur']) ? $_POST['direktur'] : $current_detailfasilitaskesehatan['direktur']);?>" placeholder="Direktur" />
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="alamat">Alamat</label>
									<input type="text" name="alamat" class="form-control" id="alamat" value="<?=(isset($_POST['alamat']) ? $_POST['alamat'] : $current_detailfasilitaskesehatan['alamat']);?>" placeholder="Alamat" />
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="kecamatan">Kecamatan</label>
									<input type="text" name="kecamatan" class="form-control" id="kecamatan" value="<?=(isset($_POST['kecamatan']) ? $_POST['kecamatan'] : $current_detailfasilitaskesehatan['kecamatan']);?>" placeholder="Kecamatan" />
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="pemilik">Pemilik</label>
									<input type="text" name="pemilik" class="form-control" id="pemilik" value="<?=(isset($_POST['pemilik']) ? $_POST['pemilik'] : $current_detailfasilitaskesehatan['pemilik']);?>" placeholder="Pemilik" />
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="telpon">Telpon</label>
									<input type="text" name="telpon" class="form-control" id="telpon" value="<?=(isset($_POST['telpon']) ? $_POST['telpon'] : $current_detailfasilitaskesehatan['telpon']);?>" placeholder="Telpon" />
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="email">Email</label>
									<input type="text" name="email" class="form-control" id="email" value="<?=(isset($_POST['email']) ? $_POST['email'] : $current_detailfasilitaskesehatan['email']);?>" placeholder="Email" />
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="website">Website</label>
									<input type="text" name="website" class="form-control" id="website" value="<?=(isset($_POST['website']) ? $_POST['website'] : $current_detailfasilitaskesehatan['website']);?>" placeholder="Website" />
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="fax">Fax</label>
									<input type="text" name="fax" class="form-control" id="fax" value="<?=(isset($_POST['fax']) ? $_POST['fax'] : $current_detailfasilitaskesehatan['fax']);?>" placeholder="Fax" />
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">
									<label for="ugd">Ugd</label>
									<input type="text" name="ugd" class="form-control" id="ugd" value="<?=(isset($_POST['ugd']) ? $_POST['ugd'] : $current_detailfasilitaskesehatan['ugd']);?>" placeholder="Ugd" />
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">
									<label for="vip">Vip</label>
									<input type="text" name="vip" class="form-control" id="vip" value="<?=(isset($_POST['vip']) ? $_POST['vip'] : $current_detailfasilitaskesehatan['vip']);?>" placeholder="Vip" />
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">
									<label for="vvip">Vvip</label>
									<input type="text" name="vvip" class="form-control" id="vvip" value="<?=(isset($_POST['vvip']) ? $_POST['vvip'] : $current_detailfasilitaskesehatan['vvip']);?>" placeholder="Vvip" />
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">
									<label for="kelas1">Kelas1</label>
									<input type="text" name="kelas1" class="form-control" id="kelas1" value="<?=(isset($_POST['kelas1']) ? $_POST['kelas1'] : $current_detailfasilitaskesehatan['kelas1']);?>" placeholder="Kelas1" />
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">
									<label for="kelas2">Kelas2</label>
									<input type="text" name="kelas2" class="form-control" id="kelas2" value="<?=(isset($_POST['kelas2']) ? $_POST['kelas2'] : $current_detailfasilitaskesehatan['kelas2']);?>" placeholder="Kelas2" />
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">
									<label for="kelas3">Kelas3</label>
									<input type="text" name="kelas3" class="form-control" id="kelas3" value="<?=(isset($_POST['kelas3']) ? $_POST['kelas3'] : $current_detailfasilitaskesehatan['kelas3']);?>" placeholder="Kelas3" />
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="jumdokter">Jumdokter</label>
									<input type="text" name="jumdokter" class="form-control" id="jumdokter" value="<?=(isset($_POST['jumdokter']) ? $_POST['jumdokter'] : $current_detailfasilitaskesehatan['jumdokter']);?>" placeholder="Jumdokter" />
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="jumperawat">Jumperawat</label>
									<input type="text" name="jumperawat" class="form-control" id="jumperawat" value="<?=(isset($_POST['jumperawat']) ? $_POST['jumperawat'] : $current_detailfasilitaskesehatan['jumperawat']);?>" placeholder="Jumperawat" />
								</div>
							</div>
							<div class="col-md-12">
							<?=$this->pohtml->inputText(array('type' => 'text', 'label' => 'foto', 'name' => 'foto', 'id' => 'picture', 'mandatory' => false, 'options' => '',), $inputgroup = true, $inputgroupopt = array('href' => '../'.DIR_INC.'/js/filemanager/dialog.php?type=0&field_id=picture', 'id' => 'browse-file', 'class' => 'btn-success', 'options' => '', 'title' => $GLOBALS['_']['action_7'].' foto'));?>							</div>

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
	 * Fungsi ini digunakan untuk menampilkan dan memproses halaman hapus detailfasilitaskesehatan.
	 *
	 * This function is used to display and process delete detailfasilitaskesehatan page.
	 *
	*/
	public function delete()
	{
		if (!$this->auth($_SESSION['leveluser'], 'detailfasilitaskesehatan', 'delete')) {
			echo $this->pohtml->error();
			exit;
		}
		if (!empty($_POST)) {
			$query = $this->podb->deleteFrom('detailfasilitaskesehatan')->where('id', $this->postring->valid($_POST['id'], 'sql'));
			$query->execute();
			$this->poflash->success('Detailfasilitaskesehatan has been successfully deleted', 'admin.php?mod=detailfasilitaskesehatan');
		}
	}

	/**
	 * Fungsi ini digunakan untuk menampilkan dan memproses halaman hapus multi detailfasilitaskesehatan.
	 *
	 * This function is used to display and process multi delete detailfasilitaskesehatan page.
	 *
	*/
	public function multidelete()
	{
		if (!$this->auth($_SESSION['leveluser'], 'detailfasilitaskesehatan', 'delete')) {
			echo $this->pohtml->error();
			exit;
		}
		if (!empty($_POST)) {
			$totaldata = $this->postring->valid($_POST['totaldata'], 'xss');
			if ($totaldata != "0") {
				$items = $_POST['item'];
				foreach($items as $item){
					$query = $this->podb->deleteFrom('detailfasilitaskesehatan')->where('id', $this->postring->valid($item['deldata'], 'sql'));
					$query->execute();
				}
				$this->poflash->success('Detailfasilitaskesehatan has been successfully deleted', 'admin.php?mod=detailfasilitaskesehatan');
			} else {
				$this->poflash->error('Error deleted detailfasilitaskesehatan data', 'admin.php?mod=detailfasilitaskesehatan');
			}
		}
	}

}