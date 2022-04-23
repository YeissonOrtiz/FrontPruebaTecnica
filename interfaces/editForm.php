<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar usuario</title>
  <link rel="stylesheet" href="../css/styles.css">
  <link rel="stylesheet" href="../css/createFormStyles.css">
</head>
<body>
  <?php
    require_once '../apiMethods/get_one_user.php';
  ?>
  <header>
    <h2>Editar usuario</h2>
  </header>
  <main>
    <form action="../apiMethods/update_user.php" method="POST">
      <div class="campo">
        <label for="">id:</label>
        <input type="text" name="id" value="<?php echo $decoded->id ?>" readonly>
      </div>
      <div class="campo">
        <label for="">Primer nombre:</label>
        <input type="text" name="first_name" id="first_name" value="<?php echo $decoded->firstName ?>">
      </div>
      <div class="campo">
        <label for="">Segundo nombre:</label>
        <input type="text" name="second_name" id="second_name" value="<?php echo $decoded->secondName?>">
      </div>
      <div class="campo">
        <label for="">Primer Apellido:</label>
        <input type="text" name="first_surname" id="first_surname" value="<?php echo $decoded->firstSurname ?>">
      </div>
      <div class="campo">
        <label for="">Segundo Apellido:</label>
        <input type="text" name="second_surname" id="second_surname" value="<?php echo $decoded->secondSurname ?>">
      </div>
      <div class="campo">
        <label for="">Email:</label>
        <input type="text" name="email" id="email" value="<?php echo $decoded->email ?>">
      </div>
      <div class="campo">
        <label for="">Password:</label>
        <input type="password" name="password" id="password" value="<?php echo $decoded->password ?>">
      </div>
      <input type="submit" value="Actualizar usuario">
    </form>
  </main>
</body>
</html>
