<?php
include("includes/db.php");
?>

<form method="POST" action="/handler.php">
    <input type="text" placeholder="Ваш логин" name="login"> 
    <br>
    <input type="text" placeholder="Ваш пароль" name="password"> 
    <hr>
    <input type="submit" value="Отправить">
</form>





<?php
// $result = mysqli_query($connection, "SELECT * FROM `articles_categories` WHERE `id` > 0");
// if (mysqli_num_rows($result) === 0){
//     echo "Категорий нет!";
// } else {
// 

// $r1 = mysqli_fetch_assoc($result);
// $r2 = mysqli_fetch_assoc($result);
// print_r($r1);
// echo "<br>";
// print_r($r2);
// echo "<br>";

// while($record = mysqli_fetch_assoc($result)){
// print_r($record);
// echo "<hr>";
// }

// <ul>
//     <?php
//         while($cat=mysqli_fetch_assoc($result)){
//             $articles_count = mysqli_query($connection, "SELECT COUNT(`id`) AS `total_count` 
//             FROM `articles` WHERE `categories_id` = " . $cat["id"]);
//             $articles_count_result = mysqli_fetch_assoc($articles_count);
//             echo "<li>" . $cat["title"] . " (" . $articles_count_result['total_count'] . ")</li>";
//         }
//     
// </ul>

// <?php
// }
// mysqli_close($connection);
// 

//$start_date = "2016-12-10 14:00:00";
// $start_date_timestamp = strtotime($start_date);

// $diff = time() - $start_date_timestamp;
// $days_passed = floor((($diff/60)/60)/24);
// echo "Между" . date("d.m.Y H:i:s", $start_date_timestamp) . " и " . 
// date("d.m.Y H:i:s") . " прошло " . $days_passed . " дней!";