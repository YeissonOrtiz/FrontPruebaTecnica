<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Crear usuario</title>
  <link rel="stylesheet" href="../css/styles.css">
  <link rel="stylesheet" href="../css/createFormStyles.css">
</head>
<body>
  <header>
    <h2>Crear usuario</h2>
  </header>

  <form action="../apiMethods/create_user.php" method="POST">
    <div class="campo">
      <label for="first_name">Primer nombre:</label>
      <input type="text" name="first_name" id="first_name">
    </div>
    <div class="campo">
      <label for="second_name">Segundo nombre:</label>
      <input type="text" name="second_name" id="second_name">
    </div>
    <div class="campo">
      <label for="first_surname">Primer apellido:</label>
      <input type="text" name="first_surname" id="first_surname">
    </div>
    <div class="campo">
      <label for="second_surname">Segundo apellido:</label>
      <input type="text" name="second_surname" id="second_surname">
    </div>
    <div class="campo">
      <label for="email">Email:</label>
      <input type="text" name="email" id="email">
    </div>
    <div class="campo">
      <label for="password">Password:</label>
      <input type="password" name="password" id="password">
    </div>
    <input type="submit" value="Crear usuario">
  </form>

</body>
</html>
