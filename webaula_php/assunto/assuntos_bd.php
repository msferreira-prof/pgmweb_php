<?php

include 'bd.php';

/* incluir assunto */
function incluir(string $descricao) : object {
    
    // conectar BD
    $con = conectarBD();

    // executar a query de insert
    $stmt = $con->prepare('INSERT INTO assuntos(codigo, descricao) 
                           VALUES (DEFAULT, ?)');
    
    $stmt->bindParam(1, $descricao);
    $stmt->execute();

    // recuperar o codigo gerado (autoincrementado)
    $codigoGerado = $con->lastInsertId();

    // liberar o objeto de execucao da query
    $stmt = null;

    // 
    
    // desconectar bd
    desconectarBD($con);
    
    // retornar o codigo gerado
    return $codigoGerado;
}

/* listar os assuntos */
function listar() : array {
    
    $stmt = null;
    $registros = null;

    // conectar BD
    $con = conectarBD();

    // recuperar o codigo gerado (autoincrementado)
    $stmt = $con->prepare('SELECT codigo, descricao FROM assuntos');
    if ( $stmt->execute() ) {
        if ( $stmt->rowCount() > 0 ) {
            
            // recuperar o resultado da query como array associativo
            $registros = $stmt->fetch(PDO::FETCH_ASSOC);

        }

    } 

    // desconectar bd
    desconectarBD($con);
    
    // retornar os registros recuperados
    return $registros;
}

