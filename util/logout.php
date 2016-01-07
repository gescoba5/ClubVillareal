<?php
  session_start();
  unset($_SESSION["autentica"]); 
  unset($_SESSION["usuarioActual"]);
  session_destroy();
  header ("Location: ../index.html");
  exit;
?>