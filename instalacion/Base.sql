-- Base de datos para el proyecto de ADS II

drop table if exists recepcion;
drop table if exists empleado;
drop table if exists reserva;
drop table if exists cliente;
drop table if exists config;
drop table if exists mesa;

-- Tabla Cliente
-- * Esta tabla nos ayudara para manejar la reserva
-- * de mesas de dicho restaurante

create table cliente(
  id_cliente integer auto_increment not null,
  nombre varchar(50) not null,
  apellido varchar(50) not null,
  email varchar(100),
  primary key (id_cliente)
 );

alter table cliente add unique index(nombre, apellido);

-- Tabla Empleado
-- * Aqui se guardaran la informacion de cada empleado
-- * y administrador que trabaje en el restaurante

create table empleado(
  id_empleado integer auto_increment not null,
  usuario varchar(100) not null,
  nombre varchar(50) not null,
  apellido varchar(50) not null,
  rol enum ('administrador', 'empleado') default 'empleado',
  password varchar(15) not null,
  email varchar(100) not null,
  telefono char(8),
  fecha_nacimiento date,
  dui int(10),
  primary key (id_empleado)
);

alter table empleado add unique index(usuario);

-- Tabla Mesa
-- * Aqui asignaremos la cantidad de mesas que tendra
-- * el restaurante por personas, ayudara para la 
-- * disponibilidad de mesas que hay en x momento

create table mesa(
  nombre_mesa varchar(100) not null,
  capacidad int(11),
  primary key (nombre_mesa)
);

-- Tabla Reserva
-- * Aqui es para ver la infomracion de la reserva
-- * fecha que se realizo, dia, etc.

create table reserva(
  id_reserva integer auto_increment not null,
  id_cliente integer not null,
  nombre_mesa varchar(100) not null,
  fecha_reserva TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  dia_reserva datetime, 
  estado enum ('Pendiente','Finalizado','Progreso','Eliminado') default 'Pendiente',
  primary key (id_reserva),
  foreign key (nombre_mesa) references mesa (nombre_mesa),
  foreign key (id_cliente) references cliente (id_cliente)
 );

-- Tabla recepcion
-- * Verificara que los datos de la reserva sean correctos
-- * y agregar datos para hacer una mineria de datos.

create table recepcion(
  id_empleado integer not null,
  id_reserva integer not null,
  foreign key (id_empleado) references empleado (id_empleado),
  foreign key (id_reserva) references reserva (id_reserva)
);

-- Tabla config
-- * Aqui estara las configuraciones del sistema,
-- * Datos de la empresa, direccion, etc.alter table votes add unique index(user, email, address);

create table config(
  nombre varchar(100) not null primary key,
  dato   varchar(200) not null
);
