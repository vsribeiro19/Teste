<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="codigoaberto.css">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">
    <title>Formulário adição HTML</title>
</head>
    <h1>
        Formulário HTML - Calculadora
    </h1>
    <h2>Insira dois valores para serem somados</h2>

    <form method="get" action="calculadora.php">
        <fieldset><legend>Valores</legend>
            Valor 1: <input type="number" name="a"><br>
            Valor 2: <input type="number" name="b"><br>
        </fieldset>
        <br>
        <input type="submit" value="Somar">
    </form>
<body>
</body>
</html>