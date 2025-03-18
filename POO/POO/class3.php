<?php

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