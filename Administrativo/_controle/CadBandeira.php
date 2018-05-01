<?php

	include_once("Selecao.php");
	include_once("SelecaoDAO.php");

	if (isset($_POST['registrar'])) {
		if (requisicao()) {
			$nome = $_POST["nome"];
			$bandeira = $_FILES["bandeira"];
			$resumo = strip_tags($_POST["resumo"]);

			if(!empty($nome) && !empty($bandeira["name"]) && !empty($resumo)){
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

					move_uploaded_file($bandeira["tmp_name"], $caminho_imagem);

					$selecao = new Selecao($nome, $_SESSION['codigo'], $resumo);	

					$selecao->setBandeira($caminho_imagem);

					$selecaoDAO = new SelecaoDAO();
					
					if($selecaoDAO->inserir($selecao)){
						echo '<script> 
								swal("Sucesso!", "Seleção cadastrada com êxito", "success", {closeOnClickOutside: false}
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
				}else{
					echo '<div class="alert alert-danger">
		                  <button type="button" class="close" data-dismiss="alert">×</button>
		                  <strong>Imagem inválida!<br>
		                  Verifique se ela está dentro dos padrões:<br>
		                  - Largura máxima 1000px<br>
		                  - Altura máxima 1000px<br>
		                  - Tamanho 53430 bytes<br>
		                  - Formatos: pjpeg|jpeg|png|gif|bmp			
		                  </strong>
		                  </div> ';			
				}
			}else{
				echo '<div class="alert alert-warning">
	                  <button type="button" class="close" data-dismiss="alert">×</button>
	                  <strong>Preencha as informações obrigatórias!</strong> 
	             	  </div> ';
			}
		}
	}
	
?>