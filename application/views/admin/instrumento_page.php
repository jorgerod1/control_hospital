<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	
    <title>Instrumentos</title>

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
    #cartas{
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        justify-content:center;
        border-color:black;
        margin-left:70px;
        margin-right:70px;
        padding:30px;
    }
    #c1, #c2, #c3{
        background-color:#FFACC6;
    }

    .alert-danger:hover{
        -webkit-transform:scale(1.03)!important;transform:scale(1.03);;
        box-shadow: 0 10px 30px -20px #000;
        transition: -webkit-transform 0.3s;
    }
	
	</style>
</head>
<body>

<?php //echo"<pre>"; print_r($tipo_instrumentos);?>

<nav class="navbar" style="background-color: #FFACC6;">
  <div class="container-fluid">
        <a class="navbar-brand" href="<?=base_url(); ?>">
        <img src="<?=base_url();?>imagenes/Logo.png" alt="" width="30" height="30" class="d-inline-block align-text-top">
        Hospital Materno Celaya
        </a>
        <a class="self-align-end" href="<?=base_url()?>index.php/Login/logout"> Cerrar sesion</a>
  </div>
</nav><br>

<div id="titulos">
    <img src="<?=base_url();?>imagenes/LG.png" alt="" width="202" height="104" id="LG">
    <img src="<?=base_url();?>imagenes/moño.png" alt="" width="38" height="58" id="M" >
    <h3  id="T">SECRETARIA DE SALUD DE GUANAJUATO</h3>
    <img src="<?=base_url();?>imagenes/Logo.png" alt="" width="122" height="133" id="L">
    <h3 id="H">HOSPITAL MATERNO CELAYA</h3> <br>
</div>

<h2 align="center">Instrumentos</h2><br>

<h3 align="center"> <?= $tipo_id->tipo; ?> </h3>


<br>

<div class="container-fluid">

    <div class="row mr-5 justify-content-between">
           <div class="mt-n5">
                <a href="<?=site_url('Administrador/Instrumentales');?>" type="submit" class=" btn btn-primary" style="margin-left:75px;">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-left" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <line x1="5" y1="12" x2="11" y2="18"></line>
                        <line x1="5" y1="12" x2="11" y2="6"></line>
                    </svg>
                    Regresar
                </a>
            </div>
            <button data-toggle="modal" data-target="#staticBackdrop" class="btn btn-success">
                    Agregar nuevo instrumento
            </button>
    </div>
    <br><br>

    <div class="row mx-5">


        <table class=" table table-bordered table-hover">
            <thead>
                <tr class="table-danger">
                    <th scope="col">#</th>
                    <th scope="col">Instrumento</th>
                    <th scope="col">Características</th>
                    <th scope="col">Acciones</th>
            
                </tr>
            </thead>
            <tbody>
                <?php $contador=1; foreach ($instrumentos as $instrumento) { ?>

                    <tr>
                        <td><?=$contador; ?></td>
                        <td><?=$instrumento->instrumentos; ?></td>
                        <td><?= ($instrumento->caracteristicas ? $instrumento->caracteristicas : "No hay datos"); ?></td>
                        <td class="d-flex justify-content-center "> <button data-toggle="modal" data-target="#modal_editar" id="<?=$instrumento->id; ?>" class="editar mr-2 btn btn-primary">Editar</button> <button id="<?=$instrumento->id; ?>" class="eliminar ml-2 btn btn-danger">Eliminar</button></td>
               
                
                    </tr>
                    
              <?php $contador++;  } ?>
                
                
            </tbody>
        </table>



        
    </div>
    
</div>



<br><br>

<!--Incia zona de modals -->

    <!-- Modal agregar instrumento-->
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Agrega nuevo instrumento</h5>
                <button type="button" class="reinicio_agregar close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="agregar_instrumento">

                    <div class="form-group">
                        <label for="instrumentos">Nombre instrumento</label>
                        <input id="instrumentos" name="instrumentos" type="text" class="form-control">
                        <small id="instrumentos_s" class="invalid-feedback"></small>
                    </div>

                    <div class="form-group">
                        <label for="caracteristicas">Características</label>
                        <textarea class="form-control" name="caracteristicas" id="caracteristicas"  rows="3"></textarea>
                        <small id="caracteristicas_s" class="invalid-feedback"></small>
                    </div>

                    <button type="submit"  class="btn btn-primary">Agregar Instrumento</button>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="reinicio_agregar btn btn-secondary" data-dismiss="modal">Cancelar</button>
                
            </div>
            </div>
        </div>
    </div>

    <!-- Modal editar instrumento-->
    <div class="modal fade" id="modal_editar" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Editar Instrumento</h5>
                <button type="button" class="reinicio_editar close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="editar_instrumento">

                    <div class="form-group">
                        <label for="instrumentos_e">Nombre instrumento</label>
                        <input id="instrumentos_e" name="instrumentos_e" type="text" class="form-control">
                        <small id="instrumentos_e_s" class="invalid-feedback"></small>
                    </div>

                    <div class="form-group">
                        <label for="caracteristicas_e">Características</label>
                        <textarea class="form-control" name="caracteristicas_e" id="caracteristicas_e"  rows="3"></textarea>
                        <small id="caracteristicas_e_s" class="invalid-feedback"></small>
                    </div>

                    <button type="submit"  class="btn btn-warning">Editar Instrumento</button>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="reinicio_editar btn btn-secondary" data-dismiss="modal">Cancelar</button>
                
            </div>
            </div>
        </div>
    </div>


	
