create database caixa;
use caixa;

create table fluxo
(
  id int not null auto_increment primary key,
  dataa date not null,
  tipo varchar(10) not null,
  valor decimal(10,2),
  hitorico varchar(150) not null,
  cheque varchar(3) not null
  
);