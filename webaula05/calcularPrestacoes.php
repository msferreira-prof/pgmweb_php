<?php

$valorCompra    = 0;
$qtdPrestacoes  = 0;
$valorPrestacao = 0;
$numeroPrestacao = '';
$valorPrestacaoFormatada = '';

$valorCompra = floatval( $_POST['valorCompra'] );
$qtdPrestacoes = floatval( $_POST['qtdPrestacoes'] );

$valorPrestacao = $valorCompra / $qtdPrestacoes;

/* saida PHP montando o HTML
echo "<!DOCType html><html><head><meta charset='utf-8'><title>Prestações</title></head><body>";
echo "<div>";
echo "<p>Valor Compra: $valorCompra</p>";
echo "<p>Qtd Parcelas: $qtdPrestacoes</p>";
echo "<hr>";
echo "<p>Valor Parcela: $valorPrestacao</p>";
echo "</div>";
echo "</body></html>";
*/

// fechando o PHP, pois há código HTML a seguir
?>


<!-- inicio do HTML -->
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

        <h2>Resultado - Simulação Prestações</h2>
    
        <table class="lista-funcionarios">
            <thead>
                <tr>
                    <th>Prestações</th>
                    <th>Valor Prestação</th>
                </tr>
            </thead>

            <!-- inicio bloco PHP com HTML -->
            <?php
                for($contador=0; $contador < $qtdPrestacoes; $contador++) {
                    $numeroPrestacao = str_pad($contador + 1, 2, "0", STR_PAD_LEFT);
                    $valorPrestacaoFormatada = "R$ " . number_format($valorPrestacao, 2, ',', '.');
            ?>
                <tr>
                    <td>
                        <?=$numeroPrestacao;?>
                    </td>  <!-- coluna Prestacao  -->
                    <td>
                        <?=$valorPrestacaoFormatada;?>
                    </td>  <!-- coluna Valor Prestacao -->
                </tr>
            
            <?php
                }
            ?>

            <!-- este bloco é semelhante ao bloco acima -->
            <!-- ?php
                for($contador=0; $contador < $qtdPrestacoes; $contador++) {
                    $numeroPrestacao = str_pad($contador + 1, 2, "0", STR_PAD_LEFT);
                    $valorPrestacaoFormatada = "R$ " . number_format($valorPrestacao, 2, ',', '.');
                    echo "<tr>";
                    echo "<td>$numeroPrestacao</td>";
                    echo "<td>$valorPrestacaoFormatada</td>";
                    echo "</tr>";
                }
            ? -->

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


