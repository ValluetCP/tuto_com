<?php
if(isset($_POST['valide'])) {
	session_start();
	$_SESSION['pseudo'] = $_POST['pseudo'];
	$pseudo = $_SESSION['pseudo'];
	header('location: page.php');
	if($_POST['retenir'] == 1) {
		setcookie('pseudo',$pseudo,time()+3600*24*365, null,null,false,true);
	}
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Formation Php</title>
</head>

<body>
<?php
if(isset($_COOKIE['pseudo'])) {
	$champ = 'value="'.$_COOKIE['pseudo'].'"';
} else {
	$champ = '';
}
?>
<form action="" method="post">
	<input type="text" name="pseudo" placeholder="Votre Pseudo" <?= $champ; ?> /> <br /><br />
    Se rappeler du prénom: <br />
    <input type="radio" name="retenir" value="0" /> Non <br />
    <input type="radio" name="retenir" value="1" /> Oui <br /><br />
    <input type="submit" name="valide" value="Valider" />
</form>

</body>
</html>