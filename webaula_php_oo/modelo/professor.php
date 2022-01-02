<?php

$objeto = new Professor();
$objeto->setMatricula(10);
$objeto->setNome("Marcos");

$objeto2 = new Professor(10, "Marcos");


class Professor {

    private $matricula;
    private $nome;

    function __construct() {
    }

    public function getMatricula() : int {
        return $this->matricula;
    }

    public function getNome() : string {
        return $this->nome;
    }

    public function setMatricula(int $matricula) {
        $this->matricula = $matricula;
    }

    public function setNome(string $nome) {
        $this->nome = $nome;
    }

    public function getProfessorCompleto() : string {
        return $this->matricula . ' - ' . $this->nome;
    }
}