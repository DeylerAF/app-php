<!-- Base de datos PHP -->
<?php

$server = "2c3dabbc05a1";
$database = "app";
$user = "root";
$password = "mysecretpassword";

try {
    $connection = new PDO("mysql:host=$server;dbname=$database", $user, $password);
} catch (Exception $ex) {
    echo $ex->getMessage();
}

?>