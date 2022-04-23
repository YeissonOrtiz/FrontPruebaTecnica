<?php

  $email = $_POST['email'];
  $password = $_POST['password'];

  $array = array(
    'email' => $email,
    'password' => $password,
  );

  $data = json_encode($array);

  $ch = curl_init();

  echo $data;

  $options = array(
    CURLOPT_URL => 'https://apiusersyeisson.herokuapp.com/api/users/login',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $data,
    CURLOPT_HTTPHEADER => array('Content-type: application/json'),
  );

  curl_setopt_array($ch, $options);
  $result = curl_exec($ch);
  echo $result;

  curl_close($ch);

  session_start();

  if ($result == "true") {

    $_SESSION["logged"] = true;

  }else{
    $_SESSION["logged"] = false;
    $_SESSION["error"] = "Usuario o contraseña incorrectos";
  }

?>
