<?php

$times = array('Corinthians' , 'Santos', 'São Paulo', 'Palmeiras' , 'Flamengo');
echo count($times);

foreach($times as $v){
    echo $v . '<br>';
}

print '<hr>' . '<br>';

print '<h3>Clientes</h3>';

$n1 = 'Victor';
$n2 = 'Fábio';
$clientes = array($n1 , $n2);

foreach ($clientes as $valor){
    echo $valor . '<br>';
}