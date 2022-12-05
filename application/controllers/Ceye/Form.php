<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {

	function __construct(){

		parent:: __construct();
		$this->load->library('session');
		$this->load->model('DAOinstrumentos');

	}

	public function index($id=null)
	{

		if($this->session->userdata('rol') == 'Ceye'){

			if ($id) {

				$filtro= array(
					"id" => $id
				);

				$data['acta_ceye'] = $this->DAOinstrumentos->seleccionar_entidad('acta_ceye', $filtro, true);

				if($data['acta_ceye']){

					$data['tipo_instrumentos'] = $this->DAOinstrumentos->seleccionar_entidad('tipo_instrumentos');

					$data['codigo_trazabilidad'] = $this->generarCodigo($data['acta_ceye']);

				

					$this->load->view('ceye/formulario_page',$data);

				}else{

					redirect('Login/index/1');
				}

				

			}else{

				redirect('Login/index/1');

			}

			

		}else{

			redirect('Login/index/1');

		}
		
	}


	  private function generarCodigo($acta_ceye){

		//función encargada de crear el codigo de trazabilidad en automatica en base a los datos de acta_ceye que
		//nos trajimos a través de su id

		$codigo = $acta_ceye->autoclave;

		$fechas = explode('-',$acta_ceye->fecha);

		$año = $fechas[0];

		$año2 = $año[2];
		$año2 .= $año[3];

		$codigo .= $fechas[2];
		$codigo .= $fechas[1];
		$codigo .= $año2;

		$codigo .= $acta_ceye->no_carga;
		$codigo .= $acta_ceye->no_paquete;



		return $codigo;

		 
	}

}