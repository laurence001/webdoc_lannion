<!doctype html>
<html class="no-js" lang="FR=fr">

<head>
  <meta charset="utf-8">
  <title>Les visages du sport</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php require_once('metadata_velo.php'); ?>
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

<body id="art" class="charlie-cat inside article">
 
	<?php 
		require_once('../reseaux.php');
		require_once('navbar.php'); 
		
		//Variables partage RS
		$titre = "Le handisport, éternel oublié";
		$url = "https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
	?>
	
	<div id="progression">
		<div id="barre"></div>
	</div>
  
    <div class="container main-container">
	
		<div class="col-12">
		
		
		<h1 id="main-title">Vélo et auto. Des relations trop dangereuses </h1>
        
		<div id="details">
			<p>Par Maxime Moulin et Fabien Briand</p>
			<p>Photo d’Anthony Beaufils </p>
		</div>
		
		<?php include('../share.php'); ?>
		
		<div id="topimage">
			<img src="../img/velopuzzle.jpeg" /> 
			<div id="legende">Le vélo d’Anthony Beaufils après avoir été percuté par une voiture.</div>
		</div>
            
			<p><div id="chapo" class="lead">Durant l’été 2020, 1 566 cyclistes ont été accidenté·e·s. Toutefois, malgré les campagnes de sensibilisation et les aménagements routiers, les accidents de la circulation sont en hausse. Durant le seul mois de septembre, 37 cyclistes ont été tué·e·s, le chiffre le plus élevé depuis dix ans.</p> 
</div>
            
			<article>
               <?php include('../share.php'); ?> 
				<?php require_once('content_velo.php'); ?> 
				
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