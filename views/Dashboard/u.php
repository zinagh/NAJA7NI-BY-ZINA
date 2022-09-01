<?php
include 'DBconnection.php';
$query = "SELECT COUNT(postCategory) as nbrtn FROM article WHERE postCategory = 'Tennis'";
$sql = "SELECT COUNT(postCategory) as nbrfb FROM article WHERE postCategory = 'FootBall'";
$sql1 = "SELECT COUNT(postCategory) as nbrhb FROM article WHERE postCategory = 'HandBall'";
$sql2 = "SELECT COUNT(postCategory) as nbrath FROM article WHERE postCategory = 'Athlétisme'";
$sql3 = "SELECT COUNT(postCategory) as nbrcyc FROM article WHERE postCategory = 'Cyclisme'";

$result=mysqli_query($conn,$sql);
$result1=mysqli_query($conn,$query);
$result2=mysqli_query($conn,$sql1);
$result3=mysqli_query($conn,$sql2);
$result4=mysqli_query($conn,$sql3);
?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          <?php 
          while($rows=mysqli_fetch_assoc($result1))
          { $nbrart= $rows['nbrtn']; 
             }
             while($rows=mysqli_fetch_assoc($result2))
             { $nbrhb= $rows['nbrhb']; 
                }
                while($rows=mysqli_fetch_assoc($result3))
                { $nbrath= $rows['nbrath']; 
                   }
                   while($rows=mysqli_fetch_assoc($result4))
                { $nbrcyc= $rows['nbrcyc']; 
                   }
                            while($rows=mysqli_fetch_assoc($result))
                            {   
                                ?>

          ['Task', 'Nombres articles par catégories'],
          ['FOOTBALL',     <?php echo $rows['nbrfb']; ?>],
          ['TENNIS',      <?php echo $nbrart;?>],
          ['HANDBALL',  <?php echo $nbrhb;?>],
          ['ATHLETISME', <?php echo $nbrath;?>],
          ['CYCLISME',    <?php echo $nbrcyc;?>]
          <?php }?>
        ]);

        var options = {
          title: 'Nombres articles par catégories',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
  </body>
</html>