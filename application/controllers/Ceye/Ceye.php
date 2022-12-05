<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ceye extends CI_Controller {

	public function index()
	{
		$this->load->view('ceye/ceye_page');
	}

	//Este controlador también debe ser eliminado debido a que el controlador Login, ya cumple la función de este controlador
	//entonces este controlador resulta ser redundante y un riesgo de seguridad

}