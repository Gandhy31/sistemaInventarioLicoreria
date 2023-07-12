<?php
    include("conexion.php");
    $conn = conectar();
    session_start();
    if(isset($_SESSION['idG'])){
      $id=$_SESSION['idG'];
      header("Location: index.php?id=$id");
    }else if(isset($_SESSION['idA'])){
      $id=$_SESSION['idA'];
      header("Location: inicio.php?id=$id");
    }
    if(isset($_GET['e'])){
      echo "<script language=\"javascript\">alert(\"Nombre de usuario o contraseña incorrectos\");</script>";
    }
?>


<!DOCTYPE html>
<html>
  <head>
    <title>El Cuartel</title>
    <link rel="stylesheet" href="css/styles.css" />
  </head>
  <body>
    <div class="login-box">
      <img
        class="avatar"
        src="img/logo.png"
        alt="Logo de Licoreria El Cuartel"
      />
      <h2>Login</h2>
      <form action="login.php" method="POST">
        <div class="user-box">
          <input type="text" name="usuario" required="" />
          <label>Usuario</label>
        </div>
        <div class="user-box">
          <input type="password" name="password" required="" />
          <label>Contraseña</label>
        </div>
        <input type="submit" class="btn btn-outline-primary">
      </form>
    </div>
  </body>
</html>
