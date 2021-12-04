<h1>Seus dados estão aqui</h1>

<?php

    $nome = $_POST["nome"];
    $telefone = $_POST["telefone"];
    $endereco = $_POST["endereco"];

    if(empty($nome,$telefone,$endereco)){
        echo"<p> Os dados devem ser informados</p>";

    }
    else{

    echo "<p> Olá $nome! Seu telefone é $telefone e seu endereço é $endereco</p>";
    file_put_contents("dados.csv", "$nome,$telefone,$endereco\n", FILE_APPEND);

    }

?>