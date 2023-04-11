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

    function agregar_instrumento_post(){

        $this->form_validation->set_data($this->post());

        $this->form_validation->set_rules('instrumentos','Instrumentos','required|max_length[240]|min_length[2]',array(
            "max_length" => "Has revasado el número de caracteres",
            "min_length" => "El mínimo de caracteres debe ser mayor a 1",
        ));

        $this->form_validation->set_rules('caracteristicas','Características','max_length[400]');

        $this->form_validation->set_rules('tipo_instrumento_id', 'tipo_instrumento_id', 'required|is_natural');


        if ($this->form_validation->run()) {

            $datos = array(
                "instrumentos" => $this->post('instrumentos'),
                "caracteristicas" => $this->post('caracteristicas'),
                "tipo_instrumento_id" => $this->post('tipo_instrumento_id')

            );

            $datos['id_creado'] = $this->DAOinstrumentos->agregar_instrumento($datos);

            $response = array(

                "status" => 200,
                "message" => "Datos guardados correctamente",
                "data" => $datos,
                "errors" => array()
            );
            
        } else {

            $response = array(

                "status" => 400,
                "message" => "Validación de datos incorrecta",
                "data" => "",
                "errors" => $this->form_validation->error_array()
            );
            
        }

        $this->response($response,200);
        


    }

    function eliminar_instrumento_delete($id){

        if($id){

            $eliminado = $this->DAOinstrumentos->eliminar_instrumento($id);

            
            $response = array(

                "status" => 200,
                "message" => "Datos eliminado correctamente",
                "data" => $id,
                "errors" => array()
            );

        }else{

            $response = array(

                "status" => 400,
                "message" => "Validación de datos incorrecta",
                "data" => "",
                "errors" => $this->form_validation->error_array()
            );


        }

        $this->response($response,200);
    }

     function traer_un_instrumento_get($id=null){

        if($id){

            $filtro = array(
                "id" => $id
            );

            $datos = $this->DAOinstrumentos->seleccionar_entidad('instrumentos',$filtro,true);

            $response = array(

                "status" => 200,
                "message" => "Datos guardados correctamente",
                "data" => $datos,
                "errors" => array()
            );

        }else{

            $response = array(

                "status" => 400,
                "message" => "Datos guardados incorrectamente",
                "data" => array(),
                "errors" => $this->form_validation->error_array()
            );

        }

        $this->response($response,200);

        

    }

    function editar_instrumento_put(){

        $this->form_validation->set_data($this->put());

        $this->form_validation->set_rules('instrumentos_e','Instrumentos','required|max_length[240]|min_length[2]',array(
            "max_length" => "Has revasado el número de caracteres",
            "min_length" => "El mínimo de caracteres debe ser mayor a 1",
        ));

        $this->form_validation->set_rules('caracteristicas_e','Características','max_length[400]');

        $this->form_validation->set_rules('tipo_instrumento_id', 'tipo_instrumento_id', 'required|is_natural');


        if ($this->form_validation->run()) {

            $datos = array(
                "instrumentos" => $this->put('instrumentos_e'),
                "caracteristicas" => $this->put('caracteristicas_e'),
                "tipo_instrumento_id" => $this->put('tipo_instrumento_id')
                

            );

            $filtro = array(
                "id" => $this->put('id')
            );


            $datos['id_creado'] = $this->DAOinstrumentos->editar_instrumento($datos,$filtro);

            $response = array(

                "status" => 200,
                "message" => "Datos editados correctamente",
                "data" => $datos,
                "errors" => array()
            );
            
        } else {

            $response = array(

                "status" => 400,
                "message" => "Validación de datos incorrecta",
                "data" => "",
                "errors" => $this->form_validation->error_array()
            );
            
        }

        $this->response($response,200);
        


    }


}