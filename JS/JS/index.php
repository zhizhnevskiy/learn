<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<script>
    // let user = {
    //     name: "John",
    //     age: 30,
    //     isAdmin: true
    // };
    //
    // for (let key in user) {
    //     // ключи
    //     console.log(key);  // name, age, isAdmin
    //     // значения ключей
    //     console.log(user[key] ); // John, 30, true
    // }

    let userTest = {};
    userTest.name = 'John';
    userTest.surname = 'Smith';
    userTest.name = 'Pete';
    console.log(userTest.name);
</script>


<?php
echo $today = date('Y-m-d') . '<br>';
echo $todayMinus1day = date('Y-m-d', strtotime('-1 days')) . '<br>';
echo $todayMinus7day = date('Y-m-d', strtotime('-7 days')) . '<br>';
phpinfo();
?>
<!--<script>-->
<!--    alert('Hi from php file!');-->
<!--    // debugger;-->
<!--</script>-->
<!---->
<!--<script>console.log('Test JS!');</script>-->
<!---->
<!--<script src="script.js"></script>-->

</body>
</html>