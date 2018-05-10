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
                <a href="../torcidometro.php">Fase de grupos</a>
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
                <img class="img-responsive col-md-2" style="width: 330px; height: 200px;" src="../img/selecoes/inglaterra/Inglaterra.png">  <!--width="150px" height="120px"-->
                <div class="titulo-selecao col-md-8">
                    <h1>Seleção Inglesa de Futebol</h1>
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
              <p align = "justify">Em 30 de novembro de 1872, Inglaterra e Escócia realizaram a primeira partida oficial entre seleções da história do futebol. O jogo aconteceu em território escocês e terminou empatado em 0x0. Em Copas do Mundo, a Inglaterra, desde sua estreia em 1950, chegou apenas uma vez à final, justamente em 1966, quando sediou a competição. A decisão foi realizada no Estádio de Wembley, um dos palcos mais tradicionais do futebol e após vencer a Alemanha Ocidental por 4x2, outras conquistas de destaque foram o tricampeonato olímpico (1900, contra França e 1908 e 1912, contra a Dinamarca), porém representando a Grã-Bretanha (Inglaterra, Escócia e País de Gales). Contudo, as equipes eram formadas, em sua maioria, por jogadores ingleses.</p>
<p align = "justify">Na copa da Rússia em 2018 a vaga inglesa veio após uma boa campanha nas Eliminatórias, com oito vitórias e dois empates em dez jogos. Na primeira colocação do Grupo F com 26 pontos, os campeões mundiais de 1966 marcaram 18 gols e sofreram três.</p>
<p align = "justify">A Seleção da Inglaterra, campeã mundial em 1966, chega para sua 15ª Copa do Mundo sob o comando do técnico Gareth Southgate – que não é nenhuma unanimidade entre os súditos da rainha Elizabeth, assim como não era o seu antecessor, Sam Allardyce, o breve, que assumiu a equipe no lugar de Roy Hodgson, comandante do English Team entre 2012 e 2016. Allardyce caiu no mesmo ano e deu lugar ao interino/definitivo Southgate.</p>
<p align = "justify">Apesar de toda a “bagunça” com os técnicos – que quase azedou o chá em Windsor – a seleção inglesa conseguiu sua classificação para a Copa do Mundo com relativa tranquilidade. Líder invicta do Grupo F nas eliminatórias, a equipe conquistou 8 vitórias e 2 empates, obtendo um aproveitamento de 86,7%, que arrancou aplausos discretos do príncipe William.</p>
<p align = "justify">A seleção chega para a Copa, evidentemente, com algum favoritismo na luta pelo título, mas, assim como a Bélgica, está atrás dos “pesos-pesados” (França, Alemanha, Brasil, Espanha e Portugal). As esperanças – e liderança – da seleção inglesa estão nos pés de Harry Kane, atacante do Tottenham que faz uma temporada excepcional na Premier League e é o símbolo máximo da renovação pela qual passou o English Team desde a última Copa do Mundo.</p>


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
                <div class="panel-heading">PARTICIPAÇÕES EM COPAS DO MUNDO : 15</div>
                <div class="panel-body">  (1950 - 1954 - 1958 - 1962 - 1966 - 1970 - 1982 - 1986 - 1990 - 1998 - 2002 - 2006 - 2010 - 2014 - 2018)</div>
            </div>

             <div class="panel with panel-primary class">
                <div class="panel-heading">TÍTULOS</div>
                <div class="panel-body"> Jogo Futebol Olímpico: 3 (1900 - 1908 - 1912)</div>
                <div class="panel-body"> Copa do Mundo: 1 (1966)</div>
                
            </div>


            <h2 id="elenco-copas">Elenco em Copas do Mundo</h2>

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

        
           
        </div><!--dados gerais-->

        <div class="row">
            <h2 id="torcidometro">Torcidômetro</h2>
            Na torcida pela Inglaterra?
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
