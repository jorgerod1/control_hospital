<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	
    <title>Quirofano</title>

    <style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }
    #titulos{
        display: grid;
        grid-template-columns: 1fr 2fr 6fr 1fr;
        justify-content:stretch;
    }
    #LG{
        display: flex;
        justify-content:center;

    }
    #M{
        display: grid;
        justify-self: end;
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

<nav class="navbar" style="background-color: #FF5C71;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="<?=base_url();?>imagenes/Logo.png" alt="" width="30" height="30" class="d-inline-block align-text-top">
      Hospital Materno Celaya
    </a>
  </div>
</nav><br>
<div id="titulos">
    <img src="<?=base_url();?>imagenes/LG.png" alt="" width="192" height="94" id="LG">
    <img src="<?=base_url();?>imagenes/moño.png" alt="" width="38" height="58" id="M" >
    <h2  id="T">SECRETARIA DE SALUD DE GUANAJUATO</h2>
    <img src="<?=base_url();?>imagenes/Logo.png" alt="" width="112" height="123" id="L">
     
</div>
<h2 align="center">HOSPITAL MATERNO CELAYA</h2> <br>
<h3 align="center">Control de instrumental y ropa quirúrgica</h3><br><br>

<div id="formulario">
    <form class="row g-3">
    <div class="col-md-6">
        <label for="" class="form-label">Nombre del paciente</label>
        <input type="text" class="form-control" id="">
    </div>
    <div class="col-md-6">
        <label for="" class="form-label">Enf. Quirurgica</label>
        <input type="text" class="form-control" id="">
    </div>

    <div class="col-md-4">
        <label for="" class="form-label">Fecha de nacimiento</label>
        <input type="text" class="form-control" id="">
    </div>
    <div class="col-md-2">
        <label for="" class="form-label">Edad</label>
        <input type="text" class="form-control" id="">
    </div>
    <div class="col-md-6">
        <label for="inputCity" class="form-label">Enf. Circulante</label>
        <input type="text" class="form-control" id="inputCity">
    </div>
    
    <div class="col-md-6">
        <label for="" class="form-label">Procedimiento</label><br>
        <select class="form-select form-select-lg mb-12" aria-label=".form-select-lg example">
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select>
    </div>
    <div class="col-md-6">
        <label for="" class="form-label">Medico Cirujano</label>
        <input type="text" class="form-control" id="">
    </div>

    <div class="col-md-6">
        <label for="" class="form-label">Servicio</label>
        <input type="text" class="form-control" id="">
    </div>
    <div class="col-md-6">
        <label for="" class="form-label">Anestesiologo</label>
        <input type="text" class="form-control" id="">
    </div>

    <div class="col-md-2">
        <label for="" class="form-label">Sala</label>
        <input type="text" class="form-control" id="">
    </div><div class="col-md-2">
        <label for="" class="form-label">Fecha</label>
        <input type="text" class="form-control" id="">
    </div><div class="col-md-2">
        <label for="" class="form-label">Hora</label>
        <input type="text" class="form-control" id="">
    </div>
    <div class="col-md-6" align="center"><br>
        <a href="<?=site_url('Enfermeria/Formulario2');?>" type="submit" class="btn btn-primary" style="background-color: #00B4CC;">Siguiente</a>
    </div>


    </form>
</div>


<br><br>
	
</body>
</html>