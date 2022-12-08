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
            display: grid;
            grid-template-rows: 1fr 1fr;
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
<a href="<?=site_url('enfermeria/Quirofano');?>" type="submit" class="btn btn-primary" style="margin-left:75px;">
    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-left" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
        <line x1="5" y1="12" x2="19" y2="12"></line>
        <line x1="5" y1="12" x2="11" y2="18"></line>
        <line x1="5" y1="12" x2="11" y2="6"></line>
    </svg>
    Regresar
</a><br><br>
<div id="table">
    <table class="table table-bordered">
        <thead>
            <tr>
                <td class="table-danger">Tipos</td>
                <td class="table-danger">Instrumentos</td>
                <td class="table-danger">Códigos de trazabilidad</td>
                <td class="table-danger">(:</td>
            </tr>
        </thead>
        <tbody class="tablaBody">
            <tr class="fila table-active">
                <td class="table-danger">
                    <select class="tipo form-control form-select-lg mb-3" aria-label=".form-select-lg example">
                        <option disabled selected>Selecciona el tipo de instrumento</option>
                         <?php foreach ($tipo_instrumentos as $tipo ) { ?>

                            <option value="<?=$tipo->id; ?>"><?=$tipo->tipo; ?></option>
                            
                            <?php } ?>
                    </select>
                </td>
                <td class="table-danger">
                    <select disabled class="instrumentos form-control form-select-lg mb-3"  aria-label=".form-select-lg example">
                        <option disabled selected>Selecciona el instrumento</option>
                     
                    </select>
                </td>
                <td class="columna-codigo table-danger">

                </td>
                <td class="columna-extra table-danger">

                </td>
            </tr>

        </tbody>
        
    </table>

</div>
<div id="botones">
   <button type="button" class="btn btn-outline-secondary agregar" >
       <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-plus" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <line x1="12" y1="5" x2="12" y2="19"></line>
            <line x1="5" y1="12" x2="19" y2="12"></line>
        </svg>
        Agregar</button> <br><br>
        <a  href="<?=site_url('Enfermeria/Formulario3');?>" type="submit" class="siguiente btn btn-primary" style="background-color: #00B4CC;">Siguiente</a>
</div>

<br><br>
	
</body>

<script src="http://code.jquery.com/jquery-1.9.1.js"></script>

<script type="text/javascript">  

    //variables encargadas de llevar el registro de la tabla acta_registros

    var id_raiz_item = 0;

    var codigo_r = "";
    var extra_r = "";
    var instrumento_id_r = 0;
    var acta_procedimiento_id_r = "<?=$acta_procedimientos_id;?>";


    $(function(){

        $('.tipo').on('change',function(){

            $('.codigos').remove();

            $('.instrumentos').removeAttr('disabled');

            var tipo_id = $(this).val();
            
            


            $.ajax({

                url : "<?=base_url()?>index.php/instrumentos_api/Api/traer_instrumento_especifico/"+tipo_id,
                method : "get"


            }).done(function(response){

                if(response.status == 1){

                    alert('instrumentos todo bien');

                    $('.instrumentos').empty();
                    $('.instrumentos').append('<option disabled selected>Selecciona el instrumento</option>');

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

        $('.instrumentos').on('change',function(){

            var instrumentos_id = $('.instrumentos').val();

            console.log(instrumentos_id)

            $.ajax({

                url : "<?=site_url('inventario_api/Api/traer_items/')?>"+instrumentos_id,
                method : "get",
                async : true

            }).done(function(response){

                if(response.status == 1){

                    alert('todo bien');
                

                    if(response.data.length != 0){

                        instrumento_id_r = instrumentos_id; //asignamos el nuevo valor a nuestra variable de formulario


                        alert('Hay data');

                        $('.codigos').remove();

                        $('.columna-codigo').append('<select class="codigos form-control form-select-lg mb-3" aria-label=".form-select-lg example"><option disabled selected>Selecciona el codigo de trazabilidad</option><option class="font-weight-bold" disabled>  <b> Código ---------- Fecha --------- Hora  </b> </option> </select>');

                        

                        $.each(response.data,function(index,value){

                            $('.codigos').append('<option codigo="'+value.codigo+'"  value="'+value.inventarioOriginal+'">'+value.codigo+' --- '+value.fecha+' --- '+value.hora+'</option>');

                        });


                        $('.codigos').on('change', function(){

                            codigo_r = $('.codigos > option:selected').attr('codigo');

                             id_raiz_item = $('.codigos').val();

                            console.log('codigo: '+codigo_r);
                            console.log('id_raiz: '+id_raiz_item);

                        });
                        


                    }else{

                        alert('No hay códigos disponibles');

                        reiniciarSelects();

                    }

                }else{

                    alert('todo mal')

                }

            }).fail(function(response){

                alert('todo mal2');

            });

        });

        $('.agregar').on('click',function(){

            var tipo = $('.tipo').val();
            var instrumentos = $('.instrumentos').val();
            var codigos = $('.codigos').val();

            

            if(tipo && instrumentos && codigos){

                alert('el boton puede usarse');

                var datos = {

                    'codigo' : codigo_r,
                    'instrumento_id' : instrumento_id_r,
                    'acta_procedimiento_id' : acta_procedimiento_id_r,
                    'id_raiz_item' : id_raiz_item

                }

                console.log(datos);

                /* Vamos a guardar a través de un conjunto de variables que por logica tienen valor ahora
                que llegamos a este punto*/ 

                $.ajax({

                    url : "<?=site_url('enf_api/Api/actaInstrumentos');  ?>",
                    method : "post",
                    data : datos

                }).done(function(response){

                    if(response.status == 1){

                        alert('todo bien');

                        $('.tipo').prop('disabled',true);
                        $('.codigos').prop('disabled',true);
                        $('.instrumentos').prop('disabled',true);

                        //volvemos la fila deshabilitada

                        $('.tipo').removeClass('tipo');
                        $('.codigos').removeClass('codigos');
                        $('.instrumentos').removeClass('instrumentos');
                        $('.columna-codigo').removeClass('columna-codigo');


                        $('.fila').addClass(''+id_raiz_item+'');


                        $('.fila').removeClass('fila');


                        //-------------------

                        var id_acta_instrumentos = response.data['id_acta_instrumentos'];


                        $('.columna-extra').append('<button id_acta_instrumentos="'+id_acta_instrumentos+'" id_raiz_item="'+id_raiz_item+'" class="btn btn-warning revertir">Revertir</button>');



                        //antes de eliminar la clase

                        $('.columna-extra').removeClass('columna-extra');


                        //Ahora eliminamos sus clases


                        $('.tablaBody').append(' <tr class="fila table-active"><td class="table-danger"><select  class="tipo form-control form-select-lg mb-3" aria-label=".form-select-lg example"><option disabled selected>Selecciona el tipo de instrumento</option><?php foreach ($tipo_instrumentos as $tipo ) { ?><option value="<?=$tipo->id; ?>"><?=$tipo->tipo; ?></option><?php } ?> </select></td><td class="table-danger"><select disabled class="instrumentos form-control form-select-lg mb-3" aria-label=".form-select-lg example"><option disabled selected>Selecciona el tipo de instrumento</option></select></td><td class="columna-codigo table-danger"></td><td class="columna-extra table-danger"></td></tr>');


                            $('.tipo').on('change',function(){

                                $('.codigos').remove();

                                $('.instrumentos').removeAttr('disabled');

                                var tipo_id = $(this).val();




                                $.ajax({

                                    url : "<?=base_url()?>index.php/instrumentos_api/Api/traer_instrumento_especifico/"+tipo_id,
                                    method : "get"


                                }).done(function(response){

                                    if(response.status == 1){

                                        alert('instrumentos todo bien');

                                        $('.instrumentos').empty();
                                        $('.instrumentos').append('<option disabled selected>Selecciona el instrumento</option>');

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


                            $('.instrumentos').on('change',function(){

                                    var instrumentos_id = $('.instrumentos').val();

                                    console.log(instrumentos_id)

                                    $.ajax({

                                        url : "<?=site_url('inventario_api/Api/traer_items/')?>"+instrumentos_id,
                                        method : "get",
                                        async : true

                                    }).done(function(response){

                                        if(response.status == 1){

                                            alert('todo bien');
                                        

                                            if(response.data.length != 0){

                                                instrumento_id_r = instrumentos_id; //asignamos el nuevo valor a nuestra variable de formulario



                                                alert('Hay data');

                                                $('.codigos').remove();

                                                $('.columna-codigo').append('<select class="codigos form-control form-select-lg mb-3" aria-label=".form-select-lg example"><option disabled selected>Selecciona el codigo de trazabilidad</option><option class="font-weight-bold" disabled>  <b> Código ---------- Fecha --------- Hora  </b> </option> </select>');

                                                

                                                $.each(response.data,function(index,value){

                                                    $('.codigos').append('<option codigo="'+value.codigo+'"  value="'+value.inventarioOriginal+'">'+value.codigo+' --- '+value.fecha+' --- '+value.hora+'</option>');

                                                });


                                                    $('.codigos').on('change', function(){

                                                        codigo_r = $('.codigos > option:selected').attr('codigo');

                                                        id_raiz_item = $('.codigos').val();

                                                        console.log('codigo: '+codigo_r);
                                                        console.log('id_raiz: '+id_raiz_item);

                                                    });




                                                


                                            }else{

                                                alert('No hay códigos disponibles');

                                                reiniciarSelects();

                                            }

                                        }else{

                                            alert('todo mal')

                                        }

                                    }).fail(function(response){

                                        alert('todo mal2');

                                    });
                            });

                            

                        

                    }else{

                        alert('todo mal');

                        if(response.errors['id_raiz_item']){

                            alert(response.errors['id_raiz_item']);

                            reiniciarSelects();

                        }else{

                        }

                    }

                }).fail(function(response){

                    alert('todo mal2');

                    reiniciarSelects();

                });


            }else{
                alert('Rellene todos los campos');
            }


        });


        //ejemplos

        //$('.revertir').unbind();

        $('tbody').on('click','.revertir',function(){ //para haer funciones que trabajan con items dinamicos en el dom
                                                        //se recomienda leer un punto fijo que  no sea dinamico y a través de ese punto fijo filtrar
                                                        //para obtener los elementos que queremos a través del filtro, así siempre leeremos lo nuevos elementos

            var id_acta_instrumentos = $(this).attr('id_acta_instrumentos');
            var id_raiz_item = $(this).attr('id_raiz_item');


            console.log('id_acta_instrumentos: '+id_acta_instrumentos);
            console.log('id_raiz_item: '+id_raiz_item);

            var datos = {
                'id_acta_instrumentos' : id_acta_instrumentos,
                'id_raiz_item' : id_raiz_item
            }




            $.ajax({

                url : "<?=site_url('inventario_api/Api/cambio_eliminar') ?>",
                method : "put",
                data : datos

            }).done(function(response){

                if(response.status == 1){

                    alert('todo bien');

                    $('.'+id_raiz_item).remove();

                }else{

                    alert('todo mal');

                }

            }).fail(function(response){

                alert('todo mal2');

            });


        });


        $('.siguiente').on('click',function(){

            event.preventDefault();

            var tipo = $('.tipo').val();
            var instrumentos = $('.instrumentos').val();
            var codigos = $('.codigos').val();

            if(tipo && instrumentos && codigos){

                var alerta2 = confirm('¿Desea agregar el último dato seleccionado antes de salir?');

                if(alerta2){

                    alert('sí');

                    var datos2 = {

                    'codigo' : codigo_r,
                    'instrumento_id' : instrumento_id_r,
                    'acta_procedimiento_id' : acta_procedimiento_id_r,
                    'id_raiz_item' : id_raiz_item

                }


                console.log(datos2);

                    $.ajax({

                    url : "<?=site_url('enf_api/Api/actaInstrumentos');  ?>",
                    method : "post",
                    data : datos2

                }).done(function(response){

                    if(response.status == 1){

                        alert('todo bien');

                        window.location.replace('<?=site_url('enfermeria/Formulario3/index/');?>'+'<?=$acta_procedimientos_id; ?>');




                    }else{

                        alert('todo mal');

                        if(response.errors['id_raiz_item']){

                            alert(response.errors['id_raiz_item']);

                            reiniciarSelects();

                        }else{

                        }

                    }

                }).fail(function(response){

                    alert('todo mal2');

                    reiniciarSelects();

                });
                    
                }else{
                    alert('No');
                    window.location.replace('<?=site_url('enfermeria/Formulario3/index/');?>'+'<?=$acta_procedimientos_id; ?>');
                }



            }else{

                
                var alerta1 = confirm('¿Está seguro que desea continuar? \n No podrá eliminar los instrumentos agregados');

                if(alerta1){

                    alert('sí');

                    window.location.replace('<?=site_url('enfermeria/Formulario3/index/');?>'+'<?=$acta_procedimientos_id; ?>');
                    
                }else{
                    alert('No');
                }
            }

        });

       

        function reiniciarSelects(){

            instrumento_id_r = 0;
            codigo_r = "";
             extra_r = "";

            //$('.tipo').val($('.tipo > option:first').val());

            $('.instrumentos').val($('.instrumentos > option:first').val());
            //$('.instrumentos').prop('disabled',true);

            $('.codigos').remove();

        }

    });

</script>




</html>