<?php
function calculoImposto($valor)
{
    $imposto = 0;
    if ($valor < 1903.98) {
        print 'Isento';
    } elseif ($valor >= 1903.99 and ($valor <= 2826.65)) {
        print 'Alíquota de 7,5%';
        $imposto = ($valor * 7.5) / 100;
        print "<br>Reajuste de Impostos: $imposto";
    } elseif ($valor >= 2826.66 and ($valor <= 3751.05)) {
        print 'Alíquota de 15%';
        $imposto = ($valor * 15) / 100;
        print "<br>Reajuste de Impostos: $imposto";
    } elseif ($valor >= 3751.06 and ($valor <= 4664.68)) {
        print 'Alíquota de 22,5%';
        $imposto = ($valor * 22.5) / 100;
        print "<br>Reajuste de Impostos: $imposto";
    } elseif ($valor > 4464.68) {
        print 'Alíquota de 27,5';
        $imposto = ($valor * 27.5) / 100;
        print "<br>Reajuste de Impostos: $imposto";
    }
}

$resultado = calculoImposto(1903.99);
print $resultado;
