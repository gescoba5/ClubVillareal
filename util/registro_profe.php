<?php
  include ("../control/conexion.php");

  // Check for empty fields
  if(empty($_POST['name'])    ||
    empty($_POST['lastName']) ||
    empty($_POST['user'])     ||
    empty($_POST['password']))
  {
    echo "Ning&uacute;n argumento suministrado";
    return false;
  }

  $name     = $_POST['name'];
  $lastName = $_POST['lastName'];
  $user     = $_POST['user'];
  $password = $_POST['password'];

  $query = mysqli_query($connection, "INSERT INTO administrador (nombre_admin,
    apellido_admin, usuario_admin, clave_admin) VALUES ('$name', '$lastName',
    '$user', md5('".$password."'))");

  mysqli_close($connection);
?>