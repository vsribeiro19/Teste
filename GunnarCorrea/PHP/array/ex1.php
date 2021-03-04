<?php
$arrayNome = array("Pedro" , "Victor" , "Fernando" , "Fábio" , "Lucas", "Maria", "Stephany");
echo $arrayNome[4];
//count(nomeArray) -> exibe quantas informações estiverem dentro do array;
print '<br>' . '<br>';
?>
<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <title>Array</title>
</head>
<body>
<select id="slProfessores" name="slProfessores">
        <?php
        for($i = 0; $i < count($arrayNome); $i++){
        ?>
        <option value="<?= $i; ?>"><?= $arrayNome[$i]; ?></option>
        <?php
    }
        ?>
</select>
    <button onclick="alert(document.getElementById('slProfessores').value);">Selecionar</button>
</body>
</html>