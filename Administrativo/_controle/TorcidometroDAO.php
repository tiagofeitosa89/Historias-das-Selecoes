<?php
	include_once("conexao.php");
	include_once("PadraoDAO.php");	

	class TorcidometroDAO implements PadraoDAO{
		public function Inserir($objeto){
			try{
				$sql = "insert into torcidometro(cod_selecao, cod_copa, votos) values(:cod_selecao, :cod_copa, :votos)";

				$stmt = conexao::getConexao()->prepare($sql);
				$stmt->bindValue(":cod_selecao", $objeto->getCodSelecao(), PDO::PARAM_INT);
				$stmt->bindValue(":cod_copa", $objeto->getCodCopa(), PDO::PARAM_INT);
				$stmt->bindValue(":votos", $objeto->getVotos(), PDO::PARAM_INT);
				$stmt->execute();

				return true;

			} catch(DPOException $e){
				echo $e;
			}

			return false;
		}

		public function Alterar($objeto){
			try{
				$sql = "update torcidometro set votos = :votos where codigo = :codigo";

				$stmt = conexao::getConexao()->prepare($sql);
				$stmt->bindValue(":votos", $objeto->getVotos(), PDO::PARAM_INT);
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
				$sql = "delete from torcidometro where codigo = :codigo";

				$stmt = conexao::getConexao()->prepare($sql);
				$stmt->bindValue(":codigo", $objeto->getCodigo(), PDO::PARAM_INT);

				$stmt->execute();

				return true;

			} catch(DPOException $e){
				echo $e;
			}
			return false;
		}		
	} 	
?>