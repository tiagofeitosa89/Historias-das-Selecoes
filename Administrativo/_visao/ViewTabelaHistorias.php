<?php
include_once("_controle/HistoriaDAO.php");

$sqlHistorias = "Select titulo_historia.codigo, titulo_historia.titulo,
        titulo_historia.cod_copa, 
        titulo_historia.cod_selecao, 
        selecao.nome,
        copa.nome,
        historia.subtitulo,
        historia.data_alteracao,
        historia.codigo
FROM titulo_historia
INNER JOIN historia ON titulo_historia.codigo = historia.cod_tithisto 
INNER JOIN selecao ON titulo_historia.cod_selecao = selecao.codigo 
INNER JOIN copa ON titulo_historia.cod_copa = copa.codigo";

$HistoriaDAO = new HistoriaDAO();
$listaHistorias = $HistoriaDAO->Selecionar($sqlHistorias);

?>
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php?link=1">Painel</a>
        </li>
        <li class="breadcrumb-item active">Tabela / Histórias</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Seleções 
          <a href="index.php?link=8"><button class="btn btn-primary pull-right" style="margin-top:20px;" data-toggle="modal" data-target= "#item_add"><i class="fa fa-plus"></i> Adicionar História</button></a>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Código</th>
                  <th>Título</th>
                  <th>Subtítulo</th>
                  <th>Seleção</th>
                  <th>Copa</th>
                  <th>Modificado em</th>
                  <th>Opções</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Código</th>
                  <th>Título</th>
                  <th>Subtítulo</th>
                  <th>Seleção</th>
                  <th>Copa</th>
                  <th>Modificado em</th>
                  <th>Opções</th>
                </tr>
              </tfoot>
              <tbody>
              <?php if ($listaHistorias != ""){ foreach ($listaHistorias as $historia) { ?>
                <tr>
                  <td><?php echo $historia[0]; ?></td>
                  <td><?php echo $historia[1]; ?></td>
                  <td><?php echo $historia[6]; ?></td>
                  <td><?php echo $historia[4]; ?></td>
                  <td><?php echo $historia[5]; ?></td>
                  <td><?php echo $historia[7]; ?></td>
                  <td class="td-actions">
                    <a href="index.php?link=18&id_titulo=<?php echo $historia[0];?>&id_subtitulo=<?php echo $historia[8];?>" class="btn btn-success btn-sm"><i class="fa fa-pencil-square-o"> </i></a>
                    <a href="index.php?link=19&id_titulo=<?php echo $historia[0];?>&id_subtitulo=<?php echo $historia[8];?>" class="btn btn-danger btn-sm" onClick="return confirm('Deseja realmente exluir a história?')" ><i class="fa fa-times"> </i></a>
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