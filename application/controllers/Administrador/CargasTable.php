<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CargasTable extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/cargasTable_page');
	}

}