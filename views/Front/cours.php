<?php
include_once "DBconnection.php";
session_start();
$compte="Compte";
if (isset($_SESSION["email"]))
{
    $compte="Profil";
}
?>


<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <title>NAJA7NI</title>
    <link rel="shortcut icon" href="assets/img/logo.ico">
    <link rel="stylesheet" type="text/css" href="news.css">
    <link rel="stylesheet" type="text/css" href="style3.css">
    <link rel="stylesheet" type="text/css" href="news.css">
    <link href="icon.css" rel="stylesheet">
    <link href="css.css" rel="stylesheet">
    <link href="pagination.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style2.css">


    <meta name="viewport" content="width=device-width , initial-scale=1.0">
</head>

<body>
    <div id="top-logo">
        <marquee style="width: 100%;">
            <div class="sponsors-top-div">
                <span><a href="index.html" target="_blank"><img  class="sponsor-top"src="assets/img/flesh.png" style="margin: 0 1.5em;"></a></span>&nbsp;&nbsp;&nbsp;&nbsp;
                <span><a target="_blank"><img  class="sponsor-top" src="assets/img/js.jpg" style="margin: 0 1.5em;"></a></span>&nbsp;&nbsp;&nbsp;&nbsp;
                <span><a target="_blank"><img  class="sponsor-top" src="assets/img/msg.png" style="margin: 0 1.5em;"></a></span>&nbsp;&nbsp;&nbsp;&nbsp;
                <span><a target="_blank"><img  class="sponsor-top" src="assets/img/python.jpg" style="margin: 0 1.5em;"></a></span>&nbsp;&nbsp;&nbsp;&nbsp;
                <span><a href="index.html" target="_blank"><img  class="sponsor-top" src="assets/img/flesh.png" style="margin: 0 1.5em;"></a></span>&nbsp;&nbsp;&nbsp;&nbsp;
                <!-- <span><a  target="_blank"><img  class="sponsor-top" src="assets/img/sportun.png" style="margin: 0 1.5em;"></a></span>&nbsp;&nbsp;&nbsp;&nbsp;-->
                <span><a target="_blank"><img  class="sponsor-top" src="assets/img/msg.png" style="margin: 0 1.5em;"></a></span>&nbsp;&nbsp;&nbsp;&nbsp;
                <span><a href="index.html" target="_blank"><img  class="sponsor-top" src="assets/img/flesh.png" style="margin: 0 1.5em;"></a></span>&nbsp;&nbsp;&nbsp;&nbsp;
                <span><a target="_blank"><img  class="sponsor-top" src="assets/img/html.jpg" style="margin: 0 1.5em;"></a></span>&nbsp;&nbsp;&nbsp;&nbsp;
                <span><a href="index.html" target="_blank"><img  class="sponsor-top"src="assets/img/flesh.png" style="margin: 0 1.5em;"></a></span>&nbsp;&nbsp;&nbsp;&nbsp;
                <span><a target="_blank"><img  class="sponsor-top" src="assets/img/msg.png" style="margin: 0 1.5em;"></a></span>&nbsp;&nbsp;&nbsp;&nbsp;

            </div>
        </marquee>
    </div>
    <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <a href="index.php"> <img src="assets/img/logo.png" alt="Logo SporTun"></a>
                </div>
                <nav>
            <ul id="MenuItems">
            <li><a href="index.php">Acceuil</a></li>
                        <li><a href="quiz.php">Quiz</a></li>
                        <?php if($compte=="Profil"){ 
                echo"<li><a href='htmlAjouterAnnonce.php'>Ajouter Cour</a></li>";
                }?>
                         <?php if($compte=="Profil"){ 
                echo"<li><a href='htmlAjouterquiz.php'>Ajouter Quiz</a></li>";
                }?>
                        <li><a href="cours.php">Cours</a></li>
              
                        <li><a href="account.php"><?php echo $compte ?></a></li>
            </ul>
        </nav>
             
            </div>
            <!-------- featured categories -------->
            <div class="categories">

                <div class="small-container">

                    <h2 class="title">Catégories des Cours</h2>
                    <div class="row">
                        <a href='coursjava.php' class='col-categories'>
                            <img src="assets/img/java1.jpg" alt="JAVA">
                            <h2>JAVA</h2>
                        </a>
                        <a href='coursphp.php' class='col-categories'>
                            <img src="assets/img/php.jpg" alt="PHP">
                            <h2>PHP</h2>
                        </a>
                        <a href='courshtml.php' class='col-categories'>
                            <img src="assets/img/html.jpg" alt="HTML">
                            <h2>HTML</h2>
                        </a>
                        <a href='coursjs.php' class='col-categories'>
                            <img src="assets/img/js.jpg" alt="JS">
                            <h2>JS</h2>
                        </a>
                        <a href='courspyth.php' class='col-categories'>
                            <img src="assets/img/python.jpg" alt="PYTHON">
                            <h2>PYTHON</h2>
                        </a>
                        <a href='courspoo.php' class='col-categories'>
                            <img src="assets/img/poo.jpg" style="width: 100%;" alt="POO">
                            <h2>POO</h2>
                        </a>
                    </div>
                </div>
            </div>

        </div>
        <?php include "C://wamp64/www/naja7ni/controller/ArticleC.php";
