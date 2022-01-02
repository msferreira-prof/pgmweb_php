<?php
include 'assuntos_bd.php';

$codigoGerado = null;


$descricaoAssunto = $_POST['descricao'];

// incluir assunto
$codigoGerado = incluir($descricaoAssunto);

// define mensagem 
if ($codigoGerado != null) {
    $mensagemRetorno = "Assunto '$descricaoAssunto' inserido com sucesso. Código: $codigoGerado";
} else {
    $mensagemRetorno = "Falha ao inserir o assunto '$descricaoAssunto";
}

// retorna para a pagina de cadastramento
header('location: ./assunto/cadastrarAssunto.php');
