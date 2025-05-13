<?php
$ancho = 150;
$alto = 40;

$imagen = imagecreate($ancho, $alto);

$col = imagecolorallocate($imagen, 100, 149, 237); 
$blanco = imagecolorallocate($imagen, 255, 255, 255);

imagefilledrectangle($imagen, 10, 10, $ancho - 10, $alto - 10, $col);

imagestring($imagen, 5, 40, 12, "Boton", $blanco);

header("Content-type: image/png");
imagepng($imagen);

imagedestroy($imagen);
?>

