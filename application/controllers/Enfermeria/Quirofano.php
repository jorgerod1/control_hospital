<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quirofano extends CI_Controller {


	function __construct(){
		parent:: __construct();

		$this->load->model('DAOenfermeria');
		$this->load->library('session');
		
	}

	public function index()
	{

		if ($this->session->userdata('rol') == "Enfermera") {
			$filtro = array(
				'cirugia_id' => 2
			);

			$data['procedimientos'] = $this->DAOenfermeria->seleccionar_entidad('procedimientos',$filtro,false);
			
			$this->load->view('enfermeria/form1_page',$data);

		}else{

			$datos['mensaje'] = "Debes iniciar sesión o tener el usuario correcto para esta sección";

			$this->load->view('login_page',$datos);
		}
	}

}