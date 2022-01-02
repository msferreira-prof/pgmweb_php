<?php
/*
    $_GET 
    $_POST
*/
define('SENHA_PADRAO','123456');

$usuario = NULL;
$senha = NULL;
$lembrar = NULL;

$usuario = $_GET['usuario'];
$senha = $_POST['senha'];
$lembrar = $_POST['lembrar'];

if ($senha != SENHA_PADRAO ) {
    header('Location: senha_invalida.php');

} else {

    echo "<!DOCType html><html><head><title>Teste</title></head><body>";
    echo "<p>Nome.: " . $usuario . "</p><br>";
    echo "<p>Senha: " . $senha   . "</p><br>";
    echo "<p>Lembrar: " . $lembrar . "</p><br>";
    echo "</body></html>";

}