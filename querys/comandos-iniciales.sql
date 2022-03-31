-- crear una base de datos
create database dbTienda

-- usar una base de datos
use dbTienda

-- crear una tabla
create table Clientes (
	id int not null primary key auto_increment,
	nombre varchar(100) not null,
	celular varchar(10) null,
	correo varchar(50) null
)

-- insertar datos a una tabla
insert into clientes values (1,'Alberto','464684','juan@gmail.com')

insert into clientes (nombre,celular,correo) 
values ('Juan Ramiro','69207069','rodrigo@gmail.com')

-- elimiar datos de una tabla
delete from clientes where id =   3
delete from clientes where id in (4,6)

-- editar datos de una tabla
update clientes set correo = 'perez@gmail.com' where  id=2

-- mostrar datos de una tabla
select * from clientes
