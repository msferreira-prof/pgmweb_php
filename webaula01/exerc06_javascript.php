<?php

/* declaracao de variaveis */
$valorCompra = 0;
$desconto    = 0;
$valorFinal  = 0; 

/* entrada */
$valorCompra = $_POST['valorCompra'];
$valorCompra = floatval($valorCompra);

/* 
    recupera o valor do campo "hidden" definido no formulário HTML 
    somente funcionará para o formulário do documento 
    exerc06_javascript_funcao.html
*/
$valorFinal_Javascript = $_POST['valorFinal'];

/* processamento */
if ($valorCompra >= 5000) {
    $desconto = 0.2;
} else {
    $desconto = 0.15;
}

$valorFinal = $valorCompra - ($valorCompra * $desconto);

/* saida */
echo "Valor final da Compra = $valorFinal";
echo "<br>";
echo "Valor final da Compra - Javascript = $valorFinal_Javascript";

