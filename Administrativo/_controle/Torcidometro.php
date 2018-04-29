<?php
	Class Torcidometro{
		private $codigo;
		private $cod_selecao;
		private $cod_copa;
		private $votos;

		public function Torcidometro(){

		}	

		public function getCodigo(){
			return $this->codigo;
		}

		public function setCodigo($codigo){
			$this->codigo = $codigo;
		}

		public function getCodSelecao(){
			return $this->cod_selecao;
		}

		public function setCodSelecao($cod_selecao){
			$this->cod_selecao = $cod_selecao;
		}

		public function getCodCopa(){
			return $this->cod_copa;
		}

		public function setCodCopa($cod_copa){
			$this->cod_copa = $cod_copa;
		}

		public function getVotos(){
			return $this->votos;
		}

		public function setVotos($votos){
			$this->votos = $votos;
		}

	}
?>