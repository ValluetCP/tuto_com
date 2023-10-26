
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



<!-- TEST AVEC FOMULAIRE (CALCUL) / METHOD POST -->
    
    <h1 align="center"> Le prix est de <?= $prix; ?> </h1>

    <form action="traitement2.php" method="post">
        <p  align="center">
            <input type="number" name="qt" id="qt" placeholder="quantité">
            <input type="hidden" name="prix" value="<?= $prix; ?>">
            <input type="submit" value="calculer">
        </p>
    </form>
</body>
</html>