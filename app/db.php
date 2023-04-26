<!-- Base de datos PHP -->
<?php

$server="debad308f335";
$database="app";
$user="root";
$password="mysecretpassword";

try{
    $connection = new PDO("mysql:host=$server;dbname=$database",$user,$password);
}catch (Exception $ex){
    echo $ex->getMessage();
}

?>