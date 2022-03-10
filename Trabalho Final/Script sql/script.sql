create table usuarios 
(
    usuario int not null primary key auto_increment,
    nome varchar(40),
    email varchar (40),
    senha varchar(10),
    antigasenha varchar(10)

);