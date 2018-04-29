<?php
	session_start();
	
	include_once('conexao.php');

	if(isset($_POST["registrar"])){
		$usuario = $_POST['usuario'];
		$senha = md5($_POST['senha']);

		if (!empty($usuario) && !empty($senha)){
			try{
				$sql = "Select codigo, usuario, master from usuario where usuario = :usuario and senha = :senha";

				$stmt = conexao::getConexao()->prepare($sql);
				$stmt->bindValue(':usuario', $usuario, PDO::PARAM_STR);
				$stmt->bindValue(':senha', $senha, PDO::PARAM_STR);
				$stmt->execute();

				$result = $stmt->fetchAll();

				if(!empty($result)){
					foreach ($result as $Exibir) {}
					
					$_SESSION['codigo'] = $Exibir['codigo'];
					$_SESSION['usuario'] = $Exibir['usuario'];
					$_SESSION['senha'] = $senha;
					$_SESSION['master'] = $Exibir['master'];
						
					header("Location: index.php?link=1");	 	
				}else{
					echo'<div class="alert alert-danger">
		                      <button type="button" class="close" data-dismiss="alert">×</button>
		                      <strong>Erro ao logar!</strong> Usuário não cadastrado.
		            	</div>';
				}		
			} catch(PDOException $e){
				echo $e;
			}	
		}else{
			header("Location: login.php");
		}
	}
?>