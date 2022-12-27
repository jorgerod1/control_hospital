

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
  
--------------
//Doctora comentarios y Notas

- En el formulario que pertence a la tabla acta_procedimientos agregar campo de procedimientos con entrada normal de varchar, dejar 
la anterior foreign key de procedimientos_id en la tabla pero marcarla en default como null y eliminarlo de la parte visual


//POSIBILIDADES 

-Posibilidad de guardar en la tabla acta_instrumentos el id del item del cual se extrajo el codigo de trazabilidad
 /*el id de la tabla "inventario"*/ de esa manera saber a qué item pertence cada acta_instrumentos

-En base al cambio anterior, posibilidad de crear botones de regreso avanzados donde se podrán editar los cambios
y las acciones hechas por las enfermeras en las 3 actas correspondientes a la seccion de enfermeras a través de los ids

-Crear todo en una sola misma vista respecto a la vista principal de Ceye, mostrar detalles desplegable. Instrumentos y bultos en modals

04/12/22

Agregar estas líneas a la base de datos:

alter table acta_ceye modify column no_carga varchar(30);
alter table acta_ceye modify column no_paquete varchar(30);

05/12/22

Generacion de codigo de trazabilidad en automatico TERMINADO
Funcionamiento de agregar cargas e instrumentales por parte de ceye TERMINADO 
-----------

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

//Perfecto, de hecho al final no vamos a ocupar la vista extra de instrumentos_toco, vamos a enviar a la misma de
intrumentos y bultos, ¿Por qué aparece que no hay acceso?

Seguramente algo que no se puede acceder o que hay un error, pero es diferente al error de "no tiene el usuario correcto". Dejando eso claro:
Este error representa que es requerido recibir un id que conecte la vistas ya que en la base de datos
la entidad fuerte en este caso vendría siendo acta_procedimientos y de ahí se necesita el id de el acta_procedimientos
a la que pertenece cada acta_instrumentos y acta_ropa_qui, por eso al acceder sin id marca que algo está marcarla
Mirar ejemplo parecido en: vistas: enfermeria: form1_page linea 225

-  -  -   -  -   -  -   -  -   -   -   -   -   -   -   -   -    -   -   -    -    -   -    -     - 

Trate de pintar los datos en la pagina principal de ceye, pero no pude :(
  ya deje el foreach acomodado como debe de ser, creo que el error viene de:  Enfermeria>Carga.ph
  no supe bien donde ponerlo la verdad.

  //Listo, ya fue resuelto, si quieres conocer más acerca deje comentarios en la vista y en el controlador Login
  sobre cómo lo hice. Solo queda arreglar la parque se movió,
  CONSEJO: La card que contiene la parte de cargas es parte del mismo contenedor donde están las cards del foreach
  debes crearle su propio contendenor y sacarlo de ahí

-  -  -   -  -   -  -   -  -   -   -   -   -   -   -   -   -    -   -   -    -    -   -    -     - 

No entendi bien como puedo hacer para extraer la base de datos para luego pintarlos (esta si me quedo clara)
me puedes ayudar dejando eso listo porfa?

es la api para mostrar las tres ventanas de administrador y el de acta_procedimientos, me confundi mucho al momento
de ubicarlas o hacerlas

//En esta parte estoy un poco confundido con lo de la api, creo que es el controlador, igual no me queda tan claro
pero cualquier cosa vuelvemelo a explicar o igual se resolvió con alguna cosita que ya hice sino mandame mensaje sin problema 


 08/12/22
Esq la parte del foreach se como implementarla en el html, pero supongo que para que eso funcione
debo modificar el codigo de los controllers, eso es lo que no se como hacer
igual ya estoy dejando listo el codigo del front, marca errores que quiero pensar es por lo de los
contrllers que te digo

-  -  -   -  -   -  -   -  -   -   -   -   -   -   -   -   -    -   -   -    -    -   -    -     - 

en Ceye
el boton detalles y el boton bultos, que datos va a mostrar?

//boton de ceye, despliega en la misma vista una card que funciona como objeto escondido, todo esto
ya estará cargado en la pagina al iniciar, solo se debe mostrar. Puedes buscar en bootstrap como hacerlo 
creo que se llama toggle

 08/12/22

 intente ponerle el despleglable a "Detalles" pero no pude, ya deje el codigo ahi listo no se si tu 
 puedas encontrar la razon por la que no los pespliega, lo saque de aqui:
 https://getbootstrap.com/docs/5.2/components/collapse/
 el que dice Horizontal


Bultos e instrumentos se despliegan en una ventana propia con su propia vista (posibilidad de hacerlo todo en la misma vista
pero con modals) y los datos que mostraran, recibiran el id de su antecesor acta_procedimientos y mostraran
los datos filtrados en base a ello

-  -  -   -  -   -  -   -  -   -   -   -   -   -   -   -   -    -   -   -    -    -   -    -     - 

administrador
segun yo modifique Cargas_page y inventario_page y sus respectivoss controllers para mostrar datos pero no me salio

para inventario, en la base de datos no viene fecha y hora pero en la tabla que pusimos si, ahi como le hacemos?

//Tenemos que traer todo a través de una super consulta o con un gusanito, en inventario tenemos el dato acta_instrumentos_ceye_id
a traves de eso podemos ir a esa tabla y ahi obtendremos el dato acta_ceye_id y ya conociendo el id, podemos extraer fecha y hora  de la tabla acta_ceye

igual esa consulta me la puedes dejar sin problema, ya nomas para mostrar

//repare lo de cargas_page, ya tenias casi todo para hacerlo, sólo estaban fallando algunas barreas del controlador
y tenias mal el nombre de donde estabas llamando la vista, tenias administrador y era admin, 
los demas errores los checamos despues, puedes compararlo con los ejemplos que resolví o los puedes dejar 
aquí en el readme y los checho en la tarde-noche sin problema 
-  -  -   -  -   -  -   -  -   -   -   -   -   -   -   -   -    -   -   -    -    -   -    -     - 
  PD: INTENTE TODA LA TARDE HACERLO PERO NO MAS NO PUDE :( 
    NO QUISE MOLESTARTE POR LO DE TUS ESTANCIAS, SORRY :(





08/12/22


Dale una revisada a todo lo que modifique para que corregir los errores que probablemente hay :)

---

//NO pintar datos con un foreach con una varible de recorrido que se llame igual que la variable original
crea muchos problemas

Agregar esta línea a la base de datos:

alter table acta_procedimientos add procedimientos varchar(160);

//NO usar estilos embebidos en el codigo, manejalos en hoja aparte o al menos 
  metelos juntos en las etiquetas style en el mismo documento