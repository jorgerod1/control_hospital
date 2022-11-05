<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TocoCirugia extends CI_Controller {

	public function index()
	{
		$this->load->view('enfermeria/toco_page');
	}

}