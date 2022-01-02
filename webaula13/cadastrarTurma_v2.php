<?php 
    include "acesso_bd/carregarListaProfessores.php";

    /* abre conexao com banco de dados */
    $conexao = conectarBD();
    
    /* executar consultar SQL */
    $professores = executarQuery($conexao, 'SELECT * FROM professores');
    
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

        <h2>Cadastrar Turma</h2>

        <div class="divform">
            
            <div id="idFrmProfessor" class="entrada">

                <form name="frmCadastrarProfessor" method="post" action="incluirTurma_mysqli.php">

                    <fieldset>
                        <div class="label">
                            <label for="idCodigoTurma">Código da Turma</label>
                        </div>
                        <div>
                            <input type="text" id="idCodigoTurma" name="codigo" maxlength="3" placeholder="Informe o código da turma" required>
                        </div>

                        <div class="label">
                            <label for="idSerieTurma">Série da Turma</label>
                        </div>
                        <div>
                            <input type="text" id="idSerieTurma" name="serie" maxlength="10" placeholder="Informe a série da turma" required>
                        </div>

                        <div class="label">
                            <label for="idSalaTurma">Sala da Turma</label>
                        </div>
                        <div>
                            <input type="text" id="idSalaTurma" name="sala"  placeholder="Informe a sala da turma" required>
                        </div>

                        <div class="label">
                            <label for="idHoraInicialTurma">Hora de início da Turma</label>
                        </div>
                        <div>
                            <input type="time" id="idHoraInicialTurma" name="horaInicial" required>
                        </div>

                        <div class="label">
                            <label for="idHoraFinalTurma">Hora de fim da Turma</label>
                        </div>
                        <div>
                            <input type="time" id="idHoraFinalTurma" name="horaFinal" required>
                        </div>


                        <div class="label">
                            <label for="idProfessor">Professor da Turma</label>
                        </div>
                        <div>
                            <select id="idProfessor" name="matriculaProfessor">
                                <option value=0 selected>Selecione...</option>

                            <?php
                                foreach ($professores as $professor) {                           
                                    $matricula = $professor["matricula"];
                                    $nome = $professor["nome"]; 
                            ?>
                                
                                <option value=<?=$matricula;?>> <?=$nome;?> </option>
                            
                            <?php
                                }
                            ?>

                            </select>
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