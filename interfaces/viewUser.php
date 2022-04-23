<?php
  require_once '../apiMethods/get_one_user.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $decoded->firstName. " " .$decoded->firstSurname ?></title>
  <link rel="stylesheet" href="../css/styles.css">
  <link rel="stylesheet" href="../css/viewUserStyles.css">
</head>
<body>
  <header>
    <h2><?php echo $decoded->firstName ." ". $decoded->secondName ." ". $decoded->firstSurname ." ". $decoded->secondSurname?></h2>
  </header>
  <main>
    <div class="campo">
      <p>Email: </p><p class="info"><?php echo $decoded->email ?></p>
    </div>
    <div class="campo">
      <p>Password: </p><p class="info"><?php echo $decoded->password ?></p>
    </div>
    <div class="campo">
      <p>Activo: </p>
      <p class="info"><?php if ($decoded->isActive) {
      echo "Si";
      }else{
        echo "No";
      } ?></p>
    </div>
  </main>
  <section>
    <a href="../interfaces/index.php">Volver</a>
  </section>
</body>
</html>
