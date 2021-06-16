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
      google.charts.load('current', {
        'packages':['geochart'],
        // Note: you will need to get a mapsApiKey for your project.
        // See: https://developers.google.com/chart/interactive/docs/basic_load_libs#load-settings
        'mapsApiKey': 'AIzaSyDKKIGyKj98LQasnaa9VX9ZOOMgK2pGyhs'
      });
      google.charts.setOnLoadCallback(drawRegionsMap);

      function drawRegionsMap() {
        var data = google.visualization.arrayToDataTable([
          ['pays', 'Champions'],
          <?php
         $sql = "SELECT * FROM A4";
         $fire = mysqli_query($con,$sql);
          while ($result = mysqli_fetch_assoc($fire)) {
            echo"['".$result['pays']."',".$result['Champions']."],";
          }

         ?>
        ]);

        var options = {
          
          colorAxis: {minValue:0, maxValue:10 , colors: ['white','#e31b23']},
          
        };

        var chart = new google.visualization.GeoChart(document.getElementById('regions_div'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="regions_div" style="width: 900px; height: 500px;"></div>
    <a href="geocarte.php">1993</a>
    <a href=1994.php>1994</a>
    
    


  </body>
</html>