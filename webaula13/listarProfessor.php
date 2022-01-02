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

        <h2>Listar Professores</h2>

        <table class="lista-funcionarios">
            <thead>
                <tr>
                    <th>Matrícula</th>
                    <th>Professor</th>
                </tr>
            </thead>

            <?php

                $host = "localhost";
                $dbUsuario = "root";
                $dbSenha = "";
                $dbSchema = "lista_chamadas_v2";
                
                /* conectar o bd */
                $con = mysqli_connect($host, $dbUsuario, $dbSenha, $dbSchema);
                if (mysqli_connect_errno()) { // verifica se a conexao foi efetuado com sucesso
                    $msgBD = mysqli_connect_error();
                    echo "Falha na conexao com o BD: $msgBD";
                    exit();
                }
           
                /* listar os professores da tabela professor */
                $consulta  = "SELECT matricula, nome FROM professores";
                $resultado = mysqli_query($con, $consulta);
                
                if ($resultado) {

                    while ( $linha = mysqli_fetch_array($resultado) ) {
                        $matricula = $linha['matricula'];
                        $nome = $linha['nome'];
            ?>

                <tr>
                    <td>
                        <?=$matricula?>
                    </td>    
                    <td>
                        <?=$nome?>
                    </td>
                </tr>

            <?php
                    }

                }

                /* fecha o objeto query */
                if (is_object($resultado)) {
                    mysqli_free_result($resultado);
                }
                /* fecha a conexao com o BD*/
                mysqli_close($con);
            ?>
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