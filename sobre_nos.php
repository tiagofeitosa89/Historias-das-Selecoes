<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <title>Sobre</title>
    <link rel="shortcut icon" href="img/logo-icon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/carousel.css" rel="stylesheet" type="text/css">
    <link href="css/sobre-nos.css" rel="stylesheet" type="text/css">

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
                        <li><a href="info.php">Extras e curiosidades</a></li>
                        <li><a href="#">Sobre</a></li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>

  <div class="row">
        <div class="container" id="corpoSite">
                  <div id="info" class="col-md-12">
                        <h2 class="titulo-pagina">Nossa Equipe</h2>
                        <hr class="linha-titulo-pagina">
                  </div>  

                    <div id="featured" class="container">
                    <div id="fbox1" class="class="p-3 mb-2 bg-success text-white""> <img src="img/sobre/lucas.jpg" width="150" height="150" alt=""/>
          <h2>Lucas Eduardo</h2>
          <p>Gerente de Projeto</p>
          <div class="rede" id="instan"> 
        <a href="https://www.instagram.com/lukeeduh/" target="_blank"><img class="icone" src="img/sobre/icones/instan.png"></a>
          </div>
          <div class="rede" id="git"> 
        <a href="https://www.instagram.com/_bertojr/" target="_blank"><img class="icone" src="img/sobre/icones/git.png"></a>
          </div>
          <div class="rede" id="face"> 
        <a href="https://www.facebook.com/lukeeduh" target="_blank"><img class="icone" src="img/sobre/icones/face.png"></a>
          </div>
          
        </div> 
    
     
      <div id="fbox2"> <img src="img/sobre/alberto.jpg" width="150" height="150" alt="" />
          <h2>Luiz Alberto</h2>
          <p>Analista</p>

          <div class="rede" id="instan"> 
        <a href="https://www.instagram.com/_bertojr/" target="_blank"><img class="icone" src="img/sobre/icones/instan.png"></a>
          </div>
          <div class="rede" id="git"> 
        <a href="https://github.com/albertojr" target="_blank"><img class="icone" src="img/sobre/icones/git.png"></a>
          </div>
          <div class="rede" id="face"> 
        <a href="https://www.facebook.com/Alberto0512" target="_blank"><img class="icone" src="img/sobre/icones/face.png"></a>
          </div>
      </div>
      
      <div id="fbox3"> <img src="img/sobre/wedson.jpg" width="150" height="150" alt="" />
          <h2>Wedson Aguiar</h2>
          <p>Analista</p>
           <div class="rede" id="instan"> 
      <a href="https://www.instagram.com/sirwedson/" target="_blank"><img class="icone" src="img/sobre/icones/instan.png"></a>
          </div>
          <div class="rede" id="git"> 
        <a href="https://github.com/wedsonaguiar" target="_blank"><img class="icone" src="img/sobre/icones/git.png"></a>
          </div>
          <div class="rede" id="face"> 
        <a href="https://www.facebook.com/sirwedson" target="_blank"><img class="icone" src="img/sobre/icones/face.png"></a>
          </div>
      </div>
          
      <div id="fbox4"> <img src="img/sobre/willer.jpg" width="150" height="150" alt="" />
         <h2>Willer Alves</h2>
          <p>Desenvolvedor Front-End</p>
           <div class="rede" id="instan"> 
      <a href="https://www.instagram.com/_willeralves/" target="_blank"><img class="icone" src="img/sobre/icones/instan.png"></a>
          </div>
          <div class="rede" id="git"> 
        <a href="https://github.com/albertojr" target="_blank"><img class="icone" src="img/sobre/icones/git.png"></a>
          </div>
          <div class="rede" id="face"> 
      <a href="https://www.facebook.com/willerallvees" target="_blank"><img class="icone" src="img/sobre/icones/face.png"></a>
          </div>
      </div>
        <div id="fbox5"> <img src="img/sobre/jackson.jpg" width="150" height="150" alt="" />
          <h2>Jackson Martins</h2>
          <p>Teste</p>
                <div class="rede" id="instan"> 
                <a href=""><img class="icone" src="img/sobre/icones/instan.png"></a>
          </div>
          <div class="rede" id="git"> 
        <a href="https://github.com/wjacksson" target="_blank"><img class="icone" src="img/sobre/icones/git.png"></a>
          </div>
          <div class="rede" id="face"> 
      <a href="https://www.facebook.com/wjackson.martins" target="_blank"><img class="icone" src="img/sobre/icones/face.png"></a>
          </div>
      </div>
         <div id="fbox6"> <img src="img/sobre/tiago.jpg" width="150" height="150" alt="" />
          <h2>TIAGO FEITOSA</h2>
          <p>Desenvolvedor Back-End</p>
                  <div class="rede" id="instan"> 
                  <a href="https://www.instagram.com/tiagofeitosa89/" target="_blank"><img class="icone" src="img/sobre/icones/instan.png"></a>
                  </div>
                    <div class="rede" id="git"> 
                      <a href="https://github.com/tiagofeitosa89" target="_blank"><img class="icone" src="img/sobre/icones/git.png"></a>
                    </div>
                  <div class="rede" id="face"> 
                      <a href="https://www.facebook.com/tiago.feitosa.75" target="_blank"><img class="icone" src="img/sobre/icones/face.png"></a>
                  </div>
      </div>
          <div id="fbox7"> <img src="img/sobre/2.jpg" width="150" height="150" alt="" />
         <h2>Jefferson Moura</h2>
          <p>Teste</p>
          <div class="rede" id="instan"> 
                  <a href="http://www.instagram.com/jefersonmfreitas" target="_blank"><img class="icone" src="img/sobre/icones/instan.png"></a>
                  </div>
                    <div class="rede" id="git"> 
                      <a href="" target="_blank"><img class="icone" src="img/sobre/icones/git.png"></a>
                    </div>
                  <div class="rede" id="face"> 
                      <a href="http://www.facebook.com/jefersonmfreitas" target="_blank"><img class="icone" src="img/sobre/icones/face.png"></a>
                  </div>
      </div>
      </div>
      <div class="row" id="linha2"> <!--div colaboradores -->
        <div id="info" class="col-md-12"> <!--div titulo colaboradores -->
          <h2 class="titulo-pagina">Colaboradores</h2>
            <hr class="linha-titulo-pagina">
        </div> <!--fim da div titulo colaboradores --> 

                <div id="featured" class="container">
                    <div id="fbox1" class="colaboradores"p-3 mb-2 bg-success text-white""> <a href="https://medium.com/@365Esportes/latest" target="_blank"><img src="img/sobre/Colaboradores/365esportes.jpeg" width="150" height="150" alt=""/></a>
                    <h2>365Esportes</h2> 
                    </div> 

                    <div id="fbox2" class="colaboradores"p-3 mb-2 bg-success text-white""> <a href="http://www.futbox.com/pt" target="_blank"><img src="img/sobre/Colaboradores/futbox.png" width="150" height="150" alt=""/></a>
                    <h2>FUTBOX</h2> 
                    </div>

                    <div id="fbox3" class="colaboradores"p-3 mb-2 bg-success text-white""> <a href="http://esporte.ig.com.br/futebol/copa-do-mundo-2018/" target="_blank"><img src="img/sobre/Colaboradores/portal_ig.jpg" width="150" height="150" alt=""/></a>
                    <h2>PORTAL IG</h2> 
                    </div>

                    <div id="fbox4" class="colaboradores"p-3 mb-2 bg-success text-white""> <a href="https://medium.com/@365Esportes/latest" target="_blank"><img src="img/sobre/Colaboradores/suapesquisa.gif" width="150" height="150" alt=""/></a>
                    <h2>SUAPESQUISA.COM</h2> 
                    </div>

                    <div id="fbox5" class="colaboradores"p-3 mb-2 bg-success text-white""> <a href="https://pt.wikipedia.org/wiki/Copa_do_Mundo_FIFA" target="_blank"><img src="img/sobre/Colaboradores/wikepedia.png" width="150" height="150" alt=""/></a>
                    <h2>WIKIPEDIA</h2> 
                    </div>

                    <div id="fbox6" class="colaboradores"p-3 mb-2 bg-success text-white""> <a href="https://www.oddsshark.com/br/futebol/grupo-g-na-copa-do-mundo-2018-belgica-panama-tunisia-e-inglaterra" target="_blank"><img src="img/sobre/Colaboradores/odsshark.jpg" width="150" height="150" alt=""/></a>
                    <h2>ODDSSHARK</h2> 
                    </div>

                    <div id="fbox7" class="colaboradores"p-3 mb-2 bg-success text-white""> <a href="http://globoesporte.globo.com/futebol/copa-do-mundo/historia-das-copas.html" target="_blank"><img src="img/sobre/Colaboradores/globoesporte.png" width="150" height="150" alt=""/></a>
                    <h2>GLOBOESPORTE.COM</h2> 
                    </div>     
                </div>      
      </div> <!--fim da div colaboradores --> 
      </div> <!-- div corpo -->            
    </div> <!--div row-->
  
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