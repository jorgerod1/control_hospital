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
        #table{
            margin-left:70px;
            margin-right:70px;
        }
        #botones{
            display: grid;
            grid-template-rows: 1fr 1fr;
            justify-content:center;
        }
	
	</style>

</head>
<body>

   

<nav class="navbar" style="background-color: #FFACC6;">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?= base_url(); ?>">
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
<h3 align="center">Validación y trazabilidad del proceso de esterilización 
Control físico, Químico y Biológico</h3>
<h3 align="center">CEyE</h3>
<br>
<h3 align="center">Su código de trazabilidad es: <strong><?=  $codigo_trazabilidad; ?></strong></h3>

<br>

<a href="<?=site_url('Login');?>" type="submit" class="btn btn-primary" style="margin-left:75px;">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-left" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <line x1="5" y1="12" x2="19" y2="12"></line>
            <line x1="5" y1="12" x2="11" y2="18"></line>
            <line x1="5" y1="12" x2="11" y2="6"></line>
        </svg>
        Regresar a menú
    </a><br><br>


<div id="table">
    <table class="table table-bordered">
        <thead>
            <tr>
                 <td class="table-danger">Tipo</td>
                <td class="table-danger">Instrumentos</td>
                <td class="table-danger">Cantidad</td>
                <td class="table-danger">Códigos de trazabilidad</td>
                <td class="table-danger">(:</td>
                
            </tr>
        </thead>
        <tbody class="tablaCuerpo">
            <tr class="fila table-active">
                <td>
                     <select class="tipo form-control form-select-lg mb-12" aria-label=".form-select-lg example" id="procedimiento_id" name="procedimiento_id">

                        <option disabled selected>Selecciona una opción</option>

                        <?php foreach ($tipo_instrumentos as $tipo) {  ?>

                            <option value="<?=$tipo->id; ?>"><?= $tipo->tipo ?></option>
                        
                            <?php } ?>

                    </select>
                    <small class="invalid-feedback"></small>
                </td>
                <td class="table-danger">
                    <select disabled class="instrumentos form-control form-select-lg " aria-label=".form-select-lg example">
                        <option selected>Open this select menu</option>
                        
                    </select>
                    <small class="invalid-feedback"></small>
                </td>
                <td class="table-danger">
                    
                    <input disabled type="number" class="cantidad form-control" id="cantidad">
                    <small class="cantidad invalid-feedback"></small>
                </td>
                <td class="table-danger">
                   
                    <input disabled value="<?=  $codigo_trazabilidad; ?>" type="text" class="form-control" id="enfermera_quirurjica">
                    <small class="invalid-feedback"></small>
                </td>
                <td class="boton table-danger">

                </td>
            </tr>
            
            
        </tbody>

        
        
    </table>

</div>
    <div id="botones">
        <button type="button" class="agregar btn btn-outline-secondary"  >
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-plus" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <line x1="12" y1="5" x2="12" y2="19"></line>
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                </svg>
                Agregar</button> <br><br>
            <a href=""  type="submit" class="avanzar btn btn-primary" style="background-color: #00B4CC;">Siguiente</a>
    </div>
</div>


<br><br>
	
</body>

<script src="https://code.jquery.com/jquery-1.9.1.js"></script>

<script> 

$(function(){

    //variables necesarias para crear una secuencia de guardados al mismo tiempo
    //recordar que primero se valida y luego se acciona con la base de datos


    var contador = 1;

    var instrumento_ids = [];
    var cantidades = [];
    var instrumento_ids2 = [];
    var cantidades2 = [];

    var codigo_trazabilidad = '<?=  $codigo_trazabilidad; ?>';
    var acta_ceye_id = '<?=$acta_ceye->id; ?>'; 

    console.log(codigo_trazabilidad+' '+acta_ceye_id);


    $('.tablaCuerpo').on('change','.tipo',function(){


            
        $('.cantidad').prop('disabled',true);

            $('.instrumentos').removeAttr('disabled');

            var tipo_id = $(this).val();
            
            


            $.ajax({

                url : "<?=base_url()?>index.php/instrumentos_api/Api/traer_instrumento_especifico/"+tipo_id,
                method : "get"


            }).done(function(response){

                if(response.status == 1){

                    alert('instrumentos todo bien');

                    $('.instrumentos').empty();
                    $('.instrumentos').append('<option disabled selected>Open this select menu</option>');

                    $.each(response.data,function(index,value){

                        $('.instrumentos').append('<option value="'+value.id+'">'+value.instrumentos+'</option>');

                    });

                    


                }else if(response.status == 0){

                    alert('todo mal');

                }

            }).fail(function(response){

                alert('todo mal2');

            });

    });

    $('.tablaCuerpo').on('change','.instrumentos',function(){

        var instrumentos_id = $('.instrumentos').val();

        instrumento_ids[contador] = instrumentos_id;

            console.log(instrumento_ids[contador]);

            $('.cantidad').removeAttr('disabled');



    });

    $('.agregar').on('click',function(){

        if($('.cantidad').val()){

            alert('Se puede usar el botón');

            cantidades[contador] = $('.cantidad').val();

            console.log(cantidades[contador]);

            //el siguiente ajax solamente es para validar los datos de forma correcta;

            var datos = {
                "codigo" : codigo_trazabilidad,
                "cantidad" : cantidades[contador],
                "instrumento_id" : instrumento_ids[contador],
                "acta_ceye_id" : acta_ceye_id


            }

            $.ajax({

                url : "<?=site_url('ceye_api/Api/validar_datos') ?>",
                method : "post",
                data : datos

            }).done(function(response){

                if(response.status == 1){

                    alert('todo bien');

                    cantidades2[contador] = cantidades[contador];
                    instrumento_ids2[contador] = instrumento_ids[contador];

                    $('.tablaCuerpo input,select').removeClass('is-invalid');
                    $('.tablaCuerpo input,select').addClass('is-valid');

                    $('.tipo').prop('disabled',true);
                    $('.cantidad').prop('disabled',true);
                    $('.instrumentos').prop('disabled',true);

                    //volvemos la fila deshabilitada

                    $('.tipo').removeClass('tipo');
                    $('.cantidad').removeClass('cantidad');
                    $('.instrumentos').removeClass('instrumentos');

                    $('.fila').addClass(''+contador+'');


                    $('.fila').removeClass('fila');

                    $('.boton').append('<button fila="'+contador+'" class="eliminar btn btn-warning">Eliminar</button>');

                    $('.boton').removeClass('boton');



                    $('.tablaCuerpo').append('<tr class="fila table-active"><td><select class="tipo form-control form-select-lg mb-12" aria-label=".form-select-lg example" id="procedimiento_id" name="procedimiento_id"><option disabled selected>Selecciona una opción</option><?php foreach ($tipo_instrumentos as $tipo) {  ?><option value="<?=$tipo->id; ?>"><?= $tipo->tipo ?></option><?php } ?></select><small class="invalid-feedback"></small></td><td class="table-danger"><select disabled class="instrumentos form-control form-select-lg " aria-label=".form-select-lg example"><option selected>Open this select menu</option></select><small class="invalid-feedback"></small></td><td class="table-danger"><input disabled type="number" class="cantidad form-control" id="cantidad"><small class="cantidad invalid-feedback"></small></td><td class="table-danger"><input disabled value="<?=  $codigo_trazabilidad; ?>" type="text" class="form-control" id="enfermera_quirurjica"><small class="invalid-feedback"></small></td><td class="table-danger boton"></td></tr>');


                    

                    contador++;
                    //iteramos nuestros arrays para ver como van:

                    console.log(instrumento_ids2);
                    console.log(cantidades2);

                }else{

                    $('.tablaCuerpo input,select').removeClass('is-invalid');
                    $('.tablaCuerpo input,select').addClass('is-valid');

                    $('.cantidad').removeClass('is-valid');
                    $('.cantidad').addClass('is-invalid');


                   $('small.cantidad').text(response.errors.cantidad);



                    alert('todo mal');

                }



            }).fail(function(){
                    alert('todo mal2');
            });



        }else{

            alert('rellene todos los campos');

        }

    });

    $('.avanzar').on('click',function(event){

        event.preventDefault();

        var bandera = 0;

        if($('.cantidad').val()){

            var confirmacion = confirm('¿Desea agregar el último elemento?');

            if(confirmacion){
                bandera = 1;
                $('.agregar').click();
            }

        }else{

            var confirmacion2 = confirm('¿Está seguro que desea agregar esta carga?');

            if(confirmacion2){
                bandera = 0;
                
            }else{
                bandera = 1;
            }

        }

        if(bandera == 0){
            alert('avanzamos');

            for (let index = 1; index <= cantidades2.length-1; index++) {
                
                var datos = {
                "codigo" : codigo_trazabilidad,
                "cantidad" : cantidades2[index],
                "instrumento_id" : instrumento_ids2[index],
                "acta_ceye_id" : acta_ceye_id


                }

                $.ajax({

                    url : '<?=site_url('ceye_api/Api/agregar_acta_ceye_instrumentos'); ?>',
                    method : 'post',
                    data : datos

                }).done(function(response){

                    if(response.status == 1){
                        console.log('todo bien');
                    }else{
                        console.log('todo mal');
                    }

                }).fail(function(response){

                    console.log('todo mal2');

                });
                
            }


            window.location.replace('<?=site_url('Login/index/3') ?>');

          


        }

    });




    $('.tablaCuerpo').on('click','.eliminar',function(){

        var id = $(this).attr('fila');
        console.log(id);

        instrumento_ids2[id] = null;
        cantidades2[id] = null;

        $('.'+id).remove();

    });

});

</script>


</html>