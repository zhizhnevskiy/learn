<?php
// create api
require 'connect.php';

$posts = mysqli_query($connect, 'SELECT * FROM `api_test`');

$posrList = [];

while ($post = mysqli_fetch_assoc($posts)) {
    $postList[] = $post;
}

echo json_encode($postList);
?>

<pre>
<?= print_r($postList); ?>
</pre>

<?php
//get api
$url = 'http://api.openweathermap.org/data/2.5/weather';
$options = [
    'q' => 'MINSK',
    'APPID' => 'fd54ca78ca7d8c6d412a76ba5cb646d9',
    'units' => 'metric',
    'lang' => 'en',
];

$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $url . '?' . http_build_query($options));

$response = curl_exec($ch);
$data = json_decode($response, true);
curl_close($ch);

?>
<pre>
    <?= print_r($data) ?>
</pre>
