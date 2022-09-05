<?php
include_once 'C://wamp64/www/naja7ni/controller/QuizC.php';
include_once 'C://wamp64/www/naja7ni/model/Quiz.php';
include 'DBconnection.php';
session_start();
$compte="Compte";
if (isset($_SESSION["email"]))
{
    $compte="Profil";
}
$sql='select * from utilisateurs where email="'.$_SESSION["email"].'";';
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$compte=$row['nom'].' '.$row['prenom'];

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
   $artC = new quizC();
   if (
       isset($_POST["question"]) && 
       isset($_POST["opt1"]) &&
       isset($_POST["opt2"]) && 
       isset($_POST["opt3"]) && 
       isset($_POST["opt4"]) &&
      // isset($_POST["answer"])&&
       isset($_POST["course"])
   ) {
       if (
           !empty($_POST["question"]) && 
           !empty($_POST["opt1"]) &&
           !empty($_POST["opt2"]) && 
           !empty($_POST["opt3"]) && 
           !empty($_POST["opt4"]) &&
         //  !empty($_POST["answer"])&&
           !empty($_POST["course"])
       ) {
           $art = new quiz(
               $_POST["question"],
               $_POST["opt1"],
               $_POST["opt2"],
               $_POST["opt3"],
               $_POST["opt4"],
               $_POST["answer"],
               $_POST["course"]
           );
           $artC->ajouterQuiz($art);
           header('Location:../Front/quiz.php');
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
    <title>Ajouter questions</title>

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
                <a href="index.php"> <img src="assets/img/logo.png"> </a>
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
    <form action="" method="post">
    <div class="form-group">
        <br><br><br>
        <label for="question">Question</label>
        <input type="text" class="form-control" id="question" name="question">
    </div>
    <div class="form-group">
        <label for="opt1">Opt1</label>
        <input type="text" class="form-control" id="opt1" name="opt1" >
    </div>
    <div class="form-group">
        <label for="opt2">Opt2</label>
        <input type="text" class="form-control" id="opt2" name="opt2">
    </div>
    <div class="form-group">
        <label for="opt3">Opt3</label>
        <input type="text" class="form-control" id="opt3" name="opt3">
    </div>
    <div class="form-group">
        <label for="opt4">Opt4</label>
        <input type="text" class="form-control" id="opt4" name="opt4">
    </div>
    <div class="form-group">
        <label for="answer">Answer</label>
        <input type="text" class="form-control" name="answer">
    </div>
    <div class="form-group">
              <label for="course">Course</label>
              <select class="form-control1" id="course" name="course">
                <option selected="selected">Choose One...</option>
                <option>POO</option>
                <option>PHP</option>
                <option>JAVA</option>
                <option>JAVASCRIPT</option>
                <option>HTML</option>
                <option>PYTHON</option>

              </select>
    </div>
 
    </div>
    </div>
    <br><br>
    <button class="btn btn-prim" data-dismiss="modal" type="submit" name="signup_submit">Ajouter</button>
    <button class="btn btn-pr" data-dismiss="modal" type="reset" name="signup_submit">Annuler</button>
    <br><br><br><br>

</form>          
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
                        <p>Donnez Un Nouveau Style à Vos Etudes !</p>
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