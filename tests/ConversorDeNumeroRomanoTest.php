<?php  

namespace Tests;

require './vendor/autoload.php';

use Exemplos\ConversorDeNumeroRomano;
use PHPUnit_Framework_TestCase as PHPUnit;

/**
* 
*/
class ConversorDeNumeroRomanoTest extends PHPUnit
{

	public function testDeveEntenderOSimboloI()
	{
		$romano = new ConversorDeNumeroRomano();
		$numero = $romano->converter("I");
		$this->assertEquals(1, $numero);
	}

	public function testDeveEntenderOSimboloV()
	{
		$romano = new ConversorDeNumeroRomano();
		$numero = $romano->converter("V");
		$this->assertEquals(5, $numero);
	}

	public function testDeveEntenderOSimboloII()
	{
		$romano = new ConversorDeNumeroRomano();
		$numero = $romano->converter("II");
		$this->assertEquals(2, $numero);
	}

	public function testDeveEntenderOSimboloXXII()
	{
		$romano = new ConversorDeNumeroRomano();
		$numero = $romano->converter("XXII");
		$this->assertEquals(22, $numero);
	}

	public function testDeveEntenderOSimboloIX()
	{
		$romano = new ConversorDeNumeroRomano();
		$numero = $romano->converter("IX");
		$this->assertEquals(9, $numero);
	}

	public function testDeveEntenderOSimboloXXIV()
	{
		$romano = new ConversorDeNumeroRomano();
		$numero = $romano->converter("XXIV");
		$this->assertEquals(24, $numero);
	}

}