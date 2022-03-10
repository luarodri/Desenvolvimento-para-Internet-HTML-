<?php

    $usuario = $_REQUEST["usuario"];
    $nome = $_REQUEST["nome"];
    $email = $_REQUEST["email"];
    $senha = $_REQUEST["senha"];
    $antigasenha = $_REQUEST["antigasenha"];

    if(!empty($usuario))
    {
        $sql = "insert into usuario(nome, email, senha, antigasenha) values ($nome, $email, $senha, $antigasenha)";
    
    }
    else
    {
        $sql = "update usuario set nome = $nome, email = $email, senha = $senha, antigasenha = $senha where usuario = $usuario";

    }

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

    else
    {
        header("location: usuario-lista.php");
    }


