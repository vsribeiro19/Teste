<?php
class Pessoa {
    public $nome;
    public $idade;

    public function Falar(){
        echo $this->nome." de " .$this->idade. " anos acabou de falar";
    }
}


$victor = new Pessoa();
$victor->nome = "Victor Siqueira Leite Ribeiro";
$victor->idade = "24";
$victor->Falar();