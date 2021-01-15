<!doctype html>
<html class="no-js" lang="FR=fr">

<head>
  <meta charset="utf-8">
  <title>Les visages du sport</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php require_once('metadata_sportsdecombat.php'); ?>
  <?php require_once('../favicons.php'); ?>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.2.1.min.js"><\/script>')</script> 
  <script src="https://kit.fontawesome.com/5d803a5a54.js" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&family=Pacifico&display=swap" rel="stylesheet"> 
  <link rel="stylesheet" href="../css/normalize.css">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/main.css">
</head>

<body id="cat" class="sasha-cat inside article">
 
	<?php 
		require_once('../reseaux.php');
		require_once('navbar.php'); 
		
		//Variables partage RS
		$titre = "Les femmes pratiquent de plus en plus de sports de combat";
		$url = "https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
	?>
	
	<div id="progression">
		<div id="barre"></div>
	</div>
  
    <div class="container main-container">
		<div class="row">	
		
		<div class="col-lg-8 col-md-8 col-sm-12 col-12">
		
		
		<h1 id="main-title">Les femmes pratiquent de plus en plus de sports de combat</h1>
        
		<div id="details">
			<p>Noms Auteurs</p>
			<p>Images, infographies etc. (crédit)</p>
		</div>
		
		<?php include('../share.php'); ?>
		
		<div id="topimage">
			<img src="../img/boxe.jpg" />
			<div id="legende">Légende de la photo ici</div>
		</div>
            
			<div id="chapo" class="lead">Chapô</div>
            
			<article>
                
				<?php require_once('content_sportsdecombat.php'); ?>
				
			</article>
			
			<?php include('../share.php'); ?>
			
		</div>
		
		<div class="col-lg-4 col-md-4 col-sm-12 col-12" id="sidebar">
		
	
			<div class="box sb">
				<a href="">À Lannion, la parole des sportifs se libère</a>
			</div>
			<div class="box sb">
				<a href="">Les clubs de sport Lannionnais font barrage aux femmes</a>
			</div>
			<div class="box sb">
				<a href="">La puberté, un coup d'arrêt dans les pratiques des adolescentes</a>
			</div>
			
			<div class="center">
				<img src="../img/Sasha.png" alt="Sasha"> 
				<span class="sign">Sasha</span>
			</div>
		</div>
		
	</div>
	</div>
	
		<footer id="footer">
			<div class="container">
				J2 - InfoCom Lannion &copy; 2021
			</div>
		</footer>
	
		<script src="../js/vendor/modernizr-3.11.2.min.js"></script>
		<script src="../js/bootstrap.min.js"></script>
		<script src="../js/main.js"></script>
    </body> 
</html>