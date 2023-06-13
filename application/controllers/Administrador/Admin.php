<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent:: __construct();

		$this->load->library('session');
	}

	public function index()
	{
		

		

		if($this->session->userdata('rol') == 'Administrador'){

			$datos['mensaje'] = "";

			$this->load->view('admin/admin_page',$datos);

		}else{

			$datos['mensaje'] = "Debes iniciar sesión o tener el usuario correcto para esta sección";

			redirect('Login/index/1');

		}
	}

}