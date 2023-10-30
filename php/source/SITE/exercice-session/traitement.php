<?php
session_start();

$_SESSION['prenom'] = $_POST['prenom'];
$prenom = $_SESSION['prenom'];

$_SESSION['age'] = $_POST['age'];
$age = $_SESSION['age'];
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Formation Php</title>
</head>

<body>

<p align="center">
Votre prénom est <?= $prenom; ?>, vous avez <?= $age; ?> ans.
</p>
<p align="center">
<a href="page.php">Allez sur PAGE</a>
</p>

</body>
</html>