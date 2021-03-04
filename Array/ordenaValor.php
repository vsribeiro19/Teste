<?php
if(isset($n1, $n2, $n3, $n4));
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$n3 = $_POST['n3'];
$n4 = $_POST['n4'];
$nomes = [$n1, $n2 , $n3 , $n4];

print 'Nomes digitados:';
print '<pre>';
print_r($nomes);
print '</pre>';

print 'Nomes ordenados:';
sort($nomes);
print '<pre>';
print_r($nomes);
print '</pre>';