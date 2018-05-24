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

    } catch(PDOException $e){
        echo $e;
    }
?>
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

        var Votos = [];
        var Porcentagens = [];

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
                <a href="#">Torcedômetro</a>
                <a href="info.php">Extras e Curiosidades</a>
                
                <a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i>    </a>
            </div>
        </div>
    </div>
	
    <div class="row">
        <div class="container" id="corpoSite">
            <div class="row">
                <div id="fasegrupos" class="col-md-12">
                    <h2 class="titulo-pagina">TORCEDÔMETRO</h2>
                    <hr class="linha-titulo-pagina">
                    
                    <div class="row">
                        <div class="col-sm-8"><h4>Quem vencerá a Copa da Rússia de 2018? Dê seu palpite.</h4></div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <select class="form-control" id="sel1" onchange="OrdenarPor(this.value)">
                                    <option selected>Ordenar por...</option>
                                    <option value="1">Seleção A-Z</option>
                                    <option value="2">Seleção Z-A</option>
                                    <option value="3">Menor voto</option>
                                    <option value="4">Maior voto</option>
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
                                        <?php if(isset($_COOKIE["usuario"])){ ?>
                                            <script>
                                                Votos.push("<?php echo $selecao[3] ?>");
                                            </script>
                                            <p class="selecao-card"><?php echo $selecao[1].': '?>
                                                <strong id="<?php echo $selecao[0] ?>"></strong> 
                                                votos
                                            </p>
                                        <?php } else{ ?>                                  
                                            <p class="selecao-card"><?php echo $selecao[1].': '?><strong><?php echo 0 ?></strong> votos</p>
                                        <?php } ?>            
                                        <div class="progress">
                                            <?php if(isset($_COOKIE["usuario"])){ ?>
                                                    <script> Porcentagens.push("<?php echo $width1 ?>") </script>   
                                                    <div class="status barra<?php echo $barra; ?>" id="<?php echo 'status'.$selecao[0]; ?>" style="width: 0%;"><?php echo number_format($width1, 2, ',', '.').'%'; ?></div>
                                               <?php } else{ $width1 = 0; ?>
                                                    <div class="status barra<?php echo $barra; ?>" style="width:<?php echo $width1.'%'; ?>"><?php echo number_format(0, 2, ',', '.').'%'; ?></div>
                                              <?php  } ?>  
                                        </div>    
                                    </div>
                                    <div class="col-md-1 col-xs-1">
                                        <button class="btn btn-primary" name="votar" id="<?php echo $selecao[0]; ?>" onclick="Votar(this.id)"
                                        <?php 
                                            if(isset($_COOKIE["usuario"])){
                                                echo "disabled";                                            
                                        } ?>>Votar</button>
                                    </div>
                                </div>
                            
                        <?php } ?>
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
</script>

<script type="text/javascript">
    // Carregar Porcentagens

    var i, j, totalPorcentagem;
    var classeStatusBar = document.getElementsByClassName("status barra4"); 

    for(j = 0; j < (classeStatusBar.length - 1); j++){
        i = 0;
        totalPorcentagem = Porcentagens[j];

        myLoop2 (i, totalPorcentagem, classeStatusBar[j].id);
    }

    function myLoop2 (inicio, fim, id) {           
        setTimeout(function () {    
            $('#' + id).css("width", inicio+'%');          
            inicio++;                     
            if (inicio <= fim) {           
                myLoop2(inicio, fim, id);             
            }
        }, 90)
    }

</script>

<script type="text/javascript">
    // Carregar núemros

    var i, j, totalCount;                    
    var tagStrong = document.getElementsByTagName("STRONG");

    for(j = 0;j < (tagStrong.length - 1); j++){
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
        }, 50)
    }
    
</script>   

</body>

</html>