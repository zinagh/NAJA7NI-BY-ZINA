<?php
include 'DBconnection.php';
session_start();
if (isset($_SESSION["email"]))
{
    header("Location: profile.php");
    exit();
}
$error="";
if (isset($_GET['msg']) ){
$error=$_GET['msg'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/logo.ico">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Login</title>
    <script src="../../controller/signup.js"> </script>
</head>
<body>
    <div class="login-container">
    <div class="container">
    <div class="navbar">
        <div class="logo">
            <a href="index.php"> <img src="assets/img/logo.png"> </a>
        </div>
    
    <nav>
        <ul id="MenuItems">
            <li><a href="index.php">Acceuil</a></li>
            <li><a href="annonce.php">Produits</a></li>
            <li><a href="billets.php">Billets</a></li>
            <li><a href="actualites.php">Actualités</a></li>
            <li><a href="Publicite.php">Publicite</a></li>
            <li><a href="account.php">Compte</a></li>
        </ul>
    </nav>
    <a href="panier.php"><img src="assets/img/cart.png" class="cart" alt=""></a>
    <img src="assets/img/menu.png" class="menu-icon" onclick="togglemenu()">
  </div>
  </div>
  
<!--------------- account-page ----------->
<div class="account-page">
    <div class="container">
        <div class="row">
            <div class="col-2">
                <img src="assets/img/image1.png" alt="" width="100%">
            </div>
            <div class="col-2">
                <div class="form-container">
                    <div class="form-btn">
                        <span onclick="register()">Inscription</span>
                        <span onclick="login()">Connexion</span>
                        <hr id="indicator">
                    </div>
                    <form  action="../../controller/login.php" method="POST" id="LoginForm">
                        <input type="email" name="email" placeholder="Email">
                        <input type="password" name="mdp" placeholder="password">
                        <p style="color :#ff523b; margin:10px 0px;"> <?php echo $error ?> </p>
                        <button type="submit" class="btn" onclick="">Connexion</button>
                        <a href="mdp.html">Mot de passe oublié ?</a>
                    </form>
                    
                    <div class="reg-container">
                        <form action="../../controller/SignUp.php" method="POST" id="RegForm" name="f1" >
                        <input type="text" name="nom" placeholder="Nom" id="nom">
                        <input type="text" name="prenom" placeholder="Prénom" id="prenom">
                        <input type="email" name="email" placeholder="Email" id="email">
                        <input type="password" name="mdp" placeholder="Mot de passe" id="mdp">
                        <input type="password" name="mdp2" placeholder="Confirmer votre mot de passe" id="mdp2">
                        <input type="date" name="datenaissance" id="datenaissance" >
                        <input type="radio" name="sexe" id="homme" value="H" class="gender">
                        <label for="homme">Homme</label>
                        <input type="radio" name="sexe" id="Femme" value="F" class="gender">
                        <label for="Femme">Femme</label>
                        <input type="radio" name="sexe" id="autre" value="A" class="gender">
                        <label for="autre">Autre</label>
                        <input type="text" name="numtel" placeholder="Numéro de téléphone" id="Numtel">
                        <input type="text" name="adresse" placeholder="Adresse" id="Adresse">
                        <p  id="erreur" style="color :#ff523b; margin:10px 0px;" ></p>
                        <a href="href="#RegForm"></a><button  type="submit" class="btn" value="RegForm" onclick="return verif()">S'inscrire</button></a>
                        
                      </form>
                       

                    </div>

 
                
                </div>
            </div>
        </div>
    </div>
</div>
</div>



   <!-----------------------js for toggle form -------------> 
   <script>
        function login(){
            document.getElementById("RegForm").style.transform="translateX(0px)";
            document.getElementById("LoginForm").style.transform="translateX(0px)";
            document.getElementById("indicator").style.transform="translateX(100px)";
                    }
        function register(){
            document.getElementById("RegForm").style.transform="translateX(300px)";
            document.getElementById("LoginForm").style.transform="translateX(300px)";
            document.getElementById("indicator").style.transform="translateX(0px)";
        }
   </script>
<!---------- footer ------------>
<div class="footer" >
    <div class="container" style= >
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
 <!-------js for toggle menu -------->
 <script>
        var MenuItems= document.getElementById("MenuItems");
        MenuItems.style.maxHeight="0px";
        function togglemenu(){
            if (MenuItems.style.maxHeight =="0px") {
                MenuItems.style.maxHeight ="200px";
            }
            else
            {
                MenuItems.style.maxHeight ="0px";
            }
        }
    </script>
</body>
</html>