<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.js" rel="stylesheet">

    <title>FutHistórias::Início</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/carousel.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/slider.css">

    <script>
        /*funcoes-voltar-topo*/
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
        function topFunction() {
            document.body.scrollTop = 0; // For Safari
            document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
        }

        /*funcoes-slide-principal*/
        var slideIndex = 1;
        showDivs(slideIndex);
        function plusDivs(n) {
            showDivs(slideIndex += n);
        }
        function currentDiv(n) {
            showDivs(slideIndex = n);
        }
        function showDivs(n) {
            var i;
            var x = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("demo");
            if (n > x.length) {slideIndex = 1}
            if (n < 1) {slideIndex = x.length}
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
            }
            x[slideIndex-1].style.display = "block";
            dots[slideIndex-1].className += " w3-opacity-off";
        }
    </script>


</head>
<body>

    <div class="container-fluid" id="app">

        <div class="row" id="linha-titulo-site">
            <div class="container">
                <div class="col-md-6 col-xs-6" id="titulo-site"><!--título site-->
                    <img class="logo-site" src="img/logo.png" width="30%" height="30%">
                </div>
                <div class="topnav" id="myTopnav">
                    <a href="#">Início</a>
                    <a href="selecoes.php">Seleções</a>
                    <a href="fasegrupos.php">Torcedômetro</a>
                    <a href="info.php">Informações e curiosidades</a>
                    <a href="javascript:void(0);" class="icon" onclick="myFunction()">Menu</a>
                </div>
            </div>
        </div>
        
        <div class="col align-self-center">
            <div id="principais-selecoes" class="container">
                <div id="col-1-img-selecoes" class="col-md-2">
                    <div class="img-selecao col-md-6">
                        <p>FRANÇA</p>
                        <img class="img-mini-selecao" src="img/selecoes-principais/franca.jpg" onclick="currentDiv(1)">
                    </div>
                    <div class="img-selecao col-md-6">
                        <p>BRASIL</p>
                        <img class="img-mini-selecao" src="img/selecoes-principais/brasil.png" onclick="currentDiv(2)">
                    </div>
                    <div class="img-selecao col-md-6">
                        <p>ARGENTINA</p>
                        <img class="img-mini-selecao" src="img/selecoes-principais/argentina.jpg" onclick="currentDiv(3)"></a>
                    </div>
                    <div class="img-selecao col-md-6">
                        <p>ALEMANHA</p>
                        <img class="img-mini-selecao" src="img/selecoes-principais/alemanha.jpg" onclick="currentDiv(4)">
                    </div>
                </div>
                <div id="col-2-img-selecoes" class="col-md-2">
                    <div class="img-selecao col-md-6">
                        <p>RUSSIA</p>
                        <img class="img-mini-selecao" src="img/selecoes-principais/russia.jpg" onclick="currentDiv(5)">
                    </div>
                    <div class="img-selecao col-md-6">
                        <p>ESPANHA</p>
                        <img class="img-mini-selecao" src="img/selecoes-principais/espanha.jpg" onclick="currentDiv(6)">
                    </div>
                    <div class="img-selecao col-md-6">
                        <p>PORTUGAL</p>
                        <img class="img-mini-selecao" src="img/selecoes-principais/portugal.jpg" onclick="currentDiv(7)">
                    </div>
                    <div class="img-selecao col-md-6">
                        <p>INGLATERRA</p>
                        <img class="img-mini-selecao" src="img/selecoes-principais/inglaterra.jpg" onclick="currentDiv(8)">
                    </div>
                </div>
                <div id="img-selecao-grande" class="col-md-8">
                    <div class="mySlides">
                        <img src="img/selecoes-principais/franca.jpg" class="image-responsive" style="width: 100%">
                        <div class="text-item">Seleção Francesa de Futebol</div>
                        <a class="saiba-mais-principais" href="selecoes/pagina_selecao.php?id=22">Saiba mais</a>
                    </div> <!--frança-->
                    <div class="mySlides">
                        <img src="img/selecoes-principais/brasil.png" class="image-responsive" style="width: 100%">
                        <div class="text-item">Seleção Brasileira de Futebol</div>
                        <a class="saiba-mais-principais" href="selecoes/pagina_selecao.php?id=13">Saiba mais</a>
                    </div> <!--brasil-->
                    <div class="mySlides">
                        <img src="img/selecoes-principais/argentina.jpg" class="image-responsive" style="width: 100%">
                        <div class="text-item">Seleção Argentina de Futebol</div>
                        <a class="saiba-mais-principais" href="selecoes/pagina_selecao.php?id=10">Saiba mais</a>
                    </div> <!--argentina-->
                    <div class="mySlides">
                        <img src="img/selecoes-principais/alemanha.jpg" class="image-responsive" style="width: 100%">
                        <div class="text-item">Seleção Alemã de Futebol</div>
                        <a class="saiba-mais-principais" href="selecoes/pagina_selecao.php?id=11">Saiba mais</a>
                    </div><!--alemanha-->
                    <div class="mySlides">
                        <img src="img/selecoes-principais/russia.jpg" class="image-responsive" style="width: 100%">
                        <div class="text-item">Seleção Russa de Futebol</div>
                        <a class="saiba-mais-principais" href="selecoes/pagina_selecao.php?id=34">Saiba mais</a>
                    </div><!--russia-->
                    <div class="mySlides">
                        <img src="img/selecoes-principais/espanha.jpg" class="image-responsive" style="width: 100%">
                        <div class="text-item">Seleção Espanhola de Futebol</div>
                        <a class="saiba-mais-principais" href="selecoes/pagina_selecao.php?id=21">Saiba mais</a>
                    </div><!--espanha-->
                    <div class="mySlides">
                        <img src="img/selecoes-principais/portugal.jpg" class="image-responsive" style="width: 100%">
                        <div class="text-item">Seleção Portuguesa de Futebol</div>
                        <a class="saiba-mais-principais" href="selecoes/pagina_selecao.php?id=33">Saiba mais</a>
                    </div><!--portugal-->
                    <div class="mySlides">
                        <img src="img/selecoes-principais/inglaterra.jpg" class="image-responsive" style="width: 100%">
                        <div class="text-item">Seleção Inglesa de Futebol</div>
                        <a class="saiba-mais-principais" href="selecoes/pagina_selecao.php?id=23">Saiba mais</a>
                    </div><!--inglaterra-->
                </div>
            </div>
        </div>

        <div class="col align-self-center" id="estadios-copa-1">
            <div class="container">
                <h3>ESTÁDIOS DA COPA</h3><hr>
            </div>
            <div class="container" id="estadios-copa">
                <!-- INICIO DO SLIDER -->
                <section class="slider">
                    <div class="slider_box">

                        <article class="slider_item active"  slider-bg="img/estadios/res-maior/estadionizhninovgorod.jpg">
                            <div class="slider_content">
                                <h1>Estádio Nizhny Novogorod</h1>
                                <p><span>Local:</span> Situado na cidade Nizhny Novgorod, Distrito de Volga</p>
                                <p><span>Capacidade:</span> 45 mil pessoas</p>
                                <p><span>Inauguração:</span> ainda em construção</p>
                                <p><span>Jogos:</span> Suécia x Coréia do sul | Argentina x Croácia | Inglaterra x Panamá | Suíça x Costa Rica | Oitavas de final | Quartas de final</p>
                            </div>
                        </article>

                        <article class="slider_item" slider-bg="img/estadios/res-maior/estadioluzhniki.jpg">
                            <div class="slider_content">
                                <h1>Estádio de Moscou - Luzhniki</h1>
                                <p><span>Local:</span> Situado na cidade de Moscou, Distrito Central</p>
                                <p><span>Capacidade:</span> 80 mil pessoas</p>
                                <p><span>Inauguração:</span> 1956</p>
                                <p><span>Jogos:</span> Rússia x Arábia Saudita | Alemanha x México | Portugal x Marrocos | Dinamarca x França | Oitavas de final | Semifinal | Final</p>
                            </div>
                        </article>

                        <article class="slider_item" slider-bg="img/estadios/res-maior/estadiosaopetesburgo.jpg">
                            <div class="slider_content">
                                <h1>Estádio de São Petesburgo</h1>
                                <p><span>Local:</span> Situado na cidade de São Petesburgo, Distrito Federal do Noroeste</p>
                                <p><span>Capacidade:</span> 67 mil pessoas</p>
                                <p><span>Inauguração:</span> 2017</p>
                                <p><span>Jogos:</span> Marrocos x Irã | Rússia x Egito | Brasil x Costa Rica | Nigéria x Argentina | Oitavas de final | Semifinal | Terceiro lugar</p>
                            </div>
                        </article>

                        <article class="slider_item" slider-bg="img/estadios/res-maior/estadiosochi.jpg">
                            <div class="slider_content">
                                <h1>Estádio Olímpico de Fisht - Sochi</h1>
                                <p><span>Local:</span> Situado na cidade de Sochi, Distrito Federal do Sul</p>
                                <p><span>Capacidade:</span> 48 mil pessoas</p>
                                <p><span>Inauguração:</span> 2013</p>
                                <p><span>Jogos:</span> Portugal x Espanha | Bélgica x Panamá | Alemanha x Suécia | Austrália x Peru | Oitavas de final | Quartas de final</p>
                            </div>
                        </article>

                        <article class="slider_item" slider-bg="img/estadios/res-maior/estadioyekaterinburg.jpg">
                            <div class="slider_content">
                                <h1>Estádio Central - Ekaterinburg Arena</h1>
                                <p><span>Local:</span> Situado na cidade de Ecaterimburgo, Distrito Sverdlovsk</p>
                                <p><span>Capacidade:</span> 45 mil pessoas</p>
                                <p><span>Inauguração:</span> 1957 (Reformado para copa)</p>
                                <p><span>Jogos:</span> Egito x Uruguai | França x Peru | Japão x Senegal | México x Suécia</p>
                            </div>
                        </article>

                        <article class="slider_item" slider-bg="img/estadios/res-maior/estadiokazan.jpg">
                            <div class="slider_content">
                                <h1>Kazan Arena</h1>
                                <p><span>Local:</span> Situado na cidade de Kazan, subdivisão do Tartaristão</p>
                                <p><span>Capacidade:</span> 45 mil pessoas</p>
                                <p><span>Inauguração:</span> 2013</p>
                                <p><span>Jogos:</span> França x Austrália | Irã x Espanha | Polônia x Colômbia | Coreia do Sul x Alemanha | Oitavas de final | Quartas de final</p>
                            </div>
                        </article>

                        <article class="slider_item" slider-bg="img/estadios/res-maior/estadiorostov_don.jpg">
                            <div class="slider_content">
                                <h1>Rostov Arena</h1>
                                <p><span>Local:</span> Situado na cidade de Rostov, Distrito Federal do Sul</p>
                                <p><span>Capacidade:</span> 45 mil pessoas</p>
                                <p><span>Inauguração:</span> 2017</p>
                                <p><span>Jogos:</span> Brasil x Suíça | Uruguai x Arábia Saudita | Coreia do Sul x México | Islândia x Croácia | Oitavas de final</p>
                            </div>
                        </article>

                        <article class="slider_item" slider-bg="img/estadios/res-maior/estadiosamara.jpg">
                            <div class="slider_content">
                                <h1>Samara Arena</h1>
                                <p><span>Local:</span> Situado na cidade de Samara, Distrito de Volga</p>
                                <p><span>Capacidade:</span> 45 mil pessoas</p>
                                <p><span>Inauguração:</span> 2017</p>
                                <p><span>Jogos:</span> Costa Rica x Sérvia | Dinamarca x Austrália | Uruguai x Rússia | Senegal x Colômbia | Quartas de final</p>
                            </div>
                        </article>

                        <article class="slider_item" slider-bg="img/estadios/res-maior/estadiosaransk.jpg">
                            <div class="slider_content">
                                <h1>Mordovia Arena - Saransk</h1>
                                <p><span>Local:</span> Situado na cidade de Saransk, capiral de República da Mordóvia</p>
                                <p><span>Capacidade:</span> 45 mil pessoas</p>
                                <p><span>Inauguração:</span> ainda em construção</p>
                                <p><span>Jogos:</span> Peru x Dinamarca | Colômbia x Japão | Irã x Portugal | Panamá x Tunísia</p>
                            </div>
                        </article>

                        <article class="slider_item" slider-bg="img/estadios/res-maior/estadiovolgograd.jpg">
                            <div class="slider_content">
                                <h1>Estádio Volgograd</h1>
                                <p><span>Local:</span> Situado na cidade de Volgogrado, subdivisão Óblast de Volgogrado</p>
                                <p><span>Capacidade:</span> 45 mil pessoas</p>
                                <p><span>Inauguração:</span> ainda em construção</p>
                                <p><span>Jogos:</span> Tunísia x Inglaterra | Nigéria x Islândia | Arábia Saudita x Egito | Japão x Polônia</p>
                            </div>
                        </article>

                        <article class="slider_item" slider-bg="img/estadios/res-maior/estadiomoscow_spartak.jpg">
                            <div class="slider_content">
                                <h1>Estádio Spartak - Moscou</h1>
                                <p><span>Local:</span> Situado na cidade de Moscou, no Distrito Central</p>
                                <p><span>Capacidade:</span> 42 mil pessoas</p>
                                <p><span>Inauguração:</span> 2014</p>
                                <p><span>Jogos:</span> Argentina x Islândia | Polônia x Senegal | Bélgica x Tunísia | Sérvia x Brasil | Oitavas de final</p>
                            </div>
                        </article>

                        <article class="slider_item" slider-bg="img/estadios/res-maior/estadiokaliningrad.jpg">
                            <div class="slider_content">
                                <h1>Estádio de Kaliningrad</h1>
                                <p><span>Local:</span> Situado na cidade de Kaliningrad, no Distrito Federal do Noroeste</p>
                                <p><span>Capacidade:</span> 35 mil pessoas</p>
                                <p><span>Inauguração:</span> ainda em construção</p>
                                <p><span>Jogos:</span> Croácia x Nigéria | Sérvia x Suíça | Espanha x Marrocos | Inglaterra x Bélgica</p>
                            </div>
                        </article>

                    </div>
                    <div class="slider-prev"><</div>
                    <div class="slider-next">></div>
                </section>
                <!-- FIM DO SLIDER -->
            </div>
        </div><!--Sobre estadios-->

        <section class="row" id="noticias">
            <div class="container">
                <div class="col-xs-12">

                    <div class="page-header">
                        <h3>NOTÍCIAS</h3>
                    </div>
                        
                    <div class="carousel slide" id="myCarousel">
                        <div class="carousel-inner">
                            <div class="item active">
                                    <ul class="thumbnails">
                                        <li class="col-sm-3">
                                            <div class="fff">
                                                <div class="thumbnail">
                                                    <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                                </div>
                                                <div class="caption">
                                                    <h4>Praesent commodo</h4>
                                                    <p>Nullam Condimentum Nibh Etiam Sem</p>
                                                    <a class="btn btn-mini" href="#">» Read More</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-sm-3">
                                            <div class="fff">
                                                <div class="thumbnail">
                                                    <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                                </div>
                                                <div class="caption">
                                                    <h4>Praesent commodo</h4>
                                                    <p>Nullam Condimentum Nibh Etiam Sem</p>
                                                    <a class="btn btn-mini" href="#">» Read More</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-sm-3">
                                            <div class="fff">
                                                <div class="thumbnail">
                                                    <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                                </div>
                                                <div class="caption">
                                                    <h4>Praesent commodo</h4>
                                                    <p>Nullam Condimentum Nibh Etiam Sem</p>
                                                    <a class="btn btn-mini" href="#">» Read More</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-sm-3">
                                            <div class="fff">
                                                <div class="thumbnail">
                                                    <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                                </div>
                                                <div class="caption">
                                                    <h4>Praesent commodo</h4>
                                                    <p>Nullam Condimentum Nibh Etiam Sem</p>
                                                    <a class="btn btn-mini" href="#">» Read More</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                            </div><!-- /Slide1 --> 
                            <div class="item">
                                    <ul class="thumbnails">
                                        <li class="col-sm-3">
                                            <div class="fff">
                                                <div class="thumbnail">
                                                    <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                                </div>
                                                <div class="caption">
                                                    <h4>Praesent commodo</h4>
                                                    <p>Nullam Condimentum Nibh Etiam Sem</p>
                                                    <a class="btn btn-mini" href="#">» Read More</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-sm-3">
                                            <div class="fff">
                                                <div class="thumbnail">
                                                    <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                                </div>
                                                <div class="caption">
                                                    <h4>Praesent commodo</h4>
                                                    <p>Nullam Condimentum Nibh Etiam Sem</p>
                                                    <a class="btn btn-mini" href="#">» Read More</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-sm-3">
                                            <div class="fff">
                                                <div class="thumbnail">
                                                    <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                                </div>
                                                <div class="caption">
                                                    <h4>Praesent commodo</h4>
                                                    <p>Nullam Condimentum Nibh Etiam Sem</p>
                                                    <a class="btn btn-mini" href="#">» Read More</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-sm-3">
                                            <div class="fff">
                                                <div class="thumbnail">
                                                    <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                                </div>
                                                <div class="caption">
                                                    <h4>Praesent commodo</h4>
                                                    <p>Nullam Condimentum Nibh Etiam Sem</p>
                                                    <a class="btn btn-mini" href="#">» Read More</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                            </div><!-- /Slide2 --> 
                            <div class="item">
                                    <ul class="thumbnails">
                                        <li class="col-sm-3">	
                                            <div class="fff">
                                                <div class="thumbnail">
                                                    <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                                </div>
                                                <div class="caption">
                                                    <h4>Praesent commodo</h4>
                                                    <p>Nullam Condimentum Nibh Etiam Sem</p>
                                                    <a class="btn btn-mini" href="#">» Read More</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-sm-3">
                                            <div class="fff">
                                                <div class="thumbnail">
                                                    <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                                </div>
                                                <div class="caption">
                                                    <h4>Praesent commodo</h4>
                                                    <p>Nullam Condimentum Nibh Etiam Sem</p>
                                                    <a class="btn btn-mini" href="#">» Read More</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-sm-3">
                                            <div class="fff">
                                                <div class="thumbnail">
                                                    <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                                </div>
                                                <div class="caption">
                                                    <h4>Praesent commodo</h4>
                                                    <p>Nullam Condimentum Nibh Etiam Sem</p>
                                                    <a class="btn btn-mini" href="#">» Read More</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-sm-3">
                                            <div class="fff">
                                                <div class="thumbnail">
                                                    <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                                </div>
                                                <div class="caption">
                                                    <h4>Praesent commodo</h4>
                                                    <p>Nullam Condimentum Nibh Etiam Sem</p>
                                                    <a class="btn btn-mini" href="#">» Read More</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                            </div><!-- /Slide3 --> 
                        </div>
                        
                        <nav>
                            <ul class="control-box pager">
                                <li><a data-slide="prev" href="#myCarousel" class=""><i class="glyphicon glyphicon-chevron-left"></i></a></li>
                                <li><a data-slide="next" href="#myCarousel" class=""><i class="glyphicon glyphicon-chevron-right"></i></a></li>
                            </ul>
                        </nav>
                        <!-- /.control-box -->                                   
                    </div><!-- /#myCarousel -->
                        
                </div><!-- /.col-xs-12 -->          

            </div><!-- /.container -->
        </section>

        <div class="row" id="rodape">
            <div class="container">
                <h3>FutHistórias</h3>
                <h5> Tudo que você quer saber sobre as seleções da copa de 2018</h5>
                <button onclick="topFunction()" id="myBtn" title="Voltar ao topo"><img src="img/seta_cima.png" width="30" height="30"></button>
            </div>
        </div> <!--Rodape-->
        
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <script src="js/jquery.js"></script>
        <script src="js/slider.js"></script>

        <script js>
        // Carousel Auto-Cycle
        $(document).ready(function() {
            $('.carousel').carousel({
            interval: 6000
            })
        });
        </script>
    </div>
</body>

</html>