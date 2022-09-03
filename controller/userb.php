<?PHP
include "C://wamp64/www/naja7ni/config.php";
require_once 'C://wamp64/www/naja7ni/model/user.php';
class userb{
    public function adduser1($user)
    {
        $sql = "INSERT INTO utilisateurs (nom, prenom, email, mdp, datenaissance, sexe, numtel, adresse)
        VALUES (:nom, :prenom, :email, :hashed_password, :datenaissance, :sexe , :numtel, :adresse)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);

            $query->execute([
                'nom' => $user->getNom(),
                'prenom' => $user->getPrenom(),
                'email' => $user->getEmail(),
                'hashed_password' => $user->getMdp(),
                'datenaissance' => $user->getDatenaissance(),
                'sexe' => $user->getSexe(),
                'numtel' => $user->getNumtel(),
                'adresse' => $user->getAdresse(),
            ]);
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }
    }
    public function adduser($user)
    {
    $sql = "INSERT INTO utilisateurs (nom, prenom, email, mdp, datenaissance, sexe, numtel, adresse)
    VALUES (:nom, :prenom, :email, :mdp, :datenaissance, :sexe , :numtel, :adresse)";
    $db = config::getConnexion();
     try {
         $query = $db->prepare($sql);

         $query->execute([
            'nom' => $user->getNom(),
            'prenom' => $user->getPrenom(),
            'email' => $user->getEmail(),
            'mdp' => $user->getMdp(),
            'datenaissance' => $user->getDatenaissance(),
            'sexe' => $user->getSexe(),
            'numtel' => $user->getNumtel(),
            'adresse' => $user->getAdresse(),
         ]);
     } catch (Exception $e) {
         echo 'Erreur: ' . $e->getMessage();
     }

    }
    public function adduseradmin($user)
    {
        $sql = "INSERT INTO utilisateurs (nom, prenom, email, mdp, datenaissance, sexe, numtel, adresse, admin)
        VALUES (:nom, :prenom, :email, :hashed_password, :datenaissance, :sexe , :numtel, :adresse, :admin)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);

            $query->execute([
                'nom' => $user->getNom(),
                'prenom' => $user->getPrenom(),
                'email' => $user->getEmail(),
                'hashed_password' => $user->getMdp(),
                'datenaissance' => $user->getDatenaissance(),
                'sexe' => $user->getSexe(),
                'numtel' => $user->getNumtel(),
                'adresse' => $user->getAdresse(),
                'admin'=> $user->getAdmin(),
            ]);
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }
    }

    public function banuser($email)
    {
        $sql = "update utilisateurs set ban=1 where email='$email' ;";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }
    }
    public function unbanuser($email)
    {
        $sql = "update utilisateurs set ban=0 where email='$email' ;";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }
    }
}