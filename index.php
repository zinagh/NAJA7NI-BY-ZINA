<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <title>NAJA7NI</title>
    <link rel="shortcut icon" href="views/Front/assets/img/logo.ico">
    <link rel="stylesheet" type="text/css" href="views/Front/news.css">
    <link rel="stylesheet" type="text/css" href="views/Front/style3.css">
    <link href="icon.css" rel="stylesheet">
    <link href="views/Front/css.css" rel="stylesheet">
    <link href="views/Front/pagination.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="views/Front/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="views/Front/style2.css">
    <meta name="viewport" content="width=device-width , initial-scale=1.0">
</head>

<body>
    <div id="top-logo">
        <marquee style="width: 100%;">
            <div class="sponsors-top-div">
                <span><a href="index.html" target="_blank"><img  class="sponsor-top"src="views/Front/assets/img/flesh.png" style="margin: 0 1.5em;"></a></span>&nbsp;&nbsp;&nbsp;&nbsp;
                <span><a target="_blank"><img  class="sponsor-top" src="views/Front/assets/img/js.jpg" style="margin: 0 1.5em;"></a></span>&nbsp;&nbsp;&nbsp;&nbsp;
                <span><a target="_blank"><img  class="sponsor-top" src="views/Front/assets/img/msg.png" style="margin: 0 1.5em;"></a></span>&nbsp;&nbsp;&nbsp;&nbsp;
                <span><a target="_blank"><img  class="sponsor-top" src="views/Front/assets/img/python.jpg" style="margin: 0 1.5em;"></a></span>&nbsp;&nbsp;&nbsp;&nbsp;
                <span><a href="index.html" target="_blank"><img  class="sponsor-top" src="views/Front/assets/img/flesh.png" style="margin: 0 1.5em;"></a></span>&nbsp;&nbsp;&nbsp;&nbsp;
                <!-- <span><a  target="_blank"><img  class="sponsor-top" src="assets/img/sportun.png" style="margin: 0 1.5em;"></a></span>&nbsp;&nbsp;&nbsp;&nbsp;-->
                <span><a target="_blank"><img  class="sponsor-top" src="views/Front/assets/img/msg.png" style="margin: 0 1.5em;"></a></span>&nbsp;&nbsp;&nbsp;&nbsp;
                <span><a href="index.html" target="_blank"><img  class="sponsor-top" src="views/Front/assets/img/flesh.png" style="margin: 0 1.5em;"></a></span>&nbsp;&nbsp;&nbsp;&nbsp;
                <span><a target="_blank"><img  class="sponsor-top" src="views/Front/assets/img/html.jpg" style="margin: 0 1.5em;"></a></span>&nbsp;&nbsp;&nbsp;&nbsp;
                <span><a href="index.html" target="_blank"><img  class="sponsor-top"src="views/Front/assets/img/flesh.png" style="margin: 0 1.5em;"></a></span>&nbsp;&nbsp;&nbsp;&nbsp;
                <span><a target="_blank"><img  class="sponsor-top" src="views/Front/assets/img/msg.png" style="margin: 0 1.5em;"></a></span>&nbsp;&nbsp;&nbsp;&nbsp;

            </div>
        </marquee>
    </div>
    <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <a href="index.php"> <img src="views/Front/assets/img/logo.png" alt="Logo naja7ni"></a>
                </div>
                <nav>
            <ul id="MenuItems">
            <li><a>>>> Meilleur site de developpempent en Tunisie</a></li>
            </ul>
        </nav>
             
            </div>
            <!-------- featured categories -------->
            <div class="categories">

                <div class="small-container">

                    <h2 class="title">Vous etes ?</h2>
                    <div class="row">
                        <a href='views/Front/index.php' class='col-categories'>
                            <img src="views/Front/assets/img/user-.png" alt="USER">
                            <h2>USER</h2>
                        </a>
                        <a href='views/Dashboard/dashboardlogin.php' class='col-categories'>
                            <img src="views/Front/assets/img/adm.png" alt="ADMIN">
                            <h2>ADMIN</h2>
                        </a>
                    </div>
                </div>
            </div>

        </div>
        <?php include "C://wamp64/www/naja7ni/controller/ArticleC.php";
?>


<div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Télécharger notre application</h3>
                    <p>Télécharger application pour Android et ios mobile</p>
                    <div class="app-logo">
                        <img src="views/Front/assets/img/play-store.png" alt="">
                        <img src="views/Front/assets/img/app-store.png" alt="">
                    </div>
                </div>
                <div class="footer-col-2">
                    <img class="logofooter" src="views/Front/assets/img/logo-footer.png" alt="">
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