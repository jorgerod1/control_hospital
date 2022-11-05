<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cirugias extends CI_Controller {

	public function index()
	{
		$this->load->view('enfermeria/cirugias_page');
	}

}
