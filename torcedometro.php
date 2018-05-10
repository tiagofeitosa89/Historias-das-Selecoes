<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.js" rel="stylesheet">

    <title>FutHistórias::Torcedômetro</title>
    <link rel="shortcut icon" href="img/logo-icon.ico" type="image/x-icon" />
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
                <img class="logo-site" src="img/logo.png" width="40%" height="40%">
            </div>
            <div class="topnav" id="myTopnav">
                <a href="index.php">Início</a>
                <a href="selecoes.php">Seleções</a>
                <a href="#">Torcedômetro</a>
                <a href="info.php">Informações e curiosidades</a>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">Menu</a>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="container" id="corpoSite">
            <div class="row">
                <div id="fasegrupos" class="col-md-12">
                    <h2 class="titulo-pagina">TORCEDÔMETRO</h2>
                    <hr class="linha-titulo-pagina">
                    <h2>Página em desenvolvimento...</h2>
                    <h2>Página em desenvolvimento...</h2>
                    <h2>Página em desenvolvimento...</h2>
                    <h2>Página em desenvolvimento...</h2>
                    <h2>Página em desenvolvimento...</h2>
                    <h2>Página em desenvolvimento...</h2>
                    <h2>Página em desenvolvimento...</h2>
                    <h2>Página em desenvolvimento...</h2>
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