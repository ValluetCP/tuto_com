<?php
$ceinture = 'jaune';
// blanche, jaune, orange, verte, bleue, marron, noire

/* if($ceinture=="blanche") {
	echo 'Tu es un débutant';
} elseif($ceinture=="jaune") {
	echo 'Tu es un débutant avancé';	
} elseif($ceinture=="orange") {
	echo 'Tu es un débutant confirmé';	
} elseif($ceinture=="verte") {
	echo 'Tu n\'es plus un débutant';	
} elseif($ceinture=="bleue") {
	echo 'Tu as un niveau avancé';	
} elseif($ceinture=="marron") {
	echo 'Tu as un niveau confirmé';	
}  elseif($ceinture=="noire") {
	echo 'Tu es un expert';	
} else {
	echo 'Cette couleur n\'existe pas';
} */

switch($ceinture) {
	case "blanche":
		echo 'Tu es un débutant';
		break;
	case "jaune":
		echo 'Tu es un débutant avancé';	
		break;
	case "orange":
		echo 'Tu es un débutant confirmé';
		break;
	case "verte":
		echo 'Tu n\'es plus un débutant';
		break;
	case "bleue":
		echo 'Tu as un niveau avancé';
		break;
	case "marron":
		echo 'Tu as un niveau confirmé';
		break;
	case "noire":
		echo 'Tu es un expert';
		break;
	default:
		echo 'Cette couleur n\'existe pas';						
}


