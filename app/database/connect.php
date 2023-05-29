<?php 

$driver = "mysql";
$host = "localhost";
$db_name = "project1_myblog";
$db_user = "php_connect";
$db_pass = "or!g";
$charset = "utf8";
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];

try{
    $pdo = new PDO(
        "$driver:host=$host;dbname=$db_name;charset=$charset", $db_user, $db_pass, $options
    );
}catch(PDOException $i){
    die("Error to connect database: ".$i->getMessage());
}

?>