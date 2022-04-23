<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Crear usuario</title>
  <link rel="stylesheet" href="../css/styles.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="../css/createFormStyles.css?v=<?php echo time(); ?>">
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</head>
<body>
  <header>
    <h2>Crear usuario</h2>
  </header>

  <form action="../apiMethods/create_user.php" method="POST">
    <div class="campo">
      <div class="input">
        <label for="first_name">Primer nombre:</label>
        <input type="text" name="first_name" id="first_name">
      </div>
      <span id="first_name_error"></span>
    </div>

    <div class="campo">
      <div class="input">
        <label for="second_name">Segundo nombre:</label>
        <input type="text" name="second_name" id="second_name">
      </div>
      <span id="second_name_error"></span>
    </div>

    <div class="campo">
      <div class="input">
        <label for="first_surname">Primer apellido:</label>
        <input type="text" name="first_surname" id="first_surname">
      </div>
      <span id="first_surname_error"></span>
    </div>

    <div class="campo">
      <div class="input">
        <label for="second_surname">Segundo apellido:</label>
        <input type="text" name="second_surname" id="second_surname">
      </div>
      <span id="second_surname_error"></span>
    </div>

    <div class="campo">
      <div class="input">
      <label for="email">Email:</label>
      <input type="text" name="email" id="email">
    </div>
    <span id="email_error"></span>
    </div>

    <div class="campo">
      <div class="input">
        <label for="password">Password:</label>
        <input type="password" name="password" id="password">
      </div>
      <span id="password_error"></span>
    </div>
    <input type="submit" value="Crear usuario" id="submit">

  </form>
  <section>
    <a href="javascript:history.back()">Volver</a>
  </section>
  <script type="text/javascript" src="../validators/validatorCreate.js"></script>
</body>
</html>
