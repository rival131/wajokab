<?=$this->layout('index');?>


<!-- Breadcrumbs -->

<div class="container">
		<div class="row">
			<div class="breadcrumbs-wrap inline-items with-border">
				<a href="<?=BASE_URL;?>" class="btn btn--transparent btn--round">
					<svg class="utouch-icon utouch-icon-home-icon-silhouette"><use xlink:href="#utouch-icon-home-icon-silhouette"></use></svg>
				</a>

				<ul class="breadcrumbs">
					<li class="breadcrumbs-item">
						<a href="<?=BASE_URL.'/pages/'.$this->e($pages['seotitle']);?>"><?=$this->e($front_pages);?></a>
						<svg class="utouch-icon utouch-icon-media-play-symbol"><use xlink:href="#utouch-icon-media-play-symbol"></use></svg>
					</li>
					
				</ul>
			</div>
		</div>
	</div>

	<!-- ... end Breadcrumbs -->
    <?//=$this->insert('konfig');?>
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
include "konfig.php";
include "fungsi.php";

$db_server = "jdih.wajokab.go.id:3306";
$db_name = "jdih_hukum";
$db_user = "jdih_jump";
$db_pass = "Demon131@";

$connect = mysql_connect($db_server,$db_user,$db_pass);
$select = mysql_select_db($db_name);

//$host = "jdih.wajokab.go.id";
//$user = "adminwaj";
//$pass = "HyVutTV08P";

// connect to MySQL
//$connection = mysql_connect ($host,$user,$pass)
	//or die ( "Sorry - unable to connect to MySQL" );

echo ( "MySQL connected " );
            
               echo "
                <h3>{$result['jumlah']}</h3>"?>

                <p>SD termasuk SLB</p>
              </div>
              <div class="icon">
                <i class="fas fa-shopping-cart"></i>
              </div>
              <a href="<?BASE_URL;?>/pendidikandetailsekolah/sd" class="small-box-footer">
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
              <a href="<?BASE_URL;?>/pendidikandetailsekolah/smp" class="small-box-footer">
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
              <a href="<?BASE_URL;?>/pendidikandetailsekolah/smasmk" class="small-box-footer">
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
              <a href="<?BASE_URL;?>/pendidikandetailsekolah/perguruan-tinggi" class="small-box-footer">
                Lihat <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
        </div>
      
        <!-- /.row -->
    </div>
</section>





