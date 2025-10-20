<?php

 abstract class veiculo {
   protected $modelo;
protected $ano;
 abstract public function mover(){

} 
 } 
  
   class carro extends veiculo{
    public function mover(){
    echo <p>carro está se movendo</p>
    } 

} 
    class bicicleta extends veiculo(){
        public function mover(){
            echo <p>bicicleta está se movendo</p>
        }
    } 

    $aluno1 = new carro();
$carro->modelo = "Pampa";
$carro->ano = "2008";
$carro->mover();

$bicicleta = new bicicleta();
$bicicleta->nome = "Caloi";
$bicicleta->ano = "2022";
$bicicleta->mover();



   ?>