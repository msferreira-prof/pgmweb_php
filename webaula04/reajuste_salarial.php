<!DOCType HTML>
<html lang="pt-br">

<!--
Uma empresa tem 20 funcionários. O salário dos funcionários sofre reajuste uma vez ao ano e o percentual de reajuste é o mesmo para todos. 
Sendo assim, faça um algoritmo simule o aumento a partir da informação do percentual de reajuste e da data em que o aumento foi aplicado.
Apresente, após a aplicação do aumento, os valores de todos os salários reajustados dos funcionários da empresa.
-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Exercícios PHP</title>

    <link href="css/meu-estilo.css" rel="stylesheet">
</head>

<body>
    <!-- inicio do codigo HTML -->
    <main class="conteudo largura-padrao">
        <h2>Simulação de Reajuste Salarial</h2>


        <div class="divform">
            
            <div id="idFrmReajuste" class="entrada">

                <form name="frmReajusteSalarial" method="post" action="aplicarReajuste.php">

                    <fieldset>
                        <div class="label">
                            <label for="idPercentual">Percentual de Reajuste (%)</label>
                        </div>
                        <input type="number" step="0.01" id="idPercentual" name="percentualReajuste" placeholder="Informe com 2 casas decimais" min="0" required>

                        <div class="label calendario">
                            <div class="label">
                                <label for="idDataReajuste">Data do Reajuste</label>
                            </div>
                            <input type="date" id="idDataReajuste" name="dataReajuste" required>
                        </div>

                        <div class="botoes">
                            <input type="reset" value="Limpar">
                            <input type="submit" value="Executar">
                        </div>

                    </fieldset>
                </form>

            </div>

        </div>
    </main>
    <!-- fim do codigo HTML -->

    <!-- inicio do codigo Javascript -->
    <script type="text/javascript">
    </script>
    <!-- fim do codigo Javascript -->

</body>

</html>