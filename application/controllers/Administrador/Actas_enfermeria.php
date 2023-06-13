<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Actas_enfermeria extends CI_Controller {

	function __construct(){
		parent:: __construct();

		$this->load->library('session');
		$this->load->model('DAOenfermeria');
	}

	public function index()
	{
		

		

		if($this->session->userdata('rol') == 'Administrador'){

			$datos['mensaje'] = "";

			$this->load->view('admin/actas_enfermeria_page',$datos);

		}else{

			$datos['mensaje'] = "Debes iniciar sesión o tener el usuario correcto para esta sección";

			redirect('Login/index/1');

		}
	}


	public function table($id=null)
	{
		

		

		if($this->session->userdata('rol') == 'Administrador'){

			if ($id) {

				$datos['mensaje'] = "";

				$datos['acta_procedimientos'] = $this->DAOenfermeria->seleccionar_entidad('acta_procedimientos',array("id" => $id),true);
				$datos['acta_instrumentos'] = $this->DAOenfermeria->traer_acta_instrumentos($id);
				$datos['acta_ropa_qui'] = $this->DAOenfermeria->traer_acta_ropa_qui($id);
				$datos['usuario'] = $this->DAOenfermeria->seleccionar_entidad('usuarios',array("id" => $datos['acta_procedimientos']->usuario_id),true);


				$this->load->view('admin/actas_enfermeria_table_page',$datos);

			} else {
				redirect('Login/index/1');
			}
			

		}else{

			$datos['mensaje'] = "Debes iniciar sesión o tener el usuario correcto para esta sección";

			redirect('Login/index/1');

		}
	}

}
