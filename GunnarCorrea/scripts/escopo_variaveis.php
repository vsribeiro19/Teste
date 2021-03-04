<?php

$nome = "Victor";
$sobreNome = "Ribeiro";
$email = "victor@email.com";
$endereco = "R. Maria Helena, 125 - St Helena";

function dados()
{
    global $nome, $sobreNome, $email, $endereco;
    print $nome;
    print $sobreNome;
    print $email;
    print $endereco;
}

function recuperaDados(){
    echo dados();
}
dados();

print '<hr>';



