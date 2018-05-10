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
                <img class="img-responsive col-md-2" style="width: 330px; height: 200px;" src="../img/selecoes/brasil/Brasil.png">  <!--width="150px" height="120px"-->
                <div class="titulo-selecao col-md-8">
                    <h1>Seleção Brasileira de Futebol</h1>
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
           
                <p align = "justify">A Seleção Brasileira de Futebol é a seleção mais bem-sucedida na história das Copas do Mundo com cinco conquistas de um total de 21 títulos internacionais oficiais - até 2013.</p>
                 <p align = "justify">Um lema comum da seleção nacional é: "os ingleses o inventaram, mas os brasileiros o aperfeiçoaram". O Brasil é consistente entre as nações mais fortes de futebol do planeta, costuma 
			figurar nas primeiras colocações do Ranking FIFA e é a única equipe a ter jogado em todas as Copas do Mundo. Destaques para Pelé, eleito pela FIFA, como futebolista do século XX e único jogador 
			presente em três equipes vitoriosas em mundiais e Ronaldo, o Fenômeno, artilheiro isolado em Copas do Mundo, com 15 gols.</p>
               <p align = "justify"> Nas Eliminatórias do continente, a seleção venceu 12 dos 18 jogos disputados, perdendo apenas um. A única derrota veio na estreia, contra o Chile, fora de casa. Com a campanha, terminou na 
				liderança, com 41 pontos conquistados e 10 pontos na frente do Uruguai, o segundo no torneio.A equipe terminou como o melhor ataque e a melhor defesa, marcando 41 gols e sofrendo apenas 11.</p>
				<p align = "justify">Sendo a única seleção a participar de todas as edições da Copa do Mundo, o Brasil vem como um dos favoritos ao título em 2018, na Rússia.
<p align = "justify">O Brasil possui inúmeros destaques individuais, dentre eles: Alisson, goleiro de 25 anos da Roma, que possui 24 jogos pelo Brasil; Marcelo, lateral de 29 anos do Real Madrid, que possui 52 jogos e 6 gols pelo Brasil; Casemiro, meio-campista de 26 anos do Real Madrid, que possui 22 jogos pelo Brasil; Philippe Coutinho, meio-campista de 25 anos do Barcelona, que possui 35 jogos e 9 gols pelo Brasil; Gabriel Jesus, atacante de 21 anos do Manchester City, que possui 15 jogos e 9 gols pelo Brasil; Neymar, atacante de 26 anos do PSG, que possui 83 jogos e 53 gols pelo Brasil.</p>
<p align = "justify">O Brasil foi sorteado no grupo E na Copa do Mundo de 2018, com Suíça, Costa Rica e Sérvia.</p>
	<p align = "justify">Apesar de não haver uma seleção muito tradicional no grupo, todas elas podem dificultar de alguma maneira a vida da seleção brasileira.</p>
	<p align = "justify">Mas o Brasil é amplo favorito para a liderança do grupo, contanto que apresente o bom futebol que vem mostrando ultimamente.</p>
	<p align = "justify">A Suíça é a principal ameaça para o Brasil, por ser uma seleção qualificada, que fez uma sólida eliminatória, além de ser a adversária da estreia, onde o nervosismo pode pesar.</p>
