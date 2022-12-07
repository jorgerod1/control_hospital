<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cargas extends CI_Controller {

	function __construct(){
		parent:: __construct();

		$this->load->library('session');
		$this->load->model('DAOceye');
	}

	public function index($id=null)
	{

		if ($this->session->userdata('rol') == "Administrador") {

			if($id){

				$data['acta_instrumentos_ceye_id'] = $id;

				$data['acta_ceye'] = $this->DAOceye->seleccionar_entidad('acta_ceye');

				 
				$this->load->view('administrador/cargas_page',$data);

			}else{

				$datos['mensaje'] = "No puedes acceder a esta sección";

				$this->load->view('administrador/cargas_page',$datos);
				
			}

			;

		}else{

			

			redirect('Login/index/1');

		}

		
	}

} 