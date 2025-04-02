<?php 

class Calculadora{

	private $numero1;
	private $numero2;

	public function setNumero1($numero1){
		$this->numero1=$numero1;
	}

	public function getNumero1(){
		return $this->numero1;
	}
	public function setNumero2($numero2){
		$this->numero2=$numero2;
	}
	public function getNumero2(){
		return $this->numero2;
	}
	public function somar($a,$b){
		return $a+$b;
	}
	public function subtrair($a,$b){
		return $a-$b;
	}
	public function multiplicar($a,$b){
		return $a*$b;
	}
	public function dividir($a,$b){
		if($b==0){
			return "Não há divisão por zero!";
	   	}else{
	   		return $a/$b;
		}
	}
}

?>