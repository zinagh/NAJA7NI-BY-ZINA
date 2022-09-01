<?PHP
    require_once 'C://wamp64/www/SporTun/model/user.php';
    require_once 'C://wamp64/www/SporTun/controller/userb.php';
    $email = $_GET['id'];
    $userb=new userb;
    $userb->banuser($email);
    header("location: ../views/dashboard/gestioncomptes.php?choix=1");
    exit();
    
?>



    