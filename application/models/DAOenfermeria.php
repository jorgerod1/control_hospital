<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DAOenfermeria extends CI_Model {
  
    function registrar_procedimiento($data){
        $this->db->insert('acta_procedimientos', $data);
        return $this->db->insert_id();
    }
 
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

  function registrar_instrumentos($data){
    $this->db->insert('acta_instrumentos', $data);
    return $this->db->insert_id();
  }

  function registrar_bulto($data){
    $this->db->insert('acta_ropa_qui', $data);
    return $this->db->insert_id();
  }

  function eliminar_instrumentos($id){



    $this->db->where('id',$id);
    $this->db->delete('acta_instrumentos');

    return $id;
  }

  function consulta_acta_instrumentos($filtro){

    $sql = "select acta_instrumentos.id, codigo, instrumento_id, acta_procedimiento_id , instrumentos.instrumentos
    from acta_instrumentos, instrumentos
    where instrumento_id = instrumentos.id and acta_procedimiento_id = ?";

    $query = $this->db->query($sql,array($filtro))->result();

    return $query;

  }

  
  function consulta_acta_ropa_qui($filtro){

    $sql = "select acta_ropa_qui.id, cantidad, ropa_qui_id, acta_procedimiento_id , ropa_qui.tipo_bulto
    from acta_ropa_qui, ropa_qui
    where ropa_qui_id = ropa_qui.id and acta_procedimiento_id = ?";

    $query = $this->db->query($sql,array($filtro))->result();

    return $query;

  }

  function actualizar_procedimientos($data){

    $data2 = array(
      "activo" => 1
    );

    $this->db->where($data);
    $this->db->update('acta_procedimientos',$data2);

    return $data;
  }
}
