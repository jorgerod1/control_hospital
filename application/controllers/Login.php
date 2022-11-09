<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


	function __construct(){
        parent:: __construct();
        
		$this->load->library('session');
		$this->load->model('DAOusuarios');

    }

	public function index()
	{

		if($this->session->userdata('is_logeado')){

			if ($this->session->userdata('rol') == "Enfermera") {
				
				$this->load->view('enfermeria/cirugias_page');

			}else if($this->session->userdata('rol') == "Ceye"){

			}else if($this->session->userdata('rol') == "Administrador"){

				$this->load->view('admin/admin_page');

			}

			
			

		}else{

			
			$this->load->view('Login_page');
		}

		
		
	}

		public function logout(){

		//$this->load->view('welcome_message');
		$indexes = array('usuario','rol','is_logeado');
		$this->session->unset_userdata($indexes);
		$this->session->sess_destroy();
		redirect('Login');

	}

}
