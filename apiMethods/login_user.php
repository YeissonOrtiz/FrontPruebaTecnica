<?php

  $email = $_POST['email'];
  $password = $_POST['password'];

  $array = array(
    'email' => $email,
    'password' => $password,
  );

  $data = json_encode($array);

  $ch = curl_init();

  $options = array(
    CURLOPT_URL => 'https://apiusersyeisson.herokuapp.com/api/users/login',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $data,
    CURLOPT_HTTPHEADER => array('Content-type: application/json'),
  );

  curl_setopt_array($ch, $options);
  $result = curl_exec($ch);

  curl_close($ch);

  session_start();

  if ($result == "true") {
    header('Location: ../interfaces/index.php');
    $_SESSION["logged"] = true;

  }else{
    header('Location: ../loginForm.php');
    $_SESSION["logged"] = false;
    $_SESSION["error"] = "Usuario o contraseña incorrectos";
  }

?>
