<?php 
    Class Mala {

        //Atributos
            public $marca;
            public $tamanho;
            public $cor;
            public $volume;
            public $modelo;

        //Métodos
        public function exibir_cor() {
        return "Quero a mala da cor: " . $this->cor
        }
        public function viajar() {
        }
        public function guardar() {
        }
        public function andar() {
        }
    }

    $roxo = new Mala (); //Início do obj
    $roxo -> cor = "Roxo"; //Atribuindo valor a um atributo
    echo $roxo -> exibir cor(); //Exibindo atributo