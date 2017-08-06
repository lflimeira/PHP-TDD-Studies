<?php

namespace Loja\RH;

use Loja\RH\Funcionario;

class CalculadoraDeSalario
{
    public function calculaSalario(Funcionario $funcionario)
    {
        if ($funcionario->getCargo() === 1) {
            if ($funcionario->getSalario() > 3000) {
                return $funcionario->getSalario() * 0.8;
            }
            return $funcionario->getSalario() * 0.9;
        }
        return $funcionario->getSalario() * 0.85;
    }
}