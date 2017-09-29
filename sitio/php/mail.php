<?php
$name = $_POST['nombre'];
$email = $_POST['email'];
$phone = $_POST['telefono'];
$message = $_POST['mensaje'];
$formcontent=" Formulrio: $name \n Telefono: $phone \n E-mai: $email \n Message: $message";
$recipient = "madrigalnorlan8@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "<script>alert('Gracias por tu mensaje')</script>";
echo "<script>window.location='../subpaginas/contacto.html'</script>";
?>
