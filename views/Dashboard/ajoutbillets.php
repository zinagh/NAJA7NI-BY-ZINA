<?php
	include_once 'DBconnection.php';
	
    $target_dir = "../Front/assets/img/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
      $check = getimagesize($_FILES["image"]["tmp_name"]);
      if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
      } else {
        echo "File is not an image.";
        $uploadOk = 0;
      }
    }
    
    // Check if file already exists
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    
    // Check file size
    if ($_FILES["image"]["size"] > 10000000) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
      echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
      $uploadOk = 0;
    }
    
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
      if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        echo "The file ". htmlspecialchars( basename( $_FILES["image"]["name"])). " has been uploaded.";
      } else {
        echo "Sorry, there was an error uploading your file.";
      }
    }  

	$titre = $_POST['titre'];
	$descourte = $_POST['descourte'];
	$deslongue = $_POST['deslongue'];
	$prix = $_POST['prix'];
  $date = $_POST['date'];
  $categorie = $_POST['categorie'];
//	$image = $_POST['image'];
    

    $sql = "INSERT INTO events (titre, descourte, deslongue, date, prix, image, categorie)
    VALUES ('$titre', '$descourte', '$deslongue', '$date', '$prix', '$target_file','$categorie');";

    mysqli_query($conn,$sql);
  
    header("Location: gestionbillets.php");
    ?>

    