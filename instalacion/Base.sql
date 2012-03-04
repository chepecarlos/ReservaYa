-- Base de datos para el proyecto de ADS II

-- Tabla Cliente
-- * Esta tabla nos ayudara para manejar la reserva
-- * de mesas de dicho restaurante
drop table if exists cliente;
create table cliente(
  id_cliente integer auto_increment not null,
  nombre varchar(50) not null,
  apellido varchar(50) not null,
  email varchar(100),
  primary key (id_cliente)
 );

-- Tabla Empleado
-- * Aqui se guardaran la informacion de cada empleado
-- * y administrador que trabaje en el restaurante
drop table if exists empleado;
create table empleado(
  id_empleado integer auto_increment not null,
  nombre varchar(50) not null,
  apellido varchar(50) not null,
  rol enum ('administrador', 'empleado') default 'empleado',
  password varchar(15) not null,
  email varchar(100) not null,
  telefono char(8),
  fecha_nacimiento time,
  dui int(10),
  primary key (id_empleado)
);

-- Tabla Mesa
-- * Aqui asignaremos la cantidad de mesas que tendra
-- * el restaurante por personas, ayudara para la 
-- * disponibilidad de mesas que hay en x momento
drop table if exists mesa;
create table mesa(
  num_personas_x_mesa int(11) not null,
  mesas int(11),
  primary key (num_personas_x_mesa)
);

-- Tabla casual
-- * Si existe usuario que no hagan reservas y llegue
-- * en x momento al restaurante, se ocupara mas que 
-- * todo para mineria de datos
drop table if exists casual;
create table casual(
  id_casual integer auto_increment not null,
  num_personas_x_mesa int(11) not null,
  num_personas int(11) not null,
  primary key (id_casual),
  foreign key (num_personas_x_mesa) references mesa (num_personas_x_mesa)
);

-- Tabla Reserva
-- * Aqui es para ver la infomracion de la reserva
-- * fecha que se realizo, dia, etc.
drop table if exists reserva;
create table reserva(
  id_reserva integer auto_increment not null,
  id_cliente integer not null,
  num_personas_x_mesa int(11) not null,
  fecha_reserva time,
  dia_reserva time, 
  estado enum ('Pendiente','Finalizado','Progreso') default 'Pendiente',
  primary key (id_reserva),
  foreign key (num_personas_x_mesa) references mesa (num_personas_x_mesa),
  foreign key (id_cliente) references cliente (id_cliente)
 );

-- Tabla recepcion
-- * Verificara que los datos de la reserva sean correctos
-- * y agregar datos para hacer una mineria de datos.
drop table if exists recepcion;
create table recepcion(
  id_cliente integer not null,
  id_empleado integer not null,
  id_reserva integer not null,
  id_casual integer not null,
  foreign key (id_cliente) references cliente (id_cliente),
  foreign key (id_empleado) references empleado (id_empleado),
  foreign key (id_reserva) references reserva (id_reserva),
  foreign key (id_casual) references casual (id_casual)
);

-- Tabla config
-- * Aqui estara las configuraciones del sistema,
-- * Datos de la empresa, direccion, etc.
drop table if exists config;
create table config(
  nombre varchar(100) not null primary key,
  dato   varchar(200) not null
);
