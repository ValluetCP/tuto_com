<?php
    session_start();
    if((isset($_SESSION['prenom'])) || (isset($_SESSION['prenom']))){
        $prenom = $_SESSION['prenom'];
        $age = $_SESSION['age'];
    }else{
        // pour éviter d'avoir une erreur à cause des lignes 22 et 23 où l'on appel des variable qui ne sont pas déclarées
        $prenom = '';
        $age = '';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LES SESSIONS</title>
</head>
<body>
    <form action="./traitement.php" method="post">
        <p align="center">
            <input type="text" name="prenom" placeholder="Votre prenom" value="<?= $prenom; ?>">
            <input type="text" name="age" placeholder="Votre age" value="<?= $age; ?>">
            <input type="submit" value="Valider" name="">
        </p>
        
    </form>
</body>
</html>