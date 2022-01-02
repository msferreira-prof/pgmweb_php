<?php
/*
    $_GET 
    $_POST
*/
define('SENHA_PADRAO', '123456');

$cookie_name = "nome_usuario";
$cookie_value = "";

$usuario = NULL;
$senha = NULL;
$lembrar = NULL;

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$lembrar = isset($_POST['lembrar']) ? 1 : 0; // 1 = true e 0 = false 

// veriofica se a senha digitada está igual a senha esperada
if ($senha == SENHA_PADRAO ) {

    // apaga o cookie "nome_usuario" existente 
    setcookie($cookie_name, '', time() + (86400 * 30), "/");
    if ($lembrar == 1) {

        // cria um cookie novo com o nome do usuario em letra maiuscula
        $cookie_value = strtoupper($usuario);
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
    }
    
    // desvia para a pagina reajuste_salarial.php
    header('location: reajuste_salarial.php');

} else {

    // desvia para a pagina senha_invalida.php
    header('location: senha_invalida.php');

}