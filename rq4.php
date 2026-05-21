<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 4</title>
</head>
<body>
<?php
$angulo = $_POST["angulo"];


if ($angulo >= 0 && $angulo <= 90) {
    echo("Primeiro quadrante!");
}  elseif ($angulo >= 91 && $angulo <= 180) {
    echo("Segundo quadrante!");
} elseif ( $angulo >= 181 && $angulo <= 270 ){
    echo("Terceiro quadrante!");
} else {
    echo("Quarto quadrante");
}


?>
</body>
</html>