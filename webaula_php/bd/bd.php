<?php

/* abre/cria conexao com banco de dados */
function conectarBD() : object {
    $dbHost = "localhost";
    $dbUsuario = "root";
    $dbSenha = "";
    $dbSchema = "lista_chamadas_v2";
    $dbPort = 3306;
    $dbCharset = "utf8";

    $dsn = "mysql:dbname=$dbSchema;host=$dbHost;port=$dbPort;charset=$dbCharset";

    $con = new PDO($dsn, $dbUsuario, $dbSenha);
    try {
        $con = new PDO( 'mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD );
    } catch ( PDOException $e ) {
        echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
        exit();
    }

    return $con;
} 

/* fechar a conexao */
function desconectarBD(object $con) {
    $con = null;
}
