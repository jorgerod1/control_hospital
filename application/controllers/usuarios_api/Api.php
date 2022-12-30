
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
                        "id" => $validado->id,
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

    function usuario_especifico_get($id){

        if($id){

            $datos = $this->DAOusuarios->traerEspecifico_id($id);

            $response = array(
                "status" => 1,
                "status_text" => "success!",
                "message" => "created!",
                "results" => $datos,
                "errors" => array()
            );

        }else{

            $response = array(
                "status" => 0,
                "status_text" => "error!",
                "message" => "error!",
                "results" => $id,
                "errors" => array()
            );

        }

        $this->response($response,200);
    }

    function actualizar_usuarios_put(){

        $this->form_validation->set_data($this->put());

        $this->form_validation->set_rules('nombre','Nombre','required');
        $this->form_validation->set_rules('apellidos','Apellidos','required');
        $this->form_validation->set_rules('rol','Rol','required');
        $this->form_validation->set_rules('contacto','Contacto','required');
        $this->form_validation->set_rules('contra','Contraseña','required');
        $this->form_validation->set_rules('usuario','Usuario','required');

        $validacion = $this->validar_usuario($this->put('usuario'), $this->put('id'));


        if ($this->form_validation->run() && $validacion) {

            $datos = array(

                "nombre" => $this->put('nombre'),
                "apellidos" => $this->put('apellidos'),
                "rol" => $this->put('rol'),
                "contacto" => $this->put('contacto'),
                "contra" => $this->put('contra'),
                "usuario" => $this->put('usuario')

            );

            $id_usuario = $this->put('id');

            $act_usuarios = $this->DAOusuarios->actualizar_usuarios($datos,$id_usuario);

            $response = array(
                "status" => 1,
                "status_text" => "success!",
                "message" => "created!",
                "results" => array(),
                "errors" => array(),
                "validacion" => $validacion
            );

        } else {

            $response = array(
                "status" => 0,
                "status_text" => "error!",
                "message" => "error!",
                "results" => array(),
                "errors" => $this->form_validation->error_array(),
                "validacion" => $validacion
            );

        }

        $this->response($response,200);
        

    }

    function validar_usuario($usuario,$id){

        $bandera = 1;

        $usuario_original = $this->DAOusuarios->traerEspecifico_id($id);

        $usuarios = $this->DAOusuarios->seleccionar_entidad('usuarios');

        foreach ($usuarios as $usuarios_individual) {

            if($usuarios_individual->usuario != $usuario || $usuarios_individual->usuario == $usuario_original->usuario){

            }else{
                $bandera=0;
            }
            
        }

        if ($bandera == 1) {
            return true;
        } else if($bandera==0){
            return false;
        }
        


       

    }

    function agregar_usuario_post(){

        $this->form_validation->set_data($this->post());

        $this->form_validation->set_rules('nombre','Nombre','required');
        $this->form_validation->set_rules('apellidos','Apellidos','required');
        $this->form_validation->set_rules('rol','Rol','required');
        $this->form_validation->set_rules('contacto','Contacto','required');
        $this->form_validation->set_rules('contra','Contraseña','required');
        $this->form_validation->set_rules('usuario','Usuario','required|is_unique[usuarios.usuario]',
            array("is_unique" => "El campo {field} no está disponible"));

 
        if ($this->form_validation->run()) {

            $datos = array(

                "nombre" => $this->post('nombre'),
                "apellidos" => $this->post('apellidos'),
                "rol" => $this->post('rol'),
                "contacto" => $this->post('contacto'),
                "contra" => $this->post('contra'),
                "usuario" => $this->post('usuario')

            );

            $nuevo_usuario_id = $this->DAOusuarios->agregar_usuario($datos);

            $response = array(
                "status" => 1,
                "status_text" => "created!",
                "message" => "success!",
                "results" => $datos,
                "errors" => $this->form_validation->error_array()
            );


        } else {

            $response = array(
                "status" => 0,
                "status_text" => "error!",
                "message" => "error!",
                "results" => array(),
                "errors" => $this->form_validation->error_array()
            );

        }
        
        $this->response($response,200);



    }

    function eliminar_usuario_delete($id){

        if($id){

            $datos = $this->DAOusuarios->eliminar_usuario($id);

            $response = array(
                "status" => 1,
                "status_text" => "success!",
                "message" => "created!",
                "results" => $datos,
                "errors" => array()
            );

        }else{

            $response = array(
                "status" => 0,
                "status_text" => "error!",
                "message" => "error!",
                "results" => $id,
                "errors" => array()
            );

        }

        $this->response($response,200);


    }
}