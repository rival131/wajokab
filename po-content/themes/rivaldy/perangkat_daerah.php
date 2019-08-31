<?=$this->layout('index');?>

<!-- Font Awesome -->
<link rel="stylesheet" href="https://adminlte.io/themes/dev/AdminLTE/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="https://adminlte.io/themes/dev/AdminLTE/dist/css/adminlte.min.css">



    <!-- Breadcrumbs -->
<!-- STUNNING HEADER -->
<div class="header-spacer"></div>
<div class="crumina-stunning-header stunning-header--breadcrumbs-bottom-left stunning-header--content-inline stunning-bg-batik" 
		style="padding-top: 50px;">
		<div class="container-fluid">
			
		</div>
	</div>
	<section class="bg-secondary-color">

			<div class="container">
				<div class="row">
					<div class="counters" style="padding: 50px 0 30px;">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<h5 class="c-white">Dalam Proses Integrasi</h5>
							<p class="c-semitransparent-white">Mohon maaf, apabila ada data kosong, kami masih dalam tahap integrasi dengan Dinas terkait.</p>
						</div>
					</div>
				</div>
			</div>

    </section>
    
    <!-- Info Boxes -->
<section class="content">
    <div class="container">
         <!-- Small Box (Stat card) -->
         <h5 class="mb-2 mt-4">JUMLAH PERANGKAT DAERAH</h5>
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-info">
              <div class="inner">
              <?php
              mysql_connect('localhost', 'root', '');
              mysql_select_db('dbwajoweb');
               
                $table = "perangkat_daerah"; 
                   $sql = "SELECT count(*) AS jumlah FROM $table WHERE idkategori=3 ";
                $dinas = mysql_query($sql);
                $result = mysql_fetch_array($dinas);

               echo "
                <h3>{$result['jumlah']}</h3>"?>

                <p>DINAS</p>
              </div>
              <div class="icon">
                <i class="ion ion-android-download"></i>
              </div>
              <a href="<?=BASE_URL;?>/perangkat_daerah/dinas" class="small-box-footer">
                Lihat <i class="ion ion-android-download"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-success">
              <div class="inner">
              <?php
              mysql_connect('localhost', 'root', '');
              mysql_select_db('dbwajoweb');
               
                $table = "perangkat_daerah"; 
                   $sql = "SELECT count(*) AS jumlah FROM $table WHERE idkategori='2' ";
                $badan = mysql_query($sql);
                $result = mysql_fetch_array($badan);

               echo "
                <h3>{$result['jumlah']}</h3>"?>


                <p>BADAN DAERAH</p>
              </div>
              <div class="icon">
                <i class="ion ion-android-download"></i>
              </div>
              <a href="<?=BASE_URL;?>/perangkat_daerah/badan-daerah" class="small-box-footer">
                Lihat <i class="ion ion-android-download"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-warning">
              <div class="inner">
              <?php
              mysql_connect('localhost', 'root', '');
              mysql_select_db('dbwajoweb');
               
                $table = "perangkat_daerah"; 
                   $sql = "SELECT count(*) AS jumlah FROM $table WHERE idkategori='4' ";
                $kecamatan = mysql_query($sql);
                $result = mysql_fetch_array($kecamatan);

               echo "
                <h3>{$result['jumlah']}</h3>"?>


                <p>KECAMATAN</p>
              </div>
              <div class="icon">
                <i class="ion ion-android-download"></i>
              </div>
              <a href="<?=BASE_URL;?>/perangkat_daerah/kecamatan" class="small-box-footer">
                Lihat <i class="ion ion-android-download"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-danger">
              <div class="inner">
              <?php
              mysql_connect('localhost', 'root', '');
              mysql_select_db('dbwajoweb');
               
                $table = "perangkat_daerah"; 
                   $sql = "SELECT count(*) AS jumlah FROM $table WHERE idkategori='5' ";
                $desa = mysql_query($sql);
                $result = mysql_fetch_array($desa);

               echo "
                <h3>{$result['jumlah']}</h3>"?>


                <p>KELURAHAN</p>
              </div>
              <div class="icon">
                <i class="ion ion-android-download"></i>
              </div>
              <a href="<?=BASE_URL;?>/perangkat_daerah/kelurahan" class="small-box-footer">
                Lihat <i class="ion ion-android-download"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-indigo">
              <div class="inner">
              <?php
              mysql_connect('localhost', 'root', '');
              mysql_select_db('dbwajoweb');
               
                $table = "perangkat_daerah"; 
                   $sql = "SELECT count(*) AS jumlah FROM $table WHERE idkategori='7' ";
                $desa = mysql_query($sql);
                $result = mysql_fetch_array($desa);

               echo "
                <h3>{$result['jumlah']}</h3>"?>


                <p>DESA</p>
              </div>
              <div class="icon">
                <i class="ion ion-android-download"></i>
              </div>
              <a href="<?=BASE_URL;?>/perangkat_daerah/kelurahan" class="small-box-footer">
                Lihat <i class="ion ion-android-download"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-navy">
              <div class="inner">
              <?php
              mysql_connect('localhost', 'root', '');
              mysql_select_db('dbwajoweb');
               
                $table = "perangkat_daerah"; 
                   $sql = "SELECT count(*) AS jumlah FROM $table WHERE idkategori='1' ";
                $sekertariat = mysql_query($sql);
                $result = mysql_fetch_array($sekertariat);

               echo "
                <h3>{$result['jumlah']}</h3>"?>


                <p>KESEKRETARIAT</p>
              </div>
              <div class="icon">
                <i class="ion ion-android-download"></i>
              </div>
              <a href="<?=BASE_URL;?>/perangkat_daerah/kesekretariat" class="small-box-footer">
                Lihat <i class="ion ion-android-download"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-maroon">
              <div class="inner">
              <?php
              mysql_connect('localhost', 'root', '');
              mysql_select_db('dbwajoweb');
               
                $table = "perangkat_daerah"; 
                   $sql = "SELECT count(*) AS jumlah FROM $table WHERE idkategori='6' ";
                $bumd = mysql_query($sql);
                $result = mysql_fetch_array($bumd);

               echo "
                <h3>{$result['jumlah']}</h3>"?>


                <p>BUMD</p>
              </div>
              <div class="icon">
                <i class="ion ion-android-download"></i>
              </div>
              <a href="<?=BASE_URL;?>/perangkat_daerah/bumd" class="small-box-footer">
                Lihat <i class="ion ion-android-download"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
        </div>
      
        <!-- /.row -->
    </div>
