<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php?link=1">Painel</a>
        </li>
        <li class="breadcrumb-item active">Tabela / Histórias / Editar História</li>
      </ol>

      <div class="card card-register mx-auto mt-5"> 
        <?php
            include_once("_controle/EditHistoria.php");    
        ?>
        <div class="card-header">Editar História</div>
        <div class="card-body">
          <form action="" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <div class="form-row">
              <label class="control-label required">Seleção<sup style="color:red">*</sup></label>
              <select id="selecao" name="selecao"  class="form-control input-lg"  placeholder="Seleção" tabindex="2" required>
              <?php if ($listaSelecoes != ""){ foreach ($listaSelecoes as $atributo) { ?>
                  <option value="<?php echo $atributo[0]; ?>" <?php if($cod_selecao == $atributo[0]){echo "selected"; }?>><?php echo $atributo[1] ?></option>
              <?php }} ?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <label class="control-label required">Copa<sup style="color:red">*</sup></label>
              <select id="copa" name="copa" class="form-control input-lg" placeholder="Copa" tabindex="2" required>
                  <?php if ($listaCopas != ""){ foreach ($listaCopas as $atributo) { ?>
                  <option value="<?php echo $atributo[0] ?>" <?php if($cod_copa == $atributo[0]){echo "selected"; }?>><?php echo $atributo[1] ?></option>
                  <?php }} ?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <label class="control-label required">Título<sup style="color:red">*</sup></label>
                <input id="titulo" name="titulo" class="form-control input-lg"  placeholder="Título" value="<?php echo $titulo; ?>" tabindex="2" maxlength="100" required>
                </input>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <label class="control-label required">Subtítulo<sup style="color:red">*</sup></label>
                <input id="subtitulo" name="subtitulo" class="form-control input-lg" placeholder="Subtítulo" value="<?php echo $subtitulo; ?>" tabindex="2" maxlength="100" required>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label class="control-label">Imagem</label>
                <input class="form-control" id="exampleInputName" type="file" name="imagem" placeholder="imagem">
              </div>
              <div class="col-md-6">
                <img src="<?php echo $foto; ?>" alt="Vazio" class="rounded mx-auto d-block" width="100"/>
              </div>
            </div>
          </div>  

          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <label class="control-label required">História<sup style="color: red">*</sup></label><br>
                <textarea id="summernote" name="descricao" value=""><p><?php echo $descricao ?></p></textarea>
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




          