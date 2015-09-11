<?php 
$nombre = $_POST['nombre']; 
$telefono = $_POST['telefono']; 
$mail = $_POST['mail']; 

$header = 'From: ' . $mail . " \r\n"; 
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n"; 
$header .= "Mime-Version: 1.0 \r\n"; 
$header .= "Content-Type: text/plain"; 

$mensaje = "Este mensaje fue enviado por: " . $nombre . ", el telefono es: " . $telefono . " \r\n"; 
$mensaje .= "Su e-mail es: " . $mail . " \r\n"; 
$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n"; 
$mensaje .= "Enviado el " . date('d/m/Y', time()); 

$para = 'joelengt@gmail.com'; 
$asunto = 'Contacto desde www.cromlu.com'; 

mail($para, $asunto, utf8_decode($mensaje), $header); 

echo "<center><br/><h2><strong>LISTO! YA CASI TIENES TU PORTAFOLIO PROFESIONAL WEB :)</strong></h2><br/> <h3>El mensaje se envio correctamente <br/> Contactaremos contigo por mail dentro de poco</h3> <strong>;)</strong><br/><a href='http://cromlu.com'><h2><strong>Volver a Cromlu</strong></h2></a></center>";
// $url="http://cromlu.com"; 
// echo "<SCRIPT>window.location='$url';</SCRIPT>"; 
?>	
