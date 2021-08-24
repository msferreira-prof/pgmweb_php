<?php
session_start();
?>

<!DOCType html>
<html>

    <head>
        <title>Exercícios</title>
    </head>

    <body>
        <h3>Resultado Exercício 05 - Repetição</h3>
        <div>
            <label>Início Faixa </label>
            <input type="text" value="<?php echo isset($_SESSION['if']) ? $_SESSION['if'] : '';?>" readonly>

            <!--
                if ($_SESSION['if'] != NULL) {
                  echo $_SESSION['if'];  
                } else {
                  echo '';
                }
            -->

        </div>
        <div>
            <label>Fim Faixa </label>
            <input type="text" value="<?php echo isset($_SESSION['ff']) ? $_SESSION['ff'] : '';?>" readonly>
        </div>
        <div>
            <label>Números pares encontrados </label>
            <input type="text" value="<?php echo isset($_SESSION['r']) ? $_SESSION['r'] : '';?>" readonly>

        </div>
        <div>
            <label>A soma dos números pares é </label>
            <input type="text" value="<?php echo isset($_SESSION['sp']) ? $_SESSION['sp'] : ''; ?>" readonly>
        </div>
    </body>

</html>