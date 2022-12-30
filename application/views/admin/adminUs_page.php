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
    #c1, #c2, #c3{
        background-color:#FFACC6;
    }
    #us{
        display: grid;
        grid-template-columns: 1fr 1fr 1fr ;
        justify-content:stretch;
        margin-left:70px;
        
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
<h3 align="center">Usuarios</h3><br>

<div id="botones">
    <a href="<?=site_url('Administrador/Admin');?>" type="submit" class="btn btn-primary" style="margin-left:75px;">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-left" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <line x1="5" y1="12" x2="19" y2="12"></line>
            <line x1="5" y1="12" x2="11" y2="18"></line>
            <line x1="5" y1="12" x2="11" y2="6"></line>
        </svg>
        Regresar a menú
    </a><div></div>
    <button data-toggle="modal" data-target="#agregar" type="button" class="btn btn-primary" id="add" style="margin-right:90px;">
        <svg xmlns="http://www.w3.org/2000/svg" class="agregar icon icon-tabler icon-tabler-plus" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <line x1="12" y1="5" x2="12" y2="19"></line>
                <line x1="5" y1="12" x2="19" y2="12"></line>
            </svg>
            Agregar
    </button> 
</div><br>


<div id="us">
<?php foreach ($usuarios as $usuario) {  ?>
    
    <div class="mb-3 card" style="width: 22rem;" id="c1">
      <div class="card-body">
        <h5 class="card-title"><?=$usuario->nombre;?></h5>
        <p class="card-text"><?=$usuario->rol;?></p>
        <p class="card-text"><?=$usuario->contacto;?></p>
        <button data-toggle="modal" data-target="#editar" id="<?=$usuario->id; ?>" type="button" class="editar btn btn-light" style="background-color: #11D305;">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path>
                        <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z"></path>
                        <path d="M16 5l3 3"></path>
                    </svg> 
                    Editar</button>
                    <button id="<?=$usuario->id; ?>" type="button" class="eliminar btn btn-light" style="background-color: #FB1C0A;">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <line x1="4" y1="7" x2="20" y2="7"></line>
                        <line x1="10" y1="11" x2="10" y2="17"></line>
                        <line x1="14" y1="11" x2="14" y2="17"></line>
                        <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                        <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                    </svg>
                    Eliminar</button>
      </div>
    </div> 
          

    <?php } ?>
   <!-- <div class="card" style="width: 22rem;" id="c1">
      <div class="card-body">
        <h5 class="card-title">Nombre usuario</h5>
        <p class="card-text">Rol</p>
        <p class="card-text">Contacto</p>
        <button type="button" class="btn btn-light" style="background-color: #11D305;">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path>
                        <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z"></path>
                        <path d="M16 5l3 3"></path>
                    </svg> 
                    Editar</button>
                    <button type="button" class="btn btn-light" style="background-color: #FB1C0A;">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <line x1="4" y1="7" x2="20" y2="7"></line>
                        <line x1="10" y1="11" x2="10" y2="17"></line>
                        <line x1="14" y1="11" x2="14" y2="17"></line>
                        <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                        <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                    </svg>
                    Eliminar</button>
      </div>
    </div> -->


</div>



    
<br><br>




<!--Zona de modals -->


<div class="modal fade" id="editar" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Editar Usuarios</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		 
				<form id="editar_usuario">
			
						<div class="form-group">
						<label for="inputEmail4">Nombre</label>
						<input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo set_value('nombre'); ?>">
						<small id="s_nombre" class="invalid-feedback">  </small>
						</div>
						
					

					
						<div class="form-group">
                            <label for="inputPassword4">Apellidos</label>
                            <input type="text" class="form-control" id="apellidos" name="apellidos">
                            <small id="s_apellidos" class="invalid-feedback"> </small>
						</div>
					
					
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="rol" >Rol</label>
							<select id="rol" class="form-control" name="rol">
								<option value="Enfermera">Enfermera</option>
								<option value="Ceye">Ceye</option>
								<option value="Administrador">Administrador</option>
							</select>
							<small id="s_rol" class="invalid-feedback">  </small>
						</div>

                        <div class="form-group">
                            <label for="inputPassword4">Contacto</label>
                            <input type="text" class="form-control" id="contacto" name="contacto">
                            <small id="s_contacto" class="invalid-feedback"> </small>
						</div>

                         <div class="form-group">
                            <label for="inputPassword4">Contraseña</label>
                            <input type="text" class="form-control" id="contra" name="contra">
                            <small id="s_contra" class="invalid-feedback"> </small>
						</div>

                        <div class="form-group">
                            <label for="inputPassword4">Usuario</label>
                            <input type="text" class="form-control" id="usuario" name="usuario">
                            <small id="s_usuario" class="invalid-feedback"> </small>
						</div>

					</div>
				
					<button type="submit" class="btn btn-primary">Editar</button>
					
				</form>
      </div>
      <div class="modal-footer">
        <button type="button" data-dismiss="modal" aria-label="Close" class="btn btn-secondary cerrar" >Cerrar</button>
      
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="agregar" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Agregar Usuarios</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		 
				<form id="agregar_usuario">
			
						<div class="form-group">
						<label for="nombre">Nombre</label>
						<input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo set_value('nombre'); ?>">
						<small id="s_nombre" class="invalid-feedback">  </small>
						</div>
						
					

					
						<div class="form-group">
                            <label for="apellidos">Apellidos</label>
                            <input type="text" class="form-control" id="apellidos" name="apellidos">
                            <small id="s_apellidos" class="invalid-feedback"> </small>
						</div>
					
					
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="rol" >Rol</label>
							<select id="rol" class="form-control" name="rol">
                                <option selected disabled>Selecciona un rol</option>
								<option value="Enfermera">Enfermera</option>
								<option value="Ceye">Ceye</option>
								<option value="Administrador">Administrador</option>
							</select>
							<small id="s_rol" class="invalid-feedback">  </small>
						</div>

                        <div class="form-group">
                            <label for="contacto">Contacto</label>
                            <input type="text" class="form-control" id="contacto" name="contacto">
                            <small id="s_contacto" class="invalid-feedback"> </small>
						</div>

                         <div class="form-group">
                            <label for="contra">Contraseña</label>
                            <input type="text" class="form-control" id="contra" name="contra">
                            <small id="s_contra" class="invalid-feedback"> </small>
						</div>

                        <div class="form-group">
                            <label for="usuario">Usuario</label>
                            <input type="text" class="form-control" id="usuario" name="usuario">
                            <small id="s_usuario" class="invalid-feedback"> </small>
						</div>

					</div>
				
					<button type="submit" class="btn btn-primary">Registrar</button>
					
				</form>
      </div>
      <div class="modal-footer">
        <button type="button" data-dismiss="modal" aria-label="Close" class="btn btn-secondary cerrar" >Cerrar</button>
      
      </div>
    </div>
  </div>
