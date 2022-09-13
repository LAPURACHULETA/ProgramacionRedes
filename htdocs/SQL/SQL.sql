create database myBase;
use myBase;

create table Usuario
(
	UsuarioID int not null primary key,
    Name varchar(255) not null,
    Score int,
    Level int
);
Drop table Usuario; 
insert into Usuario(UsuarioID,Name,Score,Level)values(0,"Dan",10,20);
insert into Usuario(UsuarioID,Name,Score,Level)values(1,"Jhon",11,7);
select*from Usuario;

update Usuario
set name="Gustavo Arreola",Score=5
where UsuarioID=1;
select*from usuario;

