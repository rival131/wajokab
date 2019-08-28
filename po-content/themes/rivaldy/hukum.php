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

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1></h1>
          </div>
          <div class="col-sm-6">
           
          </div>
        </div>
      </div><!-- /.container-fluid -->
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



    

    <section class="crumina-module crumina-module-slider medium-padding100">
	<div class="container">
		<div class="row">
        <div class="box-body table-responsive no-padding">
        <table id="example" class="display" style="width:100%">
    <thead>
    
        <tr class="warning">
            <th>NO</th>
            <th>NPSN</th>
            <th>NAMA SEKOLAH</th>
            <th>ALAMAT</th>
            <th>KECAMATAN</th>
            <th>STATUS</th>
            <th>WEBSITE</th>
        </tr>
        </thead>
        <tbody>
        <?php
                                $no = 0;
    							// $limit = '5';
    							// $offset = $this->pocore()->call->popaging->searchPosition($limit, $this->e($page));
                                $querys = $this->pocore()->call->podb->from('pendidikandetailsekolah')
                                ->where('idkategori', $pendidikankatsekolah['idkategori'])
                                ->orderBy('idkategori DESC')
                                // ->limit($offset.','.$limit)
                                ->fetchAll();
    							
    							foreach($querys as $query) {

                                    $no++;
    						?>
    						
        <tr class="active">
            <td><?=$no?></td>
            <td><?=$query['npsn'];?></td>
            <td><?=$query['namasekolah'];?></td>
            <td><?=$query['alamat'];?></td>
            <td><?=$query['kecamatan'];?></td>
            <td><?=$query['status'];?></td>
            <td><?php 
            if($query['website']==null){
                echo 'Offline';
            } else {
                echo "<a href='http://$query[website]'>Online</a>";
            }
            
            ?></td>
        </tr>
                                <?php } ?>
    </tbody>
</table>
</div>


		</div>
	</div>
</section>

<!-- DataTables -->
<script type="text/javascript" language="javascript"  src="https://code.jquery.com/jquery-3.3.1.js"></script>   
<script>
  $(document).ready(function() {
    $('#sekolah').DataTable( {
      dom: 'Bfrtip',
        buttons: [
            { extend: 'copyHtml5', footer: true },
            { extend: 'excelHtml5', footer: true },
            { extend: 'csvHtml5', footer: true },
            { extend: 'pdfHtml5', footer: true }
        ]
    } );
} );
</script>

<script>
$(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            { extend: 'copyHtml5', footer: true },
            { extend: 'excelHtml5', footer: true },
            { extend: 'csvHtml5', footer: true },
            { extend: 'pdfHtml5', footer: true }
        ]
    } );
} );
</script>
