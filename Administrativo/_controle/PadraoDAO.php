<?php
	interface PadraoDAO{
		public function inserir($objeto);
		public function alterar($objeto);
		public function deletar($codigo);
	}
?>