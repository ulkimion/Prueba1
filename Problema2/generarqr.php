<?php
require 'qr/phpqrcode/qrlib.php';

$nombre = $_GET['nombre'];
$apellido = $_GET['apellido'];

$dir = 'temp/';

if(!file_exists ($dir))
    mkdir($dir);

$filename = $dir.'test.png';


$tamano = 10;
$level = 'M';
$frameSize = 3;
$contenido = $nombre .' '. $apellido;

QRcode::png($contenido, $filename, $level, $tamano, $frameSize);

echo '<img src="'.$filename.'"/>';