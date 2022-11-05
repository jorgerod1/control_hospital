<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	
    <title>Quirófano</title>

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

<div id="formulario">
    <form class="row g-3" action="<?=site_url('enfermeria/formulario1/guardar_acta');?>" method="post">
    <div class="col-md-6">
        <label for="nombre_paciente" class="form-label">Nombre del paciente</label>
        <input type="text" class="form-control" id="nombre_paciente">
    </div>
    <div class="col-md-6">
        <label for="enfermera_quirurjica" class="form-label">Enf. Quirúrgica</label>
        <input type="text" class="form-control" id="enfermera_quirurjica">
    </div>

    <div class="col-md-4">
        <label for="fecha_nacimiento" class="form-label">Fecha de nacimiento</label>
        <input type="date" class="form-control" id="fecha_nacimiento">
    </div>
    <div class="col-md-2">
        <label for="edad" class="form-label">Edad</label>
        <input type="text" class="form-control" id="edad">
    </div>
    <div class="col-md-6">
        <label for="enfermera_circulante" class="form-label">Enf. Circulante</label>
        <input type="text" class="form-control" id="enfermera_circulante">
    </div>
    
    <div class="col-md-6">
        <label for="procedimiento_id" class="form-label">Procedimiento</label><br>
        <select class="form-select form-select-lg mb-12" aria-label=".form-select-lg example" id="procedimiento_id">
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select>
    </div>
    <div class="col-md-6">
        <label for="cirujano" class="form-label">Medico Cirujano</label>
        <input type="text" class="form-control" id="cirujano">
    </div>

    <div class="col-md-6">
        <label for="servicio" class="form-label">Servicio</label>
        <input type="text" class="form-control" id="servicio">
    </div>
    <div class="col-md-6">
        <label for="anestesiologo" class="form-label">Anestesiólogo</label>
        <input type="text" class="form-control" id="anestesiologo">
    </div>

    <div class="col-md-2">
        <label for="sala" class="form-label">Sala</label>
        <input type="text" class="form-control" id="sala">
    </div><div class="col-md-2">
        <label for="fecha" class="form-label">Fecha</label>
        <input type="date" class="form-control" id="fecha">
    </div><div class="col-md-2">
        <label for="hora" class="form-label">Hora</label>
        <input type="time" class="form-control" id="hora">
    </div>
    <div class="col-md-6" align="center"><br>
        <a href="<?=site_url('Enfermeria/Formulario2');?>" type="submit" class="btn btn-primary" style="background-color: #00B4CC;">Siguiente</a>
    </div>
    </form>
</div>


<br><br>
	
</body>
</html>