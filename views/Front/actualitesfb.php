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
<html>

<head>
    <title>SporTun</title>
    <link rel="shortcut icon" href="assets/img/logo.ico">
    <link rel="stylesheet" type="text/css" href="news.css">
    <link rel="stylesheet" type="text/css" href="news.css">
    <link href="css.css" rel="stylesheet">
    <link href="icon.css" rel="stylesheet">
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
        <span><a href="index.html" target="_blank"><img  class="sponsor-top"src="assets/img/logo.png" style="margin: 0 1.5em;"></a></span>&nbsp;&nbsp;&nbsp;&nbsp;
            <span><a target="_blank"><img  class="sponsor-top" src="assets/img/sportun.png" style="margin: 0 1.5em;"></a></span>&nbsp;&nbsp;&nbsp;&nbsp;
            <span><a target="_blank"><img  class="sponsor-top" src="assets/img/msg.png" style="margin: 0 1.5em;"></a></span>&nbsp;&nbsp;&nbsp;&nbsp;
            <span><a target="_blank"><img  class="sponsor-top" src="assets/img/sportun.png" style="margin: 0 1.5em;"></a></span>&nbsp;&nbsp;&nbsp;&nbsp;
            <span><a href="index.html" target="_blank"><img  class="sponsor-top" src="assets/img/logo.png" style="margin: 0 1.5em;"></a></span>&nbsp;&nbsp;&nbsp;&nbsp;
           <!-- <span><a  target="_blank"><img  class="sponsor-top" src="assets/img/sportun.png" style="margin: 0 1.5em;"></a></span>&nbsp;&nbsp;&nbsp;&nbsp;-->
            <span><a target="_blank"><img  class="sponsor-top" src="assets/img/msg.png" style="margin: 0 1.5em;"></a></span>&nbsp;&nbsp;&nbsp;&nbsp;
            <span><a href="index.html" target="_blank"><img  class="sponsor-top" src="assets/img/logo.png" style="margin: 0 1.5em;"></a></span>&nbsp;&nbsp;&nbsp;&nbsp;
            <span><a target="_blank"><img  class="sponsor-top" src="assets/img/sportun.png" style="margin: 0 1.5em;"></a></span>&nbsp;&nbsp;&nbsp;&nbsp;
            <span><a href="index.html" target="_blank"><img  class="sponsor-top"src="assets/img/logo.png" style="margin: 0 1.5em;"></a></span>&nbsp;&nbsp;&nbsp;&nbsp;
            <span><a target="_blank"><img  class="sponsor-top" src="assets/img/msg.png" style="margin: 0 1.5em;"></a></span>&nbsp;&nbsp;&nbsp;&nbsp;

        </div>
    </marquee>
</div>
    <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <a href="index.html"> <img src="assets/img/logo.png" alt="Logo SporTun"> </a>
                </div>
                <nav>
                <ul>

<li><a href="index.php">Acceuil</a></li>
<li><a href="annonce.php">Produits</a></li>
<?php if($compte=="Profil"){ 
echo"<li><a href='htmlAjouterAnnonce.php'>Vendre un produit</a></li>";
}?>
<li><a href="billets.php">Billets</a></li>
<li><a href="actualites.php">Actualités</a></li>
<li><a href="Publicite.php">Publicite</a></li>
<li><a href="account.php"><?php echo $compte ?></a></li>

</ul>
                </nav>
                <img src="assets/img/cart.png" class="cart" alt="">
            </div>
            <div class="categories">
    
    <div class="small-container">

        <h2 class="title">Catégories des articles</h2>
        <div class="row">
        <a href='actualitesfb.php' class='col-categories'>
                <img src="assets/img/foot.png" alt="Football">
                <h2>FOOTBALL</h2>
            </a>
            <a href='actualitescyclisme.php' class='col-categories'>
                <img src="assets/img/cyclisme.png" alt="Cyclisme">
                <h2>CYCLISME</h2>
            </a>
            <a href='actualitesathletisme.php' class='col-categories'>
                <img src="assets/img/athlet.png" alt="Athlétisme">
                <h2>ATHLETISME</h2>
            </a>
            <a href='actualitestennis.php' class='col-categories'>
                <img src="assets/img/tennis.png" alt="Tennis">
                <h2>TENNIS</h2>
            </a>
              <a href='actualiteshb.php' class='col-categories'>
                <img src="assets/img/hand.png" alt="Handball">
                <h2>HANDBALL</h2>
            </a>
            <a href='actualites.php' class='col-categories'>
                <img src="assets/img/tous.png" style="width: 100%;" alt="NEWS">
                <h2>TOUT ARTICLES</h2>
            </a>   
        </div>

    </div>


 </div>

            </div>

 <?php        include "C://wamp64/www/SporTun/controller/ArticleC.php";
    $breakC = new articleC();
        $break = $breakC->recentpost();?>
