<?php 
include 'acesso_bd/carregarListaProfessores.php';

/* abre conexao com banco de dados */
$conexao = conectarBD();

/* executar consultar SQL */
$professores = executarQuery($conexao, 'SELECT * FROM professores');

/* fechar a conexao */
desconectarBD($conexao);

foreach ($professores as $professor) {                           
    $matricula = $professor["matricula"];
    $nome = $professor["nome"]; 
    echo $matricula;
    echo $nome;
}
