<?php
print '<h3>Exibindo Carros com Array</h3>';
$carros = array("Bmw" , "Veloster" , "Hilux");
//inserindo novo dado no array
$carros[] = "Amarok";
print $carros[2];

print '<br>' . '<hr>';

print '<h3>Exibindo Motos com Array</h3>';

$motos = array();
$motos[] = "Yamaha";
$motos[] = "Honda";

print $motos[1];

print '<br>' . '<hr>';

print '<h3>Exibindo listagem de Clientes com Array</h3>';


$clientes = ["Rodrigo" , "Felipe" , "Maria"];
print $clientes[2];
print '<hr>';