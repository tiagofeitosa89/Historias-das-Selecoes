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
                            <a href="selecoes/arabia.php"><img src="img/selecoes/ArabiaSaudita-65.png"></a>
                            <a href="selecoes/egito.php"><img src="img/selecoes/egito_65.png"></a>
                            <a href="selecoes/russia.php"><img src="img/selecoes/Russia_65.png"></a>
                            <a href="selecoes/uruguai.php"><img src="img/selecoes/Uruguai_65.png"></a>
                            <p> ARÁBIA SAUDITA |  EGITO  |  RÚSSIA  |  URUGUAI</p>
                        </div>

                        <div id="grupo" class="col-md-3">
                            <h5>GRUPO B</h5>
                           <a href="selecoes/espanha.php"> <img src="img/selecoes/ESPANHA-65.png"></a>
                           <a href="selecoes/ira.php"> <img src="img/selecoes/Ira-65.png"></a>
                           <a href="selecoes/marrocos.php"> <img src="img/selecoes/marrocos_65.png"></a>
                           <a href="selecoes/portugal.php"> <img src="img/selecoes/PORTUGAL-65.png"></a>
                            <p>ESPANHA | IRÃ | MARROCOS | PORTUGAL</p>
                        </div>

                        <div id="grupo" class="col-md-3">
                            <h5>GRUPO C</h5>
                             <a href="selecoes/australia.php"> <img src="img/selecoes/Australia-65.png"></a>
                             <a href="selecoes/dinamarca.php"> <img src="img/selecoes/Dinamarca_65.png"></a>
                             <a href="selecoes/franca.php"> <img src="img/selecoes/FRANCA-65.png"></a>
                             <a href="selecoes/peru.php"> <img src="img/selecoes/Peru_65.png"></a>
                            <p>AUSTRÁLIA | DINAMARCA | FRANÇA | PERU</p>
                        </div>

                        <div id="grupo" class="col-md-3">
                            <h5>GRUPO D</h5>
                           <a href="selecoes/argentina.php"> <img src="img/selecoes/ARGENTINA-65.png"></a>
                           <a href="selecoes/croacia.php"> <img src="img/selecoes/Croacia_65.png"></a>
                           <a href="selecoes/islandia.php"> <img src="img/selecoes/Islandia_65.png"></a>
                           <a href="selecoes/nigeria.php"> <img src="img/selecoes/Nigeria_65.png"></a>
                            <p>ARGENTINA | CROÁCIA | ISLÂNDIA | NIGÉRIA</p>
                        </div>

                        <div id="grupo" class="col-md-3">
                            <h5>GRUPO E</h5>
                           <a href="selecoes/costarica.php"> <img src="img/selecoes/CostaRica_65.png"></a>
                           <a href="selecoes/brasil.php"> <img src="img/selecoes/Brasil_65x65.png"></a>
                           <a href="selecoes/servia.php"> <img src="img/selecoes/servia_65.png"></a>
                           <a href="selecoes/suica.php"> <img src="img/selecoes/suica_65.png"></a>
                            <p>COSTA RICA | BRASIL | SERVIA | SUICA</p>
                        </div>

                        <div id="grupo" class="col-md-3">
                            <h5>GRUPO F</h5>
                           <a href="selecoes/alemanha.php">  <img src="img/selecoes/Alemanha-65.png"></a>
                           <a href="selecoes/corea_sul.php"> <img src="img/selecoes/Coreia_Sul_65.png"></a>
                           <a href="selecoes/mexico.php">    <img src="img/selecoes/Mexico_65.png"></a>
                           <a href="selecoes/suecia.php">    <img src="img/selecoes/SUECIA-65.png"></a>
                            <p>ALEMANHA | COREIA DO SUL | MEXICO | SUECIA</p>
                        </div>

                        <div id="grupo" class="col-md-3">
                            <h5>GRUPO G</h5>
                          <a href="selecoes/belgica.php"> <img src="img/selecoes/Belgica_65.png"></a>
                          <a href="selecoes/inglaterra.php"> <img src="img/selecoes/Inglaterra_65x65.png"></a>
                          <a href="selecoes/panama.php"> <img src="img/selecoes/Panama_65.png"></a>
                          <a href="selecoes/tunisia.php">  <img src="img/selecoes/tunisia_65.png"></a>
                            <p>BELGICA | INGLATERRA | PANAMA | TUNISIA</p>
                        </div>

                        <div id="grupo" class="col-md-3">
                            <h5>GRUPO H</h5>
                           <a href="selecoes/colombia.php"> <img src="img/selecoes/COLOMBIA-65.png"></a>
                           <a href="selecoes/japao.php"><img src="img/selecoes/Japao_65.png"></a>
                           <a href="selecoes/polonia.php"> <img src="img/selecoes/Polonia_65.png"></a>
                           <a href="selecoes/senegal.php"><img src="img/selecoes/Senegal-65.png"></a>
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