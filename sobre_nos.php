<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <title>Sobre Nós</title>
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
        <div class="container">
            <div class="col-md-6 col-xs-6" id="titulo-site"><!--título site-->
            <a href="index.php"><img class="logo-site" src="img/logo.png" width="40%" height="40%"></a>
            </div>
            <div class="topnav" id="myTopnav">
                <a href="index.php">Início</a>
                <a href="selecoes.php">Seleções</a>
                <a href="torcedometro.php">Torcedômetro</a>
                <a href="info.php">Extras e curiosidades</a>
                <a href="sobre_nos.php" style="color: #005cbf;">Sobre</a>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">Menu</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div id="cabecalho-pagina" class="col-md-12"></div>
        <div class="container" id="corpoSite">
            <div class="row">
                <div id="info" class="col-md-12">

                        <h2 class="titulo-pagina">Nossa Equipe</h2>
                        <hr class="linha-titulo-pagina">
            <!-- <div class="row" id="sobre1">inicio da 1º linha -->
              <!--
 								 <div class="col-sm-6 col-md-4" id="caixa">
    								<div class="thumbnail">
      								<img src="img/sobre/03.png" alt="2px">
      									<div class="caption">
        								<h3>Luiz Alberto</h3>
       									<p>Analista de Sistema</p>
       								
        								</div>
   								 	</div>
  								</div>

  								<div class="col-sm-6 col-md-4" id="caixa">
    								<div class="thumbnail">
      								<img src="img/sobre/03.png" alt="2px">
      									<div class="caption">
        								<h3>Luiz Alberto</h3>
       									<p>Gerente de Projeto</p>
       								
        								</div>
   								 	</div>
  								</div>

  								<div class="col-sm-6 col-md-4" id="caixa">
    								<div class="thumbnail">
      								<img src="img/sobre/03.png" alt="2px">
      									<div class="caption">
        								<h3>Luiz Alberto</h3>
       									<p>Desenvolvedor Front-End</p>
       								
        								</div>
   								 	</div>
  								</div>

                 <div class="col-sm-6 col-md-4" id="caixa">
                    <div class="thumbnail">
                      <img src="img/sobre/03.png" alt="2px">
                        <div class="caption">
                        <h3>Luiz Alberto</h3>
                        <p>Desenvolvedor Back-End</p>
                      
                        </div>
                    </div>
                  </div>

                  <div class="col-sm-6 col-md-4" id="caixa">
                    <div class="thumbnail">
                      <img src="img/sobre/03.png" alt="2px">
                        <div class="caption">
                        <h3>Luiz Alberto</h3>
                        <p>Testador</p>
                      
                        </div>
                    </div>
                  </div>  

                  <div class="col-sm-6 col-md-4" id="caixa">
                    <div class="thumbnail">
                      <img src="img/sobre/03.png" alt="2px">
                        <div class="caption">
                        <h3>Luiz Alberto</h3>
                        <p>Testador</p>
                      
                        </div>
                    </div>
                  </div> 

  
      	</div> Fim da 1º linha -->

    <div class="row" id="linha2">

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
        <a href="https://github.com/albertojr" target="_blank"><img class="icone" src="img/sobre/icones/git.png"></a>
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