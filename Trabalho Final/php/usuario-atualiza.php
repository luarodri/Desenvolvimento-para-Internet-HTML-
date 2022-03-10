<?php

    $usuario = $_REQUEST["usuario"];

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

    $sql = "select * from usuario where usuario = $usuario";

    $resp = mysqli_query($c, $sql);

    if(!$resp);
    {
        echo "erro na consulta $sql";
        echo mysqli_error($c);
        mysqli_close($c);
        die();
    }

    $linha = mysqli_fetch_assoc($resp);
    if($linha)
    {
        $nome = $linha ["nome"];
        $email = ["email"];
        $senha = ["senha"];
        $antigasenha = ["antigasenha"];
        include "usuario-form.php";
    }
    else{
        echo "Não encontrado";
    }

    mysqli_free_result($resp);
    mysqli_close($c);

