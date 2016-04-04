<html>
<head>
<meta charset="UTF-8">
<title>GEEK ZONE</title>
<link rel="stylesheet" type="text/css" media="screen" href="../css/maquette.css" />
</head>

<body>

<ul id="nav">
	<li><a href="../maquette.php#s1">Accueil</a></li>
	<li><a href="../maquette.php#s2">Produits</a></li>
	<li><a href="../maquette.php#s3">Boutiques</a></li>
	<li><a href="../maquette.php#s4">Informations</a></li>
	<li><a href="../maquette.php#s5">Problemes/SAV</a></li>
</ul>


<br/><br/>

<div = "ville">
	<div class = "albertville">Valence</div>
<br/><br/>

<div class = "img_bout">
		<img src = "img/valence.png" width = "250px" height = "250px">
		<img src = "img/boutiques/boutique_valence.jpg" width = "250px" height = "250px">		
</div>

	<?php


$base = 'geekzone';
$hote = 'localhost';
$utilisateur = 'root';
$mdp = '';


try {
		$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
		$bdd = new PDO('mysql:host='.$hote.';dbname='.$base, $utilisateur, $mdp);
		$bdd ->exec('SET NAMES utf8');
		$reponse = $bdd -> query('SELECT * FROM boutique where id = 1');
		echo '<div class = "boutique">';
		echo '<table>';
		while ($donnees = $reponse -> fetch()) {
			echo '<tr>';
			echo '<td class = "c1"><a class = "boutique">Rue</a></td><td class = "c1">'.$donnees['rue'].'</td>';
			echo '</tr>';
			echo '<tr>';
			echo '<td class = "c1"><a class = "boutique">Code Postal</a></td><td class = "c1">'.$donnees['cp'].'</td>';
			echo '</tr>';
			echo '<tr>';
			echo '<td class = "c1"><a class = "boutique">Telephone</a></td><td class = "c1">'.$donnees['telephone'].'</td>';
			echo '</tr>';
			echo '<tr>';
			echo '<td class = "c1"><a class = "boutique">Horaires</a></td><td class = "c1">'.$donnees['horaires'].'</td>';
			echo '</tr>';
		}
		echo '</table>';
		echo '</div>';
		$reponse -> closeCursor();
	} catch (Exception $erreur) {
		die('Erreur : '. $erreur -> getMessage());
	}
?>
	
	
</div>


</body>
</html>