</body>
<script src="https://code.jquery.com/jquery-1.9.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>


<script type="text/javascript"> 


$(function(){

    var mensaje = "<?= $mensaje ?>";
    var tipo_id = "<?= $tipo_id->id;?>";

    var id_instrumento;

			if(mensaje){

				alert(mensaje);

			}


    $('#agregar_instrumento').on('submit',function(){

        event.preventDefault();

        let datos = $(this).serialize();
         
        datos += "&tipo_instrumento_id="+tipo_id;

        console.log(datos);

        $.ajax({

            url : "<?=site_url('instrumentos_api/Api/agregar_instrumento') ?>",
            method : "post",
            data : datos

        }).done(function(response){

            if (response.status == 200) {

                alert('Registro agregado correctamente');

                $('#agregar_instrumento input, textarea').removeClass('is-invalid');
                $('#agregar_instrumento input, textarea').addClass('is-valid');
                
                window.location.reload();


            } else {
                alert('Validación de datos incorrecta');

                 $('#agregar_instrumento input, textarea').removeClass('is-invalid');
                 $('#agregar_instrumento input, textarea').addClass('is-valid');

                $.each(response.errors,function(index,value){

                    $('#'+index).removeClass('is-valid');
                    $('#'+index).addClass('is-invalid');
                    $('#'+index+'_s').text(value);

                });

                
                
            }

        }).fail(function(response){

            alert('Error de servidor');

        });
       
    });

    $('.reinicio_agregar').on('click',function(){

        $('#agregar_instrumento input,textarea').removeClass('is-valid');
        $('#agregar_instrumento input,textarea').removeClass('is-invalid');

        $('#agregar_instrumento input,textarea').val('');

    });

    $('.eliminar').on('click',function(){

        let confirmacion = confirm('¿Estás seguro que deseas eliminar este instrumento?');

        if (confirmacion) {
            
        } else {

            return;
            
        }

        let id_instrumento = $(this).attr('id');

        console.log({id_instrumento});

        $.ajax({

            url : "<?=site_url('instrumentos_api/Api/eliminar_instrumento/') ?>"+id_instrumento,
            method : "delete"

        }).done(function (response) {

            if (response.status == 200) {

                alert('Registro eliminado correctamente');

                window.location.reload();

            }else{

                alert('Error al eliminar');


            }
            
        }).fail(function(response){
            alert('Error de servidor');
        });

    });

    $('.editar').on('click',function(){

         id_instrumento = $(this).attr('id');

          $.ajax({

            url : "<?=site_url('instrumentos_api/Api/traer_un_instrumento/') ?>"+id_instrumento,
            method : "get"

        }).done(function (response) {

            if (response.status == 200) {

                alert('Datos traídos correctamente');

                $.each(response.data,function(index,value){

                    $('#'+index+'_e').val(value);

                });

            }else{

                alert('Error al eliminar');


            }
            
        }).fail(function(response){
            alert('Error de servidor');
        });



    });

    $('#editar_instrumento').on('submit',function(){

        event.preventDefault();

        let datos = $(this).serialize();
         
        datos += "&tipo_instrumento_id="+tipo_id+"&id="+id_instrumento;

        console.log(datos);

        $.ajax({

            url : "<?=site_url('instrumentos_api/Api/editar_instrumento') ?>",
            method : "put",
            data : datos

        }).done(function(response){

            if (response.status == 200) {

                alert('Registro editado correctamente');

                $('#editar_instrumento input, textarea').removeClass('is-invalid');
                $('#editar_instrumento input, textarea').addClass('is-valid');

                
                window.location.reload();


            } else {
                alert('Validación de datos incorrecta');

                 $('#editar_instrumento input, textarea').removeClass('is-invalid');
                 $('#editar_instrumento input, textarea').addClass('is-valid');

                $.each(response.errors,function(index,value){

                    console.log({index});

                    $('#'+index).removeClass('is-valid');
                    $('#'+index).addClass('is-invalid');
                    $('#'+index+'_s').text(value);

                });

                
                
            }

        }).fail(function(response){

            alert('Error de servidor');

        });
       
    });

    $('.reinicio_editar').on('click',function(){

        $('#editar_instrumento input,textarea').removeClass('is-valid');
        $('#editar_instrumento input,textarea').removeClass('is-invalid');

        $('#editar_instrumento input,textarea').val('');

    });


   

   

});

</script>
</html>