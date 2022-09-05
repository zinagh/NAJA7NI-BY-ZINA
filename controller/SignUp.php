<?PHP
    require_once 'C://wamp64/www/naja7ni/model/user.php';
    require_once 'C://wamp64/www/naja7ni/controller/userb.php';

    session_start();

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];
    $datenaissance = $_POST['datenaissance'];
    $sexe = $_POST['sexe'];
    $numtel = $_POST['numtel'];
    $adresse = $_POST['adresse'];
    
    //$hashed_password=password_hash($mdp,PASSWORD_DEFAULT);

    $userb=new userb();
    $user=new user($nom,$prenom,$email,$mdp,$datenaissance,$sexe,$numtel,$adresse);
    $userb->adduser($user);
    $_SESSION["email"] = $email;
    header("Location: ../views/front/index.php?signup=success");