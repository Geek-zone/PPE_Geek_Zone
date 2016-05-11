<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>GeekZone</title>
<link rel="stylesheet" type = "text/css" media="screen" href="css/maquette.css"/>
</head>

<form method="post" action="">

<?php include ('verif.inc.php') ; ?>

    <legend>S'inscrire sur le site</legend>

    <div class="form-group">
      <label class="col-lg-2 control-label">Login</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="login" placeholder="Login">
      </div>
    </div><br/><br/><br/>

    <div class="form-group">
      <label class="col-lg-2 control-label">Mot de passe</label>
      <div class="col-lg-10">
        <input type="password" class="form-control" name="password" placeholder="Mot de passe">
      </div>
    </div>

<br/><br/><center><button type="submit" name="submit" class="btn btn-primary">S'Inscrire</button></center>
</form>

<?php
//Connexion à la BDD
  try
  {
  
   $bdd = new PDO ('mysql:host=localhost;dbname=nomdelabase', 'login', 'password');
  
  }
  
  catch(Exception $e)
  {
   die('Erreur :'.$e->getMessage());
  }
  
    if(ISSET($_POST['submit']))
{


//On créer les variables
$login =   $_POST['login'];
$password = $_POST['password'];
$password = hash("sha256", $password);




$req = $bdd->prepare('INSERT INTO utilisateurs(login, password) VALUES (:login, :password)');


$req->execute(array("login" => $login, "password" => $password));


if(!empty($login) && !empty($password))
{


}else{
?>


<b>Pseudo ou MDP vide !</b>


<?php
}


if(empty($login) && empty($password))
{


}else{


session_start();
$_SESSION['login'] = $_POST['login'];
header('Location: dashboard');


}


}
   
   ?>
   
  <?php
//Connexion à la BDD
  try
  {
  
   $bdd = new PDO ('mysql:host=localhost;dbname=geekzone', 'root', '');
  
  }
  
  catch(Exception $e)
  {
   die('Erreur :'.$e->getMessage());
  }


//Et ici aussi pour le lien de redirection une fois que la SESSION à démarrée :


 session_start();
$_SESSION['login'] = $_POST['login'];
header('Location: http://localhost/PPE_Geek_Zone/maquette.php#s1');
        		
        		