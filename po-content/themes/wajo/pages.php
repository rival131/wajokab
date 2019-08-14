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

              <!-- Nav tabs -->
              <ul class="nav nav-tabs mt-30" role="tablist">
                <li role="presentation" class="active"><a href="#polararea-html" aria-controls="polararea-html" role="tab" data-toggle="tab">HTML</a></li>
                <li role="presentation"><a href="#polararea-js" aria-controls="polararea-js" role="tab" data-toggle="tab">Java Script</a></li>
              </ul>

              <!-- Tab panels -->
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="polararea-html">
<pre>
<code class="language-markup">
Polar Area Chart
&lt;div style=&quot;width: 80%&quot; class=&quot;text-center&quot;&gt;
  &lt;canvas id=&quot;polar-area&quot; width=&quot;400&quot; height=&quot;400&quot;/&gt;
  &lt;/canvas&gt;
&lt;/div&gt;
</code>
</pre>     
                </div>
                <div role="tabpanel" class="tab-pane" id="polararea-js">
<pre>
<code class="language-javascript">
$(document).ready(function() {
    // Polar Area Chart
    var polarData = [
      {
        value: 200,
        color:"#F7464A",
        highlight: "#FF5A5E",
        label: "Red"
      },
      {
        value: 50,
        color: "#46BFBD",
        highlight: "#5AD3D1",
        label: "Green"
      },
      {
        value: 120,
        color: "#FDB45C",
        highlight: "#FFC870",
        label: "Yellow"
      },
      {
        value: 40,
        color: "#949FB1",
        highlight: "#A8B3C5",
        label: "Grey"
      },
      {
        value: 150,
        color: "#4D5360",
        highlight: "#616774",
        label: "Dark Grey"
      }
    ];

  window.onload = function(){
    var ctx = document.getElementById("chart-area").getContext("2d");
    window.myPolarArea = new Chart(ctx).PolarArea(polarData, {
      responsive:true
    });
  };
});
</code>
</pre>     
                </div>
              </div>
              <!-- End Tab panels -->

            </div>
            <!-- Doughnut Chart -->
            <div class="col-sm-6 col-md-6">                            
              <div class="heading-line-bottom">
                <h4 class="text-center">Doughnut Chart</h4>
              </div>
              <div style="width: 80%" class="text-center">
                <canvas id="doughnutChart" width="400" height="400"></canvas>
              </div>

              <!-- Nav tabs -->
              <ul class="nav nav-tabs mt-30" role="tablist">
                <li role="presentation" class="active"><a href="#doughnutChart-html" aria-controls="doughnutChart-html" role="tab" data-toggle="tab">HTML</a></li>
                <li role="presentation"><a href="#doughnutChart-js" aria-controls="doughnutChart-js" role="tab" data-toggle="tab">Java Script</a></li>
              </ul>

              <!-- Tab panels -->
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="doughnutChart-html">
<pre>
<code class="language-markup">
Doughnut Chart
&lt;div style=&quot;width: 80%&quot; class=&quot;text-center&quot;&gt;
  &lt;canvas id=&quot;doughnutChart&quot; width=&quot;500&quot; height=&quot;500&quot;/&gt;
  &lt;/canvas&gt;
&lt;/div&gt;
</code>
</pre>     
                </div>
                <div role="tabpanel" class="tab-pane" id="doughnutChart-js">
<pre>
<code class="language-javascript">
$(document).ready(function() {
    // Doughnut Chart
    var doughnutData = [
      {
        value: 200,
        color:"#F7464A",
        highlight: "#FF5A5E",
        label: "Red"
      },
      {
        value: 50,
        color: "#46BFBD",
        highlight: "#5AD3D1",
        label: "Green"
      },
      {
        value: 100,
        color: "#FDB45C",
        highlight: "#FFC870",
        label: "Yellow"
      },
      {
        value: 40,
        color: "#949FB1",
        highlight: "#A8B3C5",
        label: "Grey"
      },
      {
        value: 120,
        color: "#4D5360",
        highlight: "#616774",
        label: "Dark Grey"
      }
    ];
  window.onload = function(){
    var chart_doughnutChart = document.getElementById("doughnutChart").getContext("2d");
    window.myDoughnut = new Chart(chart_doughnutChart).Doughnut(doughnutData, {
      responsive : true
    });
  };
});
</code>
</pre>     
                </div>
              </div>
              <!-- End Tab panels -->
              
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
          <div class="row mb-50">
            <!-- Radar Chart -->
            <div class="col-sm-6 col-md-6">
            <!-- Nav tabs -->
              <ul class="nav nav-tabs mt-30" role="tablist">
                <li role="presentation" class="active"><a href="#radarChart-html" aria-controls="radarChart-html" role="tab" data-toggle="tab">HTML</a></li>
                <li role="presentation"><a href="#radarChart-js" aria-controls="radarChart-js" role="tab" data-toggle="tab">Java Script</a></li>
              </ul>

              <!-- Tab panels -->
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="radarChart-html">
<pre>
<code class="language-markup">
Radar Chart
&lt;div style=&quot;width: 80%&quot; class=&quot;text-center&quot;&gt;
  &lt;canvas id=&quot;radarChart&quot; width=&quot;500&quot; height=&quot;500&quot;/&gt;
  &lt;/canvas&gt;
