<?php

defined('BASEPATH') OR exit('No direct script access allowed');

use RestServer\RestController;
require APPPATH . '/libraries/RestController.php';
require APPPATH . '/libraries/Format.php';


class Api extends RestController {


    function __construct(){
        parent:: __construct();
        $this->load->model('DAOenfermeria');
    }

    function actaProcedimientos_post(){

        $this->form_validation->set_data($this->post());

        $this->form_validation->set_rules("nombre_paciente","Nombre del paciente","required");
        $this->form_validation->set_rules("fecha_nacimiento","Fecha de nacimiento","required");
        $this->form_validation->set_rules("edad","Edad","required|integer");
        $this->form_validation->set_rules("servicio","Servicio","required");
        $this->form_validation->set_rules("enfermera_quirurjica","Enfermera quirurgíca","required");
        $this->form_validation->set_rules("enfermera_circulante","Enferemera Circulante","required");
        $this->form_validation->set_rules("cirujano","Cirujano","required");
        $this->form_validation->set_rules("anestesiologo","Anestesiologo","required");
        $this->form_validation->set_rules("procedimiento_id","Procedimiento","required");
        $this->form_validation->set_rules("usuario_id","Usuario ID","required");

            $data = array(
                "nombre_paciente" => $this->post('nombre_paciente'),
                "fecha_nacimiento" => $this->post('fecha_nacimiento'),
                "edad" => $this->post('edad'),
                "servicio" => $this->post('servicio'),
                "enfermera_quirurjica" => $this->post('enfermera_quirurjica'),
                "enfermera_circulante" => $this->post('enfermera_circulante'),
                "cirujano" => $this->post('cirujano'),
                "anestesiologo" => $this->post('anestesiologo'),
                "procedimiento_id" => $this->post('procedimiento_id'),
                "usuario_id" => $this->post('usuario_id')
            );


            

            if ($this->form_validation->run()) {

                $respuesta = $this->DAOenfermeria->registrar_procedimiento($data);

            $response = array(
                "status" => 1,
                "message" => "Datos guardados correctamente",
                "data" => $respuesta,
                "errors" => array()
            );
            

          }else{
            $response = array(
                "status" => 0,
                "message" => "error al guardar",
                "data" => array(),
                "errors" => $this->form_validation->error_array()
                );
            }
            $this->response($response,200);

    }
}