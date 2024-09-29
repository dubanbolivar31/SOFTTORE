/*creacion de bases de datos*/
Create database SOFTTORE;

/*Dar uso de la base de datos*/
use SOFTTORE;

---------------------------------------------------------------------------------------------

/*crear una tabla*/
create table usuario
(
idusuario int auto_increment primary key not null,
tipoIdUsuario varchar(20) null,
numIdUsuario int null,
nombreUsuario varchar(20) null,
apellido varchar(30) null,
correoUsuario varchar (50) null,
claveUsuario varchar(8) null,
estadoUsuario varchar (20) null
)engine=InnoDB;

/*insertar datos en las columnas*/
insert into usuario values (null,'C.C',1099874372,'Juan','Polania','jp08@gmail.com','JP123456','Inactivo',1);
insert into usuario values (null,'C.C',1098768576,'Duban','Bolívar','db31@gmail.com','DB123456','Activo',1);
insert into usuario values (null,'C.C',1287654353,'Catalina','Hernandez','cata58@gmail.com','CA123456','Activo',2);
insert into usuario values (null,'C.C',1063958412,'Natalia','Castilla','na56@gmail.com','NA123456','Inactivo',2);
insert into usuario values (null,'C.C',1028697254,'Diego','Ronaldo','dinaldo@gmail.com','DI123456','Activo',3);
insert into usuario values (null,'C.C',1259842158,'Ana','Martinez','ana@gmail.com','AN123456','Inactivo',3);

create table Rol
(
idRol int auto_increment primary key not null,
Descripción varchar (20) not null
)engine=InnoDB;

insert into Rol values ('1','Administrador');
insert into Rol values ('2','Cliente');
insert into Rol values ('3','Provedor');

create table cliente
(
id_cliente int auto_increment primary key,
direccion nvarchar (35) not null,
telefono nvarchar (10) not null,
ciudad varchar (35) not null
) engine=InnoDB;

/*insercion de datos*/
insert into cliente values(null,'Kra 11 #9-37',3112455677,'Medellin',3); 
insert into cliente values(null,'Kra 21 #83-27',3139678531,'Bogotá',4);
                                                                    

 create table ventas
(
 id_ventas int auto_increment primary key,
 cantidad int not null
)engine= innoDB;

 insert into ventas value(null,'6',2,1);
 insert into ventas value(null,'8',2,1);
 insert into ventas value(null,'3',3,1);
 insert into ventas value(null,'1',4,1);
 insert into ventas value(null,'4',5,1);


create table producto
(
id_producto int auto_increment primary key,
descripcion varchar (100) not null,
precio float not null
)engine=InnoDB;

insert into producto values(null,'Galletas Ramo de Limón',20000,1,1);
insert into producto values(null,'Jet',7500,1,1);
insert into producto values(null,'Bon Bon Bum Sour',15000,1,1);
insert into producto values(null,'Quipitos',10000,1,1);
insert into producto values(null,'Papas Fritas Mega Lonchera',24000,1,1);
insert into producto values(null,'Doritos',8500,1,1);
insert into producto values(null,'Gomitas Trululu Fresitas',2500,1,1);
insert into producto values(null,'Popetas Mix Caramelo Y Queso',10500,1,1);
insert into producto values(null,'Helado Crem Helado Sabor a Cereza',20000,1,1);
insert into producto values(null,'Frunas',10000,1,1);
insert into producto values(null,'Manzana',1000,1,1);
insert into producto values(null,'Banano',500,1,1);
insert into producto values(null,'Cebolla',700,1,1);
insert into producto values(null,'Ajo',1000,1,1);
insert into producto values(null,'Tomate',800,1,1);
insert into producto values(null,'Berenjena',2500,1,1);
insert into producto values(null,'Lechuga',2500,1,1);
insert into producto values(null,'Papa',2500,1,1);
insert into producto values(null,'Brocoli',3000,1,1);
insert into producto values(null,'Fresa',600,1,1);
insert into producto values(null,'Cereza',500,1,1);
insert into producto values(null,'Papaya',6000,1,1);
insert into producto values(null,'Carne de Res',12000,1,1);
insert into producto values(null,'Carne de Cerdo',11000,1,1);
insert into producto values(null,'Chorizo',14000,1,1);
insert into producto values(null,'Mojarra',7500,1,1);
insert into producto values(null,'Lomo de Cerdo',14000,1,1);
insert into producto values(null,'Costilla de Cerdo',8000,1,1);
insert into producto values(null,'Pata de Cerdo',5000,1,1);
insert into producto values(null,'Salmon',23000,1,1);
insert into producto values(null,'Blanquiador',2000,1,1);
insert into producto values(null,'Traperos de colores',8500,1,1);
insert into producto values(null,'Fabuloso',4800,1,1);
insert into producto values(null,'Gel',6500,1,1);
insert into producto values(null,'Protex',2500,1,1);
insert into producto values(null,'Aromax',2500,1,1);
insert into producto values(null,'Jabón Rey',1500,1,1);
insert into producto values(null,'Jabón Fab',23000,1,1);
insert into producto values(null,'Crema de dientes',4800,1,1);
insert into producto values(null,'Jabón de losa axión',3000,1,1);
insert into producto values(null,'Suavitel',3500,1,1);
insert into producto values(null,'Dove',5000,1,1);

