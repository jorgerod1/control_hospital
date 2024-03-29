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
<h3 align="center">Administrador</h3><br>

<div id="cartas" >

    <div class="card" style="width: 20rem;" align="center" id="c1"><br>
        <h4 class="card-title" align="center">Actas</h4>
        
        <div class="card-body">
            <img src="<?=base_url();?>imagenes/cirugia.png" class="card-img-top" alt="..."><br><br>
            
            <a href="<?=site_url('Administrador/Actas_enfermeria');?>" class="btn btn-primary" style="background-color: #00B4CC;">Acceder</a><br> <br>
        </div>
    </div>


    <div class="card" style="width: 20rem;" align="center" style="background-color: #FFACC6;" id="c2"><br>
        <h4 class="card-title" align="center">Usuarios</h4>
        
        <div class="card-body">
            <img src="<?=base_url();?>imagenes/USUARIO.png" class="card-img-top" alt="..." width="200" height="200"><br><br>
            
            <a  href="<?=site_url('Administrador/Usuarios');?>" class="btn btn-primary" style="background-color: #00B4CC;">Acceder</a><br> <br>
        </div>
    </div>


    <div class="card" style="width: 20rem;" align="center" style="background-color: #FFACC6;" id="c3"> <br>
        <h4 class="card-title" align="center">Inventario</h4>
        
        <div class="card-body">
            <img src="<?=base_url();?>imagenes/CeyeImg.jpeg" class="card-img-top" alt="..."><br><br>
            <a href="<?=site_url('Administrador/CEyE');?>" class="btn btn-primary" style="background-color: #00B4CC;">Acceder</a>
            <br> <br>
        </div>
    </div>

    <div class=" mt-4 card" style="width: 20rem;" align="center" id="c1"><br>
        <h4 class="card-title" align="center">Instrumentales</h4>
        
        <div class="card-body">
            <img style="height: 14rem; object-fit: cover;" src="https://cdn.pixabay.com/photo/2015/02/26/15/42/doctor-650548_1280.jpg" class="card-img-top" alt="..."><br><br>
            
            <a  href="<?=site_url('Administrador/Instrumentales');?>" class="btn btn-primary" style="background-color: #00B4CC;">Acceder</a><br> <br>
        </div>
    </div>
    
</div>



<br><br>
	
</body>
<script src="https://code.jquery.com/jquery-1.9.1.js"></script>

<script type="text/javascript"> 


$(function(){

    var mensaje = "<?= $mensaje ?>";

			if(mensaje){

				alert(mensaje);

			}

});

</script>
</html>