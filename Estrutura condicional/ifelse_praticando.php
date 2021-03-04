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
    $valorCompra = 225;
    $valorFrete = 50;
    $recebeuDescontoFrete = false;
    if ($cartaoUsuario == true && $valorCompra >= 100) {
        $valorFrete = 0;
        $recebeuDescontoFrete = true;
    }
    ?>

    <h1>Detalhes do pedido</h1>
    <p>Possui cartão da loja?
        <?php
        if ($cartaoUsuario == true) {
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