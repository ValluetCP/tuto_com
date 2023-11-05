<?php
    session_start();
    $pseudo = $_SESSION['pseudo'];
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
        Votre pseudo est : <?= $pseudo; ?>
    </p>
    <p align="center">
       <a href="index.php">Retour</a>
    </p> 
</body>
</html>