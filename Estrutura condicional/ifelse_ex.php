<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício Loja - if/else</title>
</head>

<body>

    <?php
        $cliente = false;
        $valorCompra = 100;
        $desconto = 20;

        if($cliente){
            echo 'Cliente';
            echo '<br>';
            echo 'Total: ' . ($valorCompra - $desconto);
        }else{
            echo 'Não é cliente';
            echo '<br>';
            echo 'Total: ' . $valorCompra;
        }
    ?>


</body>

</html>