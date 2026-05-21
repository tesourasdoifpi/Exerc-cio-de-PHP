<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 3</title>
</head>
<body>

<?php
$altura = $_POST["altura"];
$peso = $_POST["peso"];

$imc = $peso / ($altura * $altura);

if ($imc < 25) {
    echo("Seu peso é normal!");
}  elseif ($imc >= 25 && $imc <= 30) {
    echo("Você está obeso!");
} else {
    echo("Você está com obesidade mórbida!");
}


?>
    
</body>
</html>