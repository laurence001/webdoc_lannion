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
			<li id="nav_sasha"><a href= "sasha/index">Sasha</a></li>
			<li id="nav_charlie"><a href= "charlie/index">Charlie</a></li>
			<li id="nav_alix"><a href= "alix/index"> Alix</a></li>
			<li id="nav_elio"><a href= "elio/index" id="Elio">Elio</a></li>
			<li id="nav_aylan"><a href= "aylan/index">Aylan</a></li>
			<li class="separator"><a href= "apropos">A propos</a></li>
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
					J’ai 20 ans. Contrairement à beaucoup de mes amies, je n’ai pas arrêté le sport à mon adolescence. J’ai été agressée, mais mon club n’a rien fait. Je n’ai pas voulu tout arrêter, alors j’ai cherché un nouveau sport. J’ai rejoint un club de boxe féminine, en partie pour (re)gagner confiance en moi. 
				</p>
			</div>
			
			<div class="description" id="charlie">
				<h4>Charlie</h4>
				<p>
					J’ai fêté mes 70 ans cette année. J’ai eu un cancer il y a quelques années. Le sport m’a permis de m’en sortir et aujourd’hui je suis totalement guéri. Je profite de ma retraite pour me baigner dans les eaux bretonnes le plus souvent possible. J’y retrouve des habitué·e·s,  cela m’aide à rester en forme et à garder le moral.  
				</p>
			</div>
			
			<div class="description" id="alix">
				<h4>Alix</h4>
				<p>
					J’ai 40 ans cette année. J’ai toujours été passionnée par le vélo. Il y a quelques années, j’ai eu un accident, un événement très commun chez les cyclistes. Plus tard, j’ai cherché des alternatives à ma pratique sportive en me tournant vers les innovations électriques et les clubs handisports, malheureusement très peu développe·é·s dans ma région. 
				</p>
			</div>
			
			<div class="description" id="elio">
				<h4>Elio</h4>
				<p>
					Je suis élu·e au conseil municipal de ma commune depuis 15 ans. Chargé·e des sports, j’ai 56 ans et jai une pratique assidue de vélo et de natation. Je me bat tous les jours pour développer le budget des associations et clubs sportifs de ma ville.
Même si je reste passionné·e, je suis parfois lassé du manque de moyens financiers, d’infrastructures, et la baisse des adhérents. 

				</p>
			</div>
			
			<div class="description" id="aylan">
				<h4>Aylan</h4>
				<p>
					Cela fait 31 ans que j’habite dans un quartier populaire, j’y ai grandi. Sportif depuis mon plus jeune âge, je me rends désormais compte du sous-développement de la pratique sportive dans les quartiers. Une fracture économique avec le reste du pays, d’autant plus que certains sports “de riches” sont inaccessibles pour des gens comme moi.
 
				</p>
			</div>
			
			<div class="description" id="intro">
				<p>
				Saviez-vous que dans les Côtes d’Armor (Bretagne), un entraîneur accusé de violences sexuelles exerce toujours ? Ou que les clubs de sport souffrent de la crise sanitaire ? A travers 14 enquêtes, c’est ce qu’expliquent Sasha, Charlie, Aylan, Elio et Alix. 
Ces cinq personnages fictif·ve·s aux histoires de vie bien différentes ont un point commun : leur passion pour le sport. Retraité, Charlie est en bonne santé grâce à sa pratique sportive. De son côté,  Alix concourt en catégorie handisport depuis une grave chute de vélo. Sasha et Elio sont deux jeunes adultes : l’une a été victime de violence sexuelles dans son club ; l’autre vit dans un quartier populaire, en proie aux inégalités. Aylan est quant à lui conseiller municipal pour le sport dans un petit village de Bretagne.
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