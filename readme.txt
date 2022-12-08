

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

    -agregar boton de eliminacion total a través de acta_procedimientos en acta_instrumentos NO NECESARIO
    -agregar o ver posibilidad de eliminación individual de cada uno de los posibles registros de acta_instrumentos COMPLETADO


Notas Erika //

Llenar de datos pertinentes para prueba la parte de: "ropa_qui" donde tipo_bulto corresponde al nombre del tipo_bulto
es decir, todos los bultos que hay en la parte visual del controlador Formulario3,

A través de este cambio en la base de datos cambiar el comportamiento de la parte visual del controlador Formulario3
Traer en el controlador en una variable data todos los registros de la tabla ropa_qui

Mostrar exactamente de la fisma forma como se muestra actualemente la parte visual del controlador Formulario3
pero todos los datos y filas deben ser agregadas con un foreach a traves de la variable que ya cargaste previamente
  

//---------------------------//

03/12/22

Favor de actualizar los pendientes para saber qué está completado y qué no,
Leer comentarios en controladoes y tomar acciones pertinentes antes de seguir con el trabajo
/* las acciones pertienentes no las he tomado yo para que pudieras visualizar porque tiene que ser cambiado
o eliminado un controlador*/  Actualizar el recorrido por la pagina con los controladores correctos ya que si seguimos por esta senda se convierte en doble trabajo

//Doctora comentarios y Notas

- En el formulario que pertence a la tabla acta_procedimientos agregar campo de procedimientos con entrada normal de varchar, dejar 
la anterior foreign key de procedimientos_id en la tabla pero marcarla en default como null y eliminarlo de la parte visual


//POSIBILIDADES 

-Posibilidad de guardar en la tabla acta_instrumentos el id del item del cual se extrajo el codigo de trazabilidad
 /*el id de la tabla "inventario"*/ de esa manera saber a qué item pertence cada acta_instrumentos

-En base al cambio anterior, posibilidad de crear botones de regreso avanzados donde se podrán editar los cambios
y las acciones hechas por las enfermeras en las 3 actas correspondientes a la seccion de enfermeras a través de los ids

04/12/22

Agregar estas líneas a la base de datos:

alter table acta_ceye modify column no_carga varchar(30);
alter table acta_ceye modify column no_paquete varchar(30);

05/12/22

Generacion de codigo de trazabilidad en automatico TERMINADO
Funcionamiento de agregar cargas e instrumentales por parte de ceye TERMINADO 






