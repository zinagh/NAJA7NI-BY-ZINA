<?php
include 'DBconnection.php';
$query = "SELECT COUNT(postCategory) as nbrtn FROM article WHERE postCategory = 'POO'";
$sql = "SELECT COUNT(postCategory) as nbrfb FROM article WHERE postCategory = 'PHP'";
$sql1 = "SELECT COUNT(postCategory) as nbrhb FROM article WHERE postCategory = 'JAVA'";
$sql2 = "SELECT COUNT(postCategory) as nbrath FROM article WHERE postCategory = 'JAVASCRIPT'";
$sql3 = "SELECT COUNT(postCategory) as nbrcyc FROM article WHERE postCategory = 'HTML'";
$sql4 = "SELECT COUNT(postCategory) as nbrp FROM article WHERE postCategory = 'PYTHON'";

$result=mysqli_query($conn,$sql);
$result1=mysqli_query($conn,$query);
$result2=mysqli_query($conn,$sql1);
$result3=mysqli_query($conn,$sql2);
$result4=mysqli_query($conn,$sql3);
$result5=mysqli_query($conn,$sql4);

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

          ['Task', 'Nombres des curses par catégories'],
          ['POO',     <?php echo $rows['nbrfb']; ?>],
          ['PHP',      <?php echo $nbrart;?>],
          ['JAVA',  <?php echo $nbrhb;?>],
          ['JAVASCRIPT', <?php echo $nbrath;?>],
          ['HTML',    <?php echo $nbrcyc;?>]
          ['PYTHON',    <?php echo $rows['nbrp'];?>]

          <?php }?>
        ]);

        var options = {
          title: 'Nombres curses par catégories',
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