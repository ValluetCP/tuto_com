
<?php
$prix = 10;

?>

<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <title>PHP - partie 1</title>
    <meta name="description" content="Une phrase d’environ 170 caractères">
    <meta name="viewport" content="height=device-height, width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./style.css">
</head>
<body>

<!-- TUTO PARTIE 1 : ON TEST LES INSTUCTIONS CONDITIONNELLES -->

<!-- TEST AVEC FOMULAIRE / METHOD POST -->
    
    <!-- <form action="traitement.php" method="post">
        
        <input type="text" name="prenom" id="prenom" placeholder="prenom">
        <input type="text" name="nom" id="nom" placeholder="nom">
        <input type="submit" value="envoyer">
        
    </form> -->



<!-- TEST AVEC LIEN CLIQUABLE / METHOD GET -->

    <!-- <p>Quelle est votre couleur préférée ?</p>
    <ul>
        <li><a href="traitement.php?coul=rouge">rouge</a></li>
        <li><a href="traitement.php?coul=vert">vert</a></li>
        <li><a href="traitement.php?coul=bleu">bleu</a></li>
    </ul> -->


<?php //$_POST['calculer'] - DEBUT
if(isset($_POST['calculer'])){
    if($_POST['qt']){ //$_POST['qt'] - DEBUT
?>
<?php 
    // $prix = $_POST['prix'];
    $qt = $_POST['qt'];
?>


<?php // Test si $qt est un entier - DEBUT
$qt = ceil($qt);
if((!is_numeric($qt)) OR ($qt <= 0)){
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

<?php //$_POST['qt'] - FIN
}
?>
<p align="center"><a href="index.php">RETOUR</a></p>
<?php //$_POST['calculer'] - SUITE
} else {
    // Sinon tu affiche le formulaire
?>

<!-- TEST AVEC FOMULAIRE (CALCUL) / METHOD POST -->
    
    <h1 align="center"> Le prix est de <?= $prix; ?>€</h1>
    <p align="center">Un deuxième article acheté, le troisième offert !</p>
    <p align="center">Si vous acheté plus de 10 articles, -20% de remise !</p>

    <!-- traitement2.php -->
    <form action="" method="post">
        <p  align="center">
            <input type="text" name="qt" id="qt" placeholder="quantité">
            <!-- <input type="hidden" name="prix" value="<?= $prix; ?>"> -->
            <input type="submit" name="calculer" value="calculer">
        </p>
    </form>

<?php //$_POST['calculer'] - FIN
} 
?>
</body>
</html>