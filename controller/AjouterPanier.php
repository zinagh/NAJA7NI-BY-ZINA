<?php
    include_once 'DBconnection.php';
    session_start();

    if ($_SESSION["email"]=="")
    {
        header("Location: ../views/front/account.php");
        exit();
    }


    $id = $_GET['id'];
    $quantite = 1;
    $email = $_SESSION['email'];

    
    $sql = "SELECT * FROM miseenvente WHERE id=". $id .";";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);

    $image= $row['image1'];
    $titre= $row['titre'];
    $prix= $row['prix'];



    $sql = "INSERT INTO panier (id, email, titre, image, quantite, prix)
    VALUES ('$id', '$email', '$titre', '$image', '$quantite', '$prix');";

  mysqli_query($conn,$sql);

  $msg="Produit ajouté avec succès.";

  header("Location: ../views/Front/DetailsAnnonce.php?id=$id&msg=$msg");

?>