<?php  

namespace Exemplos;

/**
* 
*/
class ConversorDeNumeroRomano
{

	protected $tabela = array(
		'I' => 1,
		'V' => 5,
		'X' => 10,
		'L' => 50,
		'C' => 100,
		'D' => 500,
		'M' => 1000 );
	
	public function converter($numeroEmRomano )
	{
		$acumulador = 0;
		$ultimoVizinhoDaDireita = 0;
		for ($i= strlen($numeroEmRomano) - 1; $i >= 0 ; $i--) { 
			//Pega o inteiro referente ao simbolo atual
			$atual = 0;
			$numCorrente = $numeroEmRomano[$i];
			if (array_key_exists($numCorrente, $this->tabela)) {
				$atual = $this->tabela[$numCorrente];
			}

			//Se o da direita for menor, o multiplicaremos
			//por -1 para torná-lo negativo
			$multiplicador = 1;
			if ($atual < $ultimoVizinhoDaDireita) {
				$multiplicador = -1;
			}

			$acumulador += ($atual * $multiplicador);

			//Atualiza o vizinho da direita
			$ultimoVizinhoDaDireita = $atual;

		}

		return $acumulador;
	}
}