<?php
$url = "https://emptycoder.com/api/";
echo 'test';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$api_data = curl_exec($ch);
curl_close($ch);
// echo "<pre>";
echo $api_data;
