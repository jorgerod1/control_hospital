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
    #table{
        margin-left:70px;
        margin-right:70px;
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
<h3 align="center">Validación y trazabilidad del proceso de esterilización 
Control físico, Químico y Biológico  
</h3>
<h3 align="center">CEyE</h3>
<br><br>

<div id="table">
    <table class="table table-bordered">
        <thead>
            <tr>
                <td class="table-danger">Tipos</td>
                <td class="table-danger">Instrumentos</td>
                <td class="table-danger">Codigos de trazabilidad</td>
            </tr>
        </thead>
        <tbody>
            <tr class="table-active">
                <td class="table-danger">
                </td>
                <td class="table-danger">
                </td>
                <td class="table-danger"></td>
            </tr>
            <tr class="table-active">
                <td class="table-danger">
                </td>
                <td class="table-danger">
                </td>
                <td class="table-danger"></td>
            </tr>
            <tr class="table-active">
                <td class="table-danger">
                </td>
                <td class="table-danger">
                </td>
                <td class="table-danger"></td>
            </tr>
            
        </tbody>
        
    </table>

</div>

<br><br>
	




<br><br>
	
</body>
</html>