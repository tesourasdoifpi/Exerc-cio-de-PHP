<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 5</title>
</head>
<body>
<?php
$hora1 = $_POST["hora1"];
$minuto1 = $_POST["minuto1"];

$hora2 = $_POST["hora2"];
$minuto2 = $_POST["minuto2"];

$minutosiniciais = ($hora1 * 60) + $minuto1;
$minutosfinais = ($hora2 * 60) + $minuto2;

$tempototal = $minutosfinais - $minutosiniciais;

$horastotais = floor($tempototal / 60);
$minutostotais = $tempototal % 60;

echo("O tempo total gasto foi de: " . $horastotais . " horas e " . $minutostotais . " minutos.");


?>
    
</body>
</html>