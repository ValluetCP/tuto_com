<?php
    session_start();
    // il ne faut rien avant cette variable

    $_SESSION['prenom'] = $_POST['prenom'];
    $prenom = $_SESSION['prenom'];

    $_SESSION['age'] = $_POST['age'];
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
        Votre prénom est <?= $prenom; ?> et vous <?= $age; ?>ans.
    </p>
    <p align="center">
       <a href="page.php?prenom=<?= $prenom; ?>">Allez sur la page</a>
    </p>
</body>
</html>