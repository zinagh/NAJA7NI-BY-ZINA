<?php
include "C://wamp64/www/naja7ni/controller/QuizC.php";

$articles = new articleC();

if (isset($_POST['id'])) {
    $articles->supprimerarticle($_POST['id']);
    header('location:../views/Dashboard/afficherquiz.php');
} else {
    echo 'Erreur : try again';
    echo $_POST['id'];
}
