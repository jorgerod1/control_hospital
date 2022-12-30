<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	function __construct(){
		parent:: __construct();

		$this->load->library('session');
		$this->load->model('DAOusuarios');
	}

	public function index()
	{

		
		if($this->session->userdata('rol') == 'Administrador'){

			$datos['usuarios'] = $this->DAOusuarios->seleccionar_entidad('usuarios');

			$this->load->view('admin/adminUs_page',$datos);

		}else{

			$datos['mensaje'] = "Debes iniciar sesión o tener el usuario correcto para esta sección";

			redirect('Login/index/1');

		}
		
	}
 
}