<?php
	Class Usuario{
		private $codigo;
		private $usuario;
		private $senha;

		public function Usuario($usuario, $senha){
			$this->usuario = $usuario;
			$this->senha = $senha;
		}
		
		public function setcodigo($codigo){
			$this->codigo = $codigo;
		}

		public function getcodigo(){
			return $this->codigo;
		}

		public function setUsuario($usuario){
			$this->usuario = $usuario;
		}

		public function getUsuario(){
			return $this->usuario;
		}

		public function setSenha($senha){
			$this->senha = $senha;
		}

		public function getSenha(){
			return $this->senha;
		}
	}
?>