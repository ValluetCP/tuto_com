<?php
$prix = $_POST['prix'];
$qt = $_POST['qt'];
$tva = 1.2;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traitement 2</title>
</head>
<body>
<?php 

// Calcul TVA

// $total = $prix * $qt;
// $totalTTC = $total * $tva;

// echo '<p>Vous êtes sur un total de '. $total. ' euros HT</p>';
// echo '<p>Vous êtes sur un total de '. $totalTTC. ' euros TTC</p>';


// CALCUL OFFRE (10 articles, le 10ème offert)

// if($qt == 10){
//     $total = $prix * ($qt-1);
//     $message = "Remise de ". $prix . "euros.";
// }else{
//     $total = $prix * $qt;
//     $message = "Pour bénéficier d'une remise, achetez 10 articles.";
// }
// ?>




<!-- <?php

// CALCUL OFFRE (3 articles, le 3ème offert)

if($qt %3 == 0){
    $total = $prix * ($qt-1);
    $message = "Remise de ". $prix . "euros.";

}else{
    $total = $prix * $qt;
    $message = "Achetez 2 articles, et le 3ème vous seras offert.";
}

?>

<h1 align="center">
    Le prix total à payer est de <?= $total; ?> Euros.<br>
    <?= $message; ?>
</h1> -->




<!-- SECURISER LE PROGRAMME  -->

<!-- OBJECTIF : pas de valeur négative, ou égal à 0, ou un nombre à virgule ou bien des lettres -->
  
<?php // Test si $qt est un entier - DEBUT
$qt = ceil($qt);
// 'ceil' fonction php : arrondir à la valeur supérieur

// if((is_numeric($qt)) AND ($qt>0) ){ ou bien
if((!is_numeric($qt)) OR ($qt <= 0)){

    // 'is_numeric' fonction php : si le contenu de $qt est de type numérique...
    // si c’est un entier et que c’est positif
?>

<h1 align="center">Une erreur est survenue !</h1>

<?php // Test si $qt est un entier - SUITE
} else{
?>
    <?php
    // CALCUL OFFRE (Au delà de 10 articles, -20% de remise)

    if($qt == 10){
        $total = $prix * ($qt-1);
        $message = "Remise de ". $prix . "euros.";

    }elseif($qt > 10){
        $total = $prix * $qt;
        $remise = $total * 0.2;
        $total = $total - $remise;
        $message = 'remise de '.$remise.'Euros';
    }else{
        $total = $prix * $qt;
        $message = "Pour bénéficier d'une remise, achetez 10 articles ";
    }

    ?>

    <h1 align="center">
        Le prix total à payer est de <?= $total; ?> Euros.<br>
        <?= $message; ?>
    </h1>

<?php // Test si $qt est un entier - FIN
}
?>
</body>
</html>