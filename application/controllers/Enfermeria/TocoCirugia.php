<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TocoCirugia extends CI_Controller {

	function __construct(){
		parent:: __construct();

		$this->load->library('session');
	
	}

	public function index()
	{

		

		if ($this->session->userdata('rol') == "Enfermera") { 


			$this->load->view('enfermeria/toco_page');

		}else{

			

			redirect('Login/index/1');

		}
	}

}