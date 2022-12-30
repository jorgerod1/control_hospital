<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventarios extends CI_Controller {

	 function __construct(){
		parent:: __construct();

		$this->load->library('session');
		$this->load->model('DAOinventario');
	}

	public function index()
	{

		if ($this->session->userdata('rol') == "Administrador") {

		
			$datos['inventario'] = $this->DAOinventario->consulta_inventario();
			 
			$this->load->view('admin/inventario_page',$datos);


		

		}else{

			

			redirect('Login/index/1');

		}
		
	}

}