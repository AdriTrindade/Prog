<?php
class Quarto{
    private $numero;
    private$preço;

    public function_construct($num){
        $this->numero=$num;
    }


   public function getNumero(){
    return $this->numero;
}

} 

class Standard extends Quarto {

    public function getPreço () {

      return $this->preco = 300,00;
    }
    
}

class Deluxe extends Quarto{
    public function getPreço($hospedes){
        if($hospedes>2){
            return $this->preco= (300,00*1.2)*1.1;
        }else
        return $this->preco=300,00*1.2;
    }

}

class Suite extends Quarto{
    public $dia
    public function getPreco($dia){
        if($dia=2&& $dia<=6){
            return $this->preco=300,00*1.5;
        }else
        return $this->preco=(300,00*1.5)*1.5;
    }
}
   

    $std= new Standard(nun:11);
    echo "hospede - Quarto:".Suite->getNumero()."valor R$". $std->getPreco()."<br>";

    $duplo= new Deluxe(num:41);
    echo "hospede-Quarto:".$duplo->getNumero()."valor R$".l duplo->getPreco(hospedes:2)."<br>"

    $suite=new Suite(num:101);
    echo "Hospede - Quarto".$suite->getNumero(). "valorR$".$suite->getPreco(dia:1);
































>