<?php
	include_once("Copa.php");
	include_once("CopaDAO.php");


if(isset($_POST['registrar'])){
	if(requisicao()){
		$copa = $_POST["copa"];
		$ano = $_POST["ano"];

		if (!empty($copa) && !empty($ano)) {
			$copa = new Copa($copa, $_SESSION['codigo'], $ano);

			$copaDAO = new CopaDAO();

			if ($copaDAO->inserir($copa)) {
				echo '<script> 
					swal("Sucesso!", "Copa cadastrada com êxito", "success", {closeOnClickOutside: false}
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