create table administrador
(
id_admin int auto_increment primary key,
tipocontrato_admin varchar(20) not null,
edad_admin int not null
)engine=InnoDB;

 insert into administrador value(1,'indefinido','15',1);
 insert into administrador value(2,'indefinido','16',2);

create table proveedor
(
id_prov int auto_increment primary key,
tipoId_prov  varchar(20) not null,
direccion_prov  varchar(30) not null,
numero_prov  varchar (50) not null,
edad_prov  varchar(8) not null
)engine=InnoDB;


 insert into proveedor value(1,'C.C','CLL 70 SUR #15 50 ESTE',3112289509,'40',5);
 
-------------------------------------------------------------------------------
/*Relaciones de tablas*/

alter table ventas add id_producto int not null;

alter table ventas add constraint idproducto_fk foreign key (id_producto) references producto (id_producto);

alter table usuario add idRol int not null;

alter table usuario add constraint id_Rol foreign key (idRol) references Rol (idRol);

alter table cliente add idusuario int not null;

alter table cliente add constraint idusuario_fk foreign key (idusuario) references usuario (idusuario);

alter table proveedor add idusuario int not null;

alter table proveedor add constraint id_usuariofk foreign key (idusuario) references usuario (idusuario);

alter table producto add id_prov int not null;

alter table producto add constraint id_prov_fk foreign key (id_prov) references proveedor (id_prov);

alter table producto add id_cliente int not null;

alter table producto add constraint id_clientefk foreign key (id_cliente) references cliente (id_cliente);

alter table administrador add idusuario int not null;

alter table administrador add constraint idusuariofk foreign key (idusuario) references usuario (idusuario);

alter table ventas add id_admin int not null;

alter table ventas add constraint id_adminfk foreign key (id_admin) references administrador (id_admin);

----------------------------------------------------------------------------------------
/*uso de las relaciones <>*/

select*from Venta where valorUnitarioProducto=2500;
select*from pedido where valorUnitarioPedido>500;
select*from Venta where valorUnitarioProducto<2500;
select*from pedido where valorUnitarioPedido<=2000;

/*uso de las relaciones like,asc y descendente*/

select*from pedido where pedidoDomicilio like '%E%';
select*from Venta where descripcionProducto like '%C%';
select*from Usuario where apellidosUsuario like '%H%';
select*from domicilio where estadoDocimilio like '%d%';

select*from domicilio where estadoDocimilio like '_c%';
select*from pedido where pedidoDomicilio like '_e%';
select*from venta where descripcionProducto like '_a%';
select*from usuario where nombreUsuario like '_u%';

select*from usuario where nombreUsuario like '_______';
select*from domicilio where estadoDocimilio like '______';
select*from pedido where pedidoDomicilio like '_________';
select*from Venta where estadoProducto like '_____';

-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------
/*consultas especifica*/

select telefonoUsuario from usuario where apellidosUsuario='Giraldo Montez';
select descripcionProducto from Venta where estadoProducto='Nuevo';
select estadoDocimilio from domicilio where idDomicilio='1';
select pedidoDomicilio from pedido where idProducto='4';
select correoUsuario from usuario where apellidosUsuario='Fernandez Ochoa ';

--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
/*consultas generales*/

