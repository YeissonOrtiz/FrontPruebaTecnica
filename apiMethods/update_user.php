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

  $url = "https://apiusersyeisson.herokuapp.com/api/users/edituser/" . $_POST['id'];

  $curl = curl_init($url);
  curl_setopt($curl, CURLOPT_URL, $url);
  curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PATCH");
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

  $headers = array(
    "Content-Type: application/json",
    "Accept: application/json",
  );
  curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

  curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

  $resp = curl_exec($curl);

  curl_close($curl);

  header('Location: ../interfaces/index.php');

?>
