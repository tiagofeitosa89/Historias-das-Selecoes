<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.js" rel="stylesheet">

    <title>Futistórias::Home</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/carousel.css" rel="stylesheet" type="text/css">

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
                <h3>FutHistórias</h3>
            </div>
            <div class="topnav" id="myTopnav">
                <a href="#">Home</a>
                <a href="selecoes.php">Seleções</a>
                <a href="fasegrupos.php">Fase de grupos</a>
                <a href="info.php">Informações e curiosidades</a>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">Menu</a>
            </div>
        </div>
    </div>


    <div class="row">
        <div id="principais-selecoes" class="container">
            <div id="col-1-img-selecoes" class="col-md-2">
                <div class="img-selecao col-md-6">
                    <h5>SELEÇÃO<br>FRANCESA</h5>
                    <a href="#">
                        <img class="selecao-mini" src="img/selecoes-principais/franca.jpg" class="image responsive">
                    </a>
                </div>
                <div class="img-selecao col-md-6">
                    <h5>SELEÇÃO<br>BRASILEIRA</h5>
                    <a href="#">
                        <img class="selecao-mini" src="img/selecoes-principais/brasil.png" class="image responsive">
                    </a>
                </div>
                <div class="img-selecao col-md-6">
                    <h5>SELEÇÃO<br>ARGENTINA</h5>
                    <a href="#">
                        <img class="selecao-mini" src="img/selecoes-principais/argentina.jpg" class="image responsive">
                    </a>
                </div>
                <div class="img-selecao col-md-6">
                    <h5>SELEÇÃO<br>ALEMÃ</h5>
                    <a href="#">
                        <img class="selecao-mini" src="img/selecoes-principais/alemanha.jpg" class="image responsive">
                    </a>
                </div>
            </div>
            <div id="col-1-img-selecoes" class="col-md-2">
                <div class="img-selecao col-md-6"></div>
                <div class="img-selecao col-md-6"></div>
                <div class="img-selecao col-md-6"></div>
                <div class="img-selecao col-md-6"></div>
            </div>
            <div id="img-selecao-grande" class="col-md-8">
                <img src="img/selecoes-principais/brasil.png">
            </div>


        </div>
    </div>

    <div class="row" >
          <div class="p-3 mb-2 bg-primary text-white" class="col-md-12" >
          <br><br>
                <div class="container">
                        <div class="row" >
                          <div id="myCarousel" class="carousel slide" data-ride="carousel" >
                            <!-- Carousel indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                                <li data-target="#myCarousel" data-slide-to="3"></li>
                                <li data-target="#myCarousel" data-slide-to="4"></li>
                                <li data-target="#myCarousel" data-slide-to="5"></li>
                                <li data-target="#myCarousel" data-slide-to="6"></li>
                                <li data-target="#myCarousel" data-slide-to="7"></li>
                                <li data-target="#myCarousel" data-slide-to="8"></li>
                                <li data-target="#myCarousel" data-slide-to="9"></li>
                                <li data-target="#myCarousel" data-slide-to="10"></li>
                                <li data-target="#myCarousel" data-slide-to="11"></li>
                                <li data-target="#myCarousel" data-slide-to="12"></li>
                            </ol>   
                            <!-- Wrapper for carousel items -->
                            <div class="carousel-inner" >
                                <div class="item active">
                                    <img src="img/estadios/estadio01.jpg" alt="First Slide" >
                                    <div class="carousel-caption d-none d-md-block">
                                        <p>Estádio Nizhny Novgorod</p>
                                      </div>
                                </div>
                                <div class="item">
                                    <img src="img/estadios/estadio02.jpg" alt="Second Slide">
                                     <div class="carousel-caption d-none d-md-block">
                                        <p>Estádio de Moscou - Luzhniki</p>
                                      </div>
                                </div>
                                <div class="item">
                                    <img src="img/estadios/estadio03.jpg" alt="Third Slide">
                                     <div class="carousel-caption d-none d-md-block">
                                        <p>Estádio de São Petersburgo</p>
                                      </div>
                                </div>
                                <div class="item">
                                    <img src="img/estadios/estadio04.jpg" alt="Third Slide">
                                     <div class="carousel-caption d-none d-md-block">
                                        <p>Estádio Olímpico de Fisht</p>
                                      </div>
                                </div>
                                <div class="item">
                                    <img src="img/estadios/estadio05.jpg" alt="Third Slide">
                                     <div class="carousel-caption d-none d-md-block">
                                        <p>Estádio Central - Ekaterinburg Arena</p>
                                      </div>
                                </div>
                                <div class="item">
                                    <img src="img/estadios/estadio06.jpg" alt="Third Slide">
                                     <div class="carousel-caption d-none d-md-block">
                                        <p>Kazan Arena</p>
                                      </div>
                                </div>
                                <div class="item">
                                    <img src="img/estadios/estadio07.jpg" alt="Third Slide">
                                     <div class="carousel-caption d-none d-md-block">
                                        <p>Rostov Arena</p>
                                      </div>
                                </div>
                                <div class="item">
                                    <img src="img/estadios/estadio08.jpg" alt="Third Slide">
                                     <div class="carousel-caption d-none d-md-block">
                                        <p>Samara Arena</p>
                                      </div>
                                </div>
                                <div class="item">
                                    <img src="img/estadios/estadio09.jpg" alt="Third Slide">
                                     <div class="carousel-caption d-none d-md-block">
                                        <p>Mordovia Arena - Saransk</p>
                                      </div>
                                </div>
                                <div class="item">
                                    <img src="img/estadios/estadio10.jpg" alt="Third Slide">
                                     <div class="carousel-caption d-none d-md-block">
                                        <p>Estádio Volgograd</p>
                                      </div>
                                </div>
                                <div class="item">
                                    <img src="img/estadios/estadio11.jpg" alt="Third Slide">
                                     <div class="carousel-caption d-none d-md-block">
                                        <p>Estádio Spartak - Moscou</p>
                                      </div>
                                </div>
                                <div class="item">
                                    <img src="img/estadios/estadio12.jpg" alt="Third Slide">
                                     <div class="carousel-caption d-none d-md-block">
                                        <p>Estádio de Kaliningrad</p>
                                      </div>
                                </div>
                            </div>
                            <!-- Carousel controls -->
                            <a class="carousel-control left" href="#myCarousel" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="carousel-control right" href="#myCarousel" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                </div>
            </div>
    </div><!--Sobre estadios-->
