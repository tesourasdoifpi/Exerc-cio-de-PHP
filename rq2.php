<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 2</title>
</head>
<body>

<?php

$angulo1 = $_POST["angulo1"];
$angulo2 = $_POST["angulo2"];
$angulo3 = $_POST["angulo3"];

$soma = $angulo1 + $angulo2 + $angulo3;


if ($angulo1 <= 0 || $angulo2 <= 0 || $angulo3 <= 0) {
    echo "Não existe triângulo com ângulo menor ou igual a zero!";


} elseif ($soma != 180) {
    echo "Não é um triângulo!";

} elseif ($angulo1 == 60 && $angulo2 == 60 && $angulo3 == 60) {
    echo "Este é um triângulo equilátero!";

} elseif (
    $angulo1 == $angulo2 ||
    $angulo2 == $angulo3 ||
    $angulo1 == $angulo3
) {
    echo "Este é um triângulo isósceles!";

} else {
    echo "Este é um triângulo escaleno!";
}

?>

</body>
</html>