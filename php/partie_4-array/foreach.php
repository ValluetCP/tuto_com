<!--  foreach = pour chaque ... valeur qui se trouve dans mon tableau , je fais... 
- sert à afficher tout le contenu du tableau 
- parcours chaque élément du tableau-->

<?php

$jours = array("lundi","mardi","mercredi","jeudi","vendredi");

// Parcours l'intégralité du array
// foreach($jours as $jour){
//     echo $jour.' ';
// }

// Libre, ne parcours pas forcément l'intégralité du array
for($i=0; $i<=2; $i++){
    echo $jours[$i].'<br/>';
}

echo '<h1>'.$jours[2].'</h1>';
?>