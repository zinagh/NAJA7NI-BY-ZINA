<?php

class user{
    private $nom;
    private $prenom;
    private $email;
    private $mdp;
    private $solde;
    private $datenaissance;
    private $sexe;
    private $numtel;
    private $adresse;
    private $loggedin;
    private $loggedindashboard;
    private $ban;
    private $admin;



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

    public function __construct($nom, $prenom, $email, $mdp, $datenaissance, $sexe, $numtel, $adresse, $admin)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->mdp = $mdp;
        $this->datenaissance = $datenaissance;
        $this->sexe = $sexe;
        $this->numtel = $numtel;
        $this->adresse = $adresse;
        $this->admin= $admin;

    }

}