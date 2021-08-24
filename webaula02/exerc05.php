<?php

/* sessao iniciada para armazenar e trocar valores entre PHPs */
session_start();

/* entrada de dados */
$somaPares = 0;
$somaImpares = 0;
$restoDaDivisao = 0;
$inicioFaixa = 0;
$fimFaixa = 0;

$metodo = '';
$resultado = '';

$metodoPadrao = 'get';

/* verificar qual o tipo metodo HTTP informado pelo formulario HTML no REQUEST */
$metodo = $_SERVER['REQUEST_METHOD'];
if ( $metodo == strtoupper($metodoPadrao)) {
    $inicioFaixa = $_GET['inicioFaixa'];
    $fimFaixa = $_GET['fimFaixa'];

}  else {
    $inicioFaixa = $_POST['inicioFaixa'];
    $fimFaixa = $_POST['fimFaixa'];
}

$inicioFaixa = intval($inicioFaixa);
$fimFaixa = intval($fimFaixa);

/* processamento */
for($contador=$inicioFaixa; $contador <= $fimFaixa; $contador++) {
    $restoDaDivisao =  $contador % 2;
    if ( $restoDaDivisao == 0) {
        $resultado = $resultado . $contador . ', ';
        $somaPares = $somaPares + $contador;
    }
}

/* processamento com while */
// $contador=$inicioFaixa;
// while ($contador <= $fimFaixa) {
//     $restoDaDivisao =  $contador % 2;
//     if ( $restoDaDivisao == 0) {
//         echo "<p>Número par encontrado: $contador</p>";
//         $somaPares = $somaPares + $contador;
//     }

//     $contador++;
// }


/* define um saida apos o processamento */
$_SESSION['if'] = $inicioFaixa;
$_SESSION['ff'] = $fimFaixa;
$_SESSION['r'] = $resultado;
$_SESSION['sp'] = $somaPares;

/* desvia o codigo para outro pgm php */
header('location: resultado_exerc05_repeticao.php');
return;

/* saida apos o processamento atraves de echo */
/* 
echo "<!DOCType html><html><head><title>Exercícios</title></head><body>";
echo "<h3>Resultado Exercício 05</h3>";
echo "<div>";
echo "<label>Início Faixa </label>";
echo "<input type='text' value='$inicioFaixa' readonly>";
echo "</div>";
echo "<div>";
echo "<label>Fim Faixa </label>";
echo "<input type='text' value='$fimFaixa' readonly>";
echo "</div>";
echo "<div>";
echo "<label>Números pares encontrados </label>";
echo "<input type='text' value=' $resultado' readonly>";
echo "</div>";
echo "<div>";
echo "<label>A soma dos números pares é </label>";
echo "<input type='text' value=' $somaPares' readonly>";
echo "</div>";
echo "</body></html>";
*/
/*
echo "<hr>";
echo "<p>Número par encontrado: $resultado</p>";
echo "<p>A soma dos números pares é: $somaPares<p>";
echo "<p>Método HTTP: $metodo";
echo "</div>";
*/
