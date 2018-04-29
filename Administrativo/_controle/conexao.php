<?php
	class conexao{
		private $conn = null;
		
		public static function getConexao(){
			try{
				if(empty($conn)){
					$conn = new PDO('mysql:host=mysql762.umbler.com;dbname=histo_selecoes','masteradm', 'masteradm2904');
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