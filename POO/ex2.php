<?php 
    //exercício 1
    abstract class Animal {
        public function fazerSom(){}
        }
        class Vaca extends Animal {
        public function fazerSom() {
        echo "Au Au!";
        }
        }
        $cachorro = new Cachorro();
        $cachorro->fazerSom();

    //exercício 2
    abstract class Animal{
        abstract public function fazerSom();
   }
   
   class Cachorro extends Animal{
       public function fazerSom(){
         echo "Au Au";
       }
   }
   
    class Gato extends Animal{
       public function fazerSom(){
       echo "Miau Miau";
       }
    }
   
    class Passaro extends Animal {
       public function fazerSom() {
           echo "Piu Piu";
       }
       public function mover() {
           echo "Voa";
       }
   }
       
   $cachorro = new Cachorro();
   $cachorro -> fazerSom();
   echo  "<br>";
   
   $gato = new Gato();
   $gato -> fazerSom();
   echo "<br>";
   
   $passaro = new Passaro();
   $passaro -> fazerSom();
   $passaro -> mover();
   echo "<br>";

 ?>