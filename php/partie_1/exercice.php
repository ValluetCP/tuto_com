<!-- 
    Consignes :
    msg d'erreur
    - si on ne rempli qu'un seul champs
    - age : pas de lettre, ni de valeur en dessous de 0, chiffre à virgule on donne l'entier supérieur
    - si c'est correcte afficher $prenom et $age

    Msg :
    erreur veuillez remplir tous les champs
    Bonjour $prenom vous avez $age
 -->


 <!DOCTYPE html>
 <html lang="fr-FR">
 <head>
    <meta charset="UTF-8">
    <title>Exercice</title>
    <meta name="description" content="Une phrase d’environ 170 caractères">
    <meta name="viewport" content="height=device-height, width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./style.css">
 </head>
 <body>

<?php //$_POST['valider'] - DEBUT
if(isset($_POST['valider'])){

    // les 2 champs doivent être rempli
    
    if(($_POST['prenom']) AND ($_POST['age'])) { // Test de $_POST['prenom'] et $age = $_POST['age'] - DEBUT
        $prenom = $_POST['prenom'];
        $age = $_POST['age'];
        echo '<p align="center">Bonjour '. $prenom.', vous avez '.$age.'ans</p>';
    }else{ // Test de $_POST['prenom'] et $age = $_POST['age'] - SUITE
        echo '<p align="center">erreur veuillez remplir tous les champs</p>';
    } // Test de $_POST['prenom'] et $age = $_POST['age'] - FIN
?>
    <form action="" method="post">
        <p align="center">
            <input type="text" name="prenom" id="" placeholder="Votre prenom">
        </p>
        <p align="center">
            <input type="text" name="age" id="" placeholder="Votre age">
        </p>
        <p align="center">
            <input type="submit" name="valider" id="" value="valider">
        </p>
    </form>
<?php //$_POST['valider'] - FIN
}
?>


 </body>
 </html>