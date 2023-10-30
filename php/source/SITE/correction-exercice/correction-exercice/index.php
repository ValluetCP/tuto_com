<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Mon document</title>
</head>

<body>

<?php
if(isset($_POST['valider'])) { // Si l'internaute a cliqué sur le bouton Valider - DEBUT
	$prenom = $_POST['prenom'];
	$age    = $_POST['age'];
	if((!empty($prenom)) AND (!empty($age))) { // Test de $_POST['prenom'] et $_POST['age'] - DEBUT
		$age    = ceil($age); // On arrondit $age à l'entier supérieur
		if((is_numeric($age)) AND ($age > 0)) { // Si $age est numérique ET positif - DEBUT
			echo '<p align="center">Bonjour '.$prenom.', vous avez '.$age.' ans.</p>';
		} else { // Si $age est numérique ET positif - SUITE
			echo'<h2 align="center">Merci d\'entrer un age correct</h2>';
		} // Si $age est numérique ET positif - FIN
		
	} else { // Test de $_POST['prenom'] et $_POST['age'] - SUITE
		echo '<h2 align="center">Erreur: veuillez remplir tous les champs !</h2>';
	} // Test de $_POST['prenom'] et $_POST['age'] - FIN
}  // Si l'internaute a cliqué sur le bouton Valider - FIN
?>

<form method="post" action="">
	<p align="center">
    <input type="text" name="prenom" placeholder="Votre prénom" value="<?php if(!empty($prenom)) { echo $prenom; } ?>" />
    </p>
    <p align="center">
    <input type="text" name="age" placeholder="Votre age" value="<?php if(!empty($age)) { echo $age; } ?>" />
    </p>
    <p align="center">
    <input type="submit" name="valider" value="Valider" />
    </p>
</form>


</body>
</html>