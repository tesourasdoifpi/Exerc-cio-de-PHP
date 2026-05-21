<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 5</title>
</head>
<body>
    <form method="post" name="formulario" action="rq5.php">
        <label for="hora1">Digite a hora inicial: </label>
        <input type="number" name="hora1" id="hora1" placeholder="Digite a hora inicial..." required>
        <br><br>
        <label for="minuto1">Digite o minuto inicial: </label>
        <input type="number" name="minuto1" id="minuto1" placeholder="Digite o minuto inicial..." required>
        <br><br>
        <label for="hora2">Digite a hora final: </label>
        <input type="number" name="hora2" id="hora2" placeholder="Digite a hora final..." required>
        <br><br>
        <label for="minuto2">Digite o minuto final: </label>
        <input type="number" name="minuto2" id="minuto2" placeholder="Digite o minuto final..." required>
        <br><br>
        <button type="submit">Enviar</button>
        <button type="reset">Limpar</button>
    </form>
    
</body>
</html>