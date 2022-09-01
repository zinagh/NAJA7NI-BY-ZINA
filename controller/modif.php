<?php
    include_once 'DBconnection.php';
    session_start();
    $currentemail=$_SESSION["email"];
    $currentpassword=$_POST['mdp'];
    echo( $currentemail);
    echo( $currentpassword);
    $sql="SELECT mdp from utilisateurs where email='$currentemail'; ";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    $hashed_current_password=$row['mdp'];
    if (!  password_verify($currentpassword, $hashed_current_password) )
    {
        $error="Mot de passe invalide";
        header("Location: ../views/front/profile.php?msgerror=$error");
    }
    else
    {

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    if ($_POST['nvmdp']!=""){
        $mdp=$_POST['nvmdp'];
    }
    else
    {
    $mdp =$currentpassword;
    }
    $datenaissance = $_POST['datenaissance'];
    $numtel = $_POST['numtel'];
    $adresse = $_POST['adresse'];
    $useremail=$_SESSION['email'];
    $hashed_password=password_hash($mdp,PASSWORD_DEFAULT);
    $sql="SELECT * from utilisateurs where nom='$nom' and prenom='$prenom' and email='$email' and datenaissance='$datenaissance' and
    numtel='$numtel' and adresse='$adresse' ;";
    $result=mysqli_query($conn,$sql);
    if ( (mysqli_num_rows($result)!=0) && (password_verify($mdp, $hashed_current_password) ) ){
        $success="Aucune modification détectée";
    }
    else
    {
    $sql = "update utilisateurs 
    set nom='$nom',prenom='$prenom',email='$email', mdp='$hashed_password',datenaissance='$datenaissance',numtel='$numtel',adresse='$adresse' 
    where email='$useremail';";
    mysqli_query($conn,$sql);
    $success="Modifications effectuées avec succès";
    $_SESSION["email"]=$email;
    }
    header("Location: ../views/front/profile.php?msgsuccess=$success");
}
?>
   