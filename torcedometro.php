<?php
    include_once("Administrativo/_controle/SelecaoDAO.php");
    include_once("Administrativo/_controle/Torcedometro.php");

    try{
        $sqlSelecoes = 'Select selecao.codigo, selecao.nome, selecao.bandeira, coalesce(torcidometro.votos, 0)  from 
                        selecao left join torcidometro on torcidometro.cod_selecao = selecao.codigo and torcidometro.cod_copa = 43 
                        order by torcidometro.votos desc, selecao.nome';
        $selecaoDAO = new SelecaoDAO();
        $listaSelecoes = $selecaoDAO->Selecionar($sqlSelecoes);

        $torcedometro = new Torcedometro();

        //$totalVotos = $torcedometro->calcularTotalVotos();

    } catch(PDOException $e){
        echo $e;
    }
?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <title>FutHistórias::Início</title>
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

        var Votos = [];
        var Porcentagens = [];
        //var TotalVotos = "<?php //echo $totalVotos ?>";
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
                            <li><a href="#">Torcedômetro</a></li>
                            <li><a href="info.php">Extras e curiosidades</a></li>
                            <li><a href="sobre_nos.php">Sobre</a></li>
                        </ul>
                    </nav>
                </div>
            </nav>
        </div>
	
    <div class="row">
        <div class="container" id="corpoSite">
            <div class="row">
                <div id="fasegrupos" class="col-md-12">
                    <h2 class="titulo-pagina">TORCEDÔMETRO</h2>
                    <hr class="linha-titulo-pagina">
                    <h4>Quem vencerá a Copa da Rússia de 2018? Dê seu palpite.</h4>
                    <div class="row">
                        <div class="col-sm-8">
                            <input type="text" class="form-control" placeholder="Digite o nome da seleção..." id="PesquisarPorNomeSelecao" onchange="PesquisarSelecao(this.value)">
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <select class="form-control" id="sel1" onchange="OrdenarPor(this.value)">
                                    <option selected>Classificar por...</option>
                                    <option value="1">Seleções de A-Z</option>
                                    <option value="2">Seleções de Z-A</option>
                                    <option value="3">Votos na ordem crescente</option>
                                    <option value="4">Votos na ordem decrescente</option>
                                </select>
                            </div>    
                        </div>
                    </div>
                    
                    <div id="SelecaoOrdem">
                        <?php foreach ($listaSelecoes as $selecao) { ?>
                            
                                <div class="row card" title="<?php echo $selecao[1]; ?>" id="<?php echo $selecao[3]; ?>">
                                    <?php
                                        // definindo porcentagem
                                        $width1 = $torcedometro->calcularPorcentagem($selecao[3]);
                                        $barra = 4;
                                    ?> 
                                    <div class="col-md-1 col-xs-3">
                                        <a href="selecoes/pagina_selecao.php?id=<?php echo $selecao[0]; ?>"><img src="<?php echo 'Administrativo/'.$selecao[2] ?>" alt="<?php echo $selecao[1] ?>"></a>
                                    </div>
                                    <div class="col-md-10 col-xs-6">
                                        <script>
                                            Votos.push("<?php echo $selecao[3] ?>");
                                        </script>    
                                        <p class="selecao-card"><?php echo $selecao[1].': '?>
                                            <strong id="<?php echo $selecao[0] ?>">0</strong> 
                                            votos
                                        </p>
                                        <div class="progress">
                                            <script> Porcentagens.push("<?php echo $width1 ?>") </script>   
                                            <div class="status barra<?php echo $barra; ?>" id="<?php echo 'status'.$selecao[0]; ?>" style="width: 0%;">
                                                0,00% 
                                            </div>
                                        </div>    
                                    </div>
                                    <div class="col-md-1 col-xs-1">
                                        <button class="btn btn-primary" name="votar" id="<?php echo $selecao[0]; ?>" onclick="Votar(this.id)"
                                        <?php 
                                            if(isset($_COOKIE["usuario"])){
                                                echo "disabled";                                            
                                        } ?>><span class="glyphicon glyphicon-thumbs-up"></span> Votar</button>
                                    </div>
                                </div>        
                        <?php } ?>
                    </div>  
                    <button class="btn btn-primary" id="botaoMostrarResultados" onclick="MostrarResultados()">Mostrar Resultados</button>
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
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script type="text/javascript" language="javascript">
        
        function Votar(codigo) {

            var dados = codigo;
            
            $.ajax({
                type: 'POST',
                url: 'Administrativo/_controle/RegistrarVoto.php',
                data: {'id': dados},
                success: function(response) {    
                    swal("Sucesso!", "Obrigado por sua participação", "success", {closeOnClickOutside: false}
                            ).then(function(){
                                window.location.reload();
                            });
                }
            });

            document.getElementByName('votar').disabled = true;        

        }

        function sortList(ordem) {
            var list, i, switching, b, shouldSwitch;
            list = document.getElementById("SelecaoOrdem");
            switching = true;
            
            while (switching) {
            
                switching = false;
                b = list.getElementsByClassName("row card");
            
                for (i = 0; i < (b.length - 1); i++) {
        
                    shouldSwitch = false;
                    
                    if (ordem == "asc"){
                        if (b[i].title.toLowerCase() > b[i + 1].title.toLowerCase()) {
                            shouldSwitch = true;
                            break;
                        }
                    }

                    if (ordem == "desc"){
                        if (b[i].title.toLowerCase() < b[i + 1].title.toLowerCase()) {
                            shouldSwitch = true;
                            break;
                        }
                    }

                    if (ordem == "numasc"){
                        if (parseInt(b[i].id) > parseInt(b[i+1].id)) {
                            shouldSwitch = true;
                            break;
                        }
                    }

                    if (ordem == "numdesc"){
                        if (parseInt(b[i+1].id) > parseInt(b[i].id)) {
                            shouldSwitch = true;
                            break;
                        }
                    }
                    
                }
                if (shouldSwitch) {
                    b[i].parentNode.insertBefore(b[i + 1], b[i]);
                    switching = true;
                }
            }
        }    

        function OrdenarPor(opcao){ 
            if(opcao == "1") {
                sortList("asc");
            } else if(opcao == "2"){
                sortList("desc");
            }else if(opcao == "3"){
                sortList("numasc");
            }else if(opcao == "4"){
                sortList("numdesc");
            }
        }

        $(document).ready(function(){
            var listaCardSelecoes, i, selecao = "", digito = "";
            var encontrados = [];
            
            listaCardSelecoes = document.getElementsByClassName("row card");    

            $('#PesquisarPorNomeSelecao').keyup(function(){
                digito = $('#PesquisarPorNomeSelecao').val();
                
                for(i = 0; i < listaCardSelecoes.length; i++){
                    selecao = listaCardSelecoes[i].title.toLowerCase();
                    if(selecao.indexOf(digito.toLowerCase()) != -1 ){
                        encontrados.push(listaCardSelecoes[i].title);    
                    }
                }
                filtrarEncontrados();
            });    

            function filtrarEncontrados(){              
                $(".row.card").hide();    
                
                for(i = 0;i < encontrados.length;i++){
                    $("[title|='"+encontrados[i]+"']").show();
                } 
                encontrados = [];
            }

        });

