<?php
$servername = '127.0.0.1';
$database = 'ost25.11.2020';
$username = 'root';
$password = 'root';
$sql = "mysql:host=$servername;dbname=$database;";
$dsn_Options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];