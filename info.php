<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <title>FutHistórias::Extras</title>
    <link rel="shortcut icon" href="img/logo-icon.ico" type="image/x-icon" />

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- imagem do sanduiche -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/carousel.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/slider.css">

    <!-- JAVASCRIPT E JQUERY -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>



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
        <nav>
            <div class="container">
                <div id="titulo-site" class="col-md-5">
                    <img class="logo-site" src="img/logo.png" width="40%" height="40%">
                </div>
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#links-menu">
                        <i class="material-icons" style="color:white;">menu</i>
                    </button>
                </div>

                <nav id="links-menu" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.php">Início</a></li>
                        <li><a href="selecoes.php">Seleções</a></li>
                        <li><a href="torcedometro.php">Torcedômetro</a></li>
                        <li><a href="#">Extras e curiosidades</a></li>
                        <li><a href="sobre_nos.php">Sobre</a></li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>

    <div class="row">
        <div id="cabecalho-pagina" class="col-md-12"></div>
        <div class="container" id="corpoSite">
            <div class="row">
                <div id="info" class="col-md-12">
                    <h2 class="titulo-pagina">EXTRAS E CURIOSIDADES</h2>
                    <hr class="linha-titulo-pagina">
                    <div class="row">
                                    <div class="extra col-sm-6">
                                        <div class="extra-img">
                                            <img class="img-responsive" src="img/extras/1930.jpg">
                                        </div>
                                        <div class="extra-info col-md-6 col-xs-6">
                                            <div class="extra-tipo">
                                                <p>ESTATÍSTICAS - 1930</p>
                                            </div>
                                            <div class="extra-texto">
                                                <p>
                                                    Seleções participantes: 13<br>
                                                    Gols marcados: 70 gols<br>
                                                    Partidas: 18 partidas<br>
                                                    Gols por partida: 3,89 gols por partida<br>
                                                    Melhor ataque: Argentina (18 gols em 5 partidas: 3,6 gols por partida)<br>
                                                    Melhor defesa : Brasil (2 gols)<br>
                                                </p>
                                            </div>
                                            <div class="extra-leia-mais">
                                                <p><a href="https://pt.wikipedia.org/wiki/Copa_do_Mundo_FIFA_de_1930" target="_blank"> + Leia mais</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="extra col-sm-6">
                                        <div class="extra-img">
                                            <img class="img-responsive" src="img/extras/1934-italia.jpg">
                                        </div>
                                        <div class="extra-info col-md-6 col-xs-6">
                                            <div class="extra-tipo">
                                                <p>ESTATÍSTICAS - 1934</p>
                                            </div>
                                            <div class="extra-texto">
                                                <p>
                                                    Seleções participantes: 16<br>
                                                    Gols marcados: 70 gols<br>
                                                    Partidas: 17 partidas<br>
                                                    Gols por partida: 4,12 gols por partida<br>
                                                    Melhor ataque: Itália (12 gols em 5 partidas: 2,4 gols por partida)<br>
                                                    Melhor defesa : Roménia (2 gols)<br>
                                                </p>
                                            </div>
                                            <div class="extra-leia-mais">
                                                <p><a href="https://pt.wikipedia.org/wiki/Copa_do_Mundo_FIFA_de_1934" target="_blank"> + Leia mais</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="extra col-sm-6">
                                        <div class="extra-img">
                                            <img class="img-responsive" src="img/extras/1938.jpg">
                                        </div>
                                        <div class="extra-info col-md-6 col-xs-6">
                                            <div class="extra-tipo">
                                                <p>ESTATÍSTICAS - 1938</p>
                                            </div>
                                            <div class="extra-texto">
                                                <p>
                                                    Seleções participantes: 15<br>
                                                    Gols marcados: 84 gols<br>
                                                    Partidas: 18 partidas<br>
                                                    Gols por partida: 4,67 gols por partida<br>
                                                    Melhor ataque: Hungria (15 gols em 4 partidas: 3,75 gols por partida)<br>
                                                    Melhor defesa : Noruega (2 gols)<br>
                                                </p>
                                            </div>
                                            <div class="extra-leia-mais">
                                                <p><a href="https://pt.wikipedia.org/wiki/Copa_do_Mundo_FIFA_de_1938" target="_blank"> + Leia mais</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="extra col-sm-6">
                                        <div class="extra-img">
                                            <img class="img-responsive" src="img/extras/1950.jpg">
                                        </div>
                                        <div class="extra-info col-md-6 col-xs-6">
                                            <div class="extra-tipo">
                                                <p>ESTATÍSTICAS - 1950</p>
                                            </div>
                                            <div class="extra-texto">
                                                <p>
                                                    Seleções participantes: 13<br>
                                                    Gols marcados: 88 gols<br>
                                                    Partidas: 22 partidas<br>
                                                    Gols por partida: 4 gols por partida<br>
                                                    Melhor ataque: Brasil (22 gols em 6 partidas: 3,67 gols por partida)<br><br>
                                                    Melhor defesa : Inglaterra (2 gols)<br>
                                                </p>
                                            </div>
                                            <div class="extra-leia-mais">
                                                <p><a href="https://pt.wikipedia.org/wiki/Copa_do_Mundo_FIFA_de_1950" target="_blank"> + Leia mais</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="extra col-sm-6">
                                        <div class="extra-img">
                                            <img class="img-responsive" src="img/extras/1954.jpg">
                                        </div>
                                        <div class="extra-info col-md-6 col-xs-6">
                                            <div class="extra-tipo">
                                                <p>ESTATÍSTICAS - 1954</p>
                                            </div>
                                            <div class="extra-texto">
                                                <p>
                                                    Seleções participantes: 16<br>
                                                    Gols marcados: 140 gols<br>
                                                    Partidas: 26 partidas<br>
                                                    Gols por partida: 5,38 gols por partida<br>
                                                    Melhor ataque: Hungria (27 gols em 5 partidas: 5,4 gols por partida)<br>
                                                    Melhor defesa : Jugoslávia (3 gols)<br>

                                                </p>
                                            </div>
                                            <div class="extra-leia-mais">
                                                <p><a href="https://pt.wikipedia.org/wiki/Copa_do_Mundo_FIFA_de_1954" target="_blank"> + Leia mais</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="extra col-sm-6">
                                        <div class="extra-img">
                                            <img class="img-responsive" src="img/extras/1958.jpg">
                                        </div>
                                        <div class="extra-info col-md-6 col-xs-6">
                                            <div class="extra-tipo">
                                                <p>ESTATÍSTICAS - 1958</p>
                                            </div>
                                            <div class="extra-texto">
                                                <p>
                                                    Seleções participantes: 16<br>
                                                    Gols marcados: 121 gols<br>
                                                    Partidas: 34 partidas<br>
                                                    Gols por partida: 3,56 gols por partida<br>
                                                    Melhor ataque: França (23 gols em 6 partidas: 3,83 gols por partida)<br>
                                                    Melhor defesa : Brasil (4 gols)<br>
                                                </p>
                                            </div>
                                            <div class="extra-leia-mais">
                                                <p><a href="https://pt.wikipedia.org/wiki/Copa_do_Mundo_FIFA_de_1958" target="_blank"> + Leia mais</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="extra col-sm-6">
                                        <div class="extra-img">
                                            <img class="img-responsive" src="img/extras/1962.jpg">
                                        </div>
                                        <div class="extra-info col-md-6 col-xs-6">
                                            <div class="extra-tipo">
                                                <p>ESTATÍSTICAS - 1962</p>
                                            </div>
                                            <div class="extra-texto">
                                                <p>
                                                    Seleções participantes: 16<br>
                                                    Gols marcados: 89 gols<br>
                                                    Partidas: 32 partidas<br>
                                                    Gols por partida: 2,78 gols por partida<br>
                                                    Melhor ataque: Brasil (14 gols em 6 partidas: 2,33 gols por partida)<br>
                                                    Melhor defesa : Alemanha(2 gols)<br>
                                                </p>
                                            </div>
                                            <div class="extra-leia-mais">
                                                <p><a href="https://pt.wikipedia.org/wiki/Copa_do_Mundo_FIFA_de_1962" target="_blank"> + Leia mais</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="extra col-sm-6">
                                        <div class="extra-img">
                                            <img class="img-responsive" src="img/extras/1966.jpg">
                                        </div>
                                        <div class="extra-info col-md-6 col-xs-6">
                                            <div class="extra-tipo">
                                                <p>ESTATÍSTICAS - 1966</p>
                                            </div>
                                            <div class="extra-texto">
                                                <p>
                                                    Seleções participantes: 16<br>
                                                    Gols marcados: 89 gols<br>
                                                    Partidas: 32 partidas<br>
                                                    Gols por partida: 2,78 gols por partida<br>
                                                    Melhor ataque: Portugal (17 gols em 6 partidas: 2,83 gols por partida)<br>
                                                    Melhor defesa : Argentina (2 gols)<br>
                                                </p>
                                            </div>
                                            <div class="extra-leia-mais">
                                                <p><a href="https://pt.wikipedia.org/wiki/Copa_do_Mundo_FIFA_de_1966" target="_blank"> + Leia mais</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="extra col-sm-6">
                                        <div class="extra-img">
                                            <img class="img-responsive" src="img/extras/1970.jpg">
                                        </div>
                                        <div class="extra-info col-md-6 col-xs-6">
                                            <div class="extra-tipo">
                                                <p>ESTATÍSTICAS - 1970</p>
                                            </div>
                                            <div class="extra-texto">
                                                <p>
                                                    Seleções participantes: 16<br>
                                                    Gols marcados: 94 gols<br>
                                                    Partidas: 32 partidas<br>
                                                    Gols por partida: 2,94 gols por partida<br>
                                                    Melhor ataque: Brasil (19 gols em 6 partidas: 3,17 gols por partida)<br>
                                                    Melhor defesa : URSS (2 gols)<br>
                                                </p>
                                            </div>
                                            <div class="extra-leia-mais">
                                                <p><a href="https://pt.wikipedia.org/wiki/Copa_do_Mundo_FIFA_de_1970" target="_blank"> + Leia mais</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="extra col-sm-6">
                                        <div class="extra-img">
                                            <img class="img-responsive" src="img/extras/1974.jpg">
                                        </div>
                                        <div class="extra-info col-md-6 col-xs-6">
                                            <div class="extra-tipo">
                                                <p>ESTATÍSTICAS - 1974</p>
                                            </div>
                                            <div class="extra-texto">
                                                <p>
                                                    Seleções participantes: 16<br>
                                                    Gols marcados: 97 gols<br>
                                                    Partidas: 38 partidas<br>
                                                    Gols por partida: 2,55 gols por partida<br>
                                                    Melhor ataque: Polónia (16 gols em 7 partidas: 2,29 gols por partida)<br>
                                                    Melhor defesa : Escócia (1 gols)<br>
                                                </p>
                                            </div>
                                            <div class="extra-leia-mais">
                                                <p><a href="https://pt.wikipedia.org/wiki/Copa_do_Mundo_FIFA_de_1974" target="_blank"> + Leia mais</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="extra col-sm-6">
                                        <div class="extra-img">
                                            <img class="img-responsive" src="img/extras/1978.jpg">
                                        </div>
                                        <div class="extra-info col-md-6 col-xs-6">
                                            <div class="extra-tipo">
                                                <p>ESTATÍSTICAS - 1978</p>
                                            </div>
                                            <div class="extra-texto">
                                                <p>
                                                    Seleções participantes: 16<br>
                                                    Gols marcados: 102 gols<br>
                                                    Partidas: 38 partidas<br>
                                                    Gols por partida: 2,68 gols por partida<br>
                                                    Melhor ataque: Argentina (15 gols em 7 partidas: 2,14 gols por partida)<br>
                                                    Melhor defesa : Espanha (2 gols)<br>
                                                </p>
                                            </div>
                                            <div class="extra-leia-mais">
                                                <p><a href="https://pt.wikipedia.org/wiki/Copa_do_Mundo_FIFA_de_1978" target="_blank"> + Leia mais</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="extra col-sm-6">
                                        <div class="extra-img">
                                            <img class="img-responsive" src="img/extras/1982.jpg">
                                        </div>
                                        <div class="extra-info col-md-6 col-xs-6">
                                            <div class="extra-tipo">
                                                <p>ESTATÍSTICAS - 1982</p>
                                            </div>
                                            <div class="extra-texto">
                                                <p>
                                                    Seleções participantes: 24<br>
                                                    Gols marcados: 146 gols<br>
                                                    Partidas: 52 partidas<br>
                                                    Gols por partida: 2,81 gols por partida<br>
                                                    Melhor ataque: França (16 gols em 7 partidas: 2,29 gols por partida)<br>
                                                    Melhor defesa : Inglaterra (1 gols)<br> 
                                                </p>
                                            </div>
                                            <div class="extra-leia-mais">
                                                <p><a href="https://pt.wikipedia.org/wiki/Copa_do_Mundo_FIFA_de_1982" target="_blank"> + Leia mais</a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="extra col-sm-6">
                                        <div class="extra-img">
                                            <img class="img-responsive" src="img/extras/1986.jpg">
                                        </div>
                                        <div class="extra-info col-md-6 col-xs-6">
                                            <div class="extra-tipo">
                                                <p>ESTATÍSTICAS - 1986</p>
                                            </div>
                                            <div class="extra-texto">
                                                <p>
                                                    Seleções participantes: 24<br>
                                                    Gols marcados: 132 gols<br>
                                                    Partidas: 52 partidas<br>
                                                    Gols por partida: 2,54 gols por partida<br>
                                                    Melhor ataque: Argentina (14 gols em 7 partidas: 2 gols por partida)<br>
                                                    Melhor defesa : Brasil (1 gols)<br>
                                                </p>
                                            </div>
                                            <div class="extra-leia-mais">
                                                <p><a href="https://pt.wikipedia.org/wiki/Copa_do_Mundo_FIFA_de_1986" target="_blank"> + Leia mais</a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="extra col-sm-6">
                                        <div class="extra-img">
                                            <img class="img-responsive" src="img/extras/1990.jpg">
                                        </div>
                                        <div class="extra-info col-md-6 col-xs-6">
                                            <div class="extra-tipo">
                                                <p>ESTATÍSTICAS - 1990</p>
                                            </div>
                                            <div class="extra-texto">
                                                <p>
                                                    Seleções participantes: 24<br>
                                                    Gols marcados: 115 gols<br>
                                                    Partidas: 51 partidas<br>
                                                    Gols por partida: 2,25 gols por partida<br>
                                                    Melhor ataque: Alemanha(15 gols em 7 partidas: 2,14 gols por partida)<br>
                                                    Melhor defesa : Itália (2 gols)<br>
                                                </p>
                                            </div>
                                            <div class="extra-leia-mais">
                                                <p><a href="https://pt.wikipedia.org/wiki/Copa_do_Mundo_FIFA_de_1990" target="_blank"> + Leia mais</a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="extra col-sm-6">
                                        <div class="extra-img">
                                            <img class="img-responsive" src="img/extras/1994.jpg">
                                        </div>
                                        <div class="extra-info col-md-6 col-xs-6">
                                            <div class="extra-tipo">
                                                <p>ESTATÍSTICAS - 1994</p>
                                            </div>
                                            <div class="extra-texto">
                                                <p>
                                                    Seleções participantes: 24<br>
                                                    Gols marcados: 141 gols<br>
                                                    Partidas: 52 partidas<br>
                                                    Gols por partida: 2,71 gols por partida<br>
                                                    Melhor ataque: Suécia (15 gols em 7 partidas: 2,14 gols por partida)<br>
                                                    Melhor defesa : Noruega (1 gols)<br>
                                                </p>
                                            </div>
                                            <div class="extra-leia-mais">
                                                <p><a href="https://pt.wikipedia.org/wiki/Copa_do_Mundo_FIFA_de_1994" target="_blank"> + Leia mais</a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="extra col-sm-6">
                                        <div class="extra-img">
                                            <img class="img-responsive" src="img/extras/1998.jpg">
                                        </div>
                                        <div class="extra-info col-md-6 col-xs-6">
                                            <div class="extra-tipo">
                                                <p>ESTATÍSTICAS - 1998</p>
                                            </div>
                                            <div class="extra-texto">
                                                <p>
                                                    Seleções participantes: 32<br>
                                                    Gols marcados: 171 gols<br>
                                                    Partidas: 64 partidas<br>
                                                    Gols por partida: 2,67 gols por partida<br>
                                                    Melhor ataque: França (15 gols em 7 partidas: 2,14 gols por partida)<br>
                                                    Melhor defesa : França (2 gols)<br>
                                                </p>
                                            </div>
                                            <div class="extra-leia-mais">
                                                <p><a href="https://pt.wikipedia.org/wiki/Copa_do_Mundo_FIFA_de_1998" target="_blank"> + Leia mais</a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="extra col-sm-6">
                                        <div class="extra-img">
                                            <img class="img-responsive" src="img/extras/2002.jpg">
                                        </div>
                                        <div class="extra-info col-md-6 col-xs-6">
                                            <div class="extra-tipo">
                                                <p>ESTATÍSTICAS - 2002</p>
                                            </div>
                                            <div class="extra-texto">
                                                <p>
                                                    Seleções participantes: 32<br>
                                                    Gols marcados: 161 gols<br>
                                                    Partidas: 64 partidas<br>
                                                    Gols por partida: 2,52 gols por partida<br>
                                                    Melhor ataque: Brasil (18 gols em 7 partidas: 2,57 gols por partida)<br>
                                                    Melhor defesa : Argentina (2 gols)<br>
                                                </p>
                                            </div>
                                            <div class="extra-leia-mais">
                                                <p><a href="https://pt.wikipedia.org/wiki/Copa_do_Mundo_FIFA_de_2002" target="_blank"> + Leia mais</a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="extra col-sm-6">
                                        <div class="extra-img">
                                            <img class="img-responsive" src="img/extras/2006.jpg">
                                        </div>
                                        <div class="extra-info col-md-6 col-xs-6">
                                            <div class="extra-tipo">
                                                <p>ESTATÍSTICAS - 2006</p>
                                            </div>
                                            <div class="extra-texto">
                                                <p>
                                                    Seleções participantes: 32<br>
                                                    Gols marcados: 147 gols<br>
                                                    Partidas: 64 partidas<br>
                                                    Gols por partida: 2,3 gols por partida<br>
                                                    Melhor ataque: Alemanha (14 gols em 7 partidas: 2 gols por partida)<br>
                                                    Melhor defesa : Suíça (0 gol)<br>
                                                </p>
                                            </div>
                                            <div class="extra-leia-mais">
                                                <p><a href="https://pt.wikipedia.org/wiki/Copa_do_Mundo_FIFA_de_2006" target="_blank"> + Leia mais</a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="extra col-sm-6">
                                        <div class="extra-img">
                                            <img class="img-responsive" src="img/extras/2010.jpg">
                                        </div>
                                        <div class="extra-info col-md-6 col-xs-6">
                                            <div class="extra-tipo">
                                                <p>ESTATÍSTICAS - 2010</p>
                                            </div>
                                            <div class="extra-texto">
                                                <p>
                                                    Seleções participantes: 32<br>
                                                    Gols marcados: 146 gols<br>
                                                    Partidas: 64 partidas<br>
                                                    Gols por partida: 2,28 gols por partida<br>
                                                    Melhor ataque: Alemanha (16 gols em 7 partidas: 2,29 gols por partida)<br>
                                                    Melhor defesa : Portugal (1 gols)<br>
                                                </p>
                                            </div>
                                            <div class="extra-leia-mais">
                                                <p><a href="https://pt.wikipedia.org/wiki/Copa_do_Mundo_FIFA_de_2010" target="_blank"> + Leia mais</a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="extra col-sm-6">
                                        <div class="extra-img">
                                            <img class="img-responsive" src="img/extras/2014.jpg">
                                        </div>
                                        <div class="extra-info col-md-6 col-xs-6">
                                            <div class="extra-tipo">
                                                <p>ESTATÍSTICAS - 2014</p>
                                            </div>
                                            <div class="extra-texto">
                                                <p>
                                                    Seleções participantes: 32<br>
                                                    Gols marcados: 171 gols<br>
                                                    Partidas: 64 partidas<br>
                                                    Gols por partida: 2,67 gols por partida<br>
                                                    Melhor ataque: Alemanha (18 gols em 7 partidas: 2,57 gols por partida)<br>
                                                    Melhor defesa : Costa Rica (2 gols)<br>
                                                </p>
                                            </div>
                                            <div class="extra-leia-mais">
                                                <p><a href="https://pt.wikipedia.org/wiki/Copa_do_Mundo_FIFA_de_2014" target="_blank"> + Leia mais</a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="extra col-sm-6">
                                        <div class="extra-img">
                                            <img class="img-responsive" src="img/extras/Brasil-Copa-do-Mundo.jpg">
                                        </div>
                                        <div class="extra-info col-md-6 col-xs-6">
                                            <div class="extra-tipo">
                                                <p>SELEÇÕES QUE MAIS PARTICIPARAM</p>
                                            </div>
                                            <div class="extra-texto">
                                                <p>
                                                    1º - Brasil, 21 participações (1930 a 2018);<br>
                                                    2º - Alemanha, 19 participações (1934 a 2018, exceto 1950);<br>
                                                    3º - Itália, 18 participações (1934 2014, exceto 1958).<br>

                                                </p>
                                            </div>
                                            <div class="extra-leia-mais">
                                                <p><a href="https://pt.wikipedia.org/wiki/Participa%C3%A7%C3%B5es_das_sele%C3%A7%C3%B5es_nacionais_na_Copa_do_Mundo_de_Futebol" target="_blank"> + Leia mais</a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="extra col-sm-6">
                                        <div class="extra-img">
                                            <img class="img-responsive" src="img/extras/Alemanha-Copa-do-Mundo.jpg">
                                        </div>
                                        <div class="extra-info col-md-6 col-xs-6">
                                            <div class="extra-tipo">
                                                <p>MAIORES CAMPEÕES</p>
                                            </div>
                                            <div class="extra-texto">
                                                <p>
                                                    1º Brasil, 5 títulos (1958, 1962, 1970, 1994 e 2002);<br>
                                                    2º - Alemanha, 4 títulos (1954, 1974, 1990 e 2014);<br>
                                                    3º - Itália, 4 títulos (1934, 1938, 1982 e 2006).<br>

                                                </p>
                                            </div>
                                            <div class="extra-leia-mais">
                                                <p><a href="https://pt.wikipedia.org/wiki/Copa_do_Mundo_FIFA#Por_sele%C3%A7%C3%B5es[125]" target="_blank"> + Leia mais</a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="extra col-sm-6">
                                        <div class="extra-img">
                                            <img class="img-responsive" src="img/extras/Italia-Copa-do-Mundo.jpg">
                                        </div>
                                        <div class="extra-info col-md-6 col-xs-6">
                                            <div class="extra-tipo">
                                                <p>JOGADORES QUE MAIS PARTICIPARÃO</p>
                                            </div>
                                            <div class="extra-texto">
                                                <p>
                                                    - O mexicano Antonio Carbajal (1950, 1954, 1958, 1962, 1966);<br>
                                                    - O alemão Lothar Matthäus (1982, 1986, 1990, 1994, 1998);<br>
                                                    - O italiano Gianluigi Buffon (1998, 2002, 2006, 2010, 2014).<br>

                                                </p>
                                            </div>
                                            <div class="extra-leia-mais">
                                                <p><a href="https://pt.wikipedia.org/wiki/Lista_de_futebolistas_com_mais_Copas_do_Mundo_FIFA_disputadas" target="_blank"> + Leia mais</a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="extra col-sm-6">
                                        <div class="extra-img">
                                            <img class="img-responsive" src="img/extras/Argentina-Copa-do-Mundo.jpg">
                                        </div>
                                        <div class="extra-info col-md-6 col-xs-6">
                                            <div class="extra-tipo">
                                                <p>MAIORES GOLEADAS</p>
                                            </div>
                                            <div class="extra-texto">
                                                <p>
                                                    1º - Hungria 10 x 1 El Salvador em 5 de junho de 1982;<br>
                                                    2º - Iugoslávia 9 x 0 Zaire em 18 de junho de 1974;<br>
                                                    3º - Hungria 9 x 0 Coréia do Sul em 17 de junho de 1954.<br>

                                                </p>
                                            </div>
                                            <div class="extra-leia-mais">
                                                <p><a href="https://noticias.bol.uol.com.br/bol-listas/as-15-maiores-goleadas-em-copas-do-mundo.htm" target="_blank"> + Leia mais</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="extra col-sm-6">
                                        <div class="extra-img">
                                            <img class="img-responsive" src="img/extras/selecao-mais-vitorias.jpg">
                                        </div>
                                        <div class="extra-info col-md-6 col-xs-6">
                                            <div class="extra-tipo">
                                                <p>RANKING POR VITÓRIAS</p>
                                            </div>
                                            <div class="extra-texto">
                                                <p>
                                                    1º - Alemanha, venceu 70 jogos;<br>
                                                    2º - Brasil, venceu 66 jogos;<br>
                                                    3º - Itália, venceu 45 jogos.
                                                </p>
                                            </div>
                                            <div class="extra-leia-mais">
                                                <p><a href="http://futpedia.globo.com/campeonato/copa-do-mundo" target="_blank"> + Leia mais</a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="extra col-sm-6">
                                        <div class="extra-img">
                                            <img class="img-responsive" src="img/extras/klose.jpg">
                                        </div>
                                        <div class="extra-info col-md-6 col-xs-6">
                                            <div class="extra-tipo">
                                                <p>ARTILHARIA</p>
                                            </div>
                                            <div class="extra-texto">
                                                <p>
                                                    Miroslav Klose (Alemanha) é o<br> maior artilheiro de todas as<br> copas com 16 gols.
                                                </p>
                                            </div>
                                            <div class="extra-leia-mais">
                                                <p><a href="https://pt.wikipedia.org/wiki/Lista_de_artilheiros_da_Copa_do_Mundo_FIFA" target="_blank"> + Leia mais</a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="extra col-sm-6">
                                        <div class="extra-img">
                                            <img class="img-responsive" src="img/extras/selecao-mais-derrotas.jpg">
                                        </div>
                                        <div class="extra-info col-md-6 col-xs-6">
                                            <div class="extra-tipo">
                                                <p>RANKING POR DERROTAS</p>
                                            </div>
                                            <div class="extra-texto">
                                                <p>
                                                    1º - México, perdeu 25 jogos;<br>
                                                    2º - Argentina, perdeu 21 jogos;<br>
                                                    3º - Alemanha, perdeu 20 jogos.
                                                </p>
                                            </div>
                                            <div class="extra-leia-mais">
                                                <p><a href="https://pt.wikipedia.org/wiki/Recordes_da_Copa_do_Mundo_FIFA#Geral" target="_blank"> + Leia mais</a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="extra col-sm-6">
                                        <div class="extra-img">
                                            <img class="img-responsive" src="img/extras/selecao-mais-gols.jpeg">
                                        </div>
                                        <div class="extra-info col-md-6 col-xs-6">
                                            <div class="extra-tipo">
                                                <p>RANKING POR GOLS</p>
                                            </div>
                                            <div class="extra-texto">
                                                <p>
                                                    1º - Alemanha, marcou 224 gols;<br>
                                                    2º - Brasil, marcou 221 gols;<br>
                                                    3º - Argentina, marcou 131 gols.
                                                </p>
                                            </div>
                                            <div class="extra-leia-mais">
                                                <p><a href="https://pt.wikipedia.org/wiki/Recordes_da_Copa_do_Mundo_FIFA#Geral" target="_blank"> + Leia mais</a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="extra col-sm-6">
                                        <div class="extra-img">
                                            <img class="img-responsive" src="img/extras/hungria-1964.jpg">
                                        </div>
                                        <div class="extra-info col-md-6 col-xs-6">
                                            <div class="extra-tipo">
                                                <p>NUMERO DE GOLS EM UMA EDIÇÃO</p>
                                            </div>
                                            <div class="extra-texto">
                                                <p>
                                                    Hungria é a seleção com maior<br> número de gols em uma só <br>copa:
                                                    Em 1954, 27 gols em 5 <br>partidas (média de 5,40 gols <br>por jogo).
                                                </p>
                                            </div>
                                            <div class="extra-leia-mais">
                                                <p><a href="https://pt.wikipedia.org/wiki/Recordes_da_Copa_do_Mundo_FIFA#Maiores_goleadas_por_edi%C3%A7%C3%A3o" target="_blank"> + Leia mais</a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="extra col-sm-6">
                                        <div class="extra-img">
                                            <img class="img-responsive" src="img/extras/gols-sofridos.jpg">
                                        </div>
                                        <div class="extra-info col-md-6 col-xs-6">
                                            <div class="extra-tipo">
                                                <p>RANKING GOLS SOFRIDOS</p>
                                            </div>
                                            <div class="extra-texto">
                                                <p>
                                                    1º - Alemanha, sofreu 121 gols;<br>
                                                    2º - Brasil, sofreu 102 gols;<br>
                                                    3º - México, sofreu 92 gols.
                                                </p>
                                            </div>
                                            <div class="extra-leia-mais">
                                                <p><a href="https://pt.wikipedia.org/wiki/Recordes_da_Copa_do_Mundo_FIFA#Geral" target="_blank"> + Leia mais</a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="extra col-sm-6">
                                        <div class="extra-img">
                                            <img class="img-responsive" src="img/extras/mais-participacoes.jpg">
                                        </div>
                                        <div class="extra-info col-md-6 col-xs-6">
                                            <div class="extra-tipo">
                                                <p>MAIS PARTICIPAÇÕES</p>
                                            </div>
                                            <div class="extra-texto">
                                                <p>
                                                    O Brasil é a única seleção a <br>participar de todas as edições<br> da copa. São 21 participações <br> (1930 a 2018).
                                                </p>
                                            </div>
                                            <div class="extra-leia-mais">
                                                <p><a href="https://pt.wikipedia.org/wiki/Recordes_da_Copa_do_Mundo_FIFA#Geral" target="_blank"> + Leia mais</a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="extra col-sm-6">
                                        <div class="extra-img">
                                            <img class="img-responsive" src="img/extras/mais-finais.jpg">
                                        </div>
                                        <div class="extra-info col-md-6 col-xs-6">
                                            <div class="extra-tipo">
                                                <p>MAIS FINAIS</p>
                                            </div>
                                            <div class="extra-texto">
                                                <p>
                                                    1ª - Alemanha, 8 finais;</br>
                                                    2º - Brasil, 7 finais;</br>
                                                    3º - França, 6  finais.
                                                </p>
                                            </div>
                                            <div class="extra-leia-mais">
                                                <p><a href="https://pt.wikipedia.org/wiki/Recordes_da_Copa_do_Mundo_FIFA#Geral" target="_blank"> + Leia mais</a></p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row" id="rodape">
        <div class="container">
            <h3>FutHistórias</h3>
            <h5> Tudo que você quer saber sobre as seleções da copa de 2018</h5>
            <button onclick="topFunction()" id="myBtn" title="Voltar ao topo"><img src="img/seta_cima.png" width="30" height="30"></button>
        </div>
    </div> <!--Rodape-->

</div>


    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
