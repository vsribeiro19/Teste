<?php
//in_array -> true[1] ou false[0] para a existencia do que está sendo procurado
//array_search -> retorna o indice do valor pesquisado caso exista


$lista_frutas = array('1' => 'Banana' ,'2' => 'Maçã' , '3' => 'Morango' ,'4' => 'Uva');

print '<pre>';
print_r($lista_frutas);
print '</pre>';

echo array_search('Uva', $lista_frutas) . '<br>';



$existe = in_array('Morango', $lista_frutas);
if($existe){
    print 'Sim, o valor existe no Array';
}else{
    print 'Não, o valor nao existe no Array';
}


