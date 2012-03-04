drop table if exists cliente;# MySQL returned an empty result set (i.e. zero rows).

create table cliente(
  id_cliente integer auto_increment not null,
  nombre varchar(50) not null,
  apellido varchar(50) not null,
  email varchar(100),
  primary key (id_cliente)
 );# MySQL returned an empty result set (i.e. zero rows).


drop table if exists empleado;# MySQL returned an empty result set (i.e. zero rows).

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
);# MySQL returned an empty result set (i.e. zero rows).


drop table if exists mesa;# MySQL returned an empty result set (i.e. zero rows).

create table mesa(
  num_personas_x_mesa int(11) not null,
  mesas int(11),
  primary key (num_personas_x_mesa)
);# MySQL returned an empty result set (i.e. zero rows).


drop table if exists casual;# MySQL returned an empty result set (i.e. zero rows).

create table casual(
  id_casual integer auto_increment not null,
  num_personas_x_mesa int(11) not null,
  num_personas int(11) not null,
  primary key (id_casual),
  foreign key (num_personas_x_mesa) references mesa (num_personas_x_mesa)
);# MySQL returned an empty result set (i.e. zero rows).


drop table if exists reserva;# MySQL returned an empty result set (i.e. zero rows).

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
 );# MySQL returned an empty result set (i.e. zero rows).


drop table if exists recepcion;# MySQL returned an empty result set (i.e. zero rows).

create table recepcion(
  id_cliente integer not null,
  id_empleado integer not null,
  id_reserva integer not null,
  id_casual integer not null,
  foreign key (id_cliente) references cliente (id_cliente),
  foreign key (id_empleado) references empleado (id_empleado),
  foreign key (id_reserva) references reserva (id_reserva),
  foreign key (id_casual) references casual (id_casual)
);# MySQL returned an empty result set (i.e. zero rows).
