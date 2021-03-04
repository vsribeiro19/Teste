<?php


$funcionarios = array(
    array('nome' =>'João', 'salário' => 2500 , 'data nascimento' => '19/01/1996'),
    array('nome' => 'Maria' , 'salário' => 3500),
    array('nome' => 'Júlia' ,'salário' => 4000)
);
print '<pre>';
print_r($funcionarios);
print '</pre>';


foreach ($funcionarios as $idx => $funcionario){
    foreach ($funcionario as $dados => $valor){
        echo "$dados - $valor <br>";
    }

}