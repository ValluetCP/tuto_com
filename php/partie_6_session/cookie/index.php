<?php
    setcookie ('prenom', 'lea', time()+3600*24*365,null,null,false,true);
    // cookie valable 1 an à partir de l'actualisation de la page
    setcookie ('age', '23', time()+3600*24*365,null,null,false,true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LES COOKIES</title>
</head>
<body>
    <?= htmlspecialchars($_COOKIE['prenom']); ?><br>
    <?= htmlspecialchars($_COOKIE['age']); ?>
    <a href="page.php">PAGE</a>
    <a href="page2.php">PAGE 2 - Destruction</a>

</body>
</html>