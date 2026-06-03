<?php
    session_start();

    $host = "localhost";
    $user = "root";
    $pass = "root";
    $db = "sistema_simples";
    
    $conn = new mysqli($host,$user,$pass,$db);

    //Esse código inicia a sessão do usuário e faz a conexão da aplicação com o banco de dados MySQL.
    // if($conn->connect_error){
    //     die("Erro na conexão");
    // }else{
    //     echo ("<p> BD: ok </p>");
    // }

    /*A pasta infra ela armazena toda a estrutura do sistema. Nessa pasta ficam os arquivos relacionados à 
    configuração e comunicação com o banco de dados da aplicação.*/

    /*A pasta db contém os arquivos relacionados ao banco de dados de aplicação com ela é possivela fazer a 
    conexão com o MySQL e os scripts SQL utilizados na estrutura do sistema */

    /*A pasta rede foi criada para armazenar arquivos relacionados as funcionalidades de rede ou futuras implementações */
    
    

    
?>

