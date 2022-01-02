<?php

$host = "localhost";
$dbUsuario = "root";
$dbSenha = "";
$dbSchema = "lista_chamadas_v2";

$nomeProfessor = $_POST['nomeProfessor'];

/* conectar o bd */
$con = mysqli_connect($host, $dbUsuario, $dbSenha, $dbSchema);
if (mysqli_connect_errno()) { // verifica se a conexao foi efetuado com sucesso
    $msgBD = mysqli_connect_error();
    echo "Falha na conexao com o BD: $msgBD";
    exit();

// } else {
//     echo "Conexao com o BD efetuada com sucesso";

}


if (addcslashes)

/* insertir o professor informado */
$consulta  = "INSERT INTO professores (matricula, nome) VALUES (DEFAULT, '$nomeProfessor')";
echo $consulta . PHP_EOL;
$resultado = mysqli_query($con, $consulta);

if ($resultado) {
    $mensagemRetorno = "Professor $nomeProfessor inserido com sucesso";
} else {
    $mensagemRetorno = "Falha ao inserir o professor $nomeProfessor";
}

/* fechar a conexao */
mysqli_close($con);

echo $mensagemRetorno;
