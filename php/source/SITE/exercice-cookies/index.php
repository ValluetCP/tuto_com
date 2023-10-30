<?php
setcookie('prenom', 'carl', time()+3600*24*365, null, null, false, true);
setcookie('age', 125, time()+3600*24*365, null, null, false, true);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Formation Php</title>
</head>

<body>
<?= htmlspecialchars($_COOKIE['prenom']) ?>
<br />
<?= $_COOKIE['age']; ?>
<p>
<a href="page.php">PAGE</a>
</p>
</body>
</html>