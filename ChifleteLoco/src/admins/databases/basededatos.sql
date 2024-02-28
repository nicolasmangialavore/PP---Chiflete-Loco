create database chifletero;
use chifletero;

create table producto(
    codigo int NOT NULL AUTO_INCREMENT,
    nombre_producto varchar(50),
    fecha_ingreso date,
    fecha_egreso date,
    cantidad int(11),
    primary key (codigo)
);

create table cliente(
    legajo int NOT NULL AUTO_INCREMENT,
    nombre varchar(50),
    apellido varchar(50),
    sexo varchar(11),
    dni int(20),
    fecha_nacimiento date,
    email varchar(200),
    telefono int(20),
    user varchar(50),
    pass varchar(50),
    primary key (legajo)
);

create table admins(
    legajo int NOT NULL AUTO_INCREMENT,
    nombre varchar(50),
    apellido varchar(50),
    sexo varchar(11),
    dni int(20),
    fecha_nacimiento date,
    email varchar(200),
    telefono int(20),
    user varchar(50),
    pass varchar(50),
    primary key (legajo)
);

insert into admins (nombre, apellido, sexo, dni, fecha_nacimiento, email, telefono, user, pass) values ('Nicolas', 'Mangialavore', 'Masculino', 46213088, '2004-08-24', 'nmangialavore@gmail.com', 1127918100, 'nicolaset32', 1234);