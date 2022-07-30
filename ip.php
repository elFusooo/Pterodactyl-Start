<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://ipecho.net/plain");
$output = curl_exec($ch);
curl_close($ch);

echo $output
?>