select*from usuario;
select*from venta;
select*from domicilio;
select*from pedido;

-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
/*Consultar Multitabla*/

select u.apellidosUsuario,telefonoUsuario,r.descripcionRol from usuario as u inner join rol as r on u.idRol=r.idrol;

select p.fechaPedido,p.pedidoDomicilio,p.cantidadPedido,v.descripcionProducto,v.estadoProducto from pedido as p inner join Venta as v on p.idProducto=v.idProducto;

select d.estadoDocimilio,d.horaDocimilio,v.valorUnitarioProducto,v.descripcionProducto from domicilio as d inner join Venta as v on v.idDomicilio=d.idDomicilio;

select d.idDomicilio,d.horaDocimilio,u.correoUsuario,u.nombreUsuario from domicilio as d inner join usuario as u on d.idDomicilio;

------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
/*VIEW*/

/*Vistas generales*/
create view estadoRol as select*from Rol where estadoRol='activo';
select*from estadoRol;

create view tipoDocUsuario as select*from Usuario where tipoDocUsuario='C.C';
select*from tipoDocUsuario;

create view estadoDocimilio as select*from Domicilio where estadoDocimilio='activo';
select*from estadoDocimilio;

create view estadoProducto as select*from Venta where estadoProducto='Nuevo';
select*from estadoProducto;

create view pedidoDomicilio as select*from Pedido where pedidoDomicilio='Entregado';
select*from pedidoDomicilio;

/*Vistas especificas*/
create view estado_Rol as select r.descripcionRol,r.estadoRol,u.nombreUsuario,u.apellidosUsuario,u.correoUsuario from Rol as r inner join Usuario as u on r.idRol=u.idRol;
select*from estado_Rol;

create view tipo_DocUsuario as select u.nombreUsuario,u.apellidosUsuario,u.tipoDocUsuario,d.horaDocimilio,d.estadoDocimilio from Usuario as u inner join Domicilio as d on u.idUsuario=d.idUsuario;
select*from tipo_DocUsuario;

create view estado_Domicilio as select d.horaDocimilio,d.idUsuario,v.estadoProducto,v.descripcionProducto,v.valorUnitarioProducto from Domicilio as d inner join Venta as v on d.idDomicilio=v.idDomicilio;
select*from estado_Domicilio;

create view estado_Producto as select p.fechaPedido,p.cantidadPedido,p.pedidoDomicilio,v.idProducto,v.estadoProducto from Venta as v inner join Pedido as p on v.idProducto=p.idProducto;
select*from estado_Producto;


-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

CREATE TABLE REG_ADMINISTRADOR 
(
id_admin int primary key,
tipocontrato_admin varchar(20) not null,
edad_admin int not null,
idusuario int not null,
registrado datetime
);
/*AI AFTER DE LA INSERCION*/
CREATE TRIGGER administrador_AI after insert on  administrador for each row 
insert into REG_administrador (id_admin, tipocontrato_admin,edad_admin, registrado)
values (new.id_admin,new. tipocontrato_admin,new.edad_admin, now());

drop trigger administrador_AI;

insert into administrador value(2,'indefinido','33',1);

select*from producto;
select*from REG_administrador ;


CREATE TABLE administrador_ACTUALIZADOS
(
anterior_id_admin int ,
anterior_tipocontrato_admin varchar(20) not null,
anterior_edad_admin int not null,
usuario varchar (15),
nuevo_id_admin int ,
nuevo_tipocontrato_admin varchar(20) not null,
nuevo_edad_admin int not null,
Fecha_modif date
);
/*BEFORE UPDATE*/
CREATE TRIGGER ACTUALIZA_BU before update on administrador for each row
insert into administrador_actualizados (anterior_id_admin ,anterior_tipocontrato_admin ,anterior_edad_admin, 
nuevo_id_admin,nuevo_tipocontrato_admin ,nuevo_edad_admin,usuario,Fecha_modif )
values 
(old.id_admin ,old.tipocontrato_admin ,old.edad_admin ,
new.id_admin ,new.tipocontrato_admin ,new.edad_admin ,
current_user(),now());

drop trigger ACTUALIZA_BU;

update administrador set tipocontrato_admin = 'obra labor' where id_admin = 1;

select*from administrador_ACTUALIZADOS ;

