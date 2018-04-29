<?php
session_start();
session_destroy();

//Remove todas as informações contidas na variaveis globais
unset($_SESSION['codigo'],			
$_SESSION['usuario'], 		 
$_SESSION['last_request']);

//redirecionar o usuário para a página de login
header("Location: ../login.php");
?>