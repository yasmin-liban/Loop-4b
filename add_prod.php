<?php
    session_start();
    $user_info = $_SESSION['login_info'];
    $nome = $user_info['username'];
    $id = $user_info['id_user'];
    require("requisicoes.php");
    $item_add;


    $id = $user_info['id_user'];
    $nome = $_POST['nome'];
    $troco_por = $_POST['troco_por'];
    $info = $_POST['info'];
    $categoria = $_POST['categoria'];
    $contato_info = $_POST['contato_info'];

    //adicionando imagem ao sistema de arquivos

    $nomeTemp = $_FILES["img"]["tmp_name"];
    $nomeReal = $_FILES["img"]["name"];
    $md5 = md5_file($nomeTemp);
    mkdir("loop/produtos_img/$md5",0755,true);
    move_uploaded_file($nomeTemp, "loop/produtos_img/$md5");
    
    //excessões caso o usuario não escreva nada

    if($nome == "" || $nome == "null" || $categoria == "" || $categoria == "null" || $contato_info == "" || $contato_info == "null"){
        $item_add =  "<div class='alert alert-danger' role='alert' style='margin-top:5px';>
                        Erro! Você deixou campos obrigátorios em branco.
                    </div>";
    }
    else{
        $request = "INSERT INTO produto(nome,troco_por,id_user,info,categoria,contato_info,md5) VALUES ('$nome','$troco_por','$id','$info','$categoria','$contato_info','$md5')";
        $res = request_database($request,"min");
        if ($res){
            global $item_add;
            $item_add =  "<div class='alert alert-success' role='alert' style='margin-top:5px';>
                            Item adicionado com Sucesso! Voltar a <a href='user_page.php'>sua conta?</a> ou <a href='index.php'>ir para a página principal</a>?
                        </div>";
        }
    }
    include "add_prod(M).php";
?>