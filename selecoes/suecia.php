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
                <img class="img-responsive col-md-2" style="width: 330px; height: 200px;" src="../img/selecoes/suecia/Suecia.png">  <!--width="150px" height="120px"-->
                <div class="titulo-selecao col-md-8">
                    <h1>Seleção Sueca de Futebol</h1>
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
               <p align = "justify">A Seleção Sueca de Futebol participou de 12 Copas do Mundo, contudo, sem nunca ter alcançado o título. Sua maior façanha em mundiais é o vice-campeonato de 1958 quando foi a sede da competição. Na final, os suecos perderam de virada para o Brasil de Pelé, pelo placar de 5x2. Por sinal, o confronto contra os brasileiros é o que mais se repetiu na história das Copas. Ao todo, foram sete partidas, com cinco vitórias dos sul-americanos (4x2, em 1938; 7x1, em 1950; 5x2, em 1958; 2x1, em 1990 e 1x0, em 1994), e dois empates (1x1, em 1978 e 1x1, em 1994). A Suécia também figurou na 3ª colocação nas Copas de 1950 e 1994.</p>
<p align = "justify">Nas Eliminatórias do continente da copa de 2018, a equipe ficou na segunda colocação do grupo A com 19 pontos, atrás apenas da líder França e eliminando a Holanda, que ficou em terceiro - a chave ainda tinha Bulgária, Luxemburgo e Belarus. Na repescagem, a seleção sueca deixou a Itália para trás vencendo por 1 a 0 em casa e empatando sem gols no campo do adversário.</p>
<p align = "justify">Dona de um notável histórico em Copas do Mundo, a Suécia retorna à competição após 12 anos apostando em um elenco sem grandes estrelas, mas muito competitivo. A equipe teve uma das trajetórias mais complicadas até a Rússia, mas se fortaleceu ao superar cada um dos desafios que apareceram pelo caminho. O primeiro foi disputar as Eliminatórias no Grupo A, o mesmo de França e Holanda. A Laranja Mecânica ficou para trás por ter um saldo de gols inferior, e a Suécia foi para a repescagem contra a poderosa Itália. Contrariando novamente todas as expectativas, os vice-campeões mundiais de 1958 carimbaram seu passaporte com uma vitória pela contagem mínima e um empate sem gols.</p>
    <p align = "justify">O técnico Janne Andersson vive um grande dilema nesta fase final de preparação, manter o elenco modesto que deu resultado até o momento ou ceder às pressões para convocar o centroavante Ibrahimovic. Aposentado da seleção desde 2016, o maior jogador da história da Suécia já tem idade avançada, e passou os últimos anos às voltas com inúmeras contusões, mas suas simples presença poderá ser suficiente para impôr respeito aos adversários. Os atletas mais conhecidos atualmente são Forsberg, do RB Leipzig, e Lindelof, que atua pelo Manchester United.</p>




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
                <div class="panel-heading">PARTICIPAÇÕES EM COPAS DO MUNDO : 12</div>
                <div class="panel-body">  (1934 - 1938 - 1950 - 1958 - 1970 - 1974 - 1978 - 1990 - 1994 - 2002 - 2006 - 2018)</div>

            </div>

             <div class="panel with panel-primary class">
                <div class="panel-heading">TÍTULOS</div>
                <div class="panel-body"> Jogo Futebol Olímpico: 1 (1948)</div>
                <div class="panel-body"> Torneio das Quatro Nações: 1 (1988)</div>
                <div class="panel-body"> Campeonato Nórdico: 9 (1933–1936 - 1937–1947 - 1948–1951 - 1952–1955 - 1956–1959 - 1960–1963 - 1964–1967 - 1968–1971 - 1972–1977)</div>
                
            </div>


            <h2 id="elenco-copas">Elenco em Copas do Mundo</h2>

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





        
        </div><!--dados gerais-->

        <div class="row">
            <h2 id="torcidometro">Torcidômetro</h2>
            Na torcida pela Suêcia?
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
