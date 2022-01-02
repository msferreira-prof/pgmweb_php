<!DOCType HTML>
<html lang="pt-br">

<!--
A Loja “Compre aqui” está vendendo seus produtos em 05 (cinco) prestações sem juros. 
Faça um algoritmo que receba um valor de uma compra e mostre o valor das prestações.
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
        <h2>Simulação de Cálculo de Prestações</h2>


        <div class="divform">

            <div id="idFrmReajuste" class="entrada">

                <form name="frmCalculoPrestacoes" method="post" action="calcularPrestacoes.php">

                    <fieldset>
                        <div class="label">
                            <label for="idValorCompra">Valor da Compra</label>
                        </div>
                        <input type="text" id="idValorCompra" name="valorCompra" placeholder="Informe com 2 casas decimais" min="0" required>

                        <div class="label">
                            <div class="label">
                                <label for="idQtdPrestacoes">Quantidade de Prestações</label>
                            </div>
                            <input type="number" step="1" id="idQtdPrestacoes" name="qtdPrestacoes" placeholder="Informe quantidade de prestações" min="1" max="12" required>

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
