<?php

$titulo = $_POST['titulo'];
$cuerpo = $_POST['cuerpo'];
$categoria = $_POST['categoria'];
$imagen = $_FILES['imagen'];
$autor = $_POST['autor'];
$nombre_archivo = "imagen";

$target_dir = "img/";
$target_file = $target_dir . $nombre_archivo . '.jpg';
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
$check = getimagesize($imagen["tmp_name"]);

if($check !== false) {
    echo "";
} else {
    echo "No es una imagen, ";
}

$host = "localhost";
$user = "root";
$pass = "";
$db = "multimedia_prueba_1";

$conexion = mysqli_connect($host, $user, $pass, $db);

move_uploaded_file($imagen["tmp_name"], $target_file);

//limitar tamano

if(filesize("$target_file") > 2097152){
    echo ("Se llego al limite de datos");
 }
else{
    $consulta = "INSERT INTO noticia (titulo, cuerpo, categoria, imagen, autor) 
            VALUES('$titulo', '$cuerpo', '$categoria','$target_file', '$autor')";

    if (mysqli_query($conexion, $consulta)) {
     echo " registro ingresado";
    }else{
        echo " error al ingresar";
    }

};