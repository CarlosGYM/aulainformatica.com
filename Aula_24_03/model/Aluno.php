<?php 

	Class Aluno{
		private $nome;
		private $matricula;
		private $telefone;
		private $cordefundo;

		public function setNome($nome)
		{
			$this->nome=$nome;
		}
		public function getNome()
		{
			return $this->nome;
		}
		public function setMatricula($matricula){

			$this->matricula=$matricula;
		}
		public function getMatricula(){

			return $this->matricula;
		}
		public function setTelefone($telefone){

			$this->telefone=$telefone;
		}
		public function getTelefone(){
			return $this->telefone;
		}
		public function setCordefundo($cordefundo){

			$this->cordefundo=$cordefundo;
		}
		public function getCordefundo(){

			return $this->cordefundo;
		}
	}



 ?>