<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table>
    <caption>Table</caption>
    <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Date of Birth</th>
        <th>Salary</th>
    </tr>
    <?php
    foreach ($this->users as $value) { ?>
        <tr>
            <td><?= $value["id"] ?></td>
            <td><?= $value["First Name"] ?></td>
            <td><?= $value["Second Name"] ?></td>
            <td><?= $value["Date of Birth"] ?></td>
            <td><?= $value["Salary"] ?></td>
        </tr>
    <?php } ?>
</table>
</body>
</html>
