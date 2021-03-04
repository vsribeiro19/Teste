<?php
/*
 * Declare uma variável chamada índice e atribua a ela o valor 0, em seguida
utilizando while, incremente 1 a cada repetição e exiba o valor na tela. A
condição de saída para o while deve ser quando o índice for menor que 20.*/

print '<p>Utilizando While</p>';
$i = 0;
while($i <= 20){
    echo $i . '<br>';
    $i++;
}

print '<p>Utilizando For</p>';

for($i = 0; $i <=20; $i++){
    echo $i . '<br>';
}