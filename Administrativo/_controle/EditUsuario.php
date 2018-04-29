<?php
  include_once("Usuario.php");
  include_once("UsuarioDAO.php");

  $usuarioDAO = new UsuarioDAO();

  if ($_SESSION['master'] != 'S' && !empty($_SESSION['codigo'])){
    $codigo = $_SESSION['codigo'];
    $usuario = $_SESSION['usuario'];
    $senhaAtual = $_SESSION['senha']; 
  }else if(isset($_GET['id']) && !empty($_GET['id'])){

    $codigo = $_GET['id'];

    try{
      $sql = "Select usuario, senha from usuario where codigo = '{$codigo}'";

      $resultado = $usuarioDAO->Selecionar($sql);

      if ($resultado != "" && count($resultado) > 0) {
          foreach ($resultado as $atributo) {
            $usuario = $atributo[0];
            $senhaAtual = $atributo[1];    
          }
      }else{  
        echo '<script> 
                swal("Aviso!", "Não há dados cadastrados com o código informado", "info", {closeOnClickOutside: false}
                ).then(function(){
                  window.location.href="index.php?link=11";
                });
              </script>';
      }
    } catch(PDOException $e){
      echo $e;
    }
  }else{
    echo '<script> window.location.href="login.php"; </script>';
    exit;
  }


if (isset($_POST['atualizar'])) {
  if (requisicao()) {
      $usuario = $_POST['usuario'];
      $senha = md5($_POST['novasenha']);
      
      if($_SESSION['master'] != 'S'){
        $senhaAnterior = md5($_POST['anterior']);  
      }else{
        $senhaAnterior = $_POST['anterior'];  
      }
    
      if ($senhaAnterior == $senhaAtual) {
        $CadUsuario = new Usuario($usuario, $senha);             
        $CadUsuario->setCodigo($codigo);

        if($_SESSION['master'] == 'S'){
          if ($usuarioDAO->Alterar($CadUsuario)) {
               echo '<script> 
                swal("Sucesso!", "Usuário atualizado com êxito", "success", {closeOnClickOutside: false}
                ).then(function(){
                  window.location.href="index.php?link=11";
                });
                </script>';
            }else{
              echo '<script> 
                  swal("Erro!", "A operação não pôde ser realizada!",  "error", {closeOnClickOutside: false}
                  ).then(function(){
                    window.location.href="index.php?link=11";
                  });
                  </script>';
            }
        } else {
          if ($usuarioDAO->Alterar($CadUsuario)) {
               echo '<script> 
                swal("Sucesso!", "Usuário atualizado com êxito", "success", {closeOnClickOutside: false}
                ).then(function(){
                  window.location.href="index.php?link=1";
                });
                </script>';
            }else{
              echo '<script> 
                  swal("Erro!", "A operação não pôde ser realizada!",  "error", {closeOnClickOutside: false}
                  ).then(function(){
                    window.location.href="index.php?link=1";
                  });
                  </script>';
            }
        }  
      }else{
        echo '<div class="alert alert-warning">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>Senha anterior não conferi!</strong> 
              </div> '; 
      }

    }  
}

?>