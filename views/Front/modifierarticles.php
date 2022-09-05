<?php
include "../../controller/ArticleC.php";
include_once "../../model/Articles.php";

session_start();
$compte="Compte";
if (isset($_SESSION["email"]))
{
    $compte="Profil";
}
if (isset($_GET["msg"]))
    {
    $msg=$_GET["msg"];
    }
    else{
    $msg='';
    }
$articleC = new articleC();
$error = "";
if (
    isset($_POST["titre"]) &&
    isset($_POST["texte"]) &&
    isset($_POST["auteur"]) &&
    isset($_POST["urlImage"]) &&
    isset($_POST["notifCreateur"]) &&
  //  isset($_POST["Datearticle"]) &&
    isset($_POST["postCategory"])
) {
    if (
        !empty($_POST["titre"]) &&
        !empty($_POST["texte"]) &&
        !empty($_POST["auteur"]) &&
        !empty($_POST["urlImage"]) &&
        isset($_POST["notifCreateur"]) &&
      //  isset($_POST["Datearticle"]) &&
        isset($_POST["postCategory"])
    ) {
        $article = new article(
            $_POST['titre'],
            $_POST['texte'],
            $_POST['auteur'],
            $_POST['urlImage'],
            $_POST['notifCreateur'],
          //  $_POST['Datearticle'],
            $_POST['postCategory']
        );
        $articleC->modifierarticles($article, $_GET['idNewsArticle']);
        header('Location:../Front/index.php');
    } else
        echo "Missing information";
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
    <title>Modifier Cours</title>
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="assets/img/logo.ico">
    <script src="//cdn.ckeditor.com/4.15.1/full/ckeditor.js"></script>

  
</head>

<body id="page-top">

  <!-- HEADER DESKTOP-->
  <div class="login-container">
        <div class="container">
        <div class="navbar">
            <div class="logo">
                <a href="index.html"> <img src="assets/img/logo.png"> </a>
            </div>
        
            <nav>
            <ul id="MenuItems">
            <li><a href="index.php">Acceuil</a></li>
                        <li><a href="quiz.php">Quiz</a></li>
                        <?php if($compte=="Profil"){ 
                echo"<li><a href='htmlAjouterAnnonce.php'>Ajouter Cour</a></li>";
                }?>
                         <?php if($compte=="Profil"){ 
                echo"<li><a href='htmlAjouterquiz.php'>Ajouter Quiz</a></li>";
                }?>
                        <li><a href="cours.php">Cours</a></li>
              
                        <li><a href="account.php"><?php echo $compte ?></a></li>
            </ul>
        </nav>
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
    <!-- END HEADER MOBILE -->

      <!-- Page Wrapper -->
      <div id="wrapper">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

               


                <!-- Begin Page Content -->

                <div id="error">
                    <?php echo $error; ?>
                </div>

                <?php
                if (isset($_GET['idNewsArticle'])) {
                    $article = $articleC->recupererarticle($_GET['idNewsArticle']);
                ?>


                    <div class="container-fluid">
                        <div>
                            <form method="POST" action="">
                                <div class="form-group">
                                    <br><br><br>
                                    <label for="idNewsArticle">idArticle</label>
                                    <input type="text" class="form-control1" name="idNewsArticle" id="idNewsArticle" value="<?php echo $article['idNewsArticle']; ?>" disabled>
                                </div>

                                <div class="form-group">
                                    <label for="titre">Titre</label>
                                    <input type="text" class="form-control" name="titre" id="titre" value="<?php echo $article['titre']; ?> ">
                                </div>
                                <div class="form-group">
                                    <label for="texte">Texte</label>
                                    <textarea class="form-control" name="texte" rows="10"> <?php echo $article['texte']; ?>  </textarea>
                                </div>

                                <div class="form-group">
                                    <label for="auteur">Auteur</label>
                                    <input type="text" class="form-control" name="auteur" value="<?php echo $article['auteur']; ?> ">
                                </div>
                                <div class="form-group">
                                    <label for="urlImage">Ajouter Image</label>
                                    <input type="file" class="form-control-file" name="urlImage" value="<?php echo $article['urlImage']; ?> ">
                                </div>

                          <!--      <div class="form-group">
                                    <label for="Datearticle">Datearticle</label>
                                    <input name="Datearticle" type="date" value="<?php echo $article['Datearticle'];
                                                                                ?>">
                                </div>-->

                                <div class="form-group">
                                    <label for="notifCreateur">Notifications </label>
                                    <select class="form-control1" name="notifCreateur">
                                        <option value="1" value="<?php echo $article['notifCreateur']; ?> ">Oui</option>
                                        <option value="0" value="<?php echo $article['notifCreateur']; ?> ">Non</option>
                                    </select>
                                </div>
                              <div class="form-group">

                                <label for="postCategory">Categories</label>
              <select type="text" class="form-control1" name="postCategory" value="<?php echo $article['postCategory']; ?> " >
              <option selected="selected"><?php echo $article['postCategory']; ?> </option>
              <option>POO</option>
                <option>PHP</option>
                <option>JAVA</option>
                <option>JAVASCRIPT</option>
                <option>HTML</option>
                <option>PYTHON</option>

              </select>
                </div>

                <div class="form-group">
                                    <label for="idNewsArticle">VUES</label>
                                    <input type="text" class="form-control1" name="idNewsArticle" id="idNewsArticle" value="<?php echo $article['vues']; ?>" disabled>
                                </div>
                                <button type="submit" value="Envoyer" class="btn btn-prim">Modifier</button>
                                <button type="reset" value="Annuler" class="btn btn-pr">Annuler</button>

                                <br><br><br>

                            </form>
                        </div>
                        <script>
                            CKEDITOR.replace('texte');
                        </script>


<?php } ?>


                    </div>
                    <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->



        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
           
               
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
<?php
                } 
?>
</body>
<!-- FOOTER -->
<footer id="main-footer" class="bg-dark text-white mt-5 p-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <p class="lead text-center">
                        Copyright &copy; <span id="year"></span> NAJA7NI
                    </p>
                </div>
            </div>
        </div>
    </footer>
</html>