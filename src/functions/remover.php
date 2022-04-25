<?php 

require_once('../../app/config.php'); 
require_once('functions.php'); 

    if (isset($_GET['id'])){
        delete($_GET['id']);
        header('location: ../functions/sucesso-remover.php');
    } else {
        die("ERRO: ID não definido.");
    }

?>