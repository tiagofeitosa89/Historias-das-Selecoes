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
                <h3>Futistórias</h3>
            </div>
            <div class="topnav" id="myTopnav">
                <a href="../index.php">Home</a>
                <a href="../selecoes.php">Seleções</a>
                <a href="../fasegrupos.php">Fase de grupos</a>
                <a href="../info.php">Informações e curiosidades</a>
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
                            <a target="_top" href="arabia.php">
                                    <span class="bandeira">
                                        <img src="//ep01.epimg.net/iconos/v1.x/v1.0/banderas/svg/ksa.svg">
                                    </span>
                                <span class="nome-selecao">Arábia Saudita</span>
                            </a>
                        </div>
                        <div class="equipe">
                            <a target="_top" href="egito.php">
                                    <span class="bandeira">
                                        <img src="//ep01.epimg.net/iconos/v1.x/v1.0/banderas/svg/egy.svg">
                                    </span>
                                <span class="nome-selecao">Egito</span>
                            </a>
                        </div>
                        <div class="equipe">
                            <a target="_top" href="russia.php">
                                    <span class="bandeira">
                                        <img src="//ep01.epimg.net/iconos/v1.x/v1.0/banderas/svg/rus.svg">
                                    </span>
                                <span class="nome-selecao">Rússia</span>
                            </a>
                        </div>
                        <div class="equipe">
                            <a target="_top" href="uruguai.php">
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
                            <a target="_top" href="portugal.php">
                                    <span class="bandeira">
                                        <img src="//ep01.epimg.net/iconos/v1.x/v1.0/banderas/svg/por.svg">
                                    </span>
                                <span class="nome-selecao">Portugal</span>
                            </a>
                        </div>
                        <div class="equipe">
                            <a target="_top" href="espanha.php">
                                    <span class="bandeira">
                                        <img src="//ep01.epimg.net/iconos/v1.x/v1.0/banderas/svg/esp.svg">
                                    </span>
                                <span class="nome-selecao">Espanha</span>
                            </a>
                        </div>
                        <div class="equipe">
                            <a target="_top" href="marrocos.php">
                                    <span class="bandeira">
                                        <img src="//ep01.epimg.net/iconos/v1.x/v1.0/banderas/svg/mar.svg">
                                    </span>
                                <span class="nome-selecao">Marrocos</span>
                            </a>
                        </div>
                        <div class="equipe">
                            <a target="_top" href="ira.php">
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
                            <a target="_top" href="franca.php">
                                    <span class="bandeira">
                                        <img src="//ep01.epimg.net/iconos/v1.x/v1.0/banderas/svg/fra.svg">
                                    </span>
                                <span class="nome-selecao">França</span>
                            </a>
                        </div>
                        <div class="equipe">
                            <a target="_top" href="australia.php">
                                    <span class="bandeira">
                                        <img src="//ep01.epimg.net/iconos/v1.x/v1.0/banderas/svg/aus.svg">
                                    </span>
                                <span class="nome-selecao">Austrália</span>
                            </a>
                        </div>
                        <div class="equipe">
                            <a target="_top" href="peru.php">
                                    <span class="bandeira">
                                        <img src="//ep01.epimg.net/iconos/v1.x/v1.0/banderas/svg/per.svg">
                                    </span>
                                <span class="nome-selecao">Peru</span>
                            </a>
                        </div>
                        <div class="equipe">
                            <a target="_top" href="dinamarca.php">
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
                            <a target="_top" href="argentina.php">
                                    <span class="bandeira">
                                        <img src="//ep01.epimg.net/iconos/v1.x/v1.0/banderas/svg/arg.svg">
                                    </span>
                                <span class="nome-selecao">Argentina</span>
                            </a>
                        </div>
                        <div class="equipe">
                            <a target="_top" href="islandia.php">
                                    <span class="bandeira">
                                        <img src="//ep01.epimg.net/iconos/v1.x/v1.0/banderas/svg/isl.svg">
                                    </span>
                                <span class="nome-selecao">Islândia</span>
                            </a>
                        </div>
                        <div class="equipe">
                            <a target="_top" href="croacia.php">
                                    <span class="bandeira">
                                        <img src="//ep01.epimg.net/iconos/v1.x/v1.0/banderas/svg/cro.svg">
                                    </span>
                                <span class="nome-selecao">Croácia</span>
                            </a>
                        </div>
                        <div class="equipe">
                            <a target="_top" href="nigeria.php">
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
                            <a target="_top" href="brasil.php">
                                    <span class="bandeira">
                                        <img src="//ep01.epimg.net/iconos/v1.x/v1.0/banderas/svg/bra.svg">
                                    </span>
                                <span class="nome-selecao">Brasil</span>
                            </a>
                        </div>
                        <div class="equipe">
                            <a target="_top" href="suica.php">
                                    <span class="bandeira">
                                        <img src="//ep01.epimg.net/iconos/v1.x/v1.0/banderas/svg/sui.svg">
                                    </span>
                                <span class="nome-selecao">Suíça</span>
                            </a>
                        </div>
                        <div class="equipe">
                            <a target="_top" href="costa-rica.php">
                                    <span class="bandeira">
                                        <img src="//ep01.epimg.net/iconos/v1.x/v1.0/banderas/svg/crc.svg">
                                    </span>
                                <span class="nome-selecao">Costa Rica</span>
                            </a>
                        </div>
                        <div class="equipe">
                            <a target="_top" href="servia.php">
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
                            <a target="_top" href="alemanha.php">
                                    <span class="bandeira">
                                        <img src="//ep01.epimg.net/iconos/v1.x/v1.0/banderas/svg/ger.svg">
                                    </span>
                                <span class="nome-selecao">Alemanha</span>
                            </a>
                        </div>
                        <div class="equipe">
                            <a target="_top" href="mexico.php">
                                    <span class="bandeira">
                                        <img src="//ep01.epimg.net/iconos/v1.x/v1.0/banderas/svg/mex.svg">
                                    </span>
                                <span class="nome-selecao">México</span>
                            </a>
                        </div>
                        <div class="equipe">
                            <a target="_top" href="suecia.php">
                                    <span class="bandeira">
                                        <img src="//ep01.epimg.net/iconos/v1.x/v1.0/banderas/svg/swe.svg">
                                    </span>
                                <span class="nome-selecao">Suécia</span>
                            </a>
                        </div>
                        <div class="equipe">
                            <a target="_top" href="coreia-sul.php">
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
                            <a target="_top" href="belgica.php">
                                    <span class="bandeira">
                                        <img src="//ep01.epimg.net/iconos/v1.x/v1.0/banderas/svg/bel.svg">
                                    </span>
                                <span class="nome-selecao">Bélgica</span>
                            </a>
                        </div>
                        <div class="equipe">
                            <a target="_top" href="panama.php">
                                    <span class="bandeira">
                                        <img src="//ep01.epimg.net/iconos/v1.x/v1.0/banderas/svg/pan.svg">
                                    </span>
                                <span class="nome-selecao">Panamá</span>
                            </a>
                        </div>
                        <div class="equipe">
                            <a target="_top" href="tunisia.php">
                                    <span class="bandeira">
                                        <img src="//ep01.epimg.net/iconos/v1.x/v1.0/banderas/svg/tun.svg">
                                    </span>
                                <span class="nome-selecao">Tunísia</span>
                            </a>
                        </div>
                        <div class="equipe">
                            <a target="_top" href="inglaterra.php">
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
                            <a target="_top" href="polonia.php">
                                    <span class="bandeira">
                                        <img src="//ep01.epimg.net/iconos/v1.x/v1.0/banderas/svg/pol.svg">
                                    </span>
                                <span class="nome-selecao">Polônia</span>
                            </a>
                        </div>
                        <div class="equipe">
                            <a target="_top" href="senegal.php">
                                    <span class="bandeira">
                                        <img src="//ep01.epimg.net/iconos/v1.x/v1.0/banderas/svg/sen.svg">
                                    </span>
                                <span class="nome-selecao">Senegal</span>
                            </a>
                        </div>
                        <div class="equipe">
                            <a target="_top" href="colombia.php">
                                    <span class="bandeira">
                                        <img src="//ep01.epimg.net/iconos/v1.x/v1.0/banderas/svg/col.svg">
                                    </span>
                                <span class="nome-selecao">Colômbia</span>
                            </a>
                        </div>
                        <div class="equipe">
                            <a target="_top" href="japao.php">
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
                <img class="img-responsive col-md-2" style="width: 330px; height: 200px;" src="../img/selecoes/alemanha/Alemanha.png">  <!--width="150px" height="120px"-->
                <div class="titulo-selecao col-md-8">
                    <h1>Seleção Alemã de Futebol</h1>
                    <hr>
                    <h5>
                        <a class="col-md-3 col-xs-12" href="#dados-gerais">Dados gerais</a>
                        <a class="col-md-3 col-xs-12" href="#">Elenco atual</a>
                        <a class="col-md-3 col-xs-12" href="#elenco-copas">Elencos em copas</a>
                        <a class="col-md-3 col-xs-12" href="#torcidometro">Torcidômetro</a>
                    </h5>
                </div> <!-- nome seleção + ancoras-->
        </div><!--cabecalho pagina selecao-->
        <br>
        <div class="row">
            <div class="col-md-7">
               <p align = "justify">A Alemanha é uma das grandes potências no cenário do futebol mundial. Até 2013, além de ser a maior vencedora da Eurocopa, ao lado da Espanha, com três títulos (em 1972, contra União Soviética; 1980, contra Bélgica; e 1996, contra a República Tcheca), a seleção alemã conquistou quatro Copas do Mundo (1954, contra Hungria; 1974, contra Holanda;1990, contra Argentina e 2014 contra a Argentina novamente).</p>
    <p align = "justify">Nas Eliminatórias do continente, a equipe venceu todos os 10 jogos que disputou, terminando na liderança do grupo C com 30 pontos conquistados e 100% de aproveitamento - foram 43 gols marcados e apenas três sofridos. A chave ainda tinha Irlanda do Norte, República Tcheca, Noruega, Azerbaijão e San Marino.</p>
    <p align = "justify">A FIFA considera os três campeonatos da Alemanha Ocidental como da atual seleção alemã. Depois da Segunda Guerra Mundial a Alemanha foi dividida em dois países. O lado ocidental era uma economia mais forte e uma potência no futebol. O maior feito da Alemanha Oriental foi a vitória contra os irmãos ocidentais na Copa do Mundo de 1974 por 1 a 0. Em 1990, ocidentais e orientais comemoraram o título mundial e europeu como mais um passo para a reunificação do país. A Alemanha conseguiu em 2014 conquistar seu primeiro título reunificada.</p>
