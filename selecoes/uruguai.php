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
                <img class="img-responsive col-md-2" style="width: 330px; height: 200px;" src="../img/selecoes/uruguai/Uruguai.png">  <!--width="150px" height="120px"-->
                <div class="titulo-selecao col-md-8">
                    <h1>Seleção Uruguaia de Futebol</h1>
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
                <p align = "justify">Fundada em 1900, a Associação Uruguaia de Futebol foi um dos membros fundadores da CONMEBOL. O apelido de Celeste veio já nos anos iniciais após o primeiro triunfo da seleção Uruguai em Montevidéu, em 15 de agosto de 1910. A camisa azul que hoje é um emblema nacional, na ocasião, foi adotada em reconhecimento ao triunfo, dias antes, do River uruguaio, que utilizava essas mesmas cores, ante o poderoso Alumni portenho.</p>

                <p align = "justify">Para chegar na Copa do Mundo de 2018 o Uruguai ficou em segundo lugar nas Eliminatórias Sul-Americanas, ficando atrás apenas do Brasil. O Uruguai marcou 31 pontos em 18 jogos, sendo 9 vitórias, 4 empates e 5 derrotas, com 32 gols a favor e 20 contra, sendo Cavani o artilheiro da competição, com 10 gols.</p>

<p align = "justify">O desempenho no ano de 2017 dos uruguaios foi bastante insatisfatório, com 2 vitórias, 3 empates e 5 derrotas, com 10 gols a favor e 17 contra.</p>

<p align = "justify">Os maiores destaques individuais do Uruguai para a Copa de 2018 são: Luiz Suárez, de 30 anos, do Barcelona, que tem 49 gols em 95 jogos pelo Uruguai; Edison Cavani, de 30 anos, do PSG, que tem 40 gols em 98 jogos pelo Uruguai; Diego Godín, de 31 anos, do Atlético de Madrid, que tem 8 gols em 113 jogos pelo Uruguai; Rodrigo Bentancur, de 20 anos, da Juventus, que não fez gols nos seus 4 jogos pelo Uruguai.</p>

<p align = "justify">Na história da seleção uruguaia, o jogador com mais partidas é o lateral Maxi Pereira, que desde 2005 participou de 124 jogos pelo Uruguai
Já o maior artilheiro da história do Uruguai é Luiz Suárez, que marcou 49 gols em 95 jogos, desde 2007.</p>



            </div> <!--texto seleção-->
            <div id="imagem-selecao" class="img-responsive col-md-5 col-xs-12">
                <div id="carousel" class="carousel slide">

                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="../img/selecoes/uruguai/1 - Elenco da copa de 1930.jpg" width="450" height="250">
                        </div>

                        <div class="item">
                            <img src="../img/selecoes/uruguai/2 - elenco 2018.jpg" width="450" height="250"">
                        </div>

                        <div class="item">
                            <img src="../img/selecoes/uruguai/3 - elenco atual.jpg" width="450" height="250">
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
                <div class="panel-body">(1930, 1950, 1954, 1962, 1966, 1970, 1974, 1986, 1990, 2002, 2010, 2014, 2018)</div>
            </div>

             <div class="panel with panel-primary class">
                <div class="panel-heading">TÍTULOS</div>
                <div class="panel-body"> Copa do mundo : 2 (1930 - 1950)</div>
                <div class="panel-body"> Copa América : 15 (1916, 1917, 1920, 1923, 1924, 1926, 1935, 1942, 1956, 1959, 1967, 1983, 1987, 1995, 2011) </div>
            </div>


            <h2 id="elenco-copas">Elenco em Copas do Mundo</h2>

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

        
        </div><!--dados gerais-->

        <div class="row">
            <h2 id="torcidometro">Torcidômetro</h2>
            Na torcida pelo Uruguai?
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
