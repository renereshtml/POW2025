create database cadastro;
use cadastro;
CREATE TABLE usuario (
     id int auto_increment,
    nome varchar(50),
    email varchar(50),
    idade int,
    curso varchar(3),    
    primary key (id)
);