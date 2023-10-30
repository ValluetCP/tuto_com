<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Test de l'âge de l'internaute</title>
</head>

<body>
<?php
if(isset($_POST['valider'])) {
	$dateNaissance = $_POST['dateNaissance'];
	if($dateNaissance == 0) {
		echo '<h1 align="center">Accès refusé !</h1>';
	} else {
		header('Location: acces.php');
	}
}
?>

<form method="post" action="">
<p align="center">
Votre date de naissance: 
<select name="dateNaissance">
<?php
$date = date('Y');
?>
	<option value="0">Je suis né après <?= $date-18; ?></option>
<?php
for($i=$date-18;$i>=$date-100;$i--) {
?>
	<option value="<?= $i; ?>"><?= $i; ?></option>
<?php
}
?>    
</select>
<input type="submit" name="valider" value="Valider" />
</p>
</form>

</body>
</html>
