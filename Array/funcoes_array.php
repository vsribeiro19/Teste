<?php

print '<h2>Is_Array -> Retorna true ou false se é o parametro é array</h2>';
$array = [];
$retorno = is_array($array);
if ($retorno) {
    print 'Sim, array';
} else {
    print 'Não, array';
}

print '<br>';
print '<br>';
print '<br>';

print '<h2>Is_Array -> Retorna true ou false se é o parametro é array</h2>';
$r = [1 => 'a', 7 => 'b', 18 => 'c'];

$chaves_array = array_keys($r);

print '<pre>';
print_r($chaves_array);
print '</pre>';


print '<br>';

print '<h2>Sort -> Deixa os elementos do arry em ordem alfabética </h2>';
print "<p>Porém, as chaves dos elementos do array também são ordenadas conforme os elementos são ordenados</p>";
$arr = array('teclado', 'mouse', 'cabo htmi', 'gabinete', 'fonte atx', 'notebook');

print "<b>N-ordenado</b>";
print '<pre>';
print_r($arr);
print '</pre>';

sort($arr);
print "<b>Ordenado</b>";
print '<pre>';
print_r($arr);
print '</pre>';

print '<br>';
print '<h2>Asort -> Deixa os elementos do arry em ordem alfabética </h2>';
print "<p>Preserva as chaves dos elementos, não é ordenado igual no sort</p>";
$arr = array('teclado', 'mouse', 'cabo htmi', 'gabinete', 'fonte atx', 'notebook');

print "<b>N-ordenado</b>";
print '<pre>';
print_r($arr);
print '</pre>';

asort($arr);
print "<b>Ordenado</b>";
print '<pre>';
print_r($arr);
print '</pre>';

print '<br>';
print '<h2>Count -> Conta a quantidade de elementos existem no array </h2>';
$arr = array('teclado', 'mouse', 'cabo htmi', 'gabinete', 'fonte atx','notebook');

print '<pre>';
print_r($arr);
print count($arr);
print '</pre>';