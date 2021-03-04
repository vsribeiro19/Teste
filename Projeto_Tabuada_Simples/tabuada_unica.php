<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .borda {
            margin-top: 15px;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>

    <form action="#" method="POST">
        <div class="form-group">
            <!-- valor digitado = 2 -->
            <input type="text" class="borda" name="valorDigitado" size="23" placeholder="Informe a tabuada que deseja">
        </div>
        <div class="form-group">
            <button type="submit" class="borda" style="margin-top: 20px;">Calcular</button>
        </div>
        
        <input type="text" name="resultado" value="<?php echo $total['resultado']; ?>" />
    </form>
    <?php

    $i;
    $valor = $_POST['valorDigitado'];
    $calculo;
    $total;

    for ($i = 1; $i <= 10; $i++) {
        $calculo = $valor * $i;
        $total = $valor . ' x ' . $i . ' = ' . $calculo . '<br>';
        // echo $total;
    }
    ?>
</body>

</html>