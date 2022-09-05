<?php
include 'DBconnection.php';
include_once 'C://wamp64/www/naja7ni/controller/userb.php';
include_once 'C://wamp64/www/naja7ni/model/user.php';
session_start();
$compte="Compte";
if (isset($_SESSION["email"]))
{
    $compte="Profil";
    header("Location: profile.php");
    exit();
}
$error="";
if (isset($_GET['msg']) ){
$error=$_GET['msg'];
}
$art = null;
$artC = new userb();
if (
    isset($_POST["nom"]) && 
    isset($_POST["prenom"]) &&
    isset($_POST["email"]) && 
    isset($_POST["mdp"]) && 
    isset($_POST["datenaissance"]) && 
    isset($_POST["sexe"]) &&
    isset($_POST["numtel"]) &&
    isset($_POST["adresse"])
) {
    if (
        !empty($_POST["nom"]) && 
        !empty($_POST["prenom"]) &&
        !empty($_POST["email"]) && 
        !empty($_POST["mdp"]) && 
        !empty($_POST["datenaissance"]) && 
        !empty($_POST["sexe"]) &&
        !empty($_POST["numtel"]) &&
        !empty($_POST["adresse"]) 
    ) {
        $art = new user(
            $_POST['nom'],
            $_POST['prenom'],
            $_POST['email'],
            $_POST['mdp'],
            $_POST['datenaissance'],
            $_POST['sexe'],
            $_POST['numtel'],
            $_POST['adresse']
                );
        $artC->adduser($art);
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
                        <li><a href="quiz.php">Quiz</a></li>
                        <?php if($compte=="Profil"){ 
                echo"<li><a href='htmlAjouterAnnonce.php'>Ajouter Cour</a></li>";
                }?>
                
                        <li><a href="cours.php">Cours</a></li>
              
                        <li><a href="account.php"><?php echo $compte ?></a></li>
            </ul>
            </ul>
        </nav>
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
                        <form action="" method="POST" id="RegForm" name="f1" >
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
                        <a href="#RegForm"></a><button  type="submit" class="btn" value="RegForm" onclick="return verif()" name="signup_submit">S'inscrire</button></a>
                        
                      </form>
                       

                    </div>
                    <p style="color: rgb(255, 0, 0);" id="erreurinscription"></p>

 
                
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
        <p class="copyright">Copyright 2022 - naja7ni</p>
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