<?php  

namespace Tests;

require './vendor/autoload.php';

use Loja\Produto\Produto;
use Exemplos\MaiorEMenor;
use Loja\Carrinho\CarrinhoDeCompras;

use PHPUnit_Framework_TestCase as PHPUnit;

class MaiorEMenorTest extends PHPUnit
{
	public function testOrdemDecrescente()
	{
		$carrinho = new CarrinhoDeCompras();

		$carrinho->adiciona(new Produto("Geladeira", 450.00));
		$carrinho->adiciona(new Produto("Liquidificador", 250.00));
		$carrinho->adiciona(new Produto("Jogo de pratos", 70.00));

		$maiorEMenor = new MaiorEMenor();
		$maiorEMenor->encontra($carrinho);

		$this->assertEquals("Jogo de pratos", $maiorEMenor->getMenor()->getNome());
		$this->assertEquals("Geladeira", $maiorEMenor->getMaior()->getNome());

	}

	public function testApenasUmProduto()
	{
		$carrinho = new CarrinhoDeCompras();

		$carrinho->adiciona(new Produto("Geladeira", 450.00));

		$maiorEMenor = new MaiorEMenor();
		$maiorEMenor->encontra($carrinho);

		$this->assertEquals("Geladeira", $maiorEMenor->getMenor()->getNome());

		$this->assertEquals("Geladeira", $maiorEMenor->getMaior()->getNome());
		
		$this->assertInstanceOf("Loja\Produto\Produto", $maiorEMenor->getMenor());

		$this->assertInstanceOf("Loja\Produto\Produto", $maiorEMenor->getMaior());

		$this->assertInternalType("object", $maiorEMenor->getMenor());

		$this->assertInternalType("object", $maiorEMenor->getMaior());
	}
}


?>