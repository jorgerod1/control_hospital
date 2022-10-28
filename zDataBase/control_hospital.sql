

drop database if exists control_hospital;
create database control_hospital;
use control_hospital;


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


create table usuarios(
    

id int primary key auto_increment,
nombre  varchar(160),
apellidos varchar(170),
rol varchar (100),
contacto varchar (160),
usuario varchar(160) unique not null,
contra varchar(160) not null

); 

create table acta_procedimientos(

    id int primary key auto_increment default null,
    nombre_paciente varchar(240) default null,
    fecha_nacimiento date default null,
    edad int default null,
    cirugia_pediatrica varchar(240) default null,
    servicio enum('quirofano1','quirofano2','toco1','toco2') default null,
    fecha date default current_timestamp,
    hora time default current_timestamp,
    enfermera_quirurjica varchar(140) default null,
    enfermera_circulante varchar(140) default null,
    cirujano varchar(140) default null,
    anestesiologo varchar(140) default null,
    turno varchar(140) default null,
    activo boolean default 1,

    usuario_id int,
    procedimiento_id int,

    foreign key (usuario_id) references usuarios(id),
    foreign key (procedimiento_id) references procedimientos(id)
);

create table tipo_instrumentos(

    id int primary key auto_increment,
    tipo varchar(140)

);

create table instrumentos(

    id int primary key auto_increment,
    instrumentos varchar(140),
    tipo_instrumento_id int,

    foreign key (tipo_instrumento_id) references tipo_instrumentos(id)

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
    /*r  varchar(200), material recibido por CeYe*/
    extra varchar(140),
    instrumento_id int,
    acta_procedimiento_id int,

    foreign key (instrumento_id) references instrumentos(id),
    foreign key (acta_procedimiento_id) references acta_procedimientos(id)
    
);


create table acta_ceye(

    id int primary key auto_increment,
    autoclave varchar(100),
    no_carga int,
    no_paquete int,
    fecha date default current_timestamp,
    hora time default current_timestamp,
    turno varchar(140),
    responsable varchar(160),
    usuario_id int,

    foreign key (usuario_id) references usuarios(id)
);

create table acta_instrumentos_ceye(

    id int primary key auto_increment,
    codigo varchar(100),
    extra varchar(140) default null,
    cantidad int,
    instrumento_id int,
    acta_ceye_id int,
    foreign key (instrumento_id) references instrumentos(id),
    foreign key (acta_ceye_id) references acta_ceye(id)
    
    );


    /*Inventario se llena a través de un trigges con el registro de la tabla acta_intrumentos_ceye  */


    create table inventario(

        id int primary key auto_increment,
        codigo varchar(100),
        activo boolean default 1,
        extra varchar(140) default null,
        instrumento_id int,
        acta_instrumentos_ceye_id int ,
        foreign key (instrumento_id) references instrumentos(id),
        foreign key (acta_instrumentos_ceye_id) references acta_instrumentos_ceye(id)
    
    );





