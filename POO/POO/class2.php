<?php

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