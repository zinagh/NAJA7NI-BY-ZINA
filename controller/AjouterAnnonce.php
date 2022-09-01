<?php
    include_once 'DBconnection.php';

    session_start();
    if (isset($_SESSION["email"]))
    {
    $email=$_SESSION['email'];
    //exit();
    }

    






    if(isset($_POST['submit'])){

        $titre = $_POST['titre'];
        $description = $_POST['texte'];
        $auteur = $_POST['auteur'];
        $categorie = $_POST['categorie'];
        //$image = $_POST['$target_file'];
        $notifCreateur = $_POST['notifCreateur'];   
        echo $image;
   
        //$uploadsDir = "../views/Front/assets/img/";
      //  $allowedFileType = array('mp4');
        
        // Velidate if files exist
     //   if (!empty(array_filter($_FILES['fileUpload']['name']))) {
            $msg="Demande envoyée avec succès!";
        // Loop through file items
           


            mysqli_query($conn,"INSERT INTO article (titre,texte,auteur,urlImage,notifCreateur,Datearticle,postCategory)
            VALUES ('$titre', '$description', '$auteur', '$insert1', '$notifCreateur', now(),'$categorie');");

    
    }

    header("Location: ../views/Front/htmlAjouterAnnonce.php?msg=$msg");
