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

 final class Professor extends Pessoa {
    private $especialidade;
    private $salario;

    public function __construct($nome, $idade, $sexo, $esp, $salario) {
        parent::__construct($nome, $idade, $sexo);
        $this->especialidade = $esp;
        $this->salario = $salario;
    }

    public function apresentar() {
        echo "<p>Sou o professor {$this->nome}, especialista em {$this->especialidade}.</p>";
    }

    public function receberAumento($valor) {
        $this->salario += $valor;
        echo "<p>O salário de {$this->nome} foi reajustado para R$ {$this->salario}.</p>";
    }
}


$v1 = new Visitante("Lucas", 25, "Masculino");
$a1 = new Aluno("Gabriela", 18, "Feminino", "2023302534", "Informática");
$b1 = new Bolsista("João", 19, "Masculino", "2024405666", "Informática", 50);
$p1 = new Professor("Marcos", 40, "Masculino", "Programação", 5000);

$objetos = [$v1, $a1, $b1, $p1];

foreach ($objetos as $obj) {
    echo "<hr>";
    echo "<p>Classe: " . get_class($obj) . "</p>";
    echo "<p>É Pessoa? " . ($obj instanceof Pessoa ? "Sim" : "Não") . "</p>";
    echo "<p>É Aluno? " . ($obj instanceof Aluno ? "Sim" : "Não") . "</p>";
    echo "<p>É Bolsista? " . ($obj instanceof Bolsista ? "Sim" : "Não") . "</p>";
    echo "<p>É Professor? " . ($obj instanceof Professor ? "Sim" : "Não") . "</p>";
    $obj->apresentar();
}
?>