<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="./css/styles.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="./css/loginFormStyles.css?v=<?php echo time(); ?>">
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</head>
<body>
  <header>
    <h2>Login</h2>
  </header>

  <form action="./apiMethods/login_user.php" method="post">
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
    <input type="submit" value="Login">
  </form>
  <section>
    <p class="alert">
      <?php
        session_start();
        if (isset($_SESSION['error'])) {
          echo $_SESSION['error'];
          unset($_SESSION['error']);
        }
      ?>
    </p>
  </section>
  <section>
    <a href="../interfaces/createForm.php">Registrarme</a>
  </section>
  <script src="./validators/validatorLogin.js"></script>
</body>
</html>
