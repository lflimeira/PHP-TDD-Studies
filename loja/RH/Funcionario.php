<?php

namespace Loja\RH;

class Funcionario
{

    protected $nome;
    protected $salario;
    protected $cargo;

    function __construct($nome, $salario, $cargo)
    {
        $this->nome = $nome;
        $this->salario = $salario;
        $this->cargo = $cargo;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getSalario()
    {
        return $this->salario;
    }

    public function getCargo()
    {
        return $this->cargo;
    }
}



