<?php

$valorDesconto = 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $valorProduto = 0;
    $novoValorProduto = 0;

    $valorProduto = floatval( $_POST["valorProduto"]);
    $valorDesconto = $valorProduto* 9 / 100;
    $novoValorProduto = $valorProduto - $valorDesconto;
/*
    echo "<p style='color: red'> O Valor do Desconto é:" . $valorDesconto ."</p>";
    echo "<p> O novo valor do produto é:" . $novoValorProduto ."</p>";
*/    
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Poupança Programada</title>
    <meta charset="utf-8">
</head>

<body>
    
    <?php
        echo "<p style=color: red'> O Valor do Desconto é:" . $valorDesconto ."</p>";
    ?>
    
    <form name="exerc05" method="post" action="exerc_05_sequencial.php">
    
        <div>
            <label for="vlrAplic">Informe o valor do Produto</label>
            <input type="text" id="vlrAplic" name="valorProduto" >
        </div>
        <div>
            <label for="txRendim">Informe a taxa de rendimento</label>
            <input type="text" id="txRendim" name="taxaRendimento">
        </div>
        <div>
            <label for="numMeses">Informe o número de meses da aplicacao</label>
            <input type="text" id="numMeses" name="numeroMeses">
        </div>
        <div>
            <input type="submit" value="Calcular">
        </div>
    
    </form>

</body>

</html>