<?php
	Class Copa{
		private $codigo;
		private $nome;
		private $cod_usuario;
		private $ano;

		public function Copa($nome, $cod_usuario, $ano){
			$this->nome = $nome;
			$this->cod_usuario = $cod_usuario;
			$this->ano = $ano;
		}

		public function getCodigo(){
			return $this->codigo;
		}

		public function setCodigo($codigo){
			$this->codigo = $codigo;
		}

		public function getNome(){
			return $this->nome;
		}

		public function setNome($nome){
			$this->nome = $nome;
		}

		public function getCodUsuario(){
			return $this->cod_usuario;
		}

		public function setCodUsuario($cod_usuario){
			$this->cod_usuario = $cod_usuario;
		}

		public function getAno(){
			return $this->ano;
		}

		public function setAno($ano){
			$this->ano = $ano;
		}
	}
?>