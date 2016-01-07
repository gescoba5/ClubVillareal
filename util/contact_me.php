<?php
  // Check for empty fields
  if(empty($_POST['name'])      ||
     empty($_POST['email'])     ||
     empty($_POST['phone'])     ||
     empty($_POST['message'])   ||
     !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
  {
   echo "Ning&uacute;n argumento suministrado";
   return false;
  }

  $name = $_POST['name'];
  $email_address = $_POST['email'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];

  // Create the email and send the message
  $to = 'gescobaruribe@gmail.com';
  $email_subject = "Mensaje de contacto Villareal:  $name";
  $email_body = "Has recibido un nuevo mensaje desde ClubVillarealMedellin.com."
    ."\n\nEstos son los detalles:\n\nNombre: $name\n\nE-mail: $email_address"
    ."\n\nTeléfono: $phone\n\nMensaje:\n$message";
  $headers = "From: noreply@clubvillarealmedellin.com\n";
  $headers .= "Reply-To: $email_address"; 
  mail($to, $email_subject, $email_body, $headers);
  return true;
?>