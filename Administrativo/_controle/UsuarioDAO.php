<?php
	
	include_once("conexao.php");
	include_once("PadraoDAO.php");

	class UsuarioDAO implements PadraoDAO{

		public function Inserir($objeto){
			try{
				$sql = "insert into usuario(usuario, senha) values(:usuario, :senha)";

				$stmt = conexao::getConexao()->prepare($sql);
				$stmt->bindValue(":usuario", $objeto->getUsuario(), PDO::PARAM_STR);
				$stmt->bindValue(":senha", $objeto->getSenha(), PDO::PARAM_STR);
				$stmt->execute();

				return true;

			} catch(DPOException $e){
				echo $e;
			}

			return false;
		}

		public function Alterar($objeto){
			try{
				$sql = "update usuario set usuario = :usuario, senha = :senha where codigo = :codigo";

				$stmt = conexao::getConexao()->prepare($sql);
				$stmt->bindValue(":usuario", $objeto->getUsuario(), PDO::PARAM_STR);
				$stmt->bindValue(":senha", $objeto->getSenha(), PDO::PARAM_STR);
				$stmt->bindValue(":codigo", $objeto->getCodigo(), PDO::PARAM_INT);

				$stmt->execute();

				return true;
			} catch(DPOException $e){
				echo $e;
			}
			return false;
		}

		public function Deletar($codigo){
			try{
				$sql = "delete from usuario where codigo = :codigo";

				$stmt = conexao::getConexao()->prepare($sql);
				$stmt->bindValue(":codigo", $codigo, PDO::PARAM_INT);

				$stmt->execute();

				return true;

			} catch(DPOException $e){
				echo $e;
			}
			return false;
		}

		public function Selecionar($sql){
			try{
				$stmt = conexao::getConexao()->prepare($sql);
				$stmt->execute();
				
				return $stmt->fetchAll();	
			} catch(DPOException $e){
				echo $e;
			}
			return "";			
		}		

	}

?>