<?php
  include ("datos_conexion.php");

  $connection = mysqli_connect("$host", "$usuario", "$password", "$DB");

  if ($connection->connect_error) {
    die ('Connect Error (' . $connection->connect_errno . ') '
      . $connection->connect_error);
  }
?>