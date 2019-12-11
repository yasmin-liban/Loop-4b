<!DOCTYPE html>
<html>
    <head>
        <title>LOOP: trocas virtuais</title>
        <link rel="stylesheet" type="text/css" href="mystyle.css">
        <meta charset="utf-08" name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
<?php
    session_start();
    $user_info = $_SESSION['login_info'];
    $nome = $user_info['username'];
    require("requisicoes.php");

    echo" <div class=\"compras\">
            <h3>Oi, <a href=\"user_page.php\"> $nome </a>! Dê uma olhada nos produtos disponíveis a troca</h3>
            <table style=\"border: 1px solid black;\">";

    $request = "SELECT * FROM produto";
    $res = request_database($request,"min");

    while($produto = mysqli_fetch_assoc($res)){
        $nome = $produto['nome'];
        $troco_por = $produto['troco_por'];
        $info = $produto['info'];
        echo"<tr> 
                <td>$nome</td>
                <td>$troco_por</td>
                <td>$info</td>
                ";
        {
            $id_user = $produto['id_user'];
            $request2 = "SELECT * FROM usuario WHERE id_user='$id_user'";
            $resp = request_database($request2,'min');
            $resp2 = mysqli_fetch_assoc($resp);
            $email = $resp2['email'];
            echo "<td> from $email </td>
                    </tr>";
        }
    }
?>
        </table>
        </div>  
        <p>Quer colocar produtos para troca? <a href="add-prod_form.php">Clique aqui</a> </p>
    </body>
</html>
    