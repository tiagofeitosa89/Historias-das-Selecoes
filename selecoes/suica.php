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
                <h3>Fut Histórias</h3>
            </div>
            <div class="topnav" id="myTopnav">
                <a href="..\index.php">Home</a>
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
                <img class="img-responsive col-md-2" style="width: 330px; height: 200px;" src="../img/selecoes/suica/Suica.png">  <!--width="150px" height="120px"-->
                <div class="titulo-selecao col-md-8">
                    <h1>Seleção Suiça de Futebol</h1>
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
                <p align = "justify">A seleção suíça participou de onze Copas do Mundo (incluindo 2018), tendo se classificado para as três últimas edições. Seu melhor resultado em mundiais foi o 6º lugar em 1950, no Brasil. Em 2006, a Suíça foi eliminada nas oitavas-de-final da competição sem sofrer nenhum gol no tempo normal e prorrogação, façanha inédita até hoje (a desclassificação veio após derrota nos pênaltis para a Ucrânia.
<p align = "justify">Indo para sua quarta Copa do Mundo seguida, a Suíça chega ao mundial de 2018 como uma equipe bastante experiente, que buscará chegar mais longe na competição.</p>
<p align = "justify">Nas Eliminatórias da copa da rússia, a seleção terminou a primeira fase como segunda colocada do grupo B, com 9 vitórias em 10 jogos. A campanha foi praticamente perfeita, apenas sendo derrotada por Portugal, que acabou líder com o mesmo número de pontos. A Vantagem do time português foi apenas no saldo de gols. Com isso, a Suíça teve que jogar uma repescagem contra a Irlanda do Norte, onde mostrou sua melhor característica, a defesa. Uma vitória por 1 a 0 e um empate em 0 a 0 classificaram a equipe para a Copa do Mundo.</p>
<p align = "justify">A Suíça possui alguns destaques individuais, dentre eles: Yann Sommer, goleiro de 29 anos do Borussia Monchengladbach, que possui 34 jogos pela Suíça; Stephan Lichtsteiner, lateral de 34 anos da Juventus, que possui 98 jogos e 8 gols pela Suíça; Ricardo Rodríguez, lateral de 25 anos do Milan, que possui 51 jogos e 3 gols pela Suíça; Granit Xhaka, meio-campista de 25 anos do Arsenal, que possui 61 jogos e 9 gols pela Suíça; Xherdan Shaqiri, meio-campista de 26 anos do Stoke City, que possui 68 jogos e 20 gols pela Suíça; Haris Seferovic, atacante de 26 anos do Benfica, que possui 49 jogos e 11 gols pela Suíça.</p>
<p align = "justify">A Suíça foi sorteada no grupo E na Copa do Mundo de 2018, juntamente de Brasil, Costa Rica e Sérvia.Os suíços são a segunda força do grupo, devendo lutar pela segunda vaga nas oitavas, visto que o Brasil é o amplo favorito à liderança do grupo.</p>
<p align = "justify">A disputa pela vaga deverá ser decidida contra a Sérvia, que deverá dificultar a vida dos suíços no mundial.O sucesso da Suíça passará muito pelo entrosamento de gerações, pois o elenco é polarizado em jogadores jovens promissores e atletas experientes, que deverão encontrar o balança necessário para um bom desempenho.</p>
    <p align = "justify">Shaqiri, o craque do time, apesar de não viver grande fase em seu clube, o Stoke City, deverá ser fator de desequilíbrio para sua seleção, pois possui ótimo drible e precisa finalização.O sistema defensivo suíço é outro ponto forte dessa seleção, que cede poucas chances aos seus rivais.</p>




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
                <div class="panel-heading">PARTICIPAÇÕES EM COPAS DO MUNDO : 11</div>
                <div class="panel-body"> (1934 - 1938 - 1950 - 1954 - 1962 - 1966 - 1994 - 2006 - 2010 - 2014 - 2018)</div>
            </div>

             <div class="panel with panel-primary class">
                <div class="panel-heading">TÍTULOS</div>
                <div class="panel-body"> Campeonato Europeu Sub-17: 1 (2002)</div>
                <div class="panel-body"> Copa do Mundo de Futebol Sub-17: 1 (2009)</div>
            </div>


            <h2 id="elenco-copas">Elenco em Copas do Mundo</h2>

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

        
        </div><!--dados gerais-->

        <div class="row">
            <h2 id="torcidometro">Torcidômetro</h2>
            Na torcida pela Suiça?
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
