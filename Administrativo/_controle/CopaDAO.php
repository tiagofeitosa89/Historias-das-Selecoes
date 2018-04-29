<?php
	include_once("conexao.php");
	include_once("PadraoDAO.php");	

	class CopaDAO implements PadraoDAO{
		public function Inserir($objeto){
			try{
				$sql = "insert into copa(nome, cod_usuario, ano) values(:nome, :cod_usuario, :ano)";

				$stmt = conexao::getConexao()->prepare($sql);
				$stmt->bindValue(":nome", $objeto->getNome(), PDO::PARAM_STR);
				$stmt->bindValue(":cod_usuario", $objeto->getCodUsuario(), PDO::PARAM_INT);
				$stmt->bindValue(":ano", $objeto->getAno(), PDO::PARAM_INT);
				$stmt->execute();

				return true;

			} catch(PDOException $e){
				echo $e;
			}

			return false;
		}

		public function Alterar($objeto){
			try{
				$sql = "update copa set nome = :nome, cod_usuario = :cod_usuario, ano = :ano where codigo = :codigo";

				$stmt = conexao::getConexao()->prepare($sql);
				$stmt->bindValue(":nome", $objeto->getNome(), PDO::PARAM_STR);
				$stmt->bindValue(":cod_usuario", $objeto->getCodUsuario(), PDO::PARAM_INT);
				$stmt->bindValue(":ano", $objeto->getAno(), PDO::PARAM_INT);
				$stmt->bindValue(":codigo", $objeto->getCodigo(), PDO::PARAM_INT);

				$stmt->execute();

				return true;
			} catch(PDOException $e){
				echo $e;
			}
			return false;
		}

		public function Deletar($codigo){
			try{
				$sql = "delete from copa where codigo = :codigo";

				$stmt = conexao::getConexao()->prepare($sql);
				$stmt->bindValue(":codigo", $codigo, PDO::PARAM_INT);

				$stmt->execute();

				return true;

			} catch(PDOException $e){
				echo $e;
			}
			return false;
		}

		public function Selecionar($sql){
			try{
				$stmt = conexao::getConexao()->prepare($sql);
				$stmt->execute();
				
				return $stmt->fetchAll();	
			} catch(PDOException $e){
				echo $e;
			}
			return "";	
		}		
	} 	
?>