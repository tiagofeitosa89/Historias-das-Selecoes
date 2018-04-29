<?php
if (!isset($_GET['id'])) {
	echo '<script> window.location.href="index.php?link=12"; </script>';
	exit;
}

include_once("Copa.php");
include_once("CopaDAO.php");

$id = $_GET['id'];

try{
	$sqlConsulta = "Select nome, ano from copa where codigo = '{$id}'";
	$copaDAO = new CopaDAO();

	$resultado = $copaDAO->Selecionar($sqlConsulta);

	if ($resultado != "") {
		foreach ($resultado as $atributo) {
			$nome = $atributo[0];
			$ano = $atributo[1];			 		
		}			 		
	}else{
		echo '<script> 
				swal("Aviso!", "Não há dados cadastrados com o código informado", "info", {closeOnClickOutside: false}
				).then(function(){
					window.location.href="index.php?link=12";
				});
			  </script>';
	} 	
} catch(PDOException $e){
	echo $e;
}

if(isset($_POST['atualizar'])){
	if(requisicao()){
		$nome = $_POST["copa"];
		$ano = $_POST["ano"];

		if (!empty($nome) && !empty($ano)) {
			$copa = new Copa($nome, $_SESSION['codigo'], $ano);
			
			$copa->setCodigo($id);

			$copaDAO = new CopaDAO();

			if ($copaDAO->Alterar($copa)) {
				echo '<script> 
					swal("Sucesso!", "Seleção atualizada com êxito", "success", {closeOnClickOutside: false}
					).then(function(){
						window.location.href="index.php?link=12";
					});
				  </script>';
			}else{
				echo '<script> 
						swal("Erro!", "A operação não pôde ser realizada!",  "error", {closeOnClickOutside: false}
						).then(function(){
							window.location.href="index.php?link=12";
						});
					  </script>';
			}
		}else{
			echo '<div class="alert alert-warning">
	                  <button type="button" class="close" data-dismiss="alert">×</button>
	                  <strong>Preencha as informações obrigatórias!</strong> 
	             	  </div> '; 
		}	
	}
}
?>