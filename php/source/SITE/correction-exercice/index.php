<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Les saisons</title>
</head>

<body>

<p align="center">
<?php
if(isset($_POST['valider'])) {
	$mois = $_POST['mois'];
	switch($mois) {
		case 12:
		case 1:
		case 2:
			echo 'Nous sommes en hiver';
			break;
		case 3:
		case 4:
		case 5:
			echo 'Nous sommes au printemps';
			break;
		case 6:	
		case 7:
		case 8:
			echo 'Nous sommes en été';
			break;
		case 9:
		case 10:
		case 11:
			echo 'Nous sommes en automne';
			break;																													
	}
}
?>
</p>
<form method="post" action="">
	<p align="center">
    <select name="mois">
    	<option value="1">Janvier</option>
        <option value="2">Février</option>
        <option value="3">Mars</option>
        <option value="4">Avril</option>
        <option value="5">Mai</option>
        <option value="6">Juin</option>
        <option value="7">Juillet</option>
        <option value="8">Aout</option>
        <option value="9">Septembre</option>
        <option value="10">Octobre</option>
        <option value="11">Novembre</option>
        <option value="12">Décembre</option>
    </select>
    <input type="submit" name="valider" value="Valider" />
    </p>
</form>

</body>
</html>