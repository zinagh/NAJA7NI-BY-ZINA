<?php
include_once '../views/dashboard/DBconnection.php';
session_start();
$sql='update utilisateurs set Loggedindashboard=0 where email="'.$_SESSION["emailadmin"].'";';
mysqli_query($conn,$sql);
session_destroy();
header("location: ../views/dashboard/dashboardlogin.php");
exit();
?>