<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Instrumentales extends CI_Controller {

	function __construct(){
		parent:: __construct();

		$this->load->library('session');
		$this->load->model('DAOinstrumentos');

	}

	public function index($id=null)
	{
		

		

		if($this->session->userdata('rol') == 'Administrador'){

			$data['tipo_instrumentos'] = $this->DAOinstrumentos->seleccionar_entidad('tipo_instrumentos');

			if (!$id) {

				$data['mensaje'] = "";

				$this->load->view('admin/instrumentales_page',$data);
				
			} else {

				if ($id == 11 || $id == 12 || $id == 14 || $id == 15) {

					$data['mensaje'] = "Tipo de dato no permitido";

					$this->load->view('admin/instrumentales_page',$data);

				} else {

					$filtro = array(
						"id" => $id
					);

					$validacion_id = $this->DAOinstrumentos->seleccionar_entidad('tipo_instrumentos',$filtro,true);

					if ($validacion_id) {


						$data2['instrumentos'] = $this->DAOinstrumentos->seleccionar_entidad('instrumentos',array("tipo_instrumento_id" => $id));

						$data2['tipo_id'] = $validacion_id;
						$data2['mensaje'] = "";
						$this->load->view('admin/instrumento_page',$data2);
						
					}else{

						$data['mensaje'] = "Tipo de dato no existente";

						$this->load->view('admin/instrumentales_page',$data);

					}
					
				}
				

				
				
			}
			

			

		}else{

			$datos['mensaje'] = "Debes iniciar sesión o tener el usuario correcto para esta sección";

			redirect('Login/index/1');

		}
	}

}