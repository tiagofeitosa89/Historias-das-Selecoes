<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <title>FutHistórias::Seleções</title>
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
                        <li><a href="#">Seleções</a></li>
                        <li><a href="torcedometro.php">Torcedômetro</a></li>
                        <li><a href="info.php">Extras e curiosidades</a></li>
                        <li><a href="sobre_nos.php">Sobre</a></li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>

    <div class="container" id="corpoSite">
        <div class="row">
            <div id="selecoes" class="col-md-12">

                <h2 class="titulo-pagina">SELEÇÕES</h2>
                <hr class="linha-titulo-pagina">
                <div id="grupos">
                    <div class="row">
                        <div id="grupo" class="col-md-3">
                            <h5>GRUPO A</h5>
                            <hr>
                            <div class="row">
                                <a href="selecoes/pagina_selecao.php?id=41"><img src="img/selecoes/ArabiaSaudita-65.png" title="Arábia Saudita"></a>
                                <a href="selecoes/pagina_selecao.php?id=20"><img src="img/selecoes/egito_65.png" title="Egito"></a>
                            </div>
                            <div class="row">
                                <a href="selecoes/pagina_selecao.php?id=34"><img src="img/selecoes/Russia_65.png" title="Russia"></a>
                                <a href="selecoes/pagina_selecao.php?id=40"><img src="img/selecoes/Uruguai_65.png" title="Uruguai"></a>
                            </div>
                            <p> ARÁBIA SAUDITA |  EGITO  |  RÚSSIA  |  URUGUAI</p>
                        </div>

                        <div id="grupo" class="col-md-3">
                            <h5>GRUPO B</h5>
                            <hr>
                            <div class="row">
                                <a href="selecoes/pagina_selecao.php?id=21"> <img src="img/selecoes/ESPANHA-65.png" title="Espanha"></a>
                                <a href="selecoes/pagina_selecao.php?id=24"> <img src="img/selecoes/Ira-65.png" title="Irã"></a>
                            </div>
                            <div class="row">
                                <a href="selecoes/pagina_selecao.php?id=27"> <img src="img/selecoes/marrocos_65.png" title="Marrocos"></a>
                                <a href="selecoes/pagina_selecao.php?id=33"> <img src="img/selecoes/PORTUGAL-65.png" title="Portugal"></a>
                            </div>
                            <p>ESPANHA | IRÃ | MARROCOS | PORTUGAL</p>
                        </div>

                        <div id="grupo" class="col-md-3">
                            <h5>GRUPO C</h5>
                            <hr>
                            <div class="row">
                                <a href="selecoes/pagina_selecao.php?id=14"> <img src="img/selecoes/Australia-65.png" title="Austrália"></a>
                                <a href="selecoes/pagina_selecao.php?id=19"> <img src="img/selecoes/Dinamarca_65.png" title="Dinamarca"></a>
                            </div>
                            <div class="row">
                                <a href="selecoes/pagina_selecao.php?id=22"> <img src="img/selecoes/FRANCA-65.png" title="França"></a>
                                <a href="selecoes/pagina_selecao.php?id=31"> <img src="img/selecoes/Peru_65.png" title="Peru"></a>
                            </div>
                            <p>AUSTRÁLIA | DINAMARCA | FRANÇA | PERU</p>
                        </div>

                        <div id="grupo" class="col-md-3">
                            <h5>GRUPO D</h5>
                            <hr>
                            <div class="row">
                                <a href="selecoes/pagina_selecao.php?id=10"> <img src="img/selecoes/ARGENTINA-65.png" title="Argentina"></a>
                                <a href="selecoes/pagina_selecao.php?id=18"> <img src="img/selecoes/Croacia_65.png" title="Croácia"></a>
                            </div>
                            <div class="row">
                                <a href="selecoes/pagina_selecao.php?id=25"> <img src="img/selecoes/Islandia_65.png" title="Islândia"></a>
                                <a href="selecoes/pagina_selecao.php?id=29"> <img src="img/selecoes/Nigeria_65.png" title="Nigéria"></a>
                            </div>
                            <p>ARGENTINA | CROÁCIA | ISLÂNDIA | NIGÉRIA</p>
                        </div>

                    </div>

                    <div class="row">

                        <div id="grupo" class="col-md-3">
                            <h5>GRUPO E</h5>
                            <hr>
                            <div class="row">
                                <a href="selecoes/pagina_selecao.php?id=17"> <img src="img/selecoes/CostaRica_65.png" title="Costa Rica"></a>
                                <a href="selecoes/pagina_selecao.php?id=13"> <img src="img/selecoes/Brasil_65x65.png" title="Brasil"></a>
                            </div>
                            <div class="row">
                                <a href="selecoes/pagina_selecao.php?id=36"> <img src="img/selecoes/servia_65.png" title="Sérvia"></a>
                                <a href="selecoes/pagina_selecao.php?id=38"> <img src="img/selecoes/suica_65.png" title="Suíça"></a>
                            </div>
                            <p>COSTA RICA | BRASIL | SERVIA | SUICA</p>
                        </div>

                        <div id="grupo" class="col-md-3">
                            <h5>GRUPO F</h5>
                            <hr>
                            <div class="row">
                                <a href="selecoes/pagina_selecao.php?id=11">  <img src="img/selecoes/Alemanha-65.png" title="Alemanha"></a>
                                <a href="selecoes/pagina_selecao.php?id=16"> <img src="img/selecoes/Coreia_Sul_65.png" title="Coréia do Sul"></a>
                            </div>
                            <div class="row">
                                <a href="selecoes/pagina_selecao.php?id=28">    <img src="img/selecoes/Mexico_65.png" title="México"></a>
                                <a href="selecoes/pagina_selecao.php?id=37">    <img src="img/selecoes/SUECIA-65.png" title="Suécia"></a>
                            </div>
                            <p>ALEMANHA | COREIA DO SUL | MEXICO | SUECIA</p>
                        </div>

                        <div id="grupo" class="col-md-3">
                            <h5>GRUPO G</h5>
                            <hr>
                            <div class="row">
                                <a href="selecoes/pagina_selecao.php?id=12"> <img src="img/selecoes/Belgica_65.png" title="Bélgica"></a>
                                <a href="selecoes/pagina_selecao.php?id=23"> <img src="img/selecoes/Inglaterra_65x65.png" title="Inglaterra"></a>
                            </div>
                            <div class="row">
                                <a href="selecoes/pagina_selecao.php?id=30"> <img src="img/selecoes/Panama_65.png" title="Panamá"></a>
                                <a href="selecoes/pagina_selecao.php?id=39">  <img src="img/selecoes/tunisia_65.png" title="Tunísia"></a>
                            </div>
                            <p>BELGICA | INGLATERRA | PANAMA | TUNISIA</p>
                        </div>

                        <div id="grupo" class="col-md-3">
                            <h5>GRUPO H</h5>
                            <hr>
                            <div class="row">
                                <a href="selecoes/pagina_selecao.php?id=15"> <img src="img/selecoes/COLOMBIA-65.png" title="Colômbia"></a>
                                <a href="selecoes/pagina_selecao.php?id=26"><img src="img/selecoes/Japao_65.png" title="Japão"></a>
                            </div>
                            <div class="row">
                                <a href="selecoes/pagina_selecao.php?id=32"> <img src="img/selecoes/Polonia_65.png" title="Polônia"></a>
                                <a href="selecoes/pagina_selecao.php?id=35"><img src="img/selecoes/Senegal-65.png" title="Senegal"></a>
                            </div>
                            <p>COLOMBIA | JAPAO | POLONIA | SENEGAL</p>
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

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>

</html>