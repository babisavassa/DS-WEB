<?php 
    class Veiculo {
        public $marca;
        public $modelo;
        private $velocidade;
        public function getVelocidade() {
            return $this->velocidade;
        }
        public function setVelocidade($n1) {
            $this->velocidade = $n1;
        }
    }
    class Carro extends Veiculo{
        public function acelerar(){
            return "Pedal";
        }
    }
    class Moto extends Veiculo{
        public function acelerar(){
            return "Punho";
        }
    }
    $ferrari = new Carro();
    $ferrari->setVelocidade(180);
    echo "Metodo de acelerar: " . $ferrari->acelerar() . " velocidade máxima: " . $ferrari->getVelocidade() . "Km/h";

    $bmw = new Moto();
    $bmw->setVelocidade(230);
    echo "Metodo de acelerar: " . $bmw->acelerar() . " velocidade máxima: " . $bmw->getVelocidade() . "Km/h";
?>