?>

<?php
		$breakC = new articleC();
        $break = $breakC->recentpost();?>
<!-- fr.tutiempo.net - Largeur:170px - Taille:36px -->
<div id="TT_Jy11xkB1B8DjcQGUKbuDjDDDjWa1L1YFrYEdEsi5a1z">Météo - Tutiempo.net</div>
<script type="text/javascript" src="https://fr.tutiempo.net/s-widget/l_Jy11xkB1B8DjcQGUKbuDjDDDjWa1L1YFrYEdEsi5a1z"></script>
    
        <div class="barre">
            <div class="breaking-news-section">
                <span id="btext">Nouveaux Cours</span>
                <marquee direction="left" onmouseover="this.stop()" onmouseout="this.start()">
                <?php  foreach ($break as $row) {
    ?>
                <a href="blogs-details.php?idNewsArticle=<?PHP echo $row['idNewsArticle']; ?>" class="breaking-news"><p class="bntime"><?php echo $row['Datearticle'] ?></p><?PHP echo $row['titre']; ?></a>

                 <!--   <a href="#" class="breaking-news">
                        Congress under pressure to reach a deal</a>
                    <a href="#" class="breaking-news">
                        <p class="bntime">11 Jan 2019</p>Powerful laser beam is helping track the moon</a>
                    <a href="#" class="breaking-news">
                        <p class="bntime">11 Jan 2019</p>Snowstorm buries Pacific Northwest, with more on the way</a>-->
                        <?PHP }
                    ?>
                    </marquee>
            </div>
        </div>
        </header>
        <main>
            <?php
        $popC = new articleC();
        $pop = $popC->afficherpop1();
        $pop1C = new articleC();
        $pop1 = $pop1C->afficherpop2();
        $recentC = new articleC();
        $recent = $recentC->recentpost2();
        $footC = new articleC();
        $foot = $footC->afficherfoot();?>
            <article id="popular-news">
                <div id="featured">
                    <h2>POPULAIRE</h2>
                    <section class="popular-news-carousel">
                        <div id="carousel" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                <?php  foreach ($pop as $row) {
                                         if ( $row['postCategory']=="JAVA") $path='java.jpg';
                                         if ( $row['postCategory']=="PHP") $path='php.jpg';
                                         if ( $row['postCategory']=="HTML") $path='html.jpg';
                                         if ( $row['postCategory']=="JAVASCRIPT") $path='js.jpg';
                                         if ( $row['postCategory']=="POO") $path='poo.jpg';
                                         if ( $row['postCategory']=="PYTHON") $path='python.jpg';
                                 
    ?>
                                <a href="blogs-details.php?idNewsArticle=<?PHP echo $row['idNewsArticle']; ?>"><img class="d-block w-100" src="assets/img/<?PHP echo $path; ?>" alt="slide"></a>
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5> <?PHP echo $row['titre']; ?></h5>
                                        <p><?php echo $row['Datearticle'] ?></p>
                                    </div>
                                </div>
                                <?php  foreach ($pop1 as $row) {
                                               if ( $row['postCategory']=="JAVA") $path='java.jpg';
                                               if ( $row['postCategory']=="PHP") $path='php.jpg';
                                               if ( $row['postCategory']=="HTML") $path='html.jpg';
                                               if ( $row['postCategory']=="JAVASCRIPT") $path='js.jpg';
                                               if ( $row['postCategory']=="POO") $path='poo.jpg';
                                               if ( $row['postCategory']=="PYTHON") $path='python.jpg';
    ?>
                                <div class="carousel-item">
                                <a href="blogs-details.php?idNewsArticle=<?PHP echo $row['idNewsArticle']; ?>"><img class="d-block w-100" src="assets/img/<?PHP echo $path; ?>" alt="slide"></a>
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5><?PHP echo $row['titre']; ?></h5>
                                        <p><?php echo $row['Datearticle'] ?></p>
                                    </div>
                                </div>
                                <?PHP }
                    ?>
                               <!-- <div class="carousel-item">
                                    <img class="d-block w-100" src="images/carousel3.jpg" alt="Third slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Habeo populo splendide ei sit, ne vis dicunt saperet voluptatibus. </h5>
                                        <p>11th Jan 2019</p>
                                    </div>
                                </div>-->
                            </div>
                            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                            <?PHP }
                    ?>
                        </div>
                    </section>
                </div>
                <div id="latest">
                    <h2>A LA UNE</h2>
                    <section class="news">
                    <?php  foreach ($recent as $row) {
                                   if ( $row['postCategory']=="JAVA") $path='java.jpg';
                                   if ( $row['postCategory']=="PHP") $path='php.jpg';
                                   if ( $row['postCategory']=="HTML") $path='html.jpg';
                                   if ( $row['postCategory']=="JAVASCRIPT") $path='js.jpg';
                                   if ( $row['postCategory']=="POO") $path='poo.jpg';
                                   if ( $row['postCategory']=="PYTHON") $path='python.jpg';
    ?>
                        <div class="news-container">
                            <img src="assets/img/<?PHP echo $path; ?>" >
                            <p class="carousel-text"><?PHP echo $row['titre']; ?></p>
                        </div>
                        <?PHP }
                    ?>
                    </section>
                   <!-- <section class="news">
                        <div class="news-container">
                            <img src="images/carousel2.jpg">
                            <p class="carousel-text">Repurposed Boeing</p>
                        </div>
                    </section>-->
                </div>
                <div id="our-picks">
                    <h2>JAVA</h2>
                    <section class="news">
                    <?php  foreach ($foot as $row) {
                        if ( $row['postCategory']=="JAVA") $path='java.jpg';
                        if ( $row['postCategory']=="PHP") $path='php.jpg';
                        if ( $row['postCategory']=="HTML") $path='html.jpg';
                        if ( $row['postCategory']=="JAVASCRIPT") $path='js.jpg';
                        if ( $row['postCategory']=="POO") $path='poo.jpg';
                        if ( $row['postCategory']=="PYTHON") $path='python.jpg';
    ?>
                        <div class="news-container">
                            <img src="assets/img/<?PHP echo $path; ?>">
                            <p class="carousel-text"><?PHP echo $row['titre']; ?></p>
                        </div>
                        <?PHP }
                    ?>
                    </section>
                  <!--  <section class="news">
                        <div class="news-container">
                            <img src="images/carousel1.jpg">
                            <p class="carousel-text">This floating entertainment hub</p>
                        </div>
                    </section>-->
                </div>
            </article>
                    </main>
                    
                    <br><br>
                    <div class="inner-wrap clearfix">
                    <div class="sb-search sb-search-open">
                    <input type="text" id="q" name='q' placeholder="search..." class="sb-search-input" autocomplete='off' >
                    <input type="" id="searchsubmit" class="sb-search-submit" />
                    <span class="sb-icon-search"></span>    
                </div>
                    </div>
			<br>
			<div id="msg" class='mx-auto'></div>
		<div id="table" class='text-center mx-auto'></div>
                    <br><br>
         <?php   $articleC = new articleC();
