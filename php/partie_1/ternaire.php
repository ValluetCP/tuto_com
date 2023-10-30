

                                    <!-- TERNAIRE -->

<?php 
$genre ='femme';

// MAUVAISE SYNTAXE

// if ($genre == 'homme') {
//     echo 'Bonjour Monsieur';
// }else{
//     echo 'Bonjour Madame';
// }

// ($genre == 'homme') ? echo 'Bonjour Monsieur' : echo 'Bonjour Madame';


// BONNE SYNTAXE
if ($genre == 'homme') {
    $salut = 'Bonjour Monsieur';
}else{
    $salut =  'Bonjour Madame';
}
echo $salut;

($genre == 'homme') ? $salut = 'Bonjour Monsieur' : $salut =  'Bonjour Madame';

echo $salut;

?>


                                    <!-- SWITCH -->
<!-- On ne peut pas tester pour voir si une valueur est supérieur ou inférieur, il ne traite que les égalités -->

<?php 
$ceinture = "blanche";
// blanche, jaune, orange, verte, bleue, marron, noire
// Tu es un débutant
// Tu es un débutant avancé
// Tu es un débutant confimé
// Tu n'es plus un débutant
// Tu as un niveau avancé
// Tu as un niveau confimé
// Tu es un expert



if($ceinture == "blanche"){
    echo 'Tu es un débutant';
}elseif($ceinture == "jaune"){
    echo 'Tu es un débutant avancé';
}elseif($ceinture == "orange"){
    echo 'Tu es un débutant confimé';
}elseif($ceinture == "verte"){
    echo 'Tu n\'es plus un débutant';
}elseif($ceinture == "bleue"){
    echo 'Tu as un niveau avancé';
}elseif($ceinture == "marron"){
    echo 'Tu as un niveau confimé';
}elseif($ceinture == "noire"){
    echo 'Tu es un expert';
}else{
    echo 'Cette couleur n\'existe pas';
}

switch ($ceinture) {
    case 'blanche':
        echo 'Tu es un débutant';
        break;
    case 'jaune':
        echo 'Tu es un débutant avancé';
        break;
    case 'orange':
        echo 'Tu es un débutant confimé';
        break;
    case 'verte':
        echo 'Tu n\'es plus un débutant';
        break;
    case 'bleue':
        echo 'Tu as un niveau avancé';
        break;
    case 'marron':
        echo 'Tu as un niveau confimé';
        break;
    case 'noire':
        echo 'Tu es un expert';
        break;
    
    default:
        echo 'Cette couleur n\'existe pas';
        break;
}

// dans le cas où l'on a une même instruction

switch ($age) {
    case '15':
    case '16':
    case '17':
        echo 'Tu es mineur';
        break;
    case '18':
        echo 'Tu es majeur';
        break;
    
    default:
        # code...
        break;
}




?>