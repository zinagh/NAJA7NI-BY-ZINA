<?php
include_once "DBconnection.php";
session_start();
$sql='update utilisateurs set Loggedin=0 where email="'.$_SESSION["email"].'";';
mysqli_query($conn,$sql);
session_destroy();
header("location: ../views/front/account.php");
exit();
?>

