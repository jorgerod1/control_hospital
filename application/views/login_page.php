<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	
    <title>Iniciar sesión</title>

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
    #cardLogin{
        border-color:#ff2c69;
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
<h3 align="center">Inicio de sesión</h3>
<div align="center">
    <div class="card" style="width: 18rem;" id="cardLogin">
    <div class="card-body" >

    <form id="iniciar_sesion">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Usuario</label>
            <input type="text" class="form-control" id="usuario2" name="usuario2" >
            <small id="s_usuario2" class="invalid-feedback">  </small>
        </div>
        <div class="mb-3">
             <label for="exampleFormControlInput1" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="contrasena3" name="contrasena3" >
            <small id="s_contrasena3" class="invalid-feedback">  </small>


        </div>  
        <button type="submit" class="btn btn-light" style="background-color: #06FF1F;">Entrar</button><br> <br>
    </form>

        <button type="button" class="btn btn-light" style="background-color: #FFB906;">Registrarse</button>

    </div>
    </div>
</div>




	
</body>

<script src="http://code.jquery.com/jquery-1.9.1.js"></script>


<script type="text/javascript">

    $(function() {

        $('#iniciar_sesion').on('submit', function(event){

			event.preventDefault();

			let datos = $(this).serialize();

			$.ajax({
				url : "<?=base_url();?>index.php/usuarios_api/Api/usuario",
				method : "post",
				data : datos,
			}).done(function(response){

				if(response.status_text == "success!"){

				alert("Usuario encontrado");
				console.log(response);

                $('#usuario2').removeClass('is-invalid');
                $('#usuario2').addClass('is-valid');

                $('#contrasena3').removeClass('is-invalid');
                $('#contrasena3').addClass('is-valid');
			
				//window.location.replace('<?=base_url();?>index.php/Dashboard');

				}
				
				if(response.status_text == "error!"){
					alert("error de comunicacion1");
					console.log(response);


						$.each(response.results, function(index, value){   //volvemos a hacer la iteracion para responder a los errores
																		
				
							var i=0;
							var errorLabel;

							$.each(response.errors, function(index1, value1){



							console.log("este es tu index1: "+index1);
							console.log("este es tu index: "+index);

							if (index == index1) {

						
							console.log("este es tu variable: "+i);

							i = 1;

							errorLabel = value1;
							
						}

					});

					console.log("este es tu variable: "+i);

					if (i == 1) {

						
						$('#'+index).addClass('is-invalid');
						$('#s_'+index).text(errorLabel);
						
					}else{

						$('#'+index).removeClass('is-invalid');
						$('#'+index).addClass('is-valid');

					}
					

					

					}); 



				}

				if(response.status_text == "usuarioIncorrecto"){

					console.log(response);

					alert('Usuario no encontrado');

					$('#usuario2').removeClass('is-invalid');
					$('#usuario2').removeClass('is-valid');
					$('#contrasena3').removeClass('is-invalid');
					$('#contrasena3').removeClass('is-valid');
					$('#usuario2').addClass('is-invalid');
					$('#s_usuario2').text('Usuario no encontrado');
						



				}

				if(response.status_text == "contraIncorrecta"){

					console.log(response);

					alert('Contraseña incorrecta');

					$('#usuario2').removeClass('is-invalid');
					$('#usuario2').addClass('is-valid');
					$('#contrasena3').addClass('is-invalid');
					$('#contrasena3').removeClass('is-valid');
					$('#s_contrasena3').text('Contraseña incorrecta');
						



				}

			}).fail(function(error){

				alert("error de comunicacion2");
				console.log(error);

			});


		});
        
    });



</script>
</html>

