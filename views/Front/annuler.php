<?php
include_once 'DBconnection.php';
session_start();
$id = $_GET['id'];
$sql='delete from panier where email="'.$_SESSION["email"].'"and id='.$id.';';
$exec=mysqli_query($conn,$sql);
header("location: panier.php");
exit();
?>

