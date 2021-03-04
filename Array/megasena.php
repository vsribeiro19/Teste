<?php

$numeros = array();

while(count($numeros) <= 0){
    $num = rand(1,60);
    //in_array -> checa se um valor existe em um array
    if(!in_array($num, $numeros)){
        $numeros[] = $num;
    }
}

print '<pre>';
print_r($numeros);
print '</pre>';