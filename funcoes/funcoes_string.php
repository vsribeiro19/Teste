<?php

$texto = 'Curso Completo de PHP';

print '<h2>conteúdo original (passar as letras para minúsculo)</h2>';
echo "<b>$texto</b>";
print '<br>';
print 'conteúdo formatado';
print '<br>';
print strtolower("<b>$texto</b>");

print '<h2>conteúdo original (passar as letras para maiúsculo)</h2>';
echo "<b>$texto</b>";
print '<br>';
print 'conteúdo formatado';
print '<br>';
print strtoupper("<b>$texto</b>");

print '<h2>conteúdo original (passar a primeira letra para maiúsculo)</h2>';
echo "<b>$texto</b>";
print '<br>';
print 'conteúdo formatado';
print '<br>';
print ucfirst("<b>$texto</b>");

print '<h2>conteúdo original (Conta a quantidade de caracteres dentro da string)</h2>';
echo "<b>$texto</b>";
print '<br>';
print 'conteúdo formatado';
print '<br>';
print strlen($texto);