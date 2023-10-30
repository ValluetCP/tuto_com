<?php
require('fonction.php');
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Fonction de création de champs de formulaire</title>
<link rel="stylesheet" href="style.css" />
</head>

<body>

<div id="site">
<form method="post" action="">
	<?php
	champFormulaire('champ1','text','nom','Votre nom');
	champFormulaire('champ1','text','prenom','Votre prénom');
	champFormulaire('champ1','email','email','Votre email');
	champFormulaire('champ1','number','age','Votre age');
	?>
    <input type="submit" name="valider" value="Valider" />
</form>
<br /><br /><br />
<a href="formulaire-2.php">Page suivante</a>
</div>
</body>
</html>