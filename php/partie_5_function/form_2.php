<?php
require ('./fonction.php');
?>

<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <title>PHP - répétitions Fonctions</title>
    <meta name="description" content="Une phrase d’environ 170 caractères">
    <meta name="viewport" content="height=device-height, width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <h1>Formulaire 2</h1>
    <div id="site">
        
        <form action="" method="post">
            <?php
            champFormulaire('champ2', 'email', 'email', 'Entrer votre email')
            ?>
            <input type="submit" name="entrer" placeholder="Entrer">
        </form>
        <br><br><br>
        <a href="./form.php">Page précédente</a>
    </div>
</body>
</html>