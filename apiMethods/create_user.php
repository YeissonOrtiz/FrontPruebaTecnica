<?php

  $firstName = $_POST['first_name'];
  $secondName = $_POST['second_name'];
  $firstSurname = $_POST['first_surname'];
  $secondSurname = $_POST['second_surname'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  if ($_POST['second_name'] == '' && $_POST['second_surname'] == '') {
    $array = array(
      'firstName' => $firstName,
      'secondName' => null,
      'firstSurname' => $firstSurname,
      'secondSurname' => null,
      'email' => $email,
      'password' => $password,
    );
  } elseif ($_POST['second_name'] == '') {
    $array = array(
      'firstName' => $firstName,
      'secondName' => null,
      'firstSurname' => $firstSurname,
      'secondSurname' => $secondSurname,
      'email' => $email,
      'password' => $password,
    );
  } elseif ($_POST['second_surname'] == '') {
    $array = array(
      'firstName' => $firstName,
      'secondName' => $secondName,
      'firstSurname' => $firstSurname,
      'secondSurname' => null,
      'email' => $email,
      'password' => $password,
    );
  } else {
    $array = array(
      'firstName' => $firstName,
      'secondName' => $secondName,
      'firstSurname' => $firstSurname,
      'secondSurname' => $secondSurname,
      'email' => $email,
      'password' => $password,
    );
  }

  $data = json_encode($array);

  $ch = curl_init();

  $options = array(
    CURLOPT_URL => 'https://apiusersyeisson.herokuapp.com/api/users/create',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $data,
    CURLOPT_HTTPHEADER => array('Content-type: application/json'),
  );

  curl_setopt_array($ch, $options);
  $result = curl_exec($ch);

  curl_close($ch);

  header('Location: ../interfaces/index.php');

?>
