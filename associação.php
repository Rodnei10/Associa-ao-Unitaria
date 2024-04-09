
<?php

class Funcionario {
    private $nome;
    private $cargo;
    private $salario;
    private $data_contratacao;
    private $supervisor;

    public function __construct($nome, $cargo, $salario, $data_contratacao) {
        $this->nome = $nome;
        $this->cargo = $cargo;
        $this->salario = $salario;
        $this->data_contratacao = new DateTime($data_contratacao);
    }

    public function obterNome() {
        return $this->nome;
    }

    public function obterCargo() {
        return $this->cargo;
    }

    public function obterSalario() {
        return $this->salario;
    }

    public function definirSupervisor($supervisor) {
        $this->supervisor = $supervisor;
    }

    public function obterSupervisor() {
        return $this->supervisor;
    }
}

class Filme {
    private $titulo;
    private $duracao;
    private $ano_lancamento;

    public function __construct($titulo, $duracao, $ano_lancamento) {
        $this->titulo = $titulo;
        $this->duracao = $duracao;
        $this->ano_lancamento = $ano_lancamento;
    }

    public function obterTitulo() {
        return $this->titulo;
    }

    public function obterDuracao() {
        return $this->duracao;
    }

    public function obterAnoLancamento() {
        return $this->ano_lancamento;
    }
}

class Ator {
    private $nome;
    private $data_nascimento;
    private $nacionalidade;

    public function __construct($nome, $data_nascimento, $nacionalidade) {
        $this->nome = $nome;
        $this->data_nascimento = new DateTime($data_nascimento);
        $this->nacionalidade = $nacionalidade;
    }

    public function obterNome() {
        return $this->nome;
    }

    public function obterDataNascimento() {
        return $this->data_nascimento->format('Y-m-d');
    }

    public function obterNacionalidade() {
        return $this->nacionalidade;
    }
}

class Papel {
    private $filme;
    private $ator;
    private $personagem;

    public function __construct($filme, $ator, $personagem) {
        $this->filme = $filme;
        $this->ator = $ator;
        $this->personagem = $personagem;
    }

    public function obterPersonagem() {
        return $this->personagem;
    }
}

$funcionario1 = new Funcionario("Lucas Johanson", "Gerente", 5000, "2022-01-10");
$funcionario2 = new Funcionario("Isabella da Silva", "Analista", 3500, "2023-05-20");
$funcionario2->definirSupervisor($funcionario1);

$filme = new Filme("O Senhor dos Anéis", 180, 2001);

$ator1 = new Ator("Elijah Wood", "1981-01-28", "Estadunidense");
$ator2 = new Ator("Viggo Mortensen", "1958-10-20", "Dinamarquês");
$ator3 = new Ator("Ian McKellen", "1939-05-25", "Britânico");

$papel1 = new Papel($filme, $ator1, "Frodo");
$papel2 = new Papel($filme, $ator2, "Aragorn");
$papel3 = new Papel($filme, $ator3, "Gandalf");

echo "<h2>Informações sobre Funcionários:</h2>";
echo "<ul>";
echo "<li>Nome: " . $funcionario1->obterNome() . ", Cargo: " . $funcionario1->obterCargo() . "</li>";
echo "<li>Nome: " . $funcionario2->obterNome() . ", Cargo: " . $funcionario2->obterCargo() . "</li>";
echo "</ul>";

echo "<h2>Detalhes do Filme:</h2>";
echo "<ul>";
echo "<li>Título: " . $filme->obterTitulo() . "</li>";
echo "<li>Duração: " . $filme->obterDuracao() . " minutos</li>";
echo "<li>Ano de Lançamento: " . $filme->obterAnoLancamento() . "</li>";
echo "</ul>";

echo "<h2>Lista de Atores e seus Papéis:</h2>";

echo "<ul>";
echo "<li>" . $ator1->obterNome() . " como " . $papel1->obterPersonagem() . "</li>";
echo "<li>" . $ator2->obterNome() . " como " . $papel2->obterPersonagem() . "</li>";
echo "<li>" . $ator3->obterNome() . " como " . $papel3->obterPersonagem() . "</li>";
echo "</ul>";

?>
