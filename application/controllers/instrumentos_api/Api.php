<?php

defined('BASEPATH') OR exit('No direct script access allowed');

use RestServer\RestController;
require APPPATH . '/libraries/RestController.php';
require APPPATH . '/libraries/Format.php';


class Api extends RestController{

    function __construct(){
        parent:: __construct();

        $this->load->model('DAOinstrumentos');

    }

    function traer_instrumento_especifico_get($tipo_id=null){

        if($tipo_id){

            $filtro = array(
                "tipo_instrumento_id" => $tipo_id
            );

            $datos = $this->DAOinstrumentos->seleccionar_entidad('instrumentos',$filtro);

            $response = array(

                "status" => 1,
                "message" => "Datos guardados correctamente",
                "data" => $datos,
                "errors" => array()
            );

        }else{

            $response = array(

                "status" => 0,
                "message" => "Datos guardados incorrectamente",
                "data" => array(),
                "errors" => $this->form_validation->error_array()
            );

        }

        $this->response($response,200);

        

    }


}