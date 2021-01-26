<!doctype html>
<html class="no-js" lang="FR=fr">

<head>
  <meta charset="utf-8">
  <title>Les visages du sport</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php require_once('metadata_clubCOVID19.php'); ?>
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

<body id="art" class="aylan-cat inside article">

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


		<h1 id="main-title">Les clubs et la Covid-19, une relation qui s’essoufle</h1>

		<div id="details">
			<p>Par Maël Baude et Louis Floc’h</p>
			<p>Photos par Maël Baudé</p>
		</div>

		<?php include('../share.php'); ?>
		<div id="topimage" >
		<img src="../img/club1.jpeg"/>
		<div id="legende"> La Fédération Française de Rugby (FFR) est l’une des seules fédérations à avoir annoncé une augmentation du nombre de ses licenciés. 8 805 licenciés supplémentaires par rapport à l’année précédente (+4,73%). </div>
		</div>
			<div id="chapo" class="lead">En raison de la crise du coronavirus, le nombre de licencié·e·s a diminué de 9,4% en un an. Les restrictions sanitaires sont, principalement, les causes de cette baisse pour les clubs amateurs.</div>

			<article> 

				<?php require_once('content_CLUBCOVID19.php'); ?>

			</article>
			
			<?php include('../share.php'); ?>

		

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