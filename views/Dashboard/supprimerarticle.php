<?php
include "C://wamp64/www/naja7ni/controller/ArticleC.php";

$articles = new articleC();

if (isset($_POST['idNewsArticle'])) {
    $articles->supprimerarticle($_POST['idNewsArticle']);
    header('location:../views/Dashboard/afficherarticle.php');
} else {
    echo 'Erreur : try again';
    echo $_POST['idNewsArticle'];
}
