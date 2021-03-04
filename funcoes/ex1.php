<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //functio  void -> sem retorno
        function exibirBoasVindas(){
            echo 'Bem vindo ao curso de PHP' . '<br>';
        }

        exibirBoasVindas();

        //function com retorno
        //os parametros dentro do parantes são os utilizados dentro da função
        function calcularAreaTerreno($largura, $comprimento){
            $area =  $largura * $comprimento;
            return $area;
        }

        echo calcularAreaTerreno(5 , 25);
    ?>
</body>
</html>