<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Instrumentos extends CI_Controller {

	function __construct(){
		parent:: __construct();

		$this->load->library('session');
		$this->load->model('DAOenfermeria');
	}

	public function index($id=null)
	{

		if($this->session->userdata('rol') == 'Ceye'){

			if ($id) {

				$filtro = array(
					"acta_procedimiento_id" => $id
				);

				$datos['acta_instrumentos'] = $this->DAOenfermeria->consulta_acta_instrumentos($id);


				$this->load->view('ceye/instrumentos_page',$datos);

			} else {

				$datos['mensaje'] = "Acceso incorrecto";

				redirect('Login/index/1');
			}
			

			

		}else{

			$datos['mensaje'] = "Debes iniciar sesión o tener el usuario correcto para esta sección";

			redirect('Login/index/1');


		}
		
	}

} 