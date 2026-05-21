<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 7</title>
</head>
<body>
    <form method="post" name="formulario" action="rq7.php">
        <label for="A0">A0 (valor inicial):</label><br>
        <input type="number" id="A0" name="A0" required><br><br>

        <label for="limite">Limite:</label><br>
        <input type="number" id="limite" name="limite" required><br><br>

        <label for="R">Razão (R):</label><br>
        <input type="number" id="R" name="R" required><br><br>

        <button type="submit">Calcular</button>
        <button type="reset">Limpar</button>
    </form>
    
</body>
</html>