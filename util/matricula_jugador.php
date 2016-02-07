<?php
  include ("../control/conexion.php");

  // Check for empty fields
  if(empty($_POST['name'])     ||
    empty($_POST['lastName'])  ||
    empty($_POST['docId'])     ||
    empty($_POST['birth'])     ||
    empty($_POST['age'])       ||
    empty($_POST['address'])   ||
    empty($_POST['tel'])       ||
    empty($_POST['eps'])       ||
    empty($_POST['category'])  ||
    empty($_POST['acudiente']) ||
    empty($_POST['telAcudiente']))
  {
    echo "Ning&uacute;n argumento suministrado";
    return false;
  }

  $name         = $_POST['name'];
  $lastName     = $_POST['lastName'];
  $docId        = $_POST['docId'];
  $birth        = $_POST['birth'];
  $age          = $_POST['age'];
  $address      = $_POST['address'];
  $tel          = $_POST['tel'];
  $eps          = $_POST['eps'];
  $category     = $_POST['category'];
  $acudiente    = $_POST['acudiente'];
  $telAcudiente = $_POST['telAcudiente'];

  $query = mysqli_query($connection, "INSERT INTO jugador (nombre_jugador,
    apellido_jugador, documento_jugador, nacimiento_jugador, edad_jugador,
    direccion_jugador, telefono_jugador, eps_jugador, categoria_jugador,
    acudiente_jugador, tel_acudiente_jugador) VALUES ('$name', '$lastName',
    '$docId', '".date('y-m-d', strtotime($birth))."', '$age', '$address', '$tel',
    '$eps', '$category', '$acudiente', '$telAcudiente')");

  mysqli_close($connection);
?>