<?php

class article
{
    private $titre;
    private $texte;
    private $auteur;
    private $urlImage;
    private $notifCreateur;
    private $Datearticle;
    private $postCategory;
    private $vues;



    public function getidNewsArticle()
    {
        return $this->idNewsArticle;
    }

    public function getTitre()
    {
        return $this->titre;
    }
    public function getTexte()
    {
        return $this->texte;
    }
    public function getAuteur()
    {
        return $this->auteur;
    }
    public function getUrlImage()
    {
        return $this->urlImage;
    }
    public function getNotifCreateur()
    {
        return $this->notifCreateur;
    }
    public function getDatearticle()
    {
        return $this->Datearticle;
    }
    public function getPostCategory()
    {
        return $this->postCategory;
    }
    public function getVues()
    {
        return $this->vues;
    }

    public function setTitre($titre)
    {
        $this->titre = $titre;
    }
    public function setTexte($texte)
    {
        $this->texte = $texte;
    }
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;
    }
    public function setUrlImage($urlImage)
    {
        $this->urlImage = $urlImage;
    }
    public function setNotifCreateur($notifCreateur)
    {
        $this->notifCreateur = $notifCreateur;
    }
    public function setDatearticle($Datearticle)
    {
        $this->Datearticle = $Datearticle;
    }
    public function setPostCategory($postCategory)
    {
        $this->postCategory = $postCategory;
    }
    public function setVues($vues)
    {
        $this->vues = $vues;
    }

    public function __construct($titre, $texte, $auteur, $urlImage, $notifCreateur, $postCategory)
    {
        $this->titre = $titre;
        $this->texte = $texte;
        $this->auteur = $auteur;
        $this->urlImage = $urlImage;
        $this->notifCreateur = $notifCreateur;
       // $this->Datearticle = $Datearticle;
        $this->postCategory = $postCategory;
    }
}
