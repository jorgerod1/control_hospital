<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cargas extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/cargas_page');
	}

}