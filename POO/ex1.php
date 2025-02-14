<?php 
 //Exercício 1

    Class Pessoa {

        public $nome = "Luna";
        protected $idade = 20;

        public function verDados(){
            echo $this->nome . "<br/>";
            echo $this->idade . "<br/>";
     }
    }
        $objeto = new Pessoa();
        $objeto->verDados();


//Exercício 2
    
    Class Funcionario{

            public $nome = "Luna";
            
            private $salario = "1.000";
            
            public function verDados(){
            echo $this->nome . "<br/>";
            echo $this->salario . "<br/>";
            }
            }
            class Funcionario extends Pessoa {

            public function verDados(){
            echo get_class($this) . "<br/>";
            echo $this->nome . "<br/>";
            echo $this->salario . "<br/>";
            }
            }
            $objeto = new Funcionario();
            $objeto->verDados();

//Exercício 3

    Class Gerente{

    public $nome = "Luna";
    protected $idade 20;
    private $salario = "1.000";
    
    public function verDados(){
    echo $this->nome . "<br/>";
    echo $this->idade . "<br/>";
    echo $this->salario . "<br/>";
    }
    }
    class Gerente extends Funcionario {

    public function verDados(){
    echo get_class($this) . "<br/>";
    echo $this->nome . "<br/>";
    echo $this->idade . "<br/>";
    echo $this->salario . "<br/>";
    }
    }
    $objeto = new Gerente();
    $objeto->verDados();


    Class Desenvolvedor{

        public $nome = "Lorenzo";
        protected $idade 25;
        private $salario = "100.000";
        
        public function verDados(){
        echo $this->nome . "<br/>";
        echo $this->idade . "<br/>";
        echo $this->salario . "<br/>";
        }
        }
        class Desenvolvedor extends Funcionario {
    
        public function verDados(){
        echo get_class($this) . "<br/>";
        echo $this->nome . "<br/>";
        echo $this->idade . "<br/>";
        echo $this->salario . "<br/>";
        }
        }
        $objeto = new Desenvolvedor();
        $objeto->verDados();
    
    
//Exercício 4
        
        Class Funcionario {
            protected $salario;

            public function salario(){
                $this -> salario = $salario;
            
            }

            public function calcularBonus();

         }
        
            class Gerente extends Funcionario {
            public function calcularBonus(){
                return $this -> salario * 0.20;
            }
         }
            class Desenvolvedor extends Funcionario {
            public function calcularBonus(){
                 return $this -> salario * 0.10;
            }
         }
            $gerente = new Gerente (5000);
            $desenvolvedor = new Desenvolvedor (4000);

            echo "Bônus do Gerente: " . $gerente -> calcularBonus() . "/n";
            echo "Bônus do Desenvolvedor: " . $desenvolvedor -> calcularBonus() . "/n";
 ?>
