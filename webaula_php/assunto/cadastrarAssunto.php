<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Assuntos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="../img/logo-rioantigo-ico.ico" rel="shortcut icon">
    
    <!-- Bootstrap -->
    <!-- insira este conteudo aqui que representa o CSS do Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <link href="../css/meu-estilo.css" rel="stylesheet">

</head>

<body>

    <!-- seu codigo comeca aqui -->

    <header class="container px-0">

        <nav class="navbar navbar-expand-lg navbar-light bg-light px-0">

            <!-- logo -->
            <div>
                <a class="navbar-brand mx-auto">
                    <img src="img/logo-rioantigo-200x75.png">
                </a>
            </div>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mynavbar"
                aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Navegação Alternativa">
                Menu <span class="navbar-toggler-icon"></span>
            </button>

            <!-- menu -->
            <div class="collapse navbar-collapse justify-content-end" id="mynavbar">
                <div class="navbar-nav">
                    <a href="../index.html" class="nav-link">Início</a>
                    <a href="../rioantigo_cards.html" class="nav-link">Imagens</a>
                    <a href="../rioantigo_estorias.html" class="nav-link">Estórias</a>
                    <a href="../rioantigo_lista.html" class="nav-link">Locais</a>
                    <a href="../rioantigo_contato.html" class="nav-link">Contato</a>
                    <a href="../sobre.html" class="nav-link">Sobre</a>
                </div>
            </div>
        </nav>

    </header>

    <main class="container m-2 w-75 mx-auto my-font-family">

        <div class="row">
            <div class="col text-center m-0">
                <h2 class="mt-2 mb-5 my-h2">Assunto - Cadastrar</h2>
            </div>
        </div>

        <?php
            if ($_SESSION['mensagemRetorno'] != NULL) {
               $mensagem = $_SESSION['mensagemRetorno'];     
        ?>

        <div class="row">
                <!-- coluna (grid system) -->
                <div class="col">
                    <!-- bloco tipo "alerta", alerta backgroundcolor, alerta pode ser desfeito / papel = alerta -->
                    <div class="alert alert-success alert-dismissible" role="alert">
                        <!-- ancora, classe="close" botao pode ser desfeito -->
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <?=$mensagem?>
                    </div>
                </div>
        </div>

        <?php
                unset($_SESSION['mensagemRetorno']);
            }
        ?>

        <!-- formulario HTML -->
        <form name="frmAssunto" action="../servicos/assunto_incluir_service.php" method="post" class="my-label-color-purple">

            <!-- linha de um formulario para agrupar mais de um elemento usando o Grid System -->
            <div class="form-row">
                <!-- grupo de elementos do formulario (label + input) -->
                <div class="form-group col-md-6">
                    <label for="nome">Descrição:</label>
                    
                    <!-- classe definindo que o elemento pertence a um formulario pelo Bootstrap -->
                    <input class="form-control" type="text" id="descricao" name="descricao" placeholder="Informe a descricao do Assunto" required>  
                </div>
            </div>

            <div class="form-group my-4 text-center">
                <input type="reset" value="Limpar" class="btn btn-primary btn-md">
                <input type="submit" value="Cadastrar" class="btn btn-primary btn-md">
            </div>

        </form>

    </main>

    <footer class="container text-center">
        <!-- linha (grid system), border-top, cor aplicada na borda, background-color (cor de fundo) -->
        <div class="row border-top border-primary bg-light">
            <div class="col-2"></div>
            <div class="col-8 text-center">
                <h5>Fontes</h5>
                <p>Esta página foi montada a partir do trabalho de <a
                        href="https://theurbanearth.wordpress.com/2009/02/24/rio-de-janeiro-anos-40/"
                        target="_blank"><span class="fonte-bold">Cecilia Lucchese</span></a>, disponível através do blog
                    <a href="https://theurbanearth.wordpress.com/" target="_blank"><span class="fonte-bold">THE URBAN
                            EARTH -
                            Reflexões para um mundo urbanizado</span></a> de sua autoria.
                </p>
            </div>
            <div class="col-2"></div>
        </div>
        <div class="row bg-light my-0">
            <div class="col font text-primary copyright">
                <p>&copy; Copyright Pmg Web</p>
            </div>
        </div>
    </footer>

    <!-- seu codigo termina aqui -->

    <!-- Bootstrap -->
    <!-- insira este conteudo do Bootstrap aqui, antes do fechamento do "body" -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>

    <!-- mostra o nome do arquivo no input type='file' -->
    <script>
        $(".custom-file-input").on("change", function () {
            var nomeArquivo = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(nomeArquivo);
        });
    </script>

    <!-- os scripts abaixo tambem podem ser utilizados ao inves dos dois acima -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->

</body>

</html>