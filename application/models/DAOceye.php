<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DAOceye extends CI_Model {

  
  function agregar_acta($datos){

    $this->db->insert('acta_ceye',$datos);
    return $this->db->insert_id();
    
  }

  function agregar_acta_instrumentos($datos){

    $this->db->insert('acta_instrumentos_ceye',$datos);
    return $this->db->insert_id();
  }


}



