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
    <meta charset="UTF-8">

    <title>NAJA7NI</title>
    <link rel="shortcut icon" href="assets/img/logo.ico">
    <link rel="stylesheet" type="text/css" href="news1.css">
    <link rel="stylesheet" type="text/css" href="news1.css">
    <link rel="stylesheet" type="text/css" href="news2.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">
    <script type='text/javascript' src='https://demo.wpzoom.com/domino/wp-content/plugins/bwp-minify/min/?f=wp-content/plugins/jetpack/_inc/build/related-posts/related-posts.min.js,wp-content/plugins/affiliatewp-external-referral-links/assets/js/affwp-external-referral-links.min.js,wp-content/themes/domino/js/init.js,wp-content/plugins/instagram-widget-by-wpzoom/js/instagram-widget.js'></script>


    <script type='text/javascript' src='https://demo.wpzoom.com/domino/wp-includes/js/jquery/jquery.js?ver=1.12.4'></script>


    <link href="css.css" rel="stylesheet">
    <link href="icon.css" rel="stylesheet">

    <meta name="viewport" content="width=device-width , initial-scale=1.0">
</head>

<body>
    <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <a href="index.php"> <img src="assets/img/logo.png" alt="Logo SporTun"> </a>
                </div>
                <nav>
            <ul id="MenuItems">
            <li><a href="index.php">Acceuil</a></li>
                        <li><a href="quiz.php">Quiz</a></li>
                        <?php if($compte=="Profil"){ 
                echo"<li><a href='htmlAjouterAnnonce.php'>Ajouter Cour</a></li>";
                }?>
                
                        <li><a href="cours.php">Cours</a></li>
              
                        <li><a href="account.php"><?php echo $compte ?></a></li>
            </ul>
            </ul>
        </nav>
            </div>
       
            <?php include "C://wamp64/www/naja7ni/controller/ArticleC.php";
$breakC = new articleC();
$break = $breakC->recentpost();?>
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





<div class="wpzoom-style-picker no_display closed" style="display: block;">

    <div class="content">





        <h2 class="picker-title">CATEGORIES</h2>


 <!-------- featured categories -------->
 <div class="categories">

<div class="small-container">
    <div class="row1">
        <a href='coursjava.php' class='col-categories'>
            <img src="assets/img/java.jpg" alt="coursjava">
            <h2>JAVA</h2>
        </a>
        <a href='coursphp.php' class='col-categories'>
            <img src="assets/img/php.jpg" alt="coursphp">
            <h2>PHP</h2>
        </a>
        <a href='courshtml.php' class='col-categories'>
            <img src="assets/img/html.jpg" alt="courshtml">
            <h2>HTML</h2>
        </a>
        <a href='coursjs.php' class='col-categories'>
            <img src="assets/img/js.jpg" alt="coursjs">
            <h2>JAVASCRIPT</h2>
        </a>
        <a href='courspyth.php' class='col-categories'>
            <img src="assets/img/python.jpg" alt="courspyth">
            <h2>PYTHON</h2>
        </a>
        <a href='courspoo.php' class='col-categories'>
            <img src="assets/img/poo.jpg" style="width: 100%;" alt="courspoo">
            <h2>POO</h2>
        </a>
    </div>
</div>
</div>



    </div>

    <div class="close-button">
        <a  class="dashicons dashicons-menu" href="#">
        </a>
    </div>

    <script>
        jQuery(document).ready(function() {
            jQuery(".wpzoom-style-picker").fadeIn();

            jQuery(".wpzoom-style-picker .close-button").bind("click", function(e) {
                jQuery(".wpzoom-style-picker").toggleClass("closed");
                e.preventDefault();
            });

            jQuery("label.style-option").each(function() {
                var $inputid = "#" + jQuery(this).attr('data-input');
                var $input = jQuery($inputid);
                var $selector = $input.attr("data-selector");

                jQuery(this).parent().find('label').each(function() {
                    var $val = jQuery(this).attr('data-value');
                    if (jQuery($selector).hasClass($val)) {
                        $input.val($val);
                        jQuery(this).parent().find('label.active').removeClass("active");
                        jQuery(this).addClass("active");
                    }
                });
            });

            jQuery('label[id^="wpzoom-style-picker-"]').bind("click", function(e) {
                var $inputid = "#" + jQuery(this).attr('data-input');
                var $input = jQuery($inputid);

                var $val = jQuery(this).attr('data-value');
                var $selector = $input.attr("data-selector");

                $oldval = jQuery($inputid).val()
                $input.val($val);

                if ($input.attr("data-css")) {
                    $css = $input.attr("data-css");
                    var $options = {};
                    $options[$css] = $val;
                    jQuery($selector).animate($options);
                } else {
                    jQuery($selector).removeClass($oldval);
                    jQuery($selector).addClass($val);
                }

                jQuery(this).parent().find('label.active').removeClass("active");
                jQuery(this).addClass("active");
            });

            jQuery('select[name^="wpzoom-style-picker-"]').each(function(e) {
                jQuery(this).data("old", jQuery(this).val());
            });

            jQuery('[name^="wpzoom-style-picker-"]').bind("change", function(e) {
                jQuery(this).data("new", jQuery(this).val());

                var $selector = jQuery(this).attr("data-selector");
                var $val = jQuery(this).val();
                var $oldval = jQuery(this).data("old");

                if (jQuery(this).attr("data-css")) {
                    jQuery($selector).css(jQuery(this).attr("data-css"), $val);
                } else {
                    jQuery($selector).removeClass($oldval);
                    jQuery($selector).addClass($val);
                }

                console.log($oldval + " || " + $val);

                jQuery(this).data("old", $val);
            })
        });
    </script>
