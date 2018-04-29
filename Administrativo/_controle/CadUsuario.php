<?php
	
	include_once("Usuario.php");
	include_once("UsuarioDAO.php");

	if(isset($_POST["registrar"])){
		if(requisicao()){
			$usuario = $_POST["usuario"];
			$senha = md5($_POST["senha"]);

			if(!empty($usuario) && !empty($senha)){
				$Usuario = new Usuario($usuario, $senha);
				$UsuarioDAO = new UsuarioDAO();

				if($UsuarioDAO->inserir($Usuario)){
					echo '<script> 
							swal("Sucesso!", "Usuario cadastrado com êxito", "success", {closeOnClickOutside: false}
							).then(function(){
								window.location.href="index.php?link=11";
							});
						  </script>';
				}else{
					echo '<script> 
							swal("Erro!", "A operação não pôde ser realizada!",  "error", {closeOnClickOutside: false}
							).then(function(){
								window.location.href="index.php?link=11";
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