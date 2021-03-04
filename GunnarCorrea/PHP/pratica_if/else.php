<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Estudando PHP no HTML</title>
</head>

<body>
    <h2>Calculadora simples</h2>
    <form method="post">
        <input type="text" placeholder="Informe um valor" name="v1">
        <br><br>
        <input type="text" placeholder="Informe outro valor" name="v2">
        <br><br>
        <select>
            <option>Escolha uma das operações</option>
            <option name="1">Adição</option>
            <option name="2">Subtração</option>
            <option name="3">Multiplição</option>
            <option name="4">Divisão</option>
        </select>
        <br><br>
        <button type="submit" name="calculo">Calcular</button>
        <br><br>
        <label><b>Resultado</b></label>
        <br>
        <input type="text" name="result" style="padding: 30px;">
    </form>

    <?php
    $v1 = $_POST['v1'];
    $v2 = $_POST['v2'];
    $adicao = $v1 + $v2;
    $sub = $v1 - $v2;
    $mult = $v1 * $v2;
    //$div = $v1 / $v2;
    $tpOp = 0;
    $r = $_POST['result'];
    if(!empty('v1') and !empty('v2')){
        if($tpOp == 1){
            print  $adicao . $r;
        }
    }


    ?>

</body>
</html>

