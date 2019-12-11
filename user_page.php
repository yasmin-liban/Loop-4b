<?php
    //Inicia a sessão e recolhe as informações de usuário
    session_start();
    $user_info = $_SESSION['login_info'];
    $nome = $user_info['username'];
    $id = $user_info['id_user'];
    require("requisicoes.php");
    $no_item;

    $ola_user = "<spam class='navbar-text'> Oi, <a href='user_page.php'> $nome.</a> </spam>";
    include 'template.php';

    //Mensagem para o usuário
    function bem_vindo_user(){
        global $nome;
        echo"Bem-vindo, $nome!";
    }

    //Lista de itens trocáveis do usuário
    function lista_items(){
        global $id;
        $request = "SELECT * FROM produto WHERE id_user =' $id'";
        $res = request_database($request,"min");
        
        $produto = mysqli_fetch_assoc($res);
        if(!$produto){
            global $no_item;
            $no_item = "<script>
                            document.getElementById('noitem').style.display = '';
                            document.getElementById('tabela').style.display = 'none';
                        </script>";
        }
        else{
            while($produto){
                $nome_p = $produto['nome'];
                $troco_por = $produto['troco_por'];
                $info = $produto['info'];
                $id_produto = $produto['id_produto'];
                $i = 1;
                echo"<tr> 
                        <th scope='row' class='site-font'>$i</th>
                        <td class='site-font'> <form method='GET' action='prod_page.php'> <input type='hidden' name='id_produto' value='$id_produto'> <input class='hidden-input' type='submit' value='$nome_p'> </form> </td>
                        <td class='site-font'> $troco_por </td>
                        <td class='site-font'> $info </td>
                    </tr>";
                $i++;
                $produto = mysqli_fetch_assoc($res);
            }
        }
    }
    include 'user_page(M).php';
?>
