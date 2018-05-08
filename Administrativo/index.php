<?php
	session_start();	

  if(empty($_SESSION['codigo'])){
    header("Location: login.php");
  }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>FutHistórias - Admin</title>
   
  <!-- include summernote css/js -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.css" rel="stylesheet">
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.php?link=1">Administrativo</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="index.php?link=1">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Painel</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="index.php?link=2">
            <i class="fa fa-fw fa-area-chart"></i>
            <span class="nav-link-text">Torcedômetro</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Ferramentas</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="index.php?link=4">Configurações</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-file"></i>
            <span class="nav-link-text">Cadastros</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages">
            <li>
              <a href="index.php?link=10">Seleções</a>
            </li>
            <?php if ($_SESSION['usuario'] == "master" && $_SESSION['master'] == 'S') {
              echo '<li>
                      <a href="index.php?link=11">Usuários</a>
                    </li>';
            }else{
              echo '<li>
                      <a href="index.php?link=20">Perfil</a>
                    </li>';
            }
            ?>
            <li>
              <a href="index.php?link=12">Copas</a>
            </li>
            <li>
              <a href="index.php?link=13">Histórias</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
          <a class="nav-link" href="http://futistoria-br.umbler.net/index.php">
            <i class="fa fa-fw fa-link"></i>
            <span class="nav-link-text">Link</span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <form class="form-inline my-2 my-lg-0 mr-lg-2">
            <div class="input-group">
              <input class="form-control" type="text" placeholder="Pesquisar...">
              <span class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Sair</a>
        </li>
      </ul>
    </div>
  </nav>

<div class="content-wrapper">
	
	<div class="container-fluid">

		<?php

      function requisicao(){
        if (strtoupper($_SERVER['REQUEST_METHOD']) === 'POST') {
          $request = md5(implode($_POST));
          
          if (isset($_SESSION['last_request']) && $_SESSION['last_request'] == $request ) {
            return false;    
          }else{
            $_SESSION['last_request'] = $request;
            return true;     
          }
        }    
      }

			if (isset($_GET['link'])){
        $link = $_GET['link'];

				$pag[1] = "_visao/home.php";
        $pag[2] = "_visao/torcedometro.php";
        //$pag[3] = "_visao/tabelas.php";
				$pag[4] = "_visao/configuracoes.php";
        $pag[5] = "_visao/ViewCadSelecao.php";
        $pag[6] = "_visao/register.php";
        $pag[7] = "_visao/ViewCadCopa.php";
        $pag[8] = "_visao/ViewCadHistoria.php";
        //$pag[9] = "_controle/CadCopa.php";
        $pag[10] = "_visao/ViewTabelaSelecoes.php";
        $pag[11] = "_visao/ViewTabelaUsuarios.php";
        $pag[12] = "_visao/ViewTabelaCopas.php";
        $pag[13] = "_visao/ViewTabelaHistorias.php";
        $pag[14] = "_visao/ViewEditSelecao.php";
        $pag[15] = "_controle/DeleteSelecao.php";
        $pag[16] = "_visao/ViewEditCopa.php";
        $pag[17] = "_controle/DeleteCopa.php";
        $pag[18] = "_visao/ViewEditHistoria.php";
        $pag[19] = "_controle/DeleteHistoria.php";
        $pag[20] = "_visao/ViewEditUsuario.php";
        $pag[21] = "_controle/DeleteUsuario.php";

        if(file_exists($pag[$link])){
					include $pag[$link];
				}else{
					include "/_visao/home.php";
				}						
			}else{
				include "/_visao/home.php";	
			} 

		?>				
	</div>	

	  <!-- /.content-wrapper-->
	<footer class="sticky-footer">
	  <div class="container">
	    <div class="text-center">
	      <small>Copyright © Fut Histórias 2018</small>
	    </div>
	  </div>
	</footer>
	<!-- Scroll to Top Button-->
	<a class="scroll-to-top rounded" href="#page-top">
	  <i class="fa fa-angle-up"></i>
	</a>
	<!-- Logout Modal-->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Pronto para partir?</h5>
	        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">×</span>
	        </button>
	      </div>
	      <div class="modal-body">Selecione "Sair" abaixo se você estiver pronto para encerrar sua sessão atual.</div>
	      <div class="modal-footer">
	        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
	        <a class="btn btn-primary" href="_controle/EncerrarSessao.php">Sair</a>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- Bootstrap core JavaScript-->
	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- Core plugin JavaScript-->
	<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
	<!-- Page level plugin JavaScript-->
	<script src="vendor/chart.js/Chart.min.js"></script>
	<script src="vendor/datatables/jquery.dataTables.js"></script>
	<script src="vendor/datatables/dataTables.bootstrap4.js"></script>
	<!-- Custom scripts for all pages-->
	<script src="js/sb-admin.min.js"></script>
	<!-- Traduzindo tabela para o Português -->
  <script>
    $(document).ready(function() {
      $('#dataTable').DataTable( {
         "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.10.12/i18n/Portuguese-Brasil.json"
            }
        } );
      } );
    </script>
  <!-- Custom scripts for this page-->
	<script src="js/sb-admin-datatables.min.js"></script>
	<script src="js/sb-admin-charts.min.js"></script>

  <!--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.js"></script>

  <script>
      $('#summernote').summernote({
        tabsize: 2,
        height: 200
      });
  </script>

</div>
</body>

</html>
