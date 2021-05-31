<?php
$data = ['users' =>
    [
        'id' => '1',
        'First Name' => 'Yura',
        'Second Name' => 'Zhizhnevskiy',
        'Date of Birth' => '24.04.84',
        'Salary' => '1000'
    ],
    [
        'id' => '2',
        'First Name' => 'Sergey',
        'Second Name' => 'Titov',
        'Date of Birth' => '12.06.82',
        'Salary' => '1500'
    ],
    [
        'id' => '3',
        'First Name' => 'Olga',
        'Second Name' => 'Shatova',
        'Date of Birth' => '06.23.89',
        'Salary' => '1300'
    ],
    'userName'=>'Sergey',
    'amountOfNewUsers'=>'100'
];

extract($data);
print_r($users);
print_r($userName);
print_r($amountOfNewUsers);

