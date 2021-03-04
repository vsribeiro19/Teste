<?php
$cartaoLoja = $_POST['sim'];
$cliente = $_POST['nome'];
$email = $_POST['email'];
$vCompra = $_POST['compra'];
$descontoCliente = 0.1;
// $total;
$linha = '<br><br>';

if ($cartaoLoja == 1) {
    print '<h2>Dados do cliente: </h2>';
    print '<span><b>Nome</b>: </span>' . $cliente . $linha;
    print '<span><b>E-mail</b>: </span>' . $email . $linha;
    print '<span><b>Valor da compra R$: </b></span>' . $vCompra . $linha;
    $vCompra = $vCompra - ($vCompra * ($descontoCliente));
    print '<span><b>Valor com desconto R$: </b></span>' . $vCompra;
} else {
    print '<h2>Dados do cliente: </h2>';
    print '<span><b>Nome</b>: </span>' . $cliente . $linha;
    print '<span><b>E-mail</b>: </span>' . $email . $linha;
    print '<span><b>Valor da compra R$: </b></span>' . $vCompra . $linha;
    
}
