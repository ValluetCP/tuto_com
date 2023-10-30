<?php
setcookie('age','',time()-1);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Formation Php</title>
</head>

<body>

<p>Ton prénom est toujours <?= htmlspecialchars($_COOKIE['prenom']) ?></p>
<?php
if(isset($_COOKIE['age'])) {
?>
<p>Ton âge est toujours <?= $_COOKIE['age']; ?> ans</p>
<?php
}
?>
</body>
</html>