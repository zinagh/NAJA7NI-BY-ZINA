
<?php

include '../Dashboard/DBconnection.php';
include '../../controller/PHPfunctions.php';include "C://wamp64/www/SporTuni/controller/ArticleC.php";

session_start();

$choix='Par défaut';
$noresultmsg='Désolé, il n’y a aucun produit actuellement.';

$compte="Compte";
if (isset($_SESSION["email"]))
{
    $compte="Profil";
}

if(isset($_GET['categorie'])) {
    $categorie = $_GET['categorie'];
    }else{
        $categorie = '';   
    }
if(isset($_GET['cati'])) {
    $cati = $_GET['cati'];
    }else{
        $cati = '';   
    }
    if(isset($_GET['vldphp'])) {
        $vld = $_GET['vldphp'];
        }else{
            $vld = '';   
        }
        if(isset($_GET['vldjv'])) {
            $vldjv = $_GET['vldjv'];
            }else{
                $vldjv = '';   
            }
            if(isset($_GET['vldjs'])) {
                $vldjs = $_GET['vldjs'];
                }else{
                    $vldjs = '';   
                }
                if(isset($_GET['vldhml'])) {
                    $vldhml = $_GET['vldhml'];
                    }else{
                        $vldhml = '';   
                    }
                    if(isset($_GET['vldp'])) {
                        $vldp = $_GET['vldp'];
                        }else{
                            $vldp = '';   
                        }
                        if(isset($_GET['vldphn'])) {
                            $vldphn = $_GET['vldphn'];
                            }else{
                                $vldphn = '';   
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

if (isset($_POST['mail']  )) {
    $email = mysqli_real_escape_string($conn , $_POST['mail']);
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $played_on = date('Y-m-d H:i:s');
        $query = "INSERT INTO participants(mail,date) VALUES ('$email','$played_on')";
        $run = mysqli_query($conn, $query) or die(mysqli_error($conn)) ;
        if (mysqli_affected_rows($conn) > 0) {
            $query2 = "SELECT * FROM participants WHERE mail = '$email' ";
            $run2 = mysqli_query($conn , $query2) or die(mysqli_error($conn));
            if (mysqli_num_rows($run2) > 0) {
                $row = mysqli_fetch_array($run2);
                $id = $row['id'];
                $_SESSION['id'] = $id;
                $_SESSION['mail'] = $row['mail'];
            }
    }
        else {
            echo "<script> alert('something is wrong'); </script>";
        }
    }
    else {
        echo "<script> alert('Invalid Email'); </script>";
    }
    }
/********************nombre des produits à afficher pour tous les critères sélectionnés ***********************/
echo "<script>document.writeln(input); </script>";
           if($categorie){
            $sql1 = "SELECT * FROM question_test WHERE course ='".$categorie."';";          
            $result1=mysqli_query($conn,$sql1);
            $NbAnnonces=mysqli_num_rows($result1);}
            else{$NbAnnonces=0;}
      //      echo $NbAnnonces;
/*******************Triage ************************/
if($tri==0){
    $sql = "SELECT * FROM question_test WHERE course ='".$categorie."';";          
//echo $sql; die;
$result=mysqli_query($conn,$sql);
$choix='Par défaut';}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SporTun</title>
    <link rel="shortcut icon" href="assets/img/logo.ico">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

