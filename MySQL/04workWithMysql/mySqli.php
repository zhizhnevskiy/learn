<?php
$serverName = '127.0.0.1';
$userName = 'root';
$password = 'root';
$dbname = 'myDBmysqli';

//MySQLi процедурный
$connection = mysqli_connect( $serverName, $userName, $password, $dbname );
if ( !$connection ) {
    die( 'Ошибка подключения: ' . mysqli_connect_error() );
}
echo 'Успешное подключение (MySQLi процедурный)<br>';

$sql = 'CREATE DATABASE myDBmySqli';
if ( mysqli_query( $connection, $sql ) ) {
    echo 'База данных успешно создана';
} else {
    echo 'Ошибка создания базы данных: ' . mysqli_error( $connection ) . '<br>';
}

$sql1 = "CREATE TABLE MyGuests(
    id INT(9) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstName VARCHAR(30) NOT NULL,
    lastName VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
if ( mysqli_query( $connection, $sql1 ) ) {
    echo 'Таблица MyGuests создана успешно<br>';
} else {
    echo 'Ошибка при создании таблицы: ' . mysqli_error( $connection ) . '<br>';
}

$sql2 = "INSERT INTO MyGuests (firstName, lastName, email)
VALUES ('John', 'Doe', 'john@example.com')";
if ( mysqli_query( $connection, $sql2 ) ) {
    $last_id = mysqli_insert_id($connection);
    echo "Новая запись успешно создана. Последний вставленный ID: " . $last_id . '<br>';
} else {
    echo "Ошибка: " . $sql2 . "<br>" . mysqli_error($connection);
}

// $sql3 = "INSERT INTO MyGuests (firstName, lastName, email)
// VALUES ('Yura', 'Zhizhnevskiy', 'zhizhnevskiy@yandex.ru');";
// $sql3 .= "INSERT INTO MyGuests (firstName, lastName, email)
// VALUES ('Nadya', 'Zhizhnevskaya', 'zhizhnevskaya@yandex.ru');";
// $sql3 .= "INSERT INTO MyGuests (firstName, lastName, email)
// VALUES ('Ilya', 'Zhizhnevskiy', 'zhizhnevskiy@yandex.ru')";
// if ( mysqli_multi_query( $connection, $sql3 ) ) {
//     $last_id = mysqli_insert_id($connection);
//     echo "Новые 3-и записи успешно созданы. Последний вставленный ID: " . $last_id . '<br>';
// } else {
//     echo "Ошибка: " . $sql3 . "<br>" . mysqli_error($connection);
// }

$sql5 = "DELETE FROM myguests WHERE id > 200";
if (mysqli_query($connection, $sql5)){
    echo "Записи успешно удалены<br>";
} else {
    echo "Ошибка удаления записей: " . mysqli_error($connection);
}

$sql6 = "UPDATE myguests SET lastname='Zhizhnevskiy' WHERE id > 1";
if (mysqli_query($connection, $sql6)){
    echo "Запись успешно обновлена<br>";
} else {
    echo "Ошибка обновления записи: " . mysqli_error($connection);
}

$sql4 = "SELECT id, firstName, lastName, email FROM myguests WHERE id > 1
ORDER BY id DESC LIMIT 10 OFFSET 0";
$result = mysqli_query($connection, $sql4);
if (mysqli_num_rows($result) > 0) {
    // выходные данные каждой строки
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - Name: " . 
        $row["firstName"]. " " . $row["lastName"]. " E-mail:" .
         $row["email"]. "<br>";
    }
} else {
    echo "0 results";
}