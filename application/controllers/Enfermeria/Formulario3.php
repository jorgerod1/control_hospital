<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Formulario3 extends CI_Controller {

	function __construct(){
		parent:: __construct();

		$this->load->library('session');
	}

	public function index($id=null)
	{

		if ($this->session->userdata('rol') == "Enfermera") {

			if($id){

				$data['acta_procedimientos_id'] = $id;

				
				$this->load->view('enfermeria/form3_page',$data);

			}else{

				$datos['mensaje'] = "No puedes acceder a esta sección";

				$this->load->view('enfermeria/cirugias_page',$datos);
				
			}

			;

		}else{

			

			redirect('Login/index/1');

		}

		
	}

}