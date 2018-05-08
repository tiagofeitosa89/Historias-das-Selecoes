<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.php?link=1">Painel</a>
          </li>
          <li class="breadcrumb-item active">Tabela / Seleções / Editar Seleção</li>
        </ol>

        <div class="card card-register mx-auto mt-5"> 
        <?php
            include_once("_controle/EditBandeira.php");
        ?> 
        <div class="card-header">Editar Seleção</div>
        <div class="card-body">
          <form action="" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <div class="form-row">
                <label class="control-label required">Seleção<sup style="color:red">*</sup></label>
                <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" name="nome" value="<?php echo $nome; ?>" placeholder="Seleção" required>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-06">
                <label class="control-label required">Bandeira<sup style="color:red">*</sup></label>
                <input class="form-control" id="exampleInputName" type="file" name="bandeira" placeholder="Bandeira"> 
              </div>
              <div class="col-md-06">
                <img src="<?php echo $imagem; ?>" alt="Vazio" class="rounded mx-auto d-block" width="100"/>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-md-12">
                <label class="control-label required">Resumo<sup style="color: red">*</sup></label><br>
                <textarea id="summernote" name="resumo"><?php echo $resumo ?></p></textarea>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <input type="submit" name="atualizar" id="atualizar" tabindex="4" class="form-control btn btn-register" value="Atualizar">
              </div>
            </div>
          </div>
        </form>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>