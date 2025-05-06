<?php

class Produto
{
    public $nome;
    public $preco;
    public $qtd;

    public function __construct($nome, $preco, $qtd) {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->qtd = $qtd;
    }

    public function exibeInformacoes(){
        echo "Nome: " . $this->nome . ", Preço: R$ " . number_format($this->preco, 2, ',', '.') . ", Quantidade: " . $this->qtd . "<br>";
    }
}

// Instanciando o primeiro objeto Produto
$produto1 = new Produto("Camiseta", 29.99, 15);

// Instanciando o segundo objeto Produto
$produto2 = new Produto("Tênis", 99.90, 8);

// Container centralizado e com fonte maior
echo '<div style="text-align: center; font-size: 20px; font-family: Arial, sans-serif; margin-top: 50px;">';

// Chamando o método exibeInformacoes() para cada objeto
$produto1->exibeInformacoes();
$produto2->exibeInformacoes();

echo '</div>';

?>