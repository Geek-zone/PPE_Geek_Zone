<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>GEEK ZONE</title>
<link rel="stylesheet" type="text/css" media="screen" href="css/maquette.css" />
</head>
<body >

<table>
<tr>
<td><p class="cuisine"><a class="lien"  href="Produits/cuisine.php">Cuisine</a><br/>  <!-- <img src="img/cuisine/fridgebook-magnet-reseau-social-frigo.jpg" height="150" width="150"> --></p>
<p class="cuisine" ><a class="lien"  href="Produits/topvente.php">Top Ventes</a></p>
<p class="cuisine" ><a class="lien"  href="Produits/gadget.php">Gadgets</a></p>
<p class="mode"><a class="lien"  href="Produits/mode.php">Mode</a></p>
<p class="mode" ><a class="lien"  href="Produits/portable.php">Portable</a></p>
<p class="mode"><a class="lien"  href="Produits/usb.php">USB</a></p></td>


<td>
<marquee BEHAVIOR="scroll" height="500" scrolldelay="3" scrollamount="3" onmouseout="this.start()" onmouseover="this.stop()" direction="down">
<p><?php include 'inc/aleatoire.php' ?>
</p></marquee>
</td>
</tr>

</table>
</body>
</html>
