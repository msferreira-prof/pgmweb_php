<?php

// abrir conexao com o BD
function conectarBD() : object {
    $dbHost = "localhost";
    $dbUsuario = "root";
    $dbSenha = "";
    $dbSchema = "lista_chamadas_v2";
    $dbPort = 3306;
    $dbCharset = "utf8";


    $dsn = "mysql:dbname=$dbSchema;host=$dbHost;port=$dbPort;charset=$dbCharset";

    try {
        $con = new PDO($dsn, $dbUsuario, $dbSenha);
    } catch ( PDOException $e ) {
        echo 'Erro ao conectar o MySQL: ' . $e->getMessage();
        exit();
    }

    
    return $con;
};

// fechar conexao com o BD
function desconectarBD( object $con ) {
    $con = null;
}