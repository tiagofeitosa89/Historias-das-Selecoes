<?php
include_once("_controle/SelecaoDAO.php");

$sqlSelecoes = "Select codigo, nome, bandeira from selecao";
$SelecaoDAO = new SelecaoDAO();
$listaSelecoes = $SelecaoDAO->Selecionar($sqlSelecoes);

?>
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php?link=1">Painel</a>
        </li>
        <li class="breadcrumb-item active">Tabela / Seleções</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Seleções 
          <a href="index.php?link=5"><button class="btn btn-primary pull-right" style="margin-top:20px;" data-toggle="modal" data-target= "#item_add"><i class="fa fa-plus"></i> Adicionar Seleção</button></a>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Código</th>
                  <th>Seleção</th>
                  <th>Bandeira</th>
                  <th>Opções</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Código</th>
                  <th>Seleção</th>
                  <th>Bandeira</th>
                  <th>Opções</th>
                </tr>
              </tfoot>
              <tbody>
              <?php if ($listaSelecoes != ""){ foreach ($listaSelecoes as $selecao) { ?>
                <tr>
                  <td><?php echo $selecao[0]; ?></td>
                  <td><?php echo $selecao[1];?></td>
                  <td><img src="<?php echo $selecao[2] ?>" width="80" height="60"></td>
                  <td class="td-actions">
                    <a href="index.php?link=14&id=<?php echo $selecao[0];?>" class="btn btn-success btn-sm"><i class="fa fa-pencil-square-o"> </i></a>
                    <a href="index.php?link=15&delete=<?php echo $selecao[0];?>" class="btn btn-danger btn-sm" onClick="return confirm('Deseja realmente exluir a seleção?')" ><i class="fa fa-times"> </i></a>
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