<?php
$serverName = '127.0.0.1';
$userName = 'root';
$password = 'root';
$dbname = 'myDBpdo';

//PDO подключение
try {
    $connection = new PDO( "mysql:host=$serverName;dbname=$dbname", $userName, $password );
    $connection->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    echo 'Подключено<br>';
} catch ( PDOException $e ) {
    echo $e->getMessage(). '<br>';
}

try {
    $sql = 'CREATE DATABASE myDBpdo';
    $connection->exec( $sql );
    echo 'База данных создана <br>';
} catch ( PDOException $e ) {
    echo $sql . '<br>' . $e->getMessage(). '<br>';
}

try {
    $sql1 = "CREATE TABLE MyGuests(
        id INT(9) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstName VARCHAR(30) NOT NULL,
        lastName VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";
    $connection->exec( $sql1 );
    echo 'Таблица MyGuests создана успешно<br>';
} catch ( PDOException $e ) {
    echo $sql1 . '<br>' . $e->getMessage() . '<br>';
}

try {
    $sql2 = "INSERT INTO MyGuests (firstName, lastName, email)
VALUES ('John', 'Doe', 'john@example.com')";
    $connection->exec( $sql2 );
    $last_id = $connection->lastInsertId();
    echo 'Новая запись успешно создана. последний ID: ' . $last_id . '<br>';
} catch ( PDOException $e ) {
    echo $sql2 . '<br>' . $e->getMessage() . '<br>';
}

try {
    $connection->beginTransaction();
    $connection->exec( "INSERT INTO myguests (firstName, lastName, email)
    VALUES ('Yura', 'Zhizhnevskiy', 'zhizhnevskiy@yandex.ru')" );
    $connection->exec( "INSERT INTO myguests (firstName, lastName, email)
    VALUES ('Nadya', 'Zhizhnevskaya', 'zhizhnevskaya@yandex.ru')" );
    $connection->exec( "INSERT INTO myguests (firstName, lastName, email)
    VALUES ('Ilya', 'Zhizhnevskiy', 'zhizhnevskiy@yandex.ru')" );
    $connection->commit();
    echo 'Новые записи успешно созданы<br>';
} catch ( PDOException $e ) {
    $connection->rollback();
    echo 'Ошибка: ' . $e->getMessage();
}

try {
    $stmt = $connection->prepare( "INSERT INTO myguests (firstName, lastName, email) 
    VALUES (:firstName, :lastName, :email)" );
    $stmt->bindparam( ':firstName', $firstName );
    $stmt->bindparam( ':lastName', $lastName );
    $stmt->bindparam( ':email', $email );
    $firstName = 'ABC1';
    $lastName = 'DEF1';
    $email = 'ABC@def.com';
    $stmt->execute();
    $firstName = 'ABC2';
    $lastName = 'DEF2';
    $email = 'ABC@def.com';
    $stmt->execute();
    echo 'Новые подготовленные записи созданы успешно<br>';
} catch ( PDOException $e ) {
    echo 'Ошибка: ' . $e->getMessage();
}

try{
    $sql3 = "DELETE FROM myguests WHERE id > 500";
    $connection->exec($sql3);
    echo "Записи успешно удалены<br>";
}
catch ( PDOException $e ) {
    echo $sql3 . "<br>" . $e->getMessage();
}

try {
    $sql4 ="UPDATE myguests SET lastname='Zhizhnevskiy' WHERE id > 1";
    $stmt = $connection->prepare($sql4);
    $stmt->execute();
    echo $stmt->rowCount() . " записи ОБНОВЛЕНЫ успешно<br>";
}
catch(PDOException $e)
{
    echo $sql4 . "<br>" . $e->getMessage();
}

echo "<table style='border: solid 1px black;'>";
echo '<tr><th>ID</th><th>Firstname</th><th>Lastname</th></tr>';
class TableRows extends RecursiveIteratorIterator {
    function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
    }
    function current() {
        return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
    }
    function beginChildren() {
        echo "<tr>";
    }
    function endChildren() {
        echo "</tr>" . "\n";
    }
}
try{
     $stmt = $connection->prepare("SELECT id, firstName, lastName FROM 
     myguests WHERE id > 10 ORDER BY id DESC LIMIT 5 OFFSET 0");
     $stmt->execute();
     $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
     foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchALL())) as $k=>$v){
         echo $v;
     }
} 
catch ( PDOException $e ) {
    echo "Ошибка: " . $e->getMessage();
}