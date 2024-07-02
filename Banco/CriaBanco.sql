create database ifsp;
use ifsp;
create table cidade
(
		id int auto_increment,
        nome varchar(50),
        estado varchar(02),
        primary key (id)
);
create table cliente
(
		id int auto_increment,
        nome varchar(50),
        email varchar(50),
        senha varchar(10),
        ativo bool,
        id_cidade int,
        
        primary key (id),
        constraint fk_ClienteCidade foreign key(id_cidade) references cidade(id)
);
insert into cidade(nome, estado) values
('Araçatuba','SP'),
('Bh','MG'),
('Campinas','SP'),
('Salvador','BA'),
('Pindamonhangaba','SP');
select * from cidade where estado = 'SP';
insert into cliente(nome, email, senha,id_cidade) values
('Andrus','adada@outlook.com','12345','1'),
('Felipe','acebele@yahoo.com','12346','1'),
('Vitor','nham@gmail.com','12347','2'),
('Zé','zezim@hotmail.com','12348','3'),
('Junio','Junio@blog.com','12349','4');
select * from cliente where id_cidade = '1';
update cidade set nome='Bauru' where id = 1;
update cliente set nome='Cássio Stersi' where id = 1;
update cliente set id_cidade = '5' where id = '5';
delete from cidade where id = 4;
delete from cliente where id = 1;