<?php

$connection = mysqli_connect('127.0.0.1', 'root', 'root', 'test_db');

if ($connection === false) {
    echo 'Не удалось подключиться к базе данных!<br>';
    echo mysqli_connect_error();
    exit();
} 

$result = mysqli_query($connection, "SELECT * FROM `articles_categories`");

// while (($record = mysqli_fetch_assoc($result))) {
//   print_r($record);
//   echo "<hr>";
// }
if (mysqli_num_rows($result) === 0){
    print_r("Категорий не найдено!");
}else{
?>

<ul>
    <?php
    while ($cat = mysqli_fetch_assoc($result)) {
        $articles_count = mysqli_query($connection, "SELECT * FROM `articles` WHERE `categories_id` = " . $cat["id"] );
        print_r("<li>" . $cat["title"] ."(". mysqli_num_rows($articles_count)  . ")</li>");
    }
    ?>
</ul>
<?php
}
?>

<?php
mysqli_close($connection);
?>