<?php
	
	include_once("conexao.php");
	include_once("Titulo_HistoriaDAO.php");

	$selecao = $_GET["selecao"];
	$copa = $_GET["copa"];

	$Titulos = new Titulo_HistoriaDAO();

	$sql = "Select titulo from titulo_historia where cod_selecao = '{$selecao}' and cod_copa = '{$copa}'";

	$lista = $Titulos->Selecionar($sql);
	echo "teste";
	if(count($lista) > 0){
		foreach ($lista as $titulo) {
					echo $titulo["titulo"];	
				}		
	}

?>