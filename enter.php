<?php
    //Começa a sessão e recebe as variaveis do POST 
    session_start();
    $username = $_POST["username"]; 
    $senha = $_POST["senha"];
    require("requisicoes.php");


    $request = "SELECT * FROM usuario WHERE username ='$username' AND senha = '$senha'";

    //Requisita ao bd um usuário com o mesmo nome e senha recebidos do POST
    $res = request_database($request,"min");
    //Caso esse usuário não exista
    if(!$login_info = mysqli_fetch_assoc($res)){
        $_SESSION['msg1'] = "<div class='alert alert-danger' role='alert' style='padding: 3%; margin-top: 3%;'> <strong>Erro</strong> ao fazer login. </div>";  
        header('location:main.php');
        die();
    }
    else{
        $_SESSION['msg1'] = '';
    }

    //Recebe as informações do usuário e as armazena em variáveis de sessão e comuns para facilitar a utilização
    $_SESSION["login_info"] = $login_info;
    header("location: user_page.php"); 
