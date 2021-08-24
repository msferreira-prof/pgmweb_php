<?php
/* declaracao de variaveis */
$valorCompra = 0;
$desconto    = 0;
$valorFinal  = 0; 

/* entrada */
$valorCompra = $_POST['valorCompra'];
$valorCompra = floatval($valorCompra);

/* processamento */
if ($valorCompra >= 5000) {
    $desconto = 0.2;
} else {
    $desconto = 0.15;
}

$valorFinal = $valorCompra - ($valorCompra * $desconto);

/* saida */
echo "Valor final da Compra = $valorFinal";
