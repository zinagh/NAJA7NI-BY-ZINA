<?php 

include("includes/bootstrap_cdn_inc.php");
include("class/users.php");
include 'DBconnection.php';
$res=new users;
//print_r($_POST);
$answers=$res->show_result($_POST);    //here answers becomes an array because show_result() method returns an array

 ?>


<div class="container mt-5">
	<center><div class="col-md-6">
 <!-- <center>
 	<h2>right answer : <?php echo $answers['right'];?></h2>
 	<h2>wrong answer : <?php echo $answers['wrong'];?></h2>
 	<h2>not attempted : <?php echo $answers['not_attempted'];?></h2>

 </center> -->
 <?php 
 		$total_ques=$answers['right']+$answers['wrong']+$answers['not_attempted'];
 		$attempted_ques=$total_ques-$answers['not_attempted'];
 		$percentage=($answers['right']*100)/$total_ques;
 		$message="";
 		if ($percentage<=100 and $percentage>=70) 
 		{
 			$message="Congratulation you have scored : ";
 		}
 		elseif ($percentage<=69 and $percentage>=50) 
 		{
 			$message="You can do better, try again. you scored : ";
 		}
 		else
 		{
 			$message="Sorry you are failed, try again you scored : ";
 		}



  ?>
<h2>Your Quiz Result</h2><br>
 <table class="table table-bordered table-active">
 	
  <thead>
    <tr>
      <th scope="col">Total No.of questions</th>
      <th scope="col"><?php echo $total_ques; ?></th>
     
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Attempted Questions</th>
      <td><?php echo $attempted_ques; ?></td>
     
    </tr>
    <tr>
      <th scope="row">Right Questions</th>
      <td> <?php echo $answers['right'];?></td>
      
    </tr>
    <tr>
      <th scope="row">Wrong Answers</th>
      <td><?php echo $answers['wrong'];?></td>
  
    </tr>

      <tr>
      <th scope="row">Not Attempted</th>
      <td><?php echo $answers['not_attempted'];?></td>
  
    </tr>
  </tbody>

 

</table>
 <div class="card-header mt-5 bg-danger text-light">
  	<?php echo $message; ?> <b><?php echo $percentage.' %'; ?></b>
    <?php
    $sql='SELECT id from participants ORDER BY id DESC LIMIT 1;';
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$compte=$row['id'];
$error = "";
if ($compte)
{
  $res = mysqli_real_escape_string($conn , $compte);
      $query = "UPDATE participants
           SET score = '$percentage'
           WHERE id = '$compte' ;";
      $run = mysqli_query($conn, $query) or die(mysqli_error($conn)) ;
     
}?>

  </div>

  <button type="button" class="btn btn-primary mt-3"><a href="quiz.php" style="text-decoration: none; color: white;">Back</a></button>
 <!--   <a href="quizhome.php" class="btn btn-success"> Back </a> -->

</div></center>
</div>
<div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
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
               
            </div>
            <hr>
            <p class="copyright">Copyright 2022 - NAJA7NI</p>
        </div>
    </div>
    </div>