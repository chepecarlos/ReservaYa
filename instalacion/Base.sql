drop table if exists cliente;
create table cliente(
  id_cliente int unsigned auto_increment not null,
  nombre varchar(50) not null,
  apellido varchar(50) not null,
  email varchar(100),
  primary key (id_cliente)
 );

drop table if exists reserva;
create table reserva(
  id_reserva int unsigned auto_increment not null,
  id_cliente int unsigned auto_increment not null,
  num_persona_x_mesa,
  fecha_reserva time,
  dia_reserva time, 
  estado enum ('Pendiente','Finalizado','Progreso') not null default 'Pendiente',
  primary key (id_reserva)
 );

drop table if exists empleado:
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
  primary key(id_empleado)
);
