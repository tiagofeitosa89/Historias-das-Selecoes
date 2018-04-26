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
                <img class="img-responsive col-md-2" style="width: 330px; height: 200px;" src="../img/selecoes/dinamarca/Dinamarca.png">  <!--width="150px" height="120px"-->
                <div class="titulo-selecao col-md-8">
                    <h1>Seleção Dinamarquesa de Futebol</h1>
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
               <p align = "justify"> A Seleção Dinamarquesa é uma das grandes reveladoras de talentos no futebol, como são os casos dos irmãos Michael e Brian Laudrup e o goleiro Peter Schmeichel. As boas apresentações apareceriam já nos remotos anos de 1908 e 1912, quando a Dinamarca conquistou a medalha de prata nos Jogos Olímpicos de Verão após ser derrotada nas duas finais para a Grã-Bretanha. No entanto, os bons resultados só voltariam a aparecer nas Olimpíadas de 1948, com a conquista do bronze em cima dos britânicos, e na de 1960, novamente com a prata, quando perdeu a decisão para a Iugoslávia.</p>
               <p align = "justify"> A seleção alcançou sua maior façanha em 1992: o título europeu, após uma vitória de 2x0 sobre os alemães. Desde então, os melhores resultados da Dinamarca foram as quartas-de-final da Copa do Mundo de 1998 e da Eurocopa de 2004. </p>

                 <p align = "justify">Sob o comando de Åge Hareide, a Dinamarca conseguiu se classificar para a Copa do Mundo de 2018, após passar pela repescagem.

Com 6 vitórias, 2 empates e 2 derrotas em 10 jogos, marcando 20 gols e sofrendo 8, a Dinamarca ficou em segundo lugar no grupo E das Eliminatórias Europeias para a Copa do Mundo, se classificando para a repescagem.

A adversária da repescagem foi a Irlanda. Após empate sem gols no jogo de ida, a Dinamarca aplicou uma goleada na volta, vencendo por 5 a 1 e garantindo a vaga na Rússia em 2018.</p>

<p align = "justify">Entre 2017 e 2018 a Dinamarca jogou 11 partidas, vencendo 5, empatando 4 e perdendo 2 jogos, marcando 21 gols e sofrendo 9.

<p align = "justify">Importante ressaltar que as duas derrotas foram com uma seleção alternativa, somente com jogadores locais.
Peter Schmeichel é o jogador com mais partidas pela seleção dinamarquesa, participando de 129 partidas entre 1987 e 2001.
Já os maiores artilheiros da Dinamarca são Jon Dahl Tomasson (1997–2010) e Poul Nilsen (1910–1925), com 52 gols marcados por cada um.</p>

<p align = "justify">A Dinamarca possui alguns destaques individuais, como: Kasper Schmeichel, goleiro de 31 anos do Leicester City, que possui 31 jogos pela Dinamarca; Simon Kjær, zagueiro de 28 anos do Sevilla, que possui 74 jogos e 3 gols pela Dinamarca, além de ser o capitão do time; William Kvist, meio-campista de 33 anos do FC Copenhague, que possui 77 jogos e 2 gols pela Dinamarca; Christian Eriksen, meio-campista de 26 anos do Tottenham, que possui 75 jogos e 21 gols pela Dinamarca; Niklas Bendter, atacante de 30 anos do Rosenborg, que possui 79 jogos e 30 gols pela Dinamarca.</p>
<p align = "justify">A Dinamarca foi sorteada no grupo C na Copa do Mundo de 2018, juntamente de França, Austrália e Peru.</p>



            </div> <!--texto seleção-->
            <div id="imagem-selecao" class="img-responsive col-md-5 col-xs-12">
                <div id="carousel" class="carousel slide">

                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="../img/selecoes/dinamarca/01 - copa de 1986.jpg" width="450" height="250">
                        </div>

                        <div class="item">
                            <img src="../img/selecoes/dinamarca/02 - eurocopa 1992.jpg" width="450" height="250"">
                        </div>

                        <div class="item">
                            <img src="../img/selecoes/dinamarca/03 - elenco da copa de 2018.jpg" width="450" height="250">
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
                <div class="panel-heading">PARTICIPAÇÕES EM COPAS DO MUNDO : 5</div>
                <div class="panel-body"> 5 (1986 - 1998 - 2002 - 2010 - 2018)</div>
            </div>

             <div class="panel with panel-primary class">
                <div class="panel-heading">TÍTULOS</div>
                <div class="panel-body"> Copa das Confederações: 1 (1995)</div>
                <div class="panel-body"> Eurocopa: 1 (1992)</div>
            </div>


            <h2 id="elenco-copas">Elenco em Copas do Mundo</h2>

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

        
        </div><!--dados gerais-->

        <div class="row">
            <h2 id="torcidometro">Torcidômetro</h2>
            Na torcida pela Dinamarca?
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
