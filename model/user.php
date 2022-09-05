<?php

class user{
    private $nom;
    private $prenom;
    private $email;
    private $mdp;
    private $datenaissance;
    private $sexe;
    private $numtel;
    private $adresse;   
    private $ban;
    private $admin;
    private $loggedin;
    private $loggedindashboard;

public function getNom()
    {
        return $this->nom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function getEmail()
    {
        return $this->email;
    }
    public function getMdp()
    {
        return $this->mdp;
    }

    public function getSolde()
    {
        return $this->solde;
    }

    public function getDatenaissance()
    {
        return $this->datenaissance;
    }
    public function getSexe()
    {
        return $this->sexe;
    }

    public function getNumtel()
    {
        return $this->numtel;
    }
   

    public function getAdresse()
    {
        return $this->adresse;
    }
    public function getLoggedin()
    {
        return $this->loggedin;
    }
    public function getLoggedindashboard()
    {
        return $this->loggedindashboard;
    }

    public function getBan()
    {
        return $this->ban;
    }

    public function getAdmin()
    {
        return $this->admin;
    }
    public function getTitre()
    {
        return $this->titre;
    }
    
    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }
    public function setEmail($email)
    {
         $this->email =$email;
    }
    public function setMdp($mdp)
    {
         $this->mdp=$mdp;
    }
    public function setDatenaissance($datenaissance)
    {
         $this->datenaissance=$datenaissance;
    }
    public function setSexe($sexe)
    {
         $this->sexe=$sexe;
    }

    public function setNumtel($numtel)
    {
         $this->numtel=$numtel;
    }
    public function setAdresse($adresse)
    {
         $this->adresse=$adresse;
    }
    public function setBan($ban)
    {
         $this->ban=$ban;
    }
    public function setAdmin($admin)
    {
         $this->admin=$admin;
    }
    public function __construct($nom, $prenom, $email, $mdp, $datenaissance, $sexe, $numtel, $adresse)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->mdp = $mdp;
        $this->datenaissance = $datenaissance;
        $this->sexe = $sexe;
        $this->numtel = $numtel;
        $this->adresse = $adresse;

    }

}