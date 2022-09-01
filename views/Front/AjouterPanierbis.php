<?php
    include_once 'DBconnection.php';
    session_start();

    if ($_SESSION["email"]=="")
    {
        header("Location: account.php");
        exit();
    }


    $id = $_GET['id'];
    $quantite = $_GET['quantite'];
    $email = $_SESSION['email'];

    
    $sql = "SELECT * FROM events WHERE id=". $id .";";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);

    $image= $row['image'];
    $titre= $row['titre'];
    $prix= $row['prix'];
    
    $prix= $prix *  $quantite ;


    $sql = "INSERT INTO panier (id, email, titre, image, quantite, prix)
    VALUES ('$id', '$email', '$titre', '$image', '$quantite', '$prix');";

  mysqli_query($conn,$sql);

  header("Location: detailevent.php?id=$id");

?>