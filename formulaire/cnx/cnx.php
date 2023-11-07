<?php
$dsn =  'mysql:localhost; dbname=tuto;charset=utf8';
$user = 'root';
$pass = '';

try{
    $cnx = new PDO($dsn,$user,$pass);
}catch(PDOException $e){
    echo 'une erreur est survenue !';
}
?>