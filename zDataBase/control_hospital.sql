/* 

drop database if exists control_hospital;
create database control_hospital;
use control_hospital;



*/



create table cirugias(

    id int primary key auto_increment,
    nombre varchar(140),
    caracteristicas text default null

);

create table procedimientos(

    id int primary key auto_increment,
    nombre varchar(140),
    caracteristicas text default null,
    cirugia_id int,
    foreign key (cirugia_id) references cirugias(id)

);

--

create table usuarios(
    

id int primary key auto_increment,
nombre  varchar(160),
apellidos varchar(170),
rol varchar (100),
contacto varchar (160),
usuario varchar(160) unique not null,
contra varchar(160) unique not null

);

create table acta_procedimientos(

    id int primary key auto_increment,
    nombre_paciente varchar(240),
    fecha_nacimiento date,
    edad int,
    cirugia_pediatrica varchar(240) default null,
    servicio enum('quirofano1','quirofano2','toco1','toco2'),
    fecha date default current_timestamp,
    hora time default current_timestamp,
    enfermera_quirurjica varchar(140),
    cirujano varchar(140),
    anestesiologo varchar(140),

    enfermera_circulante int,
    procedimiento_id int,

    foreign key (enfermera_circulante) references usuarios(id),
    foreign key (procedimiento_id) references procedimientos(id)
);

create table instrumentos(

    id int primary key auto_increment,
    instrumentos varchar(140)

);

create table ropa_qui(  /*Ropa quirurgica */

    id int primary key auto_increment,
    tipo_bulto varchar(140)

);

create table acta_ropa_qui(

    id int primary key auto_increment,
    cantidad int,
    extra varchar(140),

    ropa_qui_id int,
    acta_procedimiento_id int,

    foreign key (ropa_qui_id) references ropa_qui(id),
    foreign key (acta_procedimiento_id) references acta_procedimientos(id)
    
);

create table acta_instrumentos(

    id int primary key auto_increment,
    codigo varchar(100),
    r  varchar(200), /*material recibido por la CeYe*/
    extra varchar(140),

    instrumento_id int,
    acta_procedimiento_id int,

    foreign key (instrumento_id) references instrumentos(id),
    foreign key (acta_procedimiento_id) references acta_procedimientos(id)
    
);





