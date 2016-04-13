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
	<br/><br/>
<h1 class="cuisine2">Top ventes</h1>


<?php
echo '<table class="cuisine">';
echo'<tr>';
alleatoire();

function alleatoire(){
$choix=mt_rand(1,18);
$dec="";
$cat="";


if ($choix==1){
	
	     $dec="Magnets fridgebook";

}
else if  ($choix==2){
	
	$dec="Glaçons Tetris";

}
else if($choix==3){
	
	$dec="Mug Pac-Man chaud/froid";
		

}
else if($choix==4){
	
			$dec="Powerball";
}
else if($choix==5){
	
		$dec="Prise chargeur USB robinet";
}
else if($choix==6){
	
	$dec="Souris optique pixel";
}
else if($choix==7){
	
	$dec="Stealth switch";
}


else if ($choix==8){
	
	$dec="Bonnet barbe";
}

else if ($choix==9){
	
		$dec="Tee shirt coder";
}

else if ($choix==10){
	
	$dec="Tee shirt détecteur wifi";
}

else if ($choix==11){
	
	$dec="Tee shirt jeux vidéo";
}

else if ($choix==12){
	
	$dec="Coque Iphone 4 décapsuleur";
}

else if ($choix==13){
	
	$dec="Manette jeu pour écran tactile Istick";
}
else if ($choix==14){
	
	$dec="Mini ventilateur pour Iphone";
}

else if ($choix==15){
	
	$dec="Chauffe-tasse biscuit";
}
else if ($choix==16){
	
	$dec="Frigo";
}
else if ($choix==17){
	
	$dec="Mini aspirateur";
}
else if ($choix==18){

	$dec="Ventilateur lumineux";
}

echo'<tr>';
include '../param/base.php';
echo '<link rel="stylesheet" type="text/css" media="screen" href="../CSS/maquette.css" />';

try {
	$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
	$bdd=new PDO('mysql:host='.$hote.';dbname='.$base,$utilisateur);
	$bdd ->exec('SET NAME utf8');
	$reponse=$bdd->prepare('SELECT * FROM produit WHERE nom= :nom '  );
	$reponse->execute(array('nom'=>$dec));

	$nb=$reponse->rowCount();
	echo '<table class="cuisine" >';
	echo '<td></td>';
	echo '<td class = "c4">Nom</td>';
	echo '<td class = "c4">Description</td>';
	echo '<td class = "c4">Detail</td>';
	echo '<td class = "c4">Prix</td>';
	while($donnees = $reponse ->fetch()){
		echo'<tr>';
		if ($donnees['categorie']==1){
			echo'<td class="c2"><img src="../img/cuisine/'.$donnees['image'].'"height="200" width="200" /></td>';
		}
		else if ($donnees['categorie']==2){

			echo'<td class="c2"><img src="../img/gadget/'.$donnees['image'].'"height="200" width="200" /></td>';
		}
			

			

		else if($donnees['categorie']==3){

			echo'<td class="c2"><img src="../img/mode/'.$donnees['image'].'"height="200" width="200" /></td>';
		}
		else if($donnees['categorie']==4){


			echo'<td class="c2"><img src="../img/portable/'.$donnees['image'].'"height="200" width="200" /></td>';
		}
		else if ($donnees['categorie']==5){
			echo'<td class="c2"><img src="../img/USB/'.$donnees['image'].'"height="200" width="200" /></td>';
		}


		echo'<td class="c3">'.$donnees['nom'].'</td>';
		echo'<td class="c2">'.$donnees['description'].'</td>';
		echo'<td class="c2">'.$donnees['detail'].'</td>';
		echo'<td class="c3">'.$donnees['prix'].'€</td>';
		echo'</tr>';
	}
	
	$reponse->closeCursor();
}
catch (Exception $erreur){
	die('Erreur:'. $erreur->getMessage());
}


}






$choix=mt_rand(1,18);

//if ($choix==$choix2){
	//$choix2=$choix2+1;

if ($choix==18){
	$dec="Magnets fridgebook";
	$cat=1;
}
else if  ($choix==17){
	$dec="Glaçons Tetris";
	$cat=1;
}
else if($choix==16){
	$dec="Mug Pac-Man chaud/froid";
	$cat=1;
	

}
else if($choix==15){
	$dec="Powerball";
	$cat=2;

}
else if($choix==14){
	$dec="Prise chargeur USB robinet";
	$cat=2;
}
else if($choix==13){
	$dec="Souris optique pixel";
	$cat=2;

}
else if($choix==12){
	$dec="Stealth switch";
	$cat=2;
}


else if ($choix==11){
	$dec="Bonnet barbe";
	$cat=3;
}

else if ($choix==10){
	$dec="Tee shirt coder";
	$cat=3;

}

else if ($choix==9){
	$dec="Tee shirt détecteur wifi";
	$cat=3;

}

else if ($choix==8){
	$dec="Tee shirt jeux vidéo";
	$cat=3;

}

else if ($choix==7){
	$dec="Coque Iphone 4 décapsuleur";
	$cat=4;

}

else if ($choix==6){
	$dec="Manette jeu pour écran tactile Istick";
	$cat=4;

}
else if ($choix==5){

	$dec="Mini ventilateur pour Iphone";
	$cat=4;
}

else if ($choix==4){
	$dec="Chauffe-tasse biscuit";
	$cat=5;

}
else if ($choix==3){
	
	$dec="Frigo";
	$cat=5;
}
else if ($choix==2){
	$dec="Mini aspirateur";
	$cat=5;

}
else if ($choix==1){
	$dec="Ventilateur lumineux";
	$cat=5;

}


include '../param/base.php';
echo '<link rel="stylesheet" type="text/css" media="screen" href="../CSS/maquette.css" />';

try {
	$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
	$bdd=new PDO('mysql:host='.$hote.';dbname='.$base,$utilisateur);
	$bdd ->exec('SET NAME utf8');
	$reponse=$bdd->prepare('SELECT * FROM produit WHERE nom= :nom '  );
	$reponse->execute(array('nom'=>$dec));
	
	$nb=$reponse->rowCount();
	
	while($donnees = $reponse ->fetch()){
		echo'<tr>';
		if ($donnees['categorie']==1){
			
			echo'<td class="c2"><img src="../img/cuisine/'.$donnees['image'].'"height="200" width="200" /></td>';
		}
		else if ($donnees['categorie']==2){
			
			echo'<td class="c2"><img src="../img/gadget/'.$donnees['image'].'"height="200" width="200" /></td>';
		}
			
		
			
		
		else if($donnees['categorie']==3){
		
			echo'<td class="c2"><img src="../img/mode/'.$donnees['image'].'"height="200" width="200" /></td>';
		}
		else if($donnees['categorie']==4){
			
			
			echo'<td class="c2"><img src="../img/portable/'.$donnees['image'].'"height="200" width="200" /></td>';
		}
		else if ($donnees['categorie']==5){
			echo'<td class="c2"><img src="../img/USB/'.$donnees['image'].'"height="200" width="200" /></td>';
		}
		
		
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