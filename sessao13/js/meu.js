var btnExecutar, btnValidar, btnExecutarValido;

btnExecutar = document.getElementById("btnExecutar");
btnValidar = document.getElementById("btnValidar");
btnExecutarValido = document.getElementById("btnExecutarValido");

btnExecutar.onclick = apresentarExerc05;
btnExecutar.ondblclick = apresentarExerc05_While;
btnValidar.ondblclick = validarEntrada01;
btnExecutarValido.onclick = apresentarExerc05_While;

/* funcao apresentar */
function apresentarExerc05() {

    var somaPositivos, modulo, resultado, valorInicial, valorFinal;

    somaPositivos = 0;
    resultado = "";

    /* recuperar os valores do formulario de entrada de dados */
    valorInicial = document.getElementById("idEntrada01").value;
    valorFinal = document.getElementById("idEntrada02").value;

    /* conversao do numero informado como texto para tipo primitivo inteiro */
    valorInicial = parseInt(valorInicial);
    valorFinal = parseInt(valorFinal);

    /* processo utilizando os numeros informados no formulario */
    for (var contador = valorInicial; contador <= valorFinal; contador++) {
        modulo = contador % 2;
        if (modulo == 0) {
            resultado = resultado + contador + ", ";
            somaPositivos += contador;
        }
    }

    /* apresentar os resultados em elementos HTML do documento */
    document.getElementById("idResultado01").value = somaPositivos;
    document.getElementById("idResultado02").value = resultado;
}

/* funcao validar */
function validarEntrada01() {
    var valorInformado;

    a = false;

    //            validoTF = true;
    valorInformado = document.getElementById("idEntrada01").value;

    if (parseInt(valorInformado) < 10) {
        alert("Valor 'De' dever ser maior ou igual a 10");
        validoTF = false;
    } else {
        validoTF = true;
    }

    return validoTF;
}

/* funcao apresentar com validacao */
function apresentarExerc05_While() {

    var somaPositivos, modulo, resultado, valorInicial, valorFinal, validacao;
    var contador;

    /* validando um valor informado atraves de um elemento HMTL */
    validacao = validarEntrada01();
    if (validacao == true) { // se a validacao estiver ok, entao executar o processo

        somaPositivos = 0;
        resultado = "";

        /* recuperar os valores do formulario de entrada de dados */
        valorInicial = document.getElementById("idEntrada01").value;
        valorFinal = document.getElementById("idEntrada02").value;

        /* conversao do numero informado como texto para tipo primitivo inteiro */
        valorInicial = parseInt(valorInicial);
        valorFinal = parseInt(valorFinal);

        contador = valorInicial;
        while (contador <= valorFinal) {
            modulo = contador % 2;
            if (modulo == 0) {
                resultado = resultado + contador + ", ";
                somaPositivos += contador;
            }

            contador++;
        }

        document.getElementById("idResultado01").value = somaPositivos;
        document.getElementById("idResultado02").value = resultado;

    }
}