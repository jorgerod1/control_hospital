<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DAOinstrumentos extends CI_Model {
  
   /* function registrar_procedimiento($data){
        $this->db->insert('acta_procedimientos', $data);
        return $this->db->insert_id();
    }*/

  function seleccionar_entidad($entidad,      
        $filtro =  array(),    //aquí estamos pidiendo 3 parametros para hacer funcionar la funcion, en caso de los...
        $unico = FALSE){        // últimos dos, los tenemos ya inicializados en caso de que el usuario no mande esos parametros
      if($filtro){
        $this->db->where($filtro);            //si sólo se manda el primer parametro mandaremos sólo la línea 40 como resultado
                                            // si mandamos el segundo parametro definimos un filtro a través de la línea 38 del where
      }                                      // y el último parametros de true o false define si llevamos de regreso un array con varios resultados o solamente uno en especifico
      $query =  $this->db->get($entidad);
      if($unico){
        return $query->row();
      }else{
        return $query->result();
      }
  }

  function agregar_instrumento($datos){


    $this->db->insert('instrumentos',$datos);
    $result = $this->db->insert_id();
    return $result;
  }

  function eliminar_instrumento($id){
    $this->db->where('id',$id);
    $query = $this->db->delete('instrumentos');
    return $query;
  }

    function editar_instrumento($datos,$filtro){

      $this->db->where($filtro);
    
    $result = $this->db->update('instrumentos',$datos);
    return $result;
  }


}
