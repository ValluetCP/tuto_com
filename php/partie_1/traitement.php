<?php

// $prenom= $_POST['prenom'];
// $nom= $_POST['nom'];
$couleur = $_GET['coul'];
$prix = $_GET['coul'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traitement</title>
</head>
<body>
    Bonjour <?php echo $prenom; ?> <?php echo $nom; ?>.
    <h1 align="center">
    Votre couleur préférée est : <?= $couleur; ?>
    </h1>
    
</body>
</html>