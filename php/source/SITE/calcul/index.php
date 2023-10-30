<?php
$prix = 10.32;
if(empty($_POST['quantite'])) {
	$_POST['quantite'] = 1;
}
function calculer($tarif, $qt) {
	$total = $tarif * $qt;
	if( ($qt >=2) && ($qt < 5) ) {
		$total2 = $total*10/100;
		$total = $total - $total2;
	} elseif($qt>=5) {
		$total2 = $total*20/100;
		$total = $total - $total2;
	}
	return round($total,2);
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>J'apprends à programmer en Php</title>
<style>
#site {
	width: 50%;
	margin: 50px auto;
	text-align: center;
}
</style>
</head>

<body>

<div id="site">
	<h2><?= $prix; ?> Euros</h2>
    <form method="post" action="">
    	<select name="quantite">
        <?php
		for($i=1;$i<=10;$i++) {
		?>
		<option value="<?= $i; ?>" <?php if($_POST['quantite']==$i) { echo 'selected="selected"'; } ?>><?= $i; ?></option>
		<?php
        }
		?>
        </select>
        <input type="submit" value="Acheter" name="acheter" />
    </form>
    <p>A partir de 2 articles achetés, 10% de remise. <br />
    Plus de 5 articles achetés, 20% de remise.</p>
    <br /><br />
<?php
if(isset($_POST['acheter'])) {
	echo calculer($prix,$_POST['quantite']).' Euros';
}
?>    
</div>

</body>
</html>