<?php

$url = 'https://apiusersyeisson.herokuapp.com/api/users/' . $_SERVER['QUERY_STRING'];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);


if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}else{
  $decoded = json_decode($response);
}

return $decoded;

curl_close($ch);

?>
