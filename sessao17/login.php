<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap -->
    <!-- insira este conteudo aqui que representa o CSS do Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <link href="css/meu-estilo.css" rel="stylesheet">
</head>

<body>
    <div id="login">

        <div class="container">

            <div id="linha-login" class="row justify-content-center align-items-center">

                <div id="coluna-login" class="col-md-6">

                    <div id="caixa-login" class="col-md-12">

                        <form name="login" action="tratar_login.php" method="post" class="my-label-color-purple">

                            <h3 class="text-center my-h3">Login</h3>

                            <div class="form-group">
                                <label for="idUsuario" class="my-label-color-purple">Usuário</label>
                                <input class="form-control" type="text" id="idUsuario" name="usuario" required>
                            </div>

                            <div class="form-group">
                                <label for="idSenha" class="my-label-color-purple">Senha</label>
                                <input class="form-control" type="password" id="idSenha" name="senha" required>
                            </div>

                            <div class="form-row form-group">

                                <label for="idLembrar" class="col-6 justify-content-start my-label-color-purple">
                                    <span>Lembre de mim</span> 
                                    <span><input id="idLembrar" name="lembrar" type="checkbox"></span>
                                </label>
                                <a href="#" class="col-6 text-right my-label-color-purple">Esqueceu a
                                    senha?</a>
                            </div>

                            <input type="submit" class="btn btn-info btn-block" value="Entrar">

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap -->
    <!-- insira este conteudo do Bootstrap aqui, antes do fechamento do "body" -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>

</body>

</html>