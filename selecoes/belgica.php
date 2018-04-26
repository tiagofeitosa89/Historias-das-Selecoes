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
                <img class="img-responsive col-md-2" style="width: 330px; height: 200px;" src="../img/selecoes/belgica/Belgica.png">  <!--width="150px" height="120px"-->
                <div class="titulo-selecao col-md-8">
                    <h1>Seleção Belga de Futebol</h1>
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
                <p align = "justify">A Seleção Belga de Futebol está no Top 10 das seleções mais presentes em Copas do Mundo, com 13 participações (incluindo 2018). Após um período sombrio, a Bélgica foi uma das sensações das Eliminatórias da Europa, o que a credenciou a ser cabeça de chave do Mundial no Brasil.Em Copas do Mundo, sua melhor participação foi em 1986, chegando às semifinais. Sorte melhor, a Bélgica teve somente no longínquo ano de 1920, ao sagrar-se campeã olímpica contra a Tchecoslováquia.</p>
<p align = "justify">A Bélgica vai disputar sua 13ª Copa do Mundo. Ela foi uma das quatro seleções europeias que atravessou o Atlântico, em 1930, para disputar a primeira Copa do Mundo, no Uruguai.</p>
    <p align = "justify">Em 12 presenças, o país conseguiu um quarto lugar na Copa de 86, no México, e foi sexta colocada na Copa do Brasil, em 2014. Em 41 jogos, os belgas ganharam 14, empataram 9 e perderam 18. Marcaram 52 gols e sofreram 66.</p>
    <p align = "justify">Em 30, a Bélgica fez dois jogos e perdeu os dois: 3 a 0 para os Estados Unidos e 1 a 0 para o Paraguai. Em 90, ganhou da campeã Argentina por 1 a 0 no jogo de abertura da Copa.O artilheiro belga nas Copas é Marc Wilmots, com 5 gols, seguido por Jan Celeumans, com quatro. A Bélgica está no grupo G ao lado de Inglaterra, Tunísia e Panamá.</p>
<p align = "justify">No comando da seleção belga está o técnico espanhol Roberto Martinez. Campeão da Copa da Inglaterra como treinador do Wigan em 2013, Martinez comanda os belgas desde 2016 e disputará a sua primeira Copa do Mundo. Apesar de ser a sua primeira vez treinando uma seleção, o técnico espanhol abdica de usar as mesmas ideias para liderar a sua equipe: ser metódico e conservador das tradições dos clubes por onde passa. Não somente de conhecimento tático se vale um treinador. É preciso criar um vínculo com um clube e com os jogadores. O tipo de vínculo que quebra a barreira do profissionalismo futebolístico e a aproxima intimamente os jogadores, técnico e todos os funcionários de um time. Roberto faz com que os jogadores entendam a responsabilidade de atuarem pela seleção, ensinando as tradições da equipe e compartilhando experiências.</p>
    <p align = "justify">Apesar da pouca tradição em Mundiais, tendo ficado em 4° lugar em 1986 como melhor resultado, a equipe se destacou por ter chegado às quartas de final da Copa do Mundo no Brasil em 2014. Após passar pela seleção dos Estados Unidos, a Bélgica foi eliminada pela Argentina, que viria a ser a vice-campeã mundial da edição. Em 2018, a seleção belga terá pela frente na fase de grupos a seleção da Inglaterra, do atacante Harry Kane, a modesta seleção da Tunísia e o Panamá – estreante em Copas do Mundo.</p>
<p align = "justify">Na copa da Rússia a vaga foi conquistada com tranquilidade no Grupo H das Eliminatórias da Europa. Foram nove vitórias e um empate em dez jogos e 28 pontos conquistados, com 43 gols marcados e apenas seis sofridos.</p>
    <p align = "justify">Diante dos fatos apresentados, mesclando o talento e entrosamento da Bélgica, os retrospectos e os bons desempenhos da equipe e a presença de um técnico que conhece a seleção, podemos acreditar, sim, que possivelmente a Bélgica será o destaque desta Copa do Mundo. Além desses fatores, os belgas caíram em um grupo relativamente fácil em relação às outras seleções, o que facilita, de certa forma, o acesso às oitavas de final da competição.</p>



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
                <div class="panel-heading">PARTICIPAÇÕES EM COPAS DO MUNDO : 13</div>
                <div class="panel-body"> (1930 - 1934 - 1938 - 1954 - 1970 - 1982 - 1986 - 1990 - 1994 - 1998 - 2002 - 2014 - 2018)</div>
            </div>

             <div class="panel with panel-primary class">
                <div class="panel-heading">TÍTULOS</div>
                <div class="panel-body"> Jogo Futebol Olímpico: 1 (1920)</div>
                <div class="panel-body"> Copa Kirin: 1 (1999)</div>
                
            </div>


            <h2 id="elenco-copas">Elenco em Copas do Mundo</h2>

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

           
        </div><!--dados gerais-->

        <div class="row">
            <h2 id="torcidometro">Torcidômetro</h2>
            Na torcida pela Bélgica?
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
