create database Cafeteria;
use Cafeteria;

create table Cientes
(
    id_cliente int primary key auto_increment,

    nome varchar(50),

    email varchar(50),

    data_nasc date
)