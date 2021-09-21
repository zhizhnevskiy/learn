<?php
require_once 'pdoconfig1.php';
try{
    $my_Db_Connection = new PDO ($sql, $username, $password, $dsn_Options);
    echo "Connected successfully<br>";
} catch (PDOException $error) {
    echo 'Connection error: ' . $error->getMessage();
}
$first_Name = "Test2";
$last_Name = "Testing2";
$email = "Testing@testing.com2";

$my_Insert_Statement = $my_Db_Connection->prepare("INSERT INTO 
Students (name, lastname, email) VALUES 
(:first_name, :last_name, :email)");

$my_Insert_Statement->bindParam(first_name, $first_Name);
$my_Insert_Statement->bindParam(last_name, $last_Name);
$my_Insert_Statement->bindParam(email, $email);

if ($my_Insert_Statement->execute()){
    echo "New record created successfully<br>";
} else {
    echo "Unable to create record";
}
$first_Name = "John";
$last_Name = "Smith";
$email = "john.smith@email.com";
$my_Insert_Statement->execute();

if ($my_Insert_Statement->execute()){
    echo "New record created successfuly again";
} else{
    echo "Unable to create record";
}