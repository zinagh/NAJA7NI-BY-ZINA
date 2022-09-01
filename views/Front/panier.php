<?php
include 'DBconnection.php';
session_start();
$connected=0;
if ($_SESSION["email"]=="")
{
    header("Location: account.php");
    exit();
}else{
    $connected=1;
}
$sql='select * from panier where email="'.$_SESSION["email"].'";';
$result=mysqli_query($conn,$sql);
$sql='select SUM(prix) as total from panier where email="'.$_SESSION["email"].'";';
$req=mysqli_query($conn,$sql);
$somme=mysqli_fetch_assoc($req);
$error="";
if (isset($_GET['msg']) ){
$error=$_GET['msg'];
}
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
</head>
<body >
    <div class="header" >
        <div class="container">
          <div class="navbar">
              <div class="logo">
                  <a href="index.php"> <img src="assets/img/logo.png"> </a>
              </div>
          
          <nav>

              <ul id="MenuItems">

                  <li><a href="index.php">Acceuil</a></li>
                  <li><a href="annonce.php">Produits</a></li>
                  <?php if($connected==1){ 
                  echo"<li><a href='htmlAjouterAnnonce.php'>Vendre un produit</a></li>";
                  }?> 
                  <li><a href="billets.php">Billets</a></li>
                  <li><a href="actualites.php">Actualités</a></li>
                  <li><a href="Publicite.php">Publicite</a></li>
                  <li><a href="account.php">Profil</a></li>
              </ul>
          </nav>
          <a href="panier.php"><img src="assets/img/cart.png" class="cart" alt=""></a>
          <img src="assets/img/menu.png" class="menu-icon" onclick="togglemenu()">
        </div>
      
            <!-------cart items details  -------->
  
        <div class="small-container-panier cart-page">
        <?php 
              if (mysqli_num_rows($result)==0)
              {
                  ?>
                  <div style="text-align:center;">
                  <?php
                  echo ("<h1> Votre panier est vide !</h1> ") ?>
                  <a href='annonce.php' class='btn paniervide-btn'>Explorer Nos Produits &#8594; </a>
              </div>
                  <?php
              }
              else { 
                  ?>
            <table>
                <tr>
                    <th>Produit</th>
                    <th>Quantité</th>
                    <th>Prix</th>
                 </tr>
             
              <?php 
                            while($rows=mysqli_fetch_assoc($result))
                            {
                                $id=$rows['id']
                                ?>

                    <tr>
                     <td>
                <div class="cart-info">  
                    <img src="assets/img/<?php echo $rows['image']; ?>">
                      <div>
                          <p><?php echo $rows['titre']; ?></p>
                          <small> Prix : <?php echo $rows['prix']; ?> TND</small>
                          <br>
                          <a href="annuler.php?id=<?php echo $id ?>"> Annuler</a> 
                      </div>
                </div>
                  
                  <td><input type="number" value="<?php echo $rows['quantite']?>" min="<?php echo $rows['quantite']?>" max="<?php echo $rows['quantite']?>"></td>
                  <td><?php echo $rows['prix']; ?> TND</td>
              </td>
              </tr>
              <?php
                 }
                 ?>
              
              
        </table>
        <div class="totalprice">
            <table>
                  <tr>
                    <td>Total</td>
                    <td><?php echo $somme['total']; ?>TND</td>
                  </tr>
                </table>
            </div>
            <p style="color :#ff523b; margin:10px 0px;  text-align:right; font-size:18px;"> <?php echo $error ?> </p>
            <button  class="btn checkout-btn"><a href="../../controller/payer.php" style="color:white;" > Payer </a> </button> 
            <?php
              }
              ?>
        </div>
    </div>
    

   
  
<!---------- footer ------------>
    <div class="footer" style="padding : 1px 0 20px">
        <div class="container" style= >
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
        </div>
    </div>

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
    </script>
</body>
</html>