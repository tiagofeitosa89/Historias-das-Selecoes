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
                <img class="img-responsive col-md-2" style="width: 330px; height: 200px;" src="../img/selecoes/coreia-sul/Coreia-sul.png">  <!--width="150px" height="120px"-->
                <div class="titulo-selecao col-md-8">
                    <h1>Seleção Sul-Coreana de Futebol</h1>
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
                A Seleção Sul-Coreana de Futebol é a mais bem-sucedida seleção da Ásia na história das Copas do Mundo, com dez participações (oito consecutivas 1986-2014) e uma semifinal, recordes absolutos no continente. O 4º lugar foi alcançado justamente no Mundial de 2002, disputado na Coreia do Sul e Japão, o primeiro em solo asiático e disputado em dois países diferentes. Na ocasião, os sul-coreanos perderam a semifinal para a Alemanha e a disputa de 3º lugar para a Turquia.
                Na primeira fase das Eliminatórias do continente, a equipe terminou com folga na liderança do seu grupo, mas, na etapa seguinte, teve dificuldades e só garantiu vaga na última rodada, ficando na segunda colocação da chave, atrás do líder Irã.A performance da Coreia do Sul na Copa do Mundo do Brasil foi fraca, conquistando apenas um ponto e caindo na fase de grupos, com isso os jogadores foram recebidos debaixos de muitos protestos, o foco agora da seleção é apagar a má campanha no Mundial passado e fazer uma competição digna na Rússia.



            </p> <!--texto seleção-->
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
                <div class="panel-heading">PARTICIPAÇÕES EM COPAS DO MUNDO : 10</div>
                <div class="panel-body"> (1954 - 1986 - 1990 - 1994 - 1998 - 2002 - 2006 - 2010 - 2014 - 2018)</div>
            </div>

             <div class="panel with panel-primary class">
                <div class="panel-heading">TÍTULOS</div>
                <div class="panel-body"> Copa da Ásia: 2 (1956 - 1960)</div>
                <div class="panel-body"> Copa das Nações Afro-Asiáticas: 1 (1988)</div>
                
            </div>


            <h2 id="elenco-copas">Elenco em Copas do Mundo</h2>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1954:</div>
                <div class="panel-body">1 Hong Duk-yung • 2 Park Kyu-chong • 3 Park Yae-seung • 4 Kang Chang-gi • 5 Lee Sang-yi • 6 Min Byung-dae • 7 Lee Seo-nam • 8 Choi Chung-min • 9 Woo Sang-kwon • 10 Sung Nak-woon • 11 Chung Nom-sik • 12 Ham Heung-chul • 13 Lee Chong-kap • 14 Han Chang-wha • 15 Kim Ji-sung • 16 Choo Young-kwan • 17 Park Il-kap • 18 Choi Young-keun • 19 Lee Ki-joo • 20 Chung Kook-chin • Treinador: Kim Young-sik.
                </div>
            </div>


            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1986:</div>
                <div class="panel-body">
                  1 Cho Byung-deouk • 2 Park Kyung-hoon • 3 Chung Jong-soo • 4 Cho Kwang-rae • 5 Chung Yong-hwan • 6 Lee Tae-ho • 7 Kim Jong-boo • 8 Cho Young-jeoung • 9 Choi Soon-ho • 10 Park Chang-sun Capitão • 11 Cha Bum-kun • 12 Kim Pyung-seok • 13 Noh Soo-jin • 14 Cho Min-kook • 15 Yoo Byung-ok • 16 Kim Joo-sung • 17 Huh Jung-moo • 18 Kim Sam-soo • 19 Byun Byung-joo • 20 Kim Yong-se • 21 Oh Yeon-kyo • 22 Kang Deouk-soo • Treinador: Kim Jung-nam.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1990:</div>
                <div class="panel-body">
                  1 Kim Poong-joo • 2 Park Kyung-hoon • 3 Choi Kang-hee • 4 Yoon Deuk-yeo • 5 Chung Yong-hwan Capitão • 6 Lee Tae-ho • 7 Noh Soo-jin • 8 Chung Hae-won • 9 Hwangbo kwan • 10 Lee Sang-yoon • 11 Byun Byung-joo • 12 Lee Heung-sil • 13 Chung Jong-soo • 14 Choi Soon-ho • 15 Cho Min-kook • 16 Kim Joo-sung • 17 Gu Sang-bum • 18 Hwang Sun-hong • 19 Jeong Gi-dong • 20 Hong Myung-bo • 21 Choi In-young • 22 Lee Young-jin • Treinador: Lee Hoi-taek.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1994:</div>
                <div class="panel-body">
                   1 Choi In‑Young Capitão • 2 Chung Jong‑Son • 3 Lee Jong‑Hwa • 4 Kim Pan‑Keun • 5 Park Jung‑Bae • 6 Lee Young‑Jin • 7 Shin Hong‑Gi • 8 Noh Jung‑Yoon • 9 Kim Joo‑Sung • 10 Ko Jeong‑Woon • 11 Seo Jung‑Won • 12 Choi Yong‑Il • 13 An Ik‑Soo • 14 Choi Dae‑Shik • 15 Cho Jin‑Ho • 16 Ha Seok‑Ju • 17 Gu Sang‑Bum • 18 Hwang Sun‑Hong • 19 Choi Moon‑Sik • 20 Hong Myung‑Bo • 21 Park Chul‑Woo • 22 Lee Woon‑Jae • Treinador: Kim Ho.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1998:</div>
                <div class="panel-body">
                   1 Kim Byung-Ji • 2 Choi Sung-Yong • 3 Lee Lim-Saeng • 4 Choi Yong-Il Capitão • 5 Lee Min-Sung • 6 Yoo Sang-Chul • 7 Kim Do-Keun • 8 Noh Jung-Yoon • 9 Kim Do-Hoon • 10 Choi Yong-soo • 11 Seo Jung-Won • 12 Lee Sang-Hun • 13 Kim Tae-Young • 14 Ko Jong-Soo • 15 Lee Sang-Yoon • 16 Jang Hyung-Seok • 17 Ha Seok-Ju • 18 Hwang Sun-Hong • 19 Jang Dae-Il • 20 Hong Myung-Bo • 21 Lee Dong-Gook • 22 Seo Dong-Myung • Treinador: Cha Bum-Kun (Kim Pyung-Seok).

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 2002:</div>
                <div class="panel-body">
                   1 Lee Woon-jae • 2 Hyun Young-min • 3 Choi Sung-yong • 4 Choi Jin-cheul • 5 Kim Nam-il • 6 Yoo Sang-chul • 7 Kim Tae-young • 8 Choi Tae-uk • 9 Seol Ki-hyeon • 10 Lee Young-pyo • 11 Choi Yong-soo • 12 Kim Byung-ji • 13 Lee Eul-yong • 14 Lee Chun-soo • 15 Lee Min-sung • 16 Cha Du-ri • 17 Yoon Jong-hwan • 18 Hwang Sun-hong • 19 Ahn Jung-hwan • 20 Hong Myung-bo Capitão • 21 Park Ji-sung • 22 Song Chong-gug • 23 Choi Eun-sung • Treinador: Hiddink.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 2006:</div>
                <div class="panel-body">
                   1 Lee Woon‑Jae Capitão • 2 Kim Young‑Chul • 3 Kim Dong‑Jin • 4 Choi Jin‑Cheul • 5 Kim Nam‑Il • 6 Kim Jin-kyu • 7 Park Ji‑Sung • 8 Kim Do‑Heon • 9 Ahn Jung‑Hwan • 10 Park Chu‑Young • 11 Seol Ki‑Hyeon • 12 Lee Young‑Pyo • 13 Lee Eul‑Yong • 14 Lee Chun‑Soo • 15 Baek Ji-hoon • 16 Chung Kyung‑Ho • 17 Lee Ho • 18 Kim Sang‑Sik • 19 Cho Jae‑Jin • 20 Kim Yong‑Dae • 21 Kim Young‑Kwang • 22 Song Chong‑Gug • 23 Cho Won‑Hee • Treinador: Advocaat.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 2010:</div>
                <div class="panel-body">
                   1 Lee Woon-jae • 2 Oh Beom-seok • 3 Kim Hyung-il • 4 Cho Yong-hyung • 5 Kim Nam-il • 6 Kim Bo-kyung • 7 Park Ji-sung Capitão • 8 Kim Jung-woo • 9 Ahn Jung-hwan • 10 Park Chu-young • 11 Lee Seung-yeoul • 12 Lee Young-pyo • 13 Kim Jae-sung • 14 Lee Jung-soo • 15 Kim Dong-jin • 16 Ki Sung-yueng • 17 Lee Chung-yong • 18 Jung Sung-ryong • 19 Yeom Ki-hun • 20 Lee Dong-gook • 21 Kim Young-kwang • 22 Cha Du-ri • 23 Kang Min-soo • Treinador: Huh Jung-moo.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 2014:</div>
                <div class="panel-body">
                   1 Jung Sung-ryong • 2 Kim Chang-soo • 3 Yun Suk-young • 4 Kwak Tae-hwi • 5 Kim Young-gwon • 6 Hwang Seok-ho • 7 Kim Bo-kyung • 8 Ha Dae-sung • 9 Son Heung-min • 10 Park Chu-young • 11 Lee Keun-ho • 12 Lee Yong • 13 Koo Ja-cheol Capitão • 14 Han Kook-young • 15 Park Jong-woo • 16 Ki Sung-yueng • 17 Lee Chung-yong • 18 Kim Shin-wook • 19 Ji Dong-won • 20 Hong Jeong-ho • 21 Kim Seung-gyu • 22 Park Joo-ho • 23 Lee Bum-young • Treinador: Hong Myung-bo.


                </div>
            </div>

           
        </div><!--dados gerais-->

        <div class="row">
            <h2 id="torcidometro">Torcidômetro</h2>
            Na torcida pela Coreia do Sul?
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