</div>
	
</body>

<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

<script>
    $(function(){

        $('.editar').on('click',function(){

            let id = $(this).prop('id');

            console.log({id});

            $.ajax({

                url : "<?=site_url('usuarios_api/Api/usuario_especifico/') ?>"+id,
                method : "get"

            }).done(function(response){

                if (response.status==1) {

                    $('#editar_usuario input,select').removeClass('is-invalid');
                    $('#editar_usuario input,select').removeClass('is-valid');

                    $('#editar_usuario small').text('');

                    alert('todo bien');

                    $('#editar_usuario').removeAttr('id_usuario');
                    $('#editar_usuario').attr('id_usuario',id);

                    

                    $.each(response.results,function(index,value){

                        $('#editar #'+index).val(value);

                    });
                    
                } else {

                    alert('todo mal');
                    
                }

            }).fail(function(response){
                alert('todo mal2');
            });

        });

        $('.eliminar').on('click',function(){

            let confirmacion = confirm('¿Seguro quieres eliminar \nal usuario?');

            if (confirmacion) {

                   let id = $(this).prop('id');

                console.log({id});

                $.ajax({

                url : "<?=site_url('usuarios_api/Api/eliminar_usuario/'); ?>"+id,
                method : "delete"

                }).done(function(response){

                    if (response.status==1) {
                        alert('todo bien');

                        window.location.replace('<?=site_url('Administrador/Usuarios'); ?>');
                    } else {

                        alert('todo mal');
                        
                    }

                }).fail(function(response){

                    alert('todo mal2');

                });
                
            } else {
                
            }

        });

        $('#editar_usuario').on('submit',function(){

            event.preventDefault();

            let datos = $(this).serialize();

            let id = $(this).attr('id_usuario');

            datos += '&id='+id;

            console.log({datos});

            $.ajax({

                url : "<?=site_url('usuarios_api/Api/actualizar_usuarios') ?>",
                method : "put",
                data : datos

            }).done(function(response){

                if (response.status == 1) {

                    alert('todo bien');

                    $('#editar_usuario input,select').removeClass('is-invalid');
                    $('#editar_usuario input,select').addClass('is-valid');

                    window.location.replace('<?=site_url('Administrador/Usuarios'); ?>');
                    
                } else {
                    alert('todo mal');

                    $('#editar_usuario input,select').removeClass('is-invalid');
                    $('#editar_usuario input,select').addClass('is-valid');

                    $.each(response.errors,function(index,value){
                        $('#'+index).removeClass('is-valid');
                        $('#'+index).addClass('is-invalid');

                        $('#s_'+index).text(value);
                    });

                    if(response.validacion){

                    }else{
                        $('#usuario').removeClass('is-valid');
                        $('#usuario').addClass('is-invalid');

                        $('#s_usuario').text('El usuario ya existe');


                    }
                }

            }).fail(function(response){
                alert('todo mal2');
            });



        });

        $('#agregar_usuario').on('submit',function(){

            event.preventDefault();

            let datos = $(this).serialize();

            $.ajax({

                url : "<?=site_url('usuarios_api/Api/agregar_usuario') ?>",
                method : "post",
                data : datos

            }).done(function(response){
                if (response.status == 1) {

                    alert('todo bien');

                    $('#agregar_usuario input,select').removeClass('is-invalid');
                    $('#agregar_usuario input,select').addClass('is-valid');

                    window.location.replace('<?=site_url('Administrador/Usuarios') ?>');
                    
                } else {

                    alert('todo mal');

                    $('#agregar_usuario input,select').removeClass('is-invalid');
                    $('#agregar_usuario input,select').addClass('is-valid');

                    $.each(response.errors,function(index,value){
                        $('#agregar_usuario #'+index).removeClass('is-valid');
                        $('#agregar_usuario #'+index).addClass('is-invalid');

                        $('#agregar_usuario #s_'+index).text(value);
                    });


                    
                }

            }).fail(function(response){
                alert('todo mal2');
            });

            console.log(datos);
        })

    });
</script>


</html>