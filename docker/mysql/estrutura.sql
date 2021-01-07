#anotações para bando de dados.
use ambiente;

create table `user` (
id int auto_increment not null,
nome varchar(50) not null,
senha char(32),
primary key (id)
);

insert into `user` (nome, senha) values ('Joana','1471'),('Jefferson','123');

select * from `user`;


#para adicionar da query do php
select * from `user` where nome='Jefferson' and senha='123';
