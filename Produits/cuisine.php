<html>
<head>
<meta charset="ISO-8859-1">
<title>GEEK ZONE</title>
<link rel="stylesheet" type="text/css" media="screen" href="../CSS/maquette.css" />
</head>
<body class="cuisine" >

<ul id="nav">
		<li><a href="../maquette.php#s1">Accueil</a></li>
		<li><a href="../maquette.php#s2">Produits</a></li>
		<li><a href="../maquette.php#s3">Boutiques</a></li>
		<li><a href="../maquette.php#s4">Informations</a></li>
		<li><a href="../maquette.php#s5">Problemes/SAV</a></li>
	</ul>

<br/><br/><br/>






<?php 
echo '<h1 class="cuisine">Cuisine</h1>';

include_once '../param/base.php';
echo '<link rel="stylesheet" type="text/css" media="screen" href="../CSS/maquette.css" />';
try {
	$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
	$bdd=new PDO('mysql:host='.$hote.';dbname='.$base,$utilisateur);
	$bdd ->exec('SET NAME utf8');
	$reponse=$bdd->query('SELECT * FROM produit WHERE categorie="1" ');
	$nb=$reponse->rowCount();
	echo '<table class="cuisine">';
	
	echo '<td></td>';
	echo '<td class = "c4">Nom</td>';
	echo '<td class = "c4">Description</td>';
	echo '<td class = "c4">Detail</td>';
	echo '<td class = "c4">Prix</td>';
	while($donnees = $reponse ->fetch()){
		echo'<tr>';
		echo'<td class="c2"><img src="../img/cuisine/'.$donnees['image'].'"height="200" width="200" /></td>';
		echo'<td class="c3">'.$donnees['nom'].'</td>';
		echo'<td class="c2">'.$donnees['description'].'</td>';
		echo'<td class="c2">'.$donnees['detail'].'</td>';
		echo'<td class="c3">'.$donnees['prix'].'€</td>';
		echo'</tr>';
	}
	echo'</table>';
	$reponse->closeCursor();
	}
	catch (Exception $erreur){
		die('Erreur:'. $erreur->getMessage());
	}
