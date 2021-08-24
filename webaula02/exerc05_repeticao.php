<!DOCType HTML>
<html>

<head>
    <meta charset="utf-8">
    <title>Exercícios PHP</title>
    <style>
        .entrada, .resultado, .botoes {
            margin: 10px 0;
        }
    </style>
</head>

<body>
    <!-- inicio do codigo HTML -->
    <h2>Exercício 05 - Repetição</h2>
    <div id="form" class="entrada">
        <h2>Pares e Ímpares</h2>
        <form name="frmParesImpares" method="post" action="exerc05.php">
            <div>
                <label for="idInicioFaixa">Início da Faixa</label>
                <input type="text" id="idInicioFaixa" name="inicioFaixa">
            </div>
            <div>
                <label for="idFimFaixa">Fim da Faixa</label>
                <input type="text" id="idFimFaixa" name="fimFaixa">
            </div>

            <div class="botoes">
                <input type="reset" value="Limpar">
                <input type="submit" value="Executar">
            </div>
        </form>
    </div>
    <!-- fim do codigo HTML -->

    <!-- inicio do codigo Javascript -->
    <script type="text/javascript">
    </script>
    <!-- fim do codigo Javascript -->

</body>

</html>