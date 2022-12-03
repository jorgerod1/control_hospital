<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DAOinventario extends CI_Model {
  
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

  function consulta_inventario_fecha($instrumentos_id){

        $sql = "select inventario.id as inventarioOriginal, inventario.codigo, inventario.instrumento_id,
        inventario.activo,acta_instrumentos_ceye_id, inventario.extra,
        acta_instrumentos_ceye.id, acta_instrumentos_ceye.codigo, acta_ceye.id, 
        acta_ceye.fecha, acta_ceye.hora, instrumentos.instrumentos
        from inventario, acta_instrumentos_ceye, acta_ceye, instrumentos
        where inventario.instrumento_id = ? and inventario.activo = 1 and 
        inventario.acta_instrumentos_ceye_id  = acta_instrumentos_ceye.id and
        acta_instrumentos_ceye.acta_ceye_id = acta_ceye.id and inventario.instrumento_id = instrumentos.id";

        $query = $this->db->query($sql,array($instrumentos_id))->result();

        return $query;

  }


  function cambiar_activo($id_item_raiz){

    $filtro = array(

      "activo" => 0

    );
    
    $this->db->where('id',$id_item_raiz);
    $this->db->update('inventario',$filtro);
    

    return $id_item_raiz;

  }


  function cambiar_activo1($id_raiz_item){


    $filtro = array(

      "activo" => 1

    );


    $this->db->where('id',$id_raiz_item);
    $this->db->update('inventario',$filtro);


    return $id_raiz_item;

  }

  
}
