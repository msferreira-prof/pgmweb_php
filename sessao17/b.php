<?php
$valorProduto = 0;
$novoValorProduto = 0;
$valorDesconto = 0;

$valorProduto = floatval( $_GET["valorProduto"]);
$valorDesconto = $valorProduto* 9 / 100;
$novoValorProduto = $valorProduto - $valorDesconto;

echo "<p> O Valor do Desconto é:" . $valorDesconto ."</p>";
echo "<p> O novo valor do produto é:" . $novoValorProduto ."</p>";