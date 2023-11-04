<?php
    session_start();
    $prenom = $_SESSION['prenom'];
    $age = $_SESSION['age'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p align="center">
        Votre prénom est toujours <?= $prenom; ?> et vous avez toujours <?= $age; ?>ans.
    </p>
    <p align="center">
       <a href="index.php">Retour index</a>
    </p>
    <p align="center">
       <a href="detruire.php">Détruire session</a>
    </p>
</body>
</html>