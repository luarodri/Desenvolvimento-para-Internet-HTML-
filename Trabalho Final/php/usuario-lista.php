<?php

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
        echo mysqli_error($C);
        mysql_close($c);
        die();
    }

    $sql = "select * from usuario";

    $resp = mysqli_query($c, $sql);

    if(!$resp)
    {
        echo "erro na consulta $sql";
        echo mysqli_error($c);
        mysqli_close($c);
        die();
    }

    $linha = mysqli_fetch_assoc($resp);
    if($linha)
    {
        while($linha)
        {
            echo "<div style=\"padding:10px;margin:5px;border:2px blue dashed;\">";
            echo "usuario: <b>{$linha["usuario"]}</br><br>";
            echo "Nome: <b>{$linha["nome"]}</br><br>";
            echo "Email: <b>{$linha["email"]}</br><br>";
            echo "Senha: <b>{$linha["senha"]}</br><br>";
            echo "Antigasenha: <b>{$linha["antigasenha"]}</br><br>";
            echo "<a href=\"usuario-atualiza.php?usuario={$linha["usuario"]}\">Edita</a>";
            echo "|";
            echo "<a href=\"usuario-delete.php?usuario={$linha["usuario"]}\">Deleta</a>";
            echo "<div>";
            $linha = mysqli_fetch_assoc($resp);
        }
    }
    else
    {
        echo "tabela vazia";
    }
    echo "<a href=\"usuario-inclui.php\">Inclui</a>";

    mysqli_free_result($resp);
    mysqli_close($c);

