<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	
    <title>Actas Enfermería</title>

    <style type="text/css">

        ::selection { background-color: #E13300; color: white; }
        ::-moz-selection { background-color: #E13300; color: white; }
        #LG{
            grid-area: header;
            display: grid;
            justify-self: center;
        }
        #T{
            grid-area: main;
            display: grid;
            justify-self: center;
        }
        #M{
            grid-area: sidebar;
            display: grid;
            justify-self: end;
        }
        #H{
            grid-area: footer;
        }
        #L{
            grid-area: logo;
            display: grid;
            justify-self: center;
        }
        #titulos{
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 4fr 2fr;
            grid-template-rows: auto;
            grid-template-areas: 
                "header main main main logo"
                "header . sidebar footer logo";
        }
        #cartas{
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            justify-content:center;
            border-color:black;
            margin-left:70px;
            margin-right:70px;
            padding:30px;
        }
        #c1, #c2, #c3{
            background-color:#FFACC6;
        }

        .card{
            min-height: 20rem;
            justify-content: space-between;
        
        }

        .card-title{
            width:100%;
        }

        .card-text{
            width:100%;
        }

        .card-body{
            display:flex;
            
            flex-wrap:wrap;
            align-items:center;
        }

        .chart {
              width: 100%;
              height: 300px;
              background-color: #f1f1f1;
              position: relative;
            }

            .bar {
              width: 40px;
              height: 0;
              position: absolute;
              bottom: 0;
              background-color: #934caf;
              animation-duration: 2s;
              animation-timing-function: ease-in-out;
              animation-fill-mode: forwards;
            }

            .bar1 {
              left: 330px;
              animation-name: grow1;
            }

            .bar2 {
              left: 405px;
              animation-name: grow2;
            }

            .bar3 {
              left: 480px;
              animation-name: grow3;
            }

            .bar4 {
              left: 555px;
              animation-name: grow4;
            }

            .bar5 {
              left: 630px;
              animation-name: grow5;
            }

            .bar6 {
              left: 705px;
              animation-name: grow6;
            }

            .bar7 {
              left: 780px;
              animation-name: grow7;
            }

            

            @keyframes grow1 {
              0% {
                height: 0;
              }
              100% {
                height: 200px;
              }
            }

            @keyframes grow2 {
              0% {
                height: 0;
              }
              100% {
                height: 150px;
              }
            }

            @keyframes grow3 {
              0% {
                height: 0;
              }
              100% {
                height: 100px;
              }
            }

            @keyframes grow4 {
              0% {
                height: 0;
              }
              100% {
                height: 50px;
              }
            }

            @keyframes grow5 {
              0% {
                height: 0;
              }
              100% {
                height: 50px;
              }
            }

            @keyframes grow6 {
              0% {
                height: 0;
              }
              100% {
                height: 50px;
              }
            }

            @keyframes grow7 {
              0% {
                height: 0;
              }
              100% {
                height: 50px;
              }
            }
	
	</style>

</head>
<body>

<nav class="navbar" style="background-color: #FFACC6;">
  <div class="container-fluid">
        <a class="navbar-brand" href="<?=base_url(); ?>">
        <img src="<?=base_url();?>imagenes/Logo.png" alt="" width="30" height="30" class="d-inline-block align-text-top">
        Hospital Materno Celaya
        </a>
        <a class="self-align-end" href="<?=base_url()?>index.php/Login/logout"> Cerrar sesion</a>
  </div>
</nav><br>



<div id="titulos">
    <img src="<?=base_url();?>imagenes/LG.png" alt="" width="202" height="104" id="LG">
    <img src="<?=base_url();?>imagenes/moño.png" alt="" width="38" height="58" id="M" >
    <h3  id="T">SECRETARIA DE SALUD DE GUANAJUATO</h3>
    <img src="<?=base_url();?>imagenes/Logo.png" alt="" width="122" height="133" id="L">
    <h3 id="H">HOSPITAL MATERNO CELAYA</h3> <br>
</div>
<h3 align="center">Vista previa de las actas de enfermería</h3><br>

