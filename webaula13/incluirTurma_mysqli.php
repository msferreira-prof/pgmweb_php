<?php

$host = "localhost";
$dbUsuario = "root";
$dbSenha = "";
$dbSchema = "lista_chamadas_v2";

/* dados recebidos do formulario */
$codigo             = $_POST['codigo'];
$serie              = $_POST['serie'];
$sala               = $_POST['sala'];
$horaInicial        = $_POST['horaInicial'];
$horaFinal          = $_POST['horaFinal'];
$matriculaProfessor = intval($_POST['matriculaProfessor']);

/* conectar o bd */
$con = mysqli_connect($host, $dbUsuario, $dbSenha, $dbSchema);
if (mysqli_connect_errno()) { // verifica se a conexao foi efetuado com sucesso
    $msgBD = mysqli_connect_error();
    echo "Falha na conexao com o BD: $msgBD";
    exit();

// } else {
//     echo "Conexao com o BD efetuada com sucesso";

}

/* insertir o professor informado */
$consulta  = "INSERT INTO turmas (codigo, serie, sala, hora_inicial, hora_final, professores_matricula) 
              VALUES ('$codigo', '$serie', $sala, '$horaInicial', '$horaFinal', $matriculaProfessor)";

// echo $consulta . PHP_EOL;
$resultado = mysqli_query($con, $consulta);

if ($resultado) {
    $mensagemRetorno = "Turma $codigo inserida com sucesso";
} else {
    $mensagemRetorno = "Falha ao inserir o turma $codigo";
}

/* fechar a conexao */
mysqli_close($con);

// header('location: listarProfessor.php');
echo $mensagemRetorno;
