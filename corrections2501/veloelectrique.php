<!doctype html>
<html class="no-js" lang="FR=fr">

<head>
  <meta charset="utf-8">
  <title>Les visages du sport</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php require_once('metadata_veloelectrique.php'); ?>
  <?php require_once('../favicons.php'); ?>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.2.1.min.js"><\/script>')</script> 
  <script src="https://kit.fontawesome.com/5d803a5a54.js" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&family=Pacifico&display=swap" rel="stylesheet"> 
  <link rel="stylesheet" href="../css/normalize.css">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/main.css">
  <link rel="stylesheet" href="../css/new.css">
</head>

<body id="art" class="alix-cat inside article">
 
	<?php 
		require_once('../reseaux.php');
		require_once('navbar.php'); 
		
		//Variables partage RS
		$titre = "Le vélo électrique, pas si “bobo”";
		$url = "https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
	?>
	
	<div id="progression">
		<div id="barre"></div>
	</div>
  
    <div class="container main-container">
		
		<div class="col-12">
		
		
		<h1 id="main-title">Le vélo électrique, pas si "bobo"</h1>
        
		<div id="details">
			<p>Par Koupaïa Rault et Evan Livenais</p>
			<p>Photo de Maël Baudé</p>
		</div>
		
		<?php include('../share.php'); ?>
		
		<div id="topimage">
			<img src="../img/veloelectrique.jpeg" />
			<div id="legende">Les vélos électriques défilent le long de la côte de granite rose.</div>
		</div>
            
			<div id="chapo" class="lead">Entre écologie et économie, le vélo électrique tente de se démocratiser dans nos villes. Afin de se débarrasser de la réputation “bobo” dont il souffre, de nombreuses démarches se mettent en place pour permettre à tous.tes de prendre la roue.</div>
            
			<article>
                
				<?php require_once('content_veloelectrique.php'); ?>
				
			</article>
			
			<?php include('../share.php'); ?>
			
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