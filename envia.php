<?php 
error_reporting(0); 

$nombre = $_POST['nombre']; 
$correo_electronico= $_POST['correo']; 
$correo_electronico_emisor='correo@emisor.com';
$telefono=$_POST['telefono']; 
$quequiere= $_POST['quequiere']; 

$header = 'From: ' . $correo_electronico_emisor . " \r\n"; 
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n"; 
$header .= "Mime-Version: 1.0 \r\n"; 
$header .= "Content-Type: text/plain"; 

$mensaje = "Mensaje fué enviado por : " . $nombre . " \r\n"; 
$mensaje .= "Su e-mail es : " . $correo_electronico . " \r\n"; 
$mensaje .= "Telefono : " . $telefono . " \r\n"; 
$mensaje .= "Mensaje enviado : ".$quequiere . " \r\n"; 
$mensaje .= "Enviado el " . date('d/m/Y', time()); 

$para = 'laundryner.7@gmail.com,arayamunoz.a@gmail.com'; 

$asunto = 'Contacto desde página web'; 

mail($para, $asunto, utf8_decode($mensaje), $header); 


?> 
<script>
	function r() { location.href="http://www.laundryner.cl/1/mensajeok.html" } 
	setTimeout ("r()", 1);
</script>