<?php

    function request_database($request,$DB_NAME){
        $DB_HOST = "localhost";
        $DB_USER = "loopuser";
        $DB_SENHA = "loop123";


        //Entrando no banco
        $t = mysqli_connect($DB_HOST,$DB_USER,$DB_SENHA,$DB_NAME);
        if(!$t)
            mysqli_error($t);

        //Solicitando ao SQL uma busca especifica
        $res = mysqli_query($t, $request);
        if($res){
            return $res;
           }else{
            echo mysqli_error($t);
          } 
    }

?>