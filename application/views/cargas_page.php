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

<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link" href="#">Fecha</a></li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>

<div id="fondo">
<div class="card" style="width: 18rem;" id="c1">
  <div class="card-body">
    <h5 class="card-title">No. carga</h5>
    <h5 class="card-title">No. paquete</h5>
    <h5 class="card-title">Fecha</h5>
    <h5 class="card-title">Hora</h5>
  </div>
</div>
</div>




<br><br>
	
</body>
</html>