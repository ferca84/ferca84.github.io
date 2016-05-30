<?php
$MAIL_DUENIO = 'fernandocaino84@gmail.com';
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
//$headers .= 'From: <latinoamericasalvajeapp@latinoamericasalvajeapp.com>' . "\r\n";

if(isset($_POST['nombre'])) {
	
	//$form = json_decode($_POST['nombre']);
	$nombre = $_POST['nombre'];
	$email = $_POST['email'];
	$titulo = $_POST['titulo'];
	$mensaje = $_POST['mensaje'];

$mensaje_cliente = "De: $nombre <br/><br/>Mail: $email <br /><br />Tema: $titulo <br /><br />Mensaje: $mensaje ";

$sent = mail($MAIL_DUENIO,"Consulta Latinoamerica Salvaje",$mensaje_cliente,$headers);

if($sent) {
	echo 'ok';
} else {
	echo 'Hubo un error';
}
	
}



?>