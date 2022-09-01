<?php
include 'DBconnection.php';
session_start();
$sql='select * from utilisateurs where email="'.$_SESSION["email"].'";';
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$sql='select * from vente where email="'.$_SESSION["email"].'" order by idvente desc;';
$resultat=mysqli_query($conn,$sql);
$error="";
$success="";
if (isset($_GET['msgerror']) ){
$error=$_GET['msgerror'];
}
if (isset($_GET['msgsuccess']) ){
    $success=$_GET['msgsuccess'];
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/logo.ico">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link href="assets/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="assets/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
<title>Profile</title>
<script src="../../contoller/profile.js"></script>
</head>
<body style="overflow-x:hidden;" >
<div class="header" >
        <div class="container">
          <div class="navbar">
              <div class="logo">
                  <a href="index.php"> <img src="assets/img/logo.png"> </a>
              </div>
          
          <nav>
              <ul id="MenuItems">
                  <li><a href="index.php">Acceuil</a></li>
                  <li><a href="annonce.php">Produits</a></li>
                  <li><a href='htmlAjouterAnnonce.php'>Vendre un produit</a></li>
                  <li><a href="billets.php">Billets</a></li>
                  <li><a href="actualites.php">Cours</Col></a></li>
                  <li><a href="Publicite.php">Publicite</a></li>
                  <li><a href="account.php">Profil</a></li>
              </ul>
          </nav>
          <a href="panier.php"><img src="assets/img/cart.png" class="cart" alt=""></a>
          <img src="assets/img/menu.png" class="menu-icon" onclick="togglemenu()">
        </div>
      
</div>

<div class="profile-container">
    <div class="leftbox">
        <nav>
        <a onclick="tabs(0)" class="tab active">
        <i class="fa fa-user"></i>
        </a>  
        <a onclick="tabs(1)" class="tab">
        <i class="fa fa-history"></i>
        </a>
        
        </nav>
    </div>
    <div class="rightbox">
        <div class="profile tabShow" >
            <form action="../../controller/modif.php" name="f2" method="POST" id="modifform" >
            <h1>Informations personnelles</h1>
            <h2>Nom</h2>
            <input type="text" class="input" name="nom" id="esm" value="<?php echo $row['nom']; ?>" >
            <h2>Prénom</h2>
            <input type="text" class="input" name="prenom" id="prenom" value="<?php echo $row['prenom']; ?>" >
            <h2>Email</h2>
            <input type="text" class="input" name="email" id="email" value="<?php echo $row['email']; ?>" >
            <h2>Mot de passe</h2>
            <input type="password" class="input" name="mdp" id="mdp" placeholder="Saisir votre mot de passe" >
            <input type="password" class="input" name="nvmdp" id="nvmdp" placeholder="Saisir votre nouveau mot de passe" >
            <input type="password" class="input" name="nvmdp2" id="nvmdp2" placeholder="Confirmer votre nouveau mot de passe" >
            <h2>Date de naissance</h2>
            <input type="date" class="input" name="datenaissance" id="datenaissance" value="<?php echo $row['datenaissance']; ?>">
            <h2>Numéro de téléphone</h2>
            <input type="text" class="input" name="numtel" id="numtel" value="<?php echo $row['numtel']; ?>" >
            <h2>Adresse</h2>
            <input type="text" class="input" name="adresse" id="adresse" value="<?php echo $row['adresse']; ?>" >
            <p  id="erreurmodif" style="color :#ff523b; margin:10px 0px;" ><?php echo $error; ?></p>
            <p   style="color :green; margin:10px 0px;" ><?php echo $success; ?></p>
            <button class="btn profile-btn" type="submit" onclick="return verif()">Modifier</button>
            
            </form>
            <button  class="btn logout-btn profile-btn"><a href="../../controller/logout.php" style="color:white;" > Déconnexion </a> </button> 
        
        </div>

        <div class="historique tabShow">
            <h1>Historique</h1>
            <table class="historiqueachat">
            <tr> 
            <th> ID </th>
            <th> Titre </th>
            <th>Prix</th>
            <th>Date d'achat</th>
            </tr>
            <?php 
                            while($rows=mysqli_fetch_assoc($resultat))
                            {
                                ?>

                            <tr class="tr-shadow">

                                <td><?php echo $rows['idvente']; ?></td>
                                <td><?php echo $rows['titre']; ?></td>
                                <td><?php echo $rows['prix']; ?></td>
                                <td><?php echo $rows['datevente']; ?></td>

                            </tr>
                            <?php
                            }
                            ?>
                                
           
            
            </table>
        
        </div>
        </div>

</div>




<script src="jquery/jquery-3.2.1.min.js"></script>
<script>
 const tab8tn = document.querySelectorAll(".tab");
 const tab = document.querySelectorAll(".tabShow");

 function tabs(panelIndex) {
     tab.forEach(function(node) {
         node.style.display ="none";
     });
     tab[panelIndex].style.display="block";
 }
 tabs(0);
</script>
<script>
$(".tab").click(function() {
    $(this).addClass("active").siblings().removeClass("active");
})
</script>

</>
      <!---------- footer ------------>
      <div class="footer" style="padding : 1px 0 20px">
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