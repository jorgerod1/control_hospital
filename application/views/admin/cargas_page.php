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
        background-color:#FFACC6;
    }
    #botones{
        display: flex;
        justify-content:space-between;
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


<div id="botones">
    <a href="<?=site_url('Administrador/CEyE');?>" type="submit" class="btn btn-primary" style="margin-left:75px;">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-left" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <line x1="5" y1="12" x2="19" y2="12"></line>
            <line x1="5" y1="12" x2="11" y2="18"></line>
            <line x1="5" y1="12" x2="11" y2="6"></line>
        </svg>
        Regresar a menú
    </a>
    <nav aria-label="Page navigation example" style="margin-right:90px;">
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
</div><br>


 
<div id="fondo">
  <?php  foreach ($acta_ceye as $acta_ceye) { ?>
    <div class="card" style="width: 18rem;" id="c1">
      <div class="card-body">
        <h5 class="card-title"><?=$acta_ceye->no_carga;?></h5>
        <h5 class="card-title"><?=$acta_ceye->no_paquete;?></h5>
        <h5 class="card-title"><?=$acta_ceye->fecha;?></h5>
        <h5 class="card-title"><?=$acta_ceye->hora;?></h5><br>
        <a href="<?=site_url('Administrador/CargasTable');?>" class="btn btn-primary" style="background-color: #00B4CC;">Ver detalles</a><br>
      </div>
    </div>
  <?php } ?>

</div>




<br><br>
	
</body>
</html>