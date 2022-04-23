<?php

  $url = 'https://apiusersyeisson.herokuapp.com/api/users/delete/' . $_SERVER['QUERY_STRING'];
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $result = curl_exec($ch);
  $result = json_decode($result);
  curl_close($ch);

  header('Location: ../interfaces/index.php');

?>
