<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de usuarios</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/indexStyles.css">
</head>
<body>

  <?php
    session_start();
    if(isset($_SESSION['logged'])){
      echo "logged";
    }
  ?>

  <header>
    <h2>Lista de usuarios</h2>
  </header>
  <a href="./createForm.php" class="newUser">Crear usuario</a>
  <table>
    <tr>
      <th>id</th>
      <th>Primer Nombre</th>
      <th>Segundo Nombre</th>
      <th>Primer Apellido</th>
      <th>Segundo Apellido</th>
      <th>Email</th>
      <th>Password</th>
      <th>isActive</th>
      <th>Opciones</th>
    </tr>
    <?php
      require_once '../apiMethods/get_users.php';
      foreach ($decoded as $user) {
        echo "<tr>";
        echo "<td>" . $user->id . "</td>";
        echo "<td>".$user->firstName."</td>";
        echo "<td>".$user->secondName."</td>";
        echo "<td>".$user->firstSurname."</td>";
        echo "<td>".$user->secondSurname."</td>";
        echo "<td>".$user->email."</td>";
        echo "<td>".$user->password."</td>";
        if ($user->isActive) {
          echo "<td>" ."Activo". "</td>";
        }else{
          echo "<td>" ."Inactivo". "</td>";
        }
        echo "<td>" ."<a href='./editForm.php?".$user->id."'>Editar</a>". "</td>";
        echo "<td>" ."<a href='../apiMethods/inactive_user.php?".$user->id."'>Eliminar</a>". "</td>";
        echo "<td>" ."<a href='./viewUser.php?".$user->id."'>Visualizar</a>". "</td>";
        echo "</tr>";
      }
    ?>
  </table>

</body>
</html>
