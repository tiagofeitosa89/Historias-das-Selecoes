<?php
	include_once("conexao.php");
	include_once("PadraoDAO.php");	

	class Titulo_HistoriaDAO implements PadraoDAO{
		public function Inserir($objeto){
			try{
				$sql = "insert into titulo_historia(titulo, cod_usuario, cod_selecao, cod_copa) values(:titulo, :cod_usuario, :cod_selecao, :cod_copa)";

				$stmt = conexao::getConexao()->prepare($sql);
				$stmt->bindValue(":titulo", $objeto->getTitulo(), PDO::PARAM_STR);
				$stmt->bindValue(":cod_usuario", $objeto->getCodUsuario(), PDO::PARAM_INT);
				$stmt->bindValue(":cod_selecao", $objeto->getCodSelecao(), PDO::PARAM_INT);
				$stmt->bindValue(":cod_copa", $objeto->getCodCopa(), PDO::PARAM_INT);
				$stmt->execute();

				return true;

			} catch(DPOException $e){
				echo $e;
			}

			return false;
		}

		public function Alterar($objeto){
			try{
				$sql = "update titulo_historia set titulo = :titulo, cod_usuario = :cod_usuario, cod_selecao = :cod_selecao, cod_copa = :cod_copa where codigo = :codigo";

				$stmt = conexao::getConexao()->prepare($sql);
				$stmt->bindValue(":titulo", $objeto->getTitulo(), PDO::PARAM_STR);
				$stmt->bindValue(":cod_usuario", $objeto->getCodUsuario(), PDO::PARAM_INT);
				$stmt->bindValue(":cod_selecao", $objeto->getCodSelecao(), PDO::PARAM_INT);
				$stmt->bindValue(":cod_copa", $objeto->getCodCopa(), PDO::PARAM_INT);
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
				$sql = "delete from titulo_historia where codigo = :codigo";

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