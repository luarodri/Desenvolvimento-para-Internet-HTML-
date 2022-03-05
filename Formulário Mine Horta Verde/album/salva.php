<h1>Seus dados estão aqui</h1>

<?php

    $firma = $_POST["firma"];
    $data = $_POST["data"];
    $número = $_POST["número"];
    $endereço = $_POST["endereço"];
    $complemento = $_POST["complemento"];
    $bairro = $_POST["bairro"];
    $cidade = $_POST["cidade"];
    $estado = $_POST["estado"];
    $cep = $_POST"cep"];
    $cnpj = $_POST["cnpj"];
    $inscrição = $_POST["inscrição"];
    $telefone = $_POST["telefone"];
    $celular = $_POST["celular"];
    $email = $_POST["email"];
    $obs = $_POST["obs"];

    if(empty($firma,$data,$número,$endereço,$complemento,$bairro,$cidade,$estado,$cep,$cnpj,$inscrição,$telefone,$celular,$email,$obs)){
        echo"<p>Os dados devem ser informados</p>";
    }
    else{
        echo"<p>Olá! Sua firma é $firma com cpnj $cnpj</p>";
        file_put_contents("dados.csv", "$firma,$data,$número,$endereço,$complemento,$bairro,$cidade,$estado,$cep,$cnpj,$inscrição,$telefone,$celular,$email,$obs\n", FILE_APPEND);
    }


?>