CREATE TABLE administrador_ELIMINADOS
(
id_admin int primary key,
tipocontrato_admin varchar(20) not null,
edad_admin int not null,
usuario varchar (15),
Fecha_modif date
);
drop trigger ELIMADM_AD;

create trigger ELIMADM_AD after delete on administrador for each row
insert into administrador_eliminados (id_admin,tipocontrato_admin ,edad_admin,usuario,fecha_modif)
values (old.id_admin,old.tipocontrato_admin  ,old.edad_admin,current_user,now());

delete from administrador where id_admin = 2;

select* from administrador_ELIMINADOS;
alter table administrador_ELIMINADOS add column (usuario varchar(15),fecha_modif date);

------------------------------------------------------------------------------------------------------------------------------------

CREATE TABLE REG_cliente
(
id_cliente int primary key,
direccion nvarchar (35) not null,
telefono nvarchar (10) not null,
ciudad varchar (35) not null,
idusuario varchar (15),
registrado datetime
);
/*AI AFTER DE LA INSERCION*/
CREATE TRIGGER cliente_AI after insert on  cliente for each row 
insert into REG_cliente (id_cliente, direccion,telefono,ciudad,idusuario, registrado)
values (new.id_cliente,new. direccion,new.telefono,new.ciudad,idusuario, now());

drop trigger cliente_AI;

insert into cliente values(6,'kra12#6-67',3122435657,'cauca',5);

select*from cliente;
select*from reg_cliente ;


CREATE TABLE cliente_ACTUALIZADOS
(
anterior_id_cliente int not null ,
anterior_direccion varchar(20) not null,
anterior_telefono varchar(10)not null,
anterior_ciudad varchar (35) not null,
anterior_idusuario varchar (15) not null,
anterior_registrado datetime,
nuevo_id_cliente int not null ,
nuevo_direccion varchar(20) not null,
nuevo_telefono varchar(20) not null,
nuevo_ciudad varchar(20) not null,
nuevo_idusuario varchar (15) not null,
usuarioProceso varchar (15),
Fecha_modif date
);
/*BEFORE UPDATE*/
CREATE TRIGGER ACTUALIZA_CLI before update on cliente for each row
insert into cliente_actualizados (anterior_id_cliente ,anterior_direccion ,anterior_telefono,anterior_ciudad,anterior_idusuario, 
nuevo_id_cliente,nuevo_direccion ,nuevo_telefono,nuevo_ciudad,nuevo_idusuario,usuarioProceso,Fecha_modif )
values 
(old.id_cliente ,old.direccion ,old.telefono ,old.ciudad,old.idusuario,
new.id_cliente ,new.direccion ,new.telefono ,new.ciudad,new.idusuario,
current_user(),now());

drop trigger ACTUALIZA_CLI;

update  cliente set ciudad = 'Popayan' where id_cliente = 1;

select*from cliente_ACTUALIZADOS ;

CREATE TABLE cliente_ELIMINADOS
(
id_ventas int primary key,
cantidad int,
id_producto int,
id_cliente int,
id_admin int,
usuarioProceso varchar (15),
registrado datetime
);


create trigger ELIMCLIE_AD after delete on cliente for each row
insert into cliente_eliminados (id_ventas ,cantidad,id_producto,id_cliente,id_admin,fecha_modif)
values (old.id_ventas,old.cantidad  ,old.id_producto,old.id_cliente,old.id_admin,current_user,now());

delete from producto where idProducto = 17;

select* from cliente_ELIMINADOS;
alter table cliente_eliminados add column (usuario varchar(15),fecha_modif date);
drop trigger ELIMCLIE_AD;

-----------------------------------------------------------------------------------------------------------------------------------

CREATE TABLE REG_PRODUCTO 

(
id_producto int,
descripcion varchar (100) not null,
precio float not null,
id_prov int,
id_admin int,
registrado datetime
);

/*AI AFTER DE LA INSERCION*/
CREATE TRIGGER PRODUCTO_AI after insert on producto for each row 
insert into REG_PRODUCTO (id_producto,descripcion,precio,id_prov,id_admin,registrado)
values (new.id_producto,new.descripcion,new.precio,new.id_prov,new.id_admin,now());


insert into producto values(6,'Manzana',1000,5,1);

select*from producto;              
select*from REG_PRODUCTO ;

