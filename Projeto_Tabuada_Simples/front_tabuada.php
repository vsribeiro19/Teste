<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada HTML | PHP</title>
    <style>
        .borda {
            padding: 10px;
        }

        button {
            background: blue;
            color: #fff;
        }
    </style>
</head>

<body>
    <h2>Tabuada em HTML e PHP</h2>

    <form action="tabuada.php" method="POST">
        <div class="form-group">
            <!-- valor digitado = 2 -->
            <input type="text" class="borda" name="valorDigitado" size="23" placeholder="Informe a tabuada que deseja">
        </div>
        <button type="submit" name="enviar" class="borda" style="margin-top: 20px;">Calcular</button>
    </form>
</body>

</html>