<?php
include '../Dashboard/DBconnection.php';
include '../../controller/PHPfunctions.php';


session_start();

$choix='Par défaut';
$noresultmsg='Désolé, il n’y a aucun évènement actuellement.';


$compte="Compte";
if (isset($_SESSION["email"]))
{
    $compte="Profil";
}



if(isset($_GET['categorie'])) {
    $categorie = $_GET['categorie'];
    }else{
        $categorie = 'Tous Les évènements';   
    }

if(isset($_GET['tri'])) {
$tri = $_GET['tri'];
}else{
    $tri = 0;
}

if(isset($_GET['npage'])) {
$npage = ($_GET['npage']);

}else{
    $npage = 0;
}



if(isset($_POST['submit_search'])){
    $search=mysqli_real_escape_string($conn,$_POST['search']);
}else{
    if(isset($_GET['search']))
    $search=$_GET['search'];
    else{
    $search='';
    }
}

/********************nombre des events à afficher pour tous les critères sélectionnés ***********************/

            if($categorie == 'Tous Les évènements'){
            $sql1 = "SELECT * FROM events WHERE (titre LIKE '%$search%' OR descourte  LIKE '%$search%' OR deslongue  LIKE '%$search%' OR 
            categorie LIKE '%$search%' OR prix LIKE '%$search%') ;"; 
            }else{
            $sql1 = "SELECT * FROM events WHERE (titre LIKE '%$search%' OR descourte  LIKE '%$search%' OR deslongue  LIKE '%$search%' OR 
            categorie LIKE '%$search%' OR prix LIKE '%$search%') AND categorie ='" . $categorie. "';";
            }
            $result1=mysqli_query($conn,$sql1);
            $Nbevents=mysqli_num_rows($result1);
            if($Nbevents==0){
                if($search==''){
                $noresultmsg= "Désolé, Il n'y a aucun évènement qui correspond à la categorie sélectionnée .";
                }else{
                $noresultmsg= "Désolé, aucun résultat ne correspond à vos critères de recherche.";
                }
                }
                
    
/*******************Triage ************************/


        //Par défaut
    if($tri==0){

        $sql="SELECT * from events WHERE titre LIKE '%$search%' OR descourte  LIKE '%$search%' OR deslongue  LIKE '%$search%' OR 
        categorie LIKE '%$search%' OR prix LIKE '%$search%'  ;";
        //echo $sql; die;
        $result=mysqli_query($conn,$sql);
        $choix='Par défaut';


    }
        //Popularité
    if($tri==1){

        $sql="SELECT * from events WHERE titre LIKE '%$search%' OR descourte  LIKE '%$search%'  OR deslongue  LIKE '%$search%' OR 
        categorie LIKE '%$search%' OR prix LIKE '%$search%' ORDER BY vues DESC;";
        $result=mysqli_query($conn,$sql);
        $choix='Popularité';

    }

        //Nouveautés
    if($tri==2){

        $sql="SELECT * FROM events WHERE titre LIKE '%$search%' OR descourte  LIKE '%$search%'OR deslongue  LIKE '%$search%' OR 
        categorie LIKE '%$search%' OR prix LIKE '%$search%' ORDER BY date ASC ;";
        $result=mysqli_query($conn,$sql);
        $choix='évènements à venir';


    }

        //Prix le plus bas
    if($tri==4){

        $sql="SELECT * FROM events WHERE titre LIKE '%$search%' OR descourte  LIKE '%$search%'  OR deslongue  LIKE '%$search%' OR 
        categorie LIKE '%$search%' OR prix LIKE '%$search%' ORDER BY prix ASC ;";
        //echo $sql; die;
        $result=mysqli_query($conn,$sql);
        $choix='Prix le plus bas';


    }
        //Prix le plus élevé
    if($tri==5){

        $sql="SELECT * FROM events WHERE titre LIKE '%$search%' OR descourte  LIKE '%$search%'  OR deslongue  LIKE '%$search%' OR 
        categorie LIKE '%$search%' OR prix LIKE '%$search%' ORDER BY prix DESC ;";
        $result=mysqli_query($conn,$sql);
        $choix='Prix le plus élevé';


    }






