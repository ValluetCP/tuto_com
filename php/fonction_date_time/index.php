<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Date</title>
</head>
<body>
    <?php
        // AFFICHER L'HEURE ACTUELLE
            echo time();

        // LISTE DES VARIABLES D'ACCES
            // je vais donner un accès à mon internaute pdt 10j uniquement
            $debut = 1699164686;
            // les 10j doivent être écrite en seconde (3600 = nbr de seconde dans 1h)
            $fin = $debut + (3600*24*10);
            // nbr de secondes dans une journée *10

            // $maintenant = time();
            $maintenant = 1700028686 +1;
            // on a pris l'affichage de $fin + 1 pour dépasser le délai de la condition pour faire un test


        // AFFICHAGE DES VARIABLES D'ACCES
            echo '<br>'.$debut.'<br>';
            echo $fin.'<br>';
            echo $maintenant.'<br>';


        // TEST CONDITION D'ACCES
            if ($maintenant > $fin) {
                echo 'Accès terminé';
            }else {
                echo 'Accès autorisé';
            }
    ?>
</body>
</html>