<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 8</title>
</head>
<body>
<?php
$numero = $_POST["numero"];
$resultado = 1;
    
for ($i = 1; $i <= $numero; $i++) {
    $resultado *= $i;
}
    echo($resultado);
?>
</body>
</html>