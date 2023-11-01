<!-- CHECKBOX - ARRAY -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php - les tableaux array</title>
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
        <form action="" method="post">
        <?php

        if(isset($_POST['valider'])){
            if (!empty($_POST['jour'])) {
                $jours = $_POST['jour'];
                echo '<p align="center"><b>Mes jours de congés sont : </b></p><br>';
            }

            // foreach($jours as $jour){
            //     echo $jour.'<br/>';
            // }

            $compter = count($jours);
            for($k=0; $k<$compter ; $k++){
                echo $jours[$k].'<br/>';
            }
        }
        ?>
            <p>Quelles sont vos jours de congés?</p>

            <!-- Le tableau jour[] dans ce cas permet de stocker plrs valeurs -->
            <!--  nous sommes sur un comportement numerique, nous savons que le array sera indexé -->
            <!-- on ne sait pas d'avance ce que l'internaute va choisir -->
            <input type="checkbox" name="jour[]" id="" value="lundi">lundi <br>
            <input type="checkbox" name="jour[]" id="" value="mardi">mardi <br>
            <input type="checkbox" name="jour[]" id="" value="mercredi">mercredi <br>
            <input type="checkbox" name="jour[]" id="" value="jeudi">jeudi <br>
            <input type="checkbox" name="jour[]" id="" value="vendredi">vendredi <br>
            <input type="checkbox" name="jour[]" id="" value="samedi">samedi <br>
            <input type="checkbox" name="jour[]" id="" value="dimanche">dimanche <br>
            <p><input type="submit" value="Valider" name="valider"></p>
        </form>
    </div>
    <p>Clé : <?= $jours[0]; ?> </p>
    <p>Clé avec la superglobal: <?= $_POST['jour'] [0]; ?> </p>
</body>
</html>