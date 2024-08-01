create database libleria;

create table cliente(
cedula int, 
nombre_apellido varchar(80),
telefono varchar(15),
primary key(cedula)
);

create table pedido(
id_pedido int autoincrement,
fecha date,
cedula_cliente int,
estado varchar(20),
primary key(id_pedido),
alter table pedido add constraint
foreign key (cedula_cliente) references cliente(cedula)
);

create table producto(
id_producto int autoincrement,
descripcion varchar(200),
precio int,
primary key(id_producto)
);

create table pedidodetalle(
id_pedido int,
id_producto int,
cantidad int,
total_parcial int,
primary key(id_pedido,id_producto),

);
alter table pedidodetalle add constraint
foreign key (id_pedido) references pedido(id_pedido),
alter table pedidodetalle add constraint
foreign key (id_producto) references producto(id_producto)