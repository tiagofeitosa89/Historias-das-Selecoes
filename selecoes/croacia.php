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
                <img class="img-responsive col-md-2" style="width: 330px; height: 200px;" src="../img/selecoes/croacia/Croacia.png">  <!--width="150px" height="120px"-->
                <div class="titulo-selecao col-md-8">
                    <h1>Seleção Croata de Futebol</h1>
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
               <p align = "justify"> A Seleção Croata de Futebol é reconhecida pela FIFA como sucessora da seleção da Banovina de Croácia e dos Estados Independentes da Croácia, que disputaram 16 amistosos entre os anos de 1940 e 1944. A seleção croata esteve representada pela primeira vez em uma competição oficial nas Eliminatórias da Euro 1996, conseguindo uma das 16 vagas.</p>
               <p align = "justify"> Ela é um dos 14 países da Europa que vão participar da Copa do Mundo de 2018, na Rússia. Segunda colocada do Grupo I das Eliminatórias do continente, a vaga para o maior evento do futebol mundial só veio na repescagem. Contra a Grécia, a seleção croata venceu o primeiro jogo por 4 a 1 e empatou em 0 a 0 a segunda partida.</p>

                <p align = "justify">Em 14 jogos entre 2017 e 2018, a Croácia venceu 6, empatou 4 e perdeu 4 jogos, marcando 14 gols e sofrendo 12.</p>
<p align = "justify">O jogador com mais partidas pela Croácia é Darijo Srna, com 134 jogos entre 2002 e 2016.
Já o maior artilheiro é Davor Suker, que marcou 45 gols em 69 jogos, entre 1991 e 2002.</p>
<p align = "justify">A Croácia possui muitos talentos individuais, dentre eles: Dejan Lovren, zagueiro de 28 anos do Liverpool, que possui 37 jogos e 2 gols pela Croácia; Luka Modric, meio-campista de 32 anos do Real Madrid, que possui 104 jogos e 12 gols pela Croácia; Ivan Perisic, meio-campista de 29 anos da Internazionale, que possui 64 jogos e 17 gols pela Croácia; Ivan Rakitic, meio-campista de 30 anos do Barcelona, que possui 90 jogos e 14 gols pela Croácia; Mario Mandzukic, atacante de 31 anos da Juventus, que possui 82 jogos e 30 gols pela Croácia.</p>
<p align = "justify">A Croácia foi sorteada no grupo D da Copa do Mundo em 2018, juntamente de Argentina, Islândia e Nigéria.</p>




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
                <div class="panel-heading">PARTICIPAÇÕES EM COPAS DO MUNDO : 5</div>
                <div class="panel-body">  (1998 - 2002 - 2006 - 2014 - 2018)</div>
            </div>

             <div class="panel with panel-primary class">
                <div class="panel-heading">TÍTULOS</div>
                <div class="panel-body"> Nenhum</div>
               
            </div>


            <h2 id="elenco-copas">Elenco em Copas do Mundo</h2>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1998:</div>
                <div class="panel-body">1 Ladić • 2 Krpan • 3 Šerić • 4 Štimac • 5 Jurić • 6 Bilić • 7 Asanović • 8 Prosinečki • 9 Šuker • 10 Boban Capitão • 11 Marić • 12 Mrmić • 13 Stanić • 14 Soldo • 15 Tudor • 16 Kozniku • 17 Jarni • 18 Mamić • 19 Vlaović • 20 Šimić • 21 Jurčić • 22 Vasilj • Treinador: Blažević.
                </div>
            </div>


            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 2002:</div>
                <div class="panel-body">
                   1 Pletikosa • 2 Šerić • 3 Šimunić • 4 Tomas • 5 Rapaić • 6 Živković • 7 Vugrinec • 8 Prosinečki • 9 Šuker Capitão • 10 N. Kovač • 11 Bokšić • 12 Butina • 13 Stanić • 14 Soldo • 15 Šarić • 16 Vranješ • 17 Jarni • 18 Olić • 19 Vlaović • 20 Šimić • 21 R. Kovač • 22 Balaban • 23 Vasilj • Treinador: Jozić.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 2006:</div>
                <div class="panel-body">
                    1 Pletikosa • 2 Srna • 3 Šimunić • 4 R. Kovač • 5 Tudor • 6 Vranješ • 7 Šimić • 8 Babić • 9 Pršo • 10 N. Kovač Capitão • 11 Tokić • 12 Didulica • 13 Tomas • 14 Modrić • 15 I. Leko • 16 J. Leko • 17 Klasnić • 18 Olić • 19 N. Kranjčar • 20 Šerić • 21 Balaban • 22 Bošnjak • 23 Butina • Treinador: Z. Kranjčar.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 2014:</div>
                <div class="panel-body">
                    1 Pletikosa • 2 Vrsaljko • 3 Pranjić • 4 Perišić • 5 Ćorluka • 6 Lovren • 7 Rakitić • 8 Vukojević • 9 Jelavić • 10 Modrić • 11 Srna Capitão • 12 Zelenika • 13 Schildenfeld • 14 Brozović • 15 Badelj • 16 Rebić • 17 Mandžukić • 18 Olić • 19 Sammir • 20 Kovačić • 21 Vida • 22 Eduardo • 23 Subašić • Treinador: Kovač.

                </div>
            </div>

              

        
        </div><!--dados gerais-->

        <div class="row">
            <h2 id="torcidometro">Torcidômetro</h2>
            Na torcida pela Croácia?
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
