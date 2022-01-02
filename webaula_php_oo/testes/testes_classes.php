<?php
require_once '../modelo/professor.php';
require_once '../bd/professor_bd.php';

$objProfessor = new Professor();
$objProfessor->setMatricula(10);
$objProfessor->setNome("Marcos");

// var_dump($objProfessor);

echo $objProfessor->getMatricula();
echo PHP_EOL;
echo $objProfessor->getNome();
echo PHP_EOL;
echo $objProfessor->getProfessorCompleto();

// acessando o bd e incluindo um professor
// $objProfessor = incluir("Marcos Teste OO");
// echo $objProfessor->getMatricula();
// echo PHP_EOL;
// echo $objProfessor->getNome();
// echo PHP_EOL;
// echo $objProfessor->getProfessorCompleto();

// listando os professores
$professores = listar();
foreach($professores as $objProfessor) {
    echo PHP_EOL;
    echo $objProfessor->getMatricula();
    echo PHP_EOL;
    echo $objProfessor->getNome();
    echo PHP_EOL;
    echo $objProfessor->getProfessorCompleto();
}

// verificar se existe um nome de professor
$retorno = validarNomeDuplicado("Teste1");
if ($retorno) {
    echo "Existe";
} else {
    echo "Não Existe";
}