</section>


    <section class="content">

<!-- Default box -->
<div class="card card-solid">
  <div class="card-body pb-0">
    <div class="row d-flex align-items-stretch">
<?php
    // $limit = '6';
    // $offset = $this->pocore()->call->popaging->searchPosition ($limit, $this->e($page));
    $querys = $this->pocore()->call->podb->from('perangkat_daerah')
            ->where('idkategori', $katperangkatdaerah['idkategori'])
            ->orderBy ('idkategori')
            // ->limit ($offset.','.$limit)
            ->fecthAll();
            foreach($querys as $query) {
?> 

      <!-- ITEM -->
      <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
        <div class="card bg-light">
          <div class="card-header text-muted border-bottom-0">
          <?php 
            if($query['kecamatan']==null){
              echo "<b>$query[nama_panjang]</b>";
            } else {
                echo "Kecamatan <b>$query[kecamatan]</b>";
            }
            
            ?>
          

          
          </div>
          <div class="card-body pt-0">
            <div class="row">
              <div class="col-7">
                <h3 class="lead"><b><?=$query['nama_singkat'];?></b></h3>
                <p class="text-muted text-sm">PEMERINTAH KABUPATEN WAJO</p>
                <ul class="ml-4 mb-0 fa-ul text-muted">
                  <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Alamat: <?=$query['alamat_kantor'];?></li>
                  <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Telp : <?=$query['telpon'];?></li>
                  <li class="small"><span class="fa-li"><i class="fas fa-lg fa-envelope"></i></span> Email: <?=$query['email'];?></li>
                  <li class="small"><span class="fa-li"><i class="fas fa-lg fa-globe"></i></span> Website: <?=$query['website'];?></li>
                </ul>
              </div>
              <div class="col-5 text-center">
                <img src="<?=$this->asset('/images/logo/logo-wajo.png')?>" width="100px" alt="" class="img-circle img-fluid">
              </div>
            </div>
          </div>
          <div class="card-footer">
            <div class="text-right">
            <?php 
            if($query['website']==null){
              echo "<a href='#' class='btn btn-sm btn-danger'><b>Website Belum Ada</b></a>";
            } else {
                echo "<a href='http://$query[website]' class='btn btn-sm btn-primary btn-block'><b>Kunjungi Website</b></a>";
            }
            
            ?>
              
            </div>
          </div>
        </div>
      </div>
      <!-- END ITEM -->
      
                                <? } ?>
    </div>
  </div>
  <!-- /.card-body -->
  <div class="card-footer">
    <nav aria-label="Contacts Page Navigation">
      <ul class="pagination justify-content-center m-0">
      <?php
					// $totaldata = $this->pocore()->call->podb->from('katperangkatdaerah')->count();
					// $totalpage = $this->pocore()->call->popaging->totalPage($totaldata, $limit);
					// echo $this->pocore()->call->popaging->navPage($this->e($page), $totalpage, BASE_URL, 'perangkat_daerah', 'page', '1', $this->e($front_paging_prev), $this->e($front_paging_next));
				?>
      </ul>
    </nav>
  </div>
  <!-- /.card-footer -->
</div>
<!-- /.card -->

</section>