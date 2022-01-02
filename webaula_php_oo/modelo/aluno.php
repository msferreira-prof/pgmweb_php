<?php

class Aluno {
    private $matricula;
    private $nome;
    private $codigoTurma;


    function __construct() {
    }

    public function getMatricula() : int {
        return $this->matricula;
    }

    public function getNome() : string {
        return $this->nome;
    }

    public function getCodigoTurma() : string {
        return $this->codigoTurma;
    }

    public function setMatricula( int $matricula ) {
        $this->matricula = $matricula;
    }

    public function setNome( string $nome ){
        $this->nome = $nome;
    }

    public function setCodigoTurma( string $codigoTurma ) {
        $this->codigoTurma = $codigoTurma;
    }

}