<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	
    <title>Administrador</title>

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
                #c1{
                grid-area: cartaA;
                display: grid;
                justify-self: end;
                    margin-right:30px;
              }
              #c2{
                grid-area: cartaB;
                display: grid;
                justify-self: start;
                    margin-left:30px;
              }
                #cartas{
                    display: grid;
                grid-template-columns: 2fr 2fr;
                grid-template-rows: auto;
                grid-template-areas: 
                  "cartaA cartaB";
                }
                #c1, #c2, #c3{
                    background-color:#FFACC6;
                }
                #botones{
                    display: flex;
                    justify-content:space-between;
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
              background-color: #4CAF50;
              animation-duration: 2s;
              animation-timing-function: ease-in-out;
              animation-fill-mode: forwards;
            }

            .barras2 {
              width: 40px;
              height: 0;
              position: absolute;
              bottom: 0;
              background-color: #4c53af;
              animation-duration: 2s;
              animation-timing-function: ease-in-out;
              animation-fill-mode: forwards;
            }

            .bar1 {
              left: 50px;
              animation-name: grow1;
            }

            .bar2 {
              left: 125px;
              animation-name: grow2;
            }

            .bar3 {
              left: 200px;
              animation-name: grow3;
            }

            .bar4 {
              left: 275px;
              animation-name: grow4;
            }

            .bar5 {
              left: 350px;
              animation-name: grow5;
            }

            .bar6 {
              left: 425px;
              animation-name: grow6;
            }

            .bar7 {
              left: 500px;
              animation-name: grow7;
            }

            .bar_inventario7 {
              left: 50px;
              animation-name: grow1;
            }

            .bar_inventario6 {
              left: 125px;
              animation-name: grow2;
            }

            .bar_inventario5 {
              left: 200px;
              animation-name: grow3;
            }

            .bar_inventario4 {
              left: 275px;
              animation-name: grow4;
            }

            .bar_inventario3 {
              left: 350px;
              animation-name: grow5;
            }

            .bar_inventario2 {
              left: 425px;
              animation-name: grow6;
            }

            .bar_inventario1 {
              left: 500px;
              animation-name: grow7;
            }


            .progress {
              background-color : #c0c1c3;
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
    <a class="navbar-brand" href="<?=base_url();?>">
      <img src="<?=base_url();?>imagenes/Logo.png" alt="" width="30" height="30" class="d-inline-block align-text-top">
      Hospital Materno Celaya
    </a>
  </div>
</nav><br>
<div id="titulos">
<img src="<?=base_url();?>imagenes/LG.png" alt="" width="202" height="104" id="LG">
    <img src="<?=base_url();?>imagenes/moño.png" alt="" width="38" height="58" id="M" >
    <h3  id="T">SECRETARIA DE SALUD DE GUANAJUATO</h3>
    <img src="<?=base_url();?>imagenes/Logo.png" alt="" width="122" height="133" id="L">
    <h3 id="H">HOSPITAL MATERNO CELAYA</h3> <br>
</div>
<h3 align="center">CEyE</h3><br>

<div id="botones">
    <a href="<?=site_url('Administrador/Admin');?>" type="submit" class="btn btn-primary" style="margin-left:75px;">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-left" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <line x1="5" y1="12" x2="19" y2="12"></line>
            <line x1="5" y1="12" x2="11" y2="18"></line>
            <line x1="5" y1="12" x2="11" y2="6"></line>
        </svg>
        Regresar a menú
    </a>
    </button> 
</div><br><br>

<div class="d-flex justify-content-around" id="cartas" >
    <div class="card ml-5" style="width: 20rem;"  align="center" id="c1"><br>
        <h1 class="card-title" align="center">Cargas realizadas</h1>
        
        <div class="card-body">
            <a href="<?=site_url('Administrador/Cargas');?>" class="btn btn-primary" style="background-color: #00B4CC;">Ingresar</a><br> <br>
        </div>
    </div>


    <div class="card mr-5" style="width: 20rem;" align="center" style="background-color: #FFACC6;" id="c2"><br>
        <h1 class="card-title" align="center">Inventario</h1>
        
        <div class="card-body">
            <a href="<?=site_url('Administrador/Inventarios');?>" class="btn btn-primary" style="background-color: #00B4CC;">Ingresar</a><br> <br>
        </div>
    </div>

    
</div>

<div class="container-fluid">
  <div class="row mx-2">
    <br>

    <div class="col-lg-6">
      <br> <br>

        <div class="row">

          <h3>Cargas realizadas hoy: <span class="ml-3 numero"></span></h3>
         

          <div class="spinner ml-4 mt-1 spinner-border text-danger" role="status">
            <span class="sr-only">Loading...</span>
          </div>

        </div>

        <h4 class="fecha"></h4>
        
        <div class="mt-3 progress">
          <div class="bg-danger progress-bar progress-bar1 progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
        </div>

        <br> <br>

      <div class="chart">
        <h4 class="ml-5 mb-n5">Cargas en la semana</h4>
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

    <div class="col-lg-6">

            <br> <br>

        <div class="row">

          <h3 class="ml-3">Instrumentos esterilizados hoy: <span class=" numero2"></span></h3>
         

          <div class="spinner ml-4 mt-1 spinner-border text-danger" role="status">
            <span class="sr-only">Loading...</span>
          </div>

        </div>

        <h4 class="fecha"></h4>
        
        <div class="mt-3 progress">
          <div class="bg-danger progress-bar progress-bar2 progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
        </div>

        <br> <br>

      <div class="chart">
        <h4 class="ml-5 mb-n5">Instrumentos esterilizados en la semana</h4>
        <div class="barras2 bar_inventario1 justify-content-center d-flex"></div>
        <div class="barras2 bar_inventario2 justify-content-center d-flex"></div>
        <div class="barras2 bar_inventario3 justify-content-center d-flex"></div>
        <div class="barras2 bar_inventario4 justify-content-center d-flex"></div>
        <div class="barras2 bar_inventario5 justify-content-center d-flex"></div>
        <div class="barras2 bar_inventario6 justify-content-center d-flex"></div>
        <div class="barras2 bar_inventario7 justify-content-center d-flex"></div>
      </div>
      <small class="dias-semana ml-5">Viernes - Sábado - Domingo -- Lunes  --  Martes  -- Miércoles - Jueves</small>

      
    </div>

    <br>

  </div>
</div>





<br><br>

<script src="https://code.jquery.com/jquery-1.9.1.js"></script>

<script type="text/javascript">

  $(function(){

    var fecha_final;

    $(document).ready(function(){

          let fecha = new Date(); //Fecha actual
          let mes = fecha.getMonth()+1; //obteniendo mes
          let dia = fecha.getDate(); //obteniendo dia
          let ano = fecha.getFullYear(); //obteniendo año
          if(dia<10)
            dia='0'+dia; //agrega cero si el menor de 10

          if(mes<10)
            mes='0'+mes //agrega cero si el menor de 10

          fecha_final = ano+"-"+mes+"-"+dia;

          filtrarFecha(fecha_final);

       
          

    });

      function restarDias(fecha, dias){
        fecha.setDate(fecha.getDate() - dias);
        return fecha;
      }

      function filtrarFecha(fecha){

        console.log(fecha);

        $('#fondo').empty();

        datos = {
          "fecha" : fecha
        }



        $.ajax({

          url : "<?=site_url('ceye_api/Api/datos_cargas2') ?>",
          method : "put",
          data : datos

        }).done(function(response){

          if(response.status ==1){

            alert('Estadísticas traídas correctamente');

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
              $('.fecha').text(fecha_final);
              $('.progress-bar1').removeClass('bg-danger');
              $('.progress-bar1').attr('style','width : '+numero_cargas*15+'px');
              $('.progress-bar1').addClass('bg-success');

              $('.numero2').text(response.data2[0].length);
              $('.progress-bar2').removeClass('bg-danger');
              $('.progress-bar2').attr('style','width : '+response.data2[0].length*15+'px');
              $('.progress-bar2').addClass('bg-primary');

              let dias_ordenados = darNombresSemana();

              $('.dias-semana').text(dias_ordenados);

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

              //barras de inventario

              $('.bar_inventario1').append('<strong class="mb-3 mt-n4">'+response.data2[0].length+'</strong>');
              $('style').append('  @keyframes grow001 {0% {height: 0;}100% {height: '+response.data2[0].length*4+'px;}}');
              $('.bar_inventario1').prop('style','animation-name : grow001');

              $('.bar_inventario2').append('<strong class="mb-3 mt-n4">'+response.data2[1].length+'</strong>');
              $('style').append('  @keyframes grow002 {0% {height: 0;}100% {height: '+response.data2[1].length*4+'px;}}');
              $('.bar_inventario2').prop('style','animation-name : grow002');

             $('.bar_inventario3').append('<strong class="mb-3 mt-n4">'+response.data2[2].length+'</strong>');
              $('style').append('  @keyframes grow003 {0% {height: 0;}100% {height: '+response.data2[2].length*4+'px;}}');
              $('.bar_inventario3').prop('style','animation-name : grow003');

              $('.bar_inventario4').append('<strong class="mb-3 mt-n4">'+response.data2[3].length+'</strong>');
              $('style').append('  @keyframes grow004 {0% {height: 0;}100% {height: '+response.data2[3].length*4+'px;}}');
              $('.bar_inventario4').prop('style','animation-name : grow004');

              $('.bar_inventario5').append('<strong class="mb-3 mt-n4">'+response.data2[4].length+'</strong>');
              $('style').append('  @keyframes grow005 {0% {height: 0;}100% {height: '+response.data2[4].length*4+'px;}}');
              $('.bar_inventario5').prop('style','animation-name : grow005');

              $('.bar_inventario6').append('<strong class="mb-3 mt-n4">'+response.data2[5].length+'</strong>');
              $('style').append('  @keyframes grow006 {0% {height: 0;}100% {height: '+response.data2[5].length*4+'px;}}');
              $('.bar_inventario6').prop('style','animation-name : grow006');

              $('.bar_inventario7').append('<strong class="mb-3 mt-n4">'+response.data2[6].length+'</strong>');
              $('style').append('  @keyframes grow007 {0% {height: 0;}100% {height: '+response.data2[6].length*4+'px;}}');
              $('.bar_inventario7').prop('style','animation-name : grow007');

              


            




              
            } else {

              

              $('#fondo').append('<h3>No hay cargas esta fecha</h3>');
              console.log('No hay cargas')

              
            }

          }else{
            alert('todo mal');
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

      


  });

</script>
	
</body>
</html>