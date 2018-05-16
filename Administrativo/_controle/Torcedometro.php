<?php
	
	include_once("TorcedometroDAO.php");

	Class Torcedometro{
		private $codigo;
		private $cod_selecao;
		private $cod_copa;
		private $votos;
		
		public function Torcedometro(){

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

		public function calcularTotalVotos(){
			$sqlTotalVotos = 'Select sum(votos) from torcidometro';

			$torcedometroDAO = new TorcedometroDAO();
			$retorno = $torcedometroDAO->Selecionar($sqlTotalVotos);

			$total = 0;

			foreach ($retorno as $atributo) {
				$total = $atributo[0];
			}

			return $total;
		}

		public function calcularPorcentagem($parcialVotos){
			$totalVotos = $this->calcularTotalVotos();
			$porcentagem = ($parcialVotos * 100)/$totalVotos;

			return $porcentagem;
		}

	}
?>