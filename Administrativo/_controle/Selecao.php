<?php
	Class Selecao{
		private $codigo;
		private $nome;
		private $bandeira;
		private $cod_usuario;
		private $data_criacao;
		private $data_alteracao;

		public function Selecao($nome, $cod_usuario){
			$this->nome = $nome;
			$this->cod_usuario = $cod_usuario;
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

		public function getBandeira(){
			return $this->bandeira;
		}

		public function setBandeira($bandeira){
			$this->bandeira = $bandeira;
		}

		public function getCodUsuario(){
			return $this->cod_usuario;
		}

		public function setCodUsuario($cod_usuario){
			$this->cod_usuario = $cod_usuario;
		}

		public function getDataCriacao(){
			return $this->data_criacao;
		}

		public function setDataCriacao($data_criacao){
			$this->data_criacao = $data_criacao;
		}

		public function getDataAlteracao(){
			return $this->data_alteracao;
		}

		public function setDataAlteracao($data_alteracao){
			$this->data_alteracao = $data_alteracao;
		}
	}
?>