?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SporTun</title>
    <link rel="stylesheet" href="billets.css">
    <link rel="stylesheet" href="stylebillet.css">
    <link rel="shortcut icon" href="assets/img/logo.ico">
   <!-- <link rel="preconnect" href="https://fonts.gstatic.com">   -->
    <link rel="shortcut icon" href="logo.ico">
    
 <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="header">
      <div class="container">
        <div class="navbar">
            <div class="logo">
                <a href="index.php"> <img src="assets/img/logo.png"> </a>
            </div>
        
        <nav>
            <ul>
                <li><a href="index.php">Acceuil</a></li>
                <li><a href="annonce.php">Produits</a></li>
                <?php if($compte=="Profil"){ 
                echo"<li><a href='htmlAjouterAnnonce.php'>Vendre un produit</a></li>";
                } ?>
                <li><a href="billets.php">Billets</a></li>
                <li><a href="actualites.php">Actualités</a></li>
                <li><a href="Publicite.php">Publicite</a></li>
                <li><a href="account.php"><?php echo $compte ?></a></li>
            </ul>
        </nav>
        <a href="panier.php"><img src="assets/img/cart.png" class="cart" alt=""></a>
      </div>
     
 <!-------- featured categories -------->
   
<br>
<div class="categories">
    
    <div class="small-container">

        <h2 class="title">Catégories</h2>



        <div class="row">
            <?php $s=$npage+1;?>
            <?php echo "<a href='billets.php?categorie=Carritatif&?npage=$s&tri=$tri&#c1' class='col-categories'>";?>
                <img src="assets/img/taswiracute.jpg" alt="Carritatif">
                <h2>CARRITATIF</h2>
            </a>
            <?php echo "<a href='billets.php?categorie=Tournoi&?npage=$s&tri=$tri#c1' class='col-categories'>";?>
                <img src="assets/img/18_thumb.png" alt="Tournoi">
                <h2>TOURNOI</h2>
            </a>
            <?php echo "<a href='billets.php?categorie=Commercial&?npage=$s&tri=$tri#c1' class='col-categories'>";?>
                <img src="assets/img/4_thumb.png" alt="Commercial">
                <h2>COMMERCIAL</h2>
            </a>
            <?php echo "<a href='billets.php?categorie=Conference&?npage=$s&tri=$tri#c1' class='col-categories'>";?>
                <img src="assets/img/gordon_ramsey.jpg" alt="Conference">
                <h2>CONFERENCE</h2>
            </a>
            <?php echo "<a href='billets.php?categorie=Online&?npage=$s&tri=$tri#c1' class='col-categories'>";?>
                <img src="assets/img/download.jpg" alt="Online">
                <h2>ONLINE</h2>
            </a>
            <?php echo "<a href='billets.php?categorie=Autre&?npage=$s&tri=$tri#c1' class='col-categories'>";?>
                <img src="assets/img/230_thumb.png" alt="Autre">
                <h2>AUTRE</h2>
            </a>
    
        </div>

        <br>
        <div class="row">
            <?php echo "<a href='billets.php?categorie=Tous Les évènements&?npage=$s&tri=$tri#c1' class='col-allproducts'>";?>
                <img src="assets/img/taswira.jpg" style="width: 100%;" alt="Fitness Muscu">
                <h1>TOUS LES EVENEMENTS</h1>
            </a>   
        </div>
        

    </div>

    


 </div> 
 <div id="c1" class="small-container">

<div class="row row-2">
    

    <?php echo"<h2>$categorie</h2>";?>

    
    <select name="formal" onchange="javascript:handleSelect(this)">  
    <?php echo "<option selected disabled value='Sélectionner'>$choix</option>";?>
    <option value="0">Par défaut</option> 
    <option value="1">Popularité</option> 
    <option value="2">évènements à venir</option> 
    <option value="4">Prix le plus bas</option> 
    <option value="5">Prix le plus élevé</option> 
    </select> 

</div>



