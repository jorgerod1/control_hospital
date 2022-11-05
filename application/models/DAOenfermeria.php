<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DAOenfermeria extends CI_Model {
  
    function registrar_procedimiento($data){
        $this->db->insert('acta_procedimientos', $data);
    }
}
