<?php
    include_once("Administrativo/_controle/SelecaoDAO.php");
    include_once("Administrativo/_controle/Torcedometro.php");
    //include_once("Administrativo/_controle/RegistrarVoto.php");    
    try{
        $sqlSelecoes = 'Select selecao.codigo, selecao.nome, selecao.bandeira, coalesce(torcidometro.votos, 0)  from selecao left join torcidometro 
                        on torcidometro.cod_selecao = selecao.codigo and torcidometro.cod_copa = 43 order by torcidometro.votos desc';
        $selecaoDAO = new SelecaoDAO();
        $listaSelecoes = $selecaoDAO->Selecionar($sqlSelecoes);

        $torcedometro = new Torcedometro();
    
        //$total = $torcedometro->calcularTotalVotos();

    } catch(PDOException $e){
        echo $e;
    }
?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.js" rel="stylesheet">

    <title>FutHistórias::Torcedômetro</title>
    <link rel="shortcut icon" href="img/logo-icon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/carousel.css" rel="stylesheet" type="text/css">

    <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }

        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("myBtn").style.display = "block";
            } else {
                document.getElementById("myBtn").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0; // For Safari
            document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
        }

    </script>


</head>
<body>

<div class="container-fluid" id="app">

    <div class="row" id="linha-titulo-site">
        <div class="container">
            <div class="col-md-6 col-xs-6" id="titulo-site"><!--título site-->
                <img class="logo-site" src="img/logo.png" width="40%" height="40%">
            </div>
            <div class="topnav" id="myTopnav">
                <a href="index.php">Início</a>
                <a href="selecoes.php">Seleções</a>
                <a href="#">Torcedômetro</a>
                <a href="info.php">Extras e Curiosidades</a>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i>    </a>
            </div>
        </div>
    </div>
	
    <div class="row">
        <div class="container" id="corpoSite">
            <div class="row">
                <div id="fasegrupos" class="col-md-12">
                    <h2 class="titulo-pagina">TORCEDÔMETRO</h2>
                    <hr class="linha-titulo-pagina">
                    <p>Quem vencerá a Copa da Rússia de 2018? Dê seu palpite.</p>
                    
                    <?php foreach ($listaSelecoes as $selecao) { ?>
                        <div class="row card">
							<?php
                                // definindo porcentagem
                                $width1 = $torcedometro->calcularPorcentagem($selecao[3]);
                                $barra = 4;
                            ?>
							<div class="col-md-1 col-xs-3">
								<img src="<?php echo 'Administrativo/'.$selecao[2] ?>" alt="<?php echo $selecao[1] ?>">
							</div>
							<div class="col-md-10 col-xs-6">
								<p class="selecao-card"><?php echo $selecao[1].': '.$selecao[3].' votos'  ?> </p>
								<div class="progress">
									<div class="status barra<?php echo $barra; ?>" style="width:<?php echo $width1.'%'; ?>"><?php echo number_format($width1, 2, ',', '.').'%'; ?></div>
								</div>
							</div>
							<div class="col-md-1 col-xs-1">
								<a href="" class="btn btn-primary" name="votar" id="<?php echo $selecao[0]; ?>" onclick="Votar(this.id)">Votar</a> 
							</div>
						</div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

    <div class="row" id="rodape">
        <div class="container">
            <h3>FutHistórias</h3>
            <h5> Tudo que você quer saber sobre as seleções da copa de 2018</h5>
            <button onclick="topFunction()" id="myBtn" title="Voltar ao topo"><img src="img/seta_cima.png" width="30" height="30"></button>
        </div>
    </div> <!--Rodape-->


</div>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script type="text/javascript" language="javascript">
        
        function Votar(codigo) {
            var dados = codigo;

            $.ajax({
                type: 'POST',
                url: 'Administrativo/_controle/RegistrarVoto.php',
                data: {'id': dados},
                success: function(response) {
                    location.reload();
                }
            });
        }       
    
</script>
</body>

</html>