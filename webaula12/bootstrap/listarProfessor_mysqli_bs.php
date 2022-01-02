<?php

session_start();


/* criar variavies */
$host = "localhost";
$dbUsuario = "root";
$dbSenha = "";
$dbId = "lista_chamadas_v2";
$objConexao = NULL;
$query = NULL;
$resultado = NULL;


/* abre conexao com banco de dados */
$objConexao = new mysqli($host, $dbUsuario, $dbSenha, $dbId);
if ($objConexao->connect_errno) {
    $mensagemErro = "Falha na conexão com o BD: $objConexao->connect_error";
    error_log($mensagemErro);
    header($_SERVER['SERVER_PROTOCOL'] . '500 Internal Server Error', true, 500); /* HTTP CODE */
    die($mensagemErro);
}

/* executar a consulta */
$sql = "SELECT * FROM professores";
$resultado = $objConexao->query($sql);

if ($resultado == TRUE) {
    
    $professores = $resultado->fetch_all();

//    var_dump($professores);

    $_SESSION['professores'] = $professores;
}

header('location: ./listarProfessor_bs.php');