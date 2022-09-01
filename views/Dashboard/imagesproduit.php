<?php

    include 'DBconnection.php';
    include '../../controller/PHPfunctions.php';



    if(isset($_GET['choix'])) {
        $choix = ($_GET['choix']);
        }

    if($choix==0){
    $tab='demandesdevente';
    }
    if($choix==1){
    $tab='miseenvente';
    }

    if(isset($_GET['image'])) {
        $image = ($_GET['image']);
        
        }else{
            $image = 'image1';
        }


    $id = $_GET['id'];
    $sql = "SELECT * FROM $tab WHERE id=". $id .";";
    


    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);


    //Produits Connexes



    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/logo.ico">
    <title>SporTun</title>
    <link rel="stylesheet" href="../Front/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="../front/assets/img/logo.ico">

</head>
<body>
      


      <!----------single product details------>

      
        <div class="small-container single-product" >


            <div class='back'>
            <?php echo "<a href=gestionannonces.php?choix=$choix> <img src=../Front/assets/img/backicon.png width='15%' ></a> ";?>
            </div>


            <div class="row">
                <div class="col-2">
                <?php echo " <img src=../Front/assets/img/".$row[$image]. " width='100%' ></a> "?>
                
                    <div class="small-img-row">
                        <?php

                            echo "<div class='small-img-col'>";
                                echo "<a href=imagesproduit.php?id=$id&image=image1&choix=$choix> <img src=../Front/assets/img/".$row['image1']. " width='100%' ></a> ";
                            echo "</div>";
                            
                            if($row['image2']!=''){
                            echo "<div class='small-img-col'>";
                                echo "<a href=imagesproduit.php?id=$id&image=image2&choix=$choix> <img src=../Front/assets/img/".$row['image2']. " width='100%' ></a> ";
                            echo "</div>";
                            }
                            if($row['image3']!=''){
                            echo "<div class='small-img-col'>";
                                echo "<a href=imagesproduit.php?id=$id&image=image3&choix=$choix> <img src=../Front/assets/img/".$row['image3']. " width='100%' ></a> ";
                            echo "</div>";
                            }
                            if($row['image4']!=''){
                            echo"<div class='small-img-col'>";
                                echo "<a href=imagesproduit.php?id=$id&image=image4&choix=$choix> <img src=../Front/assets/img/".$row['image4']. " width='100%' ></a> ";
                            echo "</div>";
                            }
                            if($row['image5']!=''){
                            echo "<div class='small-img-col'>";
                                echo "<a href=imagesproduit.php?id=$id&image=image5&choix=$choix> <img src=../Front/assets/img/".$row['image5']. " width='100%' ></a> ";
                            echo "</div>";
                            }
                            

                        ?>
                    </div>  

                    
                    
                    
                
 
            </div>
        </div>
<br><br>

 




<!---------------js for product gallery------------>

<script>
     var ProductImg = document.getElementById("ProductImg");
     var SmallImg = document.getElementsByClassName("small-img");

        SmallImg[0].onclick = function()
        {
            ProductImg.src = SmallImg[0].src;
        }
        SmallImg[1].onclick = function()
        {
            ProductImg.src = SmallImg[1].src;
        }
        SmallImg[2].onclick = function()
        {
            ProductImg.src = SmallImg[2].src;
        }
        SmallImg[3].onclick = function()
        {
            ProductImg.src = SmallImg[3].src;
        }

        
</script>
  <!-------js for toggle menu -------->
  <script>
        var MenuItems= document.getElementById("MenuItems");
        MenuItems.style.maxHeight="0px";
        function togglemenu(){
            if (MenuItems.style.maxHeight =="0px") {
                MenuItems.style.maxHeight ="280px";
            }
            else
            {
                MenuItems.style.maxHeight ="0px";
            }
        }
    </script>
</body>
</html>