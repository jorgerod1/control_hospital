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
<h3 align="center">Bitácora de registro de Actas de enfermería
</h3>
<h3 align="center">CEyE</h3>
<br><br>



<div class="container">
    <div class="row">
        
        <table class="col-6 table table-bordered table-hover">
            <thead>
                <tr>
                    <td class="table-success">Usuario</td>
                    <td class="table-success">Nombre completo</td>

                </tr>
            </thead>
            <tbody>
                <tr class="table">
                    <td><?=$usuario->usuario ?></td>
                    <td><?=$usuario->nombre.' '.$usuario->apellidos ?></td>

                </tr>
            </tbody>

        </table>
    </div>
</div>
<br>


<div id="table">
    <h4>Detalles:</h4>

    <?php if($acta_procedimientos->nombre_paciente) { ?> 

    <table class="table table-bordered">
        <thead>
            
            <tr>
                <td class="table-danger">Nombre</td>
                <td class="table-danger">Nacimiento</td>
                <td class="table-danger">Edad</td>
                <td class="table-danger">Servicio</td>
                <td class="table-danger">Fecha/hora</td>
                <td class="table-danger">E. quirurjica</td>
                <td class="table-danger">E. circulante</td>
                <td class="table-danger">Cirujano</td>
                <td class="table-danger">Anestesiólogo</td>
                <td class="table-danger">Procedimiento</td>
            </tr> 
        </thead>
        <tbody class="tablaBody">
            <tr class="fila  table">
                 <td class="table-active"><?=$acta_procedimientos->nombre_paciente; ?></td>
                 <td class="table-active"><?=$acta_procedimientos->fecha_nacimiento; ?></td>
                 <td class="table-active"><?=$acta_procedimientos->edad; ?></td>
                 <td class="table-active"><?=$acta_procedimientos->servicio; ?></td>
                 <td class="table-active"><?=$acta_procedimientos->fecha; ?></td>
                 <td class="table-active"><?=$acta_procedimientos->enfermera_quirurjica; ?></td>
                 <td class="table-active"><?=$acta_procedimientos->enfermera_circulante; ?></td>
                 <td class="table-active"><?=$acta_procedimientos->cirujano; ?></td>
                 <td class="table-active"><?=$acta_procedimientos->anestesiologo; ?></td>
                 <td class="table-active"><?=$acta_procedimientos->procedimientos; ?></td>

            </tr>
            
        </tbody>
        
    </table>

    <?php }else if($acta_procedimientos->servicio){    ?>

    <table class="table table-bordered">
        <thead>
            
            <tr>
                <td class="table-danger">Servicio</td>
                <td class="table-danger">Turno</td>
                <td class="table-danger">Fecha y hora</td>
                <td class="table-danger">Enfermero/a circulante</td>
               
            </tr> 
        </thead>
        <tbody class="tablaBody">

            <tr class="fila  table">
                
                 <td class="table-active"><?=$acta_procedimientos->servicio; ?></td>
                 <td class="table-active"><?=$acta_procedimientos->turno; ?></td>
                 <td class="table-active"><?=$acta_procedimientos->fecha; ?></td>
                 <td class="table-active"><?=$acta_procedimientos->enfermera_circulante; ?></td>
                

            </tr>
            
        </tbody>
        
    </table>

   <?php }else{ ?>

    <table class="table table-bordered">
        <thead>
            
            <tr>
                
                <td class="table-danger">Turno</td>
                <td class="table-danger">Fecha y hora</td>
                <td class="table-danger">Enfermero/a circulante</td>
               
            </tr> 
        </thead>
        <tbody class="tablaBody">

            <tr class="fila  table">
                
                 
                 <td class="table-active"><?=$acta_procedimientos->turno; ?></td>
                 <td class="table-active"><?=$acta_procedimientos->fecha; ?></td>
                 <td class="table-active"><?=$acta_procedimientos->enfermera_circulante; ?></td>
                

            </tr>
            
        </tbody>
        
    </table>

   <?php } ?>

</div>

<br><br>



<div id="table">

    <h4>Instrumentos:</h4>
    <table class="table table-bordered">

        <thead>
            
            <tr>
                <td class="table-danger">Código de trazabilidad</td>
                <td class="table-danger">Instrumento</td>
                <td class="table-danger">Extra</td>
                
            </tr> 
        </thead>
        <tbody class="tablaBody">
            
                <?php foreach ($acta_instrumentos as $acta_instrumento) { ?>

                    <tr class="fila table">

                    

                        <td  class="table-active"><?=$acta_instrumento->codigo ?></td>
                        <td class="table-active"><?=$acta_instrumento->instrumentos ?></td>
                        <td class="table-active <?=$acta_instrumento->extra ? $acta_instrumento->extra : 'bg-warning' ?>"><?=$acta_instrumento->extra ? $acta_instrumento->extra : '<strong> No disponible </strong>' ?></td>

                    </tr>

                   
              <?php  } ?>
           
            
        </tbody>
        
    </table>

</div>
<br>

<div id="table">

    <h4>Bultos:</h4>
    <table class="table table-bordered">

        <thead>
            
            <tr>
               
                <td class="table-danger">Bulto</td>
                <td class="table-danger">Cantidad</td>
                <td class="table-danger">Extra</td>
                
            </tr> 
        </thead>
        <tbody class="tablaBody">
            
                <?php  foreach ($acta_ropa_qui as $acta_ropa) { ?>

                <tr class="fila table-active">
                    <td><?=$acta_ropa->tipo_bulto ?></td>
                    <td><?=$acta_ropa->cantidad ?></td>
                    <td class="<?= $acta_ropa->extra ? '' : 'bg-warning' ?>"><?=$acta_ropa->extra ? $acta_ropa->extra : '<strong> No disponible </strong>' ?></td>



                    
                </tr>

                <?php } ?>
           
            
        </tbody>
        
    </table>

</div>


	




<br><br>
	
</body>
</html>