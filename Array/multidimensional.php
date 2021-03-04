<?php
$lista_coisas = [];
$lista_coisas['frutas'] = array(1 =>'Banana' , 2=> 'Maçã' , 3 => 'Morango' , 4 =>'uva');

$lista_coisas['pessoas'] = array(1 =>'João' ,2 => 'José' , 3 => 'Maria');

print '<pre>';
print_r($lista_coisas);
print '</pre>';


print '<hr>';
print $lista_coisas['frutas'][3];
print '<hr>';
print $lista_coisas['pessoas'][2];

