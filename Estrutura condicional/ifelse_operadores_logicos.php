<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If/Else com Operadores lógicos</title>
</head>
<body>
    <?php
        echo '<h2>Operadores && ou AND</h2>';
        echo '<p>E: AND ou && -> Retorna verdadeiro se ambos os resultados forem verdadeiro</p>';
        $i = 0;
        $v = 'A';
        if($i == 0 && $i == $v ){
            echo 'Verdadeiro';
        }else{
            echo 'Falso';
        }

        echo '<h2>Operador || ou OR</h2>';
        echo '<p>Ou: || ou OR -> Retorna verdadeiro se uma das expressões for verdadeiro</p>';
        if(5 == 7 || 7 < 10){
            echo 'Verdadeiro';
        }else{
            echo 'Falso';
        }

        echo '<h2>Operador XOR</h2>';
        echo '<p>XOR -> Retorna verdadeiro se uma das expressões for verdadeiro e a outra falsa ou vice-versa.</p>';
        echo '<p>Se tiverem dois resultados verdadeiros, mesmo assim será falso, pois o XOR sempre espera um resultado verdadeiro e outro falso.</p>';
        if(5 == 7 XOR 7 > 10){
            echo 'Verdadeiro';
        }else{
            echo 'Falso';
        }
    ?>
</body>
</html>