<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CargasTable extends CI_Controller {

	
	function __construct(){
		parent:: __construct();

		$this->load->library('session');
		$this->load->model('DAOceye');
	}

	public function index($id)
	{

		if ($this->session->userdata('rol') == "Administrador") {

			$filtro = array(
				"id" => $id
			);

			$filtro2 = array(

				"acta_ceye_id" => $id
			);

			$datos['acta_ceye'] = $this->DAOceye->seleccionar_entidad('acta_ceye',$filtro);

			$datos['acta_instrumentos_ceye'] = $this->DAOceye->consulta_instrumentos($id);
			

			 
			$this->load->view('admin/cargasTable_page',$datos);


		

		}else{

			

			redirect('Login/index/1');

		}
		
	}

} 