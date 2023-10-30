<?php

$genre = 'femme';

/*if($genre == 'homme') {
	$salut =  'Bonjour Monsieur';
} else {
	$salut =  'Bonjour Madame';
}
echo $salut;*/
//($genre == 'homme') ? echo 'Bonjour Monsieur' : echo 'Bonjour Madame';

($genre == 'homme') ? $salut =  'Bonjour Monsieur' : $salut =  'Bonjour Madame';

echo $salut;