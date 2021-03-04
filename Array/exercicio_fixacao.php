<?php

print '<h2>Trabalhando com Array</h2>';
print '<form action="" method="post">';
print '<input type="text" name="v1" placeholder="Informe o primeiro valor">';
print '<input type="text" name="v2" placeholder="Informe o segundo valor">';
print '<button>Imprimir</button>';

$valor1 = $_POST['v1'];
$valor2 = $_POST['v2'];

$imprime = array('Primeiro Valor:' => $valor1, 'Segundo Valor:' => $valor2);


foreach($imprime as $k => $v) {
    print "<br>";
    print '<h2>Dados</h2>';
    print "$k <br> $v";
}