<?=$this->layout('index');?>


<!-- CSS LT3 -->
<link rel="stylesheet" type="text/css" href="<?=$this->asset('/lte3/css/adminlte.min.css')?>">
<link rel="stylesheet" type="text/css" href="<?=$this->asset('/lte3/build/scss/_info-box.scss')?>">
<link rel="stylesheet" type="text/css" href="<?=$this->asset('/lte3/plugins/font-awesome/all.min.css')?>">

<!-- DATATABLE -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css"/> 
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css"/> 
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4-4.1.1/jq-3.3.1/jszip-2.5.0/dt-1.10.18/e-1.9.0/af-2.3.3/b-1.5.6/b-colvis-1.5.6/b-flash-1.5.6/b-html5-1.5.6/b-print-1.5.6/cr-1.5.0/fc-3.2.5/fh-3.1.4/kt-2.5.0/r-2.2.2/rg-1.1.0/rr-1.2.4/sc-2.0.0/sl-1.3.0/datatables.min.css"/> 
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"/> 
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css"/> 

<!-- Font Awesome -->
<link rel="stylesheet" href="https://adminlte.io/themes/dev/AdminLTE/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="https://adminlte.io/themes/dev/AdminLTE/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="https://adminlte.io/themes/dev/AdminLTE/node_modules/bootstrap/scss/mixins/_image.scss">
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
         <h5 class="mb-2 mt-4">JUMLAH SEKOLAH DI KABUPATEN WAJO</h5>
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-info">
              <div class="inner">
              <?php
              mysql_connect('localhost', 'root', '');
              mysql_select_db('dbwajoweb');
               
                $table = "pendidikandetailsekolah"; 
                   $sql = "SELECT count(*) AS jumlah FROM $table WHERE idkategori='2' OR idkategori='7' ";
                $datasekolah = mysql_query($sql);
                $result = mysql_fetch_array($datasekolah);

               echo "
                <h3>{$result['jumlah']}</h3>"?>

                <p>SD termasuk SLB</p>
              </div>
              <div class="icon">
                <i class="fas fa-shopping-cart"></i>
              </div>
              <a href="<?=BASE_URL;?>/pendidikankatsekolah/sd" class="small-box-footer">
                Lihat <i class="fas fa-arrow-circle-right"></i>
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
               
                $table = "pendidikandetailsekolah"; 
                   $sql = "SELECT count(*) AS jumlah FROM $table WHERE idkategori='3' ";
                $datasekolah = mysql_query($sql);
                $result = mysql_fetch_array($datasekolah);

               echo "
                <h3>{$result['jumlah']}</h3>"?>


                <p>SMP</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="<?=BASE_URL;?>/pendidikankatsekolah/smp" class="small-box-footer">
                Lihat <i class="fas fa-arrow-circle-right"></i>
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
               
                $table = "pendidikandetailsekolah"; 
                   $sql = "SELECT count(*) AS jumlah FROM $table WHERE idkategori='4' ";
                $datasekolah = mysql_query($sql);
                $result = mysql_fetch_array($datasekolah);

               echo "
                <h3>{$result['jumlah']}</h3>"?>


                <p>SMA/SMK</p>
              </div>
              <div class="icon">
                <i class="fas fa-user-plus"></i>
              </div>
              <a href="<?=BASE_URL;?>/pendidikankatsekolah/smasmk" class="small-box-footer">
                Lihat <i class="fas fa-arrow-circle-right"></i>
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
               
                $table = "pendidikandetailsekolah"; 
                   $sql = "SELECT count(*) AS jumlah FROM $table WHERE idkategori='5' ";
                $datasekolah = mysql_query($sql);
                $result = mysql_fetch_array($datasekolah);

               echo "
                <h3>{$result['jumlah']}</h3>"?>


                <p>PERGURUAN TINGGI</p>
              </div>
              <div class="icon">
                <i class="fas fa-chart-pie"></i>
              </div>
              <a href="<?=BASE_URL;?>/pendidikankatsekolah/perguruan-tinggi" class="small-box-footer">
                Lihat <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
        </div>
      
        <!-- /.row -->
    </div>
</section>

