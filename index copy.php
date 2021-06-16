<?php
  $con = mysqli_connect("localhost","root","root","GOOGLE_TREND");
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
          ['dt', 'contribution'],
         <?php
         $sql = "SELECT * FROM google_trendxs";
         $fire = mysqli_query($con,$sql);
          while ($result = mysqli_fetch_assoc($fire)) {
            echo"['".$result['dt']."',".$result['interest']."],";
          }

         ?>
        ]);

        var options = {
          title: 'INTERESTING EVENTS FROM UFC'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
</html>