CREATE TABLE PRODUCTOS_ACTUALIZADOS
(
anterior_id_producto int,
anterior_descripcion varchar (100) not null,
anterior_precio float not null,
anterior_id_prov int,
anterior_id_admin int,
nuevo_id_producto int,
nuevo_descripcion varchar (100) not null,
nuevo_precio float not null,
nuevo_id_prov int,
nuevo_id_admin int,
usuario varchar (15),
Fecha_modif date
);
/*BEFORE UPDATE*/
CREATE TRIGGER ACTUALIZA_BU before update on producto for each row
insert into productos_actualizados (anterior_id_producto,anterior_descripcion,anterior_precio ,anterior_id_prov,anterior_id_admin,nuevo_id_producto,nuevo_descripcion,nuevo_precio,nuevo_id_prov,nuevo_id_admin,usuario,Fecha_modif )
values 
(old.id_producto ,old.descripcion ,old.precio ,old.id_prov ,old.id_admin ,new.id_producto ,new.descripcion ,new.precio ,new.id_prov ,new.id_admin,
current_user(),now());

update  producto set precio = precio+450 where id_producto = 5;

select*from PRODUCTOS_ACTUALIZADOS ;


CREATE TABLE PRODUCTOS_ELIMINADOS
(
id_producto int primary key,
descripcion varchar (100) not null,
precio float not null,
id_prov int,
id_admin int,
usuario varchar (15),
Fecha_modif date
);

create trigger ELIMPROD_AD after delete on producto for each row
insert into productos_eliminados (id_producto,descripcion,precio,id_prov,id_admin,usuario,fecha_modif)
values (old.id_producto,old.descripcion ,old.precio,old.id_prov,old.id_admin,current_user,now());

delete from producto where id_producto = 6;

select* from PRODUCTOS_ELIMINADOS;

-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

CREATE TABLE REG_proveedor
(
id_prov int primary key,
tipoId_prov varchar(20), 
direccion_prov varchar(30), 
numero_prov varchar(50), 
edad_prov varchar(8), 
idusuario int(11),
registrado datetime
);

/*AI AFTER DE LA INSERCION*/
CREATE TRIGGER proveedor_AI after insert on proveedor for each row 
insert into REG_proveedor (id_prov,tipoId_prov,direccion_prov,numero_prov,edad_prov,idusuario,registrado)
values (new.id_prov,new.tipoId_prov,new.direccion_prov,new.numero_prov,new.edad_prov,new.idusuario,now());

insert into proveedor value(6,'C.C','CLL 70 SUR #12 80 ESTE',3145888474,'42',5);

select*from proveedor;              
select*from REG_proveedor ;

CREATE TABLE proveedor_ACTUALIZADOS
(
anterior_id_prov int,
anterior_tipoId_prov varchar (100) not null,
anterior_direccion_prov float not null,
anterior_numero_prov int,
anterior_edad_prov int,
anterior_idusuario int,
nuevo_id_prov int,
nuevo_tipoId_prov varchar (100) not null,
nuevo_direccion_prov float not null,
nuevo_numero_prov int,
nuevo_edad_prov int,
nuevo_idusuario int,
usuario varchar (15),
Fecha_modif date
);
/*BEFORE UPDATE*/
CREATE TRIGGER ACTUALIZA_PROV before update on proveedor for each row
insert into proveedor_actualizados (anterior_id_prov,anterior_tipoId_prov,anterior_direccion_prov ,anterior_numero_prov,anterior_edad_prov,
anterior_idusuaro,nuevo_id_prov,nuevo_tipoId_prov,nuevo_direccion_prov ,nuevo_numero_prov,nuevo_edad_prov,nuevo_idusuaro,usuario,Fecha_modif )values 
(old.id_prov,old.tipoId_prov,old.direccion_prov ,old.numero_prov ,old.edad_prov ,old.idusuario ,new.id_prov,new.tipoId_prov,new.direccion_prov ,
new.numero_prov ,new.edad_prov ,new.idusuario ,current_user(),now());

update proveedor set edad_prov = edad_prov + 1 where id_prov = 5;

select*from REG_proveedor ;


CREATE TABLE PROVEDORES_ELIMINADOS
(
id_prov int primary key,
tipoId_prov varchar (100) not null,
direccion_prov float not null,
numero_prov int,
edad_prov int,
idusuario int,
Fecha_modif date
);

