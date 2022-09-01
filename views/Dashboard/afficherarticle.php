<?php require_once "C://wamp64/www/SporTun/controller/ArticleC.php" ?>
<?php
session_start();
// Page was not reloaded via a button press
if (!isset($_POST['add1'])) {
    $_SESSION['attnum1'] = 0; // Reset counter
}
if (!isset($_POST['add2'])) {
    $_SESSION['attnum2'] = 0; // Reset counter
}

?>


<!DOCTYPE html>
<html lang="en">


<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">
    <link href="icon.css" rel="stylesheet">

</head>

<body id="page-top">
<body>
    <!-- HEADER DESKTOP-->
    <header class="header-desktop3 d-none d-lg-block">
        <div class="section__content section__content--p35">
            <div class="header3-wrap">
                <div class="header__logo">
                    <a href="index.php">
                        <img src="images/icon/logo-white.png" alt="CoolAdmin" />
                    </a>
                </div>
                <div class="header__navbar">
                    <ul class="list-unstyled">
                        <li class="has-sub">
                            <a href="index.php">
                                <i class="fas fa-home"></i>Acceuil
                                <span class="bot-line"></span>
                            </a>
                        </li>
                        <li>
                            <a href="gestionannonces.php">
                                <i class="fas fa-bullhorn"></i>
                                <span class="bot-line"></span>Gestion des annonces</a>
                        </li>
                        <li>
                            <a href="gestionbillets.php">
                                <i class="fas fa-tag"></i>
                                <span class="bot-line"></span>Gestion des billets</a>
                        </li>
                        <li class="has-sub">
                            <a href="gestionactualites.php">
                                <i class="fas fa-list-alt"></i>
                                <span class="bot-line"></span>Gestion des actualités</a>

                        </li>
                        <li class="has-sub">
                            <a href="gestioncomptes.php">
                                <i class="fas fa-user"></i>
                                <span class="bot-line"></span>Gestion des comptes</a>

                        </li>
                    </ul>
                </div>
                <div class="header__tool">
                    <div class="header-button-item has-noti js-item-menu">
                        <i class="zmdi zmdi-notifications"></i>
                        <div class="notifi-dropdown notifi-dropdown--no-bor js-dropdown">
                            <div class="notifi__title">
                                <p>You have 3 Notifications</p>
                            </div>
                            <div class="notifi__item">
                                <div class="bg-c1 img-cir img-40">
                                    <i class="zmdi zmdi-email-open"></i>
                                </div>
                                <div class="content">
                                    <p>You got a email notification</p>
                                    <span class="date">April 12, 2018 06:50</span>
                                </div>
                            </div>
                            <div class="notifi__item">
                                <div class="bg-c2 img-cir img-40">
                                    <i class="zmdi zmdi-account-box"></i>
                                </div>
                                <div class="content">
                                    <p>Your account has been blocked</p>
                                    <span class="date">April 12, 2018 06:50</span>
                                </div>
                            </div>
                            <div class="notifi__item">
                                <div class="bg-c3 img-cir img-40">
                                    <i class="zmdi zmdi-file-text"></i>
                                </div>
                                <div class="content">
                                    <p>You got a new file</p>
                                    <span class="date">April 12, 2018 06:50</span>
                                </div>
                            </div>
                            <div class="notifi__footer">
                                <a href="#">All notifications</a>
                            </div>
                        </div>
                    </div>
                    <div class="header-button-item js-item-menu">
                        <i class="zmdi zmdi-settings"></i>
                        <div class="setting-dropdown js-dropdown">
                            <div class="account-dropdown__body">
                                <div class="account-dropdown__item">
                                    <a href="#">
                                        <i class="zmdi zmdi-account"></i>Account</a>
                                </div>
                                <div class="account-dropdown__item">
                                    <a href="#">
                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                </div>
                                <div class="account-dropdown__item">
                                    <a href="#">
                                        <i class="zmdi zmdi-money-box"></i>Billing</a>
                                </div>
                            </div>
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
                            <div class="image">
                                <img src="images/icon/avatar-01.png" alt="John Doe" />
                            </div>
                            <div class="content">
                                <a class="js-acc-btn" href="#">john doe</a>
                            </div>
                            <div class="account-dropdown js-dropdown">
                                <div class="info clearfix">
                                    <div class="image">
                                        <a href="#">
                                            <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h5 class="name">
                                            <a href="#">john doe</a>
                                        </h5>
                                        <span class="email">johndoe@example.com</span>
                                    </div>
                                </div>
                                <div class="account-dropdown__body">
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-account"></i>Account</a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-settings"></i>Setting</a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-money-box"></i>Billing</a>
                                    </div>
                                </div>
                                <div class="account-dropdown__footer">
                                    <a href="#">
                                        <i class="zmdi zmdi-power"></i>Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- END HEADER DESKTOP-->

    <!-- HEADER MOBILE-->
    <header class="header-mobile header-mobile-2 d-block d-lg-none">
        <div class="header-mobile__bar">
            <div class="container-fluid">
                <div class="header-mobile-inner">
                    <a class="logo" href="index.html">
                        <img src="images/icon/logo-white.png" alt="CoolAdmin" />
                    </a>
                    <button class="hamburger hamburger--slider" type="button">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
        <nav class="navbar-mobile">
            <div class="container-fluid">
                <ul class="navbar-mobile__list list-unstyled">
                    <li class="has-sub">
                        <a class="js-arrow" href="#">
                            <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                            <li>
                                <a href="index.html">Dashboard 1</a>
                            </li>
                            <li>
                                <a href="index2.html">Dashboard 2</a>
                            </li>
                            <li>
                                <a href="index3.html">Dashboard 3</a>
                            </li>
                            <li>
                                <a href="index4.html">Dashboard 4</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="chart.html">
                            <i class="fas fa-chart-bar"></i>Charts</a>
                    </li>
                    <li>
                        <a href="table.html">
                            <i class="fas fa-table"></i>Tables</a>
                    </li>
                    <li>
                        <a href="form.html">
                            <i class="far fa-check-square"></i>Forms</a>
                    </li>
                    <li>
                        <a href="calendar.html">
                            <i class="fas fa-calendar-alt"></i>Calendar</a>
                    </li>
                    <li>
                        <a href="map.html">
                            <i class="fas fa-map-marker-alt"></i>Maps</a>
                    </li>
                    <li class="has-sub">
                        <a class="js-arrow" href="#">
                            <i class="fas fa-copy"></i>Pages</a>
                        <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                            <li>
                                <a href="login.html">Login</a>
                            </li>
                            <li>
                                <a href="register.html">Register</a>
                            </li>
                            <li>
                                <a href="forget-pass.html">Forget Password</a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-sub">
                        <a class="js-arrow" href="#">
                            <i class="fas fa-desktop"></i>UI Elements</a>
                        <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                            <li>
                                <a href="button.html">Button</a>
                            </li>
                            <li>
                                <a href="badge.html">Badges</a>
                            </li>
                            <li>
                                <a href="tab.html">Tabs</a>
                            </li>
                            <li>
                                <a href="card.html">Cards</a>
                            </li>
                            <li>
                                <a href="alert.html">Alerts</a>
                            </li>
                            <li>
                                <a href="progress-bar.html">Progress Bars</a>
                            </li>
                            <li>
                                <a href="modal.html">Modals</a>
                            </li>
                            <li>
                                <a href="switch.html">Switchs</a>
                            </li>
                            <li>
                                <a href="grid.html">Grids</a>
                            </li>
                            <li>
                                <a href="fontawesome.html">Fontawesome Icon</a>
                            </li>
                            <li>
                                <a href="typo.html">Typography</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="sub-header-mobile-2 d-block d-lg-none">
        <div class="header__tool">
            <div class="header-button-item has-noti js-item-menu">
                <i class="zmdi zmdi-notifications"></i>
                <div class="notifi-dropdown notifi-dropdown--no-bor js-dropdown">
                    <div class="notifi__title">
                        <p>You have 3 Notifications</p>
                    </div>
                    <div class="notifi__item">
                        <div class="bg-c1 img-cir img-40">
                            <i class="zmdi zmdi-email-open"></i>
                        </div>
                        <div class="content">
                            <p>You got a email notification</p>
                            <span class="date">April 12, 2018 06:50</span>
                        </div>
                    </div>
                    <div class="notifi__item">
                        <div class="bg-c2 img-cir img-40">
                            <i class="zmdi zmdi-account-box"></i>
                        </div>
                        <div class="content">
                            <p>Your account has been blocked</p>
                            <span class="date">April 12, 2018 06:50</span>
                        </div>
                    </div>
                    <div class="notifi__item">
                        <div class="bg-c3 img-cir img-40">
                            <i class="zmdi zmdi-file-text"></i>
                        </div>
                        <div class="content">
                            <p>You got a new file</p>
                            <span class="date">April 12, 2018 06:50</span>
                        </div>
                    </div>
                    <div class="notifi__footer">
                        <a href="#">All notifications</a>
                    </div>
                </div>
            </div>
            <div class="header-button-item js-item-menu">
                <i class="zmdi zmdi-settings"></i>
                <div class="setting-dropdown js-dropdown">
                    <div class="account-dropdown__body">
                        <div class="account-dropdown__item">
                            <a href="#">
                                <i class="zmdi zmdi-account"></i>Account</a>
                        </div>
                        <div class="account-dropdown__item">
                            <a href="#">
                                <i class="zmdi zmdi-settings"></i>Setting</a>
                        </div>
                        <div class="account-dropdown__item">
                            <a href="#">
                                <i class="zmdi zmdi-money-box"></i>Billing</a>
                        </div>
                    </div>
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
                    <div class="image">
                        <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                    </div>
                    <div class="content">
                        <a class="js-acc-btn" href="#">john doe</a>
                    </div>
                    <div class="account-dropdown js-dropdown">
                        <div class="info clearfix">
                            <div class="image">
                                <a href="#">
                                    <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                </a>
                            </div>
                            <div class="content">
                                <h5 class="name">
                                    <a href="#">john doe</a>
                                </h5>
                                <span class="email">johndoe@example.com</span>
                            </div>
                        </div>
                        <div class="account-dropdown__body">
                            <div class="account-dropdown__item">
                                <a href="#">
                                    <i class="zmdi zmdi-account"></i>Account</a>
                            </div>
                            <div class="account-dropdown__item">
                                <a href="#">
                                    <i class="zmdi zmdi-settings"></i>Setting</a>
                            </div>
                            <div class="account-dropdown__item">
                                <a href="#">
                                    <i class="zmdi zmdi-money-box"></i>Billing</a>
                            </div>
                        </div>
                        <div class="account-dropdown__footer">
                            <a href="#">
                                <i class="zmdi zmdi-power"></i>Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END HEADER MOBILE -->

    <!-- Page Wrapper -->
    <div id="wrapper">

     
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div>
                        <?PHP
                        $articleC = new articleC();
                        if ($_SESSION['attnum1'] > $_SESSION['attnum2']) {

                            $listearticle = $articleC->sortdate1();
                        } else if ($_SESSION['attnum1'] < $_SESSION['attnum2']) {
                            $listearticle = $articleC->sortdate2();
                        } else {
                            $listearticle = $articleC->afficherarticle();
                        }
                        $nbrC = new articleC();
                        $nbr = $nbrC->affichernbrearticle();
                        $limit=8;
                        $page = isset($_GET['page']) ? $_GET['page'] : 1;
                        
                        foreach ($nbr as $row) {
                            
                           $total = $row['nbrart'] ;   } 
                            $pages = ceil( $total / $limit );
                        
                            $Previous = $page - 1;
                            $Next = $page + 1;
                        
                        ?>
                                                <!--  <table border=1 align='center'>
                            <tr>
                                <th>Id</th>
                                <th>titre</th>
                                <th>texte</th>
                                <th>auteur</th>
                                <th>source</th>
                                <th>urlImage</th>
                                <th>notifcreateur</th>
                            </tr>  -->



                            <div class="barre">
                <nav>
                    
                </nav>
            </div>


                            <table>
                            <thead>
                                <tr>
                                <th>
                                        <form method='post'>
                                            <input name='add1' type="submit" value='OrderAsc' class="btn btn-success">
                                            <?php $_SESSION['attnum1']++; ?>
                                        </form>
                                    </th>
                                    <th>
                                        <form method='post'>
                                            <input name='add2' type="submit" value='OrderDesc' class="btn btn-success">
                                            <?php $_SESSION['attnum2']++; ?>
                                        </form>
                                    </th>
                                </tr>
                            </thead>
                            </table>
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Titre</th>
                                    <th scope="col">Texte</th>
                                    <th scope="col">Auteur</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Notification</th>
                                    <th scope="col">Datearticle</th>
                                    <th scope="col">Catégorie</th>
                                    <th scope="col">SUPPRIMER</th>
                                    <th scope="col">MODIFIER</th>
                                </tr>
                            </thead>



                            <?PHP

