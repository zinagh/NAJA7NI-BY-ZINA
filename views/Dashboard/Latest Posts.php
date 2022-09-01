<?php require_once "C://wamp64/www/SporTun/controller/ArticleC.php" ?>



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
</head>

<body id="page-top">
<body>
  
                              

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
                        
                            $listearticle = $articleC->recentpost();
                        

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
                                    <th scope="col">Category</th>


                                 
                                </tr>
                            </thead>



                            <?PHP


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



                                    
                                </tr>
                            <?PHP
                            }

                            ?>
                        </table>

                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->



        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
  <!--  <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>-->

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

</body>

</html>