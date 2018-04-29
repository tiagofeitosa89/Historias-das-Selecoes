<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
	if(!isset($_GET['delete'])){ echo '<script> window.location.href="index.php?link=11"; </script>'; exit;}
	
	$id = $_GET['delete'];

	include_once("_controle/UsuarioDAO.php");

	$usuarioDAO = new UsuarioDAO();

	if ($usuarioDAO->Deletar($id)) {
	 	echo '<script> 
					swal("Sucesso!", "Usuário excluído com êxito", "success", {closeOnClickOutside: false}
					).then(function(){
						window.location.href="index.php?link=11";
					});
				  </script>';
	 } else{
	 	echo '<script> 
					swal("Erro!", "A operação não pôde ser realizada!", "error", {closeOnClickOutside: false}
					).then(function(){
						window.location.href="index.php?link=11";
					});
				  </script>';
	 }

?>