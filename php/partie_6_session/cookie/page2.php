<?php
    setcookie ('age', '', time()-1,null,null,false,true);
    // destruction du cookie age :  on supprime la valeur '' et on dépasse la valeur de time avec -1
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LES COOKIES - DESTRUCTION</title>
</head>
<body>
    <p>Ton prénom EST TOUJOURS : <?= htmlspecialchars($_COOKIE['prenom']); ?></p>

    <?php
    if(isset($_COOKIE['age'])){
    ?>
    <p>Ton age EST TOUJOURS : <?= htmlspecialchars($_COOKIE['age']); ?>ans</p>
    <?php
    }
    ?>
</body>
</html>