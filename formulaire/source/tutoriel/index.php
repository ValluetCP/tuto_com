<?php
session_start();
include('cnx/cnx.php');
$message = '';
if(isset($_POST['valider'])) {
    if( empty($_POST['user']) || empty($_POST['pass']) ) {
        $message = '<p class="error">Merci de remplir tous les champs</p>';
    } else {
        $sql = 'SELECT * FROM admin
                WHERE user = :user AND pass = :pass';
        $req = $cnx->prepare($sql);     
        $req->execute(
            array(
                ':user' => $_POST['user'],
                ':pass' => $_POST['pass']
            )
        ); 
        $data  = $req->fetch(PDO::FETCH_ASSOC);
        $count = $req->rowCount();

        if($count > 0) {

            if(isset($_POST['memoire'])) {
                setcookie('memoire', $data['user'], time()+3600*24*365);
            } else {
                setcookie('memoire', $data['user'], time()-1);
            }

            $_SESSION['user'] = $data['user'];
            header('location:admin/');
        } else {
            $message = '<p class="error">Accès refusé !</p>';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accès</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <section>
        <form action="" method="post">
            <div class="login">login</div>
            <?= $message; ?>
            <div>
                <input type="text" name="user" id="user" placeholder="user" value="<?php if(isset($_COOKIE['memoire'])) { echo $_COOKIE['memoire']; } ?>">
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
<?php
if(isset($_COOKIE['memoire'])) {
?>
                <input type="checkbox" checked name="memoire" id="memoire">
<?php
} else {
?>
                <input type="checkbox" name="memoire" id="memoire">
<?php
}
?>

                <label for="memoire" class="checkbox">Se souvenir de moi</label>
            </p>
            <button name="valider">entrer</button>
        </form>
    </section>

    <script src="https://kit.fontawesome.com/50786edb2e.js" crossorigin="anonymous"></script>
</body>
</html>