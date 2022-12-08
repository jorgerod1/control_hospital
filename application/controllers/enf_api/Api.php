<?php

defined('BASEPATH') OR exit('No direct script access allowed');

use RestServer\RestController;
require APPPATH . '/libraries/RestController.php';
require APPPATH . '/libraries/Format.php';


class Api extends RestController {


    function __construct(){
        parent:: __construct();
        $this->load->model('DAOinventario');
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

    function actaInstrumentos_post(){

        $this->form_validation->set_data($this->post());

        $this->form_validation->set_rules('id_raiz_item', 'Item','required|callback_checar_activo');

        $this->form_validation->set_rules('instrumento_id','Instrumento','required|is_natural_no_zero');
        $this->form_validation->set_rules('codigo','Código','required');
        $this->form_validation->set_rules('acta_procedimiento_id','Acta de procedimientos','required|is_natural_no_zero');


        $data = array(
            "codigo" => $this->post('codigo'),
            "instrumento_id" => $this->post('instrumento_id'),
            "acta_procedimiento_id" => $this->post('acta_procedimiento_id')
        );

        $id_raiz_item = $this->post('id_raiz_item');


        if($this->form_validation->run()){

            $data['id_acta_instrumentos']  = $this->DAOenfermeria->registrar_instrumentos($data);// registramos el acta de instrumentos y metemos al array el id del acta generado

            //cambiamos a inactivo el item con el que se estaba interactuando "id_raiz_item"

            $this->DAOinventario->cambiar_activo($id_raiz_item); //linea que cambia estado activo del item del cual seleccionó el codigo

            $response = array(
                "status" => 1,
                "message" => "Datos guardados correctamente",
                "data" => $data,
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


    function checar_activo($id_raiz_item){

        $filtro = array(

            "id" => $id_raiz_item

        );

        $item = $this->DAOenfermeria->seleccionar_entidad('inventario',$filtro,true);


        if($item->activo == 1){


            return true;

        }else{


            $this->form_validation->set_message('checar_activo', 'El {field} ya no se encuentra disponible');
            return false;

        }

    }
}