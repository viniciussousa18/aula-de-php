
-- ENTRAR NO MYSQL
mysql -u root






-- CRIAR BANCO DE DADOS
create database aula5;




MariaDB [(none)]> create database

--- VISUALIZAR O BANCO DE DADOS CRIADO

show databases;
-- conectar um banco em especifico
use aula5;


-- criar a tabela para receber os dados da tela
  create table cliente(
  idcliente int PRIMARY KEY AUTO_INCREMENT,
  nome varchar (30),
  email varchar (30),
  idade int,
  estadocivil varchar(20)
 );
 