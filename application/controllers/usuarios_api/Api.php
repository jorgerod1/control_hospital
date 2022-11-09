
<?php

defined('BASEPATH') OR exit('No direct script access allowed');

use RestServer\RestController;
require APPPATH . '/libraries/RestController.php';
require APPPATH . '/libraries/Format.php';


class Api extends RestController{


    function __construct(){
        parent:: __construct();
        $this->load->model('DAOusuarios');
        $this->load->library('session');
    }



    public function checkUsuario($data){   //esta funcion recibe una data que corresponde principalmente al usuario de la persona

        $respuesta = $this->DAOusuarios->traerEspecifico($data['usuario2']);  //pasamos el usuario para obtener la contraseña real 

        if($data['contrasena3'] == $respuesta->contra){ //comparamos si la contraseña real es igual que la que ha escrito el usuario

            return $respuesta;

        }else{    //si es correcto retornamos los mismos datos con una concepto de true, si no es verdad simplemente retornamos un false

            return false;

        }

   }



    function usuario_post(){

        $data = $this->form_validation->set_data($this->post());
        $this->form_validation->set_rules("usuario2","Usuario","required");
        $this->form_validation->set_rules("contrasena3","Contraseña","required");
        
        //$this->form_validation->set_rules("usuario2","Usuario","required|is_unique[usuarios.usuario]");
        
        $data = array(
            "usuario2" => $this->post('usuario2'),
            "contrasena3" => $this->post('contrasena3')
        );

        if($this->form_validation->run()){

        $this->form_validation->reset_validation();

        $this->form_validation->set_data($this->post());
        $this->form_validation->set_rules("usuario2","Usuario","trim|required|is_unique[usuarios.usuario]");

        if($this->form_validation->run() == false){

                $validado = $this->checkUsuario($data);

                if($validado){
                    $dataDashboard = array(
                        "usuario" => $validado->usuario,
                        "rol" => $validado->rol,
                        "is_logeado" => true
                    );

                    $response = array(
                        "status" => 201,
                        "status_text" => "success!",
                        "message" => "created!",
                        "results" => $dataDashboard,
                        "errors" => array()
                    );

                    $this->session->set_userdata($dataDashboard);
        
                $this->response($response,201);

                }else{

                    $response = array(
                        "status" => 200,
                        "status_text" => "contraIncorrecta",
                        "message" => "created!",
                        "results" => $data,
                        "errors" => $this->form_validation->error_array()
                        );
                        $this->response($response,200);
                }

        }else{

            $response = array(
                "status" => 200,
                "status_text" => "usuarioIncorrecto",
                "message" => "created!",
                "results" => $data,
                "errors" => $this->form_validation->error_array()
                );
                $this->response($response,200);
            }

        }else{
            $response = array(
                "status" => 200,
                "status_text" => "error!",
                "message" => "created!",
                "results" => $data,
                "errors" => $this->form_validation->error_array()
                );
                $this->response($response,200);

        }

    }
}