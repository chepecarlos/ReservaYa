drop table if exists reserva;
create table reserva(
  id_reserva int unsigned auto_increment not null,
  id_cliente int unsigned auto_increment not null,
  num_persona_x_mesa int(11) not null,
  fecha_reserva time,
  dia_reserva time, 
  estado enum ('Pendiente','Finalizado','Progreso') not null default 'Pendiente',
  primary key (id_reserva),
  foreign key (num_persona_x_mesa) references mesa (num_persona_x_mesa),
  foreign key (id_cliente) references cliente (id_cliente)
 );

drop table if exists empleado;
create table empleado(
  id_empleado int unsigned auto_increment not null,
  nombre varchar(50) not null,
  apellido varchar(50) not null,
  rol enum ('administrador', 'empleado') not null default 'empleado	',
  password varchar(15) not null,
  email varchar(100) not null,
  telefono char(8),
  fecha_nacimiento time,
  dui int(10),
  primary key (id_empleado)
);

drop table if exists casual;
create table casual(
  id_casual int unsigned auto_increment not null,
  num_persona_x_mesa int(11) not null,
  num_personas int(11) not null,
  primary key (id_casual),
  foreign key (num_persona_x_mesa) references mesa (num_persona_x_mesa)
);

drop table if exists mesa;
create table mesa(
  num_personas_x_mesa int(11) not null,
  mesas int(11),
  primary key (num_personas_x_mesa)
);

drop table if exists recepcion;
create table recepcion(
  id_cliente int unsigned auto_increment not null,
  id_empleado int unsigned auto_increment not null,
  id_reserva int unsigned auto_increment not null,
  id_casual int unsigned auto_increment not null,
  foreign key (id_cliente) references cliente (id_cliente),
  foreign key (id_empleado) references empleado (id_empleado),
  foreign key (id_reserva) references reserva (id_reserva),
  foreign key (id_casual) references casual (id_casual)
);