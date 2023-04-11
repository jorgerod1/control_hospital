<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	
    <title>Tipo instrumental</title>

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
<h3 align="center">Tipo Instrumental</h3><br>

<a href="<?=site_url('Administrador/Admin');?>" type="submit" class="btn btn-primary" style="margin-left:75px;">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-left" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <line x1="5" y1="12" x2="19" y2="12"></line>
            <line x1="5" y1="12" x2="11" y2="18"></line>
            <line x1="5" y1="12" x2="11" y2="6"></line>
        </svg>
        Regresar a menú
    </a>
    <br> <br>

<div class="container-fluid">

    <div class="row mx-2">

        <?php foreach ($tipo_instrumentos as $tipo) { ?>

            <div class="col-lg-6">

                <div class="d-flex justify-content-between alert alert-danger" role="alert">
                    <?=$tipo->tipo; ?>
                    <button <?php

                    if ($tipo->id != 11 && $tipo->id != 12 && $tipo->id != 14 && $tipo->id != 15) {
                        
                        echo ' id="'.$tipo->id.'" ';
                    }else{
                        
                        echo "disabled";
                    }

                     ?> class="tipos align-self-end ml-5 btn btn-primary">Seleccionar</button>
                </div>
            
            </div>
            


            <?php } ?>

        
    </div>
    
</div>



<br><br>
	
</body>
<script src="https://code.jquery.com/jquery-1.9.1.js"></script>

<script type="text/javascript"> 


$(function(){

    var mensaje = "<?= $mensaje ?>";

			if(mensaje){

				alert(mensaje);

			}

    $('.tipos').on('click',function(){

        let id = $(this).attr('id');

        window.location.replace('<?=site_url('Administrador/instrumentales/index/') ?>'+id);




    });

   

});

</script>
</html>