<div class="container-fluid">

    <a href="<?=site_url('Login');?>"  class="btn btn-primary" style="margin-bottom: -50px; margin-left:75px;">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-left" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <line x1="5" y1="12" x2="19" y2="12"></line>
            <line x1="5" y1="12" x2="11" y2="18"></line>
            <line x1="5" y1="12" x2="11" y2="6"></line>
        </svg>
        Regresar
    </a>
   <div><button class="estadisticasModal btn btn-success" style="margin-left:75px; margin-bottom: -90px;" data-toggle="modal" data-target="#exampleModal"><b>Estadísticas</b> </button></div><br><br>

    <div class="row justify-content-end mr-5">

        
        
        <nav aria-label="Page navigation example">
            
            <select class="form-control mb-2" id="activacion">
                <option selected value="1">Activas</option>
                <option  value="0">No activas</option>

            </select>
            <ul class="pagination">
                <li class="page-item">
                <button  class="previous page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </button>
                </li>
                <li class="page-item"> <input  id="fechaActual" type="date" class="fecha page-link"></input></li>
                <li class="page-item">
                <button  class="next page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </button>
                </li>
            </ul>
        </nav> 

    </div>
    <br>
    <div class="cargando d-flex justify-content-around">
        <strong class="text-danger">Cargando...</strong>
        <div class="spinner-border text-danger" role="status" aria-hidden="true"></div>
    </div>



    <div class="row actas justify-content-start">

       <!-- <div class="col-lg-3 col-md-4 col-sm-6 col-12">
    
            <div class="card bg-light mb-3" style="max-width: 18rem;">
                <div class="card-header" style="background-color: #e56b6f; color: white;">'+if(dato.nombre)+'Quirófano</div>
                <div class="card-body">
                    <h5 class="card-title" style="color: #e56b6f;">Nombre del hospital</h5>
                    <p class="card-text">Dirección: 123 Main St</p>
                    <p class="card-text">Ciudad: Anytown</p>
                    <p class="card-text">Estado: ST</p>
                    <p class="card-text">Código postal: 12345</p>
                    <a href="#" class="btn btn-primary" style="background-color: #e56b6f; border-color: #e56b6f;">Más información</a>
                </div>
            </div>

        </div> -->

    </div>

</div>


<br><br>

<!-- Modals   -->

<!-- Button trigger modal 
<button type="button" class="btn btn-primary" >
  Launch demo modal
</button>-->


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Estadísticas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="col-12">
            <br> <br>

            <div class="row">

                <h3>Actas realizadas hoy: <span class="ml-3 numero"></span></h3>
                

                <div class="spinner ml-4 mt-1 spinner-border text-danger" role="status">
                    <span class="sr-only">Loading...</span>
                </div>

            </div>

            <h4 class="fecha"></h4>
            
            <div class="mt-3 progress">
                <div class="bg-danger progress-bar progress-bar1 progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
            </div>

            <br> <br>

            <div class="row justify-content-center">

                <div class="chart d-flex justify-content-center">
                    <h4 class="mt-4">Actas en la semana</h4>
                    <div class="bar bar1 justify-content-center d-flex"></div>
                    <div class="bar bar2 justify-content-center d-flex"></div>
                    <div class="bar bar3 justify-content-center d-flex"></div>
                    <div class="bar bar4 justify-content-center d-flex"></div>
                    <div class="bar bar5 justify-content-center d-flex"></div>
                    <div class="bar bar6 justify-content-center d-flex"></div>
                    <div class="bar bar7 justify-content-center d-flex"></div>
                </div>
                <small class="dias-semana ml-5">Viernes - Sábado - Domingo -- Lunes  --  Martes  -- Miércoles - Jueves</small>

            </div>

        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        
      </div>
    </div>
  </div>
</div>

	
</body>

<script src="https://code.jquery.com/jquery-1.9.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

