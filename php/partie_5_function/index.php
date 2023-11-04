<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - fonction</title>
</head>
<body>
<?php

if(isset($_POST['valider'])){
    $prenom = ucfirst($_POST['prenom']);
    $nom = strtoupper($_POST['nom']);
    $age = abs(round($_POST['age']));

    echo 'Bonjour '.$prenom .' '.$nom.'. Vous avez '.$age.'. ans.'; 
}
?>

    <form action="" method="post">
        <input type="text" name="prenom" placeholder="prenom">
        <input type="text" name="nom" placeholder="nom">
        <input type="text" name="age" placeholder="âge">
        <input type="submit" name="valider" placeholder="Valider">
    </form>
</body>
</html>