</div>
<!-- /.page-wrap -->









<!---->
<script type='text/javascript'>
/* <![CDATA[ */
var related_posts_js_options = {"post_heading":"h4"};
/* ]]> */
</script>
<?php
$relC = new articleC();
$rel = $relC->affichermostviews();?>
<div class="related_posts">
		<h3>Plus Vues</h3>

		<ul>

			
			<li id="post-2300" class="post-grid">
            <?php  foreach ($rel as $row) {
                         if ( $row['postCategory']=="JAVA") $path='java.jpg';
                         if ( $row['postCategory']=="PHP") $path='php.jpg';
                         if ( $row['postCategory']=="HTML") $path='html.jpg';
                         if ( $row['postCategory']=="JAVASCRIPT") $path='js.jpg';
                         if ( $row['postCategory']=="POO") $path='poo.jpg';
                         if ( $row['postCategory']=="PYTHON") $path='python.jpg';
?>
                   <a href="blogs-details.php?idNewsArticle=<?PHP echo $row['idNewsArticle']; ?>"><img width="200" height="131" src="assets/img/<?PHP echo $path; ?>" alt=""></a>
                        <a href="blogs-details.php?idNewsArticle=<?PHP echo $row['idNewsArticle']; ?>"><?PHP echo $row['titre']; ?></a>
				<span class="date1"><?php echo $row['Datearticle'] ?></span>
                <?PHP }
        ?>
			</li><!-- end #post-2300 -->
		</ul><!-- end .posts -->

	</div><!-- /.related_posts -->


           <?php $article = null;
            $articleC = new articleC();
            $listearticles =         $articleC->postarticle($article, $_GET['idNewsArticle']);
            if (isset($_GET['num'])) {
                $num = $_GET['num'];
                if ($num == 1) {
                    $listearticles = $articleC->sortdate1();
                } else if ($num == 2) {
                    $listearticles = $articleC->sortdate2();
                }
            }
            ?>
            <?PHP
    foreach ($listearticles as $row) {
        if ( $row['postCategory']=="JAVA") {$path='java.jpg'; $catcat="JAVA";} 
        if ( $row['postCategory']=="PHP") {$path='php.jpg'; $catcat="PHP";}
        if ( $row['postCategory']=="HTML") {$path='html.jpg'; $catcat="HTML";}
        if ( $row['postCategory']=="JAVASCRIPT") {$path='js.jpg'; $catcat="JAVASCRIPT";}
        if ( $row['postCategory']=="POO") {$path='poo.jpg'; $catcat="POO";}
        if ( $row['postCategory']=="PYTHON") {$path='python.jpg'; $catcat="PYTHON";}
    ?>
            <div class="titre">
                <ul>
                <h2>  <?PHP echo $row['titre']; ?></h2>
                </ul>
            </div>
         
            <div class="date">
            <i class="material-ico">event_available</i> Publié le :  <?php echo $row['Datearticle'] ?>
            </div>
        </div>
        <div class="container1">
            <div class="news">
                <div class="article big">
                <div class="vues">
                 <i class="material-ico">visibility</i>
            <?PHP  $vues=$row['vues'] ;  
                echo $vues;?>
                
            </div>
    <!--   <img  src="assets/img/<?PHP echo $row['urlImage']; ?>" alt="">  -->
                <video width="700" height="540" controls="">
  <source src="assets/img/<?PHP echo $row['urlImage']; ?>"" type="video/mp4">
Your browser does not support the video tag.
</video>

                 <div class="auteur">
                 <i class="material-ico">verified_user</i> Texte par : <?PHP echo $row['auteur'];  ?>
               
            </div>
                    <div class="articlecontent">
                        <p1><br> <br>
                        <?PHP $out = strlen($row['texte']) > 150 ? substr($row['texte'], 0, 34000) : $row['texte'];  ?>
                            <php class="text">
               <?PHP echo $out  ?><br><br> 
                            </php> 
                        </p1>
                    </div>
                </div>
         
                                </div>

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
<?PHP
$artC = new articleC();
$listes = $artC->afi($catcat);

 }
                    ?>
        <div class="container">
            <div class="newsv1">
            <?PHP
    foreach ($listes as $row) {
    ?>
                    <div class="artic" >
                    <a href="blogs-details.php?idNewsArticle=<?PHP echo $row['idNewsArticle']; ?>"><img src="assets/img/<?PHP echo $path; ?>" alt="" ></a>
                        <div class="pins" >

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
            <p class="copyright">Copyright 2022 - NAJA7NI</p>
        </div>
    </div>
    </div>
    </div>
</body>
</html>