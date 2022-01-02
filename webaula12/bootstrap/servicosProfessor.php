<?php
    // $retorno = validaNomeDuplicado('Jonildo da Silveira Ferrao');
    // echo $retorno;

    function validaNomeDuplicado(string $nomeProfessor) : bool {
        $retorno = true;

        /* processamento da inclusao do professor */
        $host = "localhost";
        $dbUsuario = "root";
        $dbSenha = "";
        $dbSchema = "lista_chamadas_v2";

        /* conectar o bd */
        $objConexao = new mysqli($host, $dbUsuario, $dbSenha, $dbSchema);
        if ($objConexao->connect_errno) {
            $mensagemErro = "Falha na conexão com o BD: $objConexao->connect_error";
            error_log($mensagemErro);
            die($mensagemErro);
        }

        /* inserir o professor novo na tabela professor */
        $sql = "SELECT matricula FROM professores WHERE nome = '$nomeProfessor'";
        $resultado = $objConexao->query($sql);
        
        if ($resultado) {
            $retorno = false;
        }
        
        if (is_object($resultado)) {
            $resultado->free();
        }

        /* fechar a conexao com o bd */
        $objConexao->close();
        
        return $retorno;
    }