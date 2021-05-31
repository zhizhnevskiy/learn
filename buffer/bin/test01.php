<?php

require dirname(__DIR__) . '/config/autoloader.php';

$view = new Buffer\View\Plain();

echo $view->render(
    'index01',
    [
        'userName' => 'Bob',
        'age' => '20'
    ]
);