<p align = "justify">Não tendo participado apenas da Copa do Mundo de 1930 (seguindo o exemplo de praticamente todas as seleções européias que pouca atenção deram ao torneio) e de 1950 (quando foi impedida pela Fifa de participar por conta do contexto da Alemanha ocupada no pós-guerra), a seleção alemã é a única, ao lado da brasileira, a ter participado de todas as edições da Copa do Mundo para a qual se inscreveu – ou esteve habilitada – sem nunca ter ficado pelo caminho nas eliminatórias.</p>
    <p align = "justify">Com quatro títulos mundiais na bagagem – e a marca de ter participado de oito finais em sua história –, a Alemanha vem para a Copa do Mundo da Rússia em busca de seu 5º título mundial ainda sob o comando de Joachim Löw, que assumiu o cargo de técnico em 2006 em substituição a Jürgen Klinsmann que deixou o posto após o vice-campeonato na Copa da Alemanha. De lá pra cá, além da necessária renovação da equipe, foram dois títulos importantes: tetracampeã do mundo no Brasil em 2014 (ano do lendário 7 a 1) e campeã da Copa das Confederações em 2017 (único título que faltava aos alemães), com uma equipe composta basicamente por jovens talentos.</p>
    <p align = "justify">É assim, segura, renovada, concentrada e alinhada que a Seleção Alemã chega para a Copa do Mundo da Rússia, com Löw no banco e o “camisa 10” que veste a 8, Tony Kroos, comandando a equipe dentro de campo em busca do pentacampeonato.</p>




            </div> <!--texto seleção-->
            <div id="imagem-selecao" class="img-responsive col-md-5 col-xs-12">
                <div id="carousel" class="carousel slide">

                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="../img/selecoes/arabia-saudita/arabia-1.jpg" width="450" height="250">
                        </div>

                        <div class="item">
                            <img src="../img/selecoes/arabia-saudita/arabia-2.jpg" width="450" height="250"">
                        </div>

                        <div class="item">
                            <img src="../img/selecoes/arabia-saudita/arabia-3.jpg" width="450" height="250">
                        </div>


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


            <h2 id="elenco-copas">Elenco em Copas do Mundo</h2>

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

           

        
        </div><!--dados gerais-->

        <div class="row">
            <h2 id="torcidometro">Torcidômetro</h2>
            Na torcida pela Alemanha?
            <a class="votar" href="#">Clique aqui</a>
            <a class="visualizar" href="#">Visualizar resultados</a>
        </div><!--torcidometro-->
    </div> <!--fecha container-->


    <div class="row" id="rodape">
        <div class="container">
            <h3>Fut Histórias</h3>
            <h5> Tudo que você quer saber sobre as seleções da copa de 2018</h5>
            <button onclick="topFunction()" id="myBtn" title="Voltar ao topo"><img src="..\img/seta_cima.png" width="30" height="30"></button>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</div>

</body>

</html>