&lt;/div&gt;
</code>
</pre>     
                </div>
                <div role="tabpanel" class="tab-pane" id="radarChart-js">
<pre>
<code class="language-javascript">
$(document).ready(function() {
    // Radar Chart
    var radarChartData = {
      labels: ["Eating", "Drinking", "Sleeping", "Designing", "Coding", "Cycling", "Running"],
      datasets: [
        {
          label: "My First dataset",
          fillColor: "rgba(220,220,220,0.2)",
          strokeColor: "rgba(220,220,220,1)",
          pointColor: "rgba(220,220,220,1)",
          pointStrokeColor: "#fff",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(220,220,220,1)",
          data: [65,59,90,81,56,55,40]
        },
        {
          label: "My Second dataset",
          fillColor: "rgba(151,187,205,0.2)",
          strokeColor: "rgba(151,187,205,1)",
          pointColor: "rgba(151,187,205,1)",
          pointStrokeColor: "#fff",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(151,187,205,1)",
          data: [28,48,40,19,96,27,100]
        }
      ]
    };
    window.onload = function(){
      var chart_radarChart = document.getElementById("radarChart").getContext("2d");
      window.myRadar = new Chart(chart_radarChart).Radar(radarChartData, {
        responsive: true
      });
    };   

});

</code>
</pre>     
                </div>
              </div>
              <!-- End Tab panels -->
            </div>
            <!-- Line Chart -->
            <div class="col-sm-6 col-md-6">
            <!-- Nav tabs -->
              <ul class="nav nav-tabs mt-30" role="tablist">
                <li role="presentation" class="active"><a href="#lineChart-html" aria-controls="lineChart-html" role="tab" data-toggle="tab">HTML</a></li>
                <li role="presentation"><a href="#lineChart-js" aria-controls="lineChart-js" role="tab" data-toggle="tab">Java Script</a></li>
              </ul>

              <!-- Tab panels -->
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="lineChart-html">
<pre>
<code class="language-markup">
Line Chart
&lt;div style=&quot;width: 90%&quot; class=&quot;text-center&quot;&gt;
  &lt;canvas id=&quot;lineChart&quot; height=&quot;450&quot; width=&quot;600&quot;&gt;&lt;/canvas&gt;
&lt;/div&gt;
</code>
</pre>     
                </div>
                <div role="tabpanel" class="tab-pane" id="lineChart-js">
<pre>
<code class="language-javascript">
$(document).ready(function() {
    // Line Chart
    var randomScalingFactor = function(){ return Math.round(Math.random()*100)};
    var lineChartData = {
      labels : ["January","February","March","April","May","June","July"],
      datasets : [
        {
          label: "My First dataset",
          fillColor : "rgba(220,220,220,0.2)",
          strokeColor : "rgba(220,220,220,1)",
          pointColor : "rgba(220,220,220,1)",
          pointStrokeColor : "#fff",
          pointHighlightFill : "#fff",
          pointHighlightStroke : "rgba(220,220,220,1)",
          data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
        },
        {
          label: "My Second dataset",
          fillColor : "rgba(151,187,205,0.2)",
          strokeColor : "rgba(151,187,205,1)",
          pointColor : "rgba(151,187,205,1)",
          pointStrokeColor : "#fff",
          pointHighlightFill : "#fff",
          pointHighlightStroke : "rgba(151,187,205,1)",
          data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
        }
      ]
    }
  };
    window.onload = function(){
      var chart_lineChart = document.getElementById("lineChart").getContext("2d");
      window.myLine = new Chart(chart_lineChart).Line(lineChartData, {
        responsive: true
      });
    };

});
</code>
</pre>     
                </div>
              </div>
              <!-- End Tab panels -->
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
          <div class="row mt-50">
            <!-- Bar Chart -->
            <div class="col-sm-6 col-md-6">
            <!-- Nav tabs -->
              <ul class="nav nav-tabs mt-30" role="tablist">
                <li role="presentation" class="active"><a href="#barChart-html" aria-controls="barChart-html" role="tab" data-toggle="tab">HTML</a></li>
                <li role="presentation"><a href="#barChart-js" aria-controls="barChart-js" role="tab" data-toggle="tab">Java Script</a></li>
              </ul>

              <!-- Tab panels -->
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="barChart-html">
<pre>
<code class="language-markup">
Bar Chart
&lt;div style=&quot;width: 90%&quot; class=&quot;text-center&quot;&gt;
  &lt;canvas id=&quot;barChart&quot; width=&quot;500&quot; height=&quot;500&quot;/&gt;
  &lt;/canvas&gt;