<p align = "justify">Uma campanha sólida do Brasil é o mínimo que se espera para essa Copa do Mundo,para tentar apagar o fiasco da semifinal da última copa, o incrível 7x1 para a Alemanha, com a Seleção sendo uma das favoritas ao título mundial.</p>

				
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
                <div class="panel-heading">PARTICIPAÇÕES EM COPAS DO MUNDO : 21</div>
                <div class="panel-body"> (1930 - 1934 - 1938 - 1950 - 1954 - 1958 - 1962 - 1966 - 1970 - 1974 - 1978 - 1982 - 1986 - 1990 - 1994 - 1998 - 2002 - 2006 - 2010 - 2014 - 2018)</div>
            </div>

             <div class="panel with panel-primary class">
                <div class="panel-heading">TÍTULOS</div>
                <div class="panel-body"> Copa do Mundo: 5 (1958 - 1962 - 1970 - 1994 - 2002)</div>
                <div class="panel-body"> Copa das Confederações: 4 (1997 - 2005 - 2009 - 2013)</div>
                <div class="panel-body"> Copa América: 8 (1919 - 1922 - 1949 - 1989 - 1997 - 1999 - 2004 - 2007)</div>
            </div>


            <h2 id="elenco-copas">Elenco em Copas do Mundo</h2>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1930:</div>
                <div class="panel-body">AT Araken Patusca • AT Benedicto • MC Benevenuto • DF Brilhante • AT Carvalho Leite • AT Doca • MC Fausto • MC Fernando • MC Fortes • MC Hermógenes • DF Itália • MC Ivan • G Joel • MC Manuelzinho • AT Moderato • AT Nilo • MC Oscarino • MC Pamplona • AT Poli • AT Preguinho Capitão • AT Russinho • AT Teóphilo • G Velloso • DF Zé Luís • Treinador: Carvalho.
                </div>
            </div>


            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1934:</div>
                <div class="panel-body">
                  MC Ariel • AT Armandinho • AT Áttila • MC Canalli • AT Carvalho Leite • G Germano • AT Leônidas da Silva • DF Luís Luz • AT Luisinho • MC Martim Silveira Capitão • DF Octacílio • AT Patesko • G Pedrosa • DF Sylvio • MC Tinoco • MC Waldyr • AT Waldemar de Brito • Treinador: Vinhais.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1938:</div>
                <div class="panel-body">
                  MC Afonsinho • MC Argemiro • G Batatais • MC Brandão • MC Brito • DF Domingos da Guia • AT Hércules • DF Jaú • AT Leônidas Capitão • AT Lopes • AT Luisinho • DF Machado • MC Martim Silveira Capitão • DF Nariz • AT Niginho • AT Patesko • AT Perácio • AT Roberto • AT Romeu • AT Tim • G Walter • MC Zezé Procópio • Treinador: Pimenta.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">1950:</div>
                <div class="panel-body">
                   1 Barbosa • 2 Castilho • 3 Augusto da Costa Capitão • 4 Ely • 5 Juvenal • 6 Nena • 7 Nílton Santos • 8 Bauer • 9 Bigode • 10 Danilo • 11 Noronha • 12 Rui • 13 Adãozinho • 14 Ademir • 15 Alfredo • 16 Baltazar • 17 Chico • 18 Friaça • 19 Jair • 20 Maneca • 21 Rodrigues • 22 Zizinho • Treinador: Flávio Costa.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1954:</div>
                <div class="panel-body">
                  1 Castilho • 2 Djalma Santos • 3 Nílton Santos • 4 Brandãozinho • 5 Pinheiro • 6 Bauer Capitão • 7 Julinho • 8 Didi • 9 Baltazar • 10 Pinga • 11 Rodrigues • 12 Paulinho de Almeida • 13 Alfredo Ramos • 14 Ely • 15 Mauro • 16 Dequinha • 17 Maurinho • 18 Humberto • 19 Índio • 20 Rubens • 21 Veludo • 22 Cabeção • Treinador: Zezé Moreira.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1958:</div>
                <div class="panel-body">
                  1 Castilho • 2 Bellini Capitão • 3 Gilmar • 4 Djalma Santos • 5 Dino Sani • 6 Didi • 7 Zagallo • 8 Oreco • 9 Zózimo • 10 Pelé • 11 Garrincha • 12 Nílton Santos • 13 Moacir • 14 de Sordi • 15 Orlando • 16 Mauro • 17 Joel • 18 Mazzola • 19 Zito • 20 Vavá • 21 Dida • 22 Pepe • Treinador: Feola.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1962:</div>
                <div class="panel-body">
                  1 Gilmar • 2 Djalma Santos • 3 Mauro Ramos Capitão • 4 Zito • 5 Zózimo • 6 Nílton Santos • 7 Garrincha • 8 Didi • 9 Coutinho • 10 Pelé • 11 Pepe • 12 Jair Marinho • 13 Bellini • 14 Jurandir • 15 Altair • 16 Zequinha • 17 Mengálvio • 18 Jair da Costa • 19 Vavá • 20 Amarildo • 21 Zagallo • 22 Castilho • Treinador: Aymoré Moreira.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1966:</div>
                <div class="panel-body">
                  1 Gilmar • 2 Djalma Santos • 3 Fidélis • 4 Bellini Capitão • 5 Brito • 6 Altair • 7 Orlando Capitão • 8 Paulo Henrique • 9 Rildo • 10 Pelé • 11 Gérson • 12 Manga • 13 Denílson • 14 Lima • 15 Zito • 16 Garrincha • 17 Jairzinho • 18 Alcindo • 19 Silva • 20 Tostão • 21 Paraná • 22 Edu • Treinador: Vicente Feola.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1970:</div>
                <div class="panel-body">
                  1 Félix • 2 Brito • 3 Wilson Piazza • 4 Carlos Alberto Capitão • 5 Clodoaldo • 6 Marco Antônio • 7 Jairzinho • 8 Gérson • 9 Tostão • 10 Pelé • 11 Rivellino • 12 Ado • 13 Roberto • 14 Baldocchi • 15 Fontana • 16 Everaldo • 17 Joel • 18 Paulo Cézar Caju • 19 Edu • 20 Dadá Maravilha • 21 Zé Maria • 22 Leão • Treinador: Zagallo.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1974:</div>
                <div class="panel-body">
                  1 Leão • 2 Luís Pereira • 3 Marinho Peres Capitão • 4 Zé Maria • 5 Piazza Capitão • 6 Marinho Chagas • 7 Jairzinho • 8 Leivinha • 9 César Maluco • 10 Rivellino • 11 Paulo Cézar Caju • 12 Renato • 13 Valdomiro • 14 Nelinho • 15 Alfredo Mostarda • 16 Marco Antônio • 17 Carpegiani • 18 Ademir • 19 Mirandinha • 20 Edu • 21 Dirceu • 22 Waldir Peres • Treinador: Zagallo.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1978:</div>
                <div class="panel-body">
                 1 Leão Capitão • 2 Toninho • 3 Oscar • 4 Amaral • 5 Toninho Cerezo • 6 Edinho • 7 Zé Sérgio • 8 Zico • 9 Reinaldo • 10 Rivellino • 11 Dirceu • 12 Carlos • 13 Nelinho • 14 Abel • 15 Polozzi • 16 Rodrigues Neto • 17 Batista • 18 Gil • 19 Jorge Mendonça • 20 Roberto Dinamite • 21 Chicão • 22 Waldir Peres • Treinador: Cláudio Coutinho.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1982:</div>
                <div class="panel-body">
                  1 Waldir Peres • 2 Leandro • 3 Oscar • 4 Luizinho • 5 Toninho Cerezo • 6 Júnior • 7 Paulo Isidoro • 8 Sócrates Capitão • 9 Serginho • 10 Zico • 11 Éder • 12 Paulo Sérgio • 13 Edevaldo • 14 Juninho Fonseca • 15 Falcão • 16 Edinho • 17 Pedrinho • 18 Batista • 19 Renato • 20 Roberto Dinamite • 21 Dirceu • 22 Carlos • Treinador: Telê.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1986:</div>
                <div class="panel-body">
                  1 Carlos • 2 Édson • 3 Oscar • 4 Edinho Capitão • 5 Falcão • 6 Júnior • 7 Müller • 8 Casagrande • 9 Careca • 10 Zico • 11 Edivaldo • 12 Paulo Vítor • 13 Josimar • 14 Júlio César • 15 Alemão • 16 Mauro Galvão • 17 Branco • 18 Sócrates • 19 Elzo • 20 Silas • 21 Valdo • 22 Leão • Treinador: Telê.


                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1990:</div>
                <div class="panel-body">
                  1 Taffarel • 2 Jorginho • 3 Ricardo Gomes Capitão • 4 Dunga • 5 Alemão • 6 Branco • 7 Bismarck • 8 Valdo • 9 Careca • 10 Silas • 11 Romário • 12 Acácio • 13 Mozer • 14 Aldair • 15 Müller • 16 Bebeto • 17 Renato Gaúcho • 18 Mazinho • 19 Ricardo Rocha • 20 Tita • 21 Mauro Galvão • 22 Zé Carlos • Treinador: Lazaroni.


                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1994:</div>
                <div class="panel-body">
                  1 Taffarel • 2 Jorginho • 3 Ricardo Rocha • 4 Ronaldão • 5 Mauro Silva • 6 Branco • 7 Bebeto • 8 Dunga Capitão • 9 Zinho • 10 Raí • 11 Romário • 12 Zetti • 13 Aldair • 14 Cafu • 15 Márcio Santos • 16 Leonardo • 17 Mazinho • 18 Paulo Sérgio • 19 Müller • 20 Ronaldo • 21 Viola • 22 Gilmar • Treinador: Parreira.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 1998:</div>
                <div class="panel-body">
                  1 Taffarel • 2 Cafu • 3 Aldair • 4 Júnior Baiano‎ • 5 César Sampaio • 6 Roberto Carlos • 7 Giovanni • 8 Dunga Capitão • 9 Ronaldo • 10 Rivaldo • 11 Emerson • 12 Carlos Germano • 13 Zé Carlos • 14 Gonçalves • 15 André Cruz • 16 Zé Roberto • 17 Doriva • 18 Leonardo • 19 Denílson • 20 Bebeto • 21 Edmundo • 22 Dida • Treinador: Zagallo.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 2002:</div>
                <div class="panel-body">
                  1 Marcos • 2 Cafu Capitão • 3 Lúcio • 4 Roque Júnior • 5 Edmílson • 6 Roberto Carlos • 7 Ricardinho • 8 Gilberto Silva • 9 Ronaldo • 10 Rivaldo • 11 Ronaldinho • 12 Dida • 13 Belletti • 14  nderson Polga • 15 Kléberson • 16 Júnior • 17 Denílson • 18 Vampeta • 19 Juninho Paulista • 20 Edílson • 21 Luizão • 22 Rogério Ceni • 23 Kaká • Treinador: Scolari.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 2006:</div>
                <div class="panel-body">
                  1 Dida • 2 Cafu Capitão • 3 Lúcio • 4 Juan • 5 Emerson • 6 Roberto Carlos • 7 Adriano • 8 Kaká • 9 Ronaldo • 10 Ronaldinho • 11 Zé Roberto • 12 Rogério Ceni • 13 Cicinho • 14 Luisão • 15 Cris • 16 Gilberto • 17 Gilberto Silva • 18 Mineiro • 19 Juninho Pernambucano • 20 Ricardinho • 21 Fred • 22 Júlio César • 23 Robinho • Treinador: Parreira.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 2010:</div>
                <div class="panel-body">
                  1 Júlio César • 2 Maicon • 3 Lúcio Capitão • 4 Juan • 5 Felipe Melo • 6 Michel Bastos • 7 Elano • 8 Gilberto Silva • 9 Luís Fabiano • 10 Kaká • 11 Robinho • 12 Gomes • 13 Daniel Alves • 14 Luisão • 15 Thiago Silva • 16 Gilberto • 17 Josué • 18 Ramires • 19 Júlio Baptista • 20 Kléberson • 21 Nilmar • 22 Doni • 23 Grafite • Treinador: Dunga.

                </div>
            </div>

            <div class="panel with panel-primary class">
                <div class="panel-heading">ELENCO COPA 2014:</div>
                <div class="panel-body">
                  1 Jefferson • 2 Daniel Alves • 3 Thiago Silva Capitão • 4 David Luiz • 5 Fernandinho • 6 Marcelo • 7 Hulk • 8 Paulinho • 9 Fred • 10 Neymar • 11 Oscar • 12 Júlio César • 13 Dante • 14 Maxwell • 15 Henrique • 16 Ramires • 17 Luiz Gustavo • 18 Hernanes • 19 Willian • 20 Bernard • 21 Jô • 22 Victor • 23 Maicon • Treinador: Luiz Felipe Scolari.

                </div>
            </div>

        


        
        </div><!--dados gerais-->

        <div class="row">
            <h2 id="torcidometro">Torcidômetro</h2>
            Na torcida pelo Brasil?
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
