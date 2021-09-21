<?php
$serverName = '127.0.0.1';
$userName = 'root';
$password = 'root';
$dbname = 'mydboop';

//Объектно-ориентированное подключение
$connection = new mysqli( $serverName, $userName, $password, $dbname );
if ( $connection->connect_error ) {
    die( 'Ошибка подключения: ' . $connection->connect_error );
}
echo 'Успешное объектно-ориентированное подключение<br>';

$sql = 'CREATE DATABASE myDBoop';
if ( $connection->query( $sql ) === TRUE ) {
    echo 'База данных создана успешно<br>';
} else {
    echo 'Ошибка при создании базы данных: ' . $conn->error . '<br>';
}

$sql1 = "CREATE TABLE MyGuests(
id INT(9) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstName VARCHAR(30) NOT NULL,
lastName VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
if ( $connection->query( $sql1 ) === TRUE ) {
    echo 'Таблица MyGuests создана успешно<br>';
} else {
    echo 'Ошибка при создании таблицы: ' . $connection->error . '<br>';
}

$sql2 = "INSERT INTO MyGuests (firstName, lastName, email)
VALUES ('John', 'Doe', 'john@example.com')";
if ($connection->query($sql2) === TRUE){
    $last_id = $connection->insert_id;
    echo "Новая запись успешно создана. Последний вставленный ID: " . $last_id . "<br>";
} else {
    echo "Ошибка: " . $sql2 . "<br>" . $connection->error;
}

// $sql3 = "INSERT INTO MyGuests (firstName, lastName, email)
// VALUES ('Yura', 'Zhizhnevskiy', 'zhizhnevskiy@yandex.ru');";
// $sql3 .= "INSERT INTO MyGuests (firstName, lastName, email)
// VALUES ('Nadya', 'Zhizhnevskaya', 'zhizhnevskaya@yandex.ru');";
// $sql3 .= "INSERT INTO MyGuests (firstName, lastName, email)
// VALUES ('Ilya', 'Zhizhnevskiy', 'zhizhnevskiy@yandex.ru')";
// if ($connection->multi_query($sql3) === TRUE){
//     $last_id = $connection->insert_id;
//     echo "Новые три записи успешно созданы. Последний вставленный ID: " . $last_id . "<br>";
// } else {
//     echo "Ошибка: " . $sql3 . "<br>" . $connection->error;
// }

$stmt = $connection->prepare("INSERT INTO MyGuests (firstName, lastName, email) VALUES (?,?,?)");
$stmt->bind_param("sss", $firstName, $lastName, $email);
$firstName = "ABC1";
$lastName = "DEF1";
$email = "ABC@def.com";
$stmt->execute();
$firstName = "ABC2";
$lastName = "DEF2";
$email = "ABC@def.com";
$stmt->execute();
echo "Новые подготовленные записи успешно созданы<br>";

$sql5 = "DELETE FROM myguests WHERE id > 500";
if ($connection->query($sql5) === TRUE){
    echo "Записи успешно удалены<br>";
} else {
    echo "Ошибка удаления записей: " . $connection->error;
}

$sql6 = "UPDATE myguests SET lastName='Zhizhnevskiy' WHERE id > 1";
if($connection->query($sql6) === TRUE){
    echo "Записи успешно обновлены<br>";
} else {
    echo "Ошибка обновления записи: " . $connection->error;
}

$sql4 = "SELECT * FROM myguests WHERE id > 0
 ORDER BY id DESC LIMIT 10";
$result = $connection->query($sql4);
if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Name</th><th>E-mail</th></tr>";
    while ($row = $result->fetch_assoc()){
        // echo "id: " . $row["id"] . " - Name: " . $row["firstName"] . " "
        // . $row["lastName"] . "<br>";
        echo "<tr><td>".$row["id"]."</td><td>".$row["firstName"].
        " ".$row["lastName"]."</td><td>".$row["email"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
