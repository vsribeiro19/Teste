<?php

$nomeCompleto = 'Victor Ribeiro';
print '<h2>Conteúdo da variável</h2>';
echo $nomeCompleto;

print '<h2>Mostra o tipo de variaveis estamos usando</h2>';
//mostra o tipo de variaveis estamos usando
echo gettype($nomeCompleto);

print '<br>';

$salario = 1.700;
print gettype($salario);