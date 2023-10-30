<?php
session_start();
if( (isset($_SESSION['prenom'])) || (isset($_SESSION['age'])) ) {
	$prenom = $_SESSION['prenom'];
	$age    = $_SESSION['age'];
} else {
	$prenom = '';
	$age = '';
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Formation Php</title>
</head>

<body>

<form action="traitement.php" method="post">
<p align="center">
<input type="text" name="prenom" placeholder="Votre prénom" value="<?= $prenom; ?>" /> <br />
<input type="text" name="age" placeholder="Votre âge" value="<?= $age; ?>" /> <br />
<input type="submit" value="Valider" />
</p>
</form>

</body>
</html>