<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carga extends CI_Controller {

	function __construct(){
		parent:: __construct();

		$this->load->library('session');
		$this->load->model('DAOenfermeria');
	}

	public function index()
	{
		if($this->session->userdata('rol') == 'Ceye'){

			$this->load->view('ceye/nuevaCarga_page');

		}else{

			$datos['mensaje'] = "Debes iniciar sesión o tener el usuario correcto para esta sección";

			$this->load->view('login_page',$datos);

		}
	
		
	}

}