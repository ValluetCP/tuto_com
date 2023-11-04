<?php
    $prenom = $_POST['prenom'];
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
        Votre prénom est <?= $prenom; ?>
    </p>
    <p align="center">
       <a href="page.php?prenom=<?= $prenom; ?>">Allez sur la page</a>
    </p>
</body>
</html>