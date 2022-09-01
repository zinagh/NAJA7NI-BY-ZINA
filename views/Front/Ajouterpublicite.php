<?php
include_once '../../model/publicites.php';
include_once '../../controller/ajouterpublicite.php';
session_start();
if ($_SESSION["email"]=="")
{
    header("Location: account.php");
    exit();
}
$error = "";

// create publicite
$publicite = null;

// create an instance of the controller
$publiciteC = new publiciteC();
if (
    isset($_POST["titre"]) &&
    isset($_POST["description"]) &&
    isset($_POST["image"]) &&
    isset($_POST["lien"]) 
) {
    if (
        !empty($_POST["titre"]) &&
        !empty($_POST["description"]) &&
        !empty($_POST["image"]) &&
        !empty($_POST["lien"]) 
    ) {
        $publicite = new publicite(
            $_POST['titre'],
            $_POST['description'],
            $_POST['image'],
            $_POST['lien']

        );
        $publiciteC->ajouterpublicite($publicite);
        //header('Location:../front/blogs.php');
    } else
        echo "Missing information";
}




?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Actualités</title>
    <link rel="stylesheet" type="text/css" href="news.css">
    <link rel="stylesheet" type="text/css" href="news.css">
    
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width , initial-scale=1.0">
</head>

<body>
    <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <a href="index.html"> <img src="assets/img/logo.png"> </a>
                </div>
                <nav>
                    <ul>
                        <li><a href="index.html">Acceuil</a></li>
                        <li><a href="annonce.html">Annonces</a></li>
                        <li><a href="Publicite.php">Publicite</a></li>
                        <li><a href="billets.html">Billets</a></li>
                        <li><a href="actualites.html">Actualités</a></li>
                        <li><a href="account.php">Compte</a></li>
                    </ul>
                </nav>
                <img src="assets/img/cart.png" class="cart" alt="">
            </div>

        </div> 
        
        <form method="post" action="">
                            <div class="form-group">
                                <label for="titre">titre</label>
                                <input type="text" class="form-control" name="titre" id="titre" placeholder="Entrer le titre">
                            </div>

                      



                            <div class="form-group">
                                <label for="description">description</label>
                                <input type="text" class="form-control" name="description">
                            </div>

                          
                            <div class="form-group">
                                <label for="lien">Ajouter Image</label>
                                <input type="file" class="form-control-file" name="image">
                            </div>
                      
                            <div class="form-group">
                                <label for="lien">lien </label>
                                <input type="text" class="form-control" name="lien">
                            </div>


                            <button type="submit" value="Envoyer" class="btn btn-primary">Submit</button>

     </form>     
    </div>

   
             
           


       
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
</body>
</html>