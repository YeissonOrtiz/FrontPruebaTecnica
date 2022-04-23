<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar usuario</title>
  <link rel="stylesheet" href="../css/styles.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="../css/createFormStyles.css?v=<?php echo time(); ?>">
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
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
        <div class="input">
          <label for="">id:</label>
          <input type="text" name="id" value="<?php echo $decoded->id ?>" readonly>
        </div>
      </div>

      <div class="campo">
        <div class="input">
          <label for="">Primer nombre:</label>
          <input type="text" name="first_name" id="first_name" value="<?php echo $decoded->firstName ?>">
        </div>
        <span id="first_name_error"></span>
      </div>

      <div class="campo">
        <div class="input">
          <label for="">Segundo nombre:</label>
          <input type="text" name="second_name" id="second_name" value="<?php echo $decoded->secondName?>">
        </div>
        <span id="second_name_error"></span>
      </div>

      <div class="campo">
        <div class="input">
          <label for="">Primer Apellido:</label>
          <input type="text" name="first_surname" id="first_surname" value="<?php echo $decoded->firstSurname ?>">
        </div>
        <span id="first_surname_error"></span>
      </div>

      <div class="campo">
        <div class="input">
          <label for="">Segundo Apellido:</label>
          <input type="text" name="second_surname" id="second_surname" value="<?php echo $decoded->secondSurname ?>">
        </div>
        <span id="second_surname_error"></span>
      </div>

      <div class="campo">
        <div class="input">
          <label for="">Email:</label>
          <input type="text" name="email" id="email" value="<?php echo $decoded->email ?>">
        </div>
        <span id="email_error"></span>
      </div>

      <div class="campo">
        <div class="input">
          <label for="">Password:</label>
          <input type="password" name="password" id="password" value="<?php echo $decoded->password ?>">
        </div>
        <span id="password_error"></span>
      </div>

      <input type="submit" value="Actualizar usuario" id="submit">
    </form>
    <section>
      <a href="javascript:history.back()">Volver</a>
    </section>
  </main>
  <script src="../validators/validatorCreate.js"></script>
</body>
</html>
