<?php
	$prix = $_POST['prix'];
	$qt   = $_POST['qt'];
	$tva  = 1.2;
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Mon document</title>
</head>

<body>

<?php // Calcul du prix
	$total    = $prix * $qt;
?>

<h1 align="center">
Le prix total à payer est de <?= $total; ?> Euros HT. <br />

<?php // Calcul du prix TTC
	$total    = $total * $tva;
?>
Le prix TTC est de <?= $total; ?> Euros
</h1>

</body>
</html>