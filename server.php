<?php
$server = 'localhost ';
$db_name = 'database1';
$user = 'root';
$password = 'Acsdoha2023!';

$dsn = " mysql : dbname = $db_name ; host = $server ";

try {
    $conn = new PDO($dsn, $user, $password);
    echo " Connected ␣ successfully ";
} catch (PDOException $ex) {
    echo 'Connection ␣ failed :␣' . $ex->getMessage();
}

$conn = null;
