<?php
$MAIL_DUENIO = 'fernandocaino84@gmail.com';
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: <latinoamericasalvajeapp@latinoamericasalvajeapp.com>' . "\r\n";

if(isset($_POST['email'])) {

$mensaje_cliente = "De: ' . $_POST['nombre'] . '<br/><br/>Mail: ' . $_POST['email'] . '<br /><br />Tema: ' . $_POST['titulo'] . '<br /><br />Mensaje: ' . $_POST['mensaje'] .'";

$sent = mail($MAIL_DUENIO,"Consulta Latinoamerica Salvaje",$mensaje_cliente,$headers);

if($sent) {
	echo 'ok'
} else {
	echo 'Hubo un error'
}
	
}



?>