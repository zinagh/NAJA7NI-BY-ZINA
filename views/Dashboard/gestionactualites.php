<?php include_once 'C://wamp64/www/SporTun/controller/ArticleC.php';
include_once 'C://wamp64/www/SporTun/model/Articles.php';
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


$error = "";

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
        isset($_POST["Datearticle"])
    ) {
        if (
            !empty($_POST["titre"]) && 
            !empty($_POST["texte"]) && 
            !empty($_POST["auteur"]) && 
            !empty($_POST["urlImage"]) && 
            !empty($_POST["notifCreateur"]) &&
            !empty($_POST["Datearticle"])
        ) {
            $art = new article(
                $_POST['titre'],
                $_POST['texte'], 
                $_POST['auteur'],
                $_POST['urlImage'],
                $_POST['notifCreateur'],
                $_POST['Datearticle']
            );
            $artC->ajouterArticle($art);
            //header('Location:afficherUtilisateurs.php');
        }
        else
            $error = "Missing information";
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="../front/assets/img/logo.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/styles.css" rel="stylesheet" media="all">
    <link href="css/css.css" rel="stylesheet" media="all">
    <link href="icon.css" rel="stylesheet">
    <link href="charts.css" rel="stylesheet">


</head>

<body>
 <div class="page-wrapper">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop3 d-none d-lg-block">
            <div class="section__content section__content--p35">
                <div class="header3-wrap">
                    <div class="header__logo">
                        <a href="#">
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

    <section class="statistic statistic2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--blue">
                                <h2 class="number"><?php  $artC = new articleC();
                         $nbre = $artC->affichernbrearticle();
                            ?>
                            <?php
                            foreach ($nbre as $row) {
                            ?>
                                                                <td><?PHP echo $row['nbrart'] ; ?></td> <?php } ?></h2>
                                <span class="desc">Articles</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-calendar-note"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--red">
                                <h2 class="number"> <?php  $auteurC = new articleC();
                         $nombre = $auteurC->affichernbreauteur();
                            ?>
                            <?php
                            foreach ($nombre as $row) {
                            ?>
                                                                <td><?PHP echo $row['nbr'] ; ?></td> <?php } ?>
</h2>
                                <span class="desc">Nombres D'Auteurs</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-money"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    
    <!-- ACTIONS -->
    <section id="actions" class="py-4 mb-4 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="ajouterarticle.php" class="btn btn-primary btn-block" >
                        <i class="fas fa-plus"></i> Ajouter Article
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- POSTS -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-9" id="postParent">
                    <div class="card" id="postContainer">
                        <div class="card-header">
                            <h4>3 derniers ARTICLES</h4>
                        </div>
                        
                                
                                <tbody id="latestPosts"> 
                                      <?php require_once "Latest Posts.php" ?>
                                </tbody>
                            
                         
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="card text-center bg-primary text-white mb-3">
                        <div class="card-body">
                            <h3>Posts</h3>
                            <!-- Added ID for JS -->
                            <h4 class="display-4" id="postCount">
                                <i class="fas fa-pencil-alt"></i>
                            </h4>
                            <a href="afficherarticle.php" class="btn btn-outline-light btn-sm">View</a>
                        </div>

                    </div>
                    <div class="card text-center bg-warning text-white mb-3">
                        <div class="card-body">
                            <h3>STATISTIQUES</h3>
                            <h4 class="display-4">
                                <i class="fas fa-users"></i> 4
                            </h4>
                            <a href="statuser.php" class="btn btn-outline-light btn-sm">View</a>
                        </div> 

                    </div>
                </div>
            </div>
        </div>
    </section>
     <!-- Scroll to Top Button-->
     <a class="btnscrolltotop" href="#page-top">
        <i class="material-icons">arrow_circle_up</i>
    </a>
    <div class="col-md-9 col-lg-6">
                            
                            <div class="col-md-9" id="postParent">
                    <div class="card" id="postContainer">
                        <div class="card-header">
                            <h4>GRAPHE</h4>
                        </div>
                        
                                
                                <tbody id="latestPosts"> 
                                <!-- CHART PERCENT-->
                                <?php require_once "u.php" ?>
                            <!-- END CHART PERCENT-->
                            <?php require_once "u1.php" ?>
                                </tbody>
                            
                         
                    </div>
                </div>
<br><br>
                        </div>
    <!-- FOOTER -->
    <footer id="main-footer" class="bg-dark text-white mt-5 p-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <p class="lead text-center">
                        Copyright &copy; <span id="year"></span> SPORTUN
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- MODALS -->

    <!-- ADD POST MODAL -->
    <div class="modal fade" id="addPostModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title">Add Post</h5>
                    <button class="close" data-dismiss="modal">
            <span>&times;</span>
          </button>
                </div>
                <div class="modal-body">
     
                <?php require_once "ajouterarticle.php" ?>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- WYSWYG Editor -->
    <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>

    <script>
        // Get the current year for the copyright
        $('#year').text(new Date().getFullYear());
        // Modal Editor
        CKEDITOR.replace('editor1');
    </script>
    <!-- Local JS -->
    <script src="js/app.js"></script>
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    
    <script src="vendor/animsition/animsition.min.js"></script>

    
   
   
    
    

    <!-- Main JS-->
    <script src="js/main.js"></script>
</body>
</html>
