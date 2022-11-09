<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ceye extends CI_Controller {

	public function index()
	{
		$this->load->view('ceye/ceye_page');
	}

}