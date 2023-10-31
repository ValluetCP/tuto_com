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
            foreach($jours as $jour){
                echo $jour.'<br/>';
            }
        }
        ?>
            <p>Quelles sont vos jours de congés?</p>
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
</body>
</html>