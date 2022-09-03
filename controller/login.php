<?php
include_once 'DBconnection.php';
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
     // echo strcmp($mdp, $hashed_password);
      $error="Mot de passe invalide";
      echo $mdp; 
      echo $hashed_password;

    }
    else
    {
    $sql="SELECT * from utilisateurs where email='$email' and ban=0";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)==0) 
    {
      $error="Votre compte est suspendu";
    }
    else
    {
        $sql="SELECT nom from utilisateurs where email='$email';";
        $nom=mysqli_query($conn,$sql);
        $_SESSION["email"] = $email;
        mysqli_query($conn,"update utilisateurs set loggedin=1 where email='$email';");
        header("Location: ../views/front/index.php");
        
    }
    }
}
if ($error!='') {
  header("Location: ../views/front/account.php?msg=$error");
}
?>