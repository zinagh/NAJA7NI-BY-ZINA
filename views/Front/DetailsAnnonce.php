<?php

    include '../Dashboard/DBconnection.php';
    include '../../controller/PHPfunctions.php';



    session_start();
    $compte="Compte";
    if (isset($_SESSION["email"]))
    {
        $compte="Profil";
        $email=$_SESSION['email'];
    }


    if(isset($_GET['msg'])) {
        $msg = ($_GET['msg']);
        
        }else{
            $msg = '';
        }


    if(isset($_GET['image'])) {
        $image = ($_GET['image']);
        
        }else{
            $image = 'image1';
        }

    $id = $_GET['id'];
    $sql = "SELECT * FROM miseenvente WHERE id=". $id .";";
    
    /********** inc vues****************/ 
    $vues = "UPDATE miseenvente SET vues = vues +1 WHERE id =" . $id .";";
    $conn->query($vues);

    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);


    //Produits Connexes


    
    $sql1 = "SELECT * FROM miseenvente WHERE categorie ='" . $row['categorie']. " ' and id !=". $id ." LIMIT 4 ;";
    $categorie= $row['categorie'];
    //echo $sql1; die;
    $result1 = mysqli_query($conn,$sql1);
    //echo $row['categorie']

    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/logo.ico">
    <title>SporTun</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script type='text/javascript' src='https://demo.wpzoom.com/domino/wp-includes/js/jquery/jquery.js?ver=1.12.4'></script>
</head>
<body>
      <div class="container">
        <div class="navbar">
            <div class="logo">
                <a href="index.html"> <img src="assets/img/logo.png"> </a>
            </div>
        
        <nav>
            <ul id="MenuItems">
                <li><a href="index.php">Acceuil</a></li>
                <li><a href="annonce.php">Produits</a></li>
                <?php if($compte=="Profil"){ 
                echo"<li><a href='../../controller/AjouterAnnonce.php'>Vendre un produit</a></li>";
                }?>
                <li><a href="billets.php">Billets</a></li>
                <li><a href="actualites.php">Actualités</a></li>
                <li><a href="Publicite.php">Publicite</a></li>
                <li><a href="account.php"><?php echo $compte ?></a></li>
            </ul>
        </nav>
        <a href="panier.php"><img src="assets/img/cart.png" class="cart" alt=""></a>
        <img src="assets/img/menu.png" class="menu-icon" onclick="togglemenu()">
      </div>

      </div>




      



<!--



      <div class="wpzoom-style-picker no_display closed" style="display: block;">

    <div class="content">





        <h2 class="picker-title">CATEGORIES</h2>


 ------ featured categories -------
 <div class="categories1">

<div class="small-container">
    <div class="row1">
        <a href='actualitesfb.php' class='col-categories1'>
            <img src="assets/img/20_thumb.png" alt="Football">
            <h2>FOOTBALL</h2>
        </a>
        <a href='actualitescyclisme.php' class='col-categories1'>
            <img src="assets/img/18_thumb.png" alt="Cyclisme">
            <h2>CYCLISME</h2>
        </a>
        <a href='actualitesathletisme.php' class='col-categories1'>
            <img src="assets/img/4_thumb.png" alt="Athlétisme">
            <h2>ATHLETISME</h2>
        </a>
        <a href='actualitestennis.php' class='col-categories1'>
            <img src="assets/img/8_thumb.png" alt="Tennis">
            <h2>TENNIS</h2>
        </a>
        <a href='actualiteshb.php' class='col-categories1'>
            <img src="assets/img/21_thumb.png" alt="Handball">
            <h2>HANDBALL</h2>
        </a>
        <a href='actualites.php' class='col-categories1'>
            <img src="assets/img/230_thumb.png" style="width: 100%;" alt="NEWS">
            <h2>TOUT ARTICLES</h2>
        </a>
    </div>
</div>
</div>



    </div>

    <div class="close-button">
        <a  class="dashicons dashicons-menu" href="#">
        </a>
    </div>



    <script>
        jQuery(document).ready(function() {
            jQuery(".wpzoom-style-picker").fadeIn();

            jQuery(".wpzoom-style-picker .close-button").bind("click", function(e) {
                jQuery(".wpzoom-style-picker").toggleClass("closed");
                e.preventDefault();
            });

            jQuery("label.style-option").each(function() {
                var $inputid = "#" + jQuery(this).attr('data-input');
                var $input = jQuery($inputid);
                var $selector = $input.attr("data-selector");

                jQuery(this).parent().find('label').each(function() {
                    var $val = jQuery(this).attr('data-value');
                    if (jQuery($selector).hasClass($val)) {
                        $input.val($val);
                        jQuery(this).parent().find('label.active').removeClass("active");
                        jQuery(this).addClass("active");
                    }
                });
            });

            jQuery('label[id^="wpzoom-style-picker-"]').bind("click", function(e) {
                var $inputid = "#" + jQuery(this).attr('data-input');
                var $input = jQuery($inputid);

                var $val = jQuery(this).attr('data-value');
                var $selector = $input.attr("data-selector");

                $oldval = jQuery($inputid).val()
                $input.val($val);

                if ($input.attr("data-css")) {
                    $css = $input.attr("data-css");
                    var $options = {};
                    $options[$css] = $val;
                    jQuery($selector).animate($options);
                } else {
                    jQuery($selector).removeClass($oldval);
                    jQuery($selector).addClass($val);
                }

                jQuery(this).parent().find('label.active').removeClass("active");
                jQuery(this).addClass("active");
            });

            jQuery('select[name^="wpzoom-style-picker-"]').each(function(e) {
                jQuery(this).data("old", jQuery(this).val());
            });

            jQuery('[name^="wpzoom-style-picker-"]').bind("change", function(e) {
                jQuery(this).data("new", jQuery(this).val());

                var $selector = jQuery(this).attr("data-selector");
                var $val = jQuery(this).val();
                var $oldval = jQuery(this).data("old");

                if (jQuery(this).attr("data-css")) {
                    jQuery($selector).css(jQuery(this).attr("data-css"), $val);
                } else {
                    jQuery($selector).removeClass($oldval);
                    jQuery($selector).addClass($val);
                }

                console.log($oldval + " || " + $val);

                jQuery(this).data("old", $val);
            })
        });
    </script>
