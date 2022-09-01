<?PHP
    require_once 'C://wamp64/www/naja7ni/model/user.php';
    require_once 'C://wamp64/www/naja7ni/controller/userb.php';
    $email = $_GET['id'];
    $userb=new userb;
    $userb->banuser($email);
    header("location: ../views/dashboard/gestioncomptes.php?choix=1");
    exit();
    
?>



    