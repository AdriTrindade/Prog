<?php
abstract class Pessoa {
    protected $nome;
    protected $idade;
    protected $sexo;

    public function __construct($nome, $idade, $sexo) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
    }

    final public function fazerAniversario() {
        $this->idade++;
        echo "<p>Parabéns, {$this->nome}! Agora você tem {$this->idade} anos.</p>";
    }

    abstract public function apresentar();
}

class Visitante extends Pessoa {
    public function apresentar() {
        echo "<p>Sou um visitante chamado {$this->nome}, tenho {$this->idade} anos e sou do sexo {$this->sexo}.</p>";
    }
}

$v1 = new Visitante("Lucas", 25, "Masculino");
$v1->apresentar();
$v1->fazerAniversario();

if (is_subclass_of($v1, "Pessoa")) {
    echo "<p>A classe Visitante é uma subclasse concreta de Pessoa e pode ser instanciada normalmente.</p>";
}

echo "<p>Essa é uma herança pobre, pois a classe Visitante apenas herda os atributos e métodos da classe Pessoa, sem adicionar novas características.</p>";
?>