<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cirugias extends CI_Controller {

	public function index()
	{
		$this->load->view('enfermeria/cirugias_page');
	}

	//este controlador es redundante debido a nuestro controlador login
	//representa un peligro para la seguridad de acceso, debe ser eliminado.

}
