<?php
$salario = 1500;
$reajuste = 0;

if($salario <= 1200){
    $reajuste = $salario + 300;
    print "Salário: $salario . <br>";
    print "Salário + Reajuste: $reajuste";

}else if(($salario > 1200) && $salario < 1600){
    $reajuste = $salario + 250;
    print "Salário: $salario . <br>";
    print "Salário + Reajuste: $reajuste";

}else if($salario >= 1600){
    $reajuste = $salario + 200;
    print "Salário: $salario . <br>";
    print "Salário + Reajuste: $reajuste";
}else{
    print  'Valor incorreto';
}