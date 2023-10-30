<?php
	$prix = 10;
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Mon document</title>
</head>

<body>

<?php // $_POST['calculer'] - DEBUT
if(isset($_POST['calculer'])) {
	if($_POST['qt']) { // $_POST['qt'] - DEBUT
?>
<?php
	$qt   = $_POST['qt'];
?>

<?php // Test si $qt est un entier - DEBUT
$qt = ceil($qt);
if((!is_numeric($qt)) OR ($qt <= 0)) {
?>

<h1 align="center">Une erreur est survenue !</h1>

<?php // Test si $qt est un entier - SUITE
} else {
?>

	<?php // Test de la valeur de $qt
        if($qt == 10) {
            $total = $prix * ($qt-1);
            $message = 'Remise de '.$prix.' Euros';
        } elseif($qt > 10) {
            $total  = $prix * $qt;
            $remise = $total * 0.2;
            $total  = $total -  $remise;
            $message = 'Remise de '.$remise.' Euros';
        } else {
            $total = $prix * $qt;
            $message = 'Pour bénéficier d\'une remise, achetez 10 articles !';
        }
    ?>
    
    <h1 align="center">
    Le prix total à payer est de <?= $total; ?> Euros. <br />
    <?= $message; ?>
	</h1>
<?php // Test si $qt est un entier - FIN
}
?>
<?php // $_POST['qt'] - FIN
	}
?>
<p align="center"><a href="index.php">RETOUR</a></p>
<?php // $_POST['calculer'] - SUITE
} else {
?>

<h1 align="center"><?= $prix; ?> Euros HT</h1>
<p align="center">Si vous achetez 10 articles, nous vous offrons 1 article !</p>
<p align="center">Si vous achetez plus de  10 articles, nous vous offrons une remise de 20%</p>
<form method="post" action="">
<p align="center">
	<input type="text" name="qt" placeholder="Quantité" />
    <input type="submit" name="calculer" value="Calculer" />
</p>
</form>
<?php // $_POST['calculer'] - FIN
} 
?>

</body>
</html>