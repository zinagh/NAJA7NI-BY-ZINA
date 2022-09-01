<?php
include 'DBconnection.php';
session_start();
if (!isset($_SESSION["emailadmin"]))
    {
        header("Location: dashboardlogin.php");
        exit();
    }
    $sql='select * from utilisateurs where email="'.$_SESSION["emailadmin"].'";';
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    $compte=$row['nom'].' '.$row['prenom'];


$sql='select * from utilisateurs;';
$result=mysqli_query($conn,$sql);
$sql='select count(email) as total from utilisateurs where loggedin=1 ;';
$resultat=mysqli_query($conn,$sql);
$membersonline=mysqli_fetch_assoc($resultat);
$sql='select count(email) as total from utilisateurs;';
$resultat=mysqli_query($conn,$sql);
$members=mysqli_fetch_assoc($resultat);
$sql='select count(email) as total from utilisateurs where ban=1;';
$resultat=mysqli_query($conn,$sql);
$membersbanned=mysqli_fetch_assoc($resultat);
if(isset($_GET['choix'])){
    $choix = $_GET['choix'];
    }else{
        $choix = 0;
    }
    $success="";
if (isset($_GET['msg'])){
    $success=$_GET['msg'];
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="../front/assets/img/logo.ico">
<meta charset="UTF-8">


    <!-- Title Page-->
    <title>gestion des comptes</title>

    <!-- Fontfaces CSS-->
    
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->


    <!-- Main CSS-->
    <link href="css/styles.css" rel="stylesheet" media="all">
    <?php if($choix==2){
    echo"<link href='../Front/style.css' rel='stylesheet' media='all'>
    
    <style>
        .reg-container {
          max-width: 450px;
        }
        .imgGallery img {
          padding: 8px;
          max-width: 100px;
        }    
    </style>
    
    ";
    }
    ?>
    <script src="ajoutcompte.js"> </script>
</head>
<body >
 <div class="page-wrapper">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop3 d-none d-lg-block">
            <div class="section__content section__content--p35">
                <div class="header3-wrap">
                    <div class="header__logo">
                        
                            <img src="images/icon/logo-white.png" alt="CoolAdmin" />
                        </a>
                    </div>
                    <div class="header__navbar">
                        <ul class="list-unstyled">
                            <li>
                                <a href="gestionannonces.php">
                                    <i class="fas fa-bullhorn"></i>
                                    <span class="bot-line"></span>Gestion des produits</a>
                            </li>
                            <li>
                                <a href="gestionbillets.php">
                                    <i class="fas fa-tag"></i>
                                    <span class="bot-line"></span>Gestion des billets</a>
                            </li> 
                            <li class="has-sub">
                                <a href="gestionventes.php">
                                    <i class="fas fa-shopping-cart"></i>
                                    <span class="bot-line"></span>Gestion des ventes</a>
                            
                            </li>  
                            <li class="has-sub">
                            <a href="gestionactualites.php">
                                    <i class="fas fa-list-alt"></i>
                                    <span class="bot-line"></span>Gestion des actualités</a>
                            
                            </li>
                            <li class="has-sub">
                            <a href="ModifierPublicite.php">
                                <i class="fas fa-bookmark"></i>
                                <span class="bot-line"></span>Gestion des publicités</a>

                        </li>
                        <li class="has-sub">
                            <a href="Modifierpromo.php">
                                <i class="fas fa-bell"></i>
                                <span class="bot-line"></span>Gestion des promotions</a>

                        </li>
                            <li class="has-sub">
                                <a href="gestioncomptes.php">
                                    <i class="fas fa-user"></i>
                                    <span class="bot-line"></span>Gestion des comptes</a>
                            
                            </li>
                           
                        </ul>
                    </div>
                    <div class="header__tool">
                        
                        <div class="header-button-item js-item-menu">
                            <i class="zmdi zmdi-settings"></i>
                            <div class="setting-dropdown js-dropdown">
                               
                                <div class="account-dropdown__body">
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-globe"></i>Language</a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-pin"></i>Location</a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-email"></i>Email</a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-notifications"></i>Notifications</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="account-wrap">
                            <div class="account-item account-item--style2 clearfix js-item-menu">
                                <div class="content">
                                  <span> <?php echo $compte ?></span>
                                </div>
                                <div class="account-dropdown js-dropdown">
                                    
                                    <div class="account-dropdown__footer">
                                    <a href="../../controller/adminlogout.php">
                                            <i class="zmdi zmdi-power"></i>Déconnexion</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- END HEADER DESKTOP-->

       
        <!-- PAGE CONTENT-->
      <div class="big-container">
        <div class="page-content--bgf7">
        
        <div class=choose-btn-compte>
                                        
                                            <?php if($choix==0){
                                            
                                            echo "<div> <a href='gestioncomptes.php?choix=0' class='button button5 active'  > <strong>Statistique des comptes</strong> </a> </div>";
                                            
                                            echo "<div> <a href='gestioncomptes.php?choix=1' class='button button5 '  > <strong>Liste des comptes</strong> </a> </div>";
                                            echo " <div> <a href='gestioncomptes.php?choix=2' class='button button5 '  > <strong>Ajouter un compte</strong> </a> </div>";
                                            }
                                            else if ($choix==1) {
                                                echo "<a href='gestioncomptes.php?choix=0' class='button button5'  > <strong>Statistique des comptes</strong> </a>";
                                                echo "<a href='gestioncomptes.php?choix=1' class='button button5 active'  > <strong>Liste des comptes</strong> </a>";
                                                echo "<a href='gestioncomptes.php?choix=2' class='button button5'  > <strong>Ajouter un compte</strong> </a>";

                                            }
                                            else
                                            {
                                                echo "<a href='gestioncomptes.php?choix=0' class='button button5'  > <strong>Statistique des comptes</strong> </a>";
                                                echo "<a href='gestioncomptes.php?choix=1' class='button button5'  > <strong>Liste des comptes</strong> </a>";
                                                echo "<a href='gestioncomptes.php?choix=2' class='button button5  active'  > <strong>Ajouter un compte</strong> </a>";  
                                            }
                                           
                                            ?>
                                        
                                       
                                       


                                    </div>

            <?php if ($choix==0) { ?>

           

            <section class="statistic statistic2">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6 col-lg-3">
                                        <div class="statistic__item statistic__item--blue">
                                            <h2 class="number"><?php echo ($members['total']) ?></h2>
                                            <span class="desc">Utilisateurs</span>
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                        </div>
                                    </div>
                                <div class="col-md-6 col-lg-3">
                                        <div class="statistic__item statistic__item--green">
                                            <h2 class="number"><?php echo ($membersonline['total']) ?></h2>
                                            <span class="desc">Utilisateurs en ligne</span>
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3">
                                        <div class="statistic__item statistic__item--red">
                                            <h2 class="number"><?php echo ($membersbanned['total']) ?></h2>
                                            <span class="desc">Utilisateurs suspendues</span>
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                         
                     </section>
    
            <?php } 

        else if ($choix==1) { ?>

            <div class="container">
            <div class="row">
            <div class="col-md-12">

            
                    
                    
                </div>
                <div class="table-responsive table-responsive-data2">
                    <table class="table table-data2">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Email</th>
                                <th>Date de naissance</th>
                                <th>Sexe</th>
                                <th>Numéro de téléphone</th>
                                <th>Adresse</th>
                                <th>En Ligne</th>
                                <th>Ban</th>
                                <th>Administratuer</th>

                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            while($rows=mysqli_fetch_assoc($result))
                            {
                                ?>

                            <tr class="tr-shadow">

                                <td><?php echo $rows['nom']; ?></td>
                                <td><?php echo $rows['prenom']; ?></td>
                                <td><?php echo $rows['email']; ?></td>
                                <td><?php echo $rows['datenaissance']; ?></td>
                                <td><?php echo $rows['sexe']; ?></td>
                                <td><?php echo $rows['numtel']; ?></td>
                                <td><?php echo $rows['adresse']; ?></td>
                                <td><?php echo $rows['Loggedin']; ?></td>
                                <td><?php echo $rows['ban']; ?></td>
                                <td><?php echo $rows['admin']; ?> </td>

                               
                                <td>
                                <?php
                                if ($rows['admin']==0)
                                { ?>

                                    <div class="table-data-feature">

                                        <a href="../../controller/ban.php?id=<?php echo $rows['email'] ?>">
                                          <button class="item" data-toggle="tooltip" data-placement="top"  title="Ban">
                                            <i class="zmdi zmdi-delete"></i>
                                        </button>
                                        </a>
                                    </div>
                                    <?php
                            }
                            ?>
                                </td>

                           

                                <td>
 <?php
                                if ($rows['admin']==0)
                                { ?>

                                    <div class="table-data-feature">

                                        <a href="../../controller/unban.php?id=<?php echo $rows['email'] ?>">
                                                    <button class="item" data-toggle="tooltip" data-placement="top"  title="Unban">
                                                        <i class="zmdi zmdi-time-restore-setting"></i>
                                                    </button>
                                        </a>
                                    </div>
                                    <?php } ?>
                                </td>
                                

                            </tr>

                            <?php
                            }
                            ?>

                            <tr class="spacer"></tr>
                            


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
         <?php }
         
         else { ?>
         <div class="ajout-compte-container">
         <div class="account-page">
             <form action="../../controller/ajoutcompte.php" method="POST" name="fcompte" id="fcompte" class="fcompte">
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
                        <input type="radio" name="admin" id="user" value="0" class="admin">
                        <label for="user">Utilisateur</label>
                        <input type="radio" name="admin" id="admin" value="1" class="admin">
                        <label for="Administratuer">Administratuer</label>
                        <p  id="erreur" style="color :#ff523b; margin:10px 0px;" ></p>
                        <p   style="color :green; margin:10px 0px;" ><?php echo $success; ?></p>
                        <button  type="submit" class="btn" value="RegForm" onclick="return verif()">Ajouter</button>
                      </form>
         </div>
         </div>


         <?php } ?>

                <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    
    <script src="vendor/animsition/animsition.min.js"></script>

    
   
   
    
    

    <!-- Main JS-->
    <script src="js/main.js"></script>
    </div>
</body>
</html>
