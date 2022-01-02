<?php

$P = 0; // valor: real
$i = 0; // taxa: real
$n = 0; // numeroMeses: inteiro
$rendimento = 0; // real
$resultado = ''; // string
$resultado2 = ''; // string

$P = floatval( $_GET['valorAplicacao'] );
$i = floatval( $_GET['taxaRendimento'] );
$n = floatval( $_GET['numeroMeses'] );

$i = $i / 100;

$rendimento = ($P * (1 + $i) ** ($n - 1)) / $i;

$resultado = "O rendimento da aplicao de R$ ";
$resultado .= $P;
$resultado .= " à uma taxa de ";
$resultado .= $i;
$resultado .= "% e por ";
$resultado .= $n;
$resultado .= " meses será de R$ ";
$resultado .= $rendimento;
$resultado .= ".";

$resultado2 = "O rendimento da aplicao de R$ $P à uma 
               taxa de $i % e por $n meses será de R$ $rendimento .";

echo "<!DOCType html><html><head><title>Teste</title></head><body>";
echo "<p>Resultado : $resultado </p><br>";
echo "<p>Resultado2: $resultado2 </p><br>";
echo "</body></html>";
