<?php

$itens = array('sofá', 'mesa' , 'cadeira' , 'fogão' , 'geladeira');

print '<pre>';
print_r($itens);
print '</pre>';

foreach($itens as $item){
    echo $item;

    if($item == 'mesa'){
        echo ' (*Compre uma mesa e ganhe 25% de desconto)';
    }

    echo '<hr>';
}