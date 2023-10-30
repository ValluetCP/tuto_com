<?php
session_start();
$pseudo = $_SESSION['pseudo'];
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Formation Php</title>
</head>

<body>

<p>Votre pseudo est <?= $pseudo; ?></p>
<p><a href="index.php">RETOUR</a></p>

</body>
</html>