<?php
echo 'Hi, you will succeed';
?>

<script>
fetch('https://jsonplaceholder.typicode.com/todos/1')
.then(response => response.json())
  .then(json => console.log(json))
</script>

<?php

$curl = curl_init(); //Сохраняем дескриптор сеанса cURL

$link = 'https://jsonplaceholder.typicode.com/posts/1';

curl_setopt($curl,CURLOPT_URL, $link);

$out = curl_exec($curl); //Инициируем запрос к API и сохраняем ответ в переменную

curl_close($curl);

var_dump($response = json_decode($out, true));

var_dump($response['title']);