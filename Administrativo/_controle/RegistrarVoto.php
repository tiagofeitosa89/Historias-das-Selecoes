<?php

 //if(isset($_POST['votar'])){   
    if (isset($_POST['id']) && !empty($_POST['id'])){
        include_once("TorcedometroDAO.php");
        include_once("Torcedometro.php");

        $id = $_POST['id']; 
        
        $torcedometro = new Torcedometro();
        $torcedometroDAO = new TorcedometroDAO();
        
        $sqlConsulta = "Select codigo, votos from torcidometro where cod_selecao = '{$id}' and cod_copa = 43";
        $retorno = $torcedometroDAO->Selecionar($sqlConsulta);
        echo "teste";
        if($retorno != "" && count($retorno)==1){
            foreach ($retorno as $voto) {
                $torcedometro->setCodigo($voto[0]);
                $torcedometro->setVotos($voto[1] + 1);
            }
            if($torcedometroDAO->Alterar($torcedometro)){
                echo 'Obrigado pela sua participação'; 
                /*echo '<script> 
                            swal("Sucesso!", "Obrigado pela sua participação", "success", {closeOnClickOutside: false}
                            ).then(function(){
                                window.location.href="../../torcedometro.php";
                            });
                            </script>';*/
            } else {
                echo 'A operação não pôde ser realizada';
                /*echo '<script> 
                            swal("Erro!", "A operação não pôde ser realizada!",  "error", {closeOnClickOutside: false}
                            ).then(function(){
                                window.location.href="../../torcedometro.php";
                            });
                            </script>';*/
            }
        }else{
            $torcedometro->setCodSelecao($id);
            $torcedometro->setCodCopa(41);
            $torcedometro->setVotos(1);
            
            if($torcedometroDAO->Inserir($torcedometro)){
                echo 'Obrigado pela sua participação'; 
                /*echo '<script> 
                        swal("Sucesso!", "Obrigado pela sua participação", "success", {closeOnClickOutside: false}
                        ).then(function(){
                            window.location.href="../../torcedometro.php";
                        });
                        </script>';*/
            } else {
                echo 'A operação não pôde ser realizada';
                /*echo '<script> 
                            swal("Erro!", "A operação não pôde ser realizada!",  "error", {closeOnClickOutside: false}
                            ).then(function(){
                                window.location.href="../../torcedometro.php";
                            });
                            </script>';*/
            }
        }

    }
//}
?>