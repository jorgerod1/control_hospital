

diagrama e-r, codgio sql y triggers terminado 16-10-22
 
error corregido trigger 16-10-22


Realice las vistas de Login y todas las de cirugia para quirofano
Lo hice en un archivo aparte porque no me aparecia en el localhost lo que hacia aqui
solo copie y pegue todo lo que hice, espero tu sepas como hacer que se vea :)
Ya solo faltaria la funcionalidad y retoques a lo visual 



Favor de ejecutar los siguientes comandos en la base de datos para solucionar un error que 
había en la misma o simplemente volver a ejecutar todo el codigo y el trigger de nuevo

 alter table usuarios drop contra; 
 alter table usuarios add contra varchar(260) not null;

alter table usuarios drop usuario; 
 alter table usuarios add usuario varchar(260) binary unique not null;





 login terminado 


 03-11-2022

 Ya conecte todas la ventanas que ya tenia hechas 


 favor de ingresar estas líneas a la base de datos en orden como están escritas:


 insert into usuarios values(null, 'encargado ceye','ceye','Ceye','22222222','123','ceye');

 insert into cirugias values(null, 'Toco-Cirugía','partos, no cesareas');
 insert into cirugias values(null, 'Quirófano','mayoría de cirugías');
    insert into cirugias values(null, 'Equipo','Entra en en esta categoría igual');

  insert into procedimientos values(null, 'Cesarea', 'no tiene rasgo especial',2);
  insert into procedimientos values(null, 'Mastectomia','no tiene rasgo especial',2);

  update usuarios set usuario = 'enfe' where id = 5; /* linea opcional, recordar que en tu base de datos el id puede ser distinto para aplicarlo*/

  controlador enfermeria/cirugias no es necesario y representa un peligro en seguridad de acceso
  ya que se accede desde el login a la vista que plantea este controlador 

  Leer distintos comentarios en controladores

  Utilizar el atributo "name" en los formularos para poder extraer los datos a través del consumo de apis,
  igualar el dato en atributo "id" al atributo "name" //No eliminar atributo id

  crear hoja de css general para todo el proyecto, llamarla a través del helper GlobalCss
  y configurar color de bootstrap clase is-invalid 

  el campo sala de acta_procedimientos es un campo que iba a ser eliminado del sistema por ser obsoleto


  21/11/22

  Lineas de codigo que es preferible agregar para hacer prubeas correctas respecto al codigo de trazabilidad

  insert into tipo_instrumentos values(null,'Pinzas');
  insert into instrumentos values(null,'pinzas grandes',1);


  24/11/22

  NOTAS//
  Funcionalidades para los campos de extra y para la parte de cirugia_pediatrica en la parte de acta_procedimientos
  serán arregladas, o serán tomados esos datos extras a través de modals en los mismos formularios y
  guardados en variables de javascript

  //PENDIENTES PROXIMOS George

    -agregar boton de eliminacion total a través de acta_procedimientos en acta_instrumentos
    -agregar o ver posibilidad de eliminación individual de cada uno de los posibles registros de acta_instrumentos


Notas Erika //

Llenar de datos pertinentes para prueba la parte de: "ropa_qui" donde tipo_bulto corresponde al nombre del tipo_bulto
es decir, todos los bultos que hay en la parte visual del controlador Formulario3,

A través de este cambio en la base de datos cambiar el comportamiento de la parte visual del controlador Formulario3
Traer en el controlador en una variable data todos los registros de la tabla ropa_qui

Mostrar exactamente de la fisma forma como se muestra actualemente la parte visual del controlador Formulario3
pero todos los datos y filas deben ser agregadas con un foreach a traves de la variable que ya cargaste previamente
  

02/12/2022


insert into ropa_qui values (null, 'Bulto Cirugía General');
insert into ropa_qui values (null, 'Bulto Cirugía Menor');
insert into ropa_qui values (null, 'Bulto Parto');
insert into ropa_qui values (null, 'Bulto Pediátrico');
insert into ropa_qui values (null, 'Bulto 3 batas');
insert into ropa_qui values (null, 'Bulto 1 bata');
insert into ropa_qui values (null, 'Bulto de 4 campos');
insert into ropa_qui values (null, 'Bulto de 2 campos');
insert into ropa_qui values (null, 'Bulto Hendido');




-------------------------------------------------------
06/12/22
-------------------------------------------------------


YA hice la vista para equipos, como me habias dicho, use el mismo formulario para toco, pero cuando
quiero guardar los datos de las tablas marca que yo no tengo acceso a eso o algo asi, lo mismo
cuando quiero guardar toco-cirugias.

-  -  -   -  -   -  -   -  -   -   -   -   -   -   -   -   -    -   -   -    -    -   -    -     - 

Trate de pintar los datos en la pagina principal de ceye, pero no pude :(
  ya deje el foreach acomodado como debe de ser, creo que el error viene de:  Enfermeria>Carga.ph
  no supe bien donde ponerlo la verdad.

-  -  -   -  -   -  -   -  -   -   -   -   -   -   -   -   -    -   -   -    -    -   -    -     - 

No entendi bien como puedo hacer para extraer la base de datos para luego pintarlos (esta si me quedo clara)
me puedes ayudar dejando eso listo porfa?

es la api para mostrar las tres ventanas de administrador y el de acta_procedimientos, me confundi mucho al momento
de ubicarlas o hacerlas

-  -  -   -  -   -  -   -  -   -   -   -   -   -   -   -   -    -   -   -    -    -   -    -     - 

en Ceye
el boton detalles y el boton bultos, que datos va a mostrar?

-  -  -   -  -   -  -   -  -   -   -   -   -   -   -   -   -    -   -   -    -    -   -    -     - 

administrador
segun yo modifique Cargas_page y inventario_page y sus respectivoss controllers para mostrardatos pero no me salio

para inventario, en la base de datos no viene fecha y hora pero en la tabla que pusimos si, ahi como le hacemos?

-  -  -   -  -   -  -   -  -   -   -   -   -   -   -   -   -    -   -   -    -    -   -    -     - 
  PD: INTENTE TODA LA TARDE HACERLO PERO NO MAS NO PUDE :( 
    NO QUISE MOLESTARTE POR LO DE TUS ESTANCIAS, SORRY :(