</div>
    <div class="row">
        <div class="container">
            <div id="noticias" class="col-md-12">
                <h3>NOTÍCIAS DA COPA</h3><hr>
                <div class="row">
                    <div class="col-md-3">
                        <img src="img/noticias/image-1.jpg" width="100%" height="100%">
                        <p class="selecao-noticia">SELEÇÃO</p>
                        <p class="conteudo-noticia">Kroos: ‘O Brasil nos mostrou que não somos tão bons quanto dizem’</p>
                    </div>

                    <div class="col-md-3">
                        <img src="img/noticias/image-1.jpg" width="100%" height="100%">
                        <p class="selecao-noticia">SELEÇÃO</p>
                        <p class="conteudo-noticia">Kroos: ‘O Brasil nos mostrou que não somos tão bons quanto dizem’</p>
                    </div>

                    <div class="col-md-3">
                        <img src="img/noticias/image-1.jpg" width="100%" height="100%">
                        <p class="selecao-noticia">SELEÇÃO</p>
                        <p class="conteudo-noticia">Kroos: ‘O Brasil nos mostrou que não somos tão bons quanto dizem’</p>
                    </div>

                    <div class="col-md-3">
                        <img src="img/noticias/image-1.jpg" width="100%" height="100%">
                        <p class="selecao-noticia">SELEÇÃO</p>
                        <p class="conteudo-noticia">Kroos: ‘O Brasil nos mostrou que não somos tão bons quanto dizem’</p>
                    </div>
                </div>
            </div>
        </div>
    </div><!--Noticias-->


    <div class="row" id="rodape">
        <div class="container">
            <h3>Fut Histórias</h3>
            <h5> Tudo que você quer saber sobre as seleções da copa de 2018</h5>
            <button onclick="topFunction()" id="myBtn" title="Voltar ao topo"><img src="img/seta_cima.png" width="30" height="30"></button>
        </div>
    </div> <!--Rodape-->


</div>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>

</html>