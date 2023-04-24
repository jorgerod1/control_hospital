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
<h3 align="center">Inventario</h3>
<h3 align="center">CEyE</h3>
<br><br>

<a href="<?=site_url('Administrador/CEyE');?>" type="submit" class="btn btn-primary" style="margin-left:75px;">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-left" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <line x1="5" y1="12" x2="19" y2="12"></line>
            <line x1="5" y1="12" x2="11" y2="18"></line>
            <line x1="5" y1="12" x2="11" y2="6"></line>
        </svg>
        Regresar
    </a><br><br>

    <div id="activosCon" class="mb-3 mr-5 row justify-content-end">

        <select class="col-2 form-control" name="activos" id="activos">
            <option selected value="2">Todos</option>
            <option  value="1">Activos</option>
            <option  value="0">No activos</option>
        </select>

    </div>

    

<div id="table">
    <table class="table table-bordered">
        <thead> 
            <tr>
                <td class="table-danger">Instrumentos</td>
                <td class="table-danger">Códigos de trazabilidad</td>
                <td class="table-danger">Fecha y hora</td>
               
                <td class="table-danger">Activo</td>
                <td class="table-danger">Extra</td>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($inventario as $inventario_in) {  ?>
            <tr class="">
                <td class="table-active"><?=$inventario_in->instrumentos;?></td>
                <td class="table-active"><?=$inventario_in->codigo;?></td>
                <td class="table-active"><?=$inventario_in->fecha;?></td> 
              
                <td class="d-flex justify-content-between <?= $inventario_in->activo == 1 ? "table-success" : "table-danger" ?>"><?=$inventario_in->activo == 1 ? "Sí" : "No";?> <?=$inventario_in->activo ? "<button id='$inventario_in->inventarioOriginal' class='caducar btn btn-danger'>Caducar</button>" : "" ?> </td>
                <td class="<?= $inventario_in->extra ? "table-active" : "table-secondary"; ?>"><?= $inventario_in->extra ? $inventario_in->extra : "No hay dato";?> </td>
            </tr>

        <?php } ?>
          
            
        </tbody>
        
    </table>

</div>

<br><br>
	
</body>

<script src="https://code.jquery.com/jquery-1.9.1.js"></script>

<script type="text/javascript"> 


$(function(){


            $('#activos').on('change',function(){

                let valor = $(this).val();
                console.log({valor});

                if (valor == 2) {

                    window.location.replace('<?=site_url('Administrador/inventarios'); ?>')
                    
                } else {

                    $('tbody').empty();

                    $.ajax({

                        url : "<?=site_url('inventario_api/Api/consulta_inventario/'); ?>"+valor,
                        method : "get"

                    }).done(function(response){

                        if (response.status == 1) {

                            alert('Datos traídos correctamente');

                            $.each(response.data,function(index,value){

                                $('tbody').append('<tr class=""><td class="table-active">'+value.instrumentos+'</td><td class="table-active">'+value.codigo+'</td><td class="table-active">'+value.fecha+'</td><td class="d-flex justify-content-between '+(value.activo == 1 ? "table-success" : "table-danger")+'"> '+(value.activo == 1 ? 'Sí' : 'No')+''+(value.activo == 1 ? '<button id="'+value.inventarioOriginal+'" class="caducar btn btn-danger">Caducar</button>' : '')+'</td><td class="'+(value.extra ? "table-active" : "table-secondary")+'">'+(value.extra ? value.extra : "No hay dato")+'</td></tr>');

                            });
                            
                        } else {

                            alert('Datos validados incorrectamente');
                            
                        }

                    }).fail(function(response){
                        alert('Error de servidor');
                    });
                    
                }

            });

            $('table').on('click','.caducar',function () {
                //console.log($(this).attr('id'));

                let confirmar = confirm('¿Estás seguro que desea caducar este instrumento? \n No podrá deshacer los cambios.');

                if (confirmar) {

                    let datos = {
                        id : $(this).attr('id')
                    };

                    $.ajax({

                        url : "<?=site_url('instrumentos_api/Api/caducar_instrumento') ?>",
                        method : "put",
                        data : datos,
                        success : function(response){
                            if(response.status == 200){

                                alert("Instrumento caducado correctamente");

                                window.location.reload();

                            }else{

                                alert("Validación incorrecta")

                            }
                               

                        },
                        error : function(response){

                            if(response.status == 400){
                                alert("Error de cliente")
                            }else if(response.status == 401){
                                alert("Falta de permisos para acceder a esta función");

                               
                                    window.location.reload(); 
                                
                                
                            }else{
                                alert("Error de servidor")
                            }
                                

                        }

                    });
                    
                } else {
                    
                }
            });

});

</script>
</html>