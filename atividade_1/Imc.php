<?php
class Imc {

    public static function calc(Paciente $pa) {

		if (
			!is_numeric($pa->altura)
			&& !is_numeric($pa->peso)
		) {
			echo "\nIMC $pa->nome: Erro, informe peso e altura corretamente.\n";
            return;
        }

        $pa->imc = ($pa->peso / $pa->altura ** 2);
        var_dump($pa);
		return $pa->nome." tem IMC: ".number_format($pa->imc,2);
		
        }

    public static function classifica(Paciente $pa) {
        print(" => ");
        if($pa->imc != null || !$pa->imc <= 0) {
            if($pa->imc < 18.5) {
                return "Abaixo do peso.";
            } elseif($pa->imc >= 18.5 && $pa->imc <= 24.9) {
                return "Saudável.";
        } elseif($pa->imc >= 25 && $pa->imc <= 29.9) {
            return "Sobrepeso.";
    } else {
        return "Obesidade";
    
    }
        } else {
            return "Erro ao classificar.";
        }
    }
}
?>