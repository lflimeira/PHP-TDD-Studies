<?php

namespace Tests\Carrinho;

use Tests\TestCase;
use Loja\Carrinho\CarrinhoDeCompras;
use Loja\Carrinho\MaiorPreco;

class MaiorPrecoTest extends TestCase
{
    public function testDeveRetornarZeroSeCarrinhoVazio()
    {
        $carrinho = new CarrinhoDeCompras();

        $algoritmo = new MaiorPreco();
        $valor = $algoritmo->encontra($carrinho);

        $this->assertEquals(0, $valor, null, 0,0001);
    }
}


