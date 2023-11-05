<?php
if (isset($_POST['valider'])) {
    session_start();
    $_SESSION['pseudo'] = $_POST['pseudo'];
    $pseudo = $_SESSION['pseudo'];
    header('Location: page.php');
    if ($_POST['retenir'] == 1) {
        setcookie('pseudo', $pseudo, time()+3600*24*365, null,null,false,true);
    }
}

?>

<!-- CONSIGNE / FORMULAIRE donner la posibilité de retenir le prénom ou non grâce au bouton radio -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire php</title>
</head>
<body>
<?php
    if(isset($_COOKIE['pseudo'])) {
        $champ = 'value="'.$_COOKIE['pseudo'].'"';
    }else {
        $champ = '';
    }

    ?>
    <form action="" method="post">
        <input type="text" name="pseudo" placeholder="Votre pseudo" value="<?= $champ; ?>"><br><br>
        Se rapeler du prénom: <br>
        <input type="radio" name="retenir" id="" value="0">Non <br>
        <input type="radio" name="retenir" id="" value="1">Oui <br><br>
        <input type="submit" value="Valider" name="valider">
    </form>
</body>
</html>