<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Les saisons</title>
</head>

<body>

<p align="center">
<?php
$mois = '';
if(isset($_POST['valider'])) {
	$mois = $_POST['mois'];
	if(($mois == 12) || ($mois <= 2)) {
		echo 'Nous sommes en hiver';
	} elseif(($mois >= 3) && ($mois <= 5)) {
		echo 'Nous sommes au printemps';
	} elseif(($mois >= 6) && ($mois <= 8)) {
		echo 'Nous sommes en été';
	} elseif(($mois >= 9) && ($mois <= 11)) {
		echo 'Nous sommes en automne';
	}
}
?>
</p>
<form method="post" action="">
	<p align="center">
    <select name="mois">
    	<option value="1" <?php if($mois==1){ echo'selected="selected"';} ?>>Janvier</option>
        <option value="2" <?php if($mois==2){ echo'selected="selected"';} ?>>Février</option>
        <option value="3" <?php if($mois==3){ echo'selected="selected"';} ?>>Mars</option>
        <option value="4" <?php if($mois==4){ echo'selected="selected"';} ?>>Avril</option>
        <option value="5" <?php if($mois==5){ echo'selected="selected"';} ?>>Mai</option>
        <option value="6" <?php if($mois==6){ echo'selected="selected"';} ?>>Juin</option>
        <option value="7" <?php if($mois==7){ echo'selected="selected"';} ?>>Juillet</option>
        <option value="8" <?php if($mois==8){ echo'selected="selected"';} ?>>Aout</option>
        <option value="9" <?php if($mois==9){ echo'selected="selected"';} ?>>Septembre</option>
        <option value="10" <?php if($mois==10){ echo'selected="selected"';} ?>>Octobre</option>
        <option value="11" <?php if($mois==11){ echo'selected="selected"';} ?>>Novembre</option>
        <option value="12" <?php if($mois==12){ echo'selected="selected"';} ?>>Décembre</option>
    </select>
    <input type="submit" name="valider" value="Valider" />
    </p>
</form>

</body>
</html>