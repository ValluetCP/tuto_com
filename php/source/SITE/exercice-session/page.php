<?php
session_start();
$prenom = $_SESSION['prenom'];
$age    = $_SESSION['age'];
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Formation Php</title>
</head>

<body>

<p align="center">
Votre prénom est toujours <?= $prenom; ?> et vous avez toujours <?= $age; ?> ans.
</p>
<p align="center">
<a href="index.php">Retour index</a>
</p>
<p align="center">
<a href="detruire.php">Détruire session</a>
</p>
</body>
</html>