</head>
<body>
      <div class="container">
        <div class="navbar">
            <div class="logo">
                <a href="index.html"> <img src="assets/img/logo.png"> </a>
            </div>
        <nav>
            <ul id="MenuItems">
            <li><a href="index.php">Acceuil</a></li>
                        <li><a href="annonce.php">Quiz</a></li>
                        <?php if($compte=="Profil"){ 
                echo"<li><a href='htmlAjouterAnnonce.php'>Ajouter Cour</a></li>";
                }?>
                
                        <li><a href="actualites.php">Cours</a></li>
              
                        <li><a href="account.php"><?php echo $compte ?></a></li>
            </ul>
        </nav>
    
        <img src="assets/img/menu.png" class="menu-icon" onclick="togglemenu()">
      </div>
      </div>
     <!-------- featured categories -------->
     <div class="categories">
    
    <div class="small-container">

        <h2 class="title">Catégories des Cours</h2>
        <div class="row">
            <?php $s=$npage+1;?>
            <?php echo "<a href='Annonce.php?vldjv=1&?cati=java#c1' class='col-categories'>";?>
            <img src="assets/img/java1.jpg" alt="JAVA">
                <h2>JAVA</h2>
            </a>
            <?php echo "<a href='Annonce.php?vldphp=1&?cati=php#c1' class='col-categories'>";?>
            <img src="assets/img/php.jpg" alt="PHP">
                <h2>PHP</h2>
            </a>
            <?php echo "<a href='Annonce.php?vldhml=1&?cati=html#c1' class='col-categories'>";?>
            <img src="assets/img/html.jpg" alt="HTML">
                <h2>HTML</h2>
            </a>
            <?php echo "<a href='Annonce.php?vldjs=1&?cati=js#c1' class='col-categories'>";?>
            <img src="assets/img/js.jpg" alt="JS">
                <h2>JS</h2>
            </a>
            <?php echo "<a href='Annonce.php?vldphn=1&?cati=python#c1' class='col-categories'>";?>
            <img src="assets/img/python.jpg" alt="PYTHON">
                <h2>PYTHON</h2>
            </a>
            <?php echo "<a href='Annonce.php?vldp=1&?cati=poo#c1' class='col-categories'>";?>
            <img src="assets/img/poo.jpg" style="width: 100%;" alt="POO">
                <h2>POO</h2>
            </a>
        </div>
        <br>
    </div>
    <?php if ($vld){?>       
      
      <center>	<div class="container">
                  <h2>Votre Email Pour Passer L'examen :</h2>
                  <form method="POST" action="Annonce.php?categorie=php&?npage=<?php $s ?>#c1">
                  <input type="mail" name="mail" required="" id="m" >
                   
                  <input type="submit" name="submit" value="cceder vers l'exmen"  >
  <?php $vld=0;?>
              </div>	</center>
           <?php }?>
           <?php if ($vldjv){?>       
      
      <center>	<div class="container">
                  <h2>Votre Email Pour Passer L'examen :</h2>
                  <form method="POST" action="Annonce.php?categorie=java&?npage=<?php $s ?>#c1">
                  <input type="mail" name="mail" required="" id="m" >
                   
                  <input type="submit" name="submit" value="cceder vers l'exmen"  >
  <?php $vld=0;?>
              </div>	</center>
           <?php }?>
           <?php if ( $vldhml){?>       
      
      <center>	<div class="container">
                  <h2>Votre Email Pour Passer L'examen :</h2>
                  <form method="POST" action="Annonce.php?categorie=html&?npage=<?php $s ?>#c1">
                  <input type="mail" name="mail" required="" id="m" >
                   
                  <input type="submit" name="submit" value="cceder vers l'exmen"  >
  <?php $vld=0;?>
              </div>	</center>
           <?php }?>
           <?php if ( $vldjs){?>       
      
      <center>	<div class="container">
                  <h2>Votre Email Pour Passer L'examen :</h2>
                  <form method="POST" action="Annonce.php?categorie=js&?npage=<?php $s ?>#c1">
                  <input type="mail" name="mail" required="" id="m" >
                   
                  <input type="submit" name="submit" value="cceder vers l'exmen"  >
  <?php $vld=0;?>
              </div>	</center>
           <?php }?>
           <?php if ( $vldphn){?>       
      
      <center>	<div class="container">
                  <h2>Votre Email Pour Passer L'examen :</h2>
                  <form method="POST" action="Annonce.php?categorie=python&?npage=<?php $s ?>#c1">
                  <input type="mail" name="mail" required="" id="m" >
                   
                  <input type="submit" name="submit" value="cceder vers l'exmen"  >
  <?php $vld=0;?>
              </div>	</center>
           <?php }?>
           <?php if ( $vldp){?>       
      
      <center>	<div class="container">
                  <h2>Votre Email Pour Passer L'examen :</h2>
                  <form method="POST" action="Annonce.php?categorie=poo&?npage=<?php $s ?>#c1">
                  <input type="mail" name="mail" required="" id="m" >
                   
                  <input type="submit" name="submit" value="cceder vers l'exmen"  >
  <?php $vld=0;?>
              </div>	</center>
           <?php }?>
 </div> 
  
