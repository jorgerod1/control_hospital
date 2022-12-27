<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
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
	</style>
</head>
<body>

<nav class="navbar" style="background-color: #FFACC6;">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?=base_url();?>">
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
                            <p>Cirugía: <?=$acta_procedimiento->fecha;?></p>
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
	
</body>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>


<script type="text/javascript"> 


$(function(){

    var mensaje = "<?= $mensaje ?>";

			if(mensaje){

				alert(mensaje);

			}


    
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

                    alert('todo bien');

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



});

</script>
</html>