<?php
include 'DBconnection.php';
$sql = "SELECT idNewsArticle, vues FROM article";

$result=mysqli_query($conn,$sql);

?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          <?php
          while($rows=mysqli_fetch_assoc($result))
                            {   
                                ?>
          ["", 'VUES'],
          ["<?php echo $rows['idNewsArticle']; ?>",  <?php echo $rows['vues']; ?>],
          <?php }?>
        ]);

        var options = {
          width: 650,
          legend: { position: 'none' },
          chart: {
            title: 'VUES par article',
            subtitle: 'popularity by Number' },
          axes: {
            y: {
              0: { side: 'top', label: 'Variation de nombre de vues'} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        // Convert the Classic options to Material options.
        chart.draw(data, google.charts.Bar.convertOptions(options));
      };
    </script>
  </head>
  <body>
    <div id="top_x_div" style="width: 650px; height: 450px;"></div>
  </body>
</html>
