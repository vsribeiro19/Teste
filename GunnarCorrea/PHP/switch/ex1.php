<?php
$msg = "";

switch (6){
    case 1:
        $msg = "Dia 1";
        break;
    case  2:
        $msg = "Dia 2";
        break;
    case 3:
        $msg = "Dia 3";
        break;
    case 4:
        $msg = "Dia 4";
        break;
    case 5:
        $msg = "Dia 5";
        break;
    default:
}
?>
<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
</head>
<body>
    <p>Olá, hoje é o dia <?=$msg;?></p>
</body>
</html>
