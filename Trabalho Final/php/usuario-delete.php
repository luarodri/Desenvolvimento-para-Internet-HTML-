<?php

    $usuario = $REQUEST["usuario"];

    if(!empty($usuario))
    {
        $sql = "delete form usuario where usuario = $usuario";

        $host = "localhost";
        $usuario = "root";
        $senha = "";
        $banco = "usuarios";

        $c = mysqli_connect($host,$usuario,$senha);

        if(!$c)
        {
            echo "erro de conexão";
            echo mysqli_error($c);
            die;
        }
        if (!mysqli_select_db($c,$banco))
        {
            echo "erro no select_db";
            echo mysqli_error($c);
            mysql_close($c);
            die();
        }

            $resp = mysqli_query($c, $sql);

        if(!$resp)
        {
            echo "erro na consulta $sql";
            echo mysqli_error($c);
            mysqli_close($c);
            die();
        }
        else
        {
            header("location: usuario-lista.php");
        }
    
    }
    else 
    {
        echo "usuario não informado";
    }

    