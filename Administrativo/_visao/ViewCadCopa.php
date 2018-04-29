<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php?link=1">Painel</a>
        </li>
        <li class="breadcrumb-item active">Tabela / Copas / Registrar Copa</li>
      </ol>
      <div class="card card-register mx-auto mt-5">
      <?php
          include_once("_controle/CadCopa.php");
      ?>
      <div class="card-header">Registrar Copa</div>
      <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <div class="form-row">
                <label  class="control-label required">Copa<sup style="color:red">*</sup></label>
                <input class="form-control input-lg" id="exampleInputName" type="text" aria-describedby="nameHelp" name="copa" placeholder="Copa" maxlength="60" required>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label  class="control-label required">Ano<sup style="color:red">*</sup></label>
                <input class="form-control input-lg" id="exampleInputAno" type="text" name="ano" placeholder="Ano" required>
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
