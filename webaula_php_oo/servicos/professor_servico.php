<?php
/* insere apenas uma vez os arquivos com as funcoes e classes utilizadas */
require_once '../modelo/professor.php';
require_once '../bd/professor_bd.php';

/* criar uma sessao */
session_start();

/* receber nome do professor do formulario HTML */
$nomeProfessor = $_POST['nomeProfessor'];

/* validacao pode ser feita no PHP ou no Javascript */
if ( strlen($nomeProfessor) < 15 ) {
    $_SESSION['mensagemRetorno'] = 'Nome de professor informado menor que 15 caracteres';
    
    /* retorna para a pagina de cadastro do professor */
    header('location: ../cadastrarProfessor_bs.php');
    
    return;
}

/* 
    validacao deve ser feita no PHP 
    exemplo retornando verdadeiro ou falso
*/
// if ( validarNomeDuplicado($nomeProfessor) == true ) {
//     $_SESSION['mensagemRetorno'] = 'Nome de professor já cadastrado';
    
//     /* retorna para a pagina de cadastro do professor */
//     header('location: ../cadastrarProfessor_bs.php');
    
//     return;
// }

/* 
    validacao deve ser feita no PHP 
    exemplo retornando um objeto
*/
$objProfessor = validarNomeDuplicadoV2($nomeProfessor);
if ( $objProfessor != null ) {
    $_SESSION['mensagemRetorno'] = 
           'Nome de professor já cadastrado. Código: ' . $objProfessor->getMatricula();
    
    /* retorna para a pagina de cadastro do professor */
    header('location: ../cadastrarProfessor_bs.php');
    
    return;
}

// inclusao
$objProfessor = incluir($nomeProfessor);

if ($objProfessor != null) {
    $mensagemRetorno = "Professor '" . $objProfessor->getNome() . 
                       ' inserido com sucesso. Código: ' .
                       $objProfessor->getMatricula();
} else {
    $mensagemRetorno = "Falha ao inserir o professor $nomeProfessor";
}

/* armazena o valor da mensagem de retorno na sessao */
$_SESSION['mensagemRetorno'] = $mensagemRetorno;

/* retorna para a pagina de cadastro do professor */
header('location: ../cadastrarProfessor_bs.php');

