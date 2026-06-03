<?php
    session_start();
    session_destroy();
    header("Location: ../index.php");
    exit();
    /*Esse código realiza o logout do usuário, encerrando a sessão e redirecionando para a página inicial do sistema.*/
?>