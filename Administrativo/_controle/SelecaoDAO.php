<?php
	include_once("conexao.php");
	include_once("PadraoDAO.php");	

	class SelecaoDAO implements PadraoDAO{
		public function Inserir($objeto){
			try{
				$sql = "insert into selecao(nome, bandeira, cod_usuario) values(:nome, :bandeira, :cod_usuario)";

				$stmt = conexao::getConexao()->prepare($sql);
				$stmt->bindValue(":nome", $objeto->getNome(), PDO::PARAM_STR);
				$stmt->bindValue(":bandeira", $objeto->getBandeira(), PDO::PARAM_STR);
				$stmt->bindValue(":cod_usuario", $objeto->getCodUsuario(), PDO::PARAM_INT);
				$stmt->execute();

				return true;

			} catch(DPOException $e){
				echo $e;
			}

			return false;
		}

		public function Alterar($objeto){
			try{
				$sql = "update selecao set nome = :nome, bandeira = :bandeira, cod_usuario = :cod_usuario where codigo = :codigo";

				$stmt = conexao::getConexao()->prepare($sql);
				$stmt->bindValue(":nome", $objeto->getNome(), PDO::PARAM_STR);
				$stmt->bindValue(":bandeira", $objeto->getBandeira(), PDO::PARAM_STR);
				$stmt->bindValue(":cod_usuario", $objeto->getCodUsuario(), PDO::PARAM_INT);
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
				$sql = "delete from selecao where codigo = :codigo";

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