<?php
    $nome = $_POST['nome'];
    $email = $_POST['email'];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<title>Retornando nome/e-mail de usuário</title>
</head>
<body>
    <h2>Dados cadastrais</h2>
    <form action="RetornaDados.php" method="post">
        <p>
            <span>Nome:</span>
            <input type="text" value="<?= $nome ;?>">
        </p>
        <p>
            <span>E-mail:</span>
            <input type="text" value="<?= $email ;?>">
        </p>
        <button>
            <a href="InformaNome.php">Voltar</a>
        </button>
    </form>
</body>
</html>
