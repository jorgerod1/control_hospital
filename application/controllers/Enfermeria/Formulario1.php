<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Formulario1 extends CI_Controller {

	public function index()
	{
		
		$this->load->view('enfermeria/form1_page');
	}
	public function guardar_acta(){
		$data = array (
			"nombre_paciente" => $this->input->post('nombre_paciente'),
			"fecha_nacimiento" => $this->input->post('fecha_nacimiento'),
			"edad" => $this->input->post('edad'),
			"cirugia_pediatrica" => $this->input->post('cirugia_pediatrica'),
			"servicio" => $this->input->post('servicio'),
			"fecha" => $this->input->post('fecha'),
			"hora" => $this->input->post('hora'),
			"enfermera_quirurjica" => $this->input->post('enfermera_quirurjica'),
			"enfermera_circulante" => $this->input->post('enfermera_circulante'),
			"cirujano" => $this->input->post('cirujano'),
			"anestesiologo" => $this->input->post('anestesiologo'),
			"activo" => $this->input->post('activo'),
			"sala" => $this->input->post('sala'),
			"procedimiento_id" => $this->input->post('procedimiento_id')
		);
		$this->load->model('DAOenfermeria');
		$this->DAOenfermeria->registrar_procedimiento('acta_procedimientos',$data);
	}

}