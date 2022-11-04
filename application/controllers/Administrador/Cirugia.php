<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cirugia extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/adminCi_page');
	}

}