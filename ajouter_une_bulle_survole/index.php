<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Plateforme de test</title>

    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- site : fontsquirrel.com -->
   

  	<link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css">
	  <link rel="stylesheet" href="lightbox.css">
	
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	  <script type="text/javascript" src="js/lightbox.js"></script>

    <!-- plugin pour changer le style des légendes "title"-->
	  <script type="text/javascript" src="js/tooltipsy.js"></script>
    <script type="text/javascript" src="js/site.js"></script>
    
  </head>

  <body>

    <div class="container">

      <div class="content">
        <div class="page-header">
          <h1>Jquery <small>Créer un effet de survol pour un portfolio</small></h1>
        </div>
		
		<!-- Pour cibler la liste -->
		<ul id="portfolio">
      <!-- boucle pour afficher les images -->
		<?php for ($i=1; $i<9; $i++) { ?>
		
      <?php
          $catname[1] = 'Motion Design';
          $catname[2] = 'Webdesign';
          $catname[3] = 'Graphic Design';
          // Pour choisir l'un de ces 3 pour les afficher aléatoirement 
          $choix = mt_rand(1,3);
      ?>
		
			<li>
        <!-- lien vers la 1ère image -->
				<a href="#"><img src="img/image<?php echo $i; ?>.jpg" /></a>
        <!-- Le blog qui arrive au survol -->
				<div class="detail">

          <!-- <?php echo $i; ?> : Pour afficher un numéro pour chaque bloc par auto incrémentation -->
          <h2><a href="#">Creation number <?php echo $i; ?></a></h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tortor felis, vulputate quis egestas nec, ullamcorper eu neque...</p>

          <!-- Pour afficher les catégories de manière aléatoire -->
					<a title="Voir tous les travaux de <?php echo $catname[$choix]; ?>" class="bulle" id="cat" href="#"><?php echo $catname[$choix]; ?></a>

					<a title="En savoir plus" class="icone bulle" id="plus" href="#">En savoir +</a>

          <!-- l'image de la lightBox -->
					<a title="Zoomer" class="icone bulle" id="zoom" href="img/big.jpg">Zoom</a>

        </div>
			</li>
		<?php } ?>
		</ul>
      <!-- pour éviter que la div container ne s'arrête avant -->
		<div class="clear"></div>
		
      </div>

      <footer>
        <p>&copy;2011 Plateforme de test</p>
      </footer>

    </div> <!-- /container -->

  </body>
</html>