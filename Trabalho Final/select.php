<?php

	/* Exemplo de código para abrir conexão com banco de dados */

	$host = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "agenda";

	/* abre a conexão */
	$link = mysqli_connect($host,$usuario,$senha);
	if(!$link)
	{
		/* não conseguiu abrir a conexão */
		echo "Erro de conexao: " . mysqli_connect_error();
		die();
	}

	/* seleciona o banco de dados */
	if(!mysqli_select_db($link, $banco))
	{
		/* erro ao selecionar o banco de dados */
		echo "Erro na selecao do banco: " . mysqli_error($link);
		mysqli_close($link);
		die();
	}

	/* enviando a consulta para o banco de dados */
	$resposta = mysqli_query($link, "select * from contato");
	if($resposta)
	{
		/* deu certo!! mostar o resultado */
		/* pega a primeira linha */
		$linha = mysqli_fetch_assoc($resposta);
		if(!$linha)
		{
			echo "Vazio";
		}
		else
		{
			echo "<hr />";
			while($linha)
			{
				/* resposta array associativo - 
				os "indices" são os nomes das colunas */
	
				$id_contato = $linha['id_contato'];

				echo "Id: $id_contato <br>";
				echo "Nome: {$linha['nome']} <br>";
				echo "Email: {$linha['email']} <br>";
				echo "Telefone: {$linha['telefone']} <br>";
				echo "<hr>";
				
				/* pega a proxima linha */
				$linha = mysqli_fetch_assoc($resposta);
			}
		}
	}
	else
	{
		/* erro ao executar a consulta */
		echo mysqli_error($link);
	}

	/* fecha a conexão */
	mysqli_close($link);