create trigger ELIMPROV after delete on proveedor for each row
insert into productos_eliminados (id_prov,tipoId_prov,direccion_prov,numero_prov,edad_prov,idusuario,usuario,fecha_modif)
values (old.id_prov,old.tipoId_prov,old.direccion_prov,old.numero_prov,old.edad_prov,old.idusuario,current_user,now());

delete from proveedor where id_prov = 6;

select* from provedores_eliminados;

-------------------------------------------------------------------------------------------------------------------------------------------------

CREATE TABLE REG_usuario
(
idusuario int primary key,
tipoIdUsuario varchar (5),
numIdUsuario varchar(20), 
nombreUsuario varchar(30), 
apellido varchar(50), 
correoUsuario varchar(30), 
claveUsuario nvarchar (10) not null,
 registrado datetime
);

/*AI AFTER DE LA INSERCION*/
CREATE TRIGGER USUARIO_AI after insert on usuario for each row 
insert into REG_usuario (idusuario,tipoIdUsuario,numIdUsuario,nombreUsuario,apellido,correoUsuario,claveUsuario,registrado)
values (new.idusuario,new.tipoIdUsuario,new.numIdUsuario,new.nombreUsuario,new.apellido,new.correoUsuario,new.claveUsuario,now());

insert into usuario values (null,'C.C',10998743765,'Camila','Rodriguez','camila7@gmail.com','921camila');

select*from usuario;              
select*from REG_usuario ;

CREATE TABLE USUARIOS_ACTUALIZADOS
(
anterior_idusuario int,
anterior_tipoIdUsuario varchar (5),
anterior_numIdUsuario varchar(20), 
anterior_nombreUsuario varchar(30), 
anterior_apellido varchar(50), 
anterior_correoUsuario varchar(30), 
anterior_claveUsuario nvarchar (10) not null,
nuevo_idusuario int,
nuevo_tipoIdUsuario varchar (5),
nuevo_numIdUsuario varchar(20), 
nuevo_nombreUsuario varchar(30), 
nuevo_apellido varchar(50), 
nuevo_correoUsuario varchar(30), 
nuevo_claveUsuario nvarchar (10) not null,
usuario varchar (15),
Fecha_modif date
);
/*BEFORE UPDATE*/
CREATE TRIGGER ACTUALIZA_USU before update on usuario for each row
insert into usuarios_actualizados (anterior_idusuario,anterior_tipoIdUsuario,anterior_numIdUsuario, anterior_nombreUsuario, anterior_apellido, 
anterior_correoUsuario, anterior_claveUsuario, nuevo_idusuario,nuevo_tipoIdUsuario,  nuevo_numIdUsuario,  nuevo_nombreUsuario, nuevo_apellido,
nuevo_correoUsuario, nuevo_claveUsuario,usuario,Fecha_modif )values (old.idusuario,old.tipoIdUsuario,old.numIdUsuario, old.nombreUsuario, old.apellido, 
old.correoUsuario,old.claveUsuario,new.idusuario,new.tipoIdUsuario,new.numIdUsuario,new.nombreUsuario,new.apellido,new.correoUsuario,new.claveUsuario,
usuario,Fecha_modif ,current_user(),now());

update usuario set claveUsuario = claveUsuario+1 where idusuario = 6;

select*from usuarios_actualizados;


CREATE TABLE USUARIOS_ELIMINADOS
(
idusuario int primary key,
tipoIdUsuario varchar (5),
numIdUsuario varchar(20), 
nombreUsuario varchar(30), 
apellido varchar(50), 
correoUsuario varchar(30), 
claveUsuario nvarchar (10) not null,
Fecha_modif date
);

create trigger ELIMUSU after delete on usuario for each row insert into usuarios_eliminados (idusuario,tipoIdUsuario,numIdUsuario,nombreUsuario,
apellido,correoUsuario,claveUsuario,usuario,fecha_modif)
values (old.idusuario,old.tipoIdUsuario,old.numIdUsuario, old.nombreUsuario, old.apellido, old.correoUsuario,old.claveUsuario,current_user,now());

delete from usuario where idusuario = 6;

select* from usuarios_eliminados;
-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