<script type="text/javascript"> 


    $(function(){

        var activo_general = true;
        var fecha_general;
        var fecha_hoy;

        $(document).ready(function(){

            var mensaje = "<?= $mensaje ?>";

                if(mensaje){

                    alert(mensaje);

                }

                var fecha = new Date(); //Fecha actual
                var mes = fecha.getMonth()+1; //obteniendo mes
                var dia = fecha.getDate(); //obteniendo dia
                var ano = fecha.getFullYear(); //obteniendo año
                if(dia<10)
                    dia='0'+dia; //agrega cero si el menor de 10
                if(mes<10)
                mes='0'+mes //agrega cero si el menor de 10

                
                document.getElementById('fechaActual').value=ano+"-"+mes+"-"+dia;

                let fecha2 = $('#fechaActual').val();

                console.log({fecha2});

                fecha_general = fecha2;
                fecha_hoy = ano+"-"+mes+"-"+dia;

                traerFechas(fecha2,activo=true);

            


        });

        $('.previous').on('click',function(){

            event.preventDefault();

            $('.cargando').removeAttr('style', 'display: flex !important');

            var fechaA = $('#fechaActual').val();

            var fecha = new Date(fechaA);

            

            console.log(fecha);

            let newFecha = sumarDias(fecha, 0);

            let fechaF = newFecha.getFullYear();

            if (newFecha.getMonth()+1 < 10) {

            fechaF += '-0'+(newFecha.getMonth()+1);
            
            } else {

            fechaF += '-'+(newFecha.getMonth()+1);
            
            }
            
            

            if (newFecha.getDate() <10) {

            fechaF += '-0'+newFecha.getDate();
            
            } else {

            fechaF += '-'+newFecha.getDate();
            
            }

            

            $('#fechaActual').val(fechaF);

            console.log({fechaF});

            fecha_general = fechaF;

            traerFechas(fechaF, activo_general);

            


        });

        $('.next').on('click',function(){

            event.preventDefault();

            $('.cargando').removeAttr('style', 'display: flex !important');


            var fechaA = $('#fechaActual').val();

            var fecha = new Date(fechaA);

            

            console.log(fecha);

            let newFecha = sumarDias(fecha, 2);

            let fechaF = newFecha.getFullYear();

            if (newFecha.getMonth()+1 < 10) {

            fechaF += '-0'+(newFecha.getMonth()+1);
            
            } else {

            fechaF += '-'+(newFecha.getMonth()+1);
            
            }
            
            

            if (newFecha.getDate() <10) {

            fechaF += '-0'+newFecha.getDate();
            
            } else {

            fechaF += '-'+newFecha.getDate();
            
            }

            

            $('#fechaActual').val(fechaF);

            console.log({fechaF});

            fecha_general = fechaF;


            traerFechas(fechaF, activo_general);


            
        });

        function sumarDias(fecha, dias){
            fecha.setDate(fecha.getDate() + dias);
            return fecha;
        }

        function traerFechas(fecha, activo){

            let nombreApi;

            if(activo){

                nombreApi = "traerActasFecha";

                

            }else if(!activo){

                nombreApi = "traerActasFechaNoActivo";


            }

            $.ajax({

                    async : false,
                    url : "<?=site_url('actas_procedimientos_api/Api/'); ?>"+nombreApi+"/"+fecha

                }).done(function(response){

                    if(response.status == 200){

                        $('.cargando').prop('style', 'display: none !important');

                        $('.actas').empty();

                        if (response.data.length != 0) {
                            
                    

                            response.data.forEach(dato => {

                                if (dato.nombre_paciente) { //Quirófano

                                    $('.actas').append('<div class="col-lg-3 col-md-4 col-sm-6 col-12"><div class="card bg-light mb-3" style="max-width: 18rem;"><div class="card-header" style="background-color: #e56b6f; color: white;">Quirófano</div><div class="card-body"><h5 class="card-title" style="color: #e56b6f;">'+dato.nombre_paciente+'</h5><p class="card-text">Edad: '+dato.edad+'</p><p class="card-text">Procedimiento: '+dato.procedimientos+'</p><p class="card-text">Fecha y hora: '+dato.fecha+'</p><p class="card-text">Enfermero/a: '+dato.enfermera_circulante+'</p><a href="#" id_acta="'+dato.id+'" class="btn btn-primary" style="background-color: #e56b6f; border-color: #e56b6f;">Más información</a></div></div></div>');
                                    
                                } else if(dato.servicio){ //Toco-cirugía

                                    $('.actas').append('<div class="col-lg-3 col-md-4 col-sm-6 col-12"><div class="card bg-light mb-3" style="max-width: 18rem;"><div class="card-header" style="background-color: rgb(93, 182, 185); color: white;">Toco-cirugía</div><div class="card-body"><p class="card-text">Servicio: '+dato.servicio+'</p><p class="card-text">Turno: '+dato.turno+'</p><p class="card-text">Fecha y hora: '+dato.fecha+'</p><p class="card-text">Enfermero/a: '+dato.enfermera_circulante+'</p><a href="#" id_acta="'+dato.id+'" class="btn btn-primary" style="background-color: rgb(93, 182, 185); border-color: rgb(93, 182, 185);">Más información</a></div></div></div>');
                                    
                                }else{ //Equipo

                                    $('.actas').append('<div class="col-lg-3 col-md-4 col-sm-6 col-12"><div class="card bg-light mb-3" style="max-width: 18rem;"><div class="card-header" style="background-color: rgb(202, 129, 231); color: white;">Equipo</div><div class="card-body"><p class="card-text">Turno: '+dato.turno+'</p><p class="card-text">Fecha y hora: '+dato.fecha+'</p><p class="card-text">Enfermero/a: '+dato.enfermera_circulante+'</p><a href="#" id_acta="'+dato.id+'" class="btn btn-primary" style="background-color: rgb(202, 129, 231); border-color: rgb(202, 129, 231);">Más información</a></div></div></div>');

                                }

                                //$('.actas').append('<div class="col-lg-3 col-md-4 col-sm-6 col-12"><div class="card bg-light mb-3" style="max-width: 18rem;"><div class="card-header" style="background-color: #e56b6f; color: white;">'+(dato.nombre_paciente ? 'Quirófano' : (dato.servicio ? 'Toco-cirugía' : 'Equipos'))+'</div><div class="card-body"><h5 class="card-title" style="color: #e56b6f;">Nombre del hospital</h5><p class="card-text">Dirección: 123 Main St</p><p class="card-text">Ciudad: Anytown</p><p class="card-text">Estado: ST</p><p class="card-text">Código postal: 12345</p><a href="#" class="btn btn-primary" style="background-color: #e56b6f; border-color: #e56b6f;">Más información</a></div></div></div>')
                                
                            });

                        } else {

                            $('.actas').append('<div class="col-12"><h3 class="text-center">No hay actas disponibles</h3><div>');
                            
                        }


                    }else{

                        alert('Error en recepción de fecha');

                    }


                }).fail(function(response){

                    alert('Error de servidor')

                });

            

        }

        $('#activacion').on('change',function(){

            $('.cargando').removeAttr('style', 'display: flex !important');

            //console.log($(this).val());

            if($(this).val() == 1){

                activo_general = true;
                console.log('esta activo');

            }else if($(this).val() == 0){

                activo_general = false;
                console.log('no esta activo');


            }

            traerFechas(fecha_general,activo_general);

        });

        $('#fechaActual').on('change',function(){

            $('.cargando').removeAttr('style', 'display: flex !important');

            let fecha = $('#fechaActual').val();

            fecha_general = fecha;

            traerFechas(fecha,activo_general);


        });

        $('.actas').on('click','[id_acta]',function(){

            event.preventDefault();

            let id = $(this).attr('id_acta');

            console.log({id});

            window.open('<?=site_url('Administrador/Actas_enfermeria/table/')?>'+id);

        });

        $('.estadisticasModal').on('click',function(){

            filtrarFecha(fecha_hoy);

        });

        function filtrarFecha(fecha){

            console.log(fecha);

            $('#fondo').empty();

            datos = {
            "fecha" : fecha
            }



            $.ajax({

            url : "<?=site_url('ceye_api/Api/datos_actas') ?>",
            method : "put",
            data : datos

            }).done(function(response){

             if(response.status == 200){

            //alert('Estadísticas traídas correctamente');

            $('.spinner').hide();

            if (response.data.length >= 1) {

            

              let numero_cargas = 0;

              let numero_cargas1 = 0;
              let numero_cargas2 = 0;
              let numero_cargas3 = 0;
              let numero_cargas4 = 0;
              let numero_cargas5 = 0;
              let numero_cargas6 = 0;
              let numero_cargas7 = 0;

              let fecha2 = new Date();

              console.log({fecha2})

              //obtenemos la fecha del día de hoy y con funciones restamos días y adaptamos los formatos correctamente.

            

              let fecha_carga6 = restarDias(fecha2,1);
              fecha_carga6 = fecha_carga6.getFullYear()+'-'+((fecha_carga6.getMonth()+1).toString().padStart(2, "0"))+'-'+(fecha_carga6.getDate()).toString().padStart(2, "0");
              
              let fecha_carga5 = restarDias(fecha2,1);
              fecha_carga5 = fecha_carga5.getFullYear()+'-'+((fecha_carga5.getMonth()+1).toString().padStart(2, "0"))+'-'+(fecha_carga5.getDate()).toString().padStart(2, "0");

              let fecha_carga4 = restarDias(fecha2,1);
              fecha_carga4 = fecha_carga4.getFullYear()+'-'+((fecha_carga4.getMonth()+1).toString().padStart(2, "0"))+'-'+(fecha_carga4.getDate()).toString().padStart(2, "0");
             
              let fecha_carga3 = restarDias(fecha2,1);
              fecha_carga3 = fecha_carga3.getFullYear()+'-'+((fecha_carga3.getMonth()+1).toString().padStart(2, "0"))+'-'+(fecha_carga3.getDate()).toString().padStart(2, "0");
              
              let fecha_carga2 = restarDias(fecha2,1);
              fecha_carga2 = fecha_carga2.getFullYear()+'-'+((fecha_carga2.getMonth()+1).toString().padStart(2, "0"))+'-'+(fecha_carga2.getDate()).toString().padStart(2, "0");
             
              let fecha_carga1 = restarDias(fecha2,1);
              fecha_carga1 = fecha_carga1.getFullYear()+'-'+((fecha_carga1.getMonth()+1).toString().padStart(2, "0"))+'-'+(fecha_carga1.getDate()).toString().padStart(2, "0");

              console.log({fecha_carga1});

              $.each(response.data,function(index,value){

                //en este foreach las comparaciones nos ayudan a saber la cantidad de los 7 días de la semana 

                let fechaCorregida = value.fecha.split(' ');

                if(fechaCorregida[0] == fecha){

                  console.log('fecha corregida: '+fechaCorregida[0]);

                  numero_cargas++;

                

                }

                if(fechaCorregida[0] == fecha_carga6){

                  numero_cargas6++;

                

                }

                if(fechaCorregida[0] == fecha_carga5){

                  numero_cargas5++;

                

                }

                if(fechaCorregida[0] == fecha_carga4){

                  numero_cargas4++;

                

                }

                if(fechaCorregida[0] == fecha_carga3){

                  numero_cargas3++;

                

                }

                if(fechaCorregida[0] == fecha_carga2){

                  numero_cargas2++;

                

                }

                if(fechaCorregida[0] == fecha_carga1){

                  numero_cargas1++;

                

                }

                

                
              });

              console.log({numero_cargas});

              $('.numero').text(numero_cargas);
              $('.fecha').text(fecha_hoy);
              $('.progress-bar1').removeClass('bg-danger');
              $('.progress-bar1').attr('style','width : '+numero_cargas*15+'px');
              $('.progress-bar1').addClass('bg-success');

              

              let dias_ordenados = darNombresSemana();

              $('.dias-semana').text(dias_ordenados);

              //linea encargada de reiniciar cada barra

              $('.bar1, .bar2, .bar3, .bar4, .bar5, .bar6, .bar7').empty();

              //lineas de las barras de la gráfica actualizadas en tiempo real 

              $('.bar7').append('<strong class="mb-3 mt-n4">'+numero_cargas+'</strong>');
              $('style').append('  @keyframes grow07 {0% {height: 0;}100% {height: '+numero_cargas*15+'px;}}');
              $('.bar7').prop('style','animation-name : grow07');

              $('.bar6').append('<strong class="mb-5 mt-n4">'+numero_cargas6+'</strong>');
              $('style').append('  @keyframes grow06 {0% {height: 0;}100% {height: '+numero_cargas6*15+'px;}}');
              $('.bar6').prop('style','animation-name : grow06');

              $('.bar5').append('<strong class="mb-5 mt-n4">'+numero_cargas5+'</strong>');
              $('style').append('  @keyframes grow05 {0% {height: 0;}100% {height: '+numero_cargas5*15+'px;}}');
              $('.bar5').prop('style','animation-name : grow05');

              $('.bar4').append('<strong class="mb-5 mt-n4">'+numero_cargas4+'</strong>');
              $('style').append('  @keyframes grow04 {0% {height: 0;}100% {height: '+numero_cargas4*15+'px;}}');
              $('.bar4').prop('style','animation-name : grow04');

              $('.bar3').append('<strong class="mb-5 mt-n4">'+numero_cargas3+'</strong>');
              $('style').append('  @keyframes grow03 {0% {height: 0;}100% {height: '+numero_cargas3*15+'px;}}');
              $('.bar3').prop('style','animation-name : grow03');

              $('.bar2').append('<strong class="mb-5 mt-n4">'+numero_cargas2+'</strong>');
              $('style').append('  @keyframes grow02 {0% {height: 0;}100% {height: '+numero_cargas2*15+'px;}}');
              $('.bar2').prop('style','animation-name : grow02');

              $('.bar1').append('<strong class="mb-5 mt-n4">'+numero_cargas1+'</strong>');
              $('style').append('  @keyframes grow01 {0% {height: 0;}100% {height: '+numero_cargas1*15+'px;}}');
              $('.bar1').prop('style','animation-name : grow01');


              
            } else {

              $('#fondo').append('<h3>No hay cargas esta fecha</h3>');
              console.log('No hay cargas')

              
            }

          }else{
            alert('Error en recepción de datos');
          }

            }).fail(function(response){

            alert('Error de servidor');

            });

        }

        function darNombresSemana(){

            let fecha2 = new Date();


            let string_dias;


            
            fecha2 = restarDias(fecha2, 6);
            string_dias = '  '+obtenerDiaSemana(fecha2)+' - ';
        
            
            fecha2 = restarDias(fecha2, -1);
            string_dias += obtenerDiaSemana(fecha2)+' - ';
        
            
            fecha2 = restarDias(fecha2, -1);
            string_dias += obtenerDiaSemana(fecha2)+' - ';

            
            fecha2 = restarDias(fecha2, -1);
            string_dias += obtenerDiaSemana(fecha2)+' - ';

            
            fecha2 = restarDias(fecha2, -1);
            string_dias += obtenerDiaSemana(fecha2)+' - ';

        
            fecha2 = restarDias(fecha2, -1);
            string_dias += obtenerDiaSemana(fecha2)+' - ';

            string_dias += obtenerDiaSemana(new Date());

            $('.dias-semana').text(string_dias);
        
        
        }

        function obtenerDiaSemana(fecha) {
            // Array con los nombres de los días de la semana
            const diasSemana = ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'];
            
            // Obtenemos el número del día de la semana (0: Domingo, 1: Lunes, etc.)
            const numDiaSemana = fecha.getDay();
            
            // Devolvemos el nombre del día de la semana correspondiente

            let dia = fecha.getDate(); //obteniendo dia
            if(dia<10)
                dia='0'+dia; //agrega cero si el menor de 10

            return diasSemana[numDiaSemana]+' '+dia;
        }

        function restarDias(fecha, dias){
            fecha.setDate(fecha.getDate() - dias);
            return fecha;
        }

        

    });

</script>
</html>