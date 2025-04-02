<?php

class Usuario{
	private $nome;
	private $corfundo;
	private $corletra;
	private $aniversario;

	public function setNome($nome)
	{
		$this->nome=$nome;
	}
	public function getNome()
	{
		return $this->nome;
	}

	public function setCorfundo($corfundo)
	{
		$this->corfundo=$corfundo;
	}
	public function getCorfundo()
	{
		return $this->corfundo;
	}	
	public function setCorletra($corletra)
	{
		$this->corletra=$corletra;
	}
	public function getCorletra()
	{
		return $this->corletra;
	}
	public function setAniversario($aniversario)
	{
		$this->aniversario=$aniversario;
	}
	public function getAniversario()
	{
		return $this->aniversario;
	}

}

?>