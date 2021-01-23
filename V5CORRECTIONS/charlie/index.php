<!doctype html>
<html class="no-js" lang="FR=fr">

<head>
  <meta charset="utf-8">
  <title>Les visages du sport</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php require_once('metadata.php'); ?>
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
<body id="cat" class="charlie-cat inside cat">
 
	<?php 
		require_once('../reseaux.php');
		require_once('navbar.php'); 
	?>
    
    <div class="container main-container">
		<div class="row"> 
            
			<div class="col col-lg-2 col-md-2 col-sm-2 col-6" id="catperso"> 
              <img src="../img/Charlie.png" alt="charlie"> 
            </div>
            
            <div class="col col-lg-4 col-md-4 col-sm-6 col-6">
               <div class="cadre">    
					<h4>Charlie</h4>
					<p> J’ai fêté mes 70 ans cette année. J’ai eu un cancer il y a quelques années. Le sport m’a permis de m’en sortir et aujourd’hui je suis totalement guéri. Je profite de ma retraite pour me baigner dans les eaux bretonnes le plus souvent possible. J’y retrouve des habitué·e·s,  cela m’aide à rester en forme et à garder le moral.</p>
				</div>
				<div class="resp">
					<div class="center">
						<img src="../img/charlie.png" alt="charlie"> 
					</div>
				</div>
            </div>
        
            <div class="col col-lg-6 col-md-6 col-sm-12 col-12" id="categories">
              
			  <section>
				<h2><a href="cancer.php">Le sport, un remède de taille contre le cancer</a></h2> 
				<div class="chapo">
					En 2019, 382 000 nouveaux cas de cancer ont été enregistrés. Pour prévenir la maladie ou améliorer son traitement, un décret adopté en 2016 permet aux médecins de prescrire de l'exercice aux malades. Mais une certaine réticence subsiste, tant du côté des patients que du milieu médical. 
				</div> 
			  </section>

			  <section>
				<h2><a href="seniors.php">Les ravages de l’inactivité chez les seniors  </a></h2>
				<div class="chapo">  
				Le confinement a forcé de nombreux·se·s seniors à arrêter le sport.  Cette absence d’activité pourrait avoir été sous-estimée, à la fois sur leur santé mentale et physique. Dans les EHPAD, certain⸱e⸱s pensionnaires « ont perdu l’habitude de  marcher ».
				</div>
			   </section>

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