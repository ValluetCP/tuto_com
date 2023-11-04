<?php
$prix = 10.76;
if (empty($_POST['quantite'])) {
    $_POST['quantite'] = 1;
}

// function va multiplier le prix
function calculer($tarif, $qt){
    $total = $tarif * $qt;
    if(($qt>=2) && ($qt < 5)){
        $total2 = $total*10/100;
        $total = $total - $total2;
    } elseif ($qt >= 5) {
        $total2 = $total*20/100;
        $total = $total - $total2;
    }
    return round($total,2);
    // si jamais le prix change (cf:ligne 1), penser à arrondir le prix ...
    // round($variable,2); = arrondi 2 chiffre après la virgule
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>J'apprends les fonctions</title>
    <style>
        #site{
            width: 50%;
            margin: 50px auto; 
            text-align: center;
        }
    </style>
</head>
<body>
<div id="site">
        <p>Consigne : Mise en place d'un formulaire, effectuer des calculs via la création de fonction.</p>
        <h2><?= $prix ?> Euros</h2>
        <!-- Menu déroulant -->
        <form action="" method="post">
            <select name="quantite" id="">
                
                <?php
                for($i=1; $i<=10; $i++){
                ?>
                    echo '<option value="<?= $i; ?>"<?php if($_POST['quantite'] == $i){echo 'selected="selected"';} ?>><?= $i; ?></option>';
                    <!-- idem -->
                    <!-- echo '<option value="'.$i.'">'.$i.'</option>'; -->
                <?php
                }
                ?>
            </select>
            <input type="submit" name="acheter" value="Acheter">
        </form>
        <p>à partir de 2 articles achetés, 10% de remise <br> Plus de 5 articles achetés, 20% de remise.</p>
        <br><br>

        <!-- Afficher le résultat -->
        <?php
        if (isset($_POST['acheter'])) {
            echo  calculer($prix,$_POST['quantite']).' Euros.'; 
        }
            
        ?>
    </div>
</body>
</html>