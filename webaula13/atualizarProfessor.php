<?php

include "acesso_bd/carregarListaProfessores.php";

$matriculaProfessor = $_GET['matricula'];

/* abre conexao com banco de dados */
$conexao = conectarBD();

/* executar consultar SQL */
$professores = executarQuery($conexao, "SELECT * FROM professores WHERE matricula = $matriculaProfessor");

/* fechar a conexao */
desconectarBD($conexao);
?>

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

        <h2>Atualizar Professor</h2>

        <div class="divform">
            
            <div id="idFrmProfessor" class="entrada">

                <form name="frmAtualizarProfessor" method="post" action="atualizarProfessor_mysqli.php">

                    <fieldset>
                        <div class="label">
                            <label for="idMatriculaProfessor">Matricula do Professor</label>
                        </div>

                        <?php
                                foreach ($professores as $professor) {                           
                                    $matricula = $professor["matricula"];
                                    $nome = $professor["nome"]; 
                        ?>
                            
                            <div>
                                <input type="text"
                                    id="idMatriculaProfessor" 
                                    name="matriculaProfessor" 
                                    disabled 
                                    value="<?=$matricula?>">
                            </div>

                            <div class="label">
                                <label for="idNomeProfessor">Nome do Professor</label>
                            </div>
                            <div>
                                <input type="text" 
                                    id="idNomeProfessor" 
                                    name="nomeProfessor" 
                                    maxlength="45"
                                    value="<?=$nome?>"
                                    required>
                            </div>
                        <?php
                            }
                        ?>

                        <div class="botoes">
                            <input type="reset" value="Limpar">
                            <input type="submit" value="Atualizar">
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
