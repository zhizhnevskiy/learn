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