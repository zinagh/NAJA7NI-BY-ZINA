<?php include "C://wamp64/www/SporTun/controller/ArticleC.php";?>
<head>
<title>SporTun</title>
<link rel="shortcut icon" href="assets/img/logo.ico">
<link rel="stylesheet" type="text/css" href="news.css">
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
<?php
		$text='';
		$usr = new articleC;
	$data = $usr->afficherarticle();
?>
<br><br>

		<div class="container1" id="s">
		<div class="news">
		<?php foreach ($data as $row) {
			      if ( $row['postCategory']=="JAVA") $path='java.jpg';
				  if ( $row['postCategory']=="PHP") $path='php.jpg';
				  if ( $row['postCategory']=="HTML") $path='html.jpg';
				  if ( $row['postCategory']=="JAVASCRIPT") $path='js.jpg';
				  if ( $row['postCategory']=="POO") $path='poo.jpg';
				  if ( $row['postCategory']=="PYTHON") $path='python.jpg';?>
				<div class="article small" >
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
				<?php }?>
		</div> 
		</div>
	<style>
	#s{
		margin-left: 20px;
	}
	</style>