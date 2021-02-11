<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbsmtmr";

try {
    $dsn = "mysql:host=".$servername.";dbname=".$dbname;
    $pdo = new PDO($dsn,$username,$password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected to server";
} catch (PDOException $e) {
    echo $e->getMessage();
}

?>