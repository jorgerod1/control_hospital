<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	
    <title>Quirófano</title>

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
    #botones{
        display: flex;
        justify-content:center;
    }
    #ch1, #ch2, #ch3{
        display: flex;
        justify-content:center;
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
<h3 align="center">Control de instrumental y ropa quirúrgica</h3><br><br>

<a href="<?=site_url('enfermeria/Formulario2/index/');?><?=$acta_procedimientos_id;?>" type="submit" class="btn btn-primary" style="margin-left:75px;">
    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-left" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
        <line x1="5" y1="12" x2="19" y2="12"></line>
        <line x1="5" y1="12" x2="11" y2="18"></line>
        <line x1="5" y1="12" x2="11" y2="6"></line>
    </svg>
    Regresar
</a><br><br>

<div class="row">

 

</div>

<br>



<div id="table">
    <table class="table table-bordered">
        <thead>
            <tr>
                <td class="table-danger">Seleccionar</td>
                <td class="table-danger">Tipo de bulto</td>
                <td class="table-danger">Cantidad</td>
            </tr>
        </thead>
        <tbody >
        <?php foreach ($ropa_qui as $ropa_quis) {  ?>
            <tr class="table-active">
                <td class="table-danger" id="ch1">
                    <div class="form-check form-check-inline">
                        <input  class="form-check-input" type="checkbox"  value="<?=$ropa_quis->id;?>">
                       
                    </div>
                </td>
                <td class="table-danger"><?=$ropa_quis->tipo_bulto;?></td>
                <td class="table-danger">
                     <input disabled id_qui="<?=$ropa_quis->id;?>" class="form-control" type="number" aria-label="default input example">
                     <small id_qui="<?=$ropa_quis->id;?>" class="invalid-feedback"></small>
                </td>
            </tr>

        <?php } ?>

            
            
        </tbody>
        
    </table>

</div>
<div id="botones">
<a href="<?=site_url('Enfermeria/Cirugias');?>" type="button" class="guardar btn btn-primary" style="background-color: #00B4CC;">Guardar</a>
</div>

<br><br>
	
</body>

<script src="https://code.jquery.com/jquery-1.9.1.js"></script>


<script>

    $(function(){

        $('.form-check-input').on('click',function(){

            var id_general = $(this).prop('value');

            alert(id_general);

            if($(this).prop('checked')){
                


                
                $('input[id_qui='+id_general+']').prop('disabled',false);
                $('input[id_qui='+id_general+']').val(1);
              

            }else{
                alert('hola2');
                $('input[id_qui='+id_general+']').prop('disabled',true);
                $('input[id_qui='+id_general+']').val('');
                
            }

            

        });

        $('.guardar').on('click',function(){

            var bandera = 0;
            var bandera2 = 0;
            event.preventDefault();

           <?php foreach ($ropa_qui as $ropa_quiss) {  ?>

               var ids_ropa = $('.form-check-input[value="<?=$ropa_quiss->id; ?>"]').val();
               var ropa_cantidad = $('input[id_qui="<?=$ropa_quiss->id; ?>"]').val();
               var ids_cantidades = $('input[id_qui="<?=$ropa_quiss->id; ?>"]').attr('id_qui');
                      
                            //la funcion solo se aplica a elementos que no estén disabled, si tenemos elementos disabled y queremos obtener su valor mejor usar attr

                if ($('.form-check-input[value="<?=$ropa_quiss->id; ?>"]').prop('checked') && $('input[id_qui="<?=$ropa_quiss->id; ?>"]').val()) {

                    var datos = {
                        'ropa_qui_id' : ids_ropa,
                        'cantidad' : ropa_cantidad,
                        'acta_procedimiento_id' : '<?=$acta_procedimientos_id; ?>'
                    };

                    $.ajax({

                        url : "<?=site_url('enf_api/Api/guardar_bultos_validacion'); ?>",
                        method : "post",
                        data : datos,
                        async : false

                    }).done(function(response){

                        if(response.status == 1){

                            alert('todo bien');

                            $('input[id_qui="'+response.data+'"]').removeClass('is-invalid');
                            $('input[id_qui="'+response.data+'"]').addClass('is-valid');

                        }else if(response.status == 0){

                            alert('todo mal');
                            bandera = 2;

                            $('input[id_qui="'+response.data+'"]').removeClass('is-valid');
                            $('input[id_qui="'+response.data+'"]').addClass('is-invalid');

                            $('small[id_qui="'+response.data+'"]').text(response.errors.cantidad);

                        }

                    }).fail(function(response){
                        alert('todo mal2');
                        bandera = 1;
                    });

                    console.log(ids_ropa);
                    console.log(ropa_cantidad);
                    console.log(ids_cantidades);
                    
                } else {

                    
                    
                }
               
            
           <?php } ?>

           

           if (bandera == 0) {
             bandera2 = 1;
           } else if (bandera == 2){

            var confirmacion = confirm('¿Está seguro que desea continuar? \n los datos mal validados no se registrarán')

            if (confirmacion) {

                
                bandera2 = 1;
                
            } else {
                
            }
             
            
           } else if (bandera == 1){
            alert('Error en el servidor, vuelve a recargar la página o contacte un administrador');
           }

           if(bandera2 == 1){

            
           <?php foreach ($ropa_qui as $ropa_quiss) {  ?>

               var ids_ropa = $('.form-check-input[value="<?=$ropa_quiss->id; ?>"]').val();
               var ropa_cantidad = $('input[id_qui="<?=$ropa_quiss->id; ?>"]').val();
               var ids_cantidades = $('input[id_qui="<?=$ropa_quiss->id; ?>"]').attr('id_qui');
                      
                            //la funcion solo se aplica a elementos que no estén disabled, si tenemos elementos disabled y queremos obtener su valor mejor usar attr

                if ($('.form-check-input[value="<?=$ropa_quiss->id; ?>"]').prop('checked') && $('input[id_qui="<?=$ropa_quiss->id; ?>"]').val()) {

                    var datos = {
                        'ropa_qui_id' : ids_ropa,
                        'cantidad' : ropa_cantidad,
                        'acta_procedimiento_id' : '<?=$acta_procedimientos_id; ?>'
                    };

                    $.ajax({

                        url : "<?=site_url('enf_api/Api/guardar_bultos'); ?>",
                        method : "post",
                        data : datos,
                        async : false

                    }).done(function(response){

                        if(response.status == 1){

                            alert('todo bien');

                        }else if(response.status == 0){

                            alert('todo mal');
                           

                        }

                    }).fail(function(response){
                        alert('todo mal2');
                      
                    });
                    
                } else {

                    
                    
                }
               
            
            <?php } ?>


            let actas = {

                "acta" : "<?=$acta_procedimientos_id ?>"

            };


            $.ajax({

                url : "<?=site_url('enf_api/Api/activar_acta'); ?>",
                method : "put",
                data : actas,
                async : false

            }).done(function(response){

                        if(response.status == 1){

                            alert('todo bien');

                        }else if(response.status == 0){

                            alert('todo mal');
                           

                        }

            }).fail((response)=>{

                alert('todo mal2');

            });


             window.location.replace('<?=site_url('Login/index/3'); ?>');
           }

           

        });

    });

</script>


</html>