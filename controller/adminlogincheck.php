<?php
include_once '../views/dashboard/DBconnection.php';
session_start();
$email = $_POST['email'];
$mdp = $_POST['mdp'];
$error="";

$sql="SELECT * from utilisateurs where email='$email';";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)==0) 
{
    $error="Email invalide";
}
else
{
    $sql="SELECT mdp from utilisateurs where email='$email'; ";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    $hashed_password=$row['mdp'];
    if (strcmp($mdp, $hashed_password) )
    {
      $error="Mot de passe invalide";
    }
    else
    {
    $sql="SELECT * from utilisateurs where email='$email' and admin=1";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)==0) 
    {
      $error="vous n'etes pas un administrateur";
    }
    else
    {
        $sql="SELECT nom from utilisateurs where email='$email';";
        $nom=mysqli_query($conn,$sql);
        $_SESSION["emailadmin"] = $email;
        mysqli_query($conn,"update utilisateurs set loggedindashboard=1 where email='$email';");
        header("Location: ../views/dashboard/gestionannonces.php");
        
    }
    }
}
if ($error!='') {
  header("Location: ../views/dashboard/dashboardlogin.php?msg=$error");
}
?>