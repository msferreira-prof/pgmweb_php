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
echo "<br>";

4
5
6
7
8
9
10
11
12
13
	
$vetorIdade       = array(10, 20, 30);
$achou            = false; 
$quantidadeIdades = count($vetorIdade);
for ($indice = 0; $indice < $quantidadeIdades; $indice++) : 
    if ($vetorIdade[$indice] == 20):
        $achou = true;
    endif;
endfor;
