<?php
  include ("../control/conexion.php");

  // Check for empty fields
  if(empty($_POST['name'])     ||
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

  /*$queryUser = mysqli_query($connection, "SELECT * FROM administrador WHERE
    usuario_admin = '".$user."'");
  $numUser = mysqli_num_rows($queryUser);

  if ($numUser != 0) {
    mysqli_close($connection);
    echo "<script>alert('El nombre de usuario ya existe, por favor elija otro');
      window.location.href=\"../panel/profes.php\"</script>";
  } else {*/
    $query = mysqli_query($connection, "INSERT INTO administrador (nombre_admin,
      apellido_admin, usuario_admin, clave_admin) VALUES ('$name', '$lastName',
      '$user', md5('".$password."'))");

    mysqli_close($connection);
  //}
?>