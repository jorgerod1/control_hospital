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
    #cartas{
        display: grid;
        grid-template-columns: 2fr 2fr ;
        justify-content:center;
        border-color:black;
    }
    #c1, #c2, #c3{
        background-color:#FBBAA4;
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
<h3 align="center">CEyE</h3><br>

<div id="cartas" >
    <div class="card" style="width: 20rem;"  align="center" id="c1"><br>
        <h1 class="card-title" align="center">Cargas realizadas</h1>
        
        <div class="card-body">
            <a href="<?=site_url('Administrador/Cargas');?>" class="btn btn-primary" style="background-color: #00B4CC;">Agregar</a><br> <br>
        </div>
    </div>


    <div class="card" style="width: 20rem;" align="center" style="background-color: #FBBAA4;" id="c2"><br>
        <h1 class="card-title" align="center">Inventarios</h1>
        
        <div class="card-body">
            <a href="<?=site_url('Administrador/Inventarios');?>" class="btn btn-primary" style="background-color: #00B4CC;">Agregar</a><br> <br>
        </div>
    </div>

    
</div>



<br><br>
	
</body>
</html>