<?php
session_start();


/*
 si la variable de session login n'existe pas cela siginifie que le visiteur
 n'a pas de session ouverte, il n'est donc pas logu� ni autoris� �
 acceder � l'espace membres
*/
if(!isset($_SESSION['login'])) {
	echo '<h1>Vous n\'�tes pas connect�, acc�s interdit !</h1> <meta http-equiv="refresh" content="0; URL=index.php"> ';
}
?>