<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$a = (int) $_GET["a"] ?: "1";
$b = (int) $_GET["b"] ?: "1";
$c = (int) $_GET["c"] ?: "1";


$x1 = ($b * -1) + (sqrt(($b**2) - (4 * $a * $c))) / (2 * $a);
$x2 = ($b * -1) - (sqrt(($b**2) - (4 * $a * $c))) / (2 * $a);

echo "Cuando ± es positivo= $x1 <br>";
echo "Cuando ± es negativo= $x2";

?>
</body>
</html>