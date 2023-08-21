<?php
session_start();
header("Content-type:image/jpeg"); // no olvidarse de agregarlo ,es para que se puede usar como imagen el captcha

$imagen_captcha = imagecreate(70,30);
$fondo = imagecolorallocate($imagen_captcha,239,192,240);
$texto = imagecolorallocate($imagen_captcha,82,4,234);

imagestring($imagen_captcha,5,15,5,$_SESSION['codigo_captcha'],$texto);

imagejpeg($imagen_captcha);






?>