<?php

$adi = 2 + 5;
$sub = 5 - 2;
$mult = 5 * 2;
$div = 5 / 2;
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <title>Cálculo simples utilizando PHP + HTML</title>
</head>
<body>
    <p>2 + 5 =  <?=$adi ?></p>
    <p>5 - 2 =  <?=$sub ?></p>
    <p>5 * 2 =  <?=$mult ?></p>
    <p>5 / 2 =  <?=$div ?></p>
    <hr>
    <span>7 * 2.5 = </span>
    <span><?=($adi * $div) ?></span>
</body>
</html>
