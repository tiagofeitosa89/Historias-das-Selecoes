<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script type="application/javascript">
  function ConfirmarSenha(confirmarSenha){
    var senha = document.getElementById("exampleInputPassword1").value;

    if (senha != confirmarSenha.value) {
      confirmarSenha.setCustomValidity('Senhas diferentes!');
    }else{
      confirmarSenha.setCustomValidity('');
    }
  }
</script>

   <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.php?link=1">Painel</a>
      </li>
      <li class="breadcrumb-item active">Tabela / Usuários / Registrar Usuário</li>
    </ol>
    <div class="card card-register mx-auto mt-5">
      <?php
          include_once("_controle/CadUsuario.php");  
      ?>
      <div class="card-header">Registrar Usuário</div>
      <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <div class="form-row">
                <label class="control-label required">Usuário<sup style="color:red">*</sup></label>
                <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" name="usuario" placeholder="Usuário" autocomplete="off" required>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label class="control-label required">Senha<sup style="color:red">*</sup></label>
                <input class="form-control" id="exampleInputPassword1" type="password" name="senha" placeholder="Senha" autocomplete="off" required>
              </div>
              <div class="col-md-6">
                <label class="control-label required">Confirmar senha<sup style="color:red">*</sup></label>
                <input class="form-control" id="exampleConfirmPassword" type="password" placeholder="Confirmar senha" oninput="ConfirmarSenha(this)" autocomplete="off" required>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <input type="submit" name="registrar" id="registrar" tabindex="4" class="form-control btn btn-register" value="Registrar">
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>

