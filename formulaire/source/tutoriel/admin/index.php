<?php
session_start();
if(isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
} else {
    header('location:../index.php');
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <section>
        <div class="login">admin</div>
        <h2>Bienvenue <?= $user; ?></h2>
        <p><a href="../deconnexion.php">Se déconnecter</a></p>
    </section>
</body>
</html>