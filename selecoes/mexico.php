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
                <img class="img-responsive col-md-2" style="width: 330px; height: 200px;" src="../img/selecoes/mexico/Mexico.png">  <!--width="150px" height="120px"-->
                <div class="titulo-selecao col-md-8">
                    <h1>Seleção Mexicana de Futebol</h1>
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
                <p align = "justify">A Seleção Mexicana de Futebol é uma das potências do futebol na América do Norte com 16 participações em Copas do Mundo (já considerando 2018), atrás apenas de Brasil, Alemanha, Itália e Argentina. Desde 1994, os mexicanos não ficaram fora de nenhuma edição e suas melhores participações foram justamente quando sediaram os mundiais de 1970 e 1986, tendo chegado às quartas-de-final.</p>
<p align = "justify">Apesar de não obter resultados significativos em Copas do Mundo, até 2013, a seleção mexicana é a única da CONCACAF a conquistar títulos oficiais reconhecidos pela FIFA: a Copa das Confederações de 1999 e as Olimpíadas de 2012, ambas após vitórias sobre o Brasil. O México é também o mais bem-sucedido país na disputa da CONCACAF, com nove conquistas, além de ter vencido seis Copas Ouro da CONCACAF, uma Copa das Nações da América do Norte e dois Campeonatos NAFC (North America Nations Cup).</p>
<p align = "justify">O México chega para a disputa da 16ª Copa do Mundo de sua história, e a sexta consecutiva, com um plantel bastante experimentado, e jogadores que individualmente atravessam bons momentos em seus clubes. Atletas como Guillermo Ochoa, Andrés Guardado, Héctor Moreno, Héctor Herrera e Chicharito Hernández devem jogar na Rússia o último mundial de suas carreiras, e esperam ir além das oitavas-de-final, fase em que o time caiu nas suas seis participações mais recentes.</p>
    <p align = "justify">As Eliminatórias da Concacaf foram um passeio para os mexicanos. Os comandados de Juan Carlos Osorio terminaram na primeira colocação, com cinco pontos  de vantagem sobre a Costa Rica, e só foram perder uma partida na última rodada, quando a classificação já estava assegurada. Em 2017, a equipe disputou ainda a Copa das Confederações, e apesar de ter feito uma boa campanha na primeira fase, teve que se contentar com a quarta colocação depois de perder para Alemanha e Portugal. O time é alvo de críticas por parte da imprensa e torcedores locais  por não se sair bem quando enfrenta adversários de primeiro nível.</p>
<p align = "justify">Apesar do primeiro lugar no hexagonal final das Eliminatórias da Concacaf e um aproveitamento de 70%, Osório chegará à Copa do Mundo pressionado pelos resultados pouco convincentes à frente da seleção – como por exemplo na derrota por 3 a 2 para Honduras na última rodada das eliminatórias – e muito dependente do talento de Chicharito Hernandez, que não atravessa grande fase no West Ham mas possui estrela suficiente para levar o México, pelo menos, à fase eliminatória.</p>
<p align = "justify">A equipe do México sempre chega aos Mundiais cercada de grande expectativa, com jogadores rodados e famosos no futebol mundial. Mesmo assim, o país jamais passou das quartas de final - chegou nesta fase duas vezes, ambas atuando em casa -, sucumbindo diante de adversários de maior tradição no mata-mata. A ideia na Rússia é fazer a melhor campanha da história, chegando a uma semifinal.</p>



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
                <div class="panel-heading">PARTICIPAÇÕES EM COPAS DO MUNDO : 16</div>
                <div class="panel-body">  (1930 - 1950 - 1954 - 1958 - 1962 - 1966 - 1970 - 1978 - 1986 - 1994 - 1998 - 2002 - 2006 - 2010 - 2014 - 2018)</div>
            </div>

             <div class="panel with panel-primary class">
                <div class="panel-heading">TÍTULOS</div>
                <div class="panel-body"> Copa das Confederações: 1 (1999)</div>
                <div class="panel-body"> Copa Ouro da CONCACAF: 7 (1993 - 1996 - 1998 - 2003 - 2009 - 2011 - 2015)</div>
                
            </div>


            <h2 id="elenco-copas">Elenco em Copas do Mundo</h2>

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




        
        </div><!--dados gerais-->

        <div class="row">
            <h2 id="torcidometro">Torcidômetro</h2>
            Na torcida pelo México?
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