<!-- fr.tutiempo.net - Largeur:170px - Taille:36px -->
<div id="TT_Jy11xkB1B8DjcQGUKbuDjDDDjWa1L1YFrYEdEsi5a1z">Météo - Tutiempo.net</div>
<script type="text/javascript" src="https://fr.tutiempo.net/s-widget/l_Jy11xkB1B8DjcQGUKbuDjDDDjWa1L1YFrYEdEsi5a1z"></script>
         <div class="barre2">
</div>
        <div class="barre">
            <div class="breaking-news-section">
                <span id="btext">Breaking News</span>
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
    <div><span STYLE="padding:0 0 0 20px;"><?php $html = ""; $url = "https://www.soccerstats247.com/MatchResultsRssWidget.aspx?langId=5&leagueId=1420";$xml = simplexml_load_file($url); foreach($xml->channel->item as $item){$html .= $item->description;$html .= "<hr />";} 
 $html1 = ""; $url1 = "https://www.soccerstats247.com/RankingswFormRssWidget.aspx?langId=5&leagueId=1420&groupName=";$xml1 = simplexml_load_file($url1); foreach($xml1->channel->item as $item){$html1 .= $item->description;$html1 .= "<hr />";} ?>
</div>
        <?php 
$articleC = new articleC();
$listearticles = $articleC->afficherfootball();
if (isset($_GET['num'])) {
    $num = $_GET['num'];
    if ($num == 1) {
        $listearticles = $articleC->sortdate1();
    } else if ($num == 2) {
        $listearticles = $articleC->sortdate2();
    }
}
$nbrC = new articleC();
$nbr = $nbrC->affichernbrefb();
$limit=8;
$page = isset($_GET['page']) ? $_GET['page'] : 1;

foreach ($nbr as $row) {
    
   $total = $row['nbrfb'] ;   } 
	$pages = ceil( $total / $limit );

	$Previous = $page - 1;
	$Next = $page + 1;

?>
<br><br><br><br>


        <div class="container3">
        <div class="container2">
 <?php  echo $html; ?> 

       <?php  echo $html1; ?>
   </div>
            <div class="news">
            <?PHP
    foreach ($listearticles as $row) {
    ?>
                
                    <div class="article small">
                    <a href="blogs-details.php?idNewsArticle=<?PHP echo $row['idNewsArticle']; ?>"><img src="assets/img/<?PHP echo $row['urlImage']; ?>" alt=""></a>
                        <div class="pins">
                        <div class="tit">
                                <a href="blogs-details.php?idNewsArticle=<?PHP echo $row['idNewsArticle']; ?>"><?PHP echo $row['titre']; ?></a>
                            </div>
                           <!-- <?PHP $out = strlen($row['texte']) > 25 ? substr($row['texte'], 0, 25) . "..." : $row['texte'];  ?> -->
                           <!--  <p class="card-text "> -->
                              <!--  <?PHP echo $out  ?> -->
                       <!--     </p> -->
                       <!--     <div class="card-footer">
                    <a class="btn btn-danger" name="readmore" href="blogs-details.php?idNewsArticle=<?PHP echo $row['idNewsArticle']; ?>">Read More!</a>
                            </div>-->
                        </div>
                    </div>
               
                <?PHP }
                    ?>
        </div> 
    </div>
    <div class="pagination">
   <!-- <li>-->
        <?php if ($Previous > 0) :?>
      <a href="actualitesfb.php?page=<?= $Previous; ?>" class="prev"><i class="fas fa-angle-left"></i></a>
        <!--<span aria-hidden="true">&laquo; Previous</span>
      </a>-->
      <?php endif;?>
   <!-- </li>-->
    <?php for($i = 1; $i<= $pages; $i++) : ?>
        <?php if($i==$page) :?>
                    <!--<li>---><a href="actualitesfb.php?page=<?= $i; ?>" class="num active"><?= $i; ?></a><!--</li>-->
                    <?php else :?>
                  <!--<li>---><a href="actualitesfb.php?page=<?= $i; ?>" class="num "><?= $i; ?></a><!--</li>--> 
            <?php endif?>
    <?php endfor; ?>
   <!-- <li>-->
    <?php if ($Next <= $pages) :?>
      <a href="actualitesfb.php?page=<?= $Next; ?>"  class="next"><i class="fas fa-angle-right"></i></a>
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
                    <p>Donnez Un Nouveau Style à Votre Entrainement !</p>
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
            <p class="copyright">Copyright 2020 - SporTun</p>
        </div>
    </div>
    </div>
</body>

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
