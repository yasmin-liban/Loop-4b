<?php
    session_start();
    $user_info = $_SESSION['login_info'];
    $nome = $user_info['username'];
    $ola_user = "<spam class='navbar-text'> Oi, <a href='user_page.php'> $nome.</a> </spam>";
    require("requisicoes.php");

    $id = $_GET["id_produto"];

    $request = "SELECT * FROM produto WHERE id_produto =' $id'";
    $res = request_database($request,"min");

    if($res)
        $produto = mysqli_fetch_assoc($res);
    else{
        echo "<p> Desculpe! Não temos o produto pelo qual está procurando...";
        die();
    }
    $nome_p = $produto['nome'];
    $troco_por = $produto['troco_por'];
    $info = $produto['info'];
    $categoria = $produto['categoria'];
    $contato_info = $produto['contato_info'];
    

    switch($categoria){
        case 'V':
            $categoria = "Vestimenta";
            break;
        case 'U':
            $categoria = "Utensílio";
            break;
        case 'E':
            $categoria = "Eletrônico";
            break;
        case 'L':
            $categoria = "Leitura";
            break;
    }

    include "template.php";
    include "prod_page(M).php";

    


    
   