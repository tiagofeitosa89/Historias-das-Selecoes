<?php
include_once("_controle/CopaDAO.php");

$sqlCopas = "Select codigo, nome, ano from copa";
$CopaDAO = new CopaDAO();
$listaCopas = $CopaDAO->Selecionar($sqlCopas);

?>
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php?link=1">Painel</a>
        </li>
        <li class="breadcrumb-item active">Tabela / Copas</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Copas 
          <a href="index.php?link=7"><button class="btn btn-primary pull-right" style="margin-top:20px;" data-toggle="modal" data-target= "#item_add"><i class="fa fa-plus"></i> Adicionar Copa</button></a>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Código</th>
                  <th>Copa</th>
                  <th>Ano</th>
                  <th>Opções</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Código</th>
                  <th>Copa</th>
                  <th>Ano</th>
                  <th>Opções</th>
                </tr>
              </tfoot>
              <tbody>
              <?php if ($listaCopas != ""){ foreach ($listaCopas as $copa) { ?>
                <tr>
                  <td><?php echo $copa[0]; ?></td>
                  <td><?php echo $copa[1];?></td>
                  <td><?php echo $copa[2];?></td>
                  <td class="td-actions">
                    <a href="index.php?link=16&id=<?php echo $copa[0];?>" class="btn btn-success btn-sm"><i class="fa fa-pencil-square-o"> </i></a>
                    <a href="index.php?link=17&delete=<?php echo $copa[0];?>" class="btn btn-danger btn-sm" onClick="return confirm('Deseja realmente exluir a copa?')" ><i class="fa fa-times"> </i></a>
                  </td>
                </tr>
              <?php }} ?>  
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>