<?php
                $limit = '1';
        $offset = $this->pocore()->call->popaging->searchPosition($limit, $this->e($page));

                $pendidikandetailsekolahs = $this->pocore()->call->podb->from('pendidikandetailsekolah')->where('id', $pendidikandetailsekolah['id'])->orderBy('id')->limit($offset.','.$limit)->fetchAll();
        $notab = $offset+1;
                  

                  foreach($pendidikandetailsekolahs as $pendidikandetailsekolah){
                ?>
<!-- ISI -->

<!-- Content Wrapper. Contains page content -->
<div class="container">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
DETAIL DATA SEKOLAH : <?=$pendidikandetailsekolah['namasekolah'];?>      </h1>
     
    </section>

    <!-- Main content -->
<section class="crumina-module crumina-module-slider medium-padding100">
<div class="container-fluid">
<div class="row">

<div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="<?=$this->asset('/images/logo/logo-pendidikan.png')?>"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center"><?=$pendidikandetailsekolah['namasekolah'];?></h3>

                <p class="text-muted text-center">Alamat :<? if ($pendidikandetailsekolah['alamat']==null){
                        echo 'Data belum di input.';
                      } else {
                        echo $pendidikandetailsekolah['alamat'];
                      }
                        ?></p>

                <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
                    <b>NPSN</b> <a class="float-right"><?=$pendidikandetailsekolah['npsn'];?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Kecamatan</b> <a class="float-right"><?=$pendidikandetailsekolah['kecamatan'];?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Status</b> <a class="float-right"><?=$pendidikandetailsekolah['status'];?></a>
                  </li>
                  
                </ul>
                <?php 
            if($pendidikandetailsekolah['website']==null){
              echo "<a href='#' class='btn btn-primary btn-danger'><b>Website Belum Ada</b></a>";
            } else {
                echo "<a href='http://$pendidikandetailsekolah[website]' class='btn btn-primary btn-block'><b>Kunjungi Website</b></a>";
            }
            
            ?>
              
              </div>
              <!-- /.card-body -->
            </div>
            
          </div>


          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#detail" data-toggle="tab">Detail</a></li>
                  <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Timeline</a></li>
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li>
                </ul>
              </div><!-- /.card-header -->
            </div>
            
            <div class="active tab-pane" id="detail">
                   <!-- START DETAIL -->                 
              <div class="card">
              
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <tbody>
                  <? if ($pendidikandetailsekolah['foto']==null){
                    echo "<tr colspan='3'><img class='img-fluid-pad' src='../po-content/themes/rivaldy/images/404-image-not-found.jpg' alt='Photo'></tr>";
                  } else {
                    echo "<tr colspan='3'><img class='img-fluid-pad' src=".BASE_URL.'/'.DIR_CON.'/uploads/'.$pendidikandetailsekolah['foto']." alt='Photo'></tr>";
                  }
                 
                  
                  ?>
                    <tr>
                      <td>Kepala Sekolah</td>
                      <td>:</td>
                      <td>
                      <? if ($pendidikandetailsekolah['kepalasekolah']==null){
                        echo 'Data belum di input.';
                      } else {
                        echo $pendidikandetailsekolah['kepalasekolah'];
                      }
                        ?></td>
                    </tr>
                    <tr>
                      <td>Telp. Sekolah</td>
                      <td>:</td>
                      <td>                      <? if ($pendidikandetailsekolah['telp']==null){
                        echo 'Data belum di input.';
                      } else {
                        echo $pendidikandetailsekolah['telp'];
                      }
                        ?></td>
                    </tr>
                    <tr>
                      <td>Email Sekolah</td>
                      <td>:</td>
                      <td>                      <? if ($pendidikandetailsekolah['email']==null){
                        echo 'Data belum di input.';
                      } else {
                        echo $pendidikandetailsekolah['email'];
                      }
                        ?></td>
                    </tr>
                    <tr>
                      <td>Website Sekolah</td>
                      <td>:</td>
                      <td>                      <? if ($pendidikandetailsekolah['website']==null){
                        echo 'Data belum di input.';
                      } else {
                        echo $pendidikandetailsekolah['website'];
                      }
                        ?></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

            </div>



            
            <!-- /.nav-tabs-custom -->
          </div>

</div>
</div>

      </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->  

<!-- END ISI -->
                  <?php } ?>