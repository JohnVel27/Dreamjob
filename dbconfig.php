<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "dreamjob";
$dsn = "mysql:host={$host};dbname={$dbname}";

$conn = new PDO($dsn,$user,$password);
$conn->exec("SET time_zone = '+08:00';");


// Check Connection
if(mysqli_connect_error()){
    echo 'error';
}
?>
