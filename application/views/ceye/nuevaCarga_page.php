<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	
    <title>CEyE</title>

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
    #formulario{
        margin-left:200px;
        margin-right:200px;
        background-color:#FFACC6;
        padding:30px;
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
<h3 align="center">Registro de trazabilidad del proceso de esterilización CEYE</h3>
<h3 align="center">CEyE</h3><br><br>
<a href="<?=site_url('Login');?>"  type="submit" class="btn btn-primary" style="margin-left:75px;">
    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-left" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
        <line x1="5" y1="12" x2="19" y2="12"></line>
        <line x1="5" y1="12" x2="11" y2="18"></line>
        <line x1="5" y1="12" x2="11" y2="6"></line>
    </svg>
    Regresar a menú
</a><br><br>
<div id="formulario">
    <form class="ceye row g-3" action="<?=site_url('enfermeria/formulario1/guardar_acta');?>" method="post">
    <div class="col-md-4">
        <label for="autoclave" class="form-label">No. Autoclave</label>
        <input type="text" class="form-control" id="autoclave" name="autoclave">
        <small id="s_autoclave" class="invalid-feedback">  </small>
    </div>
    <div class="col-md-4">
        <label for="no_carga" class="form-label">No. Carga</label>
        <input type="text" class="form-control" id="no_carga" name="no_carga">
        <small id="s_no_carga" class="invalid-feedback">  </small>
    </div>

    <div class="col-md-4">
        <label for="no_paquete" class="form-label">No. De Paquete</label>
        <input type="text" class="form-control" id="no_paquete" name="no_paquete">
        <small id="s_no_paquete" class="invalid-feedback">  </small>
    </div>
    <div class="col-md-4">
        <label for="fecha" class="form-label">Fecha</label>
        <input disabled type="date" class="form-control" id="fecha" name="fecha">
        <small id="s_fecha" class="invalid-feedback">  </small>
    </div>
    <div class="col-md-4">
        <label for="hora" class="form-label">Hora</label>
        <input disabled type="time" class="form-control" id="hora" name="hora">
        <small id="s_hora" class="invalid-feedback">  </small>
    </div>
    <div class="col-md-4">
        <label for="turno" class="form-label">Turno</label>
        <input type="text" class="form-control" id="turno" name="turno">
        <small id="s_turno" class="invalid-feedback">  </small>
    </div>

    <div class="col-md-12">
        <label for="responsable" class="form-label">Responsable de carga</label>
        <input type="text" class="form-control" id="responsable" name="responsable">
        <small id="s_responsable" class="invalid-feedback">  </small>
    </div>
    <div class="col-md-6" align="center"><br>
        <button href="<?=site_url('Ceye/Form');?>" style="margin-left:400px;" type="submit" class="btn btn-primary" style="background-color: #00B4CC;">Siguiente</button>
    </div>
    </form>
</div>


<br><br>
	
</body>

<script src="https://code.jquery.com/jquery-1.9.1.js"></script>

<script>
    $(function(){

        $('.ceye').on('submit',function(event){

            event.preventDefault();

            var datos = $(this).serialize();

            datos += '&usuario_id='+'<?=$this->session->userdata('id');  ?>';

            console.log(datos);

            $.ajax({

                url : "<?=site_url('ceye_api/Api/agregar_acta_ceye') ?>",
                method: "post",
                data : datos

            }).done(function(response){

                if(response.status == 200){

                    alert('todo bien');

                    $('.ceye input').removeClass('is-invalid');
                    $('.ceye input').addClass('is-valid');


                    window.location.replace('<?= site_url('Ceye/Form/index/') ?>'+response.data['acta_ceye_id']);



                }else if(response.status == 400){

                    alert('Error al validar los datos');

                     $('.ceye input').removeClass('is-invalid');
                      $('.ceye input').addClass('is-valid');

                        $.each(response.errors, function(index,value){   

                            $('#'+index).removeClass('is-valid'); 
                            $('#'+index).addClass('is-invalid'); 

                            $('#s_'+index).text(value);

                        });

                }else if(response.status == 401){

                    alert('No tiene permiso para acceder a este recurso');
                    window.location.reload();

                }

            }).fail(function(response){

                alert('Error de servidor');

            });





        });

    });
</script>


</html>