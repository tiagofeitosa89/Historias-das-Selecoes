<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
	if(!isset($_GET['delete'])){ echo '<script> window.location.href="index.php?link=10"; </script>'; exit;}
	
	$id = $_GET['delete'];

	include_once("_controle/SelecaoDAO.php");

	$SelecaoDAO = new SelecaoDAO();

	if ($SelecaoDAO->Deletar($id)) {
	 	echo '<script> 
					swal("Sucesso!", "Seleção excluída com êxito", "success", {closeOnClickOutside: false}
					).then(function(){
						window.location.href="index.php?link=10";
					});
				  </script>';
	 } else{
	 	echo '<script> 
					swal("Erro!", "A operação não pôde ser realizada!", "error", {closeOnClickOutside: false}
					).then(function(){
						window.location.href="index.php?link=10";
					});
				  </script>';
	 }

?>