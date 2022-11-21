<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Formulario2 extends CI_Controller {


	function __construct(){
		parent:: __construct();

		$this->load->library('session');
	}

	public function index($data=0)
	{

		if ($this->session->userdata('rol') == "Enfermera") {

			if($data==0){

				$datos['mensaje'] = "No puedes acceder a esta sección";

				$this->load->view('enfermeria/cirugias_page',$datos);

			}else{

				$datos['acta_procedimientos_id'] = $data;
				$this->load->view('enfermeria/form2_page',$datos);
			}

		}else{

			

				redirect('Login/index/1');

		}
		
	}

}