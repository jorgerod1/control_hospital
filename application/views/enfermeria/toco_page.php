<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	
    <title>Toco-Cirugía</title>

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
    #formulario{
        margin-left:70px;
        margin-right:70px;
        background-color:#FFACC6;
        padding:30px;
    }
	
	</style>
</head>
<body>

<nav class="navbar" style="background-color: #FFACC6;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
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
<h3 align="center">Control de instrumental y ropa quirúrgica</h3><br><br>
<a href="<?=site_url('enfermeria/cirugias');?>" type="submit" class="btn btn-primary" style="margin-left:75px;">
    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-left" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
        <line x1="5" y1="12" x2="19" y2="12"></line>
        <line x1="5" y1="12" x2="11" y2="18"></line>
        <line x1="5" y1="12" x2="11" y2="6"></line>
    </svg>
    Regresar a menú
</a><br><br>
<div id="formulario">
    <form class="row g-3">
    <div class="col-md-6">
        <label for="" class="form-label">Servicio</label>
        <input type="text" class="form-control" id="">
    </div>
    <div class="col-md-2">
        <label for="" class="form-label">Turno</label>
        <input type="text" class="form-control" id="">
    </div>

    <div class="col-md-2">
        <label for="" class="form-label">Fecha</label>
        <input type="text" class="form-control" id="">
    </div>
    <div class="col-md-2">
        <label for="" class="form-label">Hora</label>
        <input type="text" class="form-control" id="">
    </div>
    <div class="col-md-6">
        <label for="inputCity" class="form-label">Enfermera(o) responsable</label>
        <input type="text" class="form-control" id="inputCity">
    </div>
    
    
    <div class="col-md-6" align="center"><br>
    <a href="<?=site_url('Enfermeria/TocoForm1');?>" type="submit" class="btn btn-primary" style="background-color: #00B4CC;">Siguiente</a>
    </div>


    </form>
</div>


<br><br>
	
</body>
</html>