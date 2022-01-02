<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Exercícios PHP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="img/php.ico" rel="shortcut icon">
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <link href="css/meu-estilo.css" rel="stylesheet">

</head>

<body>

    <!-- seu codigo comeca aqui -->

    <header class="container px-0">

        <nav class="navbar navbar-expand-lg navbar-light bg-light px-0">

            <!-- logo -->
            <div>
                <a class="navbar-brand mx-auto">
                    <img src="img/php_96.png">
                </a>
            </div>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mynavbar"
                aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Navegação Alternativa">
                Menu <span class="navbar-toggler-icon"></span>
            </button>

            <!-- menu -->
            <div class="collapse navbar-collapse justify-content-end" id="mynavbar">
                <div class="navbar-nav">
                    <a href="index.html" class="nav-link">Início</a>
                    <a href="cadastrarProfessor_bs.php" class="nav-link">Cadastrar</a>
                    <a href="consultarProfessor_bs.php" class="nav-link">Consultar</a>
                    <a href="servicos/listarProfessor_servico.php" class="nav-link">Listar</a>
                </div>
            </div>
        </nav>

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

    </header>

    <main class="container m-2 w-75 mx-auto my-font-family">

        <div class="row">
            <div class="col text-center m-0">
                <h2 class="mt-2 mb-5 my-h2">Professor - Cadastrar</h2>
            </div>
        </div>

        <!-- formulario HTML -->
        <form name="frmCadastrarProfessor" action="servicos/professor_servico.php" method="post" class="my-label-color-purple">

            <div class="form-group row">
                <label for="idNomeProfessor" class="col-sm-2 col-form-label">Nome do Professor</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" id="idNomeProfessor" name="nomeProfessor" placeholder="Informe o nome do professor" maxlength="45" required>  
                </div>
            </div>

            <div class="form-group my-4 text-center">
                <input type="reset" value="Limpar" class="btn btn-primary btn-md">
                <input type="submit" value="Cadastrar" class="btn btn-primary btn-md">
            </div>

        </form>

    </main>

    <footer class="container text-center">
        <div class="row border-top border-primary bg-light">
            <div class="col font text-primary copyright">
                <p>&copy; Copyright Pmg Web</p>
            </div>
        </div>
    </footer>

    <!-- seu codigo termina aqui -->

    <!-- Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>

</body>

</html>