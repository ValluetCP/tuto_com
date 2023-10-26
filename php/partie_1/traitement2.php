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



<?php

// CALCUL OFFRE (3 articles, le 3ème offert)

if($qt %3 == 0){
    $total = $prix * ($qt-1);
    $message = "Remise de ". $prix . "euros.";

}else{
    $total = $prix * $qt;
    $message = "Achetez 3 articles, et le 3ème vous seras offert.";
}

?>

<h1 align="center">
    Le prix total à payer est de <?= $total; ?> Euros.<br>
    <?= $message; ?>
</h1>
    
</body>
</html>