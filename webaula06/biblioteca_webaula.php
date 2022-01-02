<?php

/* funcao para simular a lista de funcionarios */
function simularListaFuncionarios(int $qtdFuncionarios) : array // assinatura da funcao/procedimento
{
    $lista = [];
    for($contador=0; $contador < $qtdFuncionarios; $contador++) {
        $salarioRandomico = rand(5000, 8000);
        array_push($lista, $salarioRandomico);
    }
    return $lista;
}

/* funcao para simular a lista de funcionarios com array associativo */
function simularListaFuncionariosComMatricula( int $qtdFuncionarios ) : array 
{
    /*
       matricula   = 'MATR_01',
       nome        = 'Funcionario_01',
       salarioNovo = 1000.0
    */

    // define o array
    $listaArrayAssociativo = array();
    for($contador=0; $contador < $qtdFuncionarios; $contador++) {
        
        $salarioRandomico = rand(5000, 8000);
        $nomeFuncionairio = 'Funcionario_' . str_pad($contador + 1, 2, "0", STR_PAD_LEFT);
        $matricula        = 'MATR_' . str_pad($contador + 1, 2, "0", STR_PAD_LEFT);

        // cria uma array associativo com matricula, nome, salario antigo e salario novo
        $registro = array( 'matricula'     => $matricula ,
                           'nome'          => $nomeFuncionairio ,
                           'salarioAntigo' => $salarioRandomico ,
                           'salarioNovo'   => 0 );

        // adiciona o array associativo como elemento de outro array 
        // caracterizando uma matriz
        array_push( $listaArrayAssociativo, $registro );                           

    }
    
    // retorna o array (matriz) criado para o chamador da funcao
    return $listaArrayAssociativo;
}


function escreverListaFuncionariosComMatricula( array $lista )
{
    // para cada elemento do array passado como parametro e 
    // acessado pela variaval $lista faça...
    foreach($lista as $funcionario) {
       
        // imprime o conteudo do array associativo acessado 
        // atraves da variavel $funcionario
        echo $funcionario['matricula'] . 
            " - " .
            $funcionario['nome'] . 
            " - R$ " . 
            strval($funcionario['salarioAntigo']) . 
            " - R$ " . 
            strval($funcionario['salarioNovo']) . 
            PHP_EOL;
   }
}
