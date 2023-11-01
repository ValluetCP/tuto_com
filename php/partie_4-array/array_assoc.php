<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .box{
            width: 400px;
            margin: 150px auto;
            font-family: arial;
            font-size:15px;
            border: 1px solid #eaeaea;
            box-shadow: 2px 2px #ccc;
            padding: 15px;
        }

    </style>
</head>
<body>
    <div class="box">
    <?php

        if(isset($_POST['valider'])){
            // pour remplir TOUS les champs du formulaire
            if( (!empty($_POST['prenom'])) || (!empty($_POST['nom'])) || (!empty($_POST['email'])) || (!empty($_POST['ville']))){
                $prenom =$_POST['prenom'];
                $nom =$_POST['nom'];
                $email =$_POST['email'];
                $ville =$_POST['ville'];

                //    TABLEAU INDEXE
                // $coordonnees = array($prenom,$nom,$email,$ville);
                // echo $coordonnees[1];


                //    TABLEAU ASSOCIATIF
                $coordonnees = array(
                    'prenom' => $prenom,
                    'nom' => $nom,
                    'email' => $email,
                    'ville' => $ville
                );
                // echo $coordonnees['email'];

                // FOREACH pour un TABLEAU ASSOCIATIF : parcourir tout le tableau
                foreach($coordonnees as $cle => $valeur ){
                    echo $cle. ' :' .$valeur.'<br/>';
                }

                // TEST pour trouver une valeur identique
                // la fonction in_array(la_valeur_rechercher, le_nom_du-tableau)
                if (in_array('paris',$coordonnees )) {
                    echo 'Vous habitez la Capital';
                }


            }
        }
    ?>
        <p>Quelles sont vos coordonnées?</p>
        <form action="" method="post">
            <p><input type="text" name="prenom" placeholder="Votre prenom"></p>
            <p><input type="text" name="nom" placeholder="Votre nom"></p>
            <p><input type="text" name="email" placeholder="Votre email"></p>
            <p><input type="text" name="ville" placeholder="Votre ville"></p>
            <input type="submit" value="Valider" name="valider">
        </form>
    </div>
</body>
</html>