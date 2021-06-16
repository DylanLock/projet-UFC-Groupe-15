<?php
  $con = mysqli_connect("localhost","root","root","GOOGLE_TREND5");
  if($con){
    echo "connected";
  }
?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['dt','interest'],
         
          <?php
         $sql = "SELECT * FROM google_trendds";
         $fire = mysqli_query($con,$sql);
          while ($result = mysqli_fetch_assoc($fire)) {
            echo"['".$result['dt']."',".$result['interest']."],";
          }

         ?>
        ]);



        var options = {
          title: 'MMA INTEREST',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="curve_chart" style="width: 1500px; height: 500px"></div>
  </body>
</html>
