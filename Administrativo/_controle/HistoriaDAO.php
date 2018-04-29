<?php
	include_once("conexao.php");
	include_once("PadraoDAO.php");	

	class HistoriaDAO implements PadraoDAO{
		public function Inserir($objeto){
			try{
				$sql = "insert into historia(subtitulo, descricao, imagem, cod_TitHisto) values(:subtitulo, :descricao, :imagem, :cod_TitHisto)";

				$stmt = conexao::getConexao()->prepare($sql);
				$stmt->bindValue(":subtitulo", $objeto->getSubtitulo(), PDO::PARAM_STR);
				$stmt->bindValue(":descricao", $objeto->getDescricao(), PDO::PARAM_STR);
				$stmt->bindValue(":imagem", $objeto->getImagem(), PDO::PARAM_STR);
				$stmt->bindValue(":cod_TitHisto", $objeto->getCodTitHisto(), PDO::PARAM_INT);
				$stmt->execute();

				return true;

			} catch(DPOException $e){
				echo $e;
			}

			return false;
		}

		public function Alterar($objeto){
			try{
				$sql = "update historia set subtitulo = :subtitulo, descricao = :descricao, imagem = :imagem, cod_TitHisto = :cod_TitHisto where codigo = :codigo";

				$stmt = conexao::getConexao()->prepare($sql);
				$stmt->bindValue(":subtitulo", $objeto->getSubtitulo(), PDO::PARAM_STR);
				$stmt->bindValue(":descricao", $objeto->getDescricao(), PDO::PARAM_STR);
				$stmt->bindValue(":imagem", $objeto->getImagem(), PDO::PARAM_STR);
				$stmt->bindValue(":cod_TitHisto", $objeto->getCodTitHisto(), PDO::PARAM_INT);
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
				$sql = "delete from historia where codigo = :codigo";

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