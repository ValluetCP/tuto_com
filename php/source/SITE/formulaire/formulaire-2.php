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
		champFormulaire('champ2','email','email','Entrez votre email');
		?>
        <input type="submit" name="enter" value="Ok" />
    </form>
<br /><br /><br />
<a href="formulaire.php">Page précédente</a>
</div>
</body>
</html>