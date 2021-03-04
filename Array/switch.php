<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escolhendo cursos</title>
</head>

<body>
    <h2>Escolha um curso</h2>
    <select name="curso">
        <option>Curso</option>
        <option name="1" value="Direito">Direito</option>
        <option name="2" value="Ciências da Computação">
            Ciências da Computação</option>
        <option name="3" value="Análise de Sistemas">Análise de Sistemas</option>
    </select>
    <button name="escolha">Escolher</button>
</body>

</html>

<?php
if($_POST['curso']){
    echo 'Ok';
}
?>