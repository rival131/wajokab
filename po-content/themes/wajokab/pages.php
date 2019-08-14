<?=$this->layout('index');?>



  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider layer-overlay overlay-dark" data-bg-img="http://placehold.it/1920x1280">
      <div class="container pt-30 pb-30">
        <!-- Section Content -->
        <div class="section-content text-center">
          <div class="row"> 
            <div class="col-md-6 col-md-offset-3 text-center">
              <h2 class="text-theme-colored font-36">Chart</h2>
              <ol class="breadcrumb text-center mt-10 white">
                <li><a href="#">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li class="active">Page Title</li>
              </ol>
            </div>
          </div>
        </div>
      </div>      
    </section>

    <!--Chart -->
    <section>
      <div class="container">
        <div class="section-content">
          <div class="row mb-50">
            <!-- Polar Area -->
            <div class="col-sm-6 col-md-6">              
              <div class="heading-line-bottom">
                <h4 class="text-center">Polar Area</h4>
              </div>            
              <div style="width: 80%" class="text-center">
                <canvas id="chart-area" width="400" height="400"></canvas>
              </div>
            </div>
            <!-- Doughnut Chart -->
            <div class="col-sm-6 col-md-6">                            
              <div class="heading-line-bottom">
                <h4 class="text-center">Doughnut Chart</h4>
              </div>
              <div style="width: 80%" class="text-center">
                <canvas id="doughnutChart" width="400" height="400"></canvas>
              </div>            
            </div>
          </div>
          <hr>
          <div class="row mb-50">
            <!-- Radar Chart -->
            <div class="col-sm-6 col-md-6">
              <div class="heading-line-bottom">
                <h4 class="text-center">Radar Chart</h4>
              </div>
              <div style="width: 80%" class="text-center">
                <canvas id="radarChart" width="500" height="500"></canvas>
              </div>
            </div>
            <!-- Line Chart -->
            <div class="col-sm-6 col-md-6">                            
              <div class="heading-line-bottom">
                <h4 class="text-center">Line Chart</h4>
              </div>
              <div style="width: 90%" class="text-center">
                <canvas id="lineChart" height="450" width="600"></canvas>
              </div>
            </div>
          </div>          
          
          <hr>
          <div class="row mt-50">
            <!-- Bar Chart -->
            <div class="col-sm-6 col-md-6">
              <div class="heading-line-bottom">
                <h4 class="text-center">Bar Chart</h4>
              </div>
              <div style="width: 90%" class="text-center">
                <canvas id="barChart" width="500" height="500"></canvas>
              </div>
            </div>
            <!-- Polar Chart -->
            <div class="col-sm-6 col-md-6">
              <div class="heading-line-bottom">
                <h4 class="text-center">Pie Custom Tooltips</h4>
              </div>
              <div style="width: 80%" class="text-center">
                <canvas id="peiChart" width="500" height="500"></canvas>
              </div>
            </div>
          </div>
         

        </div>
      </div>
    </section>

    <div class="clear"></div>
    
    <!-- JS | Chart-->
  </div>
  <!-- end main-content -->

