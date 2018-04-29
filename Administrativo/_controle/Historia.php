<?php
	class Historia{
		private $codigo;
		private $subtitulo;
		private $descricao;
		private $imagem;
		private $cod_TitHisto;
		private $data_criacao;
		private $data_alteracao;

		public function Historia(){
		
		}

		public function getCodigo(){
			return $this->codigo;
		}

		public function setCodigo($codigo){
			$this->codigo = $codigo;
		}

		public function getSubtitulo(){
			return $this->subtitulo;
		}

		public function setSubtitulo($subtitulo){
			$this->subtitulo = $subtitulo;
		}

		public function getDescricao(){
			return $this->descricao;
		}

		public function setDescricao($descricao){
			$this->descricao = $descricao;
		}

		public function getImagem(){
			return $this->imagem;
		}

		public function setImagem($imagem){
			$this->imagem = $imagem;
		}

		public function getCodTitHisto(){
			return $this->cod_TitHisto;
		}

		public function setCodTitHisto($cod_TitHisto){
			$this->cod_TitHisto = $cod_TitHisto;
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