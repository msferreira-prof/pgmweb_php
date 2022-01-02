var num1, num2, num3, num4;

// inicializacao de variaveis
num1 = 0;
num2 = 0;
num3 = 0;
num4 = 0;

// entrada de dados
num1 = prompt("Informe o 1o. numero");
num2 = prompt("Informe o 2o. numero");
num3 = prompt("Informe o 3o. numero");
num4 = prompt("Informe o 4o. numero");

// processamento atraves da execucao da funcao para cada numero
verificarDivisao( num1 );
verificarDivisao( num2 );
verificarDivisao( num3 );
verificarDivisao( num4 );


function verificarDivisao( numero ) {
    // declaracao de variaveis da funcao
    var restoDiv_2, restoDiv_3;

    // inicializacao de variaveis
    restoDiv_2 = 0;
    restoDiv_3 = 0;

    // processamento
    restoDiv_2 = numero % 2;
    restoDiv_3 = numero % 3;

    if (restoDiv_2 == 0 && restoDiv_3 == 0) {
        document.writeln("<p>" + "O numero " + numero + " é divisivel por 2 e 3" + "</p>");
    } else {
        document.writeln("<p>" + "O numero " + numero + " não é divisivel por 2 e 3" + "</p>");
    }
    
    return;
}