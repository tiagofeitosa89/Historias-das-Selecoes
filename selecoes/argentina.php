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
                <img class="img-responsive col-md-2" style="width: 330px; height: 200px;" src="../img/selecoes/argentina/Argentina.png">  <!--width="150px" height="120px"-->
                <div class="titulo-selecao col-md-8">
                    <h1>Seleção Argentina de Futebol</h1>
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
               <p align = "justify"> A Argentina é um dos cinco países da América do Sul que vão participar da Copa do Mundo de 2018, na Rússia. Depois de muita dificuldade e apenas sete vitórias nas 18 partidas jogadas, a seleção se classificou para o Mundial. A equipe contou ainda a instabilidade no quesito treinador, contando com três no total, até chegar ao atual, Jorge Sampaoli.</p>
               <p align = "justify"> Ela é uma das mais vitoriosas seleções de futebol, sagrando-se campeã das Copas do Mundo de 1978 e 1986. Dessa maneira, é junto com o Brasil, a única seleção a ter vencido o Mundial em dois ou mais continentes.</p>
               <p align = "justify"> Diego Armando Maradona é considerado o maior ídolo da seleção e para muitos, o melhor jogador de futebol de todos os tempos. Disputou quatro Copas do Mundo (1982-1994) e foi eleito o craque do Mundial de 1986, quando a Argentina sagrou-se bicampeã, com direito ao "Gol do Século" quando passou por toda a zaga adversária e ao polêmico gol de mão ("La Mano de Dios" – como ele mesmo intitulou), ambos nas quartas-de-final contra a Inglaterra.</p>

              <p align = "justify">  A classificação para a Copa do Mundo de 2018 veio de forma dramática, sendo confirmada apenas na última rodada.

Messi foi fundamental para isso, pois o rendimento da seleção foi muito melhor com ele.
7 vitórias, 7 empates e 4 derrotas, com 19 gols marcados e 16 sofridos, a Argentina ficou em 3° lugar nas Eliminatórias Sul-Americanas, 2 pontos acima do 6° colocado, o Chile, que ficou de fora do mundial.</p>

<p align = "justify">Em 11 jogos feitos entre 2017 e 2018, a Argentina venceu 6, empatou 3 e perdeu 2 partidas, marcando 17 gols e sofrendo 8.</p>
<p align = "justify">O jogador com mais partidas pela seleção argentina é Javier Zanetti, com 143 partidas entre 1994 e 2011.
Já o maior artilheiro da história da Argentina é Lionel Messi, com 61 gols em 125 jogos, de 2005 até os dias atuais.</p>
<p align = "justify">A Argentina possui inúmeros destaques individuais, dentre eles: Nicolás Otamendi, zagueiro de 30 anos do Manchester City, que possui 51 jogos e 3 gols pela Argentina; Ángel Di Maria, meio-campista de 30 anos do PSG, que possui 92 jogos e 19 gols pela Argentina; Lionel Messi, atacante de 30 anos do Barcelona, que possui 125 jogos e 61 gols pela Argentina; Sergio Agüero, atacante de 29 anos do Manchester City, que possui 84 jogos e 36 gols pela Argentina; Gonzalo Higuaín, atacante de 30 anos da Juventus, que possui 68 jogos e 31 gols pela Argentina.</p>
<p align = "justify">Para a Copa do Mundo de 2018, a Argentina foi sorteada no grupo D, juntamente de Islândia, Croácia e Nigéria.</p>




            </div> <!--texto seleção-->
            <div id="imagem-selecao" class="img-responsive col-md-5 col-xs-12">
                <div id="carousel" class="carousel slide">

                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="../img/selecoes/argentina/Slides/1-maradona-gol-de-mao-copa1986.jpeg" width="450" height="250">
                        </div>

                        <div class="item">
                            <img src="../img/selecoes/argentina/Slides/elenco-de-2018.jpg" width="450" height="250">
                        </div>

                        <div class="item">
                            <img src="../img/selecoes/argentina/Slides/3-leonel-messi-maior-artilheiro.jpg" width="450" height="250">
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
                <div class="panel-heading">PARTICIPAÇÕES EM COPAS DO MUNDO : 17</div>
                <div class="panel-body">(1930 - 1934 - 1958 - 1962 - 1966 - 1974 - 1978 - 1982 - 1986 - 1990 - 1994 - 1998 - 2002 - 2006 - 2010 - 2014 - 2018)</div>
            </div>

             <div class="panel with panel-primary class">
                <div class="panel-heading">TÍTULOS</div>
                <div class="panel-body"> Copa do Mundo: 2 (1978 - 1986)</div>
                <div class="panel-body"> Copa das Confederações: 1 (1992)</div>
                <div class="panel-body"> Copa América: 14 (1921 - 1925 - 1927 - 1929 - 1937 - 1941 - 1945 - 1946 - 1947 - 1955 - 1957 - 1959 - 1991 - 1993)</div>
            </div>


            <h2 id="elenco-copas">Elenco em Copas do Mundo</h2>

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

            

        
        </div><!--dados gerais-->

        <div class="row">
            <h2 id="torcidometro">Torcidômetro</h2>
            Na torcida pela Argentina?
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
