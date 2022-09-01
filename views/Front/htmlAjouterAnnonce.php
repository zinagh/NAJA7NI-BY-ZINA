<?php
include_once 'C://wamp64/www/naja7ni/controller/ArticleC.php';
include_once 'C://wamp64/www/naja7ni/model/Articles.php';
include 'DBconnection.php';
session_start();
if ($_SESSION["email"]=="")
{
    header("Location: account.php");
    exit();
}

$error="";
if (isset($_GET["msg"]))
    {
    $msg=$_GET["msg"];
    }
    else{
    $msg='';
    }

   // create user
   $art = null;

   // create an instance of the controller
   $artC = new articleC();
   if (
       isset($_POST["titre"]) && 
       isset($_POST["texte"]) &&
       isset($_POST["auteur"]) && 
       isset($_POST["urlImage"]) && 
       isset($_POST["notifCreateur"]) &&
    //   isset($_POST["Datearticle"]) &&
       isset($_POST["postCategory"]) 
   ) {
       if (
           !empty($_POST["titre"]) && 
           !empty($_POST["texte"]) && 
           !empty($_POST["auteur"]) && 
           !empty($_POST["urlImage"]) && 
           !empty($_POST["notifCreateur"]) &&
        //   !empty($_POST["Datearticle"]) &&
           !empty($_POST["postCategory"]) 
       ) {
           $art = new article(
               $_POST['titre'],
               $_POST['texte'],
               $_POST['auteur'],
               $_POST['urlImage'],
               $_POST['notifCreateur'],
             //  $_POST['Datearticle'],
               $_POST['postCategory']
           );
           $artC->ajouterArticle($art);
         //  header('Location:../Front/actualites.php');
           $msg="Demande envoyée avec succès!";

       }
       else
           $error = "Missing information";
   }
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Ajouter annonce</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="assets/img/logo.ico">
    <script src="//cdn.ckeditor.com/4.15.1/full/ckeditor.js"></script>

  

    <style>
        .reg-container {
          max-width: 450px;
        }
        .imgGallery img {
          padding: 8px;
          max-width: 100px;
        }    
    </style>

<script src="../../controller/AjouterAnnonce.js"> </script>
</head>

<body>
    


    <div class="login-container">
        <div class="container">
        <div class="navbar">
            <div class="logo">
                <a href="index.html"> <img src="assets/img/logo.png"> </a>
            </div>
        
        <nav>
            <ul id="MenuItems">
                <li><a href="index.php">Acceuil</a></li>
                <li><a href="Annonce.php">Produits</a></li>
                <li><a href='htmlAjouterAnnonce.php'>Ajouter Cour</a></li>
                <li><a href="billets.php">Billets</a></li>
                <li><a href="actualites.php">Cours</a></li>
                <li><a href="Publicite.php">Publicite</a></li>
                <li><a href="account.php">Profil</a></li>
            </ul>
        </nav>
        <a href="panier.php"><img src="assets/img/cart.png" class="cart" alt=""></a>
        <img src="assets/img/menu.png" class="menu-icon" onclick="togglemenu()">
      </div>
      </div>
      
<!--------------- account-page ----------->

    <div class="account-page">
        <div class="container">


        <?php
        if ($msg!='')
        {
        ?>
            <div style="text-align:center;">
            <br><br>
            <p style="color :green; font-size: 25px; " ><?php echo $msg ?> </p>

            <a href='actualites.php' class='btn ajouterannoncesucceeded-btn'> &#8592; Quitter  </a>
            
            <a href='htmlAjouterAnnonce.php' class='btn ajouterannoncesucceeded-btn'>Ajouter Un Autre Cour  </a>
            
            

            </div>
        <?php
        }
        else
        { 
        ?>

<div class="container-fluid">

<div>
    <form action="" method="post">
    <div class="form-group">
        <br><br><br>
        <label for="titre">TITRE</label>
        <input type="text" class="form-control" id="titre" name="titre">
    </div>
    <div class="form-group">
        <label for="texte">texte</label>
        <textarea class="form-control" name="texte" rows="10"></textarea>
    </div>
    <div class="form-group">
        <label for="auteur">auteur</label>
        <input type="text" class="form-control" id="auteur" name="auteur">
    </div>
    <div class="form-group">
        <label for="urlImage">Upload Image</label>
        <div class="custom-file">
            <input type="file" class="custom-file-input" id="urlImage" name="urlImage">
            <label for="urlImage" class="custom-file-label">Choose File</label>
            <small class="form-text text-muted">Max Size 3Mb</small>
        </div>
    </div>
    <div class="form-group">
        <label for="notifCreateur">notifCreateur</label>
        <input type="number" class="form-control1" id="notifCreateur" name="notifCreateur">
    </div>
   <!-- <div class="form-group">
        <label for="Datearticle">Datearticle</label>
        <input type="date" class="form-control" id="Datearticle" name="Datearticle">
    </div>-->
    <div class="form-group">
              <label for="category">Category</label>
              <select class="form-control1" id="postCategory" name="postCategory">
                <option selected="selected">Choose One...</option>
                <option>POO</option>
                <option>PHP</option>
                <option>JAVA</option>
                <option>JAVASCRIPT</option>
                <option>HTML</option>
                <option>PYTHON</option>

              </select>
    </div>
    <div class="form-group">
        <label for="vues">vues</label>
        <input  class="form-control1" id="vues" name="vues" value= "0" disabled>
    </div>
    </div>
    </div>
    <br><br>
    <button class="btn btn-prim" data-dismiss="modal" type="submit" name="signup_submit">Ajouter</button>
    <button class="btn btn-pr" data-dismiss="modal" type="reset" name="signup_submit">Annuler</button>
    <br><br><br><br>

</form>
<script>
                            CKEDITOR.replace('texte');
                        </script>

 
          
        <?php } ?>
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
                NI</p>
            </div>
        </div>





        <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

    <script>
        $(function() {
        // Multiple images preview with JavaScript
        var multiImgPreview = function(input, imgPreviewPlaceholder) {

            if (input.files) {
                var filesAmount = input.files.length;

                for (i = 0; i < filesAmount; i++) {
                    var reader = new FileReader();

                    reader.onload = function(event) {
                        $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(imgPreviewPlaceholder);
                    }

                    reader.readAsDataURL(input.files[i]);
                }
            }

        };

        $('#chooseFile').on('change', function() {
            multiImgPreview(this, 'div.imgGallery');
        });
        });    
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