<?php
    Class Bola {

        //Atributos
            public $marca;
            public $tamanho;
            public $cor;
            public $formato;
            public $barulho;

        //Métodos
            public function exibir_marca() {
                return "Eu quero a bola da marca" . $this->marca
            }
            public function jogar() {
            }
            public function brincar() {
            }
            public function pular() {
            }
        }

    $penalty = new Bola(); //Início do obj
    $penalty->marca = "Penalty"; //Atribuindo valor a um atributo
    echo $penalty->exibir marca(); //Exibindo atributo

    Class Tênis {

        //Atributos
            public $marca;
            public $tamanho;
            public $cor;
            public $formato;
            public $cheiro;

        //Métodos
            public function exibir_marca() {
                return "Quero o tênis da marca" . $this->marca
            }
            public function correr() {
            }
            public function andar() {
            }
            public function pular() {
            }
        }

    $vans= new Tênis(); //Início do obj
    $vans->marca = "Vans"; //Atribuindo valor a um atributo
    echo $vans->exibir marca(); //Exibindo atributo


    Class Celular {

        //Atributos
            public $marca;
            public $tamanho;
            public $cor;
            public $modelo;
            public $peso;

        //Métodos
            public function exibir_modelo() {
            return "Quero o celular do modelo" . $this->modelo
            }
            public function comunicar() {
            }
            public function ligar() {
            }
            public function jogar() {
            }
        }

    $iphone= new Celular (); //Início do obj
    $iphone->marca = "Iphone"; //Atribuindo valor a um atributo
    echo $iphone->exibir modelo(); //Exibindo atributo


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
    $roxo -> cor = "Roxo"; //Atribuindo valor a um atribut