<?php

/* criar uma sessao */
session_start();

require 'servicosProfessor.php';

/* processamento da inclusao do professor */
$host = "localhost";
// $port = 3306;
$dbUsuario = "root";
$dbSenha = "";
$dbSchema = "lista_chamadas_v2";

/* receber nome do professor do formulario HTML */
$nomeProfessor = $_POST['nomeProfessor'];

/* validacao pode ser feita no PHP ou no Javascript */
if ( strlen($nomeProfessor) < 15 ) {
    $_SESSION['mensagemRetorno'] = 'Nome de professor informado menor que 15 caracteres';
    
    /* retorna para a pagina de cadastro do professor */
    header('location: ./cadastrarProfessor_bs.php');
    
    return;
}

/* validacao deve ser feita no PHP */
if ( validaNomeDuplicado($nomeProfessor) == false ) {
    $_SESSION['mensagemRetorno'] = 'Nome de professor já cadastrado';
    
    /* retorna para a pagina de cadastro do professor */
    header('location: ./cadastrarProfessor_bs.php');
    
    return;
}


/* conectar o bd */
$objConexao = new mysqli($host, $dbUsuario, $dbSenha, $dbSchema);
if ($objConexao->connect_errno) {
    $mensagemErro = "Falha na conexão com o BD: $objConexao->connect_error";
    error_log($mensagemErro);
    header($_SERVER['SERVER_PROTOCOL'] . '500 Internal Server Error', true, 500); /* HTTP CODE */
    die($mensagemErro);
}

/* inserir o professor novo na tabela professor */
$sql = "INSERT INTO professores (matricula, nome) VALUES (DEFAULT, '$nomeProfessor')";
$resultado = $objConexao->query($sql);

if ($resultado) {
    $mensagemRetorno = "Professor $nomeProfessor inserido com sucesso";
} else {
    $mensagemRetorno = "Falha ao inserir o professor $nomeProfessor";
}

/* fechar a conexao com o bd */
$objConexao->close();

// echo $mensagemRetorno;

/* armazena o valor da mensagem de retorno na sessao */
$_SESSION['mensagemRetorno'] = $mensagemRetorno;

/* retorna para a pagina de cadastro do professor */
header('location: ./cadastrarProfessor_bs.php');

