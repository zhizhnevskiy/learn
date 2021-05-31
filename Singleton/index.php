<?php
error_reporting(E_ALL);
require 'SingletonDB.php';

// константы для подключени к БД

define('HOST', 'localhost'); //сервер
define('USER', 'root'); //пользователь
define('PASSWORD', ''); //пароль
define('NAME_BD', 'test');//база

DB::getInstance(); // инициализация экземпляра класса дл работы с БД
//свободное использование класса

//вывод таблицы продуктов
$result=DB::query("SELECT id,product FROM `product`");
echo '<h2>Таблица продуктов:</h2> <table border="1">';
while($obj=DB::fetch_object($result)){
    echo '<tr><td>'.$obj->id.'</td><td>'.$obj->product.'</td><tr>';
}
echo '</table>';