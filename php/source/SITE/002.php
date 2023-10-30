<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Php :: Les tableaux array()</title>
<style>
.box {
	width: 400px;
	margin: 150px auto;
	font-family: arial;
	font-size: 15px;
	border: 1px solid #eaeaea;
	box-shadow: 2px 2px #ccc;
	padding: 15px;
}
</style>
</head>

<body>

<div class="box">
<?php
if(isset($_POST['valider'])) {
  if( (!empty($_POST['prenom'])) || (!empty($_POST['nom'])) || (!empty($_POST['email'])) || (!empty($_POST['ville'])) ) {	
	$prenom = $_POST['prenom'];
	$nom    = $_POST['nom'];
	$email  = $_POST['email'];
	$ville  = $_POST['ville'];
	$coordonnees = array(
						'prenom' => $prenom, 
						'nom'    => $nom, 
						'email'  => $email, 
						'ville'  => $ville
						);
	foreach($coordonnees as $cle => $valeur) {
		echo $cle. ' : '.$valeur.'<br />';
	}
	if(in_array('paris', $coordonnees)) {
		echo'Vous habitez la Capital';
	}
  }
}
?>
<p>Quelles sont vos coordonnées ?</p>
<form action="" method="post">
<p><input type="text" name="prenom" placeholder="Votre Prénom" /></p>
<p><input type="text" name="nom" placeholder="Votre nom" /></p>
<p><input type="text" name="email" placeholder="Votre email" /></p>
<p><input type="text" name="ville" placeholder="Votre ville" /></p>
<p><input type="submit" name="valider" value="Valider" /></p>
</form>
</div>

</body>
</html>