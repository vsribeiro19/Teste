<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praticando mais com PHP (if / else)</title>
</head>

<body>
    <?php

    $cartaoUsuario = true;
    $valorCompra = 750;
    $valorFrete = 50;
    $recebeuDescontoFrete = true;
    if ($cartaoUsuario && $valorCompra >= 400) {
        $valorFrete = 0;
    } else if ($cartaoUsuario && $valorCompra >= 300) {
        $valorFrete = 10;
    } else if ($cartaoUsuario && $valorCompra >= 100) {
        $valorFrete = 25;
    }else{
        $recebeuDescontoFrete = false;
    }
    ?>

    <h1>Detalhes do pedido</h1>
    <p>Possui cartão da loja?
        <?php
        if ($cartaoUsuario) {
            echo 'SIM';
        } else {
            echo 'NÃO';
        }
        ?>
    </p>

    <p>Valor da compra: <?= $valorCompra ?></p>
    <p>Recebeu desconto no frete?
        <?php
        if ($cartaoUsuario == true) {
            echo 'SIM';
        } else {
            echo 'NÃO';
        }
        ?>
    </p>
    <p>Valor frete: <?= $valorFrete ?></p>

</body>

</html>