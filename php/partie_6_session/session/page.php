<?php
    session_start();
    $prenom = $_SESSION['prenom'];
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
        Coucou <?= $prenom; ?>
    </p>
    <p align="center">
       <a href="page2.php">Allez sur la page 2</a>
    </p>
</body>
</html>