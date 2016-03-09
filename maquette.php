<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>GeekZone</title>
<link rel="stylesheet" type = "text/css" media="screen" href="css/maquette.css"/>
</head>
<body >
	
	
	
	<!-- éléments cachés pour jouer avec :target -->
<span id="s1"></span>
<span id="s2"></span>
<span id="s3"></span>
<span id="s4"></span>
<span id="s5"></span>
 
<!-- Le gros conteneur qui va glisser -->
<div id="wrap">
 
	<!-- La navigation -->
	<ul id="nav">
		<li><a href="#s1">Accueil</a></li>
		<li><a href="#s2">Produits</a></li>
		<li><a href="#s3">Boutiques</a></li>
		<li><a href="#s4">Informations</a></li>
		<li><a href="#s5">Problemes/SAV</a></li>
	</ul>

	<!-- La slide 1 -->
	<div id="slide1"> 
		<div class="slide_inside">
			<!-- Le logo -->
			<div class = "bulle"><img src="img/bulle.png" id="" alt="GeekZone"></div>
			<h1 class = "titre">GeekZone</h1>
			
		</div> <!-- /.slide_inside-->	
	
	</div> <!-- /#slide1 -->
 
	<!-- La slide 2 -->
	<div id="slide2">
	
	
		<div class="slide_inside">
			<!-- Les deux éléments en 1er plan -->
			<!-- Mettez ici les images que vous voulez  :)  --> 
			<img src="img/clone.png" id="clone" alt="">
			<h2>Produits</h2>
			<?php include 'inc/produits.inc.php';?>
			<p><img src="img/clone.png" id="clone" alt=""></p>
		</div> <!-- /.slide_inside-->
		     	
	</div> <!-- /#slide2 -->
 	
	<!-- La slide 3 -->
	<div id="slide3">
		<div class="slide_inside">			
			<h2>Boutiques</h2>	
			<p><img src="img/mario.png" id="mario" alt=""></p>
			 <?php include 'inc/boutique.inc.php';?>		
		</div> <!-- /.slide_inside-->
		
	</div> <!--  /#slide3 -->
	
	<!-- La slide 4 -->
	<div id="slide4">
		
		<div class="slide_inside">			
			<h2>Informations</h2>
			<p><img src="img/giphy.gif" id="reptincel" alt=""></p>	
			<?php include 'inc/info.inc.php';?>	
		</div> <!-- /.slide_inside-->
	    
	</div> <!--  /#slide4 -->
	
	<!-- La slide 5 -->
	<div id="slide5">
		<div class="slide_inside">			
			<h2>Probleme/SAV</h2>
			<p><img src="img/goku.png" id="goku" alt=""></p>
			<?php include 'inc/sav.inc.php';?>			
		</div> <!-- /.slide_inside-->	

	</div> <!--  /#slide5 -->
	 	
</div>
</body>
</html>