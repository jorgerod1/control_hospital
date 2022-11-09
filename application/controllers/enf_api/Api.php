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

        $data = $this->form_validation->set_data($this->post());
        $this->form_validation->set_rules("nombre_paciente","Nombre del paciente","required");
        $this->form_validation->set_rules("fecha_nacimiento","Fecha de nacimiento","required");
        $this->form_validation->set_rules("edad","Edad","required");
        $this->form_validation->set_rules("cirugia_pediatrica","Cirugia pediatrica","required");
        $this->form_validation->set_rules("servicio","Servicio","required");
        $this->form_validation->set_rules("fecha","Fecha","required");
        $this->form_validation->set_rules("hora","Hora","required");
        $this->form_validation->set_rules("enfermera_quirurjica","Enfermera quirurgíca","required");
        $this->form_validation->set_rules("enfermera_circulante","Enferemera Circulante","required");
        $this->form_validation->set_rules("cirujano","Cirujano","required");
        $this->form_validation->set_rules("anestesiologo","Anestesiologo","required");
        $this->form_validation->set_rules("turno","Turno","required");
        $this->form_validation->set_rules("activo","Activo","required");
        $this->form_validation->set_rules("procedimiento_id","Procedimiento","required");

            $data = array(
                "nombre_paciente" => $this->post('nombre_paciente'),
                "fecha_nacimiento" => $this->post('fecha_nacimiento'),
                "edad" => $this->post('edad'),
                "cirugia_pediatrica" => $this->post('cirugia_pediatrica'),
                "servicio" => $this->post('servicio'),
                "fecha" => $this->post('fecha'),
                "hora" => $this->post('hora'),
                "enfermera_quirurjica" => $this->post('enfermera_quirurjica'),
                "enfermera_circulante" => $this->post('enfermera_circulante'),
                "cirujano" => $this->post('cirujano'),
                "anestesiologo" => $this->post('anestesiologo'),
                "turno" => $this->post('turno'),
                "activo" => $this->post('activo'),
                "procedimiento_id" => $this->post('procedimiento_id')
            );


            $respuesta = $this->DAO->insertar_modificar_entidad('acta_procedimientos',$data);

            if ($respuesta['status'] == '1') {
            $response = array(
                "status" => 1,
                "message" => "Datos guardados correctamente",
                "data" => array(),
                "errors" => array()
            );
            

          }else{
            $response = array(
                "status" => 0,
                "message" => "error al guardar",
                "data" => array(),
                "errors" => array(
                    "error" => $response['mensaje']
                )
            );
            }
            $this->response($response,200);

    }
}