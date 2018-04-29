<?php
 if (!isset($_GET['id_titulo'])) {
	echo '<script> window.location.href="index.php?link=13"; </script>';
	exit;
 }

 include_once("_controle/SelecaoDAO.php");
 include_once("_controle/CopaDAO.php");
 include_once("Historia.php");
 include_once("Titulo_Historia.php");
 include_once("_controle/HistoriaDAO.php");
 include_once("_controle/Titulo_HistoriaDAO.php");

 $id = $_GET['id_titulo'];
 $id_subTitulo = $_GET['id_subtitulo'];

 try{
	$sqlConsulta = "Select titulo_historia.cod_selecao, titulo_historia.cod_copa, titulo_historia.titulo, historia.subtitulo, historia.imagem, historia.descricao from titulo_historia inner join historia on historia.Cod_titHisto = titulo_historia.codigo where titulo_historia.Codigo = '{$id}' and historia.codigo = '{$id_subTitulo}'";
	
	$historiaDAO = new HistoriaDAO();

	$resultado = $historiaDAO->Selecionar($sqlConsulta);

	if ($resultado != "") {
		foreach ($resultado as $atributo) {
			$cod_selecao = $atributo[0];
			$cod_copa = $atributo[1];
			$titulo = $atributo[2];
			$subtitulo =  $atributo[3];
			$foto =  $atributo[4];
			$descricao =  $atributo[5];			 		
		}			 		
	}else{
		echo '<script> 
				swal("Aviso!", "Não há dados cadastrados com o código informado", "info", {closeOnClickOutside: false}
				).then(function(){
					window.location.href="index.php?link=12";
				});
			  </script>';
	} 	
} catch(PDOException $e){
	echo $e;
}

 $sqlSelecoes = "Select codigo, nome from selecao";
 $sqlCopas = "Select codigo, nome from copa";

 $SelecaoDAO = new SelecaoDAO();
 $listaSelecoes = $SelecaoDAO->Selecionar($sqlSelecoes);
 
 $CopaDAO = new CopaDAO();
 $listaCopas = $CopaDAO->Selecionar($sqlCopas);

 $caminho_imagem = $foto;

 if(isset($_POST["atualizar"])){
		if (requisicao()) {
			$titulo = $_POST["titulo"];
			$cod_usuario = $_SESSION["codigo"];
			$cod_selecao = $_POST["selecao"];
			$cod_copa = $_POST["copa"];
			$subtitulo = $_POST["subtitulo"];
			$imagem = $_FILES["imagem"];
			$descricao = $_POST["descricao"];

			if(!empty($titulo) && !empty($cod_usuario) && !empty($cod_selecao) && !empty($cod_copa) && !empty($subtitulo) && !empty($descricao)){

				$error = array();

				if(!empty($imagem["name"])){
					$largura = 1000;
					$altura = 1000;
					$tamanho = 93430;

					if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $imagem["type"])){
						$error[1] = "Imagem inválida.";
					}	

					$dimensoes = getimagesize($imagem["tmp_name"]);

					if($dimensoes[0] > $largura) {
						$error[2] = "A largura da imagem não deve ultrapassar ".$largura." pixels";
					}
			 
					// Verifica se a altura da imagem é maior que a altura permitida
					if($dimensoes[1] > $altura) {
						$error[3] = "Altura da imagem não deve ultrapassar ".$altura." pixels";
					}
					
					// Verifica se o tamanho da imagem é maior que o tamanho permitido
					if($imagem["size"] > $tamanho) {
			   		 	$error[4] = "A imagem deve ter no máximo ".$tamanho." bytes";
					}
				}

				if(count($error) == 0){

					if(!empty($imagem["name"])){
						preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $imagem["name"], $ext);

						$nome_imagem = md5(uniqid(time())) . "." . $ext[1];

						$caminho_imagem = "_complementos/Img_Historias/" . $nome_imagem;
					}

					$titulo_historia = new tituloHistoria();
					$titulo_historia->setTitulo($titulo);
					$titulo_historia->setCodUsuario($cod_usuario);
					$titulo_historia->setCodSelecao($cod_selecao);
					$titulo_historia->setCodCopa($cod_copa);
					$titulo_historia->setCodigo($id);

					$titulo_historiaDAO = new Titulo_HistoriaDAO();

					if ($titulo_historiaDAO->Alterar($titulo_historia)) {
						$historia = new Historia();
						$historia->setSubtitulo($subtitulo);
						$historia->setDescricao($descricao);
						$historia->setCodTitHisto($id);
						$historia->setImagem($caminho_imagem);
						$historia->setCodigo($id_subTitulo);
						
						$historiaDAO = new HistoriaDAO();

						if($historiaDAO->Alterar($historia)){
							if(isset($caminho_imagem)){
								move_uploaded_file($imagem["tmp_name"], $caminho_imagem);		
							}
							
							echo '<script> 
									swal("Sucesso!", "História atualizada com êxito", "success", {closeOnClickOutside: false}
									).then(function(){
										window.location.href="index.php?link=13";
									});
								  </script>';
						}else{
							echo '<script> 
									swal("Erro!", "A operação não pôde ser realizada!",  "error", {closeOnClickOutside: false}
									).then(function(){
										window.location.href="index.php?link=13";
									});
								  </script>';	
						}
					}else{
						echo '<script> 
									swal("Erro!", "A operação não pôde ser realizada!",  "error", {closeOnClickOutside: false}
									).then(function(){
										window.location.href="index.php?link=13";
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
		                  - Tamanho 13430 bytes<br>
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