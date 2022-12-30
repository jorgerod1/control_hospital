<?php

defined('BASEPATH') OR exit('No direct script access allowed');

use RestServer\RestController;
require APPPATH . '/libraries/RestController.php';
require APPPATH . '/libraries/Format.php';


class Api extends RestController {


    function __construct(){
        parent:: __construct();

        $this->load->model('DAOceye');
       
    }


    function agregar_acta_ceye_post(){

        $this->form_validation->set_data($this->post());

        $this->form_validation->set_rules('autoclave','Autoclave','required');
        $this->form_validation->set_rules('no_carga','No. Carga','required');
        $this->form_validation->set_rules('no_paquete','No. Paquete','required');
        $this->form_validation->set_rules('turno','Turno','required');
        $this->form_validation->set_rules('responsable','Responsable de carga','required');

        $datos = array(

            "autoclave" => $this->post('autoclave'),
            "no_carga" => $this->post('no_carga'),
            "no_paquete" => $this->post('no_paquete'),
            "turno" => $this->post('turno'),
            "responsable" => $this->post('responsable'),
            "usuario_id" => $this->post('usuario_id')

        );

        if($this->form_validation->run()){

            $datos['acta_ceye_id'] = $this->DAOceye->agregar_acta($datos);


            $response = array(

                "status" => 1,
                "message" => "Datos guardados correctamente",
                "data" => $datos,
                "errors" => array()

            );

        }else{

            $response = array(
                "status" => 0,
                "message" => "Error en validar los datos",
                "data" => $datos,
                "errors" => $this->form_validation->error_array()
            );

        }

        $this->response($response, 200);
        
        
    }

    function validar_datos_post(){

        $this->form_validation->set_data($this->post());

        $this->form_validation->set_rules('codigo','Código','required');
        $this->form_validation->set_rules('cantidad','Cantidad','required|integer|is_natural_no_zero',
         array('integer' => "El campo {field} debe contener sólo valores enteros",
        'is_natural_no_zero' => "El campo {field} debe contener valores positivos y diferentes a cero"));
        $this->form_validation->set_rules('instrumento_id','instrumento_id','required');
        $this->form_validation->set_rules('acta_ceye_id','acta_ceye_id','required');

        $datos = array(
            "codigo" => $this->post('codigo'),
            "cantidad" => $this->post('cantidad'),
            "instrumento_id" => $this->post('instrumento_id'),
            "acta_ceye_id" => $this->post('acta_ceye_id')

        );

        if($this->form_validation->run()){

            $response = array(

                "status" => 1,
                "message" => "Datos guardados correctamente",
                "data" => $datos,
                "errors" => array()

            );

        }else{

            $response = array(

                "status" => 0,
                "message" => "Validacion incorrecta",
                "data" => $datos,
                "errors" => $this->form_validation->error_array()

            );

        }

        $this->response($response,200);


    }


    function agregar_acta_ceye_instrumentos_post(){

        $this->form_validation->set_data($this->post());

        $this->form_validation->set_rules('codigo','Código','required');
        $this->form_validation->set_rules('cantidad','Cantidad','required');
        $this->form_validation->set_rules('instrumento_id','instrumento_id','required');
        $this->form_validation->set_rules('acta_ceye_id','acta_ceye_id','required');

        $datos = array(
            "codigo" => $this->post('codigo'),
            "cantidad" => $this->post('cantidad'),
            "instrumento_id" => $this->post('instrumento_id'),
            "acta_ceye_id" => $this->post('acta_ceye_id')

        );

        if($this->form_validation->run()){

            $datos['acta_instrumentos_ceye'] = $this->DAOceye->agregar_acta_instrumentos($datos);

            $response = array(

                "status" => 1,
                "message" => "Datos guardados correctamente",
                "data" => $datos,
                "errors" => array()

            );

        }else{

            $response = array(

                "status" => 0,
                "message" => "Datos NO guardados",
                "data" => $datos,
                "errors" => $this->form_validation->error_array()

            );

        }

        $this->response($response,200);
    }

    function finalizar_acta_put(){

        $id = $this->put('id');

        if ($id) {

            $id2 = $this->DAOceye->finalizar_acta($id);

            $response = array(

                "status" => 1,
                "message" => "Datos guardados correctamente",
                "data" => $id,
                "errors" => array()

            );

        } else {

            $response = array(

                "status" => 0,
                "message" => "Datos NO guardados",
                "data" => $id,
                "errors" => $this->form_validation->error_array()

            );

        }

        $this->response($response,200);
        
    }

    function datos_cargas_put(){

        $fecha = $this->put('fecha');

        if ($fecha) {

            $filtro = array(
                "fecha" => $fecha
            );

            $data = $this->DAOceye->seleccionar_entidad('acta_ceye',$filtro);

            $response = array(

                "status" => 1,
                "message" => "Datos guardados correctamente",
                "data" => $data,
                "errors" => array()

            );

        } else {

            $response = array(

                "status" => 0,
                "message" => "Datos NO guardados",
                "data" => $fecha,
                "errors" => $this->form_validation->error_array()

            );

        }

        $this->response($response,200);
        
    }

}