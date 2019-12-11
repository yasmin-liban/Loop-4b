<?php
    session_start();
    require("requisicoes.php");
    
    //Recebe as informações do usuário
    $email = $_POST["email"];
    $username = $_POST["username"];
    $senha = $_POST["senha"];
    
    //Confere se já existe algum usuário cadastrado com esse nome e email
    $request = "SELECT * FROM usuario WHERE username='$username' OR email='$email'";
    $res = request_database($request,"min");
    if($res){
        $register_info = mysqli_fetch_assoc($res);
    }

    //Cria restrições para os campos 
    if($username == "" || $username == "null" || $email == "" || $email == "null" || $senha == "" || $senha == "null"){
        $_SESSION['msg2'] = "<div class='alert alert-danger' role='alert' style='padding: 3%; margin-top: 3%;'> <strong>Erro</strong>, nenhum dos campos pode<br>estar em branco. </div>";  
        header('location:main.php');
        die();
        

    }else if($register_info['username'] == $username || $register_info['email'] == $email){
        $_SESSION['msg2'] = "<div class='alert alert-danger' role='alert' style='padding: 3%; margin-top: 3%;'> <strong>Erro</strong>, o Email ou Nome de Usuário<br>já estão cadastrados. </div>";  
        header('location:main.php');
        die();
    }
    //Sucesso!
    else{
        $request = "INSERT INTO usuario(username,senha,email) VALUES ('$username','$senha','$email')";
        $res = request_database($request,"min");
        if ($res){
            $_SESSION['msg2'] = "<div class='alert alert-success' role='alert' style='padding: 3%; margin-top: 3%;'> <strong>Sucesso!</strong> o seu usuário foi<br>cadastrado. </div>";  
            header('location:main.php');
            die();
        }
    }

