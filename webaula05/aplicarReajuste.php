<?php
require_once 'biblioteca_webaula.php';

/* programa principal */
/* criar constante */
define("QTD_FUNCIONARIOS", 20);
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
$listaFuncionarios = simularListaFuncionarios(QTD_FUNCIONARIOS);

/* processamento */
for($indice=0; $indice < count($listaFuncionarios); $indice++) {
    $salario = $listaFuncionarios[$indice];
    $novoSalario = $salario + $salario * ($percentualReajuste / 100);
    $listaFuncionarios[$indice] = $novoSalario;
}

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

        <!-- inclusao de código html pelo pgm PHP -->
        <?php include 'cabecalho.php';?>

        <h2>Resultado - Simulação Reajuste</h2>
    
        <table class="lista-funcionarios">
            <thead>
                <tr>
                    <th>Funcionários</th>
                    <th>Novo Salário</th>
                </tr>
            </thead>

            <!-- inicio bloco PHP com HTML -->
            <?php
                for($indice=0; $indice < count($listaFuncionarios); $indice++) {
                    $numeroFuncionario = str_pad($indice + 1, 3, "0", STR_PAD_LEFT);
                    $nomeFuncionario = "Funcionário $numeroFuncionario";
                    $salarioFormatado = "R$ " . number_format($listaFuncionarios[$indice], 2, ',', '.');
            ?>
                <tr>
                    <td>
                        <?=$nomeFuncionario;?>
                    </td>  <!-- coluna Funcionario -->
                    <td>
                        <?=$salarioFormatado;?>
                    </td>  <!-- coluna Novo Salario -->
                </tr>
            
            <?php
                }
            ?>

            <!-- este bloco é semelhante ao bloco acima -->
            <?php
                for($indice=0; $indice < count($listaFuncionarios); $indice++) {
                    $numeroFuncionario = str_pad($indice + 1, 3, "0", STR_PAD_LEFT);
                    $nomeFuncionario = "Funcionário $numeroFuncionario";
                    $salarioFormatado = "R$ " . number_format($listaFuncionarios[$indice], 2, ',', '.');
                    echo "<tr>";
                    echo "<td>$nomeFuncionario</td>";
                    echo "<td>$salarioFormatado</td>";
                    echo "</tr>";
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

