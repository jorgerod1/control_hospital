<?php

defined('BASEPATH') OR exit('No direct script access allowed');

use RestServer\RestController;
require APPPATH . '/libraries/RestController.php';
require APPPATH . '/libraries/Format.php';


class Api extends RestController{

    function __construct(){
        parent:: __construct();

        $this->load->model('DAOenfermeria');
        $this->load->library('session');

    }

    function traerActasFecha_get($fecha){





        if ($fecha) {

            $filtro = array(
                "date(fecha)" => $fecha,
                "activo" => 1
            );

            $datos = $this->DAOenfermeria->seleccionar_entidad('acta_procedimientos',$filtro);

            $response = array(

                "status" => 200,
                "message" => "Datos traídos correctamente",
                "data" => $datos,
                "errors" => array()
            );

        } else {

              $response = array(

                "status" => 400,
                "message" => "Error al traer los datos",
                "data" => $fecha,
                "errors" => array()
            );

        }

        $this->response($response,200);
        

    }

    function traerActasFechaNoActivo_get($fecha){





        if ($fecha) {

            $filtro = array(
                "date(fecha)" => $fecha,
                "activo" => 0
            );

            $datos = $this->DAOenfermeria->seleccionar_entidad('acta_procedimientos',$filtro);

            $response = array(

                "status" => 200,
                "message" => "Datos traídos correctamente",
                "data" => $datos,
                "errors" => array()
            );

        } else {

              $response = array(

                "status" => 400,
                "message" => "Error al traer los datos",
                "data" => $fecha,
                "errors" => array()
            );

        }

        $this->response($response,200);
        

    }


}