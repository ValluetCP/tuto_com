<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu déroulant</title>
</head>
<body>
    <form action="">
        <p align="center">
            <select name="compter">
                <?php
                // for($i=1; $i<=10; $i++){
                //     echo '<option value="'.$i.'">'.$i.'</option>';
                // }

                $i=0;
                while ($i<=10) {
                    echo '<option value="'.$i.'">'.$i.'</option>';
                    $i++;
                }
                ?>
                <!-- 
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option> 
                <option value="10">10</option>
                -->
            </select>
        </p>
    </form>
</body>
</html>