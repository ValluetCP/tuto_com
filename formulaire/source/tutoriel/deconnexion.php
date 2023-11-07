<?php
session_start();

session_destroy();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Déconnexion</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <section>
        <div class="login">out</div>
        <h2>Déconnecté</h2>
        <p><a href="index.php">Se reconnecter</a></p>
    </section>
</body>
</html>