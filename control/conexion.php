<?php
  include ("datos_conexion.php");

  $connection = mysqli_connect("$host", "$usuario", "$password", "$DB");

  // Guarda acentos en la BD
  mysqli_query($connection, "SET NAMES 'utf8'");

  if ($connection->connect_error) {
    die ('Connect Error (' . $connection->connect_errno . ') '
      . $connection->connect_error);
  }
?>