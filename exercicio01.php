
<?php

class Produto
{
    // propriedades
    private $nome;
    private $preco;
    private $qtd;

    public function __construct($nome, $preco, $qtd) {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->qtd = $qtd;
    }

    // Método
    public function exibeInformacoes() {
        echo $this->nome.",".
             $this->preco.",".
             $this->qtd;
    }


}

$produto = new Produto("Caneta", 5.99, 2);
$produto->exibeInformacoes();
?>