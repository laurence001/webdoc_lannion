<!doctype html>
<html class="no-js" lang="FR=fr">

<head>
  <meta charset="utf-8">
  <title>Les visages du sport</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php require_once('metadata_article.php'); ?>
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

<body id="art" class="elio-cat inside article">
 
	<?php 
		require_once('../reseaux.php');
		require_once('navbar.php'); 
		
		//Variables partage RS
		$titre = "Les clubs et la Covid-19, une relation qui s’essoufle ";
		$url = "https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
	?>
	
	<div id="progression">
		<div id="barre"></div>
	</div>
  
    <div class="container main-container">
		
		<div class="col-12">
		
		
		<h1 id="main-title">E-sport, le faux vainqueur de la crise sanitaire 

 </h1>
        
		<div id="details">
			<p>Par Paul Louault et Germain Michelet</p>
			<p>Photos de Maël Baude (crédit)</p>
		</div>
		
		<?php include('../share.php'); ?>
		
		<div id="topimage">
			<img src="../img/boxe.jpg" />
			<div id="legende">Légende de la photo ici</div>
		</div>
            
			<div id="chapo" class="lead">L’e-sport grand gagnant du confinement ? En apparence, le secteur compétition du jeu vidéo semble avoir été l’un des rares à profiter de la crise sanitaire. Habituée au 100% “online”, la discipline a bénéficié d’une plus grande visibilité.  Néanmoins, l’annulation des événements physiques a paralysé une partie des financements de l’e-sport.</div>
            
			<article>
                
				<?php require_once('content_sportdecombat.php'); ?>
				
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