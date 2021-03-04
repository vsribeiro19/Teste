<?php

print '<h2>Trabalhando com Array</h2>';
print '<form action="" method="post">';
print '<input type="text" name="nome" placeholder="Informe o seu nome">';
print '<br>';
print '<br>';
print '<input type="text" name="sNome" placeholder="Informe o seu sobrenome">';
print '<br>';
print '<br>';
print '<input type="text" name="salario" placeholder="Informe o seu salário">';
print '<br>';
print '<br>';
print '<input type="text" name="email" placeholder="Informe o seu e-mail">';
print '<br>';
print '<br>';
print '<button>Imprimir</button>';

$valores = array($nome = $_POST['nome'],
    $sobrenome = $_POST['sNome'],
    $salario = $_POST['salario'],
    $email = $_POST['email']);

foreach($valores as $valor){
    print "<p>$valor <br></p>";
}
