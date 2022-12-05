<?php

defined('BASEPATH') OR exit('No direct script access allowed');

use RestServer\RestController;
require APPPATH . '/libraries/RestController.php';
require APPPATH . '/libraries/Format.php';


class Api extends RestController {


    function __construct(){
        parent:: __construct();

        /*$this->load->model('DAOinventario');
        $this->load->model('DAOenfermeria');*/

        $this->load->model('DAOropa_qui');

    }



    /*function traer_items_get($instrumentos_id=null){

        if($instrumentos_id){

            $filtro = array(

                "instrumento_id" => $instrumentos_id,
                "activo" => 1

            );

            //$respuesta = $this->DAOinventario->seleccionar_entidad('inventario',$filtro);

            $respuesta2 = $this->DAOinventario->consulta_inventario_fecha($instrumentos_id);

            $response = array(
                "status" => 1,
                "message" => "Datos traidos correctamente de inventario",
                "data" => $respuesta2,
                "errors" => array()
            );

        }else{

            $response = array(
                "status" => 0,
                "message" => "Error 1 inventario",
                "data" => array(),
                "errors" => $this->form_validation->error_array()
            );

        }

        $this->response($response,200);

    }


    function cambio_eliminar_put(){

        

        $id_raiz_item = $this->put('id_raiz_item');
        $id_acta_instrumentos = $this->put('id_acta_instrumentos');

        //primera parte cambiamos el estado a activo a 1

        $activo = $this->DAOinventario->cambiar_activo1($id_raiz_item);


        //después eliminamos el acta_instrumentos que por ende ya no existe;

        $this->DAOenfermeria->eliminar_instrumentos($id_acta_instrumentos);


        if($activo){

            $response = array(
                "status" => 1,
                "message" => "Datos traidos correctamente ",
                "data" => $activo,
                "errors" => array()
            );

        }else{

            $response = array(
                "status" => 0,
                "message" => "Datos traidos incorrectamente ",
                "data" => array(),
                "errors" => array()
            );

        }

        $this->response($response,200);










    }*/



}