<?php
    include_once 'DBconnection.php';

    session_start();
    if (isset($_SESSION["email"]))
    {
    $email=$_SESSION['email'];
    //exit();
    }


    

    



    if(isset($_POST['submit'])){

        $insert1=null;
        $insert2=null;
        $insert3=null;
        $insert4=null;
        $insert5=null;



        $titre = $_POST['titre'];
        $description = $_POST['description'];
        $categorie = $_POST['categorie'];
        //$image = $_POST['$target_file'];
        $prix = $_POST['prix'];
      

        $uploadsDir = "../views/Front/assets/img/";
        $allowedFileType = array('jpg','png','jpeg');
        
        // Velidate if files exist
        if (!empty(array_filter($_FILES['fileUpload']['name']))) {
        $msg="Produit mis en vente avec succès!";
        
        // Loop through file items
            $i=0;
            foreach($_FILES['fileUpload']['name'] as $id=>$val){
                $i++;
                echo $i;
                // Get files upload path
                $fileName        = $_FILES['fileUpload']['name'][$id];
                $tempLocation    = $_FILES['fileUpload']['tmp_name'][$id];
                $targetFilePath  = $uploadsDir . $fileName;
                $fileType        = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));
                $uploadDate      = date('Y-m-d H:i:s');
                $uploadOk = 1;

                if(in_array($fileType, $allowedFileType)){
                        if(move_uploaded_file($tempLocation, $targetFilePath)){
                            $sqlVal = "('".$fileName."', '".$uploadDate."')";
                        }
                // Add into MySQL database
                if(!empty($sqlVal)) {



                    if($i==1){
                        $insert1 = $fileName;
                        }
                    
                    if($i==2){
                        $insert2 = $fileName;
                        }
                    
                    if($i==3){
                        $insert3 = $fileName;
                        }
                    
                    if($i==4){
                        $insert4 = $fileName;
                        }
                    
                    if($i==5){
                        $insert5 = $fileName;
                        }
                    

                }
            }
        }



            mysqli_query($conn,"INSERT INTO miseenvente (titre, description, categorie, image1, image2, image3, image4, image5, prix)
            VALUES ('$titre', '$description', '$categorie', '$insert1', '$insert2', '$insert3', '$insert4', '$insert5', '$prix');");




        




    }
    }
    header("Location: ../views/Dashboard/gestionannonces.php?choix=2&msg=$msg");
