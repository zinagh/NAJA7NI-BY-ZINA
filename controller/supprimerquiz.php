<?php
include "C://wamp64/www/naja7ni/controller/QuizC.php";

$articles = new quizC();

if (isset($_POST['id'])) {
    $articles->supprimerquiz($_POST['id']);
    header('location:../views/Dashboard/affichequiz.php');
} else {
    echo 'Erreur : try again';
    echo $_POST['id'];
}
