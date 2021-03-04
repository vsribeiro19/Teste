<?php
$i;
$valor = $_POST['valorDigitado'];
$calculo;
$total;

for ($i = 1; $i <= 10; $i++) {
    $calculo = $valor * $i;
    $total = $valor . ' x ' . $i . ' = ' . $calculo . '<br>';
    echo $total;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado tabuada</title>
    <style>
        .borda {
            padding: 5px;
            width: 70px;
            margin-top: 15px;
        }

        button {
            background: blue;
            color: #fff;
        }
    </style>
</head>

<body>
    <a href="front_tabuada.php">
        <button class="borda">Voltar</button>
    </a>
</body>

</html>