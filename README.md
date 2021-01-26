# Webdoc Lannion

La V6 reprend l'ensemble des fichiers corrigés, y compris l'optimisation des images (aucune instruction n'a été suivie...).
Pour toute correction, c'est dans ces fichiers que ça se passe : ce sont beaucoup d'heures de travail pour tout corriger, harmoniser, optimiser.
Merci pour votre bonne collaboration !

<code>
Petites erreurs que vous commettez souvent :
< / p > et pas < p / >
manque souvent attribut alt aux images : < img src = " ../img/monimage.jpg "  alt =" Texte alternatif de description de l'image " / >
italique : < em > et pas < I >
  
Optimisation des images : 
- avec fond transparent = gif (plus léger), toutes les images à la même taille (il peut y avoir du bord perdu pour y arriver), important pour les personnages
- jpg : RVB, 72DPI, compression 75%
=> pas de PNG (trop lourd dans un souci d'optimisation)
</code>

## DEVELOPPEMENT

Pôle développement : voir check-list pour le développement (PDF ci-dessus), tout est bien ok ?
Dernières vérifications ; https://cards-dev.twitter.com/validator
Chaque page doit être vérifiée + clic sur le lien pour tester

Attention : quid des images (métadonnées, servent au partage sur les RS) à refaire pour les articles et les pages des personnages, dans un souci d'harmonie avec la communication sur les réseaux sociaux ?

L'idéal serait aussi de refaire les images des personnages avec un nommage en minuscules aylan.png, alix.png etc. Un peu plus grandes même, ça serait top car soucis de pixellisation sur les pages des persos.

Par ailleurs, je n'ai pas trouvé l'emplacement de l'image Vélo3 (renommée : velo3.jpg). Pour rappel : pas de majuscules, pas de caractères accentués, pas d'espaces, un nom de fichier qui fait sens, une compression à 75%, 72DPI, RVB et largeur max de 1200 pixels (optimiser une image = optimiser une page pour le chargement)

Il manque encore 2 fichiers :  404.php, favicons.php + sitemap.xml à généer + intégration des analytics

Voir quels sont les liens de partage conservés pour les RS utilisateurs (juste Twitter et FB ?)

Attention bis : il va encore falloire travailler le style, les genial.ly ont été placés dans un div (class : genial) et les illus dans les articles dans un div (class img-text) avec un div légende (class legende). Les réglages de l'affichage doivent se faire dans la feuille de style (new.css) : lorsque l'on monte une page web, il est important de séparer la structure et les contenus de l'interface (mise en page).

Carousels : ne sont pas légendés alors que Bootsrap offre plus de possibilités, y compris en termes de navigation, voir https://getbootstrap.com/docs/4.0/components/carousel/

Sports de riche : la capture écran n'est pas légendée et est de très mauvaise qualité, il faut la refaire sinon scraper le tableau et proposer un tableau en HTML plus propre (Bootstrap a même de chouettes classes pour la mise en page de tableaux)

Ne pas oublier de passer les pages terminées sur gtmetrix et pingdom tools pour s'assurer que les temps de chargement sont correct (en principe, le pôle conception s'est chargé des tests mais ne pas hésiter à les refaire car tous les contenus sont là désormais).

+ sur https://www.websitecarbon.com
+ html et css validator (W3C)

## EDITORIAL

Plusieurs soucis éditoriaux ont été relevés : 
- les personnages sont-ils sans genre car l'inclusif se trouve dans leurs descriptions ?
- incohérence entre la représentation d'Elio (par ailleurs, prénom masculin italien) et sa description : le personnage ne semble pas avoir l'âge de ce qu'il raconte + aucune mention de l'e-sport dans son parcours
- attention : souvent des redondances entre le titre, le chapeau et la légende de l'image (ex. puberté) or cela doit former une triangulation complémentaire
- aucun article ne comporte de bloc(s) de citation (blockquote), c'est dommage car cela permet de faire respirer le texte dont la mise en page est lourde (et donc, ne favorise pas une lecture conviviale)
- vérifier que toutes les images sont bien légendées

## CONCEPTION

Quid des parcours utilisateurs ? Il y a un goût d'inachevé dans tout ça. Quid également de la version mobile de la page d'accueil ?

Quid des résultats des tests ?

Sur le plan graphique, plusieurs corrections doivent être apportées : les textes centrés trop longs sont plus difficiles à lire sur un mobile, jamais de justificatios, on n'abuse pas des caractères en lettres capitales car cela donne un sentiment d'agression, les textes sont parfois trop petits pour être bien lisibles, les pages d'index des personnages sont plutôt flottantes. Et s'il faut laisser respirer une page, tout est dans l'équilibre : pas trop et pas trop peu non plus (cf pages d'articles). Ce n'est pas à moi que cela doit plaire : mais à vos utilisateurs. Travailler dans le respect des bonnes pratiques, nourries par des années de recherche et de développement, permet de se donner les meilleurs chances. Voir ci-dessous quelques ressources éclairantes :

https://www.business2community.com/web-design/10-graphic-design-rules-never-break-01935942

https://trydesignlab.com/blog/essential-visual-design-best-practices-beginners/

https://kinsta.com/blog/web-design-best-practices/

Par ailleurs, toutes les pages devront être testées sur responsinator.com pour vérifier qu'elles passent bien sur mobiles sans perte d'informations.

Bref, tout a bien avancé mais il y a encore de quoi faire ! Rendez-vous compte du challenge que vous avez relevé en si peu de temps !
