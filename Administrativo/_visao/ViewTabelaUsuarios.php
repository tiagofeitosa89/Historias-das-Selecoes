<?php
include_once("_controle/UsuarioDAO.php");

$sqlUsuarios = "Select codigo, usuario from usuario";
$UsuarioDAO = new UsuarioDAO();
$listaUsuarios = $UsuarioDAO->Selecionar($sqlUsuarios);

?>
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php?link=1">Painel</a>
        </li>
        <li class="breadcrumb-item active">Tabela / Usuários</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Usuários 
          <a href="index.php?link=6"><button class="btn btn-primary pull-right" style="margin-top:20px;" data-toggle="modal" data-target= "#item_add"><i class="fa fa-plus"></i> Adicionar Usuário</button></a>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Código</th>
                  <th>Usuário</th>
                  <th>Opções</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Código</th>
                  <th>Usuário</th>
                  <th>Opções</th>
                </tr>
              </tfoot>
              <tbody>
              <?php if ($listaUsuarios != ""){ foreach ($listaUsuarios as $usuarios) { ?>
                <tr>
                  <td><?php echo $usuarios[0]; ?></td>
                  <td><?php echo $usuarios[1];?></td>
                  <td class="td-actions">
                    <a href="index.php?link=20&id=<?php echo $usuarios[0];?>" class="btn btn-success btn-sm"><i class="fa fa-pencil-square-o"> </i></a>
                    <a href="index.php?link=21&delete=<?php echo $usuarios[0];?>" class="btn btn-danger btn-sm" onClick="return confirm('Deseja realmente exluir o usuário?')" ><i class="fa fa-times"> </i></a>
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