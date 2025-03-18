<?php
    Class Óculos {

        //Atributos
            public $marca;
            public $tamanho;
            public $cor;
            public $n°graus;
            public $formato;

        //Métodos
        public function exibir_formato() {
        return "Quero o óculos do formato: " . $this->formato
        }
        public function enxergar() {
        }
        public function nadar() {
        }
        public function descansar() {
        }
    }

    $redondo = new Óculos (); //Início do obj
    $redondo -> formato = "Redondo"; //Atribuindo valor a um atributo
    echo $redondo -> exibir formato(); //Exibindo atributo