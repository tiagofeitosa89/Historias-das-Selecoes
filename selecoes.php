<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.js" rel="stylesheet">

    <title>Futistórias::Seleções</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet" type="text/css">


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
                <h3>Futistórias</h3>
            </div>
            <div class="topnav" id="myTopnav">
                <a href="index.php">Home</a>
                <a href="#">Seleções</a>
                <a href="fasegrupos.php">Fase de grupos</a>
                <a href="info.php">Informações e curiosidades</a>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">Menu</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div id="cabecalho-pagina" class="col-md-12"></div>
    </div>

    <div class="container" id="corpoSite">
        <div class="row">
            <div id="selecoes" class="col-md-12">

                    <h2>SELEÇÕES</h2>
                    <hr class="linha-modulo">
                    <div id="grupos">
                        <div id="grupo" class="col-md-3">
                            <h5>GRUPO A</h5>
                            <a href="selecoes/pagina_selecao.php?id=41"><img src="img/selecoes/ArabiaSaudita-65.png"></a>
                            <a href="selecoes/pagina_selecao.php?id=20"><img src="img/selecoes/egito_65.png"></a>
                            <a href="selecoes/pagina_selecao.php?id=34"><img src="img/selecoes/Russia_65.png"></a>
                            <a href="selecoes/pagina_selecao.php?id=40"><img src="img/selecoes/Uruguai_65.png"></a>
                            <p> ARÁBIA SAUDITA |  EGITO  |  RÚSSIA  |  URUGUAI</p>
                        </div>

                        <div id="grupo" class="col-md-3">
                            <h5>GRUPO B</h5>
                           <a href="selecoes/pagina_selecao.php?id=21"> <img src="img/selecoes/ESPANHA-65.png"></a>
                           <a href="selecoes/pagina_selecao.php?id=24"> <img src="img/selecoes/Ira-65.png"></a>
                           <a href="selecoes/pagina_selecao.php?id=27"> <img src="img/selecoes/marrocos_65.png"></a>
                           <a href="selecoes/pagina_selecao.php?id=33"> <img src="img/selecoes/PORTUGAL-65.png"></a>
                            <p>ESPANHA | IRÃ | MARROCOS | PORTUGAL</p>
                        </div>

                        <div id="grupo" class="col-md-3">
                            <h5>GRUPO C</h5>
                             <a href="selecoes/pagina_selecao.php?id=14"> <img src="img/selecoes/Australia-65.png"></a>
                             <a href="selecoes/pagina_selecao.php?id=19"> <img src="img/selecoes/Dinamarca_65.png"></a>
                             <a href="selecoes/pagina_selecao.php?id=22"> <img src="img/selecoes/FRANCA-65.png"></a>
                             <a href="selecoes/pagina_selecao.php?id=31"> <img src="img/selecoes/Peru_65.png"></a>
                            <p>AUSTRÁLIA | DINAMARCA | FRANÇA | PERU</p>
                        </div>

                        <div id="grupo" class="col-md-3">
                            <h5>GRUPO D</h5>
                           <a href="selecoes/pagina_selecao.php?id=10"> <img src="img/selecoes/ARGENTINA-65.png"></a>
                           <a href="selecoes/pagina_selecao.php?id=18"> <img src="img/selecoes/Croacia_65.png"></a>
                           <a href="selecoes/pagina_selecao.php?id=25"> <img src="img/selecoes/Islandia_65.png"></a>
                           <a href="selecoes/pagina_selecao.php?id=29"> <img src="img/selecoes/Nigeria_65.png"></a>
                            <p>ARGENTINA | CROÁCIA | ISLÂNDIA | NIGÉRIA</p>
                        </div>

                        <div id="grupo" class="col-md-3">
                            <h5>GRUPO E</h5>
                           <a href="selecoes/pagina_selecao.php?id=17"> <img src="img/selecoes/CostaRica_65.png"></a>
                           <a href="selecoes/pagina_selecao.php?id=13"> <img src="img/selecoes/Brasil_65x65.png"></a>
                           <a href="selecoes/pagina_selecao.php?id=36"> <img src="img/selecoes/servia_65.png"></a>
                           <a href="selecoes/pagina_selecao.php?id=38"> <img src="img/selecoes/suica_65.png"></a>
                            <p>COSTA RICA | BRASIL | SERVIA | SUICA</p>
                        </div>

                        <div id="grupo" class="col-md-3">
                            <h5>GRUPO F</h5>
                           <a href="selecoes/pagina_selecao.php?id=11">  <img src="img/selecoes/Alemanha-65.png"></a>
                           <a href="selecoes/pagina_selecao.php?id=16"> <img src="img/selecoes/Coreia_Sul_65.png"></a>
                           <a href="selecoes/pagina_selecao.php?id=28">    <img src="img/selecoes/Mexico_65.png"></a>
                           <a href="selecoes/pagina_selecao.php?id=37">    <img src="img/selecoes/SUECIA-65.png"></a>
                            <p>ALEMANHA | COREIA DO SUL | MEXICO | SUECIA</p>
                        </div>

                        <div id="grupo" class="col-md-3">
                            <h5>GRUPO G</h5>
                          <a href="selecoes/pagina_selecao.php?id=12"> <img src="img/selecoes/Belgica_65.png"></a>
                          <a href="selecoes/pagina_selecao.php?id=23"> <img src="img/selecoes/Inglaterra_65x65.png"></a>
                          <a href="selecoes/pagina_selecao.php?id=30"> <img src="img/selecoes/Panama_65.png"></a>
                          <a href="selecoes/pagina_selecao.php?id=39">  <img src="img/selecoes/tunisia_65.png"></a>
                            <p>BELGICA | INGLATERRA | PANAMA | TUNISIA</p>
                        </div>

                        <div id="grupo" class="col-md-3">
                            <h5>GRUPO H</h5>
                           <a href="selecoes/pagina_selecao.php?id=15"> <img src="img/selecoes/COLOMBIA-65.png"></a>
                           <a href="selecoes/pagina_selecao.php?id=26"><img src="img/selecoes/Japao_65.png"></a>
                           <a href="selecoes/pagina_selecao.php?id=32"> <img src="img/selecoes/Polonia_65.png"></a>
                           <a href="selecoes/pagina_selecao.php?id=35"><img src="img/selecoes/Senegal-65.png"></a>
                            <p>COLOMBIA | JAPAO | POLONIA | SENEGAL</p>
                        </div>
                    </div>
            </div>
        </div>
    </div>

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