<?php if ($categorie){?>
        <div id="c1" class="small-container">
        <?php echo"<h1>> $categorie <</h1>";echo "$NbAnnonces questions disponible"; ?><br> <?php echo "* 1 min pour chaque question"; echo "<br>" ; echo "* 1 point pour chaque question";
        
        }?> 

            </div>
           
            <br><br><br><br><br>   <br><br><br><br><br>  
            <br><br><br><br><br>  
<!--    
-->
<tbody>
        <?php
        if($NbAnnonces==0 && $categorie){
            echo "</br></br></br></br></br>";
            echo "<h1 style='text-align:center;'> $noresultmsg </h1>";
            echo "</br></br></br>";
            
        }else{
        echo"<div class='row'>";
        $n=0;
        $i=0;
        while($rows=mysqli_fetch_assoc($result))
        {
            if(($rows['course']==$categorie)){
                if($n>=($npage*12))
                {   
                    $i++;
                    $id=$rows['id'];
                    ?>
                     
                    <?php
                }
            }
            $n++;
            if($i==12)
            break;
        }
        }
        echo"</div>";    
           echo" <div class='page-btn'>";
        if($npage!=0){
            $s=$npage-1;
            echo"<a href='Annonce.php?categorie=$categorie&npage=$s#c1'><span>&#8592;</span></a>"; 
        }
        $nbpages=intdiv($NbAnnonces, 12);
        $mod=$NbAnnonces%12;
        if($mod>0){
            $nbpages+=1;
            }

        for($i=0;$i<$nbpages;$i++){
            $s=$i+1;
            if($npage==$i){
                if($nbpages>1)
                echo"<a class='active' href='Annonce.php?categorie=$categorie&npage=$i#c1'><span>$s</span></a>";
            }else{
                echo"<a href='Annonce.php?categorie=$categorie&npage=$i#c1'><span>$s</span></a>";
            }   
        }
        if($npage!=($nbpages-1)){

            if($NbAnnonces>12){
                $s=$npage+1;
                echo"<a href='Annonce.php?categorie=$categorie&npage=$s#c1'><span>&#8594;</span></a>"; 
            }      
        }
            ?>
        </div>
    </div>
    <?php 
$_SESSION['course']=$categorie;
echo "<pre>";
$ques = new articleC();
$quest_data=($ques->show_questions($categorie));
 ?>

<head>
<script type="text/javascript">
  function timeout()                            //function to check time out
   {
    var minute=Math.floor(timeleft/60);   
    var second=timeleft%60;
    var min=checkMin(minute);
    var sec=checkSec(second)
    if (timeleft<=0) 
    {
      clearTimeout(tm);                                  //if timeout then stop the timeout function
      document.getElementById("myform").submit();       //if timeout then automatic submit the form
    }
    else
    {
      document.getElementById("timeout").innerHTML=min+":"+sec;   //else diplay the time
    }
    timeleft--;                                                         //decrease time each time
    var tm=setTimeout(function(){timeout()},1000);                      //after each 1 minute the function timeout will called automatically
  }
  function checkSec(second)                   //convert from  0:5 to 0:05
  {
    if (second<10) 
    {
      second="0"+second;
    }
    return second;
  }
  function checkMin(minute)              //convert from  0:20 to 00:20
  {
    if (minute<10) 
    {
      minute="0"+minute;
    }
    return minute;
  }
