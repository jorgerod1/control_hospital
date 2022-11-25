<?php

defined('BASEPATH') OR exit('No direct script access allowed');

use RestServer\RestController;
require APPPATH . '/libraries/RestController.php';
require APPPATH . '/libraries/Format.php';


class Api extends RestController {


    function __construct(){
        parent:: __construct();
        $this->load->model('DAOinventario');
    }



    function traer_items_get($instrumentos_id=null){

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



}