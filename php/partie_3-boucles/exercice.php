<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice - Test de l'âge de l'internaute</title>
</head>
<body>
    <?php
    if(isset($_POST['valider'])){
        $dateNaissance = $_POST['dateNaissance'];
        if($dateNaissance == 0) {
            echo '<h1 align="center">Accès refusé !</h1>';
        }else{
            header('Location: acces.php');
        }
    }
    ?>
    <form method="post" action="./acces.php" >
        <p align="center">
            Votre date de naissance
            <select name="dateNaissance">
                <?php
                // récupérer la date de l'année en cours
                $date = date('Y');
                ?>
                <option value="0">Je suis né après <?= $i=$date-18; ?></option>
                <?php
                for($i=$date-18; $i>=$date-100; $i--){ ?>
                    <option value="<?= $i; ?>"><?= $i; ?></option>
                    <!-- echo '<option value="'.$i.'">'.$i.'</option>'; -->
                <?php } ?>
                
            </select>
            <input type="submit" value="Valider" name="valider">
        </p>
    </form>
    $date : <?= $date; ?>
</body>
</html>