</script>
</head>
<br><br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<body onload="timeout()">            <!--   when body load ,timeout functionwill called automatically
   -->

   <div id="c1" class="small-container">

<div class="container position-relative" style="text-align: center; margin-top: -380px;">

<form action="result_show.php" method="POST" id="myform" style="margin-top: -400px;">

    <center>
<div class="row col-sm-7 ">
<?php if ($categorie){?>
  <script type="text/javascript">
      var timeleft=<?php echo $NbAnnonces?>*1;                                   //important--> the scope of javascript variable is global but not in php(we have to use global keyword)
  </script>
	<div  style="font-size: 15px" id="timeout">time out</div>

    <?php }?>
<?php 

	$i=1;                     //to  display question number
	foreach ($quest_data as  $quest) {
		
 ?>
 <table class="table table-hover table-bordered table-active">
  <thead class="thead-dark">
    <tr>
      <th scope="col"><?php echo $i.'. '; ?><?php echo $quest['question']; ?></th>
    </tr>
  </thead>
  	<?php if (isset($quest['opt1'])){ ?>     <!--  to check whether the answer is selected or not -->
    <tr>
      <td scope="row" ><input type="radio" value="0" name="<?php echo $quest['id']; ?>"/>&emsp;<?php echo $quest['opt1']; ?></td>
    </tr>
	<?php } ?>
	<?php if (isset($quest['opt2'])){ ?>
      <tr>
      <td scope="row"><input type="radio" value="1" name="<?php echo $quest['id']; ?>"/>&emsp;<?php echo $quest['opt2']; ?></td>
    </tr>
    <?php } ?>
    <?php if (isset($quest['opt3'])){ ?>
    <tr>
      <td scope="row"><input type="radio" value="2" name="<?php echo $quest['id']; ?>"/>&emsp;<?php echo $quest['opt3']; ?></td>
    </tr>
    <?php } ?>
    <?php if (isset($quest['opt4'])){ ?>
    <tr>
      <td scope="row"><input type="radio" value="3" name="<?php echo $quest['id']; ?>"/>&emsp;<?php echo $quest['opt4']; ?></td>
    </tr>
     <?php } ?>

      <tr>
      <td scope="row"><input type="radio" checked="checked" style="display: none;" value="no_attempt" name="<?php echo $quest['id']; ?>"/></td>  <!-- bydefautlt select this if no other answer are selected -->
    </tr>
  </tbody>
</table>
	<?php 
	$i++;        // increment question number by 1
	} 			//loop ends
	?>

</div><center>
<?php if ($categorie){?>
<input type="submit" class="btn btn-success" action="result_show.php">
<?php }?>
</form>
</div>
</div>


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
            <p class="copyright">Copyright 2022 - SporTun</p>
        </div>
    </div>



        <script type="text/javascript"> 
            function handleSelect(elm) 
            {
            var categorie = "<?php echo $categorie; ?>";
            window.location = "Annonce.php?&categorie="+categorie+"&npage=0#c1"; 
            //window.location = "AjouterAnnonce.html?tri=1"; 
            //window.location = elm.value+".php"; 
            } 
        </script>


        
<!-------js for toggle menu -------->
<script>
        var MenuItems= document.getElementById("MenuItems");
        MenuItems.style.maxHeight="0px";
        function togglemenu(){
            if (MenuItems.style.maxHeight =="0px") {
                MenuItems.style.maxHeight ="280px";
            }
            else
            {
                MenuItems.style.maxHeight ="0px";
            }
        }
        var input = document.getElementById("m").value;


    </script>
        


</body>
</html>
<style>        input[type="mail"] {
    background-color: antiquewhite;
    border-block: none;
    inline-size: -webkit-fill-available;
    width: 433px;
    height: 23px;
    margin-left: -90px;
}
    div#timeout {
    font-size: 22px;
}
element.style {
     font-size: 22px; 
}
</style>