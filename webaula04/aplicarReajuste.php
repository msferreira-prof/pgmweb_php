<?php
/*
Algoritmo ReajustarSalario
variaveis
	listaFuncionarios: vetor[1..20] de real (1..20)
	salario: real
	percentualReajuste: real
	dataReajuste: literal (data)
	novoSalario: real
	contador: inteiro
inicio
	escreva("Informe o percentual de reajuste")
	leia percentualReajuste

	escreva("Informe a data de reajuste")
	leia dataReajuste

	recuperarFuncionarios()

	para contador de 1 ate 20 passo 1 faca
		salario <- listaFuncionarios[contador]
		novoSalario <- salario + (salario * (percentualReajuste / 100))
        listaFuncionarios[contador] <- novoSalario
	fim-para

	escreva "Reajuste efetuado em ", dataReajuste
	
	para contador de 1 ate 20 passo 1 faca
		escreva "Novo salario: ", listaFuncionarios[contador]
	fim-para
fim
*/

/* funcao para simular a lista de funcionarios */
function simularListaFuncionarios(int $qtdFuncionarios) : array // assinatura da funcao/procedimento
{
    $lista = [];
    for($contador=0; $contador < $qtdFuncionarios; $contador++) {
        $salarioRandomico = rand(1000, 10000);
        array_push($lista, $salarioRandomico);
    }
    return $lista;
}

/* programa principal */
/* criar constante */
define("QTD_FUNCIONARIOS", 25);
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

// /* simular lista de funcionarios sem uso de  funcao*/
// for($contador=0; $contador < QTD_FUNCIONARIOS; $contador++) {
//     $salario = rand(1000, 10000);
//     array_push($listaFuncionarios, $salario);
// }

/* simular lista de funcionarios com uso de  funcao*/
$listaFuncionarios = simularListaFuncionarios(QTD_FUNCIONARIOS);

// /* saida de dados temporaria - mostra o valor do salario inicial */
// for($indice=0; $indice < count($listaFuncionarios); $indice++) {
//     $salario = $listaFuncionarios[$indice];
//     $numeroFuncionario = $indice + 1;
//     echo "<p>Funcionario $numeroFuncionario - Salário anterior: $salario</p>";
// }

/* processamento */
for($indice=0; $indice < count($listaFuncionarios); $indice++) {
    $salario = $listaFuncionarios[$indice];
    $novoSalario = $salario + $salario * ($percentualReajuste / 100);
    $listaFuncionarios[$indice] = $novoSalario;
}

/* saida de dados */
echo "<p>Reajuste efetuado em: $dataFormatada</p>" . PHP_EOL;
echo "<div>" . PHP_EOL;
for($indice=0; $indice < count($listaFuncionarios); $indice++) {
    $salario = $listaFuncionarios[$indice];
    $salarioFormatado = number_format($salario, 2, ',', '.');
    $numeroFuncionario = $indice + 1;
    echo "<p>Funcionario $numeroFuncionario - Novo Salário: $salarioFormatado</p>". PHP_EOL;
}
echo "</div>" . PHP_EOL;
