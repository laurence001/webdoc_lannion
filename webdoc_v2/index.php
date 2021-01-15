<!doctype html>
<html class="no-js" lang="FR=fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Les visages du sport</title>
  <?php require_once('metadata.php'); ?>
  <?php require_once('favicons.php'); ?>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.2.1.min.js"><\/script>')</script> 
  <script src="https://kit.fontawesome.com/5d803a5a54.js" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/main.css">
  <meta name="theme-color" content="#fafafa">
</head>

<body id="homepage">
 
	<?php require_once('reseaux.php'); ?>

    <header id="home">
		<div class="container">
            <h2>Cinq parcours, des millions de voix</h2>
			<h1>LES VISAGES DU SPORT</h1>
		</div>
     </header>
	 
	 <nav class="navbar">
		<div id="close">
			<i class="fas fa-times"></i>
		</div>
		<ul class="menu">
			<li><a href= "sasha/index">Sasha</a></li>
			<li><a href= "charlie/index">Charlie</a></li>
			<li><a href= "alix/index"> Alix</a></li>
			<li><a href= "elio/index" id="Elio">Elio</a></li>
			<li><a href= "aylan/index">Aylan</a></li>
			<li class="separator"><a href= "apropros">A propos</a></li>
		</ul>
   	 </nav>
    
     <div class="container main-container" id="persos">
		<figure id="fig1">
			<a href="sasha/index"><img src="img/Sasha.png" alt="Sasha"></a>
		</figure>
			
		<figure id="fig2">
			<a href="charlie/index"><img src="img/Charlie.png" alt="Charlie"></a>
		</figure>
			
		<figure id="fig3">
			<a href="alix/index"><img src="img/Alix.png" alt="Alix"></a>
		</figure>
		  
		<figure id="fig4">
			<a href="elio/index"><img src="img/Elio.png" alt="Elio"></a>
		</figure>

		<figure id="fig5">
			<a href="aylan/index"><img src="img/Aylan.png" alt="Aylan"></a>
		</figure>
			
			<div class="description" id="sasha">
				<h4>Sasha</h4>
				<p>
					Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme 
				</p>
			</div>
			
			<div class="description" id="charlie">
				<h4>Charlie</h4>
				<p>
					Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme 
				</p>
			</div>
			
			<div class="description" id="alix">
				<h4>Alix</h4>
				<p>
					Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme 
				</p>
			</div>
			
			<div class="description" id="elio">
				<h4>Elio</h4>
				<p>
					Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme 
				</p>
			</div>
			
			<div class="description" id="aylan">
				<h4>Aylan</h4>
				<p>
					Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme 
				</p>
			</div>
	</div>
	
		<footer id="footer">
			<div class="container">
				J2 - InfoCom Lannion &copy; 2021
			</div>
		</footer>
	
		<script src="js/vendor/modernizr-3.11.2.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/home.js"></script>
    </body> 
</html>