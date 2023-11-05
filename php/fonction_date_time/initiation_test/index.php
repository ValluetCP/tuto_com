<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date() et time() </title>
</head>
<body>
    <?php
    echo time().'<br>';
    // ss paramètres
    echo date('d/m/y').'<br>';
    echo date('H:i:s').'<br>';
    echo date('H\hi\m\i\ns\s').'<br>';
    echo date('d/m/Y H\hi\m\i\ns\s').'<br>';
    // qui prend des paramètres (cf: documentation du site php.net)
    ?>
    <?php
    // Afficher la même mais dans un an
    echo date('d/m/Y H\hi\m\i\ns\s', time()+(3600*24*365)).'<br>';
    // 3600 = nbr de seconde dans une journée
    // 24h et 365 jours
    
    echo date('d/m/Y H\hi\m\i\ns\s', time()+(3600)).'<br>';
    // Ajoute 1h de plus

    echo date('d/m/Y H\hi\m\i\ns\s', time()-(3600)).'<br>';
    // Ajoute 1h de moins
    ?>
</body>
</html>