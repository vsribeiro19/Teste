<?php

$i = 0;
while($i <= 15){
    print $i . '<br>';
    $i++;
    if($i == 12){
        print 'Número válido, posição:';
    }
}

print  '<br>';

$nome = 'Victor';
$sobrenome = 'Ribeiro';

print '<p>Concatenando com aspas simples</p>';
print 'Meu nome é ' . $nome . ' ' . $sobrenome;
print '<br>';
print '<p>Concatenando com aspas duplas</p>';
print "Meu nome é $nome $sobrenome";
