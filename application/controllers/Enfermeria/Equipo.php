<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Equipo extends CI_Controller {

	public function index()
	{
		$this->load->view('enfermeria/equipo_page');
	}

}