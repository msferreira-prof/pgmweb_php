<?php
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Rio Antigo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- define e insere um favicon no documento HTML -->
    <link href="img/logo-rioantigo-ico.ico" rel="shortcut icon">

    <!-- versao gratuita do Font Awesome icons-->
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>

    <!-- Bootstrap -->
    <!-- insira este conteudo aqui que representa o CSS do Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- Google  icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link href="css/meu-estilo.css" rel="stylesheet">
</head>

<body>

    <!-- seu codigo comeca aqui -->

    <!-- container bootstrap -->
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
                    <a href="index.html" class="nav-link">Início</a>
                    <a href="rioantigo_cards.html" class="nav-link">Imagens</a>
                    <a href="rioantigo_estorias.html" class="nav-link">Estórias</a>
                    <a href="rioantigo_lista.html" class="nav-link">Locais</a>
                    <a href="rioantigo_contato.html" class="nav-link">Contato</a>
                    <a href="sobre.html" class="nav-link">Sobre</a>
                </div>
            </div>
        </nav>

        <div class="container">
            <div class="jumbotron mt-5">
                <h1 class="display-4">Sobre antigo Rio de Janeiro</h1>
                <div class="text-justify lead">
                    <p>O Rio de Janeiro completou 456 anos neste ano de 2021.</p>
                    <p>A proposta deste site é apresentar aos visitantes deste site, um conjunto de fotos que
                        mostram como a cidade era na década de 1940, ou seja, há cerca de 80 anos.</p>
                    <p>Neste período ocorreu diversos acontecimentos, como por exemplo, a criação de uma
                        universidade católica, a inauguração de maior cinema da cidade, a construção da avenida
                        Presidente
                        Vargas, a construção do <span data-toggle="tooltip" data-replacement="right"
                            title="Instituto Militar de Engenharia" class="tooltip_sublinhado">IME</span> e a
                        inauguração do
                        Club de Regatas Botafogo.
                    </p>
                    <p>Outro fato, foi o aumento de vagas na construção civil, causando a migração de
                        trabalhadores oriundos da região nordeste brasileira. Esta migração levou a criação de um ponto
                        de
                        encontro destes migrantes em São Cristóvão.</p>
                    <p>Para conhecer mais, acesse os itens de nosso menu.</p>
                    <hr class="my-4">
                    <p>Boa diversão!<span class="material-icons stateblue">
                            sentiment_satisfied_alt
                        </span></p>
                </div>
            </div>
        </div>
    </header>

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

    <!-- os scripts abaixo tambem podem ser utilizados ao inves dos dois acima -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->

    <!-- tooltip -->
    <script>
        $(document).ready(function () {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>

</body>

</html>