<form action=<?php echo "'billets.php?categorie=$categorie#c1'";?> class="search-form" method="POST" role="search">
<input id="search" type="search" name="search" value="<?php echo $search; ?>" placeholder="chercher..." />
<button type="submit" name="submit_search" class="search-button"><i class="fas fa-search"></i></button>    
</form>


 
 <div class="container">
    
    <?php 
   if($Nbevents==0){
        
    echo "</br></br></br></br></br>";
    echo "<h1 style='text-align:center;'> $noresultmsg </h1>";
    echo "</br></br></br>";
    
}else{


echo"<div class='row'>";
$n=0;
$i=0;
 
    
                            while($rows=mysqli_fetch_assoc($result)){
                            if(($rows['categorie']==$categorie)||($categorie=='Tous Les évènements')){
                                if($n>=($npage*12))
                                {   
                                    $i++;  
                                     $id=$rows['id'];
                                ?>
    <div class="col-xs-12 col-md-6">
    <!-- First product box start here-->
        <div class="prod-info-main prod-wrap clearfix">
            <div class="row">
                    <div class="col-md-5 col-sm-12 col-xs-12">
                    
                        <div class="product-image"> 
                        <div class="col-4"> 
                        <?php echo "<a href=Detailevent.php?id=$id>";?> <img src="assets/img/<?php echo $rows['image']; ?>"></a>
                            
                            </div>
                        </div>
                    </div>
                    <h1 style="color :white;">sss</h1>
                    <div class="col-md-7 col-sm-12 col-xs-12">
                    <div class="product-deatil">
                            <h5 class="name">
                                <a href="#">
                                <?php echo $rows['titre']; ?> <span><?php echo $rows['date']; ?></span>
                                </a>
                            </h5>
                            <p class="price-container">
                                <span><?php echo $rows['prix']; ?> DT</span>
                            </p>
                            <span class="tag1"></span> 
                    </div>
                    <div class="description">
                        <p><?php echo $rows['descourte']; ?> </p>
                    </div>
                    <div class="product-info smart-form">
                        <div class="row">
                            <div class="col-md-12"> 
                               
                               
                                <?php echo "<a href=Detailevent.php?id=$id class=btn btn-info> Plus d'informations</a> "?>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- end product --><?php
                                     }}
                                     $n++;
            if($i==12)
            break;

            
            


        }
        }
        
        echo"</div>";    
           echo" <div class='page-btn'>";


       


        if($npage!=0){
            $s=$npage-1;
            echo"<a href='billets.php?categorie=$categorie&npage=$s&tri=$tri&search=$search#c1'><span>&#8592;</span></a>"; 
        }



        $nbpages=intdiv($Nbevents, 12);
        $mod=$Nbevents%12;
        if($mod>0){
            $nbpages+=1;
            }

        for($i=0;$i<$nbpages;$i++){
            $s=$i+1;
            if($npage==$i){
                if($nbpages>1)
                echo"<a class='active' href='billets.php?categorie=$categorie&npage=$i&tri=$tri&search=$search#c1'><span>$s</span></a>";
            }else{
                echo"<a href='billets.php?categorie=$categorie&npage=$i&tri=$tri&search=$search#c1'><span>$s</span></a>";
            }
            
        }

        
        if($npage!=($nbpages-1)){

            if($Nbevents>12){
                $s=$npage+1;
                echo"<a href='billets.php?categorie=$categorie&npage=$s&tri=$tri&search=$search#c1'><span>&#8594;</span></a>"; 
            }      
        
        }




        

            ?>
                            
    </div>
    
        <!-- end product -->
    
    
            
    </div>
</div>

  
</div>
<footer>
    <!---------- footer ------------>
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
                    <h3>Follow  us</h3>
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
        
         
            <script type="text/javascript"> 
            function handleSelect(elm) 
            {
            var categorie = "<?php echo $categorie; ?>";
            var search = "<?php echo $search; ?>";
            window.location = "billets.php?&categorie="+categorie+"&npage=0&tri="+elm.value+"&search="+search+"#c1"; 
            //window.location = "AjouterAnnonce.html?tri=1"; 
            //window.location = elm.value+".php"; 
            } 
        </script>
</footer>
</body>
</html>