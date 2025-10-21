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

  class Aluno extends Pessoa {
    protected $matricula;
    protected $curso;

    public function __construct($nome, $idade, $sexo, $matricula, $curso) {
        parent::__construct($nome, $idade, $sexo);
        $this->matricula = $matricula;
        $this->curso = $curso;
    }

    public function apresentar() {
        echo "<p>Sou o aluno {$this->nome}, do curso de {$this->curso}.</p>";
    }

    public function pagarMensalidade() {
        echo "<p>Mensalidade de {$this->nome} paga com sucesso!</p>";
    }
}

class Bolsista extends Aluno {
    private $bolsa;

    public function __construct($nome, $idade, $sexo, $matricula, $curso, $bolsa) {
        parent::__construct($nome, $idade, $sexo, $matricula, $curso);
        $this->bolsa = $bolsa;
    }

    public function renovarBolsa() {
        echo "<p>Bolsa renovada para {$this->nome}!</p>";
    }

    public function pagarMensalidade() {
        echo "<p>{$this->nome} é bolsista! Pagamento com desconto de {$this->bolsa}%.</p>";
    }
}

$v1 = new Visitante("Lucas", 25, "Masculino");
$v1->apresentar();
$v1->fazerAniversario();

$a1 = new Aluno("Gabriela", 18, "Feminino", "2023302534", "Informática");
$a1->apresentar();
$a1->pagarMensalidade();
$a1->fazerAniversario();

$b1 = new Bolsista("João", 19, "Masculino", "2024405666", "Informática", 50);
$b1->apresentar();
$b1->renovarBolsa();
$b1->pagarMensalidade();
$b1->fazerAniversario();
?>