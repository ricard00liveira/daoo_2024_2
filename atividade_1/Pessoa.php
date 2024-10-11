<?php

class Pessoa
{
	public $nome, $idade, $altura, $peso;
	public $imc;
	function __construct(
		$nome,
		$idade = null,
		$altura = null,
		$peso = null

	) {
		$this->nome = $nome;
		$this->idade = $idade;
		$this->altura = $altura;
		$this->peso = $peso;
	}

	function __destruct()
	{
		echo "\n$this->nome foi destruido!";
	}
	public function __set($chave,$valor) {
		$this->chave = $valor;
	}
	
}