</script>

<script type="text/javascript">
    // Carregar Porcentagens
    function incrementarBarraDeStatus(){
        var i, j, totalPorcentagem, totalVotos;
        var classeStatusBar = document.getElementsByClassName("status barra4"); 

        for(j = 0; j < (classeStatusBar.length); j++){
            i = 0;
            totalPorcentagem = Porcentagens[j];
            totalVotos = Votos[j];
            
            myLoop2 (i, totalPorcentagem, classeStatusBar[j].id, totalVotos);
        }

        function myLoop2 (inicio, fim, id, votos) {           
            var valor;
            setTimeout(function () {
                valor = inicio.toFixed(4);
                
                $('#' + id).html(valor.replace('.', ',')+'%');          
                $('#' + id).css("width", inicio+'%');          
                inicio = inicio + (fim/votos);                     
                if (inicio <= fim) {           
                    myLoop2(inicio, fim, id, votos);             
                }
            }, 2)
        }
    }
</script>

<script type="text/javascript">
    // Carregar núemros
    function incrementarVotos(){
        var i, j, totalCount;                    
        var tagStrong = document.getElementsByTagName("STRONG");

        for(j = 0;j < (tagStrong.length); j++){
            totalCount = Votos[j];
            i = 0;

            myLoop(i, totalCount, tagStrong[j].id);
        }

        function myLoop (inicio, fim, id) {           
            setTimeout(function () {    
                $('#' + id).html(inicio);          
                inicio++;                     
                if (inicio <= fim) {           
                    myLoop(inicio, fim, id);             
                }
            }, 2)
        }
    }
</script>   

<script>
    function MostrarResultados(){
        incrementarVotos();
        incrementarBarraDeStatus();
    }
</script>

  <?php if(isset($_COOKIE["usuario"])){ 
        echo  "<script>MostrarResultados();</script>";
  } ?>

</body>

</html>