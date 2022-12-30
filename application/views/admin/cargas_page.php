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
    #fondo{
        display: grid;
        grid-template-columns: 1fr 1fr ;
        justify-content:center;
        border-color:black;
        margin-left:70px;
        margin-right:70px;
        background-color:#D9D9D9;
        padding:50px;
    }
    #c1, #c2, #c3{
        background-color:#FFACC6;
    }
    #botones{
        display: flex;
        justify-content:space-between;
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

<div class="mr-5 row justify-content-end">

  <select class=" mb-3  col-2 text-center form-control" name="opcionesCargas" id="opcionesCargas">
        <option selected value="1">Todas las cargas</option>
        <option value="2">Fechas</option>
    </select>

</div>


<div id="botones">
    <a href="<?=site_url('Administrador/CEyE');?>" type="submit" class="btn btn-primary" style="margin-left:75px;">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-left" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <line x1="5" y1="12" x2="19" y2="12"></line>
            <line x1="5" y1="12" x2="11" y2="18"></line>
            <line x1="5" y1="12" x2="11" y2="6"></line>
        </svg>
        Regresar a menú 
    </a>

    

    <nav aria-label="Page navigation example" style="margin-right:90px;">
      <ul class="pagination">
        <li class="page-item">
          <button hidden class="previous page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
          </button>
        </li>
        <li class="page-item"> <input hidden id="fechaActual" type="date" class="fecha page-link"></input></li>
        <li class="page-item">
          <button hidden class="next page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
          </button>
        </li>
      </ul>
    </nav> 
</div><br>


 
<div id="fondo">

  <?php  foreach ($acta_ceye as $acta_ceye_in) { 
    
                                                          ?>
    <div class="mb-3 card" style="width: 18rem;" id="c1">
      <div class="card-body">
        <h5 class="card-title">No. carga: <?=$acta_ceye_in->no_carga;?></h5>
        <h5 class="card-title">No. paquete: <?=$acta_ceye_in->no_paquete;?></h5>
        <h5 class="card-title">Fecha: <?=$acta_ceye_in->fecha;?></h5>
        <h5 class="card-title">Hora: <?=$acta_ceye_in->hora;?></h5><br>
        <a target="_blank" href="<?=site_url('Administrador/CargasTable/index/');?><?=$acta_ceye_in->id; ?>" class="btn btn-primary" style="background-color: #00B4CC;">Ver detalles</a><br>
      </div>
    </div>

  <?php } ?>

</div>





<br><br>
	
</body>

<script src="http://code.jquery.com/jquery-1.9.1.js"></script>

<script type="text/javascript"> 

    $(function(){

      $( document ).ready(function() {

          var fecha = new Date(); //Fecha actual
          var mes = fecha.getMonth()+1; //obteniendo mes
          var dia = fecha.getDate(); //obteniendo dia
          var ano = fecha.getFullYear(); //obteniendo año
          if(dia<10)
            dia='0'+dia; //agrega cero si el menor de 10
          if(mes<10)
            mes='0'+mes //agrega cero si el menor de 10
          document.getElementById('fechaActual').value=ano+"-"+mes+"-"+dia;

      });

      $('.fecha').on('change',function(){

        console.log('hola');

        let fecha = $('#fechaActual').val();

        filtrarFecha(fecha);

      });

      $('.previous').on('click',function(){

        event.preventDefault();

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

        filtrarFecha(fechaF);


      });

      $('.next').on('click',function(){

        event.preventDefault();

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

        filtrarFecha(fechaF);
      });

      $('#opcionesCargas').on('change',function(){

        let valor = $(this).val();


        if(valor == 1){

          console.log({valor});

          window.location.replace('<?=site_url('Administrador/Cargas') ?>');

        }else if(valor == 2){

          console.log({valor});

          $('.previous').prop('hidden',false);
          $('.next').prop('hidden',false);
          $('#fechaActual').prop('hidden',false);

          let fecha = $('#fechaActual').val();

          filtrarFecha(fecha);





        }

      });

        function sumarDias(fecha, dias){
          fecha.setDate(fecha.getDate() + dias);
          return fecha;
        }

        function filtrarFecha(fecha){

          console.log(fecha);

          $('#fondo').empty();

          datos = {
            "fecha" : fecha
          }



          $.ajax({

            url : "<?=site_url('ceye_api/Api/datos_cargas') ?>",
            method : "put",
            data : datos

          }).done(function(response){

            if(response.status ==1){

              alert('todo bien');

              if (response.data.length >= 1) {

                $.each(response.data,function(index,value){

                  console.log({value});

                  $('#fondo').append('<div class="mb-3 card" style="width: 18rem;" id="c1"><div class="card-body"><h5 class="card-title">No. carga:'+value.no_carga+'</h5><h5 class="card-title">No. paquete: '+value.no_paquete+'</h5><h5 class="card-title">Fecha:'+value.fecha+'</h5><h5 class="card-title">Hora:'+value.hora+'</h5><br><a target="_blank" href="<?=site_url('Administrador/CargasTable/index/');?>'+value.id+'" class="btn btn-primary" style="background-color: #00B4CC;">Ver detalles</a><br></div></div>');

                });



                
              } else {

               

                $('#fondo').append('<h3>No hay cargas esta fecha</h3>');
                
              }

            }else{
              alert('todo mal');
            }

          }).fail(function(response){

            alert('todo mal2');

          });

        }

    });


</script>
</html>