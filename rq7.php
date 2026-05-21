<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 7</title>
</head>
<body>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $A0 = floatval($_POST["A0"]);
    $limite = floatval($_POST["limite"]);
    $R = floatval($_POST["R"]);

    $termo = $A0;
    $valores = [];

    // Evita loop infinito
    if ($R == 1 && $A0 < $limite) {
        echo "Razão igual a 1 gera repetição infinita.";
    } elseif ($R == 0) {
        if ($A0 < $limite) {
            echo $A0;
        } else {
            echo "Nenhum valor gerado menor que o limite.";
        }
    } else {

        // Proteção extra contra loops infinitos
        $contador = 0;
        $max_iteracoes = 1000;

        while ($termo < $limite && $contador < $max_iteracoes) {
            $valores[] = $termo;
            $termo *= $R;
            $contador++;
        }

        if ($contador >= $max_iteracoes) {
            echo "Interrompido para evitar loop infinito.";
        } elseif (empty($valores)) {
            echo "Nenhum valor gerado menor que o limite.";
        } else {
            echo implode(" ", $valores);
        }
    }

} else {
    echo "Acesse o formulário primeiro.";
}

?>

</body>
</html>