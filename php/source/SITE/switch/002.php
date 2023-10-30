<?php

$age=18;
/*
if($age < 18) {
	echo 'Tu es mineur';
} elseif($age >= 18) {
	echo 'Tu es majeur';
} else {
	echo 'Je n\'ai pas compris ton age';
}
*/

switch($age) {
	case 15:
	case 16:
	case 17:
		echo 'Tu es mineur';
		break;	
	case 18:
		echo 'Tu es majeur';	
		break;
	default: 
		echo 'Je n\'ai pas compris ton age';
}
