<?php
include('cnx/cnx.php');
$message = '';
if(isset($_POST['valider'])) {
    if( empty($_POST['user']) || empty($_POST['pass']) ) {
        $message = '<p class="error">Merci de remplir tous les champs</p>';
    }else {
        $sql = 'SELECT * FROM admin WHERE user= :user AND pass= :pass';
        $req = $cnx->prepare($sql);
        $req->execute(array(
            ':user' => $_POST['user'],
            ':pass' => $_POST['pass']
            )
        );
        // COMPTE LE NOMBRE DE R2SULTAT
        $count = $req->rowCount();

        if($count > 0){
            header('location:admin/');
        }else{
            $message = '<p class="error">Accès refusé</p>';
        }
    }
}

?>

<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <title>Formulaire (les bases)</title>
    <meta name="description" content="Une phrase d’environ 170 caractères">
    <meta name="viewport" content="height=device-height, width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <section>
        <form action="" method="post">
            <div class="login">login</div>
            <?= $message; ?>
            <div>
                <input type="text" name="user" id="user" placeholder="user">
                <label for="user">
                    <i class="fa-solid fa-user"></i>
                </label>  
            </div>
            <div>
                <input type="password" name="pass" id="pass" placeholder="pass">
                <label for="pass">
                <i class="fa-solid fa-lock"></i>
                </label>  
            </div>
            <p>
                <input type="checkbox" name="memoire" id="memoire">
                <label for="memoire" class="checkbox">Se souvenir de moi.</label>
            </p>
            <button name="valider">Entrer</button>
        </form>
    </section>
</body>
</html>