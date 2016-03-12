<?php
/* Si le formulaire est envoy� alors on fait les traitements */
if (isset($_POST['envoye']))
{
    /* R�cup�ration des valeurs des champs du formulaire */
    if (get_magic_quotes_gpc())
    {
      $civilite		= stripslashes(trim($_POST['civilite']));
      $nom	     	= stripslashes(trim($_POST['nom']));
      $expediteur	= stripslashes(trim($_POST['email']));
      $sujet		= stripslashes(trim($_POST['sujet']));
      $message		= stripslashes(trim($_POST['message']));
    }
    else
    {
      $civilite		= trim($_POST['civilite']);
      $nom		    = trim($_POST['nom']);
      $expediteur	= trim($_POST['email']);
      $sujet		= trim($_POST['sujet']);
      $message		= trim($_POST['message']);
    }
 
    /* Expression r�guli�re permettant de v�rifier si le 
    * format d'une adresse e-mail est correct */
    $regex_mail = '/^[-+.\w]{1,64}@[-.\w]{1,64}\.[-.\w]{2,6}$/i';
 
    /* Expression r�guli�re permettant de v�rifier qu'aucun 
    * en-t�te n'est ins�r� dans nos champs */
    $regex_head = '/[\n\r]/';
 
    /* Si le formulaire n'est pas post� de notre site on renvoie 
    * vers la page d'accueil */
    if($_SERVER['HTTP_REFERER'] != 'http://localhost/PPE_Geek_Zone/maquette.php')
    {
      header('Location: http://localhost/PPE_Geek_Zone/maquette.php');
    }
    /* On v�rifie que tous les champs sont remplis */
    elseif (empty($civilite) 
           || empty($nom) 
           || empty($expediteur) 
           || empty($sujet) 
           || empty($message))
    {
      $alert = 'Tous les champs doivent �tre renseign�s';
    }
    /* On v�rifie que le format de l'e-mail est correct */
    elseif (!preg_match($regex_mail, $expediteur))
    {
      $alert = 'L\'adresse '.$expediteur.' n\'est pas valide';
    }
    /* On v�rifie qu'il n'y a aucun header dans les champs */
    elseif (preg_match($regex_head, $expediteur) 
            || preg_match($regex_head, $nom) 
            || preg_match($regex_head, $sujet))
    {
        $alert = 'En-t�tes interdites dans les champs du formulaire';
    }
    /* Si aucun probl�me et aucun cookie cr��, on construit le message et on envoie l'e-mail */
    elseif (!isset($_COOKIE['sent']))
    {
        /* Destinataire (votre adresse e-mail) */
        $to = 'philippe.perrot.pro@gmail.com';
 
        /* Construction du message */
        $msg  = 'Bonjour,'."\r\n\r\n";
        $msg .= 'Ce mail a �t� envoy� depuis monsite.com par '.$civilite.' '.$nom."\r\n\r\n";
        $msg .= 'Voici le message qui vous est adress� :'."\r\n";
        $msg .= '***************************'."\r\n";
        $msg .= $message."\r\n";
        $msg .= '***************************'."\r\n";
 
        /* En-t�tes de l'e-mail */
        $headers = 'From: '.$nom.' <'.$expediteur.'>'."\r\n\r\n";
 
        /* Envoi de l'e-mail */
        if (mail($to, $sujet, $msg, $headers))
        {
            $alert = 'E-mail envoy� avec succ�s';
 
            /* On cr�� un cookie de courte dur�e (ici 120 secondes) pour �viter de 
            * renvoyer un mail en rafraichissant la page */
            setcookie("sent", "1", time() + 30);
 
            /* On d�truit la variable $_POST */
            unset($_POST);
        }
        else
        {
            $alert = 'Erreur d\'envoi de l\'e-mail';
        }
 
    }
    /* Cas o� le cookie est cr�� et que la page est rafraichie, on d�truit la variable $_POST */
    else
    {
        unset($_POST);
    }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="fr">
<head>
    <title>GeekZone</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>
<body>
 
<?php
if (!empty($alert))
{
    echo '<p style="color:red">'.$alert.'</p>';
}
?>