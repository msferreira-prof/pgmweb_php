<?php
require_once 'biblioteca_webaula.php';

/* programa principal */
/* criar constante */
define("QTD_FUNCIONARIOS", 100);
define("PERCENTUAL_MINIMO_REAJUSTE", 10);

/* criar variavies */
$salario = 0;
$percentualReajuste = 0;
$dataReajuste = 0;
$novoSalario = 0;
$listaFuncionarios = []; // array();
$numeroFuncionario = 0;
$dataFormatada = '';
$salarioFormatado = '';
$nomeUsuario = null;

/* recupera nome do usuario do cookie criado no login */
if (isset($_COOKIE['nome_usuario'])) {
    $nomeUsuario = $_COOKIE['nome_usuario'];
}
    
/* entrada de dados */
//$percentualReajuste = $_POST['percentualReajuste'];
//$dataReajuste = $_POST['dataReajuste'];

/* verifica regra de reajuste */
if ( isset($_POST['percentualReajuste']) ) {
    $percentualReajuste = $_POST['percentualReajuste'];
    $dataReajuste = $_POST['dataReajuste'];
    $dataFormatada = date_format(date_create($dataReajuste), 'd/m/Y');
} else {
    $percentualReajuste = PERCENTUAL_MINIMO_REAJUSTE;
    $dataReajuste = date("d/m/Y");
    $dataFormatada = $dataReajuste;
}

/* torna o valor lido do POST como float */
$percentualReajuste = floatval($percentualReajuste);

/* simular lista de funcionarios com uso de  funcao*/
$listaFuncionarios = simularListaFuncionariosComMatricula(QTD_FUNCIONARIOS);

/* processamento com array associativo */
foreach($listaFuncionarios as $indice => $funcionario ) {
    $salario = $funcionario['salarioAntigo'];
    $novoSalario = $salario + $salario * ($percentualReajuste / 100);
    $listaFuncionarios[$indice]['salarioNovo'] = $novoSalario;
}
/* outra forma de processar o array associativo */
// foreach($listaFuncionarios as $funcionario ) {
//     $salario = $funcionario['salarioAntigo'];
//     $novoSalario = $salario + $salario * ($percentualReajuste / 100);
//     $funcionario['salarioNovo'] = $novoSalario;
// }

// fechando o PHP
?>

<!-- aqui começa o HTML -->
<!DOCType HTML>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Exercícios PHP</title>

    <link href="css/meu-estilo.css" rel="stylesheet">
</head>

<body>
    <!-- inicio do codigo HTML -->
    <main class="conteudo largura-padrao">

        <?php    
            /*
                se a variavel $nomeUsuario foi configurada a partir
                da leitura do respectivo cookie, apresentar o cabecalho
                HTML contendo o nome de usuario informado no login
            */
            if (isset($nomeUsuario)) {
        ?>
                <h2 class="cabecalho">Bem-vindo, <?=$nomeUsuario?>!</h2>
        <?php
            }
        ?>

        <h2>
            Resultado - Simulação Reajuste (<?=number_format($percentualReajuste, 2, ',', '.');?> %) 
        </h2>
    
        <table class="lista-funcionarios">
            <thead>
                <tr>
                    <th>Matrícula</th>
                    <th>Funcionário</th>
                    <th>Salário Anterior</th>
                    <th>Novo Salário</th>
                </tr>
            </thead>

            <!-- inicio bloco PHP com HTML -->
            <?php
                foreach($listaFuncionarios as $funcionario) 
                {
                    $salarioAntigoFormatado = "R$ " . number_format($funcionario['salarioAntigo'], 2, ',', '.');
                    $salarioNovoFormatado = "R$ " . number_format($funcionario['salarioNovo'], 2, ',', '.');
            ?>
                <tr>
                    <td>
                        <?=$funcionario['matricula'];?>
                    </td>    
                    <td>
                        <?=$funcionario['nome'];?>
                    </td>  <!-- coluna Funcionario -->
                    <td>
                        <?=$salarioAntigoFormatado;?>
                    </td>
                    <td>
                        <?=$salarioNovoFormatado;?>
                    </td>  <!-- coluna Novo Salario -->
                </tr>
            
            <?php
                }
            ?>

            <!-- fim bloco PHP com HTML -->
        
        </table>
    
    </main>
    <!-- fim do codigo HTML -->

    <!-- inicio do codigo Javascript -->
    <script type="text/javascript">
    </script>
    <!-- fim do codigo Javascript -->

</body>

</html>

