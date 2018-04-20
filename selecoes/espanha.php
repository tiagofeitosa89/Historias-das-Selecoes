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
                <img class="img-responsive col-md-2" style="width: 330px; height: 200px;" src="../img/selecoes/espanha/Espanha.png">  <!--width="150px" height="120px"-->
                <div class="titulo-selecao col-md-8">
                    <h1>Seleção Espanhola de Futebol</h1>
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
            <p class="col-md-7">
                "La Fúria" ou "A Fúria Vermelha" é como a seleção espanhola é conhecida mundo afora. Organizada pela Real Federação Espanhola de Futebol, é uma das confederações fundadoras da FIFA e um dos países com mais participações em Copas do Mundo (14, incluindo 2014). Apesar de sempre possuir grandes jogadores, até os início do século XXI, os títulos de expressão da Espanha se resumiam à Eurocopa de 1964, contra União Soviética e às Olimpíadas de 1992, contra a Polônia.

                A alcunha de "A Fúria Vermelha" deve-se à gana e vontade da seleção espanhola, bem como pela cor principal de seu uniforme de origem. Durante a Guerra Civil que deflagrou no país entre os anos de 1936 e 1939, a Espanha trocou o vermelho pelo branco e passou a usar em sua camisa o símbolo franquista, em menção ao general Francisco Franco. 



            </p> <!--texto seleção-->
            <div id="imagem-selecao" class="img-responsive col-md-5 col-xs-12">
                <div id="carousel" class="carousel slide">

                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="../img/selecoes/espanha/1 - elimanatória da copa da russia 2018.jpg" width="450" height="250">
                        </div>

                        <div class="item">
                            <img src="../img/selecoes/espanha/2- elenco 2018.jpg" width="450" height="250"">
                        </div>

                        <div class="item">
                            <img src="../img/selecoes/espanha/3- campea da copa de 2010.jpg" width="450" height="250">
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
                <div class="panel-body"> (1934 - 1950 - 1962 - 1966 - 1978 - 1982 - 1986 - 1990 - 1994 - 1998 - 2002 - 2006 - 2010 - 2014 - 2018)</div>
            </div>

             <div class="panel with panel-primary class">
                <div class="panel-heading">TÍTULOS</div>
                <div class="panel-body"> Copa do Mundo: 1 (2010) </div>
                <div class="panel-body"> Eurocopa: 3 (1964 - 2008 - 2012) </div>
            </div>


            <h2 id="elenco-copas">Elenco em Copas do Mundo</h2>

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

        
        </div><!--dados gerais-->

        <div class="row">
            <h2 id="torcidometro">Torcidômetro</h2>
            Na torcida pela Espanha?
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
