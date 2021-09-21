<?php
require_once 'pdoconfig.php';
try {
    $connection = new
    PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    echo "Connected to $dbname at $host succesfully.";
} catch (PDOException $pe) {
    die("Could not connect to the database $dbname:" . $pe->getMessage());
}