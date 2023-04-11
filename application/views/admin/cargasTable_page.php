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
    #table{
        margin-left:70px;
        margin-right:70px;
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
  </div>
</nav><br>
<div id="titulos">
    <img src="<?=base_url();?>imagenes/LG.png" alt="" width="202" height="104" id="LG"> 
    <img src="<?=base_url();?>imagenes/moño.png" alt="" width="38" height="58" id="M" >
    <h3  id="T">SECRETARIA DE SALUD DE GUANAJUATO</h3>
    <img src="<?=base_url();?>imagenes/Logo.png" alt="" width="122" height="133" id="L">
    <h3 id="H">HOSPITAL MATERNO CELAYA</h3> <br>
</div>
<h3 align="center">Bitácora de registro de trazabilidad del proceso de esterilización CEYE
</h3>
<h3 align="center">CEyE</h3>
<br><br>



<div id="table">
    <h4>Detalles:</h4>
    <table class="table table-bordered">
        <thead>
            
            <tr>
                <td class="table-danger">Autoclave</td>
                <td class="table-danger">No. carga</td>
                <td class="table-danger">No. paquete</td>
                <td class="table-danger">Fecha y hora</td>
               
                <td class="table-danger">Turno</td>
                <td class="table-danger">Responsable</td>
            </tr> 
        </thead>
        <tbody class="tablaBody">
            <tr class="fila  table-active">
                <?php  foreach ($acta_ceye as $acta_ceye_in) { ?>
                    <td class="table-danger">
                        <p><?=$acta_ceye_in->autoclave;?></h5>
                    </td>
                    <td class="table-danger">
                        <p><?=$acta_ceye_in->no_carga;?></h5>
                    </td>
                    <td class="table-danger">
                        <p><?=$acta_ceye_in->no_paquete;?></h5>
                    </td>
                    <td class="table-danger">
                        <p><?=$acta_ceye_in->fecha;?></h5>
                    </td>
                   
                    <td class="table-danger">
                        <p><?=$acta_ceye_in->turno;?></h5>
                    </td>
                    <td class="table-danger">
                        <p><?=$acta_ceye_in->responsable;?></h5>
                    </td>
                <?php } ?>
            </tr>
            
        </tbody>
        
    </table>

</div>

<br><br>



<div id="table">

    <h4>Instrumentos:</h4>
    <table class="table table-bordered">

        <thead>
            
            <tr>
                <td class="table-danger">Código de trazabilidad</td>
                <td class="table-danger">Cantidad</td>
                <td class="table-danger">Instrumento</td>
                <td class="table-danger">Extra</td>
                
            </tr> 
        </thead>
        <tbody class="tablaBody">
            
                <?php  foreach ($acta_instrumentos_ceye as $acta_instrumentos_ceye_in) { ?>

                <tr class="fila  table-active">

                    <td class="table-danger">
                        <p><?=$acta_instrumentos_ceye_in->codigo;?></h5>
                    </td>
                    <td class="table-danger">
                        <p><?=$acta_instrumentos_ceye_in->cantidad;?></h5>
                    </td>
                    <td class="table-danger">
                        <p><?=$acta_instrumentos_ceye_in->instrumentos;?></h5>
                    </td>
                    <td class="table-danger">
                        <p><?=$acta_instrumentos_ceye_in->extra;?></h5>
                    </td>
                </tr>
                <?php } ?>
           
            
        </tbody>
        
    </table>

</div>


	




<br><br>
	
</body>
</html>