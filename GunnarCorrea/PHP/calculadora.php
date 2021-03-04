<?php
print '<h1>PHP - CALCULADORA</h1>';

$a = $_GET["a"];
$b = $_GET["b"];
$resultado = $a + $b;

echo '<br>' . 'O valor da soma é: ' . $resultado;

print '<br>';

print '<a href="calculadora_front.php">Voltar</a>';


