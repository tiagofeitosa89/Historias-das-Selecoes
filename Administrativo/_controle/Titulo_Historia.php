<?php
	Class tituloHistoria{
		private $codigo;
		private $titulo;
		private $cod_usuario;
		private $cod_selecao;
		private $data_criacao;
		private $data_alteracao;
		private $cod_copa;

		public function tituloHistoria(){

		}

		public function getCodigo(){
			return $this->codigo;
		}

		public function setCodigo($codigo){
			$this->codigo = $codigo;
		}

		public function getTitulo(){
			return $this->titulo;
		}

		public function setTitulo($titulo){
			$this->titulo = $titulo;
		}

		public function getCodUsuario(){
			return $this->cod_usuario;
		}

		public function setCodUsuario($cod_usuario){
			$this->cod_usuario = $cod_usuario;
		}

		public function getCodSelecao(){
			return $this->cod_selecao;
		}

		public function setCodSelecao($cod_selecao){
			$this->cod_selecao = $cod_selecao;
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

		public function getCodCopa(){
			return $this->cod_copa;
		}

		public function setCodCopa($cod_copa){
			$this->cod_copa = $cod_copa;
		}
	}
?>