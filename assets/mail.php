<?php
	$to = "jguillermo_2103@hotmail.com,info@colsagradocorazon.edu.pe"; /* Tu email */
	$subject = "Mensaje de la pagina web : colsagradocorazon.edu.pe"; /*Issue*/
	$date = date ("l, F jS, Y"); 
	$time = date ("h:i A") ; 	
	$msg="
	Email: $_REQUEST[email_contact]
	Nombres : $_REQUEST[name_contact]
	Apellidos : $_REQUEST[lastname_contact]
	Movil : $_REQUEST[phone_contact]
	Area : $_REQUEST[subject_contact]
	
	Mensaje enviado desde el sitio web www.colsagradocorazon.edu.pe ,  fecha :  $date, y hora: $time.\n

	Mensaje:
	$_REQUEST[message_contact]";

	mail($to, $subject, $msg, "From: $_REQUEST[email_contact]");
	echo "<h2>Gracias por enviar tu mensaje</h2>";
?>
