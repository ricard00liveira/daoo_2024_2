<?php
include_once "Pessoa.php";
include_once "Imc.php";
class Paciente extends Pessoa {
    function __construct($nome, $idade, $altura, $peso)
	{
		parent::__construct($nome, $idade, $altura, $peso);
	}

}

$pa1 = new Paciente("Jorge",null,1.8,80);
print(Imc::calc($pa1));
print(Imc::classifica($pa1));
?>