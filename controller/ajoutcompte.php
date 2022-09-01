<?PHP
    require_once 'C://wamp64/www/SporTun/model/user.php';
    require_once 'C://wamp64/www/SporTun/controller/userb.php';

    session_start();

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];
    $datenaissance = $_POST['datenaissance'];
    $sexe = $_POST['sexe'];
    $numtel = $_POST['numtel'];
    $adresse = $_POST['adresse'];
    $admin =$_POST['admin'];
    
    $hashed_password=password_hash($mdp,PASSWORD_DEFAULT);

    $userb=new userb;
    $user=new user($nom,$prenom,$email,$hashed_password,$datenaissance,$sexe,$numtel,$adresse,$admin);
    $userb->adduseradmin($user);
    $notif="Utilisateur ajouté avec succés";
    header("Location: ../views/dashboard/gestioncomptes.php?choix=2&msg=$notif");