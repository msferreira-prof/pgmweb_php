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
                    <a href="exerc05_selecao.php" class="nav-link">Exerc 05</a>
                    <a href="exerc06_selecao.php" class="nav-link">Exerc 06</a>
                    <a href="exerc12_selecao.php" class="nav-link">Exerc 12</a>
                </div>
            </div>
        </nav>

    </header>

    <main class="container m-2 w-75 mx-auto my-font-family">

        <div class="row">
            <div class="col text-center m-0">
                <h2 class="mt-2 mb-5 my-h2">Exercício 12 - Seleção</h2>
            </div>
        </div>

        <!-- formulario HTML -->
        <form name="exerc06" action="exerc12.php" method="get" class="my-label-color-purple">

            <!-- nome -->
            <div class="form-group row">
                <label for="idNome" class="col-sm-2 col-form-label">Nome</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" id="idNome" name="nome"
                        placeholder="Informe o nome da pessoa" required>
                </div>
            </div>

            <!-- sexo -->
            <fieldset class="form-group">
                <div class="row">
                    <legend class="col-form-label col-2 pt-0">Sexo </legend>

                    <div class="col-10">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="sexo" id="sexoM" value="M" checked>
                            <label class="form-check-label" for="sexoM">Masculino</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="sexo" id="sexoF" value="F">
                            <label class="form-check-label" for="sexoF">Feminino</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="sexo" id="sexoO" value="O">
                            <label class="form-check-label" for="sexoO">Outro</label>
                        </div>
                    </div>

                </div>
            </fieldset>

            <!-- estado civil -->
            <div class="form-group row">
                <label for="idEstadoCivil" class="col-sm-2 col-form-label">Estado Civil</label>
                <div class="col-sm-10">
                    <select class="form-control col-sm-10" id="idEstadoCivil" name="estadoCivil">
                        <option value="S">Solteiro (a)</option>
                        <option value="C">Casado (a)</option>
                        <option value="D">Divorciado (a)</option>
                        <option value="E">Separado (a)</option>
                        <option value="U">União estável</option>
                        <option value="O">Outro</option>
                    </select>
                </div>
            </div>

            <!-- idade -->
            <div class="form-group row">
                <label for="idIdade" class="col-sm-2 col-form-label">Idade</label>
                <div class="col-sm-10">
                    <input class="form-control" type="number" id="idIdade" name="idade" placeholder="Informe a idade"
                        min="0" max="100" required>
                </div>
            </div>

            <!-- salario -->
            <div class="form-group row">
                <label for="idSalario" class="col-sm-2 col-form-label">Salário</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" id="idSalario" name="salario"
                        placeholder="Informe o salário do pai/mãe" required>
                </div>
            </div>


            <div class="form-group my-4 text-center">
                <input type="reset" value="Limpar" class="btn btn-primary btn-md">
                <input type="submit" value="Enviar" class="btn btn-primary btn-md">
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