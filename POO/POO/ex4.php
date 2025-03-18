<?php
    abstract class Produto{
        public $nome;
        public $preco;
        protected $estoque;
        public function setEstoque($a){
            $this->estoque = $a;
        }

        protected function calcularDesconto(){
            return $this->preco;
        }
    }
    class Eletronico extends Produto{
        public function calcularDesconto(){
            if($this->estoque < 5){
                $this->preco *= 0.90;
            }

            $this->preco *= 0.90;
            return $this->preco;
        }
    }
    class Roupa extends Produto{
        public function calcularDesconto(){
            if($this->estoque < 5){
                $this->preco *=0.90;
            }
            $this->preco *= 0.80;
            return $this->preco;
        }
    }
    $pipoqueira = new Eletronico();
    $pipoqueira->nome= "Pipoqueira";
    $pipoqueira->preco = 200;
    $pipoqueira->setEstoque(20);
    echo $pipoqueira->calcularDesconto();

    $vestido = new Roupa();
    $vestido->nome= "Vestido Florido";
    $vestido->preco = 120;
    $vestido->setEstoque(3);
    echo $vestido->calcularDesconto();
?>