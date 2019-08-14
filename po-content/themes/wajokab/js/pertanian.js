$(document).ready(function(){
  // Line Chart
  //var randomScalingFactor = function(){ return Math.round(Math.random()*100)};
  var lineChartData = {
    labels : ["January","February","March","April","May","June","July"],
    datasets : [
      {
        label: "My First dataset",
        backgroundColor: "rgba(220,220,220,0.2)",
        borderColor: "rgba(220,220,220,1)",
        fillColor : "rgba(220,220,220,0.2)",
        //fill : false;
        strokeColor : "rgba(220,220,220,1)",
        pointColor : "rgba(220,220,220,1)",
        pointStrokeColor : "#fff",
        pointHighlightFill : "#fff",
        pointHighlightStroke : "rgba(220,220,220,1)",
        data : [28,48,40,19,96,27,100]
      },
      {
        label: "My Second dataset",
        backgroundColor: "rgba(151,187,205,0.2)",
        borderColor: "rgba(151,187,205,1)",
        fillColor : "rgba(151,187,205,0.2)",
        //fill : false,
        strokeColor : "rgba(151,187,205,1)",
        pointColor : "rgba(151,187,205,1)",
        pointStrokeColor : "#fff",
        pointHighlightFill : "#fff",
        pointHighlightStroke : "rgba(151,187,205,1)",
        data : [65,59,90,81,56,55,40]
      }
    ]
  };

    var chart_lineChart = document.getElementById("pertanian").getContext("2d");
    window.myLine = new Chart(chart_lineChart).Line(lineChartData, {
      responsive: true
    });
});