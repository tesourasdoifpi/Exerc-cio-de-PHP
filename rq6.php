<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 6</title>
</head>
<body>
<?php

$a = $_POST["a"];
$b = $_POST["b"];
$c = $_POST["c"];



if ($a == 0) {
    echo ("O coeficiente 'a' deve ser diferente de zero para ser uma equação do 2º grau.");
}


$delta = ($b ** 2) - (4 * $a * $c);

if ($delta < 0) {
    echo ("Delta = {$delta}. A equação não possui raízes reais.");
} elseif ($delta == 0) {
        $x = -$b / (2 * $a);
        echo ("Delta = 0. A equação possui uma raiz real: x = {$x}");
    } else {
        $x1 = (-$b + sqrt($delta)) / (2 * $a);
        $x2 = (-$b - sqrt($delta)) / (2 * $a);
        echo ("Delta = {$delta}. A equação possui duas raízes reais: x' = {$x1} e x'' = {$x2}");
}



?>

</body>
</html>