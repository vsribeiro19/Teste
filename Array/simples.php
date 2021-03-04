<?php
//array numerico
$carros = array('Fiesta' , 'Civic' , 'Corolla' , 'C3');

print '<pre>';
print_r($carros);
print '</pre>';

print '<p>Incluindo mais um valor no Array</p>';

$carros[] = 'HB20';
print '<pre>';
print_r($carros);
print '</pre>';

print $carros[0];

print '<br>';

//array associativo
$carros = array('f' => 'Fiesta' ,
    'c' => 'Civic' ,
    'co' =>'Corolla' ,
    'c3' =>'C3');
print '<pre>';
var_dump($carros);
print '</pre>';

print $carros['f'];
print '<p>Incluindo mais um valor no Array</p>';

$carros['m'] = 'Mustang';
print '<pre>';
var_dump($carros);
print '</pre>';


$marcas = ['Peugeot' , 'Citron' , 'Mercedes-Benz' , 'BMW'];
var_dump($marcas);