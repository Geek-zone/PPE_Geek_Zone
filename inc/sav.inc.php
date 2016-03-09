<html>
<head>
<meta charset="UTF-8">
<title>GEEK ZONE</title>
<link rel="stylesheet" type="text/css" media="screen" href="css/CSS.css" />
</head>
<body >
<br/><br/><br/>
<h1>Contacter le SAV :<a>  geekzone@gmail.com</a></h1>
<br/><br/><br/><br/>
<h1>R&eacuteclamations :</h1>
<a>


<form action="inc/send_email.inc.php" method="post">
    <p>
        <label for="civilite">Civilit&eacut :</label>
        <select id="civilite" name="civilite">
            <option 
                value="mr"
                <?php 
                    if (!isset($_POST['civilite']) || $_POST['civilite'] == 'mr')
                    {
                        echo ' selected="selected"';
                    }
                ?>
            >
                Monsieur
            </option>
            <option 
                value="mme"
                <?php 
                    if (isset($_POST['civilite']) && $_POST['civilite'] == 'mme')
                    {
                        echo ' selected="selected"';
                    }
                ?>
            >
                Madame
            </option>
            <option 
                value="mlle"
                <?php 
                    if (isset($_POST['civilite']) && $_POST['civilite'] == 'mlle')
                    {
                        echo ' selected="selected"';
                    }
                ?>
            >
                Mademoiselle
            </option>
        </select>
    </p>
    <p>
        <label for="nom">Nom/Pr&eacutnom :</label>
        <input type="text" id="nom" name="nom" 
        	value="<?php echo (isset($_POST['nom'])) ? $nom : '' ?>" 
        />
    </p>
    <p>
        <label for="email">E-mail :</label>
        <input type="text" id="email" name="email" 
        	value="<?php echo (isset($_POST['email'])) ? $expediteur : '' ?>"
        />
    </p>
    <p>
        <label for="sujet">Sujet :</label>
        <input type="text" id="sujet" name="sujet" 
        	value="<?php echo (isset($_POST['sujet'])) ? $sujet : '' ?>"
        />
    </p>
    <p>
        <label for="message">Message :</label>
        <textarea id="message" name="message" cols="40" rows="4">
			<?php echo (isset($_POST['message'])) ? $message : '' ?>
        </textarea>
    </p>
    <p>
        <input type="submit" name="envoye" value="Envoyer" />
    </p>
</form>







</a>
<br/><br/><br/><br/>
<h1>Aidez nous &agrave am&eacuteliorer notre site :</h1>

</body>
</html>
