<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja</title>
</head>
<body>
    <form action="dados.php" method="POST">
    <!-- <input type="text" name="cartaoLoja" size="21" placeholder="Possui cartão da loja? [SIM/NÃO]"><br> -->
    <label for="">Possui cartão da loja?</label><br>
    Sim<input type="radio" name="active"><br>
    Não<input type="radio" name="nao"><br>
    <input type="text" name="nome" size="21" placeholder="Nome"><br>
    <input type="text" name="email" size="21" placeholder="E-mail"><br>
    <input type="text" name="compra" size="21" placeholder="Valor da compra"><br><br>
    <button type="submit">Enviar dados</button>
    </form>
</body>
</html>