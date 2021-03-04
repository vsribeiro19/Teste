<?php
class Veiculo {
    public $modelo;
    public $cor;
    public $ano;

    public function Andar(){
        print "Andou";
    }

    public function Parar(){
        print "Parou";
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
$carro->modelo = "Fiesta";
echo $carro->modelo;