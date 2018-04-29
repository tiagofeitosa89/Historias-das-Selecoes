<?php
	class conexao{
		private $conn = null;
		
		public static function getConexao(){
			try{
				if(empty($conn)){
					$conn = new PDO('mysql:host=localhost;dbname=dados_copa2018','root', '');
					$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				}
				return $conn; 
			} catch(PDOException $e){
				echo $e->getMessage();
			}
			return $conn;
		}
	}
?>