<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


	function __construct(){
        parent:: __construct();
        
		$this->load->library('session');
		$this->load->model('DAOusuarios');

    }

	public function index($data=null)
	{

		$datos['mensaje'] = "";

		if($data==1){

			$datos['mensaje'] = "No puedes acceder a esta sección o tienes un usuario incorrecto";

		}

		if($data==2){

			$datos['mensaje'] = "Has cerrado sesión correctamente";

		}

		if($data==3){

			$datos['mensaje'] = "Datos guardados correctamente";

		}

		if($this->session->userdata('is_logeado')){

			if ($this->session->userdata('rol') == "Enfermera") {


				
				$this->load->view('enfermeria/cirugias_page',$datos);

			}else if($this->session->userdata('rol') == "Ceye"){
				
				$this->load->view('ceye/ceye_page',$datos);

			}else if($this->session->userdata('rol') == "Administrador"){

				$this->load->view('admin/admin_page',$datos);

			}

			
			

		}else{

			
			$this->load->view('Login_page',$datos);

			
		}

		
		
	}

		public function logout(){

		//$this->load->view('welcome_message');
		$indexes = array('usuario','rol','is_logeado','id');
		$this->session->unset_userdata($indexes);
		$this->session->sess_destroy();
		redirect('Login/index/2');

	}

}
