<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Formulario2 extends CI_Controller {


	function __construct(){
		parent:: __construct();

		$this->load->library('session');
		$this->load->model('DAOinstrumentos');
	}

	public function index($data=0)
	{

		if ($this->session->userdata('rol') == "Enfermera") {

			if($data==0){

				$datos['mensaje'] = "No puedes acceder a esta sección";

				$this->load->view('enfermeria/cirugias_page',$datos);

			}else{

				$datos['acta_procedimientos_id'] = $data;

				$datos['tipo_instrumentos'] = $this->DAOinstrumentos->seleccionar_entidad('tipo_instrumentos');

				$this->load->view('enfermeria/form2_page',$datos);
			}

		}else{

			

				redirect('Login/index/1');

		}
		
	}
 
}