</div>



--------------------------------------- -->








      <!----------single product details------>

      
        <div class="small-container single-product" >
            <div class="row">
                <div class="col-2">
                <?php echo " <img src=assets/img/".$row[$image]. " width='100%' ></a> "?>
                
                    <div class="small-img-row">
                        <?php

                            echo "<div class='small-img-col'>";
                                echo "<a href=DetailsAnnonce.php?id=$id&image=image1> <img src=assets/img/".$row['image1']. " width='100%' ></a> ";
                            echo "</div>";
                            
                            if($row['image2']!=''){
                            echo "<div class='small-img-col'>";
                                echo "<a href=DetailsAnnonce.php?id=$id&image=image2> <img src=assets/img/".$row['image2']. " width='100%' ></a> ";
                            echo "</div>";
                            }
                            if($row['image3']!=''){
                            echo "<div class='small-img-col'>";
                                echo "<a href=DetailsAnnonce.php?id=$id&image=image3> <img src=assets/img/".$row['image3']. " width='100%' ></a> ";
                            echo "</div>";
                            }
                            if($row['image4']!=''){
                            echo"<div class='small-img-col'>";
                                echo "<a href=DetailsAnnonce.php?id=$id&image=image4> <img src=assets/img/".$row['image4']. " width='100%' ></a> ";
                            echo "</div>";
                            }
                            if($row['image5']!=''){
                            echo "<div class='small-img-col'>";
                                echo "<a href=DetailsAnnonce.php?id=$id&image=image5> <img src=assets/img/".$row['image5']. " width='100%' ></a> ";
                            echo "</div>";
                            }
                            

                        ?>
                    </div>     
                
                </div> 
                <div class="col-2">
                    <h1><?php echo $row['titre']; ?></h1>
                    
                    <h4><?php echo $row['prix'] . ' TND'; ?></h4>
                    <!--<input id="quantite" type="number" value="1">-->
                    <a href='../../controller/AjouterPanier.php?id=<?php echo$id?>' class='btn'>Ajouter Au Panier</a>
                    <!--<a href='' onclick="this.href='AjouterPanier.php?id=< ?php echo$id?>&quantite='+document.getElementById('quantite').value" class='btn'>Ajouter Au Panier</a>-->
                    <p style="color :green; margin: -20px 0px 30px; text-align:left; front-size:18px;"> <?php echo $msg ?> </p>

                    <h3>Description <i class="fa fa-indent"></i></h3>
                    <br>
                    <p><?php echo $row['description']; ?></p>

                </div>
            </div>
        </div>


    <!-----------------title------------------------->
        <div class="small-container">
            <div class="row row-2">
                <h2>Produits Connexes</h2>

                <?php echo "<p><a href='Annonce.php?categorie=$categorie#c1' class='hoverprofile'>Voir Plus</a></p>";?>
            </div>
        </div>


    <!-------------------products-------------------->


    <div class="small-container">

        <div class="row">



            <?php
                
                while($rows=mysqli_fetch_assoc($result1))
                {
                    $idx=$rows['id'];
                    
                
            ?>
                     <div class='col-4'>
                        <?php $description=LimitCharacter($rows['description'],50); ?>
                        <?php echo "<a href=DetailsAnnonce.php?id=$idx> <img src=assets/img/" .$rows['image1']. " ></a> "?>
                        <h4><?php echo $rows['titre']; ?></h4>
                        <p><?php echo $rows['prix'] . ' TND'; ?></p>
                        <p><?php echo $description ?></p>
                        <!--<p> <a href="" class="hoverprofile" title="Voir profil de vendeur" > Nada </a> </p>-->
                        <br><br><br><br>
                    </div>

            <?php
                }
        
            ?>









        </div>
        
    

    </div>


    

    <!---------- footer ------------>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Télécharger notre application</h3>
                    <p>Télécharger application pour Android et ios mobile</p>
                    <div class="app-logo">
                        <img src="assets/img/play-store.png" alt="">
                        <img src="assets/img/app-store.png" alt="">
                    </div>
                </div>
                <div class="footer-col-2">
                    <img class="logofooter" src="assets/img/logo-footer.png" alt="">
                    <p>Donnez Un Nouveau Style à Votre Entrainement !</p>
                </div>
                <div class="footer-col-3">
                    <h3>Liens</h3>
                    <ul>
                        <li>Coupons</li>    
                        <li>Blog</li>
                        <li>Rejoindre affilié</li>
                        <li>test</li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Follow  us</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Twitter</li>
                        <li>Instagram</li>
                        <li>Youtube</li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="copyright">Copyright 2020 - SporTun</p>
        </div>
    </div>



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