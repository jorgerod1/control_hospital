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

  function finalizar_acta($id)
  {

    $filtro = array(

    "activo" => 0

    );


    $this->db->where('id',$id);
    $this->db->update('acta_procedimientos',$filtro);

  }


  function consulta_instrumentos($id){

    $sql = "select acta_instrumentos_ceye.extra, acta_instrumentos_ceye.id, codigo, cantidad, instrumento_id, acta_ceye_id, instrumentos.id, instrumentos
    from acta_instrumentos_ceye, instrumentos
    where instrumento_id = instrumentos.id and acta_ceye_id = ?";

    $query = $this->db->query($sql,array($id))->result();

    return $query;
  }

  function consulta_inventario_fecha ($fecha){
    $sql = "select inventario.*, fecha
    from inventario, acta_instrumentos_ceye, acta_ceye
    where inventario.acta_instrumentos_ceye_id = acta_instrumentos_ceye.id and acta_ceye_id = acta_ceye.id and DATE(fecha) = ?";

    $query = $this->db->query($sql,array($fecha))->result();

    return $query;
  }


}



