<?php

$connection = mysqli_connect('127.0.0.1', 'root', 'root', 'ost25.11.2020');

if ($connection === false) {
    echo 'Не удалось подключиться к базе данных!<br>';
    echo mysqli_connect_error();
    exit();
} 

echo "Connected successfully<br>";

$sql = "INSERT INTO Students (name, lastName, email) VALUES ('Test', 'Testing', 'Testing@tesing.com')";
if (mysqli_query($connection, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}
mysqli_close($connection);