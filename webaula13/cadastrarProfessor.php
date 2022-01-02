<!-- inicio do codigo HTML -->
<!DOCType HTML>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Exercícios PHP</title>

    <link href="css/meu-estilo-original.css" rel="stylesheet">
</head>

<body>
    <!-- inicio do codigo HTML -->
    <main class="conteudo largura-padrao">

        <h2>Cadastrar Professor</h2>

        <div class="divform">
            
            <div id="idFrmProfessor" class="entrada">

                <form name="frmCadastrarProfessor" method="post" action="incluirProfessor_mysqli.php">

                    <fieldset>
                        <div class="label">
                            <label for="idNomeProfessor">Nome do Professor</label>
                        </div>

                        <div>
                            <input type="text" id="idNomeProfessor" name="nomeProfessor" maxlength="45" placeholder="Informe o nome do professor" required>
                        </div>

                        <div class="botoes">
                            <input type="reset" value="Limpar">
                            <input type="submit" value="Cadastrar">
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