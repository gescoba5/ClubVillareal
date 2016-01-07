<?php
  include ("../control/conexion.php");

  /* El query valida si el usuario ingresado existe en la tabla de
   * administrador de la base de datos.
   *
   * Se utiliza la función htmlentities para evitar inyecciones SQL.
   */
  $selectAdmin = mysqli_query($connection, "SELECT usuario_admin FROM
    administrador WHERE usuario_admin =
    '".htmlentities(isset($_POST["usuario"])?$_POST["usuario"]:NULL)."'");
  $numAdmin = mysqli_num_rows($selectAdmin);

  // Si existe el usuario, validamos también la contraseña ingresada.
  if ($numAdmin != 0) {
    $sql = "SELECT * FROM administrador WHERE usuario_admin = '"
      .htmlentities($_POST["usuario"])."' AND clave_admin = '"
      .md5(htmlentities($_POST["password"]))."'";

    $claveUsuario = mysqli_query($connection, $sql);
    $numClaveUsuario = mysqli_num_rows($claveUsuario);

    // Si el usuario y clave ingresado son correctos, se crea la sesión.
    if ($numClaveUsuario != 0) {
      session_start();

      // Se guarda el resultado del query en un arreglo asociado por el nombre
      // de la columna.
      $row = mysqli_fetch_array($claveUsuario, MYSQLI_ASSOC);

      // Se guarda el nombre del usuario en un arreglo dividido por espacios.
      $nombre = explode(" ", $row["nombre_admin"]);

      // Se guardan dos variables de sesión que sirven para saber si el
      // usuario esta logueado.
      $_SESSION["autentica"] = "SI";
      $_SESSION["usuarioActual"] = $nombre[0] ." " .$row["apellido_admin"];

      // Libera la serie de resultados.
      mysqli_free_result($result);
      mysqli_close($connection);

      // Direcciona a la página principal.
      header ("Location: ../panel/admin.php");
    } else {
      echo "<script>alert('Usuario o Contrase\u00f1a incorrectos');
        window.location.href=\"../index.html\"</script>";

      mysqli_close($connection);
    }
  } else {
      echo "<script>alert('Usuario o Contrase\u00f1a incorrectos');
        window.location.href=\"../index.html\"</script>";

      mysqli_close($connection);
  }
?>