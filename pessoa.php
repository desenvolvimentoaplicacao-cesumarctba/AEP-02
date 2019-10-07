<?php
class Pessoa
{		
		public $nome;
		public $data_nascimento;
		public $peso;
		public $altura;
		public $cpf;
		
		public function Pessoa ($nome,$data,$cpf,$altura,$peso) {
			$this->nome=$nome;
			$this->data_nascimento=$data;
			$this->cpf=$cpf;
			$this->altura=$altura;
			$this->peso=$peso;		
		}
		
		public function calculoIMC () 
		{
        	$imc=$this->peso/($this->altura*$this->altura);
        	if ($imc <=18){
        		echo "O seu IMC é:  ".number_format($imc,2),"\n";
        		echo "Seu IMC indica: Muito Abaixo do peso\n";
        	}
        	elseif (($imc>=18) && ($imc<30))
        	{
            	echo "O seu Indice de Massa Corporal é ".number_format($imc,2),"\n";
           	 	echo "Seu IMC indica: Abaixo do Peso\n";
           	}
        	elseif (($imc>=30) && ($imc<40))
       		{
            	echo "O seu Indice de Massa Corporal é ".number_format($imc,2),"\n";
            	echo "Seu IMC indica: Peso ideal\n";
        	}elseif ($imc>=40)
        	{
            	echo "O seu IMC é: ".number_format($imc,2),"\n";
            	echo "Seu IMC indica: Acima do Peso\n";
        	}
       	 	
    	}
    	public function CalculoIdade(){
    		
	    		$dia = date('d');
	    		$mes = date('m');
		    	$ano = date('Y');
	    	
		    	$nasc = explode('/',$this->data_nascimento);
		    	$dianasc = ($nasc[0]);
		    	$mesnasc = ($nasc[1]);
		    	$anonasc = ($nasc[2]);
	        
	    		$idade = $ano - $anonasc; 
	    		echo "Você possui $idade anos de idade.";
	    	}
    	public function validarCPF($cpf = null) {
				if(empty($cpf)) {
					return false;
				}
				$cpf = preg_replace("/[^0-9]/", "", $cpf);
				$cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);
				
				if (strlen($cpf) != 11) {
					return false;
				}
                else if (	$cpf == '00000000000' ||	
                            $cpf == '11111111111' ||
                            $cpf == '22222222222' ||	
                            $cpf == '33333333333' ||
                            $cpf == '44444444444' ||	
                            $cpf == '55555555555' ||
                            $cpf == '66666666666' ||	
                            $cpf == '77777777777' ||
                            $cpf == '88888888888' ||	
                            $cpf == '99999999999') {
					return false;
				
				 } else {
					for ($t = 9; $t < 11; $t++) {
						for ($d = 0, $c = 0; $c < $t; $c++) {
							$d += $cpf{$c} * (($t + 1) - $c);
						}
						$d = ((10 * $d) % 11) % 10;
						if ($cpf{$c} != $d) {
							return false;
						}
					}
					return true;
					echo "CPF validado com sucesso";
				}
				return $this->cpf;
	}
}