CREATE TABLE REG_ventas
(
id_ventas int primary key,
cantidad int not null,
id_producto int not null,
id_cliente int not null,
id_admin int not null,
registrado datetime
);
/*AI AFTER DE LA INSERCION*/
CREATE TRIGGER ventas_AI after insert on  ventas for each row 
insert into REG_ventas (id_ventas, cantidad,id_producto,id_cliente,id_admin, registrado)
values (new.id_ventas,new. cantidad,new.id_producto,new.id_cliente,new.id_admin,now());


insert into ventas value(24680,'5','4','4',1);

select*from ventas;
select*from REG_ventas ;


CREATE TABLE ventas_ACTUALIZADOS
(
anterior_id_ventas int primary key,
anterior_cantidad int not null,
anterior_id_producto int not null,
anterior_id_cliente int not null,
anterior_id_admin int not null,
nuevo_cantidad int not null,
nuevo_id_producto int not null,
nuevo_id_cliente int not null,
nuevo_id_admin int not null,
usuario varchar (15),
Fecha_modif date
);
/*BEFORE UPDATE*/
CREATE TRIGGER ACTUALIZA_ven before update on ventas for each row
insert into ventas_actualizados (anterior_id_ventas,anterior_cantidad,anterior_id_producto, anterior_id_cliente,anterior_id_admin,
nuevo_id_ventas,nuevo_cantidad ,nuevo_id_producto,nuevo_id_cliente,nuevo_id_admin,usuario,Fecha_modif )
values 
(old.id_ventas ,old.cantidad ,old.id_producto ,old.id_cliente,old.id_admin,
new.id_ventas ,new.cantidad ,new.id_producto ,new.id_cliente,new.id_admin,
current_user(),now());

drop trigger ACTUALIZA_BU;

update  ventas set cantidad = '6' where id_ventas = 24680;

select*from ventas_ACTUALIZADOS ;

CREATE TABLE ventas_ELIMINADOS
(
id_ventas int primary key,
cantidad int not null,
id_producto int not null,
id_producto int not null,
id_admin int not null,
usuario varchar (15),
Fecha_modif date
);

create trigger ELIMVEN_AD after delete on ventas for each row
insert into ventas_eliminados (id_ventas,cantidad ,id_producto,id_admin,usuario,fecha_modif)
values (old.id_ventas,old.cantidad  ,old.id_producto,old.id_admin, current_user,now());

delete from ventas where id_ventas = 24680;

select* from ventas_ELIMINADOS;
alter table ventas_ELIMINADOS add column (usuario varchar(15),fecha_modif date);

DELIMITER $

create procedure crudusuario (
in CRUD varchar(10),
in _idusuario int,
in _tipoIdUsuario varchar(20),
in _numIdUsuario int,
in _nombreUsuario varchar(20),
in _apellido varchar(30),
in _correoUsuario varchar (50),
in _claveUsuario varchar(8) 
)

begin

  case CRUD
  
    when 'Agregar' then
     insert into usuario values(_idusuario,_tipoIdUsuario,_numIdUsuario,_nombreUsuario,_apellido,_correoUsuario,_claveUsuario);
     
    when 'Actualizar' then
      update usuario set tipoIdUsuario=_tipoIdUsuario, numIdUsuario=_numIdUsuario, nombreUsuario=_nombreUsuario, apellido=_apellido,
      correoUsuario=_correoUsuario, claveUsuario=_claveUsuario
      where idUsuario=_idUsuario;
      
     when 'Consulta' then
      select *from usuario where idusuario=_idusuario;
      
      when 'Eliminar' then
      delete from usuario where idusuario=_idusuario;
      
    end case;
    
    end $
    
    call softtore.crudUsuario ('Agregar',null,'C.C',1099876572,'Carlon','Caro','caro10@gmail.com',92162819);
    call softtore.crudusuario ('Agregar',null,'C.C',1025876572,'micol','maro','maro10@gmail.com',91523819);
    call softtore.crudusuario ('Agregar',NULL,'Administrador','C.C.',7896666,'Jose','Cipriano',now());
    call softtore.crudusuario ('Actualizar',1,'Gerente','C.C.',11332659,'Juan','Perez');
    call softtore.crudusuario ('Consulta',3,'','','','','','');  
    call softtore.crudusuario ('Eliminar',3,'','','','','','');  