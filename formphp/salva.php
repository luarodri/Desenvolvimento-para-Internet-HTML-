<h1>Seus dados estão aqui</h1>

<?php

    $nome = $_POST["nome"];
    $telefone = $_POST["telefone"];
    $endereço = $_POST["endereço"];

    if(empty($nome,$telefone,$endereço)){
        echo"<p> Os dados devem ser informados</p>";

    }
    else{

    echo "<p> Olá $nome! Seu telefone é $telefone e seu endereço é $endereço</p>";
    file_put_contents("dados.csv", "$nome,$telefone,$endereço\n", FILE_APPEND);

    }

?>