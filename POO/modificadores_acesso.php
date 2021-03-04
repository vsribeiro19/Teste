<?php
class Veiculo {
    protected $modelo;
    public $cor;
    public $ano;

    public function Andar(){
        print "Andou";
    }

    public function Parar(){
        print "Parou";
    }

    public function setModelo($m){
        $this->modelo = $m;
    }

    public function getModelo(){
        return $this->modelo;
    }
}
class Carro extends Veiculo {
    public function LigarLimpador(){
        echo "Limpando...";
    }
}

class Moto extends Veiculo {
    public function darGrau(){
        echo "Grau";
    }
}
$carro = new Veiculo();
$carro->setModelo("Fiesta");
echo $carro->getModelo();