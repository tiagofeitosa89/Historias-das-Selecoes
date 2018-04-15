<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.js" rel="stylesheet">

    <title>Histórias das copas</title>

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
                <h3>Fut Histórias</h3>
            </div>
            <div class="topnav" id="myTopnav">
                <a href="index.php">Home</a>
                <a href="selecoes.php">Seleções</a>
                <a href="fasegrupos.php">Fase de grupos</a>
                <a href="info.php">Informações e curiosidades</a>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">Menu</a>
            </div>
        </div>
    </div>


    <div class="row">
        <!-- Carousel ================================================== -->
        <div id="carousel" class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1" ></li>
                <li data-target="#carousel" data-slide-to="2" ></li>
                <li data-target="#carousel" data-slide-to="3" ></li>
                <li data-target="#carousel" data-slide-to="4" ></li>
            </ol>

            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="img/selecoes-principais/russia.png">
                    <div class="carousel-caption">
                        <h5>PRINCIPAIS SELEÇÕES</h5>
                        <h1>SELEÇÃO RUSSA</h1>
                        <h3><a href="#">Saiba mais</a></h3>
                    </div>
                </div>

                <div class="item">
                    <img src="img/selecoes-principais/brasil.png">
                    <div class="carousel-caption">
                        <h5>PRINCIPAIS SELEÇÕES</h5>
                        <h1>SELEÇÃO BRASILEIRA</h1>
                        <h3><a href="#">Saiba mais</a></h3>
                    </div>
                </div>

                <div class="item">
                    <img src="img/selecoes-principais/alemanha.jpg">
                    <div class="carousel-caption">
                        <h5>PRINCIPAIS SELEÇÕES</h5>
                        <h1>SELEÇÃO ALEMÃ</h1>
                        <h3><a href="#">Saiba mais</a></h3>
                    </div>
                </div>

                <div class="item">
                    <img src="img/selecoes-principais/argentina.jpg">
                    <div class="carousel-caption">
                        <h5>PRINCIPAIS SELEÇÕES</h5>
                        <h1>SELEÇÃO ARGENTINA</h1>
                        <h3><a href="#">Saiba mais</a></h3>
                    </div>
                </div>

                <div class="item">
                    <img src="img/selecoes-principais/franca.jpg">
                    <div class="carousel-caption">
                        <h5>PRINCIPAIS SELEÇÕES</h5>
                        <h1>SELEÇÃO FRANCESA</h1>
                        <h3><a href="#">Saiba mais</a></h3>
                    </div>
                </div>

                <a href="#carousel" class="left carousel-control" data-slide="prev">
                    <i class="glyphicon glyphicon-chevron-left"></i>
                </a>

                <a href="#carousel" class="right carousel-control" data-slide="next">
                    <i class="glyphicon glyphicon-chevron-right"></i>
                </a>

            </div>

        </div>

    </div>

    <div class="row">
        <div id="estadios-copa" class="col-md-12">
            <div class="container">
                <div id="desc-estadios-copa" class="col-md-6 col-xs-12">
                    <h2>CONHEÇA UM POUCO SOBRE OS ESTÁDIOS QUE SEDIARÃO JOGOS DA COPA DE 2018</h2>
                    <h5>Clique no nome do estádio desejado</h5>
                </div>
                <div id="imagem-estadios-copa" class="post-content">
                    <img src="img/estadios.png">
                </div>
            </div>
        </div>
    </div><!--Sobre estadios-->

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