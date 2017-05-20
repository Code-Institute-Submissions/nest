<?php

$myemail = "fatiestrada@gmail.com"; 


$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$msg = "Mensaje de \nName: " . $name . "\nEmail: " . $email . "\nPhone: " . $phone . "\nEmail: " . $email;
$msg = wordwrap($msg,70);
mail($myemail,"Contacto web",$msg);
mail($email,"Muchas Gracias por contactarse con Nest",$msg);
echo 'Gracias por escribirnos.  Para volver a la pagina principal haca <a href="index.html">click aqui';
?>