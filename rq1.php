<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 1</title>
</head>
<body>
<?php
$angulo1 = $_POST["angulo1"];
$angulo2 = $_POST["angulo2"];
$angulo3 = $_POST["angulo3"];

$triangulo = $angulo1 + $angulo2 + $angulo3;

if ($angulo1 === 0 || $angulo2 === 0 || $angulo3 === 0) {
    echo("Não existe triângulo com um dos lados de ângulo zero!");
}  elseif ($triangulo != 180 ) {
    echo("Não é um triângulo!");
} elseif ($angulo1 == 90 || $angulo2 == 90 || $angulo3 == 90)  {
    echo("Este é um triângulo retângulo!");
} else {
    echo("Este é um triângulo acutângulo!");
}



?>
    
</body>
</html>