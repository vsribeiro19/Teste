<?php
define("min" , 17);
define("max" , 45);
define($db, );
$idade = 16;
echo "MIN: " . min . '<br>';
echo "MAX: " . max . '<br>';
echo "Idade: " . $idade . '<br><br>';

if($idade >= min && $idade <= max){
    echo "Acesso liberado...";
}else{
    echo "Acesso negado...";
}