$listearticles = $articleC->afficherarticle();
$nbrC = new articleC();
$nbr = $nbrC->affichernbrearticle();
$limit=12;
$page = isset($_GET['page']) ? $_GET['page'] : 1;
foreach ($nbr as $row) {
    
   $total = $row['nbrart'] ;   } 
	$pages = ceil( $total / $limit );

	$Previous = $page - 1;
	$Next = $page + 1;

?>

        <div class="container1" id="s">
            <div class="news">
            <?PHP
    foreach ($listearticles as $row) {
        if ( $row['postCategory']=="JAVA") $path='java.jpg';
        if ( $row['postCategory']=="PHP") $path='php.jpg';
        if ( $row['postCategory']=="HTML") $path='html.jpg';
        if ( $row['postCategory']=="JAVASCRIPT") $path='js.jpg';
        if ( $row['postCategory']=="POO") $path='poo.jpg';
        if ( $row['postCategory']=="PYTHON") $path='python.jpg';

    ?>
    
                    <div class="article small" type="">
                    <a href="blogs-details.php?idNewsArticle=<?PHP echo $row['idNewsArticle']; ?>"><img src="assets/img/<?PHP echo $path; ?>" alt="" ></a>
                        <div class="pins" >
                            <div class="tit">
                                <a href="blogs-details.php?idNewsArticle=<?PHP echo $row['idNewsArticle']; ?>"><?PHP echo $row['titre']; ?></a>
                            </div>
                           <!-- <?PHP $out = strlen($row['texte']) > 25 ? substr($row['texte'], 0, 25) . "..." : $row['texte'];  ?> -->
                           <!--  <p class="card-text "> -->
                              <!--  <?PHP echo $out  ?> -->
                              <br>
                              <?php if($compte=="Profil"){                
                             echo"    <td>
                                        <form method='POST' action='../../controller/supprimerarticle.php' >
                                            <input type='submit' name='supprimer' value='supprimer' class='btn btn-danger' >
                                            <input type='hidden' value= " ; echo $row['idNewsArticle'];  echo " name='idNewsArticle'>
                                  
                                    
                                        <a class='btn btn-primary' href='modifierarticles.php?idNewsArticle="; echo $row['idNewsArticle']; echo"' >Modifier </a>
                                        </form>
                                    </td>";   }?>
                        </div>
                    </div>
                <?PHP }
                    ?>
        </div> 
    </div>
   <?php if(isset($_POST_['q']))
    $search=$_POST['q'];
    else{
    $search='';
    }?>
    <div class="pagination">
   <!-- <li>-->
        <?php if ($Previous > 0) :?>
      <a href="cours.php?page=<?= $Previous; ?>" class="prev"><i class="fas fa-angle-left"></i></a>
        <!--<span aria-hidden="true">&laquo; Previous</span>
      </a>-->
      <?php endif;?>
   <!-- </li>-->
 <?php if ($page<6) :?>
 <?php for($i = 1; $i<= $pages; $i++) : ?>
        <?php if($i==$page) :?>
                    <!--<li>---><a href="cours.php?page=<?= $i; ?>" class="num active"><?= $i; ?></a><!--</li>-->
                    <?php else :?>
                  <!--<li>---><a href="cours.php?page=<?= $i; ?>" class="num "><?= $i; ?></a><!--</li>--> 
            <?php endif?>
    <?php endfor; ?>
    <?php else :?>
                  <!--<li>---><a href="cours.php?page=<?= $i; ?>" class="num ">...</a><!--</li>--> 
    <?php endif?>
   <!-- <li>-->
    <?php if ($Next <= $pages) :?>
      <a href="cours.php?page=<?= $Next; ?>"  class="next"><i class="fas fa-angle-right"></i></a>
     <!--   <span aria-hidden="true">Next &raquo;</span>
      </a>-->
      <?php endif;?>
  <!--  </li>-->
  </div>
   <!-- Scroll to Top Button-->
   <button id="btnscrolltotop">
        <i class="material-icons">arrow_circle_up</i>
    </button>

<script> 
const btnscrolltotop = document.querySelector("#btnscrolltotop");
btnscrolltotop.addEventListener("click", function () {
   // window.scrollTo(0,0);
        
    window.scrollTo({
        top: 0,
        left: 0,
        behavior: "smooth"
    });
});
</script>
<div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Télécharger notre application</h3>
                    <p>Télécharger application pour Android et ios mobile</p>
                    <div class="app-logo">
                        <img src="assets/img/play-store.png" alt="">
                        <img src="assets/img/app-store.png" alt="">
                    </div>
                </div>
                <div class="footer-col-2">
                    <img class="logofooter" src="assets/img/logo-footer.png" alt="">
                    <p>Donnez Un Nouveau Style à Vos Etudes !</p>
                </div>
                <div class="footer-col-3">
                    <h3>Liens</h3>
                    <ul>
                        <li>Coupons</li>
                        <li>Blog</li>
                        <li>Rejoindre affilié</li>
                        <li>test</li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Follow us</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Twitter</li>
                        <li>Instagram</li>
                        <li>Youtube</li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="copyright">Copyright 2022 - NAJA7NI</p>
        </div>
    </div>
    </div>

</html>
<script>
    $(document).ready(function () {

        // hide #back-top first
        $("#back-top").hide();

        // fade in #back-top
        $(function () {
            $(window).scroll(function () {
                if ($(this).scrollTop() > 250) {
                    $('#back-top').fadeIn();
                } else {
                    $('#back-top').fadeOut();
                }
            });

            // scroll body to 0px on click
            $('#back-top a').click(function () {
                $('body,html').animate({
                    scrollTop: 0
                }, 300);
                return false;
            });
        });

    });
</script>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script type='text/javascript' src='https://demo.wpzoom.com/domino/wp-content/plugins/bwp-minify/min/?f=wp-includes/js/comment-reply.min.js,wp-content/themes/domino/js/jquery.mmenu.min.all.js,wp-content/themes/domino/js/flickity.pkgd.min.js,wp-content/themes/domino/js/jquery.carouFredSel-6.2.1-packed.js,wp-content/themes/domino/js/search_button.js,wp-content/themes/domino/js/jquery.fitvids.js,wp-content/themes/domino/js/theia-sticky-sidebar.js,wp-content/themes/domino/js/superfish.min.js,wp-content/themes/domino/js/tabs.js,wp-content/themes/domino/js/functions.js'></script>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="js/main.js"></script>
</html>
<script>
$(document).ready(function() {
    // search bar
    $("#q").keyup(function() {
        
			// $("#table").load("includes/load.php");
			let q = $("#q").val();
        if (q != '') {
            $("#s").html('');
            $.ajax({
                type: "",
                url: "",
                data: { q: q },
                success: function(data) {
                    $("#s").html(data);
                }
            });
	}
	 else{
           $("#s").html('');
            $.ajax({
                type: "post",
                url: "aff.php",
                data: { q: q },
                success: function(data) {
                    $("#s").html(data);
                }
			});
        }
});
});</script>
<style>
input.btn.btn-danger {
    font: -webkit-control;
    background: crimson;
    width: auto;
}
a.btn.btn-primary {
    font: -webkit-control;
    background: slategray;
    width: auto;
}
</style>