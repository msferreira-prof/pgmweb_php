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
