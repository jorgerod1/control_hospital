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
    #cartas{
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

<div id="cartas" >
   <!-- <?php foreach ($acta_procedimientos as $acta_procedimientos) {  ?>
    <div style="background-color: #FFACC6;" ><br>
        <div class="card mb-3" id="info">
            <div class="card-body" id="contenido">
            
                <div>
                    <p>Procedimiento: <?=$acta_procedimientos->procedimiento_id;?></p>
                    <p>Fecha: <?=$acta_procedimientos->fecha;?></p>
                    <p>Cirugía: <?=$acta_procedimientos->fecha;?></p>
                </div>
                <div>
                    <p>Servicio: <?=$acta_procedimientos->servicio;?></p>
                    <p>Hora: <?=$acta_procedimientos->hora;?></p>
                </div> 
            
                
                <div id="botones">
                    <a href="<?=site_url('Ceye/instrumentos');?>" target="_blank" class="mr-2 btn btn-primary" id="b1">Instrumentos</a>
                    <a href="#" class="btn btn-success" id="b2">Detalles</a>
                    <a href="#" class="mr-2 btn btn-warning" id="b3">Bultos</a>
                    <a href="#" class="btn btn-danger" id="b4">Finalizar</a>
                </div>
            </div>
        </div>
        <?php } ?>-->
        <div style="background-color: #FFACC6;" ><br>
        <div class="card mb-3" id="info">
            <div class="card-body" id="contenido">
            
                <div>
                    <p>Procedimiento: </p>
                    <p>Fecha:</p>
                    <p>Cirugía: </p>
                </div>
                <div>
                    <p>Servicio: </p>
                    <p>Hora: </p>
                </div> 
            
                
                <div id="botones">
                    <a href="<?=site_url('Ceye/instrumentos');?>" target="_blank" class="mr-2 btn btn-primary" id="b1">Instrumentos</a>
                    <a href="<?=site_url('Ceye/detalles');?>" target="_blank" class="btn btn-success" id="b2">Detalles</a>
                    <a href="<?=site_url('Ceye/bultos');?>" target="_blank" class="mr-2 btn btn-warning" id="b3">Bultos</a>
                    <a href="#" class="btn btn-danger" id="b4">Finalizar</a>
                </div>
            </div>
        </div>
    </div>

    <div class="card" style="width: 20rem;" align="center" id="agregar"> <br>
        <h4 class="card-title" align="center">Agregar nueva carga</h4>
        
        <div class="card-body">
            <img src="<?=base_url();?>imagenes/equipo.png" class="card-img-top" alt="..."><br><br>
            <a href="<?=site_url('Ceye/carga');?>" class="btn btn-primary" style="background-color: #00B4CC;">Agregar</a>
        </div>
    </div>
</div>



<br><br>
	
</body>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>

<script type="text/javascript"> 


$(function(){

    var mensaje = "<?= $mensaje ?>";

			if(mensaje){

				alert(mensaje);

			}

});

</script>
</html>