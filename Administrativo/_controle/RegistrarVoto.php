<?php
   
    if (isset($_POST['id']) && !empty($_POST['id'])){
        include_once("TorcedometroDAO.php");
        include_once("Torcedometro.php");

        $id = $_POST['id']; 
        
        $torcedometro = new Torcedometro();
        $torcedometroDAO = new TorcedometroDAO();
        
        $sqlConsulta = "Select codigo, votos from torcidometro where cod_selecao = '{$id}' and cod_copa = 43";
        $retorno = $torcedometroDAO->Selecionar($sqlConsulta);

        if($retorno != "" && count($retorno)==1){
            foreach ($retorno as $voto) {
                $torcedometro->setCodigo($voto[0]);
                $torcedometro->setVotos($voto[1] + 1);
            }
            if($torcedometroDAO->Alterar($torcedometro)){
                echo 'Obrigado por sua participação'; 
                setcookie("usuario", "voto", time() + (86400 * 30), "/");
            } else {
                echo 'A operação não pôde ser realizada';
            }
        }else{
            $torcedometro->setCodSelecao($id);
            $torcedometro->setCodCopa(43);
            $torcedometro->setVotos(1);
            
            if($torcedometroDAO->Inserir($torcedometro)){
                echo 'Obrigado por sua participação'; 
                setcookie("usuario", "voto", time() + (86400 * 30), "/");
            } else {
                echo 'A operação não pôde ser realizada';
            }
        }

    }
?>