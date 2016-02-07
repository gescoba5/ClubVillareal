<?php
  include ("../control/conexion.php");

  // Check for empty fields
  if (empty($_POST['docId']) ||
    empty($_POST['pago'])    ||
    empty($_POST['valor'])   ||
    empty($_POST['concepto']))
  {
    echo "Ning&uacute;n argumento suministrado";
    return false;
  }

  $docId    = $_POST['docId'];
  $pago     = $_POST['pago'];
  $valor    = $_POST['valor'];
  $concepto = $_POST['concepto'];

  $sql = mysqli_query($connection, "SELECT * FROM jugador WHERE 
    documento_jugador = $docId");
  $numSql = mysqli_num_rows($sql);

  if ($numSql == 0) {
    echo "<script>alert('El documento $docId no existe');
      window.location.href=\"../panel/pagos.php\"</script>";
    mysqli_close($connection);
  } else {
    $query = mysqli_query($connection, "INSERT INTO pago (documento_jugador,
    pago, valor, concepto) VALUES ('$docId', '$pago', '$valor', '$concepto')");

    if ($query) {
      echo "<script>alert('El pago para el documento $docId se registr\u00f3 exitosamente');
      window.location.href=\"../panel/pagos.php\"</script>";
      mysqli_close($connection);
    } else {
      echo "<script>alert('El pago para documento $docId no se pudo registrar');
      window.location.href=\"../panel/pagos.php\"</script>";
      mysqli_close($connection);
    }
  }
?>