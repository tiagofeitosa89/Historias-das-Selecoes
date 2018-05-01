<?php
if(!isset($_GET['id'])){ echo '<script> window.location.href="index.php?link=10"; </script>'; exit;}

include_once("_controle/Selecao.php");
include_once("_controle/SelecaoDAO.php");

// Verifica se o registro está no banco de dados e preenche as informações
$id = $_GET["id"];

try{
  $sqlConsulta = "Select nome, bandeira, resumo from selecao where codigo = '{$id}'";

  $SelecaoDAO = new SelecaoDAO();

  $resultado = $SelecaoDAO->Selecionar($sqlConsulta);

  if ($resultado != "") {
    foreach ($resultado as $atributo) {
      $nome = $atributo[0];
      $imagem = $atributo[1]; 
      $resumo = $atributo[2];
    }
  }else{
	  	echo '<script> 
				swal("Aviso!", "Não há dados cadastrados com o código informado", "info", {closeOnClickOutside: false}
				).then(function(){
					window.location.href="index.php?link=10";
				});
			  </script>';
  }
} catch(PDOException $e){
  echo $e;
}

// Ação realizada pelo botão atualizar 
if (isset($_POST['atualizar'])) {
	if (requisicao()) {
		$nome = $_POST["nome"];
		$caminho_imagem = $imagem;
		$bandeira = $_FILES["bandeira"];
		$resumo = $_POST["resumo"];

		if(!empty($bandeira["name"])){
			$largura = 1000;
			$altura = 1000;
			$tamanho = 53430;

			$error = array();

			if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $bandeira["type"])){
				$error[1] = "Imagem inválida.";
			}	

			$dimensoes = getimagesize($bandeira["tmp_name"]);

			if($dimensoes[0] > $largura) {
				$error[2] = "A largura da imagem não deve ultrapassar ".$largura." pixels";
			}
	 
			// Verifica se a altura da imagem é maior que a altura permitida
			if($dimensoes[1] > $altura) {
				$error[3] = "Altura da imagem não deve ultrapassar ".$altura." pixels";
			}
			
			// Verifica se o tamanho da imagem é maior que o tamanho permitido
			if($bandeira["size"] > $tamanho) {
	   		 	$error[4] = "A imagem deve ter no máximo ".$tamanho." bytes";
			}

			if (count($error) == 0){

				preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $bandeira["name"], $ext);

				$nome_imagem = md5(uniqid(time())) . "." . $ext[1];

				$caminho_imagem = "_complementos/Selecoes/" . $nome_imagem;

				$imagem = $caminho_imagem;

				move_uploaded_file($bandeira["tmp_name"], $caminho_imagem);
			}else{
				echo '<div class="alert alert-danger">
	                  <button type="button" class="close" data-dismiss="alert">×</button>
	                  <strong>Imagem inválida!</strong><br>
	                  Verifique se ela está dentro dos padrões:<br>
	                  - Largura máxima 1000px<br>
	                  - Altura máxima 1000px<br>
	                  - Tamanho 53430 bytes<br>
	                  - Formatos: pjpeg|jpeg|png|gif|bmp			
	                  </div> ';			
			}
		}	
		
		$selecao = new Selecao($nome, $_SESSION['codigo'], $resumo);	
		$selecao->setBandeira($caminho_imagem);	
		$selecao->setCodigo($id);
		
		$selecaoDAO = new SelecaoDAO();
		
		if($selecaoDAO->Alterar($selecao)){
			echo '<script> 
					swal("Sucesso!", "Seleção atualizada com êxito", "success", {closeOnClickOutside: false}
					).then(function(){
						window.location.href="index.php?link=10";
					});
				  </script>';
		}else{
			echo '<script> 
					swal("Erro!", "A operação não pôde ser realizada!",  "error", {closeOnClickOutside: false}
					).then(function(){
						window.location.href="index.php?link=10";
					});
				  </script>';
		}	
	}
}
	



?>