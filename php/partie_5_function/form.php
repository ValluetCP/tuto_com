<?php
require ('./fonction.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Fonction création de champs de formulaire</title>
</head>
<body>
<h1>Formulaire 1</h1>
    <div id="site">
        
        <form action="" method="post">
            <?php
            champFormulaire('champ1', 'text', 'prenom', 'Votre prénom');
            champFormulaire('champ1', 'text', 'nom', 'Votre nom');
            champFormulaire('champ1', 'email', 'email', 'Votre email')
            ?>


            <!-- 
            <input type="text" name="prenom" placeholder="prenom">
            <input type="text" name="nom" placeholder="nom">
            <input type="email" name="email" placeholder="email"> -->
            <input type="submit" name="valider" placeholder="Valider">
        </form>
        <br><br><br>
        <a href="./form_2.php">Page suivante</a>
    </div>
</body>
</html>