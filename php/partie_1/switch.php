
<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <title>Switch</title>
    <meta name="description" content="Une phrase d’environ 170 caractères">
    <meta name="viewport" content="height=device-height, width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./style.css">
</head>
<body>
<?php

$mois = '';
// Pour éviter qu'il y ait une erreur quand on arrive sur la page, comme aucun mois n'est encore été sélectionné par l'utilisateur
if(isset($_POST['valider'])){
    $mois = $_POST['mois'];

    // Autre version

    // if (($mois == 12) || ($mois <= 2)) {
    //     echo 'Nous sommes en hiver';
    // }elseif (($mois >= 3) && ($mois <= 5)) {
    //     echo 'Nous sommes au printemps';
    // }elseif (($mois >= 6) && ($mois <= 8)) {
    //     echo 'Nous sommes en été';
    // }elseif (($mois >= 9) && ($mois <= 11)) {
    //     echo 'Nous sommes en automne';
    // }


    // version switch
    switch ($mois) {
        case 1:
        case 2:
        case 12:
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
        default:
            echo 'Ce mois n\'existe pas';  
            break;
    }
}

?>

<form action="" method="post">
    <p align='center'>
        <select name="mois" id="">
            <option value="1" <?php if($mois==1){ echo 'selected="selected"';} ?>>Janvier</option>
            <option value="2" <?php if($mois==2){ echo 'selected="selected"';} ?>>Février</option>
            <option value="3" <?php if($mois==3){ echo 'selected="selected"';} ?>>Mars</option>
            <option value="4" <?php if($mois==4){ echo 'selected="selected"';} ?>>Avril</option>
            <option value="5" <?php if($mois==5){ echo 'selected="selected"';} ?>>Mai</option>
            <option value="6" <?php if($mois==6){ echo 'selected="selected"';} ?>>Juin</option>
            <option value="7" <?php if($mois==7){ echo 'selected="selected"';} ?>>Juillet</option>
            <option value="8" <?php if($mois==8){ echo 'selected="selected"';} ?>>Août</option>
            <option value="9" <?php if($mois==9){ echo 'selected="selected"';} ?>>Septembre</option>
            <option value="10" <?php if($mois==10){ echo 'selected="selected"';} ?>>Octobre</option>
            <option value="11" <?php if($mois==11){ echo 'selected="selected"';} ?>>Novembre</option>
            <option value="12" <?php if($mois==12){ echo 'selected="selected"';} ?>>Décembre</option>
        </select>
        <input type="submit" name="valider" value="Valider">
    </p>

</form>
</body>
</html>

<?php


// Exercice SWITCH

// switch ($saison) {
//     case 'Décembre':
//     case 'Janvier':
//     case 'Février':
//         echo 'Nous sommes en hiver';
//         break;
//     case 'Mars':
//     case 'Avril':
//     case 'Mai':
//         echo 'Nous sommes au printemps';
//         break;
//     case 'Juin':
//     case 'Juillet':
//     case 'Août':
//         echo 'Nous sommes en été';
//         break;
//     case 'Septembre':
//     case 'Octobre':
//     case 'Novembre':
//         echo 'Nous sommes en automne';
//         break;
    
    
//     default:
//         echo 'Ce mois n\'existe pas';  
//         break;
// }

?>