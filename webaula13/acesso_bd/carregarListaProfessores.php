<?php

/* abre/cria conexao com banco de dados */
function conectarBD() : object {
    $host = "localhost";
    $dbUsuario = "root";
    $dbSenha = "";
    $dbSchema = "lista_chamadas_v2";

    $con = mysqli_connect($host, $dbUsuario, $dbSenha, $dbSchema);
    if (mysqli_connect_errno()) { // verifica se a conexao foi efetuado com sucesso
        $msgBD = mysqli_connect_error();
        echo "Falha na conexao com o BD: $msgBD";
        exit();
    }

    return $con;
} 

/* fechar a conexao */
function desconectarBD(object $con) {
    mysqli_close($con);
}

/* executar a consulta */
function executarQuery(object $con, string $sql) : array {
    $registros = null;
    
    $resultado = mysqli_query($con, $sql);

    if ($resultado) {
        $registros = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
        mysqli_free_result($resultado);
    }

    return $registros;
}
