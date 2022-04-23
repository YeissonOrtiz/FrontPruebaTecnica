<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="../css/styles.css">
  <link rel="stylesheet" href="../css/loginFormStyles.css">
</head>
<body>
  <header>
    <h2>Login</h2>
  </header>

  <form action="../apiMethods/login_user.php" method="post">
    <div class="campo">
      <label for="email">Email:</label>
      <input type="text" name="email" id="email">
    </div>
    <div class="campo">
      <label for="password">Password:</label>
      <input type="password" name="password" id="password">
    </div>
    <input type="submit" value="Login">
  </form>

  <p class="alert">
    <?php
      session_start();
      if (isset($_SESSION['error'])) {
        echo $_SESSION['error'];
        unset($_SESSION['error']);
      }
    ?>
  </p>
  <section>
    <a href="../interfaces/createForm.php">Registrarme</a>
  </section>
</body>
</html>