$nbre=0;
foreach ($listearticle as $row) {
                            ?>
                                <tr class="table-primary">
                                    <td><?PHP echo $row['idNewsArticle']; ?></td>
                                    <td><?PHP echo $row['titre']; ?></td>
                                    <td>
                                        <a class="btn btn-primary" href="affichertexte.php?idNewsArticle=<?PHP echo $row['idNewsArticle']; ?>">Afficher TEXTE</a>
                                    </td>
                                    <td><?PHP echo $row['auteur']; ?></td>
                                    <td><img width="100" src="../Dashboard/images/<?PHP echo $row['urlImage']; ?> "> </td>
                                    <td><?PHP echo $row['notifCreateur']; ?></td>
                                    <td><?PHP echo $row['Datearticle']; ?></td>
                                    <td><?PHP echo $row['postCategory']; ?></td>

                                    <td>
                                        <form method="POST" action="../../controller/supprimerarticle.php">
                                            <input type="submit" name="supprimer" value="supprimer" class="btn btn-danger">
                                            <input type="hidden" value=<?PHP echo $row['idNewsArticle']; ?> name="idNewsArticle">
                                        </form>
                                    </td>
                                    <td>
                                        <a class="btn btn-primary" href="modifierarticles.php?idNewsArticle=<?PHP echo $row['idNewsArticle']; ?>">Modifier </a>
                                    </td>
                                </tr>
                               <?php $nbre++; ?>
                                
                            <?PHP
                            }
                            ?>
                            <div class="barre">
                    <ul>
   <h1>     <?php
                        echo "NOMBRES DES ARTICLES: " . $nbre . "<br />\n";?></h1>
                    </ul>
            </div>
                      
                        </table>
                        <?php  $auteurC = new articleC();
                         $nombre = $auteurC->affichernbreauteur();
                            ?>
                            <?php
                            foreach ($nombre as $row) {
                            ?>
                                                                <td><?PHP echo "NOMBRES DES AUTEURS: " . $row['nbr'] ; ?></td> <?php } ?>

                    </div>

                </div>
    <ul class="pagination">
    <li>
        <?php if ($Previous > 0) :?>
      <a href="afficherarticle.php?page=<?= $Previous; ?>" classe="prev" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
      <?php endif;?>
    </li>
    <?php for($i = 1; $i<= $pages; $i++) : ?>
        <li classe="pageNumber"><a href="afficherarticle.php?page=<?= $i; ?>"><?= $i; ?></a></li>
    <?php endfor; ?>
    <li>
    <?php if ($Next <= $pages) :?>
      <a href="afficherarticle.php?page=<?= $Next; ?>" classe="next" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
      <?php endif;?>
    </li>
  </ul>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

   <!-- Scroll to Top Button-->
<button id="btnscrolltotop">
        <i class="material-icons">arrow_circle_up</i>
    </button>

<script> 
const btnscrolltotop = document.querySelector("#btnscrolltotop");
btnscrolltotop.addEventListener("click", function () {
   // window.scrollTo(0,0);
        
    window.scrollTo({
        top: 0,
        left: 0,
        behavior: "smooth"
    });
});
</script>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
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

</body>

</html>