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

                        <hr/>

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
                                <option value=0>Selecione...</option>
                                <option value=25>Antunes Joisas</option>
                                <option value=26>Jota Martins</option>
                                <option value=27>Marcia Fernandez</option>
                                <option value=28>Jonildo da Silveira Ferrao</option>
                                <option value=29>Airton Silva da Senna</option>
                                <option value=30>Xavier Logan</option>
                                <option value=31>Outrossim Santos</option>
                                <option value=32>Fabricio Felix</option>
                                <option value=33>Thais Estella Soares</option>
                                <option value=34>Tatiane Amorim</option>
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