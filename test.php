<?php

$array = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$array[] = 12;

foreach ($array as $value) {
    if ($value % 2 == 0) {
        echo $value . '<br>';
    } else {
        echo 'no<br>';
    }
}

echo 'count = ' . count($array) . '<br>';

for ($i = 0; $i < count($array); $i++) {
    if ($i <= $array[$i]) {
        echo $array[$i] . '<br>';
    }
}
echo '<br>';

do {
    $a = rand(0, 10);
    $b = rand(0, 10);
    $c = rand(0, 10);
    $result = $a + $b + $c;
    echo $result . '<br>';
} while ($a + $b + $c < 10);
echo '<br>';

$i = 0;
while ($i < 5) {
    echo 'It`s $i = ' . $i . '<br>';
    $i++;
}
