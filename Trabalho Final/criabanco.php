<?php

	/* Exemplo de código para abrir conexão com banco de dados */

	$host = "localhost";
	$usuario = "root";
	$senha = "";

	/* abre a conexão */
	$link = mysqli_connect($host,$usuario,$senha);
	if(!$link)
	{
		/* não conseguiu abrir a conexão */
		echo mysqli_connect_error();
		die();
	}

	$script = <<<FIM

		create database if not exists agenda;

		create table agenda.contato (
			id_contato int not null auto_increment,
			nome varchar(40),
			email varchar(40),
			telefone varchar(40),

			primary key(id_contato)
		);

		insert into agenda.contato (nome, email, telefone) values ('Fulano', 'fulano@gmail.com', '190');
		insert into agenda.contato (nome, email, telefone) values ('Beltrano', 'beltrano@gmail.com', '192');
		insert into agenda.contato (nome, email, telefone) values ('Siclano', 'siclano@gmail.com', '196');
FIM;

	/* enviando a consulta para o banco de dados */
	$resposta = mysqli_multi_query($link, $script);
	if($resposta)
	{
		echo "Banco criado com sucesso";
	}
	else
	{
		/* erro ao executar a consulta */
		echo mysqli_error($link);
	}

	/* fecha a conexão */
	mysqli_close($link);


?>