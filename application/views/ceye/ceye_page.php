<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html allow="autoplay" lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	
    <title>CEyE</title>

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
    #contenedor1{
        display: grid;
        grid-template-columns: 4fr 1fr;
        justify-content:center;
        border-color:black;
        margin-left:40px;
        margin-right:40px;
    }
    #info{
        margin-left:20px;
        margin-right:20px;
    }
    #agregar{
        background-color:#FFACC6;
        margin-left:70px;
    }
    #contenido{
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        justify-content:center;
        border-color:black;
    }
    #botones{
        display: grid;
        grid-template-columns: 1fr 1fr;
        grid-template-rows: 1fr 1fr;
    }
    #b1, #b2, #b3, #b4{
        margin-top:15px;
        
    }

    .noti:hover{

        cursor:pointer;
        color:grey!important;
        
        
    }

    .noti{
        position:relative;
        left:420px;
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

    <a class="noti self-align-end">

        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="self-align-end bi bi-bell" viewBox="0 0 16 16">
        <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/>
        </svg>

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
<h3 align="center">CEyE</h3><br>

<div id="contenedor1">
    <div id="contenedorDatos">
        <div style="background-color: #FFACC6;" id="datos"><br>
            <div class="card mb-3" id="info">
                <?php $contador=0; foreach ($acta_procedimientos as $acta_procedimiento) {  //las variables del foreach debe ser diferentes?> 
                    <div class="card-body" id="contenido">
                        <div>
                            <p>Procedimiento: <?=$acta_procedimiento->procedimientos;?></p>
                            <p>Fecha: <?=$acta_procedimiento->fecha;?></p>
                            
                        </div>
                        <div>
                            <p>Servicio: <?=$acta_procedimiento->servicio;?></p>
                            <p>Hora: <?=$acta_procedimiento->hora;?></p>
                        </div>
                        <div id="botones">
                            <a href="<?=site_url('Ceye/instrumentos/index/'.$acta_procedimiento->id);?>" target="_blank" class="mr-2 btn btn-primary" id="<?=$acta_procedimiento->id;?>">Instrumentos</a>
                            <!-- <a href="#" class="btn btn-success" id="b2">Detalles</a>-->
                            <a href="<?=site_url('Ceye/Bultos/index/'.$acta_procedimiento->id);?>" target="_blank" class="btn btn-warning" id=id="<?=$acta_procedimiento->id;?>">Bultos</a>
                            <a id="<?=$acta_procedimiento->id;?>" href="#" class="finalizar btn btn-danger">Finalizar</a>

                            <button class="btn btn-success" type="button" data-toggle="collapse" data-target="#collapseWidthExample<?=$contador?>" aria-expanded="false" aria-controls="collapseWidthExample<?=$contador?>">
                                Detalles
                            </button>
                            <div style="">
                                <div class="collapse collapse-horizontal" id="collapseWidthExample<?=$contador?>">
                                    <div class="card card-body" style="width: 300px;">
                                        <p>Nombre del paciente: <?=$acta_procedimiento->nombre_paciente;?></p>
                                        <p>Fecha de nacimiento: <?=$acta_procedimiento->fecha_nacimiento;?></p>
                                        <p>Edad: <?=$acta_procedimiento->edad;?></p>
                                        <p>Enfermera quirurgica: <?=$acta_procedimiento->enfermera_quirurjica;?></p>
                                        <p>Enfermera circulante: <?=$acta_procedimiento->enfermera_circulante;?></p>
                                        <p>Cirujano: <?=$acta_procedimiento->cirujano;?></p>
                                        <p>Anestesiologo: <?=$acta_procedimiento->anestesiologo;?></p>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                   
                <?php $contador++; } ?>
            </div>
        </div>
    </div>

    <div id="contenedorCartaAgregar">
        <div class="card" style="width: 20rem;" align="center" id="agregar"> <br>
            <h4 class="card-title" align="center">Agregar nueva carga</h4>

            <div class="card-body">
                <img src="<?=base_url();?>imagenes/equipo.png" class="card-img-top" alt="..."><br><br>
                <a href="<?=site_url('Ceye/carga');?>" class="btn btn-primary" style="background-color: #00B4CC;">Agregar</a>
            </div>
        </div>
    </div>

</div>

<br><br>

<!-- Modals  --> 

<div class="modal fade" id="alerta" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">¡Nueva acta agregada!</h5>
        <button type="button" class="reset close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                Recuerda que los instrumentos y los bultos pueden tardar algo más en actualizar debido a que la enfermera sigue llenando los detalles.
      </div>
      <div class="modal-footer">
        <button type="button" class="reset btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="reset btn btn-primary">Entendido</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="bienvenida" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">¡Bienvenido!</h5>
        <button type="button" class=" close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
               <strong class="ml-3">Cierre este mensaje para iniciar el funcionamiento normal</strong>
      </div>
      <div class="modal-footer">
        <button type="button" class=" btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" data-dismiss="modal" class=" btn btn-primary">Entendido</button>
      </div>
    </div>
  </div>
</div>
	
</body>


<script src="https://code.jquery.com/jquery-1.9.1.js" allow="autoplay"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" allow="autoplay" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

<audio id="soundtrack" src="<?=base_url(); ?><?="Sonidos/SD_ALERT_29.mp3"?>" type="audio/ogg" allow="autoplay"></audio>

<script type="text/javascript" allow="autoplay"> 




    $(function(){

        

        var mensaje = "<?= $mensaje ?>";

        var cantidadActas = 0;

        var cantidadActasActual = 0;

       

        $(document).ready(function(){

            $('#bienvenida').modal('show');

                if(mensaje){

                    alert(mensaje);

                }

                $.ajax({
                    
                    url: "<?=site_url('ceye_api/Api/cantidad_actas'); ?>",
                    method: "get",
                    async:false

                }).done(function(response){

                    if (response.status == 1) {

                        cantidadActas = response.data;

                        console.log({cantidadActas});
                        
                    } else {

                        alert('todo mal');

                        
                    }

                }).fail(function(response){

                    alert('todo mal2');


                });

                //las siguientes lineas primero esperan 5 segundos y luego inicia un loop en el cual cada 9 segundos
                //consultará la base datos para verificar que la cantidad de actas es igual a la que se cargo inicialente
                //en la variable cantidadActas, si esto difiere en algún momento entones enviaremos una notificación.

                //NOTA: Podemos ver las diferentes maneras de llamar una función en javascript, en el primer intervalo unico
                //tenemos una función de manera tradicional, y en el intervalo continuo tenemos otra forma de escribir una función

                setTimeout(function(){

                    setInterval(() => {

                        $.ajax({

                            url: "<?=site_url('ceye_api/Api/cantidad_actas'); ?>",
                            method: "get"

                        }).done((response) => {

                            if (response.status == 1) {

                            

                                cantidadActasActual = response.data;

                                console.log({cantidadActasActual});

                                if (cantidadActasActual != cantidadActas) {

                                    $('#alerta').modal('show');

                                    var audplay = new Audio()
                                    audplay.src = "<?=base_url(); ?><?="Sonidos/SD_ALERT_29.mp3"?>";

                                    //$('#soundtrack').get(0).play();

                                    //audplay.load();
                                    //audplay.play();

                                    audplay.addEventListener("canplaythrough", () => {

                                        audplay.play().catch(e => {
                                            window.addEventListener('click', () => {
                                                audplay.play()
                                            }, { once: true })
                                        });

                                    });
                                    
                                }
                                
                            } else {

                                alert('todo mal');
                                
                            }

                        }).fail((response) => {

                            alert('todo mal2');


                        });

                        
                    }, 9000);

                    

                }, 5000);

                

        });

        
        $('.finalizar').on('click',function(){

            event.preventDefault();

            let confirma = confirm('¿Seguro que desea finalizar el acta?');

            if (confirma) {

                let id = $(this).prop('id');

                let ids = {
                    "id" : id
                }

                //console.log({id});

                $.ajax({

                    url : "<?=site_url('ceye_api/Api/finalizar_acta') ?>",
                    method : "put",
                    data : ids

                }).done(function(response){

                    if (response.status == 1) {

                       // alert('todo bien');

                        window.location.replace('<?=site_url(); ?>');
                        
                    } else {

                        alert('todo mal');
                        
                    }

                }).fail(function(response){

                    alert('todo mal2');

                });
                
            } else {
                
            }
        });

        $('.reset').on('click',() => {
            
            window.location.replace('<?=site_url('Login'); ?>');
        });



    });



</script>
</html>