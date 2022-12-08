<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cargas extends CI_Controller {

	function __construct(){
		parent:: __construct();

		$this->load->library('session');
		$this->load->model('DAOceye');
	}

	public function index()
	{

		if ($this->session->userdata('rol') == "Administrador") {

		

				

				$data['acta_ceye'] = $this->DAOceye->seleccionar_entidad('acta_ceye');

				 
				$this->load->view('admin/cargas_page',$data);


			

		}else{

			

			redirect('Login/index/1');

		}

		
	}

} 