&lt;/div&gt;
</code>
</pre>     
                </div>
                <div role="tabpanel" class="tab-pane" id="barChart-js">
<pre>
<code class="language-javascript">
$(document).ready(function() {
    // Bar Chart
      var randomScalingFactor = function(){ return Math.round(Math.random()*100)};
      var barChartData = {
        labels : ["January","February","March","April","May","June","July"],
        datasets : [
          {
            fillColor : "rgba(220,220,220,0.5)",
            strokeColor : "rgba(220,220,220,0.8)",
            highlightFill: "rgba(220,220,220,0.75)",
            highlightStroke: "rgba(220,220,220,1)",
            data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
          },
          {
            fillColor : "rgba(151,187,205,0.5)",
            strokeColor : "rgba(151,187,205,0.8)",
            highlightFill : "rgba(151,187,205,0.75)",
            highlightStroke : "rgba(151,187,205,1)",
            data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
          }
        ]
      }
  };
    window.onload = function(){
      var chart_barChart = document.getElementById("barChart").getContext("2d");
      window.myBar = new Chart(chart_barChart).Bar(barChartData, {
        responsive : true
      });
    };
});
</code>
</pre>     
                </div>
              </div>
              <!-- End Tab panels -->
            </div>
            <!-- Radar Chart -->
            <div class="col-sm-6 col-md-6">
            <!-- Nav tabs -->
              <ul class="nav nav-tabs mt-30" role="tablist">
                <li role="presentation" class="active"><a href="#pieChart-html" aria-controls="pieChart-html" role="tab" data-toggle="tab">HTML</a></li>
                <li role="presentation"><a href="#pieChart-js" aria-controls="pieChart-js" role="tab" data-toggle="tab">Java Script</a></li>
              </ul>

              <!-- Tab panels -->
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="pieChart-html">
<pre>
<code class="language-markup">
Pie Custom Tooltips
&lt;div style=&quot;width: 80%&quot; class=&quot;text-center&quot;&gt;
  &lt;canvas id=&quot;pieChart&quot; width=&quot;500&quot; height=&quot;500&quot;/&gt;
  &lt;/canvas&gt;
&lt;/div&gt;
</code>
</pre>     
                </div>
                <div role="tabpanel" class="tab-pane" id="pieChart-js">
<pre>
<code class="language-javascript">
$(document).ready(function() {
    // Pie Chart
      var pieData = [
        {
          value: 300,
          color:"#F7464A",
          highlight: "#FF5A5E",
          label: "Red"
        },
        {
          value: 50,
          color: "#46BFBD",
          highlight: "#5AD3D1",
          label: "Green"
        },
        {
          value: 100,
          color: "#FDB45C",
          highlight: "#FFC870",
          label: "Yellow"
        },
        {
          value: 40,
          color: "#949FB1",
          highlight: "#A8B3C5",
          label: "Grey"
        },
        {
          value: 120,
          color: "#4D5360",
          highlight: "#616774",
          label: "Dark Grey"
        }

      ];

    window.onload = function(){
      var chart_peiChart = document.getElementById("peiChart").getContext("2d");
      window.myBar = new Chart(chart_peiChart).Pie(pieData, {
        responsive : true
      });
    };
});
</code>
</pre>     
                </div>
              </div>
              <!-- End Tab panels -->
            </div>
          </div>

        </div>
      </div>
    </section>

    <div class="clear"></div>
    
    <!-- JS | Chart-->
  </div>
  <!-- end main-content -->

