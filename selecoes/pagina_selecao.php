<?php 
    if (!isset($_GET['id']) || empty($_GET['id'])) {
        echo '<script> window.location.href="selecoes.php"; </script>';
    exit;
    }

    include_once("../Administrativo/_controle/SelecaoDAO.php");
    include_once("../Administrativo/_controle/HistoriaDAO.php");

    $id = $_GET['id'];

    try{
        $sqlSelecao = "Select codigo, nome, bandeira, resumo from selecao where selecao.codigo = '{$id}'";

        $sqlHistorias = "Select historia.subtitulo, historia.descricao from titulo_historia inner join historia on historia.cod_TitHisto = titulo_historia.codigo inner join copa on copa.codigo = titulo_historia.cod_copa where titulo_historia.cod_selecao = '{$id}'";

        $selecaoDao = new SelecaoDAO();
        $resultadoSelecao = $selecaoDao->Selecionar($sqlSelecao);
        
        if (($resultadoSelecao != "") && (count($resultadoSelecao) == 1)) {
           foreach ($resultadoSelecao as $atributo) {
                $codigo = $atributo[0];
                $nome = $atributo[1];
                $bandeira = $atributo[2];
                $resumo = $atributo[3];
           }
        }

        $historiaDao = new HistoriaDAO();
        $resultadoHistorias = $historiaDao->Selecionar($sqlHistorias);

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
    <title>Futistórias</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="..\css/selecao.css" rel="stylesheet" type="text/css">
    <link href="..\css/style.css" rel="stylesheet" type="text/css">


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
                <img class="logo-site" src="../img/logo.png" width="30%" height="30%">
            </div>
            <div class="topnav" id="myTopnav">
                <a href="../index.php">Início</a>
                <a href="../selecoes.php">Seleções</a>
                <a href="../torcedometro.php">Torcedômetro</a>
                <a href="../info.php">Extras e Curiosidades</a>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">Menu</a>
            </div>
        </div>
    </div>

    <br>

    <div class="container">
        <div class="fase-grupos-cabecalho">
            <div class="grupos-selecoes">
                <div class="grupo col-md-1 col-xs-6">
                    <div class="nome-grupo">GRUPO A</div>
                    <div class="equipes-grupo">
                        <div class="equipe">
                            <a target="_top" href="pagina_selecao.php?id=41">
                                    <span class="bandeira">
                                        <img src="//ep01.epimg.net/iconos/v1.x/v1.0/banderas/svg/ksa.svg">
                                    </span>
                                <span class="nome-selecao">Arábia Saudita</span>
                            </a>
                        </div>
                        <div class="equipe">
                            <a target="_top" href="pagina_selecao.php?id=20">
                                    <span class="bandeira">
                                        <img src="//ep01.epimg.net/iconos/v1.x/v1.0/banderas/svg/egy.svg">
                                    </span>
                                <span class="nome-selecao">Egito</span>
                            </a>
                        </div>
                        <div class="equipe">
                            <a target="_top" href="pagina_selecao.php?id=34">
                                    <span class="bandeira">
                                        <img src="//ep01.epimg.net/iconos/v1.x/v1.0/banderas/svg/rus.svg">
                                    </span>
                                <span class="nome-selecao">Rússia</span>
                            </a>
                        </div>
                        <div class="equipe">
                            <a target="_top" href="pagina_selecao.php?id=40">
                                    <span class="bandeira">
                                        <img src="//ep01.epimg.net/iconos/v1.x/v1.0/banderas/svg/uru.svg">
                                    </span>
                                <span class="nome-selecao">Uruguai</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="grupo col-md-1 col-xs-6">
                    <div class="nome-grupo">GRUPO B</div>
                    <div class="equipes-grupo">
                        <div class="equipe">
                            <a target="_top" href="pagina_selecao.php?id=33">
                                    <span class="bandeira">
                                        <img src="//ep01.epimg.net/iconos/v1.x/v1.0/banderas/svg/por.svg">
                                    </span>
                                <span class="nome-selecao">Portugal</span>
                            </a>
                        </div>
                        <div class="equipe">
                            <a target="_top" href="pagina_selecao.php?id=21">
                                    <span class="bandeira">
                                        <img src="//ep01.epimg.net/iconos/v1.x/v1.0/banderas/svg/esp.svg">
                                    </span>
                                <span class="nome-selecao">Espanha</span>
                            </a>
                        </div>
                        <div class="equipe">
                            <a target="_top" href="pagina_selecao.php?id=27">
                                    <span class="bandeira">
                                        <img src="//ep01.epimg.net/iconos/v1.x/v1.0/banderas/svg/mar.svg">
                                    </span>
                                <span class="nome-selecao">Marrocos</span>
                            </a>
                        </div>
                        <div class="equipe">
                            <a target="_top" href="pagina_selecao.php?id=24">
                                    <span class="bandeira">
                                        <img src="//ep01.epimg.net/iconos/v1.x/v1.0/banderas/svg/iri.svg">
                                    </span>
                                <span class="nome-selecao">Irã</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="grupo col-md-1 col-xs-6">
                    <div class="nome-grupo">GRUPO C</div>
                    <div class="equipes-grupo">
                        <div class="equipe">
                            <a target="_top" href="pagina_selecao.php?id=22">
                                    <span class="bandeira">
                                        <img src="//ep01.epimg.net/iconos/v1.x/v1.0/banderas/svg/fra.svg">
                                    </span>
                                <span class="nome-selecao">França</span>
                            </a>
                        </div>
                        <div class="equipe">
                            <a target="_top" href="pagina_selecao.php?id=14">
                                    <span class="bandeira">
                                        <img src="//ep01.epimg.net/iconos/v1.x/v1.0/banderas/svg/aus.svg">
                                    </span>
                                <span class="nome-selecao">Austrália</span>
                            </a>
                        </div>
                        <div class="equipe">
                            <a target="_top" href="pagina_selecao.php?id=31">
                                    <span class="bandeira">
                                        <img src="//ep01.epimg.net/iconos/v1.x/v1.0/banderas/svg/per.svg">
                                    </span>
                                <span class="nome-selecao">Peru</span>
                            </a>
                        </div>
                        <div class="equipe">
                            <a target="_top" href="pagina_selecao.php?id=19">
                                    <span class="bandeira">
                                        <img src="//ep01.epimg.net/iconos/v1.x/v1.0/banderas/svg/den.svg">
                                    </span>
                                <span class="nome-selecao">Dinamarca</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="grupo col-md-1 col-xs-6">
                    <div class="nome-grupo">GRUPO D</div>
                    <div class="equipes-grupo">
                        <div class="equipe">
                            <a target="_top" href="pagina_selecao.php?id=10">
                                    <span class="bandeira">
                                        <img src="//ep01.epimg.net/iconos/v1.x/v1.0/banderas/svg/arg.svg">
                                    </span>
                                <span class="nome-selecao">Argentina</span>
                            </a>
                        </div>
                        <div class="equipe">
                            <a target="_top" href="pagina_selecao.php?id=25">
                                    <span class="bandeira">
                                        <img src="//ep01.epimg.net/iconos/v1.x/v1.0/banderas/svg/isl.svg">
                                    </span>
                                <span class="nome-selecao">Islândia</span>
                            </a>
                        </div>
                        <div class="equipe">
                            <a target="_top" href="pagina_selecao.php?id=18">
                                    <span class="bandeira">
                                        <img src="//ep01.epimg.net/iconos/v1.x/v1.0/banderas/svg/cro.svg">
                                    </span>
                                <span class="nome-selecao">Croácia</span>
                            </a>
                        </div>
                        <div class="equipe">
                            <a target="_top" href="pagina_selecao.php?id=29">
                                    <span class="bandeira">
                                        <img src="//ep01.epimg.net/iconos/v1.x/v1.0/banderas/svg/ngr.svg">
                                    </span>
                                <span class="nome-selecao">Nigéria</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="grupo col-md-1 col-xs-6">
                    <div class="nome-grupo">GRUPO E</div>
                    <div class="equipes-grupo">
                        <div class="equipe">
                            <a target="_top" href="pagina_selecao.php?id=13">
                                    <span class="bandeira">
                                        <img src="//ep01.epimg.net/iconos/v1.x/v1.0/banderas/svg/bra.svg">
                                    </span>
                                <span class="nome-selecao">Brasil</span>
                            </a>
                        </div>
                        <div class="equipe">
                            <a target="_top" href="pagina_selecao.php?id=38">
                                    <span class="bandeira">
                                        <img src="//ep01.epimg.net/iconos/v1.x/v1.0/banderas/svg/sui.svg">
                                    </span>
                                <span class="nome-selecao">Suíça</span>
                            </a>
                        </div>
                        <div class="equipe">
                            <a target="_top" href="pagina_selecao.php?id=17">
                                    <span class="bandeira">
                                        <img src="//ep01.epimg.net/iconos/v1.x/v1.0/banderas/svg/crc.svg">
                                    </span>
                                <span class="nome-selecao">Costa Rica</span>
                            </a>
                        </div>
                        <div class="equipe">
                            <a target="_top" href="pagina_selecao.php?id=36">
                                    <span class="bandeira">
                                        <img src="//ep01.epimg.net/iconos/v1.x/v1.0/banderas/svg/srb.svg">
                                    </span>
                                <span class="nome-selecao">Sérvia</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="grupo col-md-1 col-xs-6">
                    <div class="nome-grupo">GRUPO F</div>
                    <div class="equipes-grupo">
                        <div class="equipe">
                            <a target="_top" href="pagina_selecao.php?id=11">
                                    <span class="bandeira">
                                        <img src="//ep01.epimg.net/iconos/v1.x/v1.0/banderas/svg/ger.svg">
                                    </span>
                                <span class="nome-selecao">Alemanha</span>
                            </a>
                        </div>
                        <div class="equipe">
                            <a target="_top" href="pagina_selecao.php?id=28">
                                    <span class="bandeira">
                                        <img src="//ep01.epimg.net/iconos/v1.x/v1.0/banderas/svg/mex.svg">
                                    </span>
                                <span class="nome-selecao">México</span>
                            </a>
                        </div>
                        <div class="equipe">
                            <a target="_top" href="pagina_selecao.php?id=37">
                                    <span class="bandeira">
                                        <img src="//ep01.epimg.net/iconos/v1.x/v1.0/banderas/svg/swe.svg">
                                    </span>
                                <span class="nome-selecao">Suécia</span>
                            </a>
                        </div>
                        <div class="equipe">
                            <a target="_top" href="pagina_selecao.php?id=16">
                                    <span class="bandeira">
                                        <img src="//ep01.epimg.net/iconos/v1.x/v1.0/banderas/svg/kor.svg">
                                    </span>
                                <span class="nome-selecao">Coréia do Sul</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="grupo col-md-1 col-xs-6">
                    <div class="nome-grupo">GRUPO G</div>
                    <div class="equipes-grupo">
                        <div class="equipe">
                            <a target="_top" href="pagina_selecao.php?id=12">
                                    <span class="bandeira">
                                        <img src="//ep01.epimg.net/iconos/v1.x/v1.0/banderas/svg/bel.svg">
                                    </span>
                                <span class="nome-selecao">Bélgica</span>
                            </a>
                        </div>
                        <div class="equipe">
                            <a target="_top" href="pagina_selecao.php?id=30">
                                    <span class="bandeira">
                                        <img src="//ep01.epimg.net/iconos/v1.x/v1.0/banderas/svg/pan.svg">
                                    </span>
                                <span class="nome-selecao">Panamá</span>
                            </a>
                        </div>
                        <div class="equipe">
                            <a target="_top" href="pagina_selecao.php?id=39">
                                    <span class="bandeira">
                                        <img src="//ep01.epimg.net/iconos/v1.x/v1.0/banderas/svg/tun.svg">
                                    </span>
                                <span class="nome-selecao">Tunísia</span>
                            </a>
                        </div>
                        <div class="equipe">
                            <a target="_top" href="pagina_selecao.php?id=23">
                                    <span class="bandeira">
                                        <img src="//ep01.epimg.net/iconos/v1.x/v1.0/banderas/svg/ing.svg">
                                    </span>
                                <span class="nome-selecao">Inglaterra</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="grupo col-md-1 col-xs-6">
                    <div class="nome-grupo">GRUPO H</div>
                    <div class="equipes-grupo">
                        <div class="equipe">
                            <a target="_top" href="pagina_selecao.php?id=32">
                                    <span class="bandeira">
                                        <img src="//ep01.epimg.net/iconos/v1.x/v1.0/banderas/svg/pol.svg">
                                    </span>
                                <span class="nome-selecao">Polônia</span>
                            </a>
                        </div>
                        <div class="equipe">
                            <a target="_top" href="pagina_selecao.php?id=35">
                                    <span class="bandeira">
                                        <img src="//ep01.epimg.net/iconos/v1.x/v1.0/banderas/svg/sen.svg">
                                    </span>
                                <span class="nome-selecao">Senegal</span>
                            </a>
                        </div>
                        <div class="equipe">
                            <a target="_top" href="pagina_selecao.php?id=15">
                                    <span class="bandeira">
                                        <img src="//ep01.epimg.net/iconos/v1.x/v1.0/banderas/svg/col.svg">
                                    </span>
                                <span class="nome-selecao">Colômbia</span>
                            </a>
                        </div>
                        <div class="equipe">
                            <a target="_top" href="pagina_selecao.php?id=26">
                                    <span class="bandeira">
                                        <img src="//ep01.epimg.net/iconos/v1.x/v1.0/banderas/svg/jpn.svg">
                                    </span>
                                <span class="nome-selecao">Japão</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!---grupos cabecalho-->
        <br>
        <div class="row">
                <img class="img-responsive col-md-2" style="width: 320px; height: 200px;box-shadow: 0px 0px 10px 1px #4e555b; padding:0; margin-left: 15px" src="<?php echo '../Administrativo/'.$bandeira; ?>">  <!--width="150px" height="120px"-->
                <div class="titulo-selecao col-md-8">
                    <h1><?php echo $nome; ?></h1>
                    <hr>
                    <h5>
                        <a class="col-md-3 col-xs-12" href="#dados-gerais">Dados gerais</a>
                        <a class="col-md-3 col-xs-12" href="#">Elenco atual</a>
                        <a class="col-md-3 col-xs-12" href="#elenco-copas">Elencos em copas</a>
                        <a class="col-md-3 col-xs-12" href="#torcedometro">Torcedômetro</a>
                    </h5>
                </div> <!-- nome seleção + ancoras-->
        </div><!--cabecalho pagina selecao-->
        <br>
        <div class="row">
            <div class="col-md-7">
                <?php echo $resumo ?>
            </div> <!--texto seleção-->
            <div id="imagem-selecao" class="img-responsive col-md-5 col-xs-12">
                <div id="carousel" class="carousel slide">
                    <div class="carousel-inner" role="listbox">
            <?php if ($nome == "Arábia Saudita") { ?>
                    <div class="item active">
                        <img src="../img/selecoes/arabia-saudita/arabia-1.jpg" width="450" height="250">
                    </div>

                    <div class="item">
                        <img src="../img/selecoes/arabia-saudita/arabia-2.jpg" width="450" height="250"">
                    </div>

                    <div class="item">
                        <img src="../img/selecoes/arabia-saudita/arabia-3.jpg" width="450" height="250">
                    </div>
            <?php } elseif ($nome == "Egito") { ?>
                    <div class="item active">
                        <img src="../img/selecoes/egito/1 - elenco de 1934.jpg" width="450" height="250">
                    </div>

                    <div class="item">
                        <img src="../img/selecoes/egito/2 - elenco de 1990.jpg" width="450" height="250"">
                    </div>

                    <div class="item">
                        <img src="../img/selecoes/egito/3- Elenco das eliminatória do ultimo jogo da copa 2018.jpg" width="450" height="250">
                    </div>                    
            <?php } elseif ($nome == "Rússia") { ?>
                    <div class="item active">
                        <img src="../img/selecoes/russia/1 - elenco da russia.jpg" width="450" height="250">
                    </div>

                    <div class="item">
                        <img src="../img/selecoes/russia/2- euro 2016.jpg" width="450" height="250"">
                    </div>

                    <div class="item">
                        <img src="../img/selecoes/russia/3 - golovin.jpg" width="450" height="250">
                    </div>
            <?php } elseif ($nome == "Uruguai") { ?>
                     <div class="item active">
                        <img src="../img/selecoes/uruguai/1 - Elenco da copa de 1930.jpg" width="450" height="250">
                    </div>

                    <div class="item">
                        <img src="../img/selecoes/uruguai/2 - elenco 2018.jpg" width="450" height="250"">
                    </div>

                    <div class="item">
                        <img src="../img/selecoes/uruguai/3 - elenco atual.jpg" width="450" height="250">
                    </div>   
            <?php } elseif ($nome == "Espanha") { ?>
                    <div class="item active">
                        <img src="../img/selecoes/espanha/1 - elimanatória da copa da russia 2018.jpg" width="450" height="250">
                    </div>

                    <div class="item">
                        <img src="../img/selecoes/espanha/2- elenco 2018.jpg" width="450" height="250"">
                    </div>

                    <div class="item">
                        <img src="../img/selecoes/espanha/3- campea da copa de 2010.jpg" width="450" height="250">
                    </div>
            <?php } elseif ($nome == "Irã") { ?>
                    <div class="item active">
                        <img src="../img/selecoes/ira/1 - ira x EUA - primeira vitoria em copa do mundo.jpg" width="450" height="250">
                    </div>

                    <div class="item">
                        <img src="../img/selecoes/ira/2 - copa da asia 1968.jpg" width="450" height="250"">
                    </div>

                    <div class="item">
                        <img src="../img/selecoes/ira/3 - elenco 2018.jpg" width="450" height="250">
                    </div>
            <?php } elseif ($nome == "Marrocos") { ?>
                    <div class="item active">
                        <img src="../img/selecoes/marrocos/1 - campea africana de 1976.jpg" width="450" height="250">
                    </div>

                    <div class="item">
                        <img src="../img/selecoes/marrocos/2- elenco da copa de 2018.jpg" width="450" height="250"">
                    </div>

                    <div class="item">
                        <img src="../img/selecoes/marrocos/3 - eliminatórias da copa da russia.jpg" width="450" height="250">
                    </div>
            <?php } elseif ($nome == "Portugal") { ?>
                   <div class="item active">
                        <img src="../img/selecoes/portugal/1 - elenco da copa de 1966.jpg" width="450" height="250">
                    </div>

                    <div class="item">
                        <img src="../img/selecoes/portugal/2 - copa do mundo de 2006.jpg" width="450" height="250"">
                    </div>

                    <div class="item">
                        <img src="../img/selecoes/portugal/3 - jogadores eleitos melhores do mundo.jpg" width="450" height="250">
                    </div>  
            <?php } elseif ($nome == "Austrália") { ?>
                        <div class="item active">
                            <img src="../img/selecoes/australia/01-australiaxchile-copa 1974.jpg" width="450" height="250">
                        </div>

                        <div class="item">
                            <img src="../img/selecoes/australia/2 - eleminatoria da copa 2018.jpg" width="450" height="250"">
                        </div>

                        <div class="item">
                            <img src="../img/selecoes/australia/3 - goleada da australia x somoa 32x0.jpg" width="450" height="250">
                        </div>
            <?php } elseif ($nome == "Dinamarca") { ?>
                        <div class="item active">
                            <img src="../img/selecoes/dinamarca/01 - copa de 1986.jpg" width="450" height="250">
                        </div>

                        <div class="item">
                            <img src="../img/selecoes/dinamarca/02 - eurocopa 1992.jpg" width="450" height="250"">
                        </div>

                        <div class="item">
                            <img src="../img/selecoes/dinamarca/03 - elenco da copa de 2018.jpg" width="450" height="250">
                        </div>
            <?php } elseif ($nome == "França") { ?>
                        <div class="item active">
                            <img src="../img/selecoes/franca/01 - campea do mundo 1998.jpg" width="450" height="250">
                        </div>

                        <div class="item">
                            <img src="../img/selecoes/franca/02- brasilxfranca 1998 - final da copa.jpg" width="450" height="250"">
                        </div>

                        <div class="item">
                            <img src="../img/selecoes/franca/03 - elenco de 2018.jpg" width="450" height="250">
                        </div>
            <?php } elseif ($nome == "Peru") { ?>
                        <div class="item active">
                            <img src="../img/selecoes/peru/01 - Elenco das eleminatporias para copa 2018.jpg" width="450" height="250">
                        </div>

                        <div class="item">
                            <img src="../img/selecoes/peru/2 - copa america 1939.jpg" width="450" height="250"">
                        </div>

                        <div class="item">
                            <img src="../img/selecoes/peru/3 - copa america de 1975.jpg" width="450" height="250">
                        </div>
            <?php } elseif ($nome == "Argentina") { ?>
                        <div class="item active">
                            <img src="../img/selecoes/argentina/Slides/1-maradona-gol-de-mao-copa1986.jpeg" width="450" height="250">
                        </div>

                        <div class="item">
                            <img src="../img/selecoes/argentina/Slides/elenco-de-2018.jpg" width="450" height="250">
                        </div>

                        <div class="item">
                            <img src="../img/selecoes/argentina/Slides/3-leonel-messi-maior-artilheiro.jpg" width="450" height="250">
                        </div>
            <?php } elseif ($nome == "Croácia") { ?>
                        <div class="item active">
                            <img src="../img/selecoes/islandia/slides/1-maior-artilheiro.jpeg" width="450" height="250">
                        </div>

                        <div class="item">
                            <img src="../img/selecoes/islandia/slides/01-maior-artilheiro-Eidur Gudjohnsen.jpg" width="450" height="250">
                        </div>

                        <div class="item">
                            <img src="../img/selecoes/islandia/slides/01-maior-artilheiro-Eidur Gudjohnsen.jpg" width="450" height="250">
                        </div>
            <?php } elseif ($nome == "Islândia") { ?>
                        <div class="item active">
                            <img src="../img/selecoes/islandia/slides/01-maior-artilheiro-Eidur Gudjohnsen.jpg" width="450" height="250">
                        </div>

                        <div class="item">
                            <img src="../img/selecoes/islandia/slides/02-classificacao-para-copa-2018.jpg" width="450" height="250">
                        </div>

                        <div class="item">
                            <img src="../img/selecoes/islandia/slides/3 -jogador-com-mais-partidas.jpeg" width="450" height="250">
                        </div>
            <?php } elseif ($nome == "Nigéria") { ?>
                        <div class="item active">
                            <img src="../img/selecoes/arabia-saudita/arabia-1.jpg" width="450" height="250">
                        </div>

                        <div class="item">
                            <img src="../img/selecoes/arabia-saudita/arabia-2.jpg" width="450" height="250"">
                        </div>

                        <div class="item">
                            <img src="../img/selecoes/arabia-saudita/arabia-3.jpg" width="450" height="250">
                        </div>
            <?php } elseif ($nome == "Costa Rica") { ?>
                        <div class="item active">
                            <img src="../img/selecoes/arabia-saudita/arabia-1.jpg" width="450" height="250">
                        </div>

                        <div class="item">
                            <img src="../img/selecoes/arabia-saudita/arabia-2.jpg" width="450" height="250"">
                        </div>

                        <div class="item">
                            <img src="../img/selecoes/arabia-saudita/arabia-3.jpg" width="450" height="250">
                        </div>
            <?php } elseif ($nome == "Brasil") { ?>
                        <div class="item active">
                            <img src="../img/selecoes/arabia-saudita/arabia-1.jpg" width="450" height="250">
                        </div>

                        <div class="item">
                            <img src="../img/selecoes/arabia-saudita/arabia-2.jpg" width="450" height="250"">
                        </div>

                        <div class="item">
                            <img src="../img/selecoes/arabia-saudita/arabia-3.jpg" width="450" height="250">
                        </div>
            <?php } elseif ($nome == "Sérvia") { ?>
                        <div class="item active">
                            <img src="../img/selecoes/arabia-saudita/arabia-1.jpg" width="450" height="250">
                        </div>

                        <div class="item">
                            <img src="../img/selecoes/arabia-saudita/arabia-2.jpg" width="450" height="250"">
                        </div>

                        <div class="item">
                            <img src="../img/selecoes/arabia-saudita/arabia-3.jpg" width="450" height="250">
                        </div>
            <?php } elseif ($nome == "Suíça") { ?>
                        <div class="item active">
                            <img src="../img/selecoes/arabia-saudita/arabia-1.jpg" width="450" height="250">
                        </div>

                        <div class="item">
                            <img src="../img/selecoes/arabia-saudita/arabia-2.jpg" width="450" height="250"">
                        </div>

                        <div class="item">
                            <img src="../img/selecoes/arabia-saudita/arabia-3.jpg" width="450" height="250">
                        </div>
            <?php } elseif ($nome == "Alemanha") { ?>
                        <div class="item active">
                            <img src="../img/selecoes/arabia-saudita/arabia-1.jpg" width="450" height="250">
                        </div>

                        <div class="item">
                            <img src="../img/selecoes/arabia-saudita/arabia-2.jpg" width="450" height="250"">
                        </div>

                        <div class="item">
                            <img src="../img/selecoes/arabia-saudita/arabia-3.jpg" width="450" height="250">
                        </div>
            <?php } elseif ($nome == "Coreia do Sul") { ?>
                        <div class="item active">
                            <img src="../img/selecoes/arabia-saudita/arabia-1.jpg" width="450" height="250">
                        </div>

                        <div class="item">
                            <img src="../img/selecoes/arabia-saudita/arabia-2.jpg" width="450" height="250"">
                        </div>

                        <div class="item">
                            <img src="../img/selecoes/arabia-saudita/arabia-3.jpg" width="450" height="250">
                        </div>
            <?php } elseif ($nome == "México") { ?>
                        <div class="item active">
                            <img src="../img/selecoes/arabia-saudita/arabia-1.jpg" width="450" height="250">
                        </div>

                        <div class="item">
                            <img src="../img/selecoes/arabia-saudita/arabia-2.jpg" width="450" height="250"">
                        </div>

                        <div class="item">
                            <img src="../img/selecoes/arabia-saudita/arabia-3.jpg" width="450" height="250">
                        </div>
            <?php } elseif ($nome == "Suécia") { ?>
                        <div class="item active">
                            <img src="../img/selecoes/arabia-saudita/arabia-1.jpg" width="450" height="250">
                        </div>

                        <div class="item">
                            <img src="../img/selecoes/arabia-saudita/arabia-2.jpg" width="450" height="250"">
                        </div>

                        <div class="item">
                            <img src="../img/selecoes/arabia-saudita/arabia-3.jpg" width="450" height="250">
                        </div>
            <?php } elseif ($nome == "Bélgica") { ?>
                        <div class="item active">
                            <img src="../img/selecoes/arabia-saudita/arabia-1.jpg" width="450" height="250">
                        </div>

                        <div class="item">
                            <img src="../img/selecoes/arabia-saudita/arabia-2.jpg" width="450" height="250"">
                        </div>

                        <div class="item">
                            <img src="../img/selecoes/arabia-saudita/arabia-3.jpg" width="450" height="250">
                        </div>
            <?php } elseif ($nome == "Inglaterra") { ?>
                        <div class="item active">
                            <img src="../img/selecoes/arabia-saudita/arabia-1.jpg" width="450" height="250">
                        </div>

                        <div class="item">
                            <img src="../img/selecoes/arabia-saudita/arabia-2.jpg" width="450" height="250"">
                        </div>

                        <div class="item">
                            <img src="../img/selecoes/arabia-saudita/arabia-3.jpg" width="450" height="250">
                        </div>    
            <?php } elseif ($nome == "Panamá") { ?>
                        <div class="item active">
                            <img src="../img/selecoes/arabia-saudita/arabia-1.jpg" width="450" height="250">
                        </div>

                        <div class="item">
                            <img src="../img/selecoes/arabia-saudita/arabia-2.jpg" width="450" height="250"">
                        </div>

                        <div class="item">
                            <img src="../img/selecoes/arabia-saudita/arabia-3.jpg" width="450" height="250">
                        </div>
            <?php } elseif ($nome == "Tunísia") { ?>
                        <div class="item active">
                            <img src="../img/selecoes/arabia-saudita/arabia-1.jpg" width="450" height="250">
                        </div>

                        <div class="item">
                            <img src="../img/selecoes/arabia-saudita/arabia-2.jpg" width="450" height="250"">
                        </div>

                        <div class="item">
                            <img src="../img/selecoes/arabia-saudita/arabia-3.jpg" width="450" height="250">
                        </div>
            <?php } elseif ($nome == "Colômbia") { ?>
                        <div class="item active">
                            <img src="../img/selecoes/arabia-saudita/arabia-1.jpg" width="450" height="250">
                        </div>

                        <div class="item">
                            <img src="../img/selecoes/arabia-saudita/arabia-2.jpg" width="450" height="250"">
                        </div>

                        <div class="item">
                            <img src="../img/selecoes/arabia-saudita/arabia-3.jpg" width="450" height="250">
                        </div>
            <?php } elseif ($nome == "Japão") { ?>
                        <div class="item active">
                            <img src="../img/selecoes/arabia-saudita/arabia-1.jpg" width="450" height="250">
                        </div>

                        <div class="item">
                            <img src="../img/selecoes/arabia-saudita/arabia-2.jpg" width="450" height="250"">
                        </div>

                        <div class="item">
                            <img src="../img/selecoes/arabia-saudita/arabia-3.jpg" width="450" height="250">
                        </div>
            <?php } elseif ($nome == "Polônia") { ?>
                        <div class="item active">
                            <img src="../img/selecoes/arabia-saudita/arabia-1.jpg" width="450" height="250">
                        </div>

                        <div class="item">
                            <img src="../img/selecoes/arabia-saudita/arabia-2.jpg" width="450" height="250"">
                        </div>

                        <div class="item">
                            <img src="../img/selecoes/arabia-saudita/arabia-3.jpg" width="450" height="250">
                        </div>
            <?php } elseif ($nome == "Senegal") { ?>
                        <div class="item active">
                            <img src="../img/selecoes/arabia-saudita/arabia-1.jpg" width="450" height="250">
                        </div>

                        <div class="item">
                            <img src="../img/selecoes/arabia-saudita/arabia-2.jpg" width="450" height="250"">
                        </div>

                        <div class="item">
                            <img src="../img/selecoes/arabia-saudita/arabia-3.jpg" width="450" height="250">
                        </div>
            <?php } ?>
                    <a href="#carousel" class="left carousel-control" data-slide="prev">
                        <i class="glyphicon glyphicon-chevron-left"></i>
                    </a>

                    <a href="#carousel" class="right carousel-control" data-slide="next">
                        <i class="glyphicon glyphicon-chevron-right"></i>
                    </a>

                    </div>
                </div> <!-- slide carrousel -->
            </div> <!-- imagens selecao-->
        </div><!--texto sobre a selecao + imagem-->

        <div class="row">
            <h2 id="dados-gerais"">Dados Gerais</h2>

            <?php if ($nome == "Arábia Saudita") { ?>
                <div class="panel with panel-primary class">
                    <div class="panel-heading">PARTICIPAÇÕES EM COPAS DO MUNDO : 5</div>
                    <div class="panel-body"> (1994 - 1998 - 2002 - 2006 - 2018)</div>
                </div>
            <?php } elseif ($nome == "Egito") { ?>
                <div class="panel with panel-primary class">
                    <div class="panel-heading">PARTICIPAÇÕES EM COPAS DO MUNDO : 3</div>
                    <div class="panel-body"> (1934 - 1990 - 2018)</div>
                </div>

                 <div class="panel with panel-primary class">
                    <div class="panel-heading">TÍTULOS</div>
                    <div class="panel-body"> Copa das nações africanas : 7 (1957 - 1959 - 1986 - 2006 - 2008 - 2010)</div>
                </div>
            <?php } elseif ($nome == "Rússia") { ?>
                <div class="panel with panel-primary class">
                    <div class="panel-heading">PARTICIPAÇÕES EM COPAS DO MUNDO : 4</div>
                    <div class="panel-body"> (1994, 2002, 2014, 2018)</div>
                </div>

                 <div class="panel with panel-primary class">
                    <div class="panel-heading">TÍTULOS</div>
                    <div class="panel-body"> Eurocopa SUB-17 : 2(2006 e 2013) </div>
                </div>   
            <?php } elseif ($nome == "Uruguai") { ?>
                <div class="panel with panel-primary class">
                <div class="panel-heading">PARTICIPAÇÕES EM COPAS DO MUNDO : 13</div>
                <div class="panel-body">(1930, 1950, 1954, 1962, 1966, 1970, 1974, 1986, 1990, 2002, 2010, 2014, 2018)</div>
            </div>

             <div class="panel with panel-primary class">
                <div class="panel-heading">TÍTULOS</div>
                <div class="panel-body"> Copa do mundo : 2 (1930 - 1950)</div>
                <div class="panel-body"> Copa América : 15 (1916, 1917, 1920, 1923, 1924, 1926, 1935, 1942, 1956, 1959, 1967, 1983, 1987, 1995, 2011) </div>
            </div>
            <?php } elseif ($nome == "Espanha") { ?>
                <div class="panel with panel-primary class">
                <div class="panel-heading">PARTICIPAÇÕES EM COPAS DO MUNDO : 15</div>
                <div class="panel-body"> (1934 - 1950 - 1962 - 1966 - 1978 - 1982 - 1986 - 1990 - 1994 - 1998 - 2002 - 2006 - 2010 - 2014 - 2018)</div>
            </div>

             <div class="panel with panel-primary class">
                <div class="panel-heading">TÍTULOS</div>
                <div class="panel-body"> Copa do Mundo: 1 (2010) </div>
                <div class="panel-body"> Eurocopa: 3 (1964 - 2008 - 2012) </div>
            </div>

            <?php } elseif ($nome == "Irã") { ?>
                    <div class="panel with panel-primary class">
                <div class="panel-heading">PARTICIPAÇÕES EM COPAS DO MUNDO : 5</div>
                <div class="panel-body"> (1978 - 1998 - 2006 - 2014 - 2018)</div>
            </div>

             <div class="panel with panel-primary class">
                <div class="panel-heading">TÍTULOS</div>
                <div class="panel-body"> Copa da Ásia: 3 (1978 - 1972 - 1976)</div>
            </div>
            <?php } elseif ($nome == "Marrocos") { ?>
                <div class="panel with panel-primary class">
                <div class="panel-heading">PARTICIPAÇÕES EM COPAS DO MUNDO : 5</div>
                <div class="panel-body"> (1970 - 1986 - 1994 - 1998 - 2018)</div>
            </div>

             <div class="panel with panel-primary class">
                <div class="panel-heading">TÍTULOS</div>
                <div class="panel-body"> Copa das Nações Africanas: 1976</div>
                <div class="panel-body"> Copa das Nações Árabes: 2012</div>
            </div>
            <?php } elseif ($nome == "Portugal") { ?>
                    <div class="panel with panel-primary class">
                <div class="panel-heading">PARTICIPAÇÕES EM COPAS DO MUNDO : 7</div>
                <div class="panel-body"> (1966 - 1986 - 2002 - 2006 - 2010 - 2014 - 2018)</div>
            </div>

             <div class="panel with panel-primary class">
                <div class="panel-heading">TÍTULOS</div>
                <div class="panel-body"> Eurocopa: 1 (2016)</div>
            </div>
            <?php } elseif ($nome == "Austrália") { ?>
                <div class="panel with panel-primary class">
                <div class="panel-heading">PARTICIPAÇÕES EM COPAS DO MUNDO : 5</div>
                <div class="panel-body"> (1974 - 2006 - 2010 - 2014 - 2018)</div>
            </div>

             <div class="panel with panel-primary class">
                <div class="panel-heading">TÍTULOS</div>
                <div class="panel-body"> Copa da Ásia: 1 (2015)</div>
                <div class="panel-body"> Copa das Nações da OFC: 4 (1980 - 1996 - 2000 - 2004)</div>
            </div>
            <?php } elseif ($nome == "Dinamarca") { ?>
            <div class="panel with panel-primary class">
                <div class="panel-heading">PARTICIPAÇÕES EM COPAS DO MUNDO : 5</div>
                <div class="panel-body"> 5 (1986 - 1998 - 2002 - 2010 - 2018)</div>
            </div>

             <div class="panel with panel-primary class">
                <div class="panel-heading">TÍTULOS</div>
                <div class="panel-body"> Copa das Confederações: 1 (1995)</div>
                <div class="panel-body"> Eurocopa: 1 (1992)</div>
            </div>
            <?php } elseif ($nome == "França") { ?>
            <div class="panel with panel-primary class">
                <div class="panel-heading">PARTICIPAÇÕES EM COPAS DO MUNDO : 15</div>
                <div class="panel-body"> (1930 - 1934 - 1938 - 1954 - 1958 - 1966 - 1978 - 1982 - 1986 - 1998 - 2002 - 2006 - 2010 - 2014 - 2018)</div>
            </div>

             <div class="panel with panel-primary class">
                <div class="panel-heading">TÍTULOS</div>
                <div class="panel-body"> Copa do Mundo: 1 (1998)</div>
                <div class="panel-body"> Copa das Confederações: 2 (2001 - 2003)</div>
            </div>
            <?php } elseif ($nome == "Peru") { ?>
            <div class="panel with panel-primary class">
                <div class="panel-heading">PARTICIPAÇÕES EM COPAS DO MUNDO : 5</div>
                <div class="panel-body"> (1930 - 1970 - 1978 - 1982 - 2018)</div>
            </div>

             <div class="panel with panel-primary class">
                <div class="panel-heading">TÍTULOS</div>
                <div class="panel-body"> Copa América: 2 (1939 - 1975)</div>
            </div>
            <?php } elseif ($nome == "Argentina") { ?>
            <div class="panel with panel-primary class">
                <div class="panel-heading">PARTICIPAÇÕES EM COPAS DO MUNDO : 17</div>
                <div class="panel-body">(1930 - 1934 - 1958 - 1962 - 1966 - 1974 - 1978 - 1982 - 1986 - 1990 - 1994 - 1998 - 2002 - 2006 - 2010 - 2014 - 2018)</div>
            </div>

             <div class="panel with panel-primary class">
                <div class="panel-heading">TÍTULOS</div>
                <div class="panel-body"> Copa do Mundo: 2 (1978 - 1986)</div>
                <div class="panel-body"> Copa das Confederações: 1 (1992)</div>
                <div class="panel-body"> Copa América: 14 (1921 - 1925 - 1927 - 1929 - 1937 - 1941 - 1945 - 1946 - 1947 - 1955 - 1957 - 1959 - 1991 - 1993)</div>
            </div>
            <?php } elseif ($nome == "Croácia") { ?>
            <div class="panel with panel-primary class">
                <div class="panel-heading">PARTICIPAÇÕES EM COPAS DO MUNDO : 5</div>
                <div class="panel-body">  (1998 - 2002 - 2006 - 2014 - 2018)</div>
            </div>

             <div class="panel with panel-primary class">
                <div class="panel-heading">TÍTULOS</div>
                <div class="panel-body"> Nenhum</div>
            </div>
            <?php } elseif ($nome == "Islândia") { ?>
            <div class="panel with panel-primary class">
                <div class="panel-heading">PARTICIPAÇÕES EM COPAS DO MUNDO : 1</div>
                <div class="panel-body"> 2018)</div>
            </div>

             <div class="panel with panel-primary class">
                <div class="panel-heading">TÍTULOS</div>
                <div class="panel-body"> Nenhum título</div>
                
            </div>
            <?php } elseif ($nome == "Nigéria") { ?>
            <div class="panel with panel-primary class">
                <div class="panel-heading">PARTICIPAÇÕES EM COPAS DO MUNDO : 6</div>
                <div class="panel-body"> (1994 - 1998 - 2002 - 2010 - 2014 - 2018)</div>
            </div>

             <div class="panel with panel-primary class">
                <div class="panel-heading">TÍTULOS</div>
                <div class="panel-body"> Copa das Nações Africanas: 3 (1980 - 1994 - 2013)</div>
                <div class="panel-body"> Copa das Nações Afro-Asiáticas: 1 (1995)</div>
                <div class="panel-body"> Copa CEDEAO (Comunidade Econômica dos Estados Africanos do Oeste): 1 (1990)</div>
                <div class="panel-body"> Copa WAFU (Copa do Oeste da África): 1 (2010)</div>
            </div>
            <?php } elseif ($nome == "Costa Rica") { ?>
            <div class="panel with panel-primary class">
                <div class="panel-heading">PARTICIPAÇÕES EM COPAS DO MUNDO : 5</div>
                <div class="panel-body"> (1990 - 2002 - 2006 - 2014 - 2018)</div>
            </div>

             <div class="panel with panel-primary class">
                <div class="panel-heading">TÍTULOS</div>
                <div class="panel-body"> Copa Ouro da CONCACAF: 3 (1963 - 1969 - 1989)</div>
                <div class="panel-body"> Copa Centroamericana: 8 (1991 - 1997 - 1999 - 2003 - 2005 - 2007 - 2013 - 2014)</div>
                
            </div>
            <?php } elseif ($nome == "Brasil") { ?>
            <div class="panel with panel-primary class">
                <div class="panel-heading">PARTICIPAÇÕES EM COPAS DO MUNDO : 21</div>
                <div class="panel-body"> (1930 - 1934 - 1938 - 1950 - 1954 - 1958 - 1962 - 1966 - 1970 - 1974 - 1978 - 1982 - 1986 - 1990 - 1994 - 1998 - 2002 - 2006 - 2010 - 2014 - 2018)</div>
            </div>

             <div class="panel with panel-primary class">
                <div class="panel-heading">TÍTULOS</div>
                <div class="panel-body"> Copa do Mundo: 5 (1958 - 1962 - 1970 - 1994 - 2002)</div>
                <div class="panel-body"> Copa das Confederações: 4 (1997 - 2005 - 2009 - 2013)</div>
                <div class="panel-body"> Copa América: 8 (1919 - 1922 - 1949 - 1989 - 1997 - 1999 - 2004 - 2007)</div>
            </div>
            <?php } elseif ($nome == "Sérvia") { ?>
            <div class="panel with panel-primary class">
                <div class="panel-heading">PARTICIPAÇÕES EM COPAS DO MUNDO : 2</div>
                <div class="panel-body"> (2010 - 2018)</div>
            </div>

             <div class="panel with panel-primary class">
                <div class="panel-heading">TÍTULOS</div>
                <div class="panel-body"> Nenhum</div>
                
            </div>
            <?php } elseif ($nome == "Suíça") { ?>
            <div class="panel with panel-primary class">
                <div class="panel-heading">PARTICIPAÇÕES EM COPAS DO MUNDO : 11</div>
                <div class="panel-body"> (1934 - 1938 - 1950 - 1954 - 1962 - 1966 - 1994 - 2006 - 2010 - 2014 - 2018)</div>
            </div>

             <div class="panel with panel-primary class">
                <div class="panel-heading">TÍTULOS</div>
                <div class="panel-body"> Campeonato Europeu Sub-17: 1 (2002)</div>
                <div class="panel-body"> Copa do Mundo de Futebol Sub-17: 1 (2009)</div>
            </div>
            <?php } elseif ($nome == "Alemanha") { ?>
            <div class="panel with panel-primary class">
                <div class="panel-heading">PARTICIPAÇÕES EM COPAS DO MUNDO : 19</div>
                <div class="panel-body"> (1934 - 1938 - 1954 - 1958 - 1962 - 1966 - 1970 - 1974 - 1978 - 1982 - 1986 - 1990 - 1994 - 1998 - 2002 - 2006 - 2010 - 2014 - 2018)</div>
            </div>

             <div class="panel with panel-primary class">
                <div class="panel-heading">TÍTULOS</div>
                <div class="panel-body"> Copa do Mundo: 4 (1954 - 1974 - 1990 - 2014)</div>
                <div class="panel-body"> Copa das Confederações: 1 (2017)</div>
                <div class="panel-body"> Eurocopa: 3 (1972 - 1980 - 1996)</div>
                
            </div>
            <?php } elseif ($nome == "Coreia do Sul") { ?>
            <div class="panel with panel-primary class">
                <div class="panel-heading">PARTICIPAÇÕES EM COPAS DO MUNDO : 10</div>
                <div class="panel-body"> (1954 - 1986 - 1990 - 1994 - 1998 - 2002 - 2006 - 2010 - 2014 - 2018)</div>
            </div>

             <div class="panel with panel-primary class">
                <div class="panel-heading">TÍTULOS</div>
                <div class="panel-body"> Copa da Ásia: 2 (1956 - 1960)</div>
                <div class="panel-body"> Copa das Nações Afro-Asiáticas: 1 (1988)</div>
                
            </div>    
            <?php } elseif ($nome == "México") { ?>
            <div class="panel with panel-primary class">
                <div class="panel-heading">PARTICIPAÇÕES EM COPAS DO MUNDO : 16</div>
                <div class="panel-body">  (1930 - 1950 - 1954 - 1958 - 1962 - 1966 - 1970 - 1978 - 1986 - 1994 - 1998 - 2002 - 2006 - 2010 - 2014 - 2018)</div>
            </div>

             <div class="panel with panel-primary class">
                <div class="panel-heading">TÍTULOS</div>
                <div class="panel-body"> Copa das Confederações: 1 (1999)</div>
                <div class="panel-body"> Copa Ouro da CONCACAF: 7 (1993 - 1996 - 1998 - 2003 - 2009 - 2011 - 2015)</div>
                
            </div>
            <?php } elseif ($nome == "Suécia") { ?>
            <div class="panel with panel-primary class">
                <div class="panel-heading">PARTICIPAÇÕES EM COPAS DO MUNDO : 12</div>
                <div class="panel-body">  (1934 - 1938 - 1950 - 1958 - 1970 - 1974 - 1978 - 1990 - 1994 - 2002 - 2006 - 2018)</div>

            </div>

             <div class="panel with panel-primary class">
                <div class="panel-heading">TÍTULOS</div>
                <div class="panel-body"> Jogo Futebol Olímpico: 1 (1948)</div>
                <div class="panel-body"> Torneio das Quatro Nações: 1 (1988)</div>
                <div class="panel-body"> Campeonato Nórdico: 9 (1933–1936 - 1937–1947 - 1948–1951 - 1952–1955 - 1956–1959 - 1960–1963 - 1964–1967 - 1968–1971 - 1972–1977)</div>
                
            </div>
            <?php } elseif ($nome == "Bélgica") { ?>
            <div class="panel with panel-primary class">
                <div class="panel-heading">PARTICIPAÇÕES EM COPAS DO MUNDO : 13</div>
                <div class="panel-body"> (1930 - 1934 - 1938 - 1954 - 1970 - 1982 - 1986 - 1990 - 1994 - 1998 - 2002 - 2014 - 2018)</div>
            </div>

             <div class="panel with panel-primary class">
                <div class="panel-heading">TÍTULOS</div>
                <div class="panel-body"> Jogo Futebol Olímpico: 1 (1920)</div>
                <div class="panel-body"> Copa Kirin: 1 (1999)</div>
                
            </div>
            <?php } elseif ($nome == "Inglaterra") { ?>
            <div class="panel with panel-primary class">
                <div class="panel-heading">PARTICIPAÇÕES EM COPAS DO MUNDO : 15</div>
                <div class="panel-body">  (1950 - 1954 - 1958 - 1962 - 1966 - 1970 - 1982 - 1986 - 1990 - 1998 - 2002 - 2006 - 2010 - 2014 - 2018)</div>
            </div>

             <div class="panel with panel-primary class">
                <div class="panel-heading">TÍTULOS</div>
                <div class="panel-body"> Jogo Futebol Olímpico: 3 (1900 - 1908 - 1912)</div>
                <div class="panel-body"> Copa do Mundo: 1 (1966)</div>
                
            </div>
            <?php } elseif ($nome == "Panamá") { ?>
            <div class="panel with panel-primary class">
                <div class="panel-heading">PARTICIPAÇÕES EM COPAS DO MUNDO : 1</div>
                <div class="panel-body"> (2018)</div>
            </div>

             <div class="panel with panel-primary class">
                <div class="panel-heading">TÍTULOS</div>
                <div class="panel-body"> Copa das Nações da UNCAF: 1 (2009)</div>
                <div class="panel-body"> Copa CCCF: 1 (1951)</div>
                
            </div>
            <?php } elseif ($nome == "Tunísia") { ?>
            <div class="panel with panel-primary class">
                <div class="panel-heading">PARTICIPAÇÕES EM COPAS DO MUNDO : 5</div>
                <div class="panel-body"> (1978 - 1998 - 2002 - 2006 - 2018)</div>
            </div>

             <div class="panel with panel-primary class">
                <div class="panel-heading">TÍTULOS</div>
                <div class="panel-body">Nenhum</div>
            </div>

            <?php } elseif ($nome == "Colômbia") { ?>
            <div class="panel with panel-primary class">
                <div class="panel-heading">PARTICIPAÇÕES EM COPAS DO MUNDO : 6</div>
                <div class="panel-body">  (1962 - 1990 - 1994 - 1998 - 2014 - 2018)</div>
            </div>

             <div class="panel with panel-primary class">
                <div class="panel-heading">TÍTULOS</div>
                <div class="panel-body"> Copa América: 1 (2001)</div>
                
            </div>
            <?php } elseif ($nome == "Japão") { ?>
            <div class="panel with panel-primary class">
                <div class="panel-heading">PARTICIPAÇÕES EM COPAS DO MUNDO : 6</div>
                <div class="panel-body"> (1998 - 2002 - 2006 - 2010 - 2014 - 2018)</div>
            </div>

             <div class="panel with panel-primary class">
                <div class="panel-heading">TÍTULOS</div>
                <div class="panel-body"> Copa da Ásia: 4 (1992 - 2000 - 2004 - 2011)</div>
                
            </div>
            <?php } elseif ($nome == "Polônia") { ?>
            <div class="panel with panel-primary class">
                <div class="panel-heading">PARTICIPAÇÕES EM COPAS DO MUNDO : 8</div>
                <div class="panel-body"> (1938 - 1974 - 1978 - 1982 - 1986 - 2002 - 2006 - 2018)</div>
            </div>

             <div class="panel with panel-primary class">
                <div class="panel-heading">TÍTULOS</div>
                <div class="panel-body"> Jogos Futebol Olímpico: 1 (1972)</div>
                
            </div>
            <?php } elseif ($nome == "Senegal") { ?>
            <div class="panel with panel-primary class">
                <div class="panel-heading">PARTICIPAÇÕES EM COPAS DO MUNDO : 2</div>
                <div class="panel-body"> (2002 - 2018)</div>
            </div>

             <div class="panel with panel-primary class">
                <div class="panel-heading">TÍTULOS</div>
                <div class="panel-body"> Copa Amílcar Cabral: 8 (1979 - 1980 - 1983 - 1984 - 1985 - 1986 - 1991 - 2001)</div>
                <div class="panel-body"> Copa CEDEAO: 1 (1985)</div>
                
            </div>
            <?php } ?>

            <h2 id="dados-gerais"">Histórias</h2>
            <?php foreach ($resultadoHistorias as $historia) { ?>
                    <div class="panel with panel-primary class">
                        <div class="panel-heading"><?php echo $historia[0] ?></div>
                        <div class="panel-body"><?php echo $historia[1] ?></div>
                    </div>        
            <?php } ?>
            
            <h2 id="elenco-copas">Elenco em Copas do Mundo</h2>

            <?php if ($nome == "Arábia Saudita") { ?>
                <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1994:</div>
                <div class="panel-body">1 • Al-Deayea • 2 Al-Dosari • 3 Al-Khilaiwi • 4 Zubromawi • 5 Madani • 6 Amin • 7 Al-Ghesheyan • 8 Al-Bishi • 9 Abdullah Capitão • 10 Al-Owairan • 11 Al-Mehallel • 12 Al-Jaber • 13 Al-Jawad • 14 Al-Muwallid • 15 Al-Dawod • 16 Jebreen • 17 Al-Taifi • 18 Al-Anazi • 19 Saleh • 20 Idris • 21 Al-Sadiq • 22 Al-Helwah • Treinador: Solari
                </div>
            </div>


            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1998:</div>
                <div class="panel-body">
                    1 • Al-Deayea • 2 Al-Jahani • 3 Al-Khilaiwi • 4 Zubromawi • 5 Madani • 6 Amin Capitão • 7 Al-Shahrani • 8 Al-Dosari • 9 Al-Jaber • 10 S. Al-Owairan • 11 Al-Mehallel • 12 Al-Harbi • 13 Sulaimani • 14 Al-Muwallid • 15 Al-Thunayan • 16 K. Al-Owairan • 17 Dokhi • 18 Al-Temyat • 19 Al-Janoubi • 20 Saleh • 21 Al-Sadiq • 22 Al-Antaif • Treinador: Parreira (Al-Kharashy)
                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 2002:</div>
                <div class="panel-body">
                    1 • Al-Deayea • 2 Al-Jahani • 3 Tukar • 4 Zubromawi • 5 Harthi • 6 Al-Shehri • 7 Suwayed • 8 Noor • 9 Al-Jaber Capitão • 10 Al-Shalhoub • 11 O. Al-Dosari • 12 Dokhi • 13 Sulaimani • 14 Khathran • 15 A. Al-Dosari • 16 Al-Owairan • 17 Al-Waked • 18 Al-Temyat • 19 Al-Ghamdi • 20 Al-Yami • 21 Zaid • 22 Al-Khojali • 23 Al-Thagafi • Treinador: Al-Johar

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 2006:</div>
                <div class="panel-body">
                    1 • Al-Deayea • 2 Dokhi • 3 Tukar • 4 Al-Montashari • 5 Al-Qadi • 6 Al-Ghamdi • 7 Ameen • 8 Noor • 9 Al-Jaber Capitão • 10 Al-Shalhoub • 11 Al-Harthi • 12 Khathran • 13 Sulaimani • 14 Khariri • 15 Al-Bahri • 16 Aziz • 17 Al-Bishi • 18 Al-Temyat • 19 Massad • 20 Al-Qahtani • 21 Zaid • 22 Khouja • 23 Mouath • Treinador: Paquetá
                </div>
            </div>           
            <?php } elseif ($nome == "Egito") { ?>
                  <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1934:</div>
                <div class="panel-body">DF Abdou • MC Bakhati • MC El‑Far • AT El‑Kashef • AT El‑Nigero • DF El‑Said • DF El‑Soury • AT El‑Tetch • G Fahmy • AT Fawzi • MC Halim • DF Hamidu • AT Hassan • MC Kasseb • AT Latif • AT Mahmoud • G Mansour • AT Mosaoud • MC Rafaat • MC Raghab • MC Shafi • AT Taha • Treinador: McRea
                </div>
            </div>


            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1990:</div>
                <div class="panel-body">
                   1 Shobair • 2 I. Hassan • 3 Yassin • 4 H. Ramzy • 5 Yakan • 6 Kasem • 7 Youssef • 8 Abdelghani • 9 H. Hassan • 10 Abdelhamid Capitão • 11 Soliman • 12 Abouzaid • 13 A. Ramzy • 14 Maihoub • 15 Eid • 16 Tolba • 17 Shawky • 18 Oraby • 19 Abdelrahman • 20 El‑Kass • 21 Taher • 22 El‑Batal • Treinador: El‑Gohary
                </div>
            </div>  
            <?php } elseif ($nome == "Rússia") { ?>
                  <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1994:</div>
                <div class="panel-body">1 Tchertchesov • 2 Kuznetsov • 3 Harlukovich • 4 Galyamin • 5 Nikiforov • 6 Ternavs'kyi • 7 Pyatnitskiy • 8 Popov • 9 Salenko • 10 Karpin • 11 Beschastnykh • 12 Tetradze • 13 Borodyuk • 14 Korneyev • 15 Radchenko • 16 Kharin Capitão • 17 Tsymbalar • 18 Onopko • 19 Mostovoy • 20 Ledyakhov • 21 Khlestov • 22 Yuran • Treinador: Sadyrin
                </div>
            </div>


            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 2002:</div>
                <div class="panel-body">
                   1 Niğmätullin • 2 Kovtun • 3 Nikiforov • 4 Smertin • 5 Solomatin • 6 Semshov • 7 Onopko Capitão • 8 Karpin • 9 Titov • 10 Mostovoy • 11 Beschastnykh • 12 Tchertchesov • 13 Dayev • 14 Chugaynov • 15 Alenichev • 16 Kerjakov • 17 Semak • 18 Sennikov • 19 Pimenov • 20 İzmailev • 21 Khokhlov • 22 Sychov • 23 Filimonov • Treinador: Romantsev

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 2014:</div>
                <div class="panel-body">
                   1 Akinfeev • 2 Kozlov • 3 Schennikov • 4 Ignashevich • 5 Semyonov • 6 Kanunnikov • 7 Denisov • 8 Glushakov • 9 Kokorin • 10 Dzagoev • 11 Kerjakov • 12 Lodygin • 13 Granat • 14 Berezutski Capitão • 15 Mogilevets • 16 Ryjikov • 17 Shatov • 18 Jirkov • 19 Samedov • 20 Fayzulin • 21 Ionov • 22 Yeshchenko • 23 D. Kombarov • Treinador: Capello


                </div>
            </div>  
            <?php } elseif ($nome == "Uruguai") { ?>
                  <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1930:</div>
                <div class="panel-body">MC Andrade • AT Anselmo • G Ballesteros • AT Calvo • G Capuccini • AT Castro • AT Cea • AT Dorado • MC Fernández • MC Gestido • AT Iriarte • DF Mascheroni • MC Melogno • DF Nasazzi • AT Petrone • MC Píriz • DF Recoba • MC Riolfo • AT Saldombide • AT Scarone • DF Tejera • AT Urdinarán • Treinador: Suppici
                </div>
            </div>


            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1950:</div>
                <div class="panel-body">
                   AT Britos • AT Burgueño • MC Gambetta • AT Ghiggia • DF J.C. González • DF M. González • DF Martínez • G Máspoli • AT Míguez • AT Morán • MC Ortuño • G Paz • AT Pérez • MC Pini • AT Rijo • MC Rodríguez Andrade • AT Romero • AT Schiaffino • DF Tejera • MC Varela • AT Vidal • DF Vilches • Treinador: López
                </div>
            </div>

             <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1954:</div>
                <div class="panel-body">
                   1 Máspoli • 2 Santamaría • 3 Martínez • 4 Rodríguez Andrade • 5 Varela Capitão • 6 Leopardi • 7 Abbadie • 8 Hohberg • 9 Míguez • 10 Schiaffino • 11 Borges • 12 Maceiras • 13 Davoine • 14 Tejera • 15 Rivera • 16 Carballo • 17 Cruz • 18 Souto • 19 Ambrois • 20 Méndez • 21 Pérez • 22 Castro • Treinador: López
                </div>
            </div>

             <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1962:</div>
                <div class="panel-body">
                   1 Sosa • 2 Troche Capitão • 3 Emilio Álvarez • 4 Méndez • 5 Gonçalves • 6 P. Cubilla • 7 Pérez • 8 Cortés • 9 Sasía • 10 Rocha • 11 L. Cubilla • 12 Maidana • 13 Martínez • 14 Soria • 15 E. González • 16 R. González • 17 Eliseo Álvarez • 18 Langón • 19 Bergara • 20 Silva • 21 Cabrera • 22 Escalada • Treinador: Corazzo

                </div>
            </div>

             <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1966:</div>
                <div class="panel-body">
                   1 Mazurkiewicz • 2 Troche Capitão • 3 Manicera • 4 Forlán • 5 Gonçalves • 6 Caetano • 7 Cortés • 8 Urruzmendi • 9 Sasía • 10 Rocha • 11 Pérez • 12 Sosa • 13 Díaz • 14 Emilio Álvarez • 15 Ubiñas • 16 Eliseo Álvarez • 17 Salva • 18 M. Viera • 19 Silva • 20 Ramos • 21 Espárrago • 22 Taibo • Treinador: O. Viera

                </div>
            </div>

             <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1970:</div>
                <div class="panel-body">
                   1 Mazurkiewicz • 2 Ancheta • 3 Matosas • 4 Ubiñas • 5 Montero Castillo • 6 Mujica • 7 Cubilla • 8 Rocha Capitão • 9 Espárrago • 10 Maneiro • 11 Morales • 12 Santos • 13 Sandoval • 14 Cámera • 15 Fontes • 16 Caetano • 17 Bareño • 18 Gómez • 19 Zubía • 20 Cortés • 21 Losada • 22 Corbo • Treinador: Hohberg
                </div>
            </div>

             <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1974:</div>
                <div class="panel-body">
                   1 Mazurkiewicz • 2 Jáuregui • 3 Masnik Capitão • 4 Forlán • 5 Montero Castillo • 6 Pavoni • 7 Cubilla • 8 Espárrago • 9 Morena • 10 Rocha • 11 Corbo • 12 Santos • 13 De Simone • 14 Garisto • 15 González • 16 Cardaccio • 17 Jiménez • 18 Mantegazza • 19 Milar • 20 Silva • 21 Gómez • 22 Fernández • Treinador: Porta
                </div>
            </div>

             <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1986:</div>
                <div class="panel-body">
                   1 Rodríguez • 2 Gutiérrez • 3 Acevedo • 4 Diogo • 5 Bossio • 6 Batista • 7 Alzamendi • 8 Barrios Capitão • 9 Da Silva • 10 Francescoli • 11 Santín • 12 Álvez • 13 Vega • 14 Pereyra • 15 Rivero • 16 Saralegui • 17 Zalazar • 18 Paz • 19 Ramos • 20 Aguilera • 21 Cabrera • 22 Otero • Treinador: Borrás

                </div>
            </div>

             <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1990:</div>
                <div class="panel-body">
                   1 Álvez • 2 Gutiérrez • 3 De León • 4 Herrera • 5 Perdomo • 6 Domínguez • 7 Alzamendi • 8 Ostolaza • 9 Francescoli Capitão • 10 Paz • 11 Sosa • 12 E. Pereira • 13 Revelez • 14 Pintos Saldanha • 15 Correa • 16 Bengoechea • 17 Martínez • 18 Aguilera • 19 Fonseca • 20 R. Pereira • 21 Castro • 22 Zeoli • Treinador: Tabárez

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 2002:</div>
                <div class="panel-body">
                   1 Carini • 2 Méndez • 3 Lembo • 4 Montero Capitão • 5 García • 6 Rodríguez • 7 Guigou • 8 Varela • 9 Darío Silva • 10 O'Neill • 11 Magallanes • 12 Munúa • 13 Abreu • 14 Sorondo • 15 Olivera • 16 Romero • 17 Regueiro • 18 Morales • 19 Bizera • 20 Recoba • 21 Forlán • 22 De los Santos • 23 Elduayen • Treinador: Víctor Púa

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 2010:</div>
                <div class="panel-body">
                   1 Muslera • 2 Lugano Capitão • 3 Godín • 4 Fucile • 5 Gargano • 6 Victorino • 7 Cavani • 8 Eguren • 9 Suárez • 10 Forlán • 11 Á. Pereira • 12 Castillo • 13 Abreu • 14 Lodeiro • 15 Pérez • 16 Maxi Pereira • 17 Arévalo • 18 González • 19 Scotti • 20 Á. Fernández • 21 S. Fernández • 22 Cáceres • 23 Martín Silva • Treinador: Tabárez

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 2014:</div>
                <div class="panel-body">
                   1 Muslera • 2 Lugano Capitão • 3 Godín • 4 Fucile • 5 Gargano • 6 Á. Pereira • 7 Rodríguez • 8 Hernández • 9 Suárez • 10 Forlán • 11 Stuani • 12 Muñoz • 13 Giménez • 14 Lodeiro • 15 Pérez • 16 Maxi Pereira • 17 Arévalo • 18 Ramírez • 19 Coates • 20 González • 21 Cavani • 22 Cáceres • 23 Martín Silva • Treinador: Tabárez.

                </div>
            </div>    
            <?php } elseif ($nome == "Espanha") { ?>
            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1934:</div>
                <div class="panel-body">AT Bosch • AT Campanal • AT Chacho • MC Cilaurren • DF Ciriaco • AT Fede • AT Gorostiza • DF Hilario • AT Iraragorri • AT Lafuente • AT Lángara • AT Lecue • MC Marculeta • AT Martín • MC Muguerza • G Nogués • DF Quincoces • AT Regueiro • AT Solé • AT Ventolrà • DF Zabalo • G Zamora • Treinador: García.
                </div>
            </div>


            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1950:</div>
                <div class="panel-body">
                   G Acuña • DF Alonso • DF Antúnez • DF Asensi • AT Basora • AT César • AT Gaínza • DF J. Gonzalvo • MC M. Gonzalvo • AT Hernández • AT Igoa • G I. Eizaguirre • AT Juncosa • DF Lesmes • AT Molowny • MC Nando • AT Panizo • DF Parra • MC Puchades • G Ramallets • DF Silva • AT Zarra • Treinador: G. Eizagirre.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1962:</div>
                <div class="panel-body">
                   1 Arakistain • 2 Sadurní • 3 Carmelo • 4 Collar Capitão • 5 Del Sol • 6 Di Stéfano • 7 Etxeberria • 8 Garai • 9 Gento • 10 Gràcia • 11 Rivilla • 12 Peiró • 13 Pachín • 14 Puskás • 15 Eulogio • 16 Reija • 17 Rodri • 18 Adelardo • 19 Santamaría • 20 Segarra • 21 Suárez • 22 Vergés • Treinador: Herrera.


                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1966:</div>
                <div class="panel-body">
                   1 Iribar • 2 Sanchís • 3 Eladio • 4 Del Sol • 5 Zoco Capitão • 6 Glaría • 7 Ufarte • 8 Amancio • 9 Marcelino • 10 Suárez • 11 Gento • 12 Betancort • 13 Reina • 14 Rivilla • 15 Reija • 16 Olivella • 17 Gallego • 18 Pirri • 19 Fusté • 20 Peiró • 21 Adelardo • 22 Lapetra • Treinador: Villalonga.


                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1978:</div>
                <div class="panel-body">
                   1 Arconada • 2 De la Cruz • 3 Uría • 4 Asensi • 5 Migueli • 6 Biosca • 7 Dani • 8 Juanito • 9 Quini • 10 Santillana • 11 Cardeñosa • 12 Guzmán • 13 Miguel Ángel • 14 Leal • 15 Marañón • 16 Olmo • 17 Marcelino • 18 Pirri Capitão • 19 Rexach • 20 Rubén Cano • 21 San José • 22 Urruti • Treinador: Kubala.1


                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1982:</div>
                <div class="panel-body">
                   1 Arconada Capitão • 2 Camacho • 3 Gordillo • 4 Alonso • 5 Tendillo • 6 Alexanko • 7 Juanito • 8 Joaquín • 9 Satrustegui • 10 Zamora • 11 López Ufarte • 12 Urkiaga • 13 Jiménez • 14 Maceda • 15 Saura • 16 Sànchez • 17 Gallego • 18 Uralde • 19 Santillana • 20 Quini • 21 Urruti • 22 Miguel Ángel • Treinador: Santamaría.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1986:</div>
                <div class="panel-body">
                   1 Zubizarreta • 2 Tomás • 3 Camacho • 4 Maceda • 5 Víctor • 6 Gordillo • 7 Señor • 8 Goikoetxea • 9 Butragueño Capitão • 10 Carrasco • 11 Julio Alberto • 12 Setién • 13 Urruti • 14 Gallego • 15 Chendo • 16 Rincón • 17 Francisco • 18 Calderé • 19 Salinas • 20 Eloy • 21 Míchel • 22 Ablanedo • Treinador: Muñoz.


                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1990:</div>
                <div class="panel-body">
                   1 Zubizarreta • 2 Chendo • 3 Jiménez • 4 Andrinua • 5 Sanchís • 6 Martín Vázquez • 7 Pardeza • 8 Quique • 9 Butragueño (C) • 10 Fernando • 11 Villarroya • 12 Alkorta • 13 Ablanedo • 14 Gorriz • 15 Roberto • 16 Bakero • 17 Hierro • 18 Paz • 19 Salinas • 20 Manolo • 21 Míchel • 22 Otxotorena • Treinador: Suárez.


                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1994:</div>
                <div class="panel-body">
                   1 Zubizarreta Capitão • 2 Ferrer • 3 Otero • 4 Camarasa • 5 Abelardo • 6 Hierro • 7 Goikoetxea • 8 Guerrero • 9 Guardiola • 10 Bakero • 11 Begiristain • 12 Sergi • 13 Cañizares • 14 Juanele • 15 Caminero • 16 Miñambres • 17 Voro • 18 Alkorta • 19 Salinas • 20 Nadal • 21 Luis Enrique • 22 Lopetegui • Treinador: Clemente.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1998:</div>
                <div class="panel-body">
                   1 Zubizarreta Capitão • 2 Ferrer • 3 Aranzábal • 4 Alkorta • 5 Abelardo • 6 Hierro • 7 Morientes • 8 Guerrero • 9 Pizzi • 10 Raúl • 11 Alfonso • 12 Sergi • 13 Cañizares • 14 Campo • 15 Aguilera • 16 Celades • 17 Etxeberria • 18 Amor • 19 Kiko • 20 Nadal • 21 Luis Enrique • 22 Molina • Treinador: Clemente.


                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 2002:</div>
                <div class="panel-body">
                   1 Casillas • 2 Curro Torres • 3 Juanfran • 4 Helguera • 5 Puyol • 6 Hierro Capitão • 7 Raúl • 8 Baraja • 9 Morientes • 10 Tristán • 11 De Pedro • 12 Luque • 13 Ricardo • 14 Albelda • 15 Romero • 16 Mendieta • 17 Valerón • 18 Sergio • 19 Xavi • 20 Nadal • 21 Luis Enrique • 22 Joaquín • 23 Contreras • Treinador: Camacho.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 2006:</div>
                <div class="panel-body">
                   1 Casillas • 2 Salgado • 3 Pernía • 4 Marchena • 5 Puyol • 6 Albelda • 7 Raúl Capitão • 8 Xavi • 9 Torres • 10 Reyes • 11 García • 12 López • 13 Iniesta • 14 Alonso • 15 Ramos • 16 Senna • 17 Joaquín • 18 Fàbregas • 19 Cañizares • 20 Juanito • 21 Villa • 22 Pablo • 23 Reina • Treinador: Aragonés.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 2010:</div>
                <div class="panel-body">
                   1 Casillas Capitão • 2 Albiol • 3 Piqué • 4 Marchena • 5 Puyol • 6 Iniesta • 7 Villa • 8 Xavi • 9 Torres • 10 Fàbregas • 11 Capdevila • 12 Valdés • 13 Mata • 14 Alonso • 15 Ramos • 16 Busquets • 17 Arbeloa • 18 Pedro • 19 Llorente • 20 Martínez • 21 Silva • 22 Navas • 23 Reina • Treinador: Del Bosque.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 2014:</div>
                <div class="panel-body">
                   1 Casillas Capitão • 2 Albiol • 3 Piqué • 4 Martínez • 5 Juanfran • 6 Iniesta • 7 Villa • 8 Xavi • 9 Torres • 10 Fàbregas • 11 Pedro • 12 de Gea • 13 Mata • 14 Xabi Alonso • 15 Sergio Ramos • 16 Busquets • 17 Koke • 18 Jordi Alba • 19 Diego Costa • 20 Cazorla • 21 Silva • 22 Azpilicueta • 23 Reina • Treinador: del Bosque.

                </div>
            </div>  
            <?php } elseif ($nome == "Irã") { ?>
            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1978:</div>
                <div class="panel-body">1 Hejazi • 2 Danaeifard • 3 Fariba • 4 Bishkar • 5 Allahverdi • 6 Nayebagha • 7 Parvin Capitão • 8 Ghasempour • 9 Sadeghi • 10 Roshan • 11 Ghesghayan • 12 Mavaddat • 13 Majd Teymouri • 14 Nazari • 15 Eskandarian • 16 Nouraei • 17 Jahani • 18 Faraki • 19 Shojaei • 20 Abdollahi • 21 Kazerani • 22 Korbekandi • Treinador: Mohajerani.
                </div>
            </div>


            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1998:</div>
                <div class="panel-body">
                   1 Abedzadeh Capitão • 2 Mahdavikia • 3 Saadavi • 4 Khakpour • 5 Peyrovani • 6 Bagheri • 7 Mansourian • 8 Dinmohammadi • 9 Estili • 10 Daei • 11 Azizi • 12 Nakisa • 13 Latifi • 14 Mohammadkhani • 15 Ostad-Asadi • 16 Shahroudi • 17 Zarincheh • 18 Hamedani • 19 Seraj • 20 Pashazadeh • 21 Minavand • 22 Broumand • Treinador: Talebi.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 2006:</div>
                <div class="panel-body">
                   1 Mirzapour • 2 Mahdavikia • 3 Bakhtiarizadeh • 4 Golmohammadi • 5 Rezaei • 6 Nekounam • 7 Zandi • 8 Karimi • 9 Hashemian • 10 Daei Capitão • 11 Khatibi • 12 Roudbarian • 13 Kaebi • 14 Teymourian • 15 Borhani • 16 Enayati • 17 Kazemian • 18 Navidkia • 19 Sadeqi • 20 Nosrati • 21 Madanchi • 22 Talebloo • 23 Shojaei • Treinador: Ivanković.


                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 2014:</div>
                <div class="panel-body">
                   1 Ahmadi • 2 Heydari • 3 Hajsafi • 4 Hosseini • 5 Sadeghi • 6 Nekounam Capitão • 7 Shojaei • 8 R. Haghighi • 9 Jahanbakhsh • 10 Ansarifard • 11 Hadadifar • 12 A. Haghighi • 13 Mahini • 14 Teymourian • 15 Montazeri • 16 Ghoochannejhad • 17 Alenemeh • 18 Rahmani • 19 Beikzadeh • 20 Beitashour • 21 Dejagah • 22 Davari • 23 Pooladi • Treinador: Queiroz.


                </div>
            </div>        
            <?php } elseif ($nome == "Marrocos") { ?>
            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1970:</div>
                <div class="panel-body">1 Ben Kassou • 2 Lamrani • 3 Benkhrif • 4 Khassouni Capitão • 5 Slimani • 6 Mahroufi • 7 Ghandi • 8 Bamous • 9 Faras • 10 El Filali • 11 Ghazouani • 12 Hazzaz • 13 Fadili • 14 Jarir • 15 Dahane • 16 Choukri • 17 Alaoui • 18 El Khiati • 19 Ouaraghli • Treinador: Vidinić.
                </div>
            </div>


            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1986:</div>
                <div class="panel-body">
                   1 Zaki Capitão • 2 Khalifa • 3 Lamriss • 4 El Biyaz • 5 Bouyahyaoui • 6 Dolmy • 7 Mustafa El Haddaoui • 8 Bouderbala • 9 Merry Krimau • 10 Timoumi • 11 Merry • 12 Hmied • 13 Rhiati • 14 Ouadani • 15 Mouncif El Haddaoui • 16 Amanallah • 17 Khairi • 18 Sahil • 19 Jilal • 20 Bidane • 21 Souleimani • 22 Mouddani • Treinador: Faria.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1994:</div>
                <div class="panel-body">
                   1 Azmi Capitão • 2 Abdellah • 3 El Hadrioui • 4 El Khalej • 5 Triki • 6 Naybet • 7 Hadji • 8 Azzouzi • 9 Chaouch • 10 El Haddaoui • 11 Daoudi • 12 Dghay • 13 Bahja • 14 Masbahi • 15 Hababi • 16 Nader • 17 El Ghrissi • 18 Neqrouz • 19 Bouyboud • 20 Kachloul • 21 Samadi • 22 Alaoui • Treinador: Blinda.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1998:</div>
                <div class="panel-body">
                   1 El Brazi • 2 Saber • 3 El Hadrioui • 4 Rossi • 5 Triki • 6 Naybet Capitão • 7 Hadji • 8 Chiba • 9 Hadda • 10 Ouakili • 11 El Khattabi • 12 Benzekri • 13 Neqrouz • 14 Bassir • 15 Abrami • 16 Azzouzi • 17 Amzine • 18 Chippo • 19 Sellami • 20 El Khalej • 21 Rokki • 22 Chadili • Treinador: Michel.

                </div>
            </div>
        
            <?php } elseif ($nome == "Portugal") { ?>
            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1966:</div>
                <div class="panel-body">1 Américo • 2 Carvalho • 3 Pereira • 4 Vicente • 5 Germano • 6 Peres • 7 Figueiredo • 8 Lourenço • 9 Hilário • 10 Coluna Capitão • 11 Simões • 12 José Augusto • 13 Eusébio • 14 Cruz • 15 Duarte • 16 Graça • 17 Morais • 18 Torres • 19 Pinto • 20 Baptista • 21 José Carlos • 22 Festa • Treinador: Glória.
                </div>
            </div>


            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1986:</div>
                <div class="panel-body">
                   1 Bento Capitão • 2 João Pinto • 3 Sousa • 4 Ribeiro • 5 Álvaro • 6 Carlos Manuel • 7 Jaime Pacheco • 8 Frederico • 9 Gomes • 10 Futre • 11 Bandeirinha • 12 Martins • 13 Morato • 14 Magalhães • 15 Oliveira • 16 José António • 17 Diamantino • 18 Sobrinho • 19 Águas • 20 Inácio • 21 André • 22 Damas • Treinador: Torres.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 2002:</div>
                <div class="panel-body">
                   1 Vítor Baía • 2 Jorge Costa • 3 Abel Xavier • 4 Caneira • 5 Fernando Couto Capitão • 6 Paulo Sousa • 7 Figo • 8 João Pinto • 9 Pauleta • 10 Rui Costa • 11 Sérgio Conceição • 12 Hugo Viana • 13 Jorge Andrade • 14 Pedro Barbosa • 15 Nélson • 16 Ricardo • 17 Paulo Bento • 18 Frechaut • 19 Capucho • 20 Petit • 21 Nuno Gomes • 22 Beto • 23 Rui Jorge • Treinador: Oliveira.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 2006:</div>
                <div class="panel-body">
                   1 Ricardo • 2 Paulo Ferreira • 3 Caneira • 4 Ricardo Costa • 5 Fernando Meira • 6 Costinha • 7 Figo Capitão • 8 Petit • 9 Pauleta • 10 Hugo Viana • 11 Simão • 12 Quim • 13 Miguel • 14 Nuno Valente • 15 Boa Morte • 16 Ricardo Carvalho • 17 Cristiano Ronaldo • 18 Maniche • 19 Tiago • 20 Deco • 21 Nuno Gomes • 22 Paulo Santos • 23 Hélder Postiga • Treinador: Scolari.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 2010:</div>
                <div class="panel-body">
                   1 Eduardo • 2 Bruno Alves • 3 Paulo Ferreira • 4 Rolando • 5 Duda • 6 Ricardo Carvalho • 7 Cristiano Ronaldo • 8 Pedro Mendes • 9 Liedson • 10 Danny • 11 Simão • 12 Beto • 13 Miguel • 14 Miguel Veloso • 15 Pepe • 16 Raul Meireles • 17 Rúben Amorim • 18 Hugo Almeida • 19 Tiago • 20 Deco • 21 Ricardo Costa • 22 Daniel Fernandes • 23 Fábio Coentrão • Treinador: Queiroz.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 2010:</div>
                <div class="panel-body">
                   1 Eduardo • 2 Bruno Alves • 3 Pepe • 4 Miguel Veloso • 5 Fábio Coentrão • 6 William Carvalho • 7 Cristiano Ronaldo Capitão • 8 João Moutinho • 9 Hugo Almeida • 10 Vieirinha • 11 Éder • 12 Rui Patrício • 13 Ricardo Costa • 14 Luís Neto • 15 Rafa • 16 Raul Meireles • 17 Nani • 18 Varela • 19 André Almeida • 20 Rúben Amorim • 21 João Pereira • 22 Beto • 23 Hélder Postiga • Treinador: Paulo Bento.


                </div>
            </div>                     
            <?php } elseif ($nome == "Austrália") { ?>
            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1974:</div>
                <div class="panel-body">1 Reilly • 2 Utjesenović • 3 Wilson Capitão • 4 Schäfer • 5 Curran • 6 Richards • 7 Rooney • 8 Mackay • 9 Warren • 10 Manuel • 11 Abonyi • 12 Alston • 13 Ollerton • 14 Tolson • 15 Williams • 16 Rudić • 17 Harding • 18 Watkiss • 19 Campbell • 20 Buljević • 21 Milisavljević • 22 Maher • Treinador: Rašić.
                </div>
            </div>


            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 2006:</div>
                <div class="panel-body">
                   1 Schwarzer • 2 Neill • 3 Moore • 4 Cahill • 5 Čulina • 6 Popović • 7 Emerton • 8 Skoko • 9 Viduka Capitão • 10 Kewell • 11 Lazaridis • 12 Čović • 13 Grella • 14 Chipperfield • 15 Aloisi • 16 Beauchamp • 17 Thompson • 18 Kalac • 19 Kennedy • 20 Wilkshire • 21 Sterjovski • 22 Milligan • 23 Bresciano • Treinador: Hiddink.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 2010:</div>
                <div class="panel-body">
                   1 Schwarzer • 2 Neill Capitão • 3 Moore • 4 Cahill • 5 Čulina • 6 Beauchamp • 7 Emerton • 8 Wilkshire • 9 Kennedy • 10 Kewell • 11 Chipperfield • 12 Federici • 13 Grella • 14 Holman • 15 Jedinak • 16 Valeri • 17 Rukavytsya • 18 Galeković • 19 Garcia • 20 Milligan • 21 Carney • 22 Vidošić • 23 Bresciano • Treinador: Verbeek.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 2014:</div>
                <div class="panel-body">
                   1 Ryan • 2 Franjić • 3 Davidson • 4 Cahill • 5 Milligan • 6 Špiranović • 7 Leckie • 8 Wright • 9 Taggart • 10 Halloran • 11 Oar • 12 Langerak • 13 Bozanić • 14 Troisi • 15 Jedinak Capitão • 16 Holland • 17 McKay • 18 Galeković • 19 McGowan • 20 Vidošić • 21 Luongo • 22 Wilkinson • 23 Bresciano • Treinador: Postecoglou.

                </div>
            </div>            
            <?php } elseif ($nome == "Dinamarca") { ?>
            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1986:</div>
                <div class="panel-body">1 Rasmussen • 2 Sivebæk • 3 Busk • 4 M. Olsen Capitão • 5 I. Nielsen • 6 Lerby • 7 Mølby • 8 J. Olsen • 9 Berggreen • 10 Elkjær Larsen • 11 Laudrup • 12 Bertelsen • 13 Frimann • 14 Simonsen • 15 Arnesen • 16 Qvist • 17 K. Nielsen • 18 Christensen • 19 Eriksen • 20 Bartram • 21 Andersen • 22 Høgh • Treinador: Piontek.
                </div>
            </div>


            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1998:</div>
                <div class="panel-body">
                   1 Schmeichel Capitão • 2 Schjønberg • 3 Rieper • 4 Høgh • 5 Heintze • 6 Helveg • 7 Nielsen • 8 Frandsen • 9 Molnar • 10 M. Laudrup • 11 B. Laudrup • 12 Colding • 13 Laursen • 14 Wieghorst • 15 Tøfting • 16 Krogh • 17 Goldbæk • 18 Møller • 19 Sand • 20 Henriksen • 21 Jørgensen • 22 Kjær • Treinador: Johansson.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 2002:</div>
                <div class="panel-body">
                   1 Sørensen • 2 Tøfting • 3 Henriksen • 4 Laursen • 5 Heintze Capitão • 6 Helveg • 7 Gravesen • 8 Grønkjær • 9 Tomasson • 10 Jørgensen • 11 Sand • 12 N. Jensen • 13 Lustü • 14 C. Jensen • 15 Michaelsen • 16 Kjær • 17 Poulsen • 18 Løvenkrands • 19 Rommedahl • 20 Bøgelund • 21 Madsen • 22 Christiansen • 23 Nielsen • Treinador: Olsen.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 2010:</div>
                <div class="panel-body">
                   1 Sørensen • 2 C. Poulsen • 3 Kjær • 4 Agger • 5 Kvist • 6 Jacobsen • 7 Jensen • 8 Grønkjær • 9 Tomasson Capitão • 10 Jørgensen • 11 Bendtner • 12 Kahlenberg • 13 Krøldrup • 14 J. Poulsen • 15 S. Poulsen • 16 Andersen • 17 Beckmann • 18 Larsen • 19 Rommedahl • 20 Enevoldsen • 21 Eriksen • 22 Christiansen • 23 Mtiliga • Treinador: Olsen.

                </div>
            </div>            
            <?php } elseif ($nome == "França") { ?>
            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1930:</div>
                <div class="panel-body">DF Andoire • DF Capelle • MC Chantrel • AT Delfour • MC Delmer • AT Langiller • MC J. Laurent • AT L. Laurent • AT Libérati • AT Maschinot • DF Mattler • MC Pinel • G Tassin • G Thépot • AT Veinante • MC Villaplane • Treinador: Caudron.
                </div>
            </div>


            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1934:</div>
                <div class="panel-body">
                   MC Alcazar • AT Aston • MC Beaucourt • AT Courtois • G Défossé • MC Delfour • MC Delmer • MC Gabrillargues • DF Gonzales • AT Keller • AT Korb • AT Laurent • MC Liétaer • G Llense • DF Mairesse • DF Mattler • AT Nicolas • MC Rio • G Thépot • DF Vandooren • AT Veinante • MC Verriest • Treinador: Kimpton.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1938:</div>
                <div class="panel-body">
                   AT Aston • MC Bastien • DF Ben Bouali • MC Bourbotte • AT Brusseaux • DF Cazenave • AT Courtois • G Darui • AT Delfour • G Di Lorto • MC Diagne • AT Heisserer • MC Jasseron • MC Jordan • AT Kowalczyk • G Llense • DF Mattler • AT Nicolas • DF Povolny • DF Vandooren • AT Veinante • AT Zatelli • Treinador: Barreau.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1954:</div>
                <div class="panel-body">
                   1 Remetter • 2 Ruminski • 3 Abbes • 4 Gianessi • 5 Grimonpon • 6 Kaelbel • 7 Marche • 8 Bieganski • 9 Cuissard • 10 Jonquet Capitão • 11 Louis • 12 Marcel • 13 Mahjoub • 14 Penverne • 15 Ben Tifour • 16 Dereuddre • 17 Glovacki • 18 Kopa • 19 Leblond • 20 Schultz • 21 Strappe • 22 Vincent • Treinador: Pibarot.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1958:</div>
                <div class="panel-body">
                   1 Abbes • 2 Colonna • 3 Remetter • 4 Kaelbel • 5 Lerond • 6 Marche Capitão • 7 Mouynet • 8 Chiarelli • 9 Hnatow • 10 Jonquet • 11 Lafont • 12 Marcel • 13 Penverne • 14 Bellot • 15 Bruey • 16 Douis • 17 Fontaine • 18 Kopa • 19 Oliver • 20 Piantoni • 21 Vincent • 22 Wisnieski • Treinador: Batteux.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1966:</div>
                <div class="panel-body">
                   1 Aubour • 2 Artelesa Capitão • 3 Baraffe • 4 Bonnel • 5 Bosquier • 6 Budzynski • 7 Chorda • 8 Combin • 9 Couécou • 10 De Bourgoing • 11 De Michele • 12 Djorkaeff • 13 Gondet • 14 Hausser • 15 Herbet • 16 Herbin • 17 Muller • 18 Piumi • 19 Robuschi • 20 Simon • 21 Carnus • 22 Schuth • Treinador: Guérin.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1978:</div>
                <div class="panel-body">
                   1 Baratelli • 2 Battiston • 3 Bossis • 4 Janvion • 5 Bracci • 6 Lopez • 7 Rio • 8 Trésor • 9 Bathenay • 10 Guillou • 11 Michel • 12 Papi • 13 Petit • 14 Berdoll • 15 Platini • 16 Dalger • 17 Lacombe • 18 Rocheteau • 19 Six • 20 Rouyer • 21 Bertrand‑Demanes • 22 Dropsy • Treinador: Hidalgo.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1982:</div>
                <div class="panel-body">
                   1 Baratelli • 2 Amoros • 3 Battiston • 4 Bossis • 5 Janvion • 6 Lopez • 7 Mahut • 8 Trésor • 9 Genghini • 10 Platini Capitão • 11 Girard • 12 Giresse • 13 Larios • 14 Tigana • 15 Bellone • 16 Couriol • 17 Lacombe • 18 Rocheteau • 19 Six • 20 Soler • 21 Castaneda • 22 Ettori • Treinador: Hidalgo.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1986:</div>
                <div class="panel-body">
                   1 Bats • 2 Amoros • 3 Ayache • 4 Battiston • 5 Bibard • 6 Bossis • 7 Le Roux • 8 Tusseau • 9 Fernández • 10 Platini Capitão • 11 Ferreri • 12 Giresse • 13 Genghini • 14 Tigana • 15 Vercruysse • 16 Bellone • 17 Papin • 18 Rocheteau • 19 Stopyra • 20 Xuereb • 21 Bergeroo • 22 Rust • Treinador: Michel.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1998:</div>
                <div class="panel-body">
                    1 Lama • 2 Candela • 3 Lizarazu • 4 Vieira • 5 Blanc • 6 Djorkaeff • 7 Deschamps Capitão • 8 Desailly • 9 Guivarc'h • 10 Zidane • 11 Pirès • 12 Henry • 13 Diomède • 14 Boghossian • 15 Thuram • 16 Barthez • 17 Petit • 18 Lebœuf • 19 Karembeu • 20 Trezeguet • 21 Dugarry • 22 Charbonnier • Treinador: Jacquet.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 2002:</div>
                <div class="panel-body">
                   1 Ramé • 2 Candela • 3 Lizarazu • 4 Vieira • 5 Christanval • 6 Djorkaeff • 7 Makélélé • 8 Desailly Capitão • 9 Cissé • 10 Zidane • 11 Wiltord • 12 Henry • 13 Silvestre • 14 Boghossian • 15 Thuram • 16 Barthez • 17 Petit • 18 Lebœuf • 19 Sagnol • 20 Trezeguet • 21 Dugarry • 22 Micoud • 23 Coupet • Treinador: Lemerre.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 2006:</div>
                <div class="panel-body">
                   1 Landreau • 2 Boumsong • 3 Abidal • 4 Vieira • 5 Gallas • 6 Makélélé • 7 Malouda • 8 Dhorasoo • 9 Govou • 10 Zidane Capitão • 11 Wiltord • 12 Henry • 13 Silvestre • 14 Saha • 15 Thuram • 16 Barthez • 17 Givet • 18 Diarra • 19 Sagnol • 20 Trezeguet • 21 Chimbonda • 22 Ribéry • 23 Coupet • Treinador: Domenech.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 2010:</div>
                <div class="panel-body">
                   1 Lloris • 2 Sagna • 3 Abidal • 4 Réveillère • 5 Gallas • 6 Planus • 7 Ribéry • 8 Gourcuff • 9 Cissé • 10 Govou • 11 Gignac • 12 Henry • 13 Evra Capitão • 14 Toulalan • 15 Malouda • 16 Mandanda • 17 Squillaci • 18 Diarra • 19 Diaby • 20 Valbuena • 21 Anelka • 22 Clichy • 23 Carrasso • Treinador: Domenech.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 2014:</div>
                <div class="panel-body">
                   1 Lloris Capitão • 2 Debuchy • 3 Evra • 4 Varane • 5 Sakho • 6 Cabaye • 7 Cabella • 8 Valbuena • 9 Giroud • 10 Benzema • 11 Griezmann • 12 Mavuba • 13 Mangala • 14 Matuidi • 15 Sagna • 16 Ruffier • 17 Digne • 18 Sissoko • 19 Pogba • 20 Rémy • 21 Koscielny • 22 Schneiderlin • 23 Landreau • Treinador: Deschamps.

                </div>
            </div>            
            <?php } elseif ($nome == "Peru") { ?>
            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1930:</div>
                <div class="panel-body">MC Astengo • AT Cillóniz • DF De las Casas • MC Denegri • DF Fernández • MC Galindo • MC García • AT Góngora • AT Lavalle • AT Lores • DF Maquilón • AT Neyra • AT Pacheco • G Pardón • MC Quintana • AT Rodríguez Nue • AT Sarmiento • DF Soria • AT Souza Ferreira • G Valdivieso • MC Valle • AT Villanueva • Treinador: Bru.
                </div>
            </div>


            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1970:</div>
                <div class="panel-body">
                   1 Rubiños • 2 Campos • 3 De la Torre • 4 Chumpitaz Capitão • 5 Fuentes • 6 Mifflin • 7 Challe • 8 Baylón • 9 León • 10 Cubillas • 11 Gallardo • 12 Correa • 13 P. Gonzales • 14 Fernández • 15 J. Gonzales • 16 Salinas • 17 Cruzado • 18 Del Castillo • 19 Reyes • 20 Sotil • 21 Goyzueta • 22 Ramírez • Treinador: Didi.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1978:</div>
                <div class="panel-body">
                   1 Sartor • 2 Duarte • 3 Manzo • 4 Chumpitaz Capitão • 5 Díaz • 6 Velásquez • 7 Muñante • 8 Cueto • 9 P. Rojas • 10 Cubillas • 11 Oblitas • 12 Mosquera • 13 Cáceres • 14 Navarro • 15 Leguía • 16 Gorriti • 17 Quesada • 18 Labarthe • 19 La Rosa • 20 Sotil • 21 Quiroga • 22 R. Rojas • Treinador: Calderón.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1982:</div>
                <div class="panel-body">
                   1 Acasuzo • 2 Duarte • 3 Salguero • 4 Gastulo • 5 Leguía • 6 Velásquez • 7 Barbadillo • 8 Cueto • 9 Uribe • 10 Cubillas • 11 Oblitas • 12 González Ganoza • 13 Arizaga • 14 Gutiérrez • 15 Díaz Capitão • 16 Olaechea • 17 Navarro • 18 Malásquez • 19 La Rosa • 20 Rojas • 21 Quiroga • 22 Reyna • Treinador: Tim.

                </div>
            </div>      
            <?php } elseif ($nome == "Argentina") { ?>
            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1930:</div>
                <div class="panel-body">G Bossio • G Botasso • AT Cherro • DF Chividini • AT Demaría • DF Della Torre • MC J. Evaristo • AT M. Evaristo • AT Ferreira • MC Monti • DF Muttis • DF Orlandini • DF Paternoster • AT Perinetti • AT Peucelle • DF Piaggio • AT Scopelli • AT Spadaro • AT Stábile • MC Suárez • AT Varallo • DF Zumelzú • Treinador: Olazar & Tramutola.
                </div>
            </div>


            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1934:</div>
                <div class="panel-body">
                   MC Albarracín • DF Astudillo • DF Belis • DF Chimento • AT Devincenzi • G Freschi • AT Galateo • G Grippa • AT Irañeta • AT Izzeta • MC López • MC Lorenzo • MC Nehin • DF Pedevilla • AT Pérez • AT Rúa • MC Urbieta Sosa • AT Wilde • Treinador: Pascucci.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1958:</div>
                <div class="panel-body">
                   1 Carrizo • 2 Dellacha Capitão • 3 Vairo • 4 Lombardo • 5 Rossi • 6 Varacka • 7 Corbatta • 8 Prado • 9 Menéndez • 10 Rojas • 11 Labruna • 12 Musimessi • 13 Pérez • 14 Edwards • 15 Acevedo • 16 Mouriño • 17 Ramos Delgado • 18 Boggio • 19 Avio • 20 Infante • 21 Sanfilippo • 22 Cruz • Treinador: Stábile.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1962:</div>
                <div class="panel-body">
                   1 Roma • 2 Ramos Delgado • 3 Marzolini • 4 Sáinz • 5 Sacchi • 6 Páez • 7 Facundo • 8 Pando • 9 Pagani • 10 Sanfilippo • 11 Belén • 12 Domínguez • 13 Rossi • 14 Mariotti • 15 Navarro Capitão • 16 Rattín • 17 Albrecht • 18 Cap • 19 Sosa • 20 Oleniak • 21 Abeledo • 22 González • Treinador: Lorenzo.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1966:</div>
                <div class="panel-body">
                   1 Roma • 2 Irusta • 3 Gatti • 4 Perfumo • 5 Varacka • 6 Calics • 7 Marzolini • 8 Ferreiro • 9 Simeone • 10 Rattín Capitão • 11 Pastoriza • 12 Albrecht • 13 López • 14 Chaldú • 15 Solari • 16 González • 17 Sarnari • 18 Rojas • 19 Artime • 20 Onega • 21 Más • 22 Tarabini • Treinador: Lorenzo.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1974:</div>
                <div class="panel-body">
                   1 Carnevali • 2 Ayala • 3 Babington • 4 Balbuena • 5 Bargas • 6 Brindisi • 7 Carrascosa • 8 Chazarreta • 9 Glaria • 10 Heredia • 11 Houseman • 12 Fillol • 13 Kempes • 14 Perfumo Capitão • 15 Poy • 16 Sá • 17 Squeo • 18 Telch • 19 Togneri • 20 Wolff • 21 Santoro • 22 Yazalde • Treinador: Cap.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1978:</div>
                <div class="panel-body">
                   1 Alonso • 2 Ardiles • 3 Baley • 4 Bertoni • 5 Fillol • 6 Gallego • 7 L. Galván • 8 R. Galván • 9 Houseman • 10 Kempes • 11 Killer • 12 Larrosa • 13 La Volpe • 14 Luque • 15 Olguín • 16 Ortiz • 17 Oviedo • 18 Pagnanini • 19 Passarella Capitão • 20 Tarantini • 21 Valencia • 22 Villa • Treinador: Menotti.


                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1982:</div>
                <div class="panel-body">
                   1 Ardiles • 2 Baley • 3 Barbas • 4 Bertoni • 5 Calderón • 6 Díaz • 7 Fillol • 8 Galván • 9 Gallego • 10 Maradona • 11 Kempes • 12 Hernández • 13 Olarticoechea • 14 Olguín • 15 Passarella Capitão • 16 Pumpido • 17 Santamaría • 18 Tarantini • 19 Trossero • 20 Valdano • 21 Valencia • 22 Van Tuyne • Treinador: Menotti.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1986:</div>
                <div class="panel-body">
                   1 Almirón • 2 Batista • 3 Bochini • 4 Borghi • 5 Brown • 6 Passarella • 7 Burruchaga • 8 Clausen • 9 Cuciuffo • 10 Maradona Capitão • 11 Valdano • 12 Enrique • 13 Garré • 14 Giusti • 15 Islas • 16 Olarticoechea • 17 Pasculli • 18 Pumpido • 19 Ruggeri • 20 Tapia • 21 Trobbiani • 22 Zelada • Treinador: Bilardo.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1990:</div>
                <div class="panel-body">
                   1 Pumpido (Comizzo) • 2 Batista • 3 Balbo • 4 Basualdo • 5 Bauza • 6 Calderón • 7 Burruchaga • 8 Caniggia • 9 Dezotti • 10 Maradona Capitão • 11 Fabbri • 12 Goycochea • 13 Lorenzo • 14 Giusti • 15 Monzón • 16 Olarticoechea • 17 Sensini • 18 Serrizuela • 19 Ruggeri • 20 Simón • 21 Troglio • 22 Cancelarich • Treinador: Bilardo.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1994:</div>
                <div class="panel-body">
                   1 Goycochea • 2 Vázquez • 3 Chamot • 4 Sensini • 5 Redondo • 6 Ruggeri Capitão • 7 Caniggia • 8 Basualdo • 9 Batistuta • 10 Maradona • 11 Medina Bello • 12 Islas • 13 Cáceres • 14 Simeone • 15 Borelli • 16 Díaz • 17 Ortega • 18 Pérez • 19 Balbo • 20 Rodríguez • 21 Mancuso • 22 Scoponi • Treinador: Basile.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1998:</div>
                <div class="panel-body">
                   1 Roa • 2 Ayala • 3 Chamot • 4 Pineda • 5 Almeyda • 6 Sensini • 7 López • 8 Simeone Capitão • 9 Batistuta • 10 Ortega • 11 Verón • 12 Burgos • 13 Paz • 14 Vivas • 15 Astrada • 16 Berti • 17 Cavallero • 18 Balbo • 19 Crespo • 20 Gallardo • 21 Delgado • 22 Zanetti • Treinador: Passarella.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 2002:</div>
                <div class="panel-body">
                   1 Burgos • 2 Ayala • 3 Sorín • 4 Pochettino • 5 Almeyda • 6 Samuel • 7 C. López • 8 Zanetti • 9 Batistuta • 10 Ortega • 11 Verón Capitão • 12 Cavallero • 13 Placente • 14 Simeone • 15 Husaín • 16 Aimar • 17 G. López • 18 Kily González • 19 Crespo • 20 Gallardo • 21 Caniggia • 22 Chamot • 23 Bonano • Treinador: Marcelo Bielsa.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 2006:</div>
                <div class="panel-body">
                   1 Abbondanzieri • 2 Ayala • 3 Sorín Capitão • 4 Coloccini • 5 Cambiasso • 6 Heinze • 7 Saviola • 8 Mascherano • 9 Crespo • 10 Riquelme • 11 Tévez • 12 Franco • 13 Scaloni • 14 Palacio • 15 Milito • 16 Aimar • 17 Cufré • 18 Maxi Rodríguez • 19 Messi • 20 Cruz • 21 Burdisso • 22 Lucho González • 23 Ustari • Treinador: Pekerman.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 2010:</div>
                <div class="panel-body">
                   1 Pozo • 2 Demichelis • 3 C. Rodríguez • 4 Burdisso • 5 Bolatti • 6 Heinze • 7 Di María • 8 Verón • 9 Higuaín • 10 Messi • 11 Tévez • 12 Garcé • 13 Samuel • 14 Mascherano Capitão • 15 Otamendi • 16 Agüero • 17 Jonás • 18 Palermo • 19 Milito • 20 Maxi Rodríguez • 21 Andújar • 22 Romero • 23 Pastore • Treinador: Maradona.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 2014:</div>
                <div class="panel-body">
                   1 Romero • 2 Garay • 3 Campagnaro • 4 Zabaleta • 5 Gago • 6 Biglia • 7 Di María • 8 Pérez • 9 Higuaín • 10 Messi Capitão • 11 Maxi Rodríguez • 12 Orión • 13 A. Fernández • 14 Mascherano • 15 Demichelis • 16 Rojo • 17 F. Fernández • 18 Palacio • 19 Álvarez • 20 Agüero • 21 Andújar • 22 Lavezzi • 23 Basanta • Treinador: Sabella.

                </div>
            </div>            
            <?php } elseif ($nome == "Croácia") { ?>
            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1998:</div>
                <div class="panel-body">1 Ladić • 2 Krpan • 3 Šerić • 4 Štimac • 5 Jurić • 6 Bilić • 7 Asanović • 8 Prosinečki • 9 Šuker • 10 Boban Capitão • 11 Marić • 12 Mrmić • 13 Stanić • 14 Soldo • 15 Tudor • 16 Kozniku • 17 Jarni • 18 Mamić • 19 Vlaović • 20 Šimić • 21 Jurčić • 22 Vasilj • Treinador: Blažević.
                </div>
            </div>


            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 2002:</div>
                <div class="panel-body">
                   1 Pletikosa • 2 Šerić • 3 Šimunić • 4 Tomas • 5 Rapaić • 6 Živković • 7 Vugrinec • 8 Prosinečki • 9 Šuker Capitão • 10 N. Kovač • 11 Bokšić • 12 Butina • 13 Stanić • 14 Soldo • 15 Šarić • 16 Vranješ • 17 Jarni • 18 Olić • 19 Vlaović • 20 Šimić • 21 R. Kovač • 22 Balaban • 23 Vasilj • Treinador: Jozić.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 2006:</div>
                <div class="panel-body">
                    1 Pletikosa • 2 Srna • 3 Šimunić • 4 R. Kovač • 5 Tudor • 6 Vranješ • 7 Šimić • 8 Babić • 9 Pršo • 10 N. Kovač Capitão • 11 Tokić • 12 Didulica • 13 Tomas • 14 Modrić • 15 I. Leko • 16 J. Leko • 17 Klasnić • 18 Olić • 19 N. Kranjčar • 20 Šerić • 21 Balaban • 22 Bošnjak • 23 Butina • Treinador: Z. Kranjčar.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 2014:</div>
                <div class="panel-body">
                    1 Pletikosa • 2 Vrsaljko • 3 Pranjić • 4 Perišić • 5 Ćorluka • 6 Lovren • 7 Rakitić • 8 Vukojević • 9 Jelavić • 10 Modrić • 11 Srna Capitão • 12 Zelenika • 13 Schildenfeld • 14 Brozović • 15 Badelj • 16 Rebić • 17 Mandžukić • 18 Olić • 19 Sammir • 20 Kovačić • 21 Vida • 22 Eduardo • 23 Subašić • Treinador: Kovač.

                </div>
            </div>            
            <?php } elseif ($nome == "Islândia") { ?>
            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA</div>
                <div class="panel-body">
                </div>
            </div>            
            <?php } elseif ($nome == "Nigéria") { ?>
            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1994:</div>
                <div class="panel-body">1 Rufai Capitão • 2 Eguavoen • 3 Iroha • 4 Keshi • 5 Okechukwu • 6 Nwanu • 7 Finidi • 8 Oliha • 9 Yekini • 10 Okocha • 11 Amuneke • 12 Siasia • 13 Ezeugo • 14 Amokachi • 15 Oliseh • 16 Agu • 17 Ikpeba • 18 Ekoku • 19 Emenalo • 20 Okafor • 21 Adepoju • 22 Agbonavbare • Treinador: Westerhof.
                </div>
            </div>


            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1998:</div>
                <div class="panel-body">
                  1 Rufai • 2 Oparaku • 3 Babayaro • 4 Kanu • 5 Uche Capitão • 6 West • 7 Finidi • 8 Adepoju • 9 Yekini • 10 Okocha • 11 Lawal • 12 W. Okpara • 13 Babangida • 14 Amokachi • 15 Oliseh • 16 Okafor • 17 Eguavoen • 18 Oruma • 19 Iroha • 20 Ikpeba • 21 G. Okpara • 22 Baruwa • Treinador: Milutinović.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 2002:</div>
                <div class="panel-body">
                  1 Shorunmu • 2 Yobo • 3 Babayaro • 4 Kanu • 5 Okoronkwo • 6 West • 7 Ikedia • 8 Adepoju • 9 Ogbeche • 10 Okocha Capitão • 11 Lawal • 12 Ejide • 13 Afolabi • 14 Udeze • 15 Justice • 16 Sodje • 17 Aghahowa • 18 Akwuegbu • 19 Ejiofor • 20 Obiorah • 21 Utaka • 22 Enyeama • 23 Opabunmi • Treinador: Onigbinde.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 2010:</div>
                <div class="panel-body">
                   1 Enyeama • 2 Yobo • 3 Taiwo • 4 Kanu Capitão • 5 Afolabi • 6 Shittu • 7 Utaka • 8 Yakubu • 9 Martins • 10 Ideye • 11 Odemwingie • 12 Uche • 13 Yussuf • 14 Kaita • 15 Haruna • 16 Ejide • 17 Odiah • 18 Obinna • 19 Obasi • 20 Etuhu • 21 Elderson • 22 Adeleye • 23 Aiyenugba • Treinador: Lagerbäck.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 2014:</div>
                <div class="panel-body">
                   1 Enyeama • 2 Yobo Capitão • 3 Uzoenyi • 4 Gabriel • 5 Ambrose • 6 Egwuekwe • 7 Musa • 8 Odemwingie • 9 Emenike • 10 Mikel • 11 Moses • 12 Odunlami • 13 Oshaniwa • 14 Oboabona • 15 Azeez • 16 Ejide • 17 Onazi • 18 Babatunde • 19 Nwofor • 20 Uchebo • 21 Agbim • 22 Omeruo • 23 Ameobi • Treinador: Keshi.

                </div>
            </div>            
            <?php } elseif ($nome == "Costa Rica") { ?>
            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1990:</div>
                <div class="panel-body">1 Conejo • 2 Quesada • 3 Flores Capitão • 4 González • 5 Obando • 6 Chaves • 7 Medford • 8 Chavarría • 9 Guimarães • 10 Ramírez • 11 C. Jara • 12 Gómez • 13 Davis • 14 Cayasso • 15 Marín • 16 Jaikel • 17 Myers • 18 G. Jara • 19 Marchena • 20 Montero • 21 Barrantes • 22 Segura • Treinador: Milutinović.
                </div>
            </div>


            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 2002:</div>
                <div class="panel-body">
                  1 Lonnis • 2 Drummond • 3 Marín • 4 Wright • 5 Martínez • 6 López • 7 Fonseca • 8 Solís • 9 Wanchope • 10 Centeno • 11 Gómez • 12 Parks • 13 Vallejos • 14 Rodríguez • 15 Wallace • 16 Bryce • 17 Medford Capitão • 18 Mesén • 19 Cordero • 20 Sunsing • 21 Chinchilla • 22 Castro • 23 Morgan • Treinador: Guimarães.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 2006:</div>
                <div class="panel-body">
                  1 Mesén • 2 Drummond • 3 Marín Capitão • 4 Umaña • 5 Martínez • 6 Fonseca • 7 Bolaños • 8 Solís • 9 Wanchope • 10 Centeno • 11 Gómez • 12 González • 13 Bernard • 14 Azofeifa • 15 Wallace • 16 Hernández • 17 Badilla • 18 Porras • 19 Saborío • 20 Sequeira • 21 Núñez • 22 Rodríguez • 23 Alfaro • Treinador: Guimarães.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 2014:</div>
                <div class="panel-body">
                   1 Navas • 2 Acosta • 3 González • 4 Umaña • 5 Borges • 6 Duarte • 7 Bolaños • 8 Myrie • 9 Campbell • 10 Ruiz Capitão • 11 Barrantes • 12 Francis • 13 Granados • 14 Brenes • 15 Díaz • 16 Gamboa • 17 Tejeda • 18 Pemberton • 19 Miller • 20 Calvo • 21 Ureña • 22 Cubero • 23 Cambronero • Treinador: Pinto.

                </div>
            </div>            
            <?php } elseif ($nome == "Brasil") { ?>
            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1930:</div>
                <div class="panel-body">AT Araken Patusca • AT Benedicto • MC Benevenuto • DF Brilhante • AT Carvalho Leite • AT Doca • MC Fausto • MC Fernando • MC Fortes • MC Hermógenes • DF Itália • MC Ivan • G Joel • MC Manuelzinho • AT Moderato • AT Nilo • MC Oscarino • MC Pamplona • AT Poli • AT Preguinho Capitão • AT Russinho • AT Teóphilo • G Velloso • DF Zé Luís • Treinador: Carvalho.
                </div>
            </div>


            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1934:</div>
                <div class="panel-body">
                  MC Ariel • AT Armandinho • AT Áttila • MC Canalli • AT Carvalho Leite • G Germano • AT Leônidas da Silva • DF Luís Luz • AT Luisinho • MC Martim Silveira Capitão • DF Octacílio • AT Patesko • G Pedrosa • DF Sylvio • MC Tinoco • MC Waldyr • AT Waldemar de Brito • Treinador: Vinhais.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1938:</div>
                <div class="panel-body">
                  MC Afonsinho • MC Argemiro • G Batatais • MC Brandão • MC Brito • DF Domingos da Guia • AT Hércules • DF Jaú • AT Leônidas Capitão • AT Lopes • AT Luisinho • DF Machado • MC Martim Silveira Capitão • DF Nariz • AT Niginho • AT Patesko • AT Perácio • AT Roberto • AT Romeu • AT Tim • G Walter • MC Zezé Procópio • Treinador: Pimenta.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">1950:</div>
                <div class="panel-body">
                   1 Barbosa • 2 Castilho • 3 Augusto da Costa Capitão • 4 Ely • 5 Juvenal • 6 Nena • 7 Nílton Santos • 8 Bauer • 9 Bigode • 10 Danilo • 11 Noronha • 12 Rui • 13 Adãozinho • 14 Ademir • 15 Alfredo • 16 Baltazar • 17 Chico • 18 Friaça • 19 Jair • 20 Maneca • 21 Rodrigues • 22 Zizinho • Treinador: Flávio Costa.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1954:</div>
                <div class="panel-body">
                  1 Castilho • 2 Djalma Santos • 3 Nílton Santos • 4 Brandãozinho • 5 Pinheiro • 6 Bauer Capitão • 7 Julinho • 8 Didi • 9 Baltazar • 10 Pinga • 11 Rodrigues • 12 Paulinho de Almeida • 13 Alfredo Ramos • 14 Ely • 15 Mauro • 16 Dequinha • 17 Maurinho • 18 Humberto • 19 Índio • 20 Rubens • 21 Veludo • 22 Cabeção • Treinador: Zezé Moreira.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1958:</div>
                <div class="panel-body">
                  1 Castilho • 2 Bellini Capitão • 3 Gilmar • 4 Djalma Santos • 5 Dino Sani • 6 Didi • 7 Zagallo • 8 Oreco • 9 Zózimo • 10 Pelé • 11 Garrincha • 12 Nílton Santos • 13 Moacir • 14 de Sordi • 15 Orlando • 16 Mauro • 17 Joel • 18 Mazzola • 19 Zito • 20 Vavá • 21 Dida • 22 Pepe • Treinador: Feola.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1962:</div>
                <div class="panel-body">
                  1 Gilmar • 2 Djalma Santos • 3 Mauro Ramos Capitão • 4 Zito • 5 Zózimo • 6 Nílton Santos • 7 Garrincha • 8 Didi • 9 Coutinho • 10 Pelé • 11 Pepe • 12 Jair Marinho • 13 Bellini • 14 Jurandir • 15 Altair • 16 Zequinha • 17 Mengálvio • 18 Jair da Costa • 19 Vavá • 20 Amarildo • 21 Zagallo • 22 Castilho • Treinador: Aymoré Moreira.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1966:</div>
                <div class="panel-body">
                  1 Gilmar • 2 Djalma Santos • 3 Fidélis • 4 Bellini Capitão • 5 Brito • 6 Altair • 7 Orlando Capitão • 8 Paulo Henrique • 9 Rildo • 10 Pelé • 11 Gérson • 12 Manga • 13 Denílson • 14 Lima • 15 Zito • 16 Garrincha • 17 Jairzinho • 18 Alcindo • 19 Silva • 20 Tostão • 21 Paraná • 22 Edu • Treinador: Vicente Feola.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1970:</div>
                <div class="panel-body">
                  1 Félix • 2 Brito • 3 Wilson Piazza • 4 Carlos Alberto Capitão • 5 Clodoaldo • 6 Marco Antônio • 7 Jairzinho • 8 Gérson • 9 Tostão • 10 Pelé • 11 Rivellino • 12 Ado • 13 Roberto • 14 Baldocchi • 15 Fontana • 16 Everaldo • 17 Joel • 18 Paulo Cézar Caju • 19 Edu • 20 Dadá Maravilha • 21 Zé Maria • 22 Leão • Treinador: Zagallo.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1974:</div>
                <div class="panel-body">
                  1 Leão • 2 Luís Pereira • 3 Marinho Peres Capitão • 4 Zé Maria • 5 Piazza Capitão • 6 Marinho Chagas • 7 Jairzinho • 8 Leivinha • 9 César Maluco • 10 Rivellino • 11 Paulo Cézar Caju • 12 Renato • 13 Valdomiro • 14 Nelinho • 15 Alfredo Mostarda • 16 Marco Antônio • 17 Carpegiani • 18 Ademir • 19 Mirandinha • 20 Edu • 21 Dirceu • 22 Waldir Peres • Treinador: Zagallo.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1978:</div>
                <div class="panel-body">
                 1 Leão Capitão • 2 Toninho • 3 Oscar • 4 Amaral • 5 Toninho Cerezo • 6 Edinho • 7 Zé Sérgio • 8 Zico • 9 Reinaldo • 10 Rivellino • 11 Dirceu • 12 Carlos • 13 Nelinho • 14 Abel • 15 Polozzi • 16 Rodrigues Neto • 17 Batista • 18 Gil • 19 Jorge Mendonça • 20 Roberto Dinamite • 21 Chicão • 22 Waldir Peres • Treinador: Cláudio Coutinho.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1982:</div>
                <div class="panel-body">
                  1 Waldir Peres • 2 Leandro • 3 Oscar • 4 Luizinho • 5 Toninho Cerezo • 6 Júnior • 7 Paulo Isidoro • 8 Sócrates Capitão • 9 Serginho • 10 Zico • 11 Éder • 12 Paulo Sérgio • 13 Edevaldo • 14 Juninho Fonseca • 15 Falcão • 16 Edinho • 17 Pedrinho • 18 Batista • 19 Renato • 20 Roberto Dinamite • 21 Dirceu • 22 Carlos • Treinador: Telê.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1986:</div>
                <div class="panel-body">
                  1 Carlos • 2 Édson • 3 Oscar • 4 Edinho Capitão • 5 Falcão • 6 Júnior • 7 Müller • 8 Casagrande • 9 Careca • 10 Zico • 11 Edivaldo • 12 Paulo Vítor • 13 Josimar • 14 Júlio César • 15 Alemão • 16 Mauro Galvão • 17 Branco • 18 Sócrates • 19 Elzo • 20 Silas • 21 Valdo • 22 Leão • Treinador: Telê.


                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1990:</div>
                <div class="panel-body">
                  1 Taffarel • 2 Jorginho • 3 Ricardo Gomes Capitão • 4 Dunga • 5 Alemão • 6 Branco • 7 Bismarck • 8 Valdo • 9 Careca • 10 Silas • 11 Romário • 12 Acácio • 13 Mozer • 14 Aldair • 15 Müller • 16 Bebeto • 17 Renato Gaúcho • 18 Mazinho • 19 Ricardo Rocha • 20 Tita • 21 Mauro Galvão • 22 Zé Carlos • Treinador: Lazaroni.


                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1994:</div>
                <div class="panel-body">
                  1 Taffarel • 2 Jorginho • 3 Ricardo Rocha • 4 Ronaldão • 5 Mauro Silva • 6 Branco • 7 Bebeto • 8 Dunga Capitão • 9 Zinho • 10 Raí • 11 Romário • 12 Zetti • 13 Aldair • 14 Cafu • 15 Márcio Santos • 16 Leonardo • 17 Mazinho • 18 Paulo Sérgio • 19 Müller • 20 Ronaldo • 21 Viola • 22 Gilmar • Treinador: Parreira.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1998:</div>
                <div class="panel-body">
                  1 Taffarel • 2 Cafu • 3 Aldair • 4 Júnior Baiano‎ • 5 César Sampaio • 6 Roberto Carlos • 7 Giovanni • 8 Dunga Capitão • 9 Ronaldo • 10 Rivaldo • 11 Emerson • 12 Carlos Germano • 13 Zé Carlos • 14 Gonçalves • 15 André Cruz • 16 Zé Roberto • 17 Doriva • 18 Leonardo • 19 Denílson • 20 Bebeto • 21 Edmundo • 22 Dida • Treinador: Zagallo.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 2002:</div>
                <div class="panel-body">
                  1 Marcos • 2 Cafu Capitão • 3 Lúcio • 4 Roque Júnior • 5 Edmílson • 6 Roberto Carlos • 7 Ricardinho • 8 Gilberto Silva • 9 Ronaldo • 10 Rivaldo • 11 Ronaldinho • 12 Dida • 13 Belletti • 14  nderson Polga • 15 Kléberson • 16 Júnior • 17 Denílson • 18 Vampeta • 19 Juninho Paulista • 20 Edílson • 21 Luizão • 22 Rogério Ceni • 23 Kaká • Treinador: Scolari.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 2006:</div>
                <div class="panel-body">
                  1 Dida • 2 Cafu Capitão • 3 Lúcio • 4 Juan • 5 Emerson • 6 Roberto Carlos • 7 Adriano • 8 Kaká • 9 Ronaldo • 10 Ronaldinho • 11 Zé Roberto • 12 Rogério Ceni • 13 Cicinho • 14 Luisão • 15 Cris • 16 Gilberto • 17 Gilberto Silva • 18 Mineiro • 19 Juninho Pernambucano • 20 Ricardinho • 21 Fred • 22 Júlio César • 23 Robinho • Treinador: Parreira.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 2010:</div>
                <div class="panel-body">
                  1 Júlio César • 2 Maicon • 3 Lúcio Capitão • 4 Juan • 5 Felipe Melo • 6 Michel Bastos • 7 Elano • 8 Gilberto Silva • 9 Luís Fabiano • 10 Kaká • 11 Robinho • 12 Gomes • 13 Daniel Alves • 14 Luisão • 15 Thiago Silva • 16 Gilberto • 17 Josué • 18 Ramires • 19 Júlio Baptista • 20 Kléberson • 21 Nilmar • 22 Doni • 23 Grafite • Treinador: Dunga.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 2014:</div>
                <div class="panel-body">
                  1 Jefferson • 2 Daniel Alves • 3 Thiago Silva Capitão • 4 David Luiz • 5 Fernandinho • 6 Marcelo • 7 Hulk • 8 Paulinho • 9 Fred • 10 Neymar • 11 Oscar • 12 Júlio César • 13 Dante • 14 Maxwell • 15 Henrique • 16 Ramires • 17 Luiz Gustavo • 18 Hernanes • 19 Willian • 20 Bernard • 21 Jô • 22 Victor • 23 Maicon • Treinador: Luiz Felipe Scolari.

                </div>
            </div>            
            <?php } elseif ($nome == "Sérvia") { ?>
            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 2010:</div>
                <div class="panel-body">1 Stojković • 2 Rukavina • 3 Kolarov • 4 Kačar • 5 Vidić • 6 Ivanović • 7 Tošić • 8 Lazović • 9 Pantelić • 10 Stanković Capitão • 11 Milijaš • 12 Isailović • 13 Luković • 14 Jovanović • 15 Žigić • 16 Obradović • 17 Krasić • 18 Ninković • 19 Petrović • 20 Subotić • 21 Mrđa • 22 Kuzmanović • 23 Đuričić • Treinador: Antić.
                </div>
            </div>            
            <?php } elseif ($nome == "Suíça") { ?>
            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1934:</div>
                <div class="panel-body">AT Abegglen • G Bizzozero • AT Bossi • AT Büche • AT Bühler • MC Frick • DF Gobet • MC Guinchard • AT Hochsträsser • G Huber • MC Hufschmid • MC Jaccard • AT Jäck • AT Jäggi • AT Kielholz • MC Loichot • DF Minelli • DF Ortelli • AT Passello • G Séchehaye • AT Von Känel • DF M. Weiler • DF W. Weiler • Treinador: Müller.
                </div>
            </div>


            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1938:</div>
                <div class="panel-body">
                  AT Abegglen • AT G. Aeby • AT P. Aeby • AT Amadò • G Ballabio • AT Bickel • G Bizzozero • AT Frigerio • AT Grassi • MC Guinchard • G Huber • AT Kielholz • DF Lehmann • MC Lörtscher • DF Minelli • MC Rauch • AT Rupf • MC Springer • DF Stelzer • MC Vernati • AT Wagner • AT Walaschek • Treinador: Rappan.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1950:</div>
                <div class="panel-body">
                  AT Antenen • AT Bader • AT Beerli • AT Bickel • DF Bocquet • G Corrodi • MC Eggimann • AT Fatton • AT Friedländer • DF Gyger • G Hug • DF Kernen • DF Lusenti • DF Neury • MC Quinche • DF Rey • AT Schneiter • AT Siegenthaler • DF Soldini • DF Steffen • G Stuber • AT Tamini • Treinador: Andreoli.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1954:</div>
                <div class="panel-body">
                   1 Eich • 2 Parlier • 3 Stuber • 4 Bocquet Capitão • 5 Flückiger • 6 Mathis • 7 Neury • 8 Bigler • 9 Casali • 10 Eggimann • 11 Eschmann • 12 Fesselet • 13 Frosio • 14 Kernen • 15 Antenen • 16 Ballaman • 17 Fatton • 18 Hügi • 19 Mauron • 20 Meier • 21 Riva • 22 Vonlanthen • Treinador: Rappan.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1962:</div>
                <div class="panel-body">
                   1 Elsener • 2 Permunian • 3 Stettler • 4 Kernen • 5 Morf • 6 Rösch • 7 Schneiter • 8 Tacchella • 9 Grobéty • 10 Kehl • 11 Meier • 12 M. Vonlanthen • 13 Weber • 14 Allemann • 15 Antenen Capitão • 16 Dürr • 17 Eschmann • 18 Pottier • 19 Rey • 20 R. Vonlanthen • 21 Wüthrich • 22 Frigerio • Treinador: Rappan.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1966:</div>
                <div class="panel-body">
                   1 Elsener • 2 Allemann • 3 Armbruster • 4 Bäni • 5 Brodmann Capitão • 6 Dürr • 7 Führer • 8 Gottardi • 9 Grobéty • 10 Hosp • 11 Kuhn • 12 Eichmann • 13 Künzli • 14 Leimgruber • 15 Odermatt • 16 Quentin • 17 Schindelholz • 18 Schneiter • 19 Stierli • 20 Tacchella • 21 Vuilleumier • 22 Prosperi • Treinador: Foni.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1994:</div>
                <div class="panel-body">
                   1 Pascolo • 2 Hottiger • 3 Quentin • 4 Herr • 5 Geiger Capitão • 6 Bregy • 7 Sutter • 8 Ohrel • 9 Knup • 10 Sforza • 11 Chapuisat • 12 Lehmann • 13 Egli • 14 Subiat • 15 Grassi • 16 Bickel • 17 Fournier • 18 Rueda • 19 Studer • 20 Sylvestre • 21 Wyss • 22 Brunner • Treinador: Hodgson.

                </div>
            </div>

             <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 2006:</div>
                <div class="panel-body">
                   1 Zuberbühler • 2 Djourou • 3 Magnin • 4 Senderos • 5 Margairaz • 6 Vogel Capitão • 7 Cabanas • 8 Wicky • 9 Frei • 10 Gygax • 11 Streller • 12 Benaglio • 13 Grichting • 14 D. Degen • 15 Džemaili • 16 Barnetta • 17 Spycher • 18 Lustrinelli • 19 Behrami • 20 Müller • 21 Coltorti • 22 Yakın • 23 P. Degen • Treinador: Kuhn.


                </div>
            </div>

             <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 2010:</div>
                <div class="panel-body">
                   1 Benaglio • 2 Lichtsteiner • 3 Magnin • 4 Senderos • 5 Von Bergen • 6 Huggel • 7 Barnetta • 8 İnler • 9 Frei Capitão • 10 Nkufo • 11 Behrami • 12 Wölfli • 13 Grichting • 14 Padalino • 15 Yakın • 16 Fernandes • 17 Ziegler • 18 Bunjaku • 19 Derdiyok • 20 Schwegler • 21 Leoni • 22 Eggimann • 23 Shaqiri • Treinador: Hitzfeld.

                </div>
            </div>

             <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 2014:</div>
                <div class="panel-body">
                   1 Benaglio • 2 Lichtsteiner • 3 Ziegler • 4 Senderos • 5 Von Bergen • 6 Lang • 7 Barnetta • 8 İnler Capitão • 9 Seferović • 10 Xhaka • 11 Behrami • 12 Sommer • 13 Rodríguez • 14 Stocker • 15 Džemaili • 16 Fernandes • 17 Gavranović • 18 Mehmedi • 19 Drmić • 20 Djourou • 21 Bürki • 22 Schär • 23 Shaqiri • Treinador: Hitzfeld.

                </div>
            </div>            
            <?php } elseif ($nome == "Alemanha") { ?>
            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1934:</div>
                <div class="panel-body">AT Albrecht • MC Bender • G Buchloh • DF Busch • AT Conen • AT Dienert • MC Gramlich • DF Haringer • AT Heidemann • AT Hohmann • G Jakob • MC Janes • AT Kobierski • G Kreß • AT Lehner • MC Münzenberg • AT Noack • DF Schwartz • AT Siffling • AT Streb • MC Szepan • MC Zielinski • Treinador: Nerz.
                </div>
            </div>


            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1938:</div>
                <div class="panel-body">
                  G Buchloh • AT Gauchel • AT Gellesch • MC Goldbrunner • AT Hahnemann • G Jakob • DF Janes • MC Kitzinger • MC Kupfer • AT Lehner • MC Mock • MC Münzenberg • AT Neumer • AT Pesser • G Raftl • DF Schmaus • AT Siffling • AT Skoumal • AT Streitle • AT Stroh • AT Szepan • MC Wagner • Treinador: Herberger.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1954:</div>
                <div class="panel-body">
                  1 Turek • 2 Laband • 3 Kohlmeyer • 4 Bauer • 5 Erhardt • 6 Eckel • 7 Posipal • 8 Mai • 9 Mebus • 10 Liebrich • 11 Metzner • 12 Rahn • 13 Morlock • 14 Klodt • 15 O. Walter • 16 F. Walter Capitão • 17 Herrmann • 18 Biesinger • 19 Pfaff • 20 Schäfer • 21 Kubsch • 22 Kwiatkowski • Treinador: Herberger.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1958:</div>
                <div class="panel-body">
                   1 Herkenrath • 2 Erhardt • 3 Juskowiak • 4 Eckel • 5 Wewers • 6 Szymaniak • 7 Stollenwerk • 8 Rahn • 9 Walter • 10 Schmidt • 11 Schäfer Capitão • 12 Seeler • 13 Klodt • 14 Cieslarczyk • 15 Kelbassa • 16 Sturm • 17 Schnellinger • 18 Hoffmann • 19 Peters • 20 Nuber • 21 Sawitzki • 22 Kwiatkowski • Treinador: Herberger.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1962:</div>
                <div class="panel-body">
                   1 Tilkowski • 2 Erhardt • 3 Schnellinger • 4 Schulz • 5 Wilden • 6 Szymaniak • 7 Koslowski • 8 Haller • 9 Seeler • 10 Brülls • 11 Schäfer Capitão • 12 Nowak • 13 Kurbjuhn • 14 Werner • 15 Giesemann • 16 Sturm • 17 Kraus • 18 Herrmann • 19 Strehl • 20 Vollmar • 21 Sawitzki • 22 Fahrian • Treinador: Herberger

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1966:</div>
                <div class="panel-body">
                   1 Tilkowski • 2 Höttges • 3 Schnellinger • 4 Beckenbauer • 5 Schulz • 6 Weber • 7 Brülls • 8 Haller • 9 Seeler Capitão • 10 Held • 11 Emmerich • 12 Overath • 13 Hornig • 14 Lutz • 15 Patzke • 16 Lorenz • 17 Paul • 18 Sieloff • 19 Krämer • 20 Grabowski • 21 Bernard • 22 Maier • Treinador: Schön.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1970:</div>
                <div class="panel-body">
                   1 Maier • 2 Höttges • 3 Schnellinger • 4 Beckenbauer • 5 Schulz • 6 Weber • 7 Vogts • 8 Haller • 9 Seeler Capitão • 10 Held • 11 Fichtel • 12 Overath • 13 Müller • 14 Libuda • 15 Patzke • 16 Lorenz • 17 Löhr • 18 Sieloff • 19 Dietrich • 20 Grabowski • 21 Manglitz • 22 Wolter • Treinador: Schön.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1974:</div>
                <div class="panel-body">
                   1 Maier • 2 Vogts • 3 Breitner • 4 Schwarzenbeck • 5 Beckenbauer Capitão • 6 Höttges • 7 Wimmer • 8 Cullmann • 9 Grabowski • 10 Netzer • 11 Heynckes • 12 Overath • 13 Müller • 14 Hoeneß • 15 Flohe • 16 Bonhof • 17 Hölzenbein • 18 Herzog • 19 Kapellmann • 20 Kremers • 21 Nigbur • 22 Kleff • Treinador: Schön

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1978:</div>
                <div class="panel-body">
                   1 Maier • 2 Vogts Capitão • 3 Dietz • 4 Rüssmann • 5 Kaltz • 6 Bonhof • 7 Abramczik • 8 Zimmermann • 9 Fischer • 10 Flohe • 11 Rummenigge • 12 Schwarzenbeck • 13 Konopka • 14 D. Müller • 15 Beer • 16 Cullmann • 17 Hölzenbein • 18 Zewe • 19 Worm • 20 H. Müller • 21 Kargus • 22 Burdenski • Treinador: Schön.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1982:</div>
                <div class="panel-body">
                   1 Schumacher • 2 Briegel • 3 Breitner • 4 K. Förster • 5 B. Förster • 6 Dremmler • 7 Littbarski • 8 Fischer • 9 Hrubesch • 10 Müller • 11 Rummenigge Capitão • 12 Hannes • 13 Reinders • 14 Magath • 15 Stielike • 16 Allofs • 17 Engels • 18 Matthäus • 19 Hieronymus • 20 Kaltz • 21 Franke • 22 Immel • Treinador: Derwall.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1986:</div>
                <div class="panel-body">
                   1 Schumacher • 2 Briegel • 3 Brehme • 4 Förster • 5 Herget • 6 Eder • 7 Littbarski • 8 Matthäus • 9 Völler • 10 Magath • 11 Rummenigge Capitão • 12 Stein • 13 Allgöwer • 14 Berthold • 15 Augenthaler • 16 Thon • 17 Jakobs • 18 Rahn • 19 Allofs • 20 Hoeneß • 21 Rolff • 22 Immel • Treinador: Beckenbauer.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1990:</div>
                <div class="panel-body">
                   1 Illgner • 2 Reuter • 3 Brehme • 4 Kohler • 5 Augenthaler • 6 Buchwald • 7 Littbarski • 8 Häßler • 9 Völler • 10 Matthäus (C) • 11 Mill • 12 Aumann • 13 Riedle • 14 Berthold • 15 Bein • 16 Steiner • 17 Möller • 18 Klinsmann • 19 Pflügler • 20 Thon • 21 Hermann • 22 Köpke • Treinador: Beckenbauer.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1994:</div>
                <div class="panel-body">
                   1 Illgner • 2 Strunz • 3 Brehme • 4 Kohler • 5 Helmer • 6 Buchwald • 7 Möller • 8 Häßler • 9 Riedle • 10 Matthäus Capitão • 11 Kuntz • 12 Köpke • 13 Völler • 14 Berthold • 15 Gaudino • 16 Sammer • 17 Wagner • 18 Klinsmann • 19 Kirsten • 20 Effenberg • 21 Basler • 22 Kahn • Treinador: Vogts.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1998:</div>
                <div class="panel-body">
                   1 Köpke • 2 Wörns • 3 Heinrich • 4 Kohler • 5 Helmer • 6 Thon • 7 Möller • 8 Matthäus • 9 Kirsten • 10 Häßler • 11 Marschall • 12 Kahn • 13 Jeremies • 14 Babbel • 15 Freund • 16 Hamann • 17 Ziege • 18 Klinsmann Capitão • 19 Reuter • 20 Bierhoff • 21 Tarnat • 22 Lehmann • Treinador: Vogts.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 2002:</div>
                <div class="panel-body">
                   1 Kahn Capitão • 2 Linke • 3 Rehmer • 4 Baumann • 5 Ramelow • 6 Ziege • 7 Neuville • 8 Hamann • 9 Jancker • 10 Ricken • 11 Klose • 12 Lehmann • 13 Ballack • 14 Asamoah • 15 Kehl • 16 Jeremies • 17 Bode • 18 Böhme • 19 Schneider • 20 Bierhoff • 21 Metzelder • 22 Frings • 23 Butt • Treinador: Völler.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 2006:</div>
                <div class="panel-body">
                   1 Lehmann • 2 Jansen • 3 Friedrich • 4 Huth • 5 Kehl • 6 Nowotny • 7 Schweinsteiger • 8 Frings • 9 Hanke • 10 Neuville • 11 Klose • 12 Kahn • 13 Ballack Capitão • 14 Asamoah • 15 Hitzlsperger • 16 Lahm • 17 Mertesacker • 18 Borowski • 19 Schneider • 20 Podolski • 21 Metzelder • 22 Odonkor • 23 Hildebrand • Treinador: Klinsmann.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 2010:</div>
                <div class="panel-body">
                   1 Neuer • 2 Jansen • 3 Friedrich • 4 Aogo • 5 Taşçı • 6 Khedira • 7 Schweinsteiger • 8 Özil • 9 Kießling • 10 Podolski • 11 Klose • 12 Wiese • 13 Müller • 14 Badstuber • 15 Trochowski • 16 Lahm Capitão • 17 Mertesacker • 18 Kroos • 19 Cacau • 20 Boateng • 21 Marin • 22 Butt • 23 Gómez • Treinador: Löw.
                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 2014:</div>
                <div class="panel-body">
                   1 Neuer • 2 Großkreutz • 3 Ginter • 4 Höwedes • 5 Hummels • 6 Khedira • 7 Schweinsteiger • 8 Özil • 9 Schürrle • 10 Podolski • 11 Klose • 12 Zieler • 13 Müller • 14 Draxler • 15 Durm • 16 Lahm Capitão • 17 Mertesacker • 18 Kroos • 19 Götze • 20 Boateng • 21 Mustafi • 22 Weidenfeller • 23 Kramer • Treinador: Löw.

                </div>
            </div>                        
            <?php } elseif ($nome == "Coreia do Sul") { ?>
            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1954:</div>
                <div class="panel-body">1 Hong Duk-yung • 2 Park Kyu-chong • 3 Park Yae-seung • 4 Kang Chang-gi • 5 Lee Sang-yi • 6 Min Byung-dae • 7 Lee Seo-nam • 8 Choi Chung-min • 9 Woo Sang-kwon • 10 Sung Nak-woon • 11 Chung Nom-sik • 12 Ham Heung-chul • 13 Lee Chong-kap • 14 Han Chang-wha • 15 Kim Ji-sung • 16 Choo Young-kwan • 17 Park Il-kap • 18 Choi Young-keun • 19 Lee Ki-joo • 20 Chung Kook-chin • Treinador: Kim Young-sik.
                </div>
            </div>


            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1986:</div>
                <div class="panel-body">
                  1 Cho Byung-deouk • 2 Park Kyung-hoon • 3 Chung Jong-soo • 4 Cho Kwang-rae • 5 Chung Yong-hwan • 6 Lee Tae-ho • 7 Kim Jong-boo • 8 Cho Young-jeoung • 9 Choi Soon-ho • 10 Park Chang-sun Capitão • 11 Cha Bum-kun • 12 Kim Pyung-seok • 13 Noh Soo-jin • 14 Cho Min-kook • 15 Yoo Byung-ok • 16 Kim Joo-sung • 17 Huh Jung-moo • 18 Kim Sam-soo • 19 Byun Byung-joo • 20 Kim Yong-se • 21 Oh Yeon-kyo • 22 Kang Deouk-soo • Treinador: Kim Jung-nam.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1990:</div>
                <div class="panel-body">
                  1 Kim Poong-joo • 2 Park Kyung-hoon • 3 Choi Kang-hee • 4 Yoon Deuk-yeo • 5 Chung Yong-hwan Capitão • 6 Lee Tae-ho • 7 Noh Soo-jin • 8 Chung Hae-won • 9 Hwangbo kwan • 10 Lee Sang-yoon • 11 Byun Byung-joo • 12 Lee Heung-sil • 13 Chung Jong-soo • 14 Choi Soon-ho • 15 Cho Min-kook • 16 Kim Joo-sung • 17 Gu Sang-bum • 18 Hwang Sun-hong • 19 Jeong Gi-dong • 20 Hong Myung-bo • 21 Choi In-young • 22 Lee Young-jin • Treinador: Lee Hoi-taek.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1994:</div>
                <div class="panel-body">
                   1 Choi In‑Young Capitão • 2 Chung Jong‑Son • 3 Lee Jong‑Hwa • 4 Kim Pan‑Keun • 5 Park Jung‑Bae • 6 Lee Young‑Jin • 7 Shin Hong‑Gi • 8 Noh Jung‑Yoon • 9 Kim Joo‑Sung • 10 Ko Jeong‑Woon • 11 Seo Jung‑Won • 12 Choi Yong‑Il • 13 An Ik‑Soo • 14 Choi Dae‑Shik • 15 Cho Jin‑Ho • 16 Ha Seok‑Ju • 17 Gu Sang‑Bum • 18 Hwang Sun‑Hong • 19 Choi Moon‑Sik • 20 Hong Myung‑Bo • 21 Park Chul‑Woo • 22 Lee Woon‑Jae • Treinador: Kim Ho.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1998:</div>
                <div class="panel-body">
                   1 Kim Byung-Ji • 2 Choi Sung-Yong • 3 Lee Lim-Saeng • 4 Choi Yong-Il Capitão • 5 Lee Min-Sung • 6 Yoo Sang-Chul • 7 Kim Do-Keun • 8 Noh Jung-Yoon • 9 Kim Do-Hoon • 10 Choi Yong-soo • 11 Seo Jung-Won • 12 Lee Sang-Hun • 13 Kim Tae-Young • 14 Ko Jong-Soo • 15 Lee Sang-Yoon • 16 Jang Hyung-Seok • 17 Ha Seok-Ju • 18 Hwang Sun-Hong • 19 Jang Dae-Il • 20 Hong Myung-Bo • 21 Lee Dong-Gook • 22 Seo Dong-Myung • Treinador: Cha Bum-Kun (Kim Pyung-Seok).

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 2002:</div>
                <div class="panel-body">
                   1 Lee Woon-jae • 2 Hyun Young-min • 3 Choi Sung-yong • 4 Choi Jin-cheul • 5 Kim Nam-il • 6 Yoo Sang-chul • 7 Kim Tae-young • 8 Choi Tae-uk • 9 Seol Ki-hyeon • 10 Lee Young-pyo • 11 Choi Yong-soo • 12 Kim Byung-ji • 13 Lee Eul-yong • 14 Lee Chun-soo • 15 Lee Min-sung • 16 Cha Du-ri • 17 Yoon Jong-hwan • 18 Hwang Sun-hong • 19 Ahn Jung-hwan • 20 Hong Myung-bo Capitão • 21 Park Ji-sung • 22 Song Chong-gug • 23 Choi Eun-sung • Treinador: Hiddink.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 2006:</div>
                <div class="panel-body">
                   1 Lee Woon‑Jae Capitão • 2 Kim Young‑Chul • 3 Kim Dong‑Jin • 4 Choi Jin‑Cheul • 5 Kim Nam‑Il • 6 Kim Jin-kyu • 7 Park Ji‑Sung • 8 Kim Do‑Heon • 9 Ahn Jung‑Hwan • 10 Park Chu‑Young • 11 Seol Ki‑Hyeon • 12 Lee Young‑Pyo • 13 Lee Eul‑Yong • 14 Lee Chun‑Soo • 15 Baek Ji-hoon • 16 Chung Kyung‑Ho • 17 Lee Ho • 18 Kim Sang‑Sik • 19 Cho Jae‑Jin • 20 Kim Yong‑Dae • 21 Kim Young‑Kwang • 22 Song Chong‑Gug • 23 Cho Won‑Hee • Treinador: Advocaat.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 2010:</div>
                <div class="panel-body">
                   1 Lee Woon-jae • 2 Oh Beom-seok • 3 Kim Hyung-il • 4 Cho Yong-hyung • 5 Kim Nam-il • 6 Kim Bo-kyung • 7 Park Ji-sung Capitão • 8 Kim Jung-woo • 9 Ahn Jung-hwan • 10 Park Chu-young • 11 Lee Seung-yeoul • 12 Lee Young-pyo • 13 Kim Jae-sung • 14 Lee Jung-soo • 15 Kim Dong-jin • 16 Ki Sung-yueng • 17 Lee Chung-yong • 18 Jung Sung-ryong • 19 Yeom Ki-hun • 20 Lee Dong-gook • 21 Kim Young-kwang • 22 Cha Du-ri • 23 Kang Min-soo • Treinador: Huh Jung-moo.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 2014:</div>
                <div class="panel-body">
                   1 Jung Sung-ryong • 2 Kim Chang-soo • 3 Yun Suk-young • 4 Kwak Tae-hwi • 5 Kim Young-gwon • 6 Hwang Seok-ho • 7 Kim Bo-kyung • 8 Ha Dae-sung • 9 Son Heung-min • 10 Park Chu-young • 11 Lee Keun-ho • 12 Lee Yong • 13 Koo Ja-cheol Capitão • 14 Han Kook-young • 15 Park Jong-woo • 16 Ki Sung-yueng • 17 Lee Chung-yong • 18 Kim Shin-wook • 19 Ji Dong-won • 20 Hong Jeong-ho • 21 Kim Seung-gyu • 22 Park Joo-ho • 23 Lee Bum-young • Treinador: Hong Myung-bo.


                </div>
            </div>            
            <?php } elseif ($nome == "México") { ?>
            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1930:</div>
                <div class="panel-body">MC Amézcua • G Bonfiglio • AT Carreño • AT Castro • DF F. Garza Gutiérrez • DF R. Garza Gutiérrez • AT Gayón • AT López • AT Mejía • AT Olivares • AT Pérez • MC Rodríguez • MC F. Rosas • DF M. Rosas • AT Ruíz • MC Sánchez • G Sota • Treinador: Luque de Serrallonga.
                </div>
            </div>


            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1950:</div>
                <div class="panel-body">
                  AT Borbolla • G Carbajal • AT Casarín • DF Córdoba • MC Cuburu • MC Flores • DF Gómez • MC Guevara • DF Gutiérrez • MC Hernández • DF Montemayor • AT Naranjo • AT Navarro • MC Ochoa • MC Ortíz • MC Pérez • AT Prieto • DF Roca • DF Ruíz • AT Septién • AT Velázquez • DF Zetter • Treinador: Vial.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1954:</div>
                <div class="panel-body">
                  1 Carbajal • 2 López • 3 Romo • 4 Martínez • 5 Cárdenas • 6 Avalos • 7 Torres • 8 Naranjo Capitão • 9 Lamadrid • 10 Balcázar • 11 Arellano • 12 Mota • 13 Bravo • 14 Gómez • 15 Blanco • 16 Nájera • 17 Septién • 18 Carus • 19 Jinich • 20 Roca • 21 Ochoa • 22 Cortés • Treinador: López Herranz.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1958:</div>
                <div class="panel-body">
                   1 Carbajal Capitão • 2 Del Muro • 3 Romo • 4 Villegas • 5 Portugal • 6 Flores • 7 Hernández • 8 Reyes • 9 Calderón de la Barca • 10 C. Gutiérrez • 11 Sesma • 12 Camacho • 13 Gómez • 14 M. Gutiérrez • 15 Sepúlveda • 16 Roca • 17 Cárdenas • 18 Salazar • 19 Belmonte • 20 Blanco • 21 López • 22 González • Treinador: López Herranz.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1962:</div>
                <div class="panel-body">
                   1 Carbajal Capitão • 2 Del Muro • 3 Sepúlveda • 4 Villegas • 5 Cárdenas • 6 Nájera • 7 Del Águila • 8 Reyes • 9 H. Hernández • 10 Ortíz • 11 Díaz • 12 Gómez • 13 Chaires • 14 Romero • 15 Jáuregui • 16 Farfán • 17 Ruvalcaba • 18 A. Hernández • 19 Jasso • 20 Velarde • 21 Baeza • 22 Mota • Treinador: Trelles.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1966:</div>
                <div class="panel-body">
                  1 Carbajal • 2 Chaires • 3 Peña Capitão • 4 Del Muro • 5 Jáuregui • 6 Díaz • 7 Ruvalcaba • 8 Padilla • 9 Cisneros • 10 Fragoso • 11 Jara • 12 Calderón • 13 González • 14 Núñez • 15 Hernández • 16 Regueiro • 17 Mercado • 18 Muñoz • 19 Reyes • 20 Borja • 21 Navarro • 22 Vargas • Treinador: Trelles.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1970:</div>
                <div class="panel-body">
                   1 Calderón • 2 Alejandrez • 3 Peña Capitão • 4 Montes • 5 Pérez • 6 Hernández • 7 Rivas • 8 Munguía • 9 Borja • 10 Salgado • 11 Padilla • 12 Mota • 13 Vantolrá • 14 Guzmán • 15 Pulido • 16 Díaz • 17 González • 18 Velarde • 19 Valdivia • 20 Basaguren • 21 Fragoso • 22 Castrejón • Treinador: Cárdenas.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1978:</div>
                <div class="panel-body">
                   1 Reyes • 2 Nájera • 3 Tena • 4 Ramos • 5 Vázquez Capitão • 6 Mendizábal • 7 De la Torre • 8 López • 9 Rangel • 10 Ortega • 11 Sánchez • 12 Martínez • 13 Cisneros • 14 Gómez • 15 Flores • 16 Cárdenas • 17 Cuéllar • 18 Lugo • 19 Rodríguez • 20 Medina • 21 Isiordia • 22 Soto • Treinador: Roca.


                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1986:</div>
                <div class="panel-body">
                   1 Larios • 2 Trejo • 3 Quirarte • 4 Manzo • 5 Francisco Cruz • 6 De los Cobos • 7 España • 8 Domínguez • 9 Sánchez • 10 Boy Capitão • 11 Hermosillo • 12 Rodríguez • 13 Aguirre • 14 Félix Cruz • 15 Flores • 16 Muñoz • 17 Servín • 18 Amador • 19 Hernández • 20 Heredia • 21 Ortega • 22 Negrete • Treinador: Milutinović.


                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1994:</div>
                <div class="panel-body">
                   1 Campos • 2 Suárez • 3 Ramírez Perales • 4 Ambríz Capitão • 5 Ramírez • 6 Bernal • 7 Hermosillo • 8 García Aspe • 9 Sánchez • 10 García • 11 Zaguinho • 12 Fernández • 13 J. Chávez • 14 del Olmo • 15 Espinoza • 16 Valdéz • 17 Galindo • 18 Salgado • 19 Salvador • 20 Rodríguez • 21 Gutiérrez • 22 A. Chávez • Treinador: Mejía Barón.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1998:</div>
                <div class="panel-body">
                   1 Campos • 2 Suárez • 3 J. Sánchez • 4 Villa • 5 Davino • 6 Bernal • 7 Ramírez • 8 García Aspe Capitão • 9 Peláez • 10 García • 11 Blanco • 12 O. Sánchez • 13 Pardo • 14 Lara • 15 Hernández • 16 Terrazas • 17 Palencia • 18 Carmona • 19 Luna • 20 Ordiales • 21 Arellano • 22 Pérez • Treinador: Lapuente.

                </div>
            </div>

             <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 2002:</div>
                <div class="panel-body">
                   1 Pérez • 2 De Anda • 3 García • 4 Márquez Capitão • 5 Vidrio • 6 Torrado • 7 Morales • 8 García Aspe • 9 Borgetti • 10 Blanco • 11 Luna • 12 Sánchez • 13 Mercado • 14 Villa • 15 Hernández • 16 Carmona • 17 Palencia • 18 J. Rodríguez • 19 Caballero • 20 Brown • 21 Arellano • 22 A. Rodríguez • 23 Campos • Treinador: Aguirre.

                </div>
            </div>

             <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 2006:</div>
                <div class="panel-body">
                   1 Sánchez • 2 Suárez • 3 Salcido • 4 Márquez Capitão • 5 Osorio • 6 Torrado • 7 Sinha • 8 Pardo • 9 Borgetti • 10 Franco • 11 Morales • 12 Corona • 13 Ochoa • 14 Pineda • 15 Castro • 16 Méndez • 17 Fonseca • 18 Guardado • 19 Bravo • 20 García • 21 Arellano • 22 Rodríguez • 23 Pérez • Treinador: La Volpe.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 2010:</div>
                <div class="panel-body">
                   1 Pérez • 2 Rodríguez • 3 Salcido • 4 Márquez Capitão • 5 Osorio • 6 Torrado • 7 Barrera • 8 Castro • 9 Franco • 10 Blanco • 11 Vela • 12 Aguilar • 13 Ochoa • 14 Hernández • 15 Moreno • 16 Juárez • 17 Dos Santos • 18 Guardado • 19 Magallón • 20 Torres • 21 Bautista • 22 Medina • 23 Michel • Treinador: Aguirre.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 2014:</div>
                <div class="panel-body">
                    1 Corona • 2 Rodríguez • 3 Salcido • 4 Márquez Capitão • 5 Reyes • 6 H. Herrera • 7 Layún • 8 Fabián • 9 Jiménez • 10 Dos Santos • 11 Pulido • 12 Talavera • 13 Ochoa • 14 Hernández • 15 Moreno • 16 Ponce • 17 Brizuela • 18 Guardado • 19 Peralta • 20 Aquino • 21 Peña • 22 Aguilar • 23 Vázquez • Treinador: Herrera.

                </div>
            </div>            
            <?php } elseif ($nome == "Suécia") { ?>
            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1934:</div>
                <div class="panel-body">MC E. Andersson • AT O. Andersson • DF S. Andersson • DF Axelsson • MC Carlsson • MC Carlund • AT Dunker • AT Gustavsson • AT Holmberg •  Jansson • MC Johansson • AT Jonasson • AT Keller • AT Kroon • MC Liljebjörn • AT Lundahl • AT Olsson • MC Rosén • G Rydberg • MC Snitt • AT Thörn • G Widlund • Treinador: Nagy.
                </div>
            </div>


            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1938:</div>
                <div class="panel-body">
                  G Abrahamsson • MC Almgren • AT A. Andersson • AT H. Andersson • G Bergqvist • AT Bergsten • DF Eriksson • MC Grahn • AT Hansson • MC Jacobsson • AT Jonasson • DF Källgren • AT Karlsson • AT Keller • MC Lind • MC Linderholm • DF Nilsson • AT Nyberg • AT Persson • G Sjöberg • MC Svanström • AT Wetterström • Treinador: Nagy.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1950:</div>
                <div class="panel-body">
                  MC Åhlund • MC Andersson • DF Bodin • MC Gärd • AT Jeppson • DF Johansson • AT Jönsson • G Lindberg • DF Månsson • AT Mellberg • DF E. Nilsson • AT S. Nilsson • MC Nordahl • MC Palmér • AT Rydell • DF Samuelsson • AT Skoglund • AT Sundqvist • G Kalle Svensson • AT Kurt Svensson • G T. Svensson • AT Tapper • Treinador: Raynor.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1958:</div>
                <div class="panel-body">
                   1 K. Svensson • 2 Bergmark • 3 Axbom • 4 Liedholm Capitão • 5 Johansson • 6 Parling • 7 Hamrin • 8 Gren • 9 Simonsson • 10 Selmosson • 11 Skoglund • 12 T. Svensson • 13 Öberg • 14 Gustavsson • 15 Börjesson • 16 Haraldsson • 17 Håkansson • 18 Löfgren • 19 Källgren • 20 Mellberg • 21 Berndtsson • 22 Olsson • Treinador: Raynor..

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1970:</div>
                <div class="panel-body">
                   1 Hellström • 2 Selander • 3 Axelsson • 4 Nordqvist • 5 Grip • 6 Svensson • 7 B. Larsson • 8 Eriksson • 9 Kindvall • 10 Grahn • 11 Persson • 12 S. Larsson • 13 Cronqvist • 14 Kristensson • 15 Målberg • 16 Nordahl • 17 Pettersson • 18 Turesson • 19 Nicklasson • 20 Olsson • 21 Ejderstedt • 22 Pålsson • Treinador: Bergmark.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1974:</div>
                <div class="panel-body">
                   1 Hellström • 2 Olsson • 3 Karlsson • 4 Nordqvist Capitão • 5 Andersson • 6 Grahn • 7 B. Larsson • 8 Torstensson • 9 Kindvall • 10 Edström • 11 Sandberg • 12 S. Larsson • 13 Grip • 14 Tapper • 15 Magnusson • 16 Ejderstedt • 17 Hagberg • 18 Augustsson • 19 Cronqvist • 20 Lindman • 21 Persson • 22 Ahlström • Treinador: Ericson.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1978:</div>
                <div class="panel-body">
                   1 Hellström • 2 Borg • 3 Roy Andersson • 4 Nordqvist Capitão • 5 Erlandsson • 6 Tapper • 7 Linderoth • 8 B. Larsson • 9 L. Larsson • 10 Sjöberg • 11 Wendt • 12 Hagberg • 13 M. Andersson • 14 Åhman • 15 Nilsson • 16 Torstensson • 17 Möller • 18 Nordin • 19 Karlsson • 20 Roland Andersson • 21 Åslund • 22 Edström • Treinador: Ericson.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1990:</div>
                <div class="panel-body">
                   1 S. Andersson • 2 J. Eriksson • 3 Hysén Capitão • 4 Larsson • 5 Ljung • 6 R. Nilsson • 7 Nyhlén • 8 Schwarz • 9 Engqvist • 10 Ingesson • 11 Jansson • 12 L. Eriksson • 13 Limpar • 14 J. Nilsson • 15 Strömberg • 16 Thern • 17 Brolin • 18 Ekström • 19 Gren • 20 Magnusson • 21 Pettersson • 22 Ravelli • Treinador: Nordin.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1994:</div>
                <div class="panel-body">
                   1 Ravelli • 2 R. Nilsson • 3 P. Andersson • 4 Björklund • 5 Ljung • 6 Schwarz • 7 Larsson • 8 Ingesson • 9 Thern Capitão • 10 Dahlin • 11 Brolin • 12 Eriksson • 13 M. Nilsson • 14 Kåmark • 15 Lučić • 16 Limpar • 17 Rehn • 18 Mild • 19 K. Andersson • 20 Erlingmark • 21 Blomqvist • 22 Hedman • Treinador: Svensson.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 2002:</div>
                <div class="panel-body">
                  1 Hedman • 2 Mellberg • 3 P. Andersson Capitão • 4 Mjällby • 5 Michael Svensson • 6 Linderoth • 7 Alexandersson • 8 A. Svensson • 9 Ljungberg • 10 Allbäck • 11 Larsson • 12 Kihlstedt • 13 Antonelius • 14 Edman • 15 Jakobsson • 16 Lučić • 17 Magnus Svensson • 18 Jonson • 19 Farnerud • 20 D. Andersson • 21 Ibrahimović • 22 A. Andersson • 23 Isaksson • Treinador: Lagerbäck & Söderberg.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 2006:</div>
                <div class="panel-body">
                   1 Isaksson • 2 Nilsson • 3 Mellberg Capitão • 4 Lučić • 5 Edman • 6 Linderoth • 7 Alexandersson • 8 A. Svensson • 9 Ljungberg • 10 Ibrahimović • 11 Larsson • 12 Alvbåge • 13 Hansson • 14 Stenman • 15 K. Svensson • 16 Källström • 17 Elmander • 18 Jonson • 19 Andersson • 20 Allbäck • 21 Wilhelmsson • 22 Rosenberg • 23 Shaaban • Treinador: Lagerbäck.

                </div>
            </div>            
            <?php } elseif ($nome == "Bélgica") { ?>
            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1930:</div>
                <div class="panel-body">AT Adams • G Badjou • MC Braine • MC Chantraine • G De Bie • MC De Clercq • DF De Deken • AT Delbeke • AT Diddens • MC Hellemans • DF Hoydonckx • AT Moeschal • DF Nouwens • AT Saeys • AT Versyp • AT Voorhoof • Treinador: Goetinck.
                </div>
            </div>


            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1934:</div>
                <div class="panel-body">
                 G Badjou • MC Bourgeois • AT Brichaut • AT Capelle • MC Claessens • AT Devries • AT Grimmonprez • MC Hellemans • AT Heremans • DF Joacim • AT Lamoot • AT Ledent • DF Pappaert • MC Peeraer • MC Putmans • MC Simons • DF Smellinckx • MC Van Ingelgem • G Vandeweyer • AT Versyp • AT Voorhoof • MC Welkenhuysen • Treinador: Goetinck.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1938:</div>
                <div class="panel-body">
                  G Badjou • G Braet • AT Braine • AT Buyle • AT Capelle • AT Ceuleers • MC Dalem • MC De Winter • AT Fievez • G Gommers • MC Henry • AT Isemborghs • AT Nelis • DF Paverick • DF Petit • DF Seys • DF Smellinckx • MC Stijnen • MC Van Alphen • AT Vanden Wouwer • G Vandeweyer • AT Voorhoof • Treinador: Butler.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1954:</div>
                <div class="panel-body">
                   1 Gernaey • 2 Dries • 3 Van Brandt • 4 Huysmans • 5 Carré • 6 Mees • 7 Vliers • 8 Houf • 9 Coppens • 10 Anoul • 11 Mermans Capitão • 12 Geerts • 13 Dirickx • 14 Van Kerkhoven • 15 H. Van Den Bosch • 16 P. Van Den Bosch • 17 Ausloos • 18 Van Der Linden • 19 Backaert • 20 Maertens • 21 Van Steen • 22 Van Hoywegen • Treinador: Livingstone.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1970:</div>
                <div class="panel-body">
                  1 Piot • 2 Heylens • 3 Thissen • 4 Dewalque • 5 Jeck • 6 Dockx • 7 Semmeling • 8 Van Moer • 9 Devrindt • 10 Van Himst Capitão • 11 Puis • 12 Trappeniers • 13 Beurlet • 14 Martens • 15 Vandendaele • 16 Polleunis • 17 Verheyen • 18 Lambert • 19 Carteus • 20 Peeters • 21 Janssens • 22 Duquesne • Treinador: Goethals.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1982:</div>
                <div class="panel-body">
                  1 Pfaff • 2 Gerets Capitão • 3 L. Millecamps • 4 Meeuws • 5 Renquin • 6 Vercauteren • 7 Daerden • 8 Van Moer • 9 Vandenbergh • 10 Coeck • 11 Ceulemans • 12 Custers • 13 Van der Elst • 14 Baecke • 15 De Schrijver • 16 Plessers • 17 Verheyen • 18 Mommens • 19 M. Millecamps • 20 Vandersmissen • 21 Czerniatyński • 22 Munaron • Treinador: Thys.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1986:</div>
                <div class="panel-body">
                   1 Pfaff • 2 Gerets • 3 F. Van Der Elst • 4 De Wolf • 5 Renquin • 6 Vercauteren • 7 Vandereycken • 8 Scifo • 9 Vandenbergh • 10 Desmet • 11 Ceulemans Capitão • 12 Munaron • 13 Grün • 14 Clijsters • 15 L. Van Der Elst • 16 Claesen • 17 Mommens • 18 Veyt • 19 Broos • 20 Bodart • 21 Demol • 22 Vervoort • Treinador: Thys.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1990:</div>
                <div class="panel-body">
                   1 Preud'homme • 2 Gerets • 3 Albert • 4 Clijsters • 5 Versavel • 6 Emmers • 7 Demol • 8 Van Der Elst • 9 Degryse • 10 Scifo • 11 Ceulemans Capitão • 12 Bodart • 13 Grün • 14 Claesen • 15 De Sart • 16 De Wolf • 17 Plovie • 18 Staelens • 19 Van Der Linden • 20 De Wilde • 21 Wilmots • 22 Vervoort • Treinador: Thys

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1994:</div>
                <div class="panel-body">
                   1 Preud'homme • 2 Medved • 3 Borkelmans • 4 Albert • 5 Smidts • 6 Staelens • 7 Van Der Elst • 8 Nilis • 9 Degryse • 10 Scifo • 11 Czerniatyński • 12 De Wilde • 13 Grün Capitão • 14 De Wolf • 15 Emmers • 16 Boffin • 17 Weber • 18 Wilmots • 19 Van Meir • 20 Verlinden • 21 Van Der Heyden • 22 Renier • Treinador: Van Himst.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1998:</div>
                <div class="panel-body">
                   1 De Wilde • 2 Crasson • 3 Staelens • 4 Vidović • 5 Borkelmans • 6 Van Der Elst • 7 Wilmots • 8 Oliveira • 9 M. Mpenza • 10 Nilis • 11 Van Kerckhoven • 12 Vande Walle • 13 Verlinden • 14 Scifo Capitão • 15 Clement • 16 De Boeck • 17 Verstraeten • 18 Verheyen • 19 Van Meir • 20 É. Mpenza • 21 Boffin • 22 Deflandre • Treinador: Leekens.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 2002:</div>
                <div class="panel-body">
                   1 De Vlieger • 2 Deflandre • 3 De Boeck • 4 Van Meir • 5 Van Kerckhoven • 6 Simons • 7 Wilmots Capitão • 8 Goor • 9 Sonck • 10 Walem • 11 Verheyen • 12 Van Der Heyden • 13 Vandendriessche • 14 Vermant • 15 Peeters • 16 Van Buyten • 17 Englebert • 18 Vanderhaeghe • 19 Thijs • 20 Strupar • 21 Boffin • 22 Mpenza • 23 Herpoel • Treinador: Waseige.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 2014:</div>
                <div class="panel-body">
                   1 Courtois • 2 Alderweireld • 3 Vermaelen • 4 Kompany Capitão • 5 Vertonghen • 6 Witsel • 7 De Bruyne • 8 Fellaini • 9 Lukaku • 10 Hazard • 11 Mirallas • 12 Mignolet • 13 Bossut • 14 Mertens • 15 Van Buyten • 16 Defour • 17 Origi • 18 Lombaerts • 19 Dembélé • 20 Januzaj • 21 Vanden Borre • 22 Chadli • 23 Ciman • Treinador: Wilmots.

                </div>
            </div>                        
            <?php } elseif ($nome == "Inglaterra") { ?>
            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1950:</div>
                <div class="panel-body">DF Aston • MC Baily • AT Bentley • MC Cockburn • MC Dickinson • G Ditchburn • DF Eckersley • AT Finney • MC Hughes • AT Mannion • AT Matthews • AT Milburn • AT Mortensen • AT Mullen • MC Nicholson • DF Ramsey • DF Scott • DF Taylor • MC Watson • G Williams • DF Wright • Treinador: Winterbottom.
                </div>
            </div>


            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1954:</div>
                <div class="panel-body">
                  1 Merrick • 2 Staniforth • 3 Byrne • 4 Wright Capitão • 5 Owen • 6 Dickinson • 7 Matthews • 8 Broadis • 9 Lofthouse • 10 Taylor • 11 Finney • 12 Burgin • 13 Green • 14 McGarry • 15 Wilshaw • 16 Quixall • 17 Mullen • 18 Chilton • 19 Armstrong • 20 Jezzard • 21 Haynes • 22 Hooper • Treinador: Winterbottom.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1958:</div>
                <div class="panel-body">
                  1 McDonald • 2 Howe • 3 Banks • 4 Clamp • 5 Wright Capitão • 6 Slater • 7 Douglas • 8 Robson • 9 Kevan • 10 Haynes • 11 Finney • 12 Hopkinson • 13 Hodgkinson • 14 Sillett • 15 Clayton • 16 Norman • 17 Brabrook • 18 Broadbent • 19 Smith • 20 Charlton • 21 A'Court • 22 Setters • Treinador: Winterbottom.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1962:</div>
                <div class="panel-body">
                   1 Springett • 2 Armfield • 3 Wilson • 4 Robson • 5 Swan • 6 Flowers • 7 Connelly • 8 Greaves • 9 Hitchens • 10 Haynes Capitão • 11 Charlton • 12 Hodgkinson • 13 Kevan • 14 Anderson • 15 Norman • 16 Moore • 17 Douglas • 18 Hunt • 19 Peacock • 20 Eastham • 21 Howe • 22 Banks • Treinador: Winterbottom.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1966:</div>
                <div class="panel-body">
                   1 Banks • 2 Cohen • 3 Wilson • 4 Stiles • 5 J. Charlton • 6 Moore Capitão • 7 Ball • 8 Greaves • 9 B. Charlton • 10 Hurst • 11 Connelly • 12 Springett • 13 Bonetti • 14 Armfield • 15 Byrne • 16 Peters • 17 Flowers • 18 Hunter • 19 Paine • 20 Callaghan • 21 Hunt • 22 Eastham • Treinador: Ramsey.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1970:</div>
                <div class="panel-body">
                   1 Banks • 2 Newton • 3 Cooper • 4 Mullery • 5 Labone • 6 Moore Capitão • 7 Lee • 8 Ball • 9 B. Charlton • 10 Hurst • 11 Peters • 12 Bonetti • 13 Stepney • 14 Wright • 15 Stiles • 16 Hughes • 17 J. Charlton • 18 Hunter • 19 Bell • 20 Osgood • 21 Clarke • 22 Astle • Treinador: Ramsey.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1982:</div>
                <div class="panel-body">
                   1 Clemence • 2 Anderson • 3 Brooking • 4 Butcher • 5 Coppell • 6 Foster • 7 Keegan • 8 Francis • 9 Hoddle • 10 McDermott • 11 Mariner • 12 Mills Capitão • 13 Corrigan • 14 Neal • 15 Rix • 16 Robson • 17 Sansom • 18 Thompson • 19 Wilkins • 20 Withe • 21 Woodcock • 22 Shilton • Treinador: Greenwood.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1986:</div>
                <div class="panel-body">
                   1 Shilton Capitão • 2 M. Gary Stevens • 3 Sansom • 4 Hoddle • 5 Martin • 6 Butcher • 7 Bryan Robson • 8 Wilkins • 9 Hateley • 10 Lineker • 11 Waddle • 12 Anderson • 13 Woods • 14 Fenwick • 15 Gary A. Stevens • 16 Reid • 17 Steven • 18 Hodge • 19 Barnes • 20 Beardsley • 21 Dixon • 22 Bailey • Treinador: Robson.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1990:</div>
                <div class="panel-body">
                   1 Shilton • 2 Stevens • 3 Pearce • 4 Webb • 5 Walker • 6 Butcher • 7 Bryan Robson Capitão • 8 Waddle • 9 Beardsley • 10 Lineker • 11 Barnes • 12 Parker • 13 Woods • 14 Wright • 15 Dorigo • 16 McMahon • 17 Platt • 18 Hodge • 19 Gascoigne • 20 Steven • 21 Bull • 22 Beasant • Treinador: Bobby Robson.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1998:</div>
                <div class="panel-body">
                   1 Seaman • 2 Campbell • 3 Le Saux • 4 Ince • 5 Adams • 6 Southgate • 7 Beckham • 8 Batty • 9 Shearer Capitão • 10 Sheringham • 11 McManaman • 12 Neville • 13 Martyn • 14 Anderton • 15 Merson • 16 Scholes • 17 Lee • 18 Keown • 19 L. Ferdinand • 20 Owen • 21 R. Ferdinand • 22 Flowers • Treinador: Hoddle.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 2002:</div>
                <div class="panel-body">
                   1 Seaman • 2 Mills • 3 A. Cole • 4 Sinclair • 5 Ferdinand • 6 Campbell • 7 Beckham Capitão • 8 Scholes • 9 Fowler • 10 Owen • 11 Heskey • 12 Brown • 13 Martyn • 14 Bridge • 15 Keown • 16 Southgate • 17 Sheringham • 18 Hargreaves • 19 J. Cole • 20 Vassell • 21 Butt • 22 James • 23 Dyer • Treinador: Eriksson.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 2006:</div>
                <div class="panel-body">
                   1 Robinson • 2 Neville • 3 A. Cole • 4 Gerrard • 5 Ferdinand • 6 Terry • 7 Beckham Capitão • 8 Lampard • 9 Rooney • 10 Owen • 11 J. Cole • 12 Campbell • 13 James • 14 Bridge • 15 Carragher • 16 Hargreaves • 17 Jenas • 18 Carrick • 19 Lennon • 20 Downing • 21 Crouch • 22 Carson • 23 Walcott • Treinador: Eriksson.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 2010:</div>
                <div class="panel-body">
                   1 James • 2 Johnson • 3 A. Cole • 4 Gerrard Capitão • 5 Dawson • 6 Terry • 7 Lennon • 8 Lampard • 9 Crouch • 10 Rooney • 11 J. Cole • 12 Green • 13 Warnock • 14 Barry • 15 Upson • 16 Milner • 17 Wright-Phillips • 18 Carragher • 19 Defoe • 20 King • 21 Heskey • 22 Carrick • 23 Hart • Treinador: Capello.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 2014:</div>
                <div class="panel-body">
                   1 Hart • 2 Johnson • 3 Baines • 4 Gerrard Capitão • 5 Cahill • 6 Jagielka • 7 Wilshere • 8 Lampard • 9 Sturridge • 10 Rooney • 11 Welbeck • 12 Smalling • 13 Foster • 14 Henderson • 15 Oxlade-Chamberlain • 16 Jones • 17 Milner • 18 Lambert • 19 Sterling • 20 Lallana • 21 Barkley • 22 Forster • 23 Shaw • Treinador: Hodgson.

                </div>
            </div>                
            <?php } elseif ($nome == "Panamá") { ?>
            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA :</div>
                <div class="panel-body">
                </div>
            </div>            
            <?php } elseif ($nome == "Tunísia") { ?>
            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1978:</div>
                <div class="panel-body">1 Sassi • 2 Dhouieb • 3 Kaabi • 4 Gasmi • 5 M. Labidi • 6 Ghommidh • 7 Lahzami Capitão • 8 Ben Rehaiem • 9 Akid • 10 Dhiab • 11 A. ben Aziza • 12 K. Labidi • 13 Liman • 14 Karoui • 15 Ben Mouza • 16 Chehaibi • 17 El Louze • 18 Chebli • 19 Hasni • 20 Jebali • 21 L. ben Aziza • 22 Naili • Treinador: Chetali.
                </div>
            </div>


            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1998:</div>
                <div class="panel-body">
                  1 El Ouaer • 2 Ben Younes • 3 S. Trabelsi Capitão • 4 Boukadida • 5 H. Trabelsi • 6 Chouchane • 7 Thabet • 8 Baya • 9 Jelassi • 10 Ghodhbane • 11 Sellimi • 12 Melki • 13 Bouazizi • 14 Chihi • 15 Souayah • 16 Salhi • 17 Clayton • 18 Ben Slimane • 19 Ben Ahmed • 20 Jaballah • 21 Badra • 22 Boumnijel • Treinador: Kasperczak (Selmi).

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 2002:</div>
                <div class="panel-body">
                  1 Boumnijel • 2 Badra Capitão • 3 Baya • 4 Mkacher • 5 Jaziri • 6 Trabelsi • 7 Mhadhebi • 8 Gabsi • 9 Jelassi • 10 Ghodhbane • 11 Sellimi • 12 Bouzaiene • 13 Bouazizi • 14 Marzouki • 15 Jaïdi • 16 Bejaoui • 17 Thabet • 18 Ben Achour • 19 Mkademi • 20 Zitouni • 21 Melki • 22 Jaouachi • 23 Clayton • Treinador: Souayah.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 2006:</div>
                <div class="panel-body">
                   1 Boumnijel • 2 Essediri • 3 Haggui • 4 Yahia • 5 Jaziri • 6 Trabelsi • 7 Guemamdia • 8 Nafti • 9 Chikhaoui • 10 Ghodhbane • 11 Santos • 12 Mnari • 13 Bouazizi Capitão • 14 Chedli • 15 Jaïdi • 16 Nefzi • 17 Ben Saada • 18 Jemmali • 19 Ayari • 20 Namouchi • 21 Saidi • 22 Kasraoui • 23 Melliti • Treinador: Lemerre.

                </div>
            </div>            
            <?php } elseif ($nome == "Colômbia") { ?>
            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1962:</div>
                <div class="panel-body">1 Sánchez Capitão • 2 Vivas • 3 Zuluaga • 4 Alzate • 5 J. González • 6 Calle • 7 Aponte • 8 Echeverri • 9 Silva • 10 Serrano • 11 López • 12 Tovar • 13 Aceros • 14 Paz • 15 Coll • 16 Pérez • 17 Klinger • 18 Escobar • 19 Gamboa • 20 Rada • 21 H. González • 22 Arias • Treinador: Pedernera.
                </div>
            </div>


            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1990:</div>
                <div class="panel-body">
                  1 Higuita • 2 Escobar • 3 Gildardo Gómez • 4 Herrera • 5 Villa • 6 Pérez • 7 Estrada • 8 Gabriel Gómez • 9 Guerrero • 10 Valderrama Capitão • 11 Redín • 12 Niño • 13 Hoyos • 14 Álvarez • 15 Perea • 16 Iguarán • 17 Cassiani • 18 Cabrera • 19 Rincón • 20 Fajardo • 21 Mendoza • 22 Hernández • Treinador: Maturana.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1994:</div>
                <div class="panel-body">
                  1 Córdoba • 2 Escobar† • 3 Mendoza • 4 Herrera • 5 Gaviria • 6 Gómez • 7 De Ávila • 8 Lozano • 9 Valenciano • 10 Valderrama Capitão • 11 Valencia • 12 Mondragón • 13 Ortiz • 14 Álvarez • 15 Perea • 16 Aristizábal • 17 Serna • 18 Cortés • 19 Rincón • 20 Pérez • 21 Asprilla • 22 Pazo • Treinador: Maturana.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1998:</div>
                <div class="panel-body">
                   1 Ó. Córdoba • 2 I. Córdoba • 3 Palacios • 4 Santa • 5 Bermúdez • 6 Serna • 7 De Ávila • 8 Lozano • 9 Valencia • 10 Valderrama Capitão • 11 Asprilla • 12 Calero • 13 Cabrera • 14 Bolaño • 15 Aristizábal • 16 Moreno • 17 Estrada • 18 Pérez • 19 Rincón • 20 Ricard • 21 Preciado • 22 Mondragón • Treinador: Gómez.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 2014:</div>
                <div class="panel-body">
                   1 Ospina • 2 Zapata • 3 Yepes Capitão • 4 Arias • 5 Carbonero • 6 Sánchez • 7 Armero • 8 Aguilar • 9 Teo Gutiérrez • 10 James • 11 Cuadrado • 12 Vargas • 13 Guarín • 14 Ibarbo • 15 Mejía • 16 Balanta • 17 Bacca • 18 Zúñiga • 19 Ramos • 20 Quintero • 21 J. Martínez • 22 Mondragón • 23 Valdés • Treinador: Pékerman.

                </div>
            </div>            
            <?php } elseif ($nome == "Japão") { ?>
            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1998:</div>
                <div class="panel-body">1 Kojima • 2 Narahashi • 3 Soma • 4 Ihara Captain sports.svg • 5 Omura • 6 Yamaguchi • 7 Ito • 8 Nakata • 9 Nakayama • 10 Nanami • 11 Ono • 12 Lopes • 13 Hattori • 14 Okano • 15 Morishima • 16 Saito • 17 Akita • 18 Jo • 19 Nakanishi • 20 Kawaguchi • 21 Narazaki • 22 Hirano • Treinador: Okada.
                </div>
            </div>


            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 2002:</div>
                <div class="panel-body">
                  1 Kawaguchi • 2 Akita • 3 Matsuda • 4 Morioka • 5 Inamoto • 6 Hattori • 7 H. Nakata • 8 Morishima • 9 Nishizawa • 10 Nakayama • 11 Suzuki • 12 Narazaki • 13 Yanagisawa • 14 Alex Santos • 15 Fukunishi • 16 K. Nakata • 17 Miyamoto Capitão • 18 Ono • 19 Ogasawara • 20 Myojin • 21 Toda • 22 Ichikawa • 23 Sogahata • Treinador: Troussier.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 2006:</div>
                <div class="panel-body">
                  1 Narazaki • 2 Moniwa • 3 Komano • 4 Endō • 5 Miyamoto Capitão • 6 K. Nakata • 7 H. Nakata • 8 Ogasawara • 9 Takahara • 10 Nakamura • 11 Maki • 12 Doi • 13 Yanagisawa • 14 Alex Santos • 15 Fukunishi • 16 Oguro • 17 Inamoto • 18 Ono • 19 Tsuboi • 20 Tamada • 21 Kaji • 22 Nakazawa • 23 Kawaguchi • Treinador: Zico.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 2010:</div>
                <div class="panel-body">
                   1 Narazaki • 2 Abe • 3 Komano • 4 Túlio • 5 Nagatomo • 6 Uchida • 7 Endō • 8 Matsui • 9 Okazaki • 10 S. Nakamura • 11 Tamada • 12 Yano • 13 Iwamasa • 14 K. Nakamura • 15 Konno • 16 Okubo • 17 Hasebe Capitão • 18 Honda • 19 Morimoto • 20 Inamoto • 21 Kawashima • 22 Nakazawa • 23 Kawaguchi • Treinador: Okada.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 2014:</div>
                <div class="panel-body">
                   1 Kawashima • 2 Uchida • 3 G. Sakai • 4 Honda • 5 Nagatomo • 6 Morishige • 7 Endō • 8 Kiyotake • 9 Okazaki • 10 Kagawa • 11 Kakitani • 12 Nishikawa • 13 Okubo • 14 Aoyama • 15 Konno • 16 Yamaguchi • 17 Hasebe Capitão • 18 Osako • 19 Inoha • 20 Saito • 21 H. Sakai • 22 Yoshida • 23 Gonda • Treinador: Zaccheroni.

                </div>
            </div>            
            <?php } elseif ($nome == "Polônia") { ?>
            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1938:</div>
                <div class="panel-body"> AT Baran • G Brom • AT Cebula • MC Dytko • DF Gałecki • DF Giemsa • MC Góra • AT Habowski • AT Korbas • MC Lis • AT Łyko • G Madejski • MC Nyc • AT Piątek • AT R. Piec • MC W. Piec • AT Scherfke • DF Szczepaniak • DF Twórz • MC Wasiewicz • AT Wilimowski • AT Wodarz • Treinador: Kałuża.
                </div>
            </div>


            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1974:</div>
                <div class="panel-body">
                   1 Fischer • 2 Tomaszewski • 3 Kalinowski • 4 Szymanowski • 5 Gut • 6 Gorgoń • 7 Wieczorek • 8 Bulzacki • 9 Żmuda • 10 Musiał • 11 Ćmikiewicz • 12 Deyna Capitão • 13 Kasperczak • 14 Maszczyk • 15 Jakóbczak • 16 Lato • 17 Szarmach • 18 Gadocha • 19 Domarski • 20 Kapka • 21 Kmiecik • 22 Kusto • Treinador: Górski.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1978:</div>
                <div class="panel-body">
                  1 Tomaszewski • 2 Mazur • 3 Maculewicz • 4 Szymanowski • 5 Nawałka • 6 Gorgoń • 7 Iwan • 8 Kasperczak • 9 Żmuda • 10 Rudy • 11 Masztaler • 12 Deyna Capitão • 13 Kupcewicz • 14 Justek • 15 Kusto • 16 Lato • 17 Szarmach • 18 Boniek • 19 Lubański • 20 Wójcicki • 21 Kukla • 22 Kostrzewa • Treinador: Gmoch.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1982:</div>
                <div class="panel-body">
                   1 Młynarczyk • 2 Dziuba • 3 Kupcewicz • 4 Dolny • 5 Janas • 6 Skrobowski • 7 Jałocha • 8 Matysik • 9 Żmuda Capitão • 10 Majewski • 11 Smolarek • 12 Wójcicki • 13 Buncol • 14 Pałasz • 15 Ciołek • 16 Lato • 17 Szarmach • 18 Kusto • 19 Iwan • 20 Boniek • 21 Kazimierski • 22 Mowlik • Treinador: Piechniczek.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 2002:</div>
                <div class="panel-body">
                   1 Dudek • 2 Kłos • 3 Zieliński • 4 Michał Żewłakow • 5 Rząsa • 6 Hajto • 7 Świerczewski • 8 Kucharski • 9 Kryszałowicz • 10 Kałużny • 11 Olisadebe • 12 Majdan • 13 Głowacki • 14 Marcin Żewłakow • 15 Wałdoch Capitão • 16 Murawski • 17 A. Bąk • 18 Krzynówek • 19 Żurawski • 20 J. Bąk • 21 Koźmiński • 22 Matysek • 23 Sibik • Treinador: Engel.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 2006:</div>
                <div class="panel-body">
                   1 Boruc • 2 Jop • 3 Gancarczyk • 4 Baszczyński • 5 Kosowski • 6 Bąk Capitão • 7 Sobolewski • 8 Krzynówek • 9 Żurawski • 10 Szymkowiak • 11 Rasiak • 12 Kuszczak • 13 Mila • 14 Żewłakow • 15 Smolarek • 16 Radomski • 17 Dudka • 18 Lewandowski • 19 Bosacki • 20 Giza • 21 Jeleń • 22 Fabiański • 23 Brożek • Treinador: Janas.

                </div>
            </div>            
            <?php } elseif ($nome == "Senegal") { ?>
            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 2002:</div>
                <div class="panel-body">1 Sylva • 2 Daf • 3 Sarr • 4 Malick Diop • 5 N'Dour • 6 Cissé Capitão • 7 H. Camara • 8 Traoré • 9 S. Camara • 10 Fadiga • 11 Diouf • 12 Faye • 13 Diatta • 14 Moussa N'Diaye • 15 Diao • 16 Diallo • 17 Coly • 18 Thiaw • 19 Bouba Diop • 20 S. N'Diaye • 21 Beye • 22 Cissokho • 23 Makhtar N'Diaye • Treinador: Metsu
                </div>
            </div>
            <?php } ?>
        
        </div><!--dados gerais-->

        <div class="row">
            <h2 id="torcidometro">Torcedômetro</h2>
            Na torcida pela <?php echo $nome; ?>?
            <a class="votar" href="#">Clique aqui</a>
            <a class="visualizar" href="#">Visualizar resultados</a>
        </div><!--torcidometro-->
    </div> <!--fecha container-->


    <div class="row" id="rodape">
        <div class="container">
            <h3>FutHistórias</h3>
            <h5> Tudo que você quer saber sobre as seleções da copa de 2018</h5>
            <button onclick="topFunction()" id="myBtn" title="Voltar ao topo"><img src="..\img/seta_cima.png" width="30" height="30"></button>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</div>

</body>

</html>
