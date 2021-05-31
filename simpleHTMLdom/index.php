<?php
echo 'hi<br>';

//include 'inc/simple_html_dom.php';
//$html   = file_get_html( 'https://news.yandex.ru/quotes/1.html' );
//$html   = file_get_html( 'https://myfin.by/currency' );
//echo $html;
//$value  = $html->find( '.quote_current_yes', 0 )->find( '.quote__value', 0 )->plaintext;
//$date   = $html->find( '.quote_current_yes', 0 )->find( '.quote__date', 0 )->plaintext;
//$course = array( 'dollar' => $value, 'date' => $date, 'check' => current_time( 'mysql', 1 ) );

$USD = file_get_contents('https://www.nbrb.by/api/exrates/rates/USD?parammode=2');
$course_USD = json_decode($USD, true);
echo '<pre>' . print_r($course_USD, true) . '</pre>';
echo $course_USD['Cur_OfficialRate'];


$RUB = file_get_contents('https://www.nbrb.by/api/exrates/rates/RUB?parammode=2');
$course_RUB = json_decode($RUB, true);
echo '<pre>' . print_r($course_RUB, true) . '</pre>';
echo $course_RUB['Cur_OfficialRate'];


$EUR = file_get_contents('https://www.nbrb.by/api/exrates/rates/RUB?parammode=2');
$course_EUR = json_decode($EUR, true);
echo '<pre>' . print_r($course_EUR, true) . '</pre>';
echo $course_EUR['Cur_OfficialRate'];