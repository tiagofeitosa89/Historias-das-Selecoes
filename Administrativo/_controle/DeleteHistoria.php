<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
	if(!isset($_GET['id_titulo']) && !isset($_GET['id_subtitulo'])){ 
		echo '<script> window.location.href="index.php?link=13"; </script>'; 
		exit;
	}
	
	$id_titulo = $_GET['id_titulo'];
	$id_subtitulo = $_GET['id_subtitulo'];

	include_once("_controle/Titulo_HistoriaDAO.php");
	include_once("_controle/HistoriaDAO.php");

	$titulo_HistoriaDAO = new Titulo_HistoriaDAO();
	
	$historiaDAO = new HistoriaDAO();

	$sqlExisteOutrasHisto = "Select * from historia where cod_TitHisto = '{$id_titulo}'";
	$resultado = $titulo_HistoriaDAO->Selecionar($sqlExisteOutrasHisto);

	if (($resultado != "") && (count($resultado) > 1)) {
		if ($historiaDAO->Deletar($id_subtitulo)){
		 	echo '<script> 
						swal("Sucesso!", "Historia excluída com êxito", "success", {closeOnClickOutside: false}
						).then(function(){
							window.location.href="index.php?link=13";
						});
					  </script>';
		 } else {
		 	echo '<script> 
						swal("Erro!", "A operação não pôde ser realizada!", "error", {closeOnClickOutside: false}
						).then(function(){
							window.location.href="index.php?link=13";
						});
					  </script>';
		 }	
	}else{
		if ($titulo_HistoriaDAO->Deletar($id_titulo)) {
			if ($historiaDAO->Deletar($id_subtitulo)){
			 	echo '<script> 
							swal("Sucesso!", "Historia excluída com êxito teste", "success", {closeOnClickOutside: false}
							).then(function(){
								window.location.href="index.php?link=13";
							});
						  </script>';
			 } else {
			 	echo '<script> 
							swal("Erro!", "A operação não pôde ser realizada!", "error", {closeOnClickOutside: false}
							).then(function(){
								window.location.href="index.php?link=13";
							});
						  </script>';
			 }	
		}else {
		 	echo '<script> 
						swal("Erro!", "A operação não pôde ser realizada!", "error", {closeOnClickOutside: false}
						).then(function(){
							window.location.href="index.php?link=13";
						});
					  </script>';
		}
	}

	

?>