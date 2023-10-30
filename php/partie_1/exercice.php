<!-- 
    Consignes :
    msg d'erreur
    - si on ne rempli qu'un seul champs
    - age : pas de lettre, ni de valeur en dessous de 0, chiffre à virgule on donne l'entier supérieur
    - si c'est correcte afficher $prenom et $age

    Msg :
    erreur veuillez remplir tous les champs
    Bonjour $prenom vous avez $age

    ce qu'on attend :
    - une valeur numérique et positive 
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
if(isset($_POST['valider'])){ // Si l'internaute à cliqué sur le bouton Valider - DEBUT
    $prenom = $_POST['prenom'];
    $age = $_POST['age'];

    // les 2 champs doivent être rempli
    if((!empty($prenom)) AND (!empty($age))) { // Test de $_POST['prenom'] et $age = $_POST['age'] - DEBUT
        $age = ceil($age); // on arrondit $age à l'entier supérieur

        if((is_numeric($age)) AND ($age>0)){ //si c'est une valeur numérique et positive - DEBUT
             
            echo '<p align="center">Bonjour '. $prenom.', vous avez '.$age.'ans</p>';
        }else{
            echo '<p align="center">Merci d\'entrer un âge correct</p>';
        } //si c'est une valeur numérique et positive - FIN

    }else{ // Test de $_POST['prenom'] et $age = $_POST['age'] - SUITE
        echo '<p align="center">erreur veuillez remplir tous les champs</p>';
    } // Test de $_POST['prenom'] et $age = $_POST['age'] - FIN
     //$_POST['valider'] - FIN
} // Si l'internaute à cliqué sur le bouton Valider - FIN
?>
    <form action="" method="post">
        <p align="center">
            <input type="text" name="prenom" id="" placeholder="Votre prenom" value="<?php if(!empty($prenom)){ echo $prenom;}?>">
        </p>
        <p align="center">
            <input type="text" name="age" id="" placeholder="Votre age"  value="<?php if(!empty($age)){ echo $age;}?>">
        </p>
        <p align="center">
            <input type="submit" name="valider" id="" value="valider">
        </p>
    </form>




 </body>
 </html>