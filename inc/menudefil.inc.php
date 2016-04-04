<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>GeekZone</title>
<link rel="stylesheet" type = "text/css" media="screen" href="css/maquette.css"/>
</head>
<body>

<?php

	
function aleatoire () {
	

$choix=mt_rand(1, 18);



if ($choix==1){
	echo '<img src="img/cuisine/fridgebook-magnet-reseau-social-frigo.jpg" "width="700" height="310" >';

}
else if  ($choix==2){
	echo '<img src="img/cuisine/glacons-tetris.jpg" "width="700" height="310" >';

}
else if($choix==3){
	echo '<img src="img/cuisine/mug-pac-man-chaud-froid.jpg"  "width="700" height="310">';

}
else if($choix==4){
	echo '<img src="img/gadget/powerball.jpg" "width="700" height="310">';

}
else if($choix==5){
	echo '<img src="img/gadget/prise-chargeur-usb-robinet-1.jpg" "width="700" height="310" >';

}
else if($choix==6){
	echo '<img src="img/gadget/souris-optique-pixel-1.jpg" "width="700" height="310"  >';

}
else if($choix==7){
	echo '<img src="img/gadget/stealth-switch-1.jpg" "width="700" height="310">';

}

else if ($choix==8){
	echo '<img src="img/mode/bonnet-barbe.jpg"  "width="700" height="310">';

}

else if ($choix==9){
	echo '<img src="img/mode/t-shirt-coder.jpg"  "width="700" height="310">';

}

else if ($choix==10){
	echo '<img src="img/mode/t-shirt-detecteur-wifi.jpg" "width="700" height="310">';

}

else if ($choix==11){
	echo '<img src="img/mode/t-shirt-les-jeux-video-ont-ruine-ma-vie.jpg"  "width="700" height="310">';

}

else if ($choix==12){
	echo '<img src="img/portable/coque-iphone-4-decapsuleur.jpg"  "width="700" height="310">';

}

else if ($choix==13){
	echo '<img src="img/portable/manette-jeu-pour-ecran-tactile-istick-1.jpg"  "width="700" height="310">';

}
else if ($choix==14){
	echo '<img src="img/portable/ventilo-pour-iphone.jpg"  "width="700" height="310">';

}

else if ($choix==15){
	echo '<img src="img/USB/chauffe-tasse-biscuit-usb-1.jpg"  "width="700" height="310">';

}
else if ($choix==16){
	echo '<img src="img/USB/frigo-usb-1.jpg"  "width="700" height="310">';

}
else if ($choix==17){
	echo '<img src="img/USB/mini-aspirateur-usb.jpg"  "width="700" height="310">';

}
else if ($choix==18){
	echo '<img src="img/USB/ventilateur-lumineux-usb-1.jpg"  "width="700" height="310">';

}

}

?>











<section id="slideshow">

<div class="container">
<div class="c_slider"></div>
<div class="slider">
<figure>



</figure><!--
--><figure>
<?php for ($k = 0; $k < 10000; ++$k) {
	echo(aleatoire()); 
}
?>
				
			</figure>
		</div>
	</div>

	<span id="timeline"></span>
</section>
 
<span id="s1" class="sl_command sl_i"></span>
<span id="s1" class="sl_command sl_i"></span>
<span id="s1" class="sl_command sl_i"></span>
<span id="s1" class="sl_command sl_i"></span>








</body>
</html>






