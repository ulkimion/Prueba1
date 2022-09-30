<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="registro.php" method="POST" enctype="multipart/form-data">
        <label for="titulo">Titulo: </label>
        <input type="text" id="titulo" name="titulo">
        <br>
        <label for="cuerpo">Cuerpo: </label>
        <input type="text" id="cuerpo" name="cuerpo">
        <br>
        <label for="categoria">Categoria: </label>
        <input type="text" id="categoria" name="categoria">
        <br>
        <label for="imagen">Imagen </label>
        <input type="file" id="imagen" name="imagen">
        <br>
        <label for="autor">Autor: </label>
        <input type="text" id="autor" name="autor">
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>