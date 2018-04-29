<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
 <?php
 include_once("_controle/SelecaoDAO.php");
 include_once("_controle/CopaDAO.php");

 $sqlSelecoes = "Select codigo, nome from selecao";
 $sqlCopas = "Select codigo, nome from copa";

 $SelecaoDAO = new SelecaoDAO();
 $listaSelecoes = $SelecaoDAO->Selecionar($sqlSelecoes);
 
 $CopaDAO = new CopaDAO();
 $listaCopas = $CopaDAO->Selecionar($sqlCopas);
 
 ?>

<script type="text/javascript">
  function selecionarTitulos(idselecao, idcopa){
    if (idselecao=="" && idcopa=="") {
      document.getElementById("txtHint").innerHTML="";
      return;
    } 
    if (window.XMLHttpRequest) {
      // code for IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp=new XMLHttpRequest();
    } else { // code for IE6, IE5
      xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function() {
      if (this.readyState==4 && this.status==200) {
        document.getElementById("titulo").innerHTML=this.responseText;
      }
    }
    xmlhttp.open("GET","_controle/autoComplete.php?selecao="+idselecao+"&copa="+idcopa ,true);
    xmlhttp.send(); 
  }    
</script>

      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php?link=1">Painel</a>
        </li>
        <li class="breadcrumb-item active">Tabela / Histórias / Registrar História</li>
      </ol>

      <div class="card card-register mx-auto mt-5"> 
        <?php
            include_once("_controle/CadHistoria.php");    
        ?>
        <div class="card-header">Registrar História</div>
        <div class="card-body">
          <form action="" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <div class="form-row">
              <label class="control-label required">Seleção<sup style="color:red">*</sup></label>
              <select id="selecao" name="selecao"  class="form-control input-lg"  placeholder="Seleção" tabindex="2" onchange="selecionarTitulos(this.value)" required>
                  <?php if ($listaSelecoes != ""){ foreach ($listaSelecoes as $atributo) { ?>
                  <option value="<?php echo $atributo[0] ?>"><?php echo $atributo[1] ?></option>

                  <?php }} ?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <label class="control-label required">Copa<sup style="color:red">*</sup></label>
              <select id="copa" name="copa" class="form-control input-lg"  placeholder="Copa" tabindex="2" onchange="selecionarTitulos(this.value)" required>
                  <?php if ($listaCopas != ""){ foreach ($listaCopas as $atributo) { ?>
                  <option value="<?php echo $atributo[0] ?>"><?php echo $atributo[1] ?></option>
                  <?php }} ?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <label class="control-label required">Título<sup style="color:red">*</sup></label>
                <input id="titulo" name="titulo" class="form-control input-lg"  placeholder="Título" tabindex="2" maxlength="100" required>
                </input>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <label class="control-label required">Subtítulo<sup style="color:red">*</sup></label>
                <input id="subtitulo" name="subtitulo" class="form-control input-lg" placeholder="Subtítulo" tabindex="2" maxlength="100" required>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <label class="control-label">Imagem</label>
                <input class="form-control" id="exampleInputName" type="file" name="imagem" placeholder="imagem">
              </div>
            </div>
          </div>  

          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <label class="control-label required">História<sup style="color: red">*</sup></label><br>
                <textarea id="summernote" name="descricao"><p>Escreva